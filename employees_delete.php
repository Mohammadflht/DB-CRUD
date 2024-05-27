<?php
require_once 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['delete_id'])) {
    $recordId = $_GET['delete_id'];

    // Execute the DELETE query
    $sql = "DELETE FROM employees WHERE code = $recordId";

    if ($conn->query($sql) === TRUE) {
        header("Location: employees_delete_success.php");   
        exit();
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}
?>