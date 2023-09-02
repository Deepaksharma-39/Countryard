<?php
session_start();

// Generate a random math expression for the captcha
$firstNumber = rand(1, 10);
$secondNumber = rand(1, 10);
$operator = ['+', '-', '*'][rand(0, 2)];
$captchaExpression = "$firstNumber $operator $secondNumber";

// Calculate the expected result
$expectedResult = eval("return $firstNumber $operator $secondNumber;");

// Store the expected result in a session variable
$_SESSION['captcha_result'] = $expectedResult;

// Process form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $userInput = $_POST['verify_contact'];

    // Compare user input with expected result
    if ($userInput == $_SESSION['captcha_result']) {
        // Captcha solved correctly
        // Continue with form processing
    } else {
        // Captcha incorrect
        // Display an error message or take appropriate action
    }
}
?>
