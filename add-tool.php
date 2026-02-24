<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Tool</title>
</head>
<body>
    <header>
        <h2>Add a New Tool</h2>
    </header>
    <h3>Tool Info</h3>
    <form action="process.php" method="POST">
        <input type="text" name="name" placeholder="Enter name of Tool" required><br></br>
        <input type="text" name="category" placeholder="Enter the cateogry of the tool"><br></br>
        <input type="text" name="owner_name" placeholder="Enter Owner of Tool's name" required><br></br>
        <label for="availability">Availability:</label>
        <select name="availability" id="availability">
            <option value="0">Unavailable</option>
            <option value="1">Availabile</option>
        </select>
        <button type="submit" name="submit">Add Tool</button>
    </form>
    <br>
    <a href="view.php">View All Submissions</a>
</body>
</html>