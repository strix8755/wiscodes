<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $phone = $_POST['phone'];

    if (!empty($name) && !empty($phone)) {
        $sql = "INSERT INTO contacts (name, phone) VALUES ('$name', '$phone')";

        if ($conn->query($sql) === TRUE) {
            echo "New contact added successfully!";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "Please fill in all fields.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Contact</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h2>Add a New Contact</h2>
        <form method="post" action="add.php">
        Name: <input type="text" name="name"><br><br>
        Phone: <input type="text" name="phone"><br><br>
        <input type="submit" value="Add Contact">
    </form>
    <a href="index.php">Back to Phonebook</a>
</body>
</html>
