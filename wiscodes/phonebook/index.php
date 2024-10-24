<?php
include 'db.php';

$sql = "SELECT * FROM contacts";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Phonebook</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h2>Phonebook Contacts</h2>
    <table border="1">
        <tr>
            <th>Name</th>
            <th>Phone</th>
            <th>Action</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['phone'] . "</td>";
                echo "<td><a href='delete.php?id=" . $row['id'] . "'>Delete</a></td>";
                echo "<td><a href='edit.php?id=" . $row['id'] . "'>Edit</a></td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='3'>No contacts found.</td></tr>";
        }
        ?>
    </table>
    <br>
    <a href="add.php">Add New Contact</a>
</body>
</html>
