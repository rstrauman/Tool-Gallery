<?php 
include 'db_config.php';

if (isset($_POST['name'])) {
    $name = $_POST['name'];
    $category = $_POST['category'];
    $owner_name = $_POST['owner_name'];
    $availability = $_POST['availability'];

    $stmt = $conn->prepare("INSERT INTO TOOLS (name, category, owner_name, is_available) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $category, $owner_name, $availability);

    if ($stmt->execute()) {
        echo "Data saved successfully! <a href='index.php'>Home</a>";
    } else {
        echo "Error: ", $stmt->error;
    }
    $stmt->close();
    $conn->close();
}
?>