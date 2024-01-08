<?php
// Check if the form is submitted

require "auth_check.php";
include '../config.php';

if (isset($_POST['eventUpload'])) {
    $conn = connectToDatabase();

  
    // Upload directory
    $uploadDir = 'events/';

    // Validate uploaded files (images and videos)
    $validMediaTypes = ['image/jpeg', 'image/png', 'image/gif', 'video/mp4', 'video/mov'];
    $uploadedFiles = $_FILES['media']['tmp_name'];
    $filenames = $_FILES['media']['name'];
    $totalUploaded = count($uploadedFiles);
    $uploadSuccessCount = 0;

    for ($i = 0; $i < $totalUploaded; $i++) {
        if (in_array($_FILES['media']['type'][$i], $validMediaTypes)) {
            $uploadedFile = $uploadedFiles[$i];
            $filename = $filenames[$i];
    
            // Generate a unique filename
            $uniqueFilename = uniqid() . '_' . $filename;
    
            // Move the uploaded file to the upload directory
            if (!file_exists($uploadDir)) {
                mkdir($uploadDir, 0755, true); // More secure permissions
            }
            $targetPath = $uploadDir . $uniqueFilename;
    
            // Compress and save the image (for JPEG and PNG only)
            if ($_FILES['media']['type'][$i] === 'image/jpeg') {
                $quality = 30; // Adjust the quality as needed
                $sourceImage = imagecreatefromjpeg($uploadedFile);
                imagejpeg($sourceImage, $targetPath, $quality);
            } elseif ($_FILES['media']['type'][$i] === 'image/png') {
                $compressionLevel = 6; // Adjust the compression level as needed
                $sourceImage = imagecreatefrompng($uploadedFile);
                imagepng($sourceImage, $targetPath, $compressionLevel);
            } else {
                // For other file types, just move the file without compression
                if (move_uploaded_file($uploadedFile, $targetPath)) {
                    // Use prepared statements to prevent SQL injection
                    $sql = "INSERT INTO events (filename, filepath) VALUES (?, ?)";
                    $stmt = $conn->prepare($sql);
                    $stmt->bind_param("ss", $filename, $targetPath);
    
                    if ($stmt->execute()) {
                        $uploadSuccessCount++;
                    } else {
                        echo "Error: " . $stmt->error;
                    }
    
                    $stmt->close();
                } else {
                    echo "Error uploading the media.";
                }
                continue; // Skip the rest of the loop for non-image files
            }
    
            // Use prepared statements to prevent SQL injection
            $sql = "INSERT INTO events (filename, filepath) VALUES (?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("ss", $filename, $targetPath);
    
            if ($stmt->execute()) {
                $uploadSuccessCount++;
            } else {
                echo "Error: " . $stmt->error;
            }
    
            $stmt->close();
        }
        else {
            echo "Error uploading the media.";
        }
    } 
        
    

        // Close the database connection
        closeDatabaseConnection($conn);

        // // Provide feedback on successful uploads
        // echo "{$uploadSuccessCount} images uploaded and information stored in the database.";
    
}
?>

<script>
var uploadSuccessCount = <?php echo $uploadSuccessCount; ?>;

// Display an alert
window.alert(uploadSuccessCount + " images uploaded and information stored in the database.");

// Redirect to another page after a delay (for example, after 3 seconds)
setTimeout(function() {
    window.location.href = "gallery.php"; // Replace with your desired URL
}, 1000); // Delay in milliseconds (1 seconds in this example)
</script>