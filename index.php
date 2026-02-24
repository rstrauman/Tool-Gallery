<?php include 'db_config.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="./styles/style.css" media="all">
</head>
<body>
    <header>
        <h2>Tool Gallery</h2>
    </header>
    <main>
        <div class="card-container">
                <?php
                    $sql = "SELECT * FROM Tools ORDER BY id";
                    $result = mysqli_query($conn, $sql);
                    if ($result && mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {

                        $color = ($row['is_available'] == 1) ? "Green" : "Red";
                        $status = ($row['is_available'] == 1) ? "Available" : "Unavailable";

                            echo "
                            <div class='card-info'>
                                <h4>ID: ".$row['id']."</h4>
                                <p>Name: ".$row['name']."</p>
                                <p>Category: ".$row['category']."<p>
                                <p>Owner: ".$row['owner_name']."</p>
                                <p>Availability: <span style='color: $color'>".$status."</span></p> 
                            </div>
                            ";
                        }
                    } else {
                        echo "
                            <p>No Data found</p>
                        ";
                    }
                ?>
        </div>    
        <a class="add-tool" href="add-tool.php">Add a Tool</a>
    </main>
</body>
</html>