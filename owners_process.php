<!-- process.php -->
<?php
require_once 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if form submitted is for create, update or delete
    if (isset($_POST['save'])) {
        // Create operation
        $code = strtoupper($_POST['code']);
        $firstName = strtoupper($_POST['firstName']);
        $lastName = strtoupper($_POST['lastName']);
        $fatherName = strtoupper($_POST['fatherName']);
        $address = strtoupper($_POST['address']);
        $phoneNumber = strtoupper($_POST['phoneNumber']);
        $workAddress = strtoupper($_POST['workAddress']);
        $workTell = strtoupper($_POST['workTell']);

        $sql = "INSERT INTO owners (code, firstName, lastName, fatherName, city, phoneNumber, workAddress, workTell) VALUES ('$code', '$firstName', '$lastName', '$fatherName', '$address', '$phoneNumber', '$workAddress', '$workTell')";

        if ($conn->query($sql) === TRUE) {
            header("Location: owners_save_success.php");
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}
?>