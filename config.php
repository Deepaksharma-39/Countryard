<?php
function connectToDatabase() {
    $db_host = 'localhost';
    $db_user = 'root';
    $db_pass = '';
    $db_name = 'countryard';

    $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    return $conn;
}

function closeDatabaseConnection($conn) {
    mysqli_close($conn);
}

function getReservationOfficeDetails($conn) {
    $query = "SELECT * FROM reservation_office";
    $result = mysqli_query($conn, $query);

    $details = array();

    if ($row = mysqli_fetch_assoc($result)) {
        $details['addressline1'] = $row['addressline1'];
        $details['addressline2'] = $row['addressline2'];
        $details['city'] = $row['city'];
        $details['state'] = $row['state'];
        $details['pincode'] = $row['pincode'];
        $details['email'] = $row['email'];
        $details['phone_number1'] = $row['phone1'];
        $details['phone_number2'] = $row['phone2'];
        $details['phone_number3'] = $row['phone3'];
    }

    return $details;
}

function getResortDetails($conn) {
    $query = "SELECT * FROM resort_details";
    $result = mysqli_query($conn, $query);

    $details = array();

    if ($row = mysqli_fetch_assoc($result)) {
        $details['resort_email'] = $row['email'];
        $details['resort_phone_number1'] = $row['phone1'];
        $details['resort_phone_number2'] = $row['phone2'];
        $details['resort_phone_number3'] = $row['phone3'];
    }

    return $details;
}

function getRoomPrices($conn) {
    $tables = array(
        "countryard_suite",
        "presidential_suite",
        "leopards_lair",
        "deer_park",
        "tiger_den"
    );

    $prices = array();

    foreach ($tables as $table) {
        $query = "SELECT price_per_rooms FROM $table";
        $result = mysqli_query($conn, $query);

        if ($row = mysqli_fetch_assoc($result)) {
            $prices[$table] = $row['price_per_rooms'];
        }
    }

    return $prices;
}


function getPaginatedImageData($conn) {
    
    // Fetch image data from the database with pagination
    $sql = "SELECT id,filename, filepath FROM images";
    $result = $conn->query($sql);

    $imageData = array();
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $imageData[] = array(
                "id" => $row["id"],
                "src" => 'admin/' . $row["filepath"],
                "link" => 'admin/' . $row["filepath"]
            );
        }
    }

    return $imageData;
}

function getPaginatedEventData($conn) {
    
    // Fetch image data from the database with pagination
    $sql = "SELECT id,filename, filepath FROM events";
    $result = $conn->query($sql);

    $eventData = array();
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $imageData[] = array(
                "id" => $row["id"],
                "src" => 'admin/' . $row["filepath"],
                "link" => 'admin/' . $row["filepath"]
            );
        }
    }

    return $eventData;
}

function fetchReviewDetails($conn) {
    global $id, $name, $lastname, $email, $phone, $message;
    $query = "SELECT * FROM contact_form"; // Replace with your actual table name
    $message = mysqli_query($conn, $query);

}

function validate($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function getUserByUsername($conn, $username) {
    $stmt = $conn->prepare('SELECT id, username, password FROM user WHERE username = ?');
    $stmt->bind_param('s', $username);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();
    return $user;
}

function changePassword($conn, $username, $newPassword) {
    $password = password_hash($newPassword, PASSWORD_BCRYPT);

    $stmt = $conn->prepare("UPDATE user SET password = ? WHERE username = ? AND id = 1");
    $stmt->bind_param('ss', $password, $username);

    if ($stmt->execute()) {
        return "Password changed successfully!";
    } else {
        return "Password change failed. Please check your old password.";
    }

    $stmt->close();
}

function updateRoomDetails($conn, $suiteType, $updatedRooms, $updatedPrice) {
    $updateQuery = "UPDATE $suiteType SET total_rooms = $updatedRooms, price_per_rooms = $updatedPrice WHERE id = 1";
    $result = mysqli_query($conn, $updateQuery);

    if ($result) {
        return 'Data updated successfully';
    } else {
        return 'Failed to update data';
    }
}

?>
