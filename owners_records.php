<?php require_once 'navigation.php'; ?>

<?php
require_once 'db.php';

// Fetch records from the database
$sql = "SELECT * FROM owners";
$result = $conn->query($sql);

// Check if there are any records
if ($result->num_rows > 0) {
    // Start building the HTML table
    $tableHTML = '<table>
    <thead>
    <tr>
    <th>National Code</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Father Name</th>
    <th>city</th>
    <th>Phone</th>
    <th>Work City</th>
    <th>Work Tell</th>
    <th>Action</th>
    </tr>
    </thead>
    <tbody>';
    
    // Loop through each record and add it to the table
    while ($row = $result->fetch_assoc()) {
        $tableHTML .= '<tr>
        <td>' . $row['code'] . '</td>
        <td>' . $row['firstName'] . '</td>
        <td>' . $row['lastName'] . '</td>
        <td>' . $row['fatherName'] . '</td>
        <td>' . $row['city'] . '</td>
        <td>' . $row['phoneNumber'] . '</td>
        <td>' . $row['workAddress'] . '</td>
        <td>' . $row['workTell'] . '</td>
        <td>
        <a href="owners_delete.php?delete_id=' . $row['code'] . '" title="Delete"><i class="fas fa-trash-alt"></i></a>
        </td>
        </tr>';
    }
    
    // Close the table HTML
    $tableHTML .= '</tbody></table>';
    
    // Output the table HTML
    echo $tableHTML;
} else {
    echo "No records found.";
}

// Close the database connection
$conn->close();
?>
<html>
    <head>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
        <link rel="icon" href="/assets/insurance.png" type="image/x-icon">
    </head>
    </html>
    