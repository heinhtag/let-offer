<?php
require('./confs/config.php');

$sql = "SELECT * FROM users;";

$result = mysqli_query($conn, $sql);

$rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cat List</title>
</head>

<body>
    <div class="container">
        <button><a href="index.php">Home</a></button><br><br>
        <?php foreach ($rows as $row) : ?>
            <ul>
                <li><?php echo $row['name']; ?></li>
                <!-- <button><a href="cat-edit.php?id=<?php echo $row['id']; ?>">Edit</a></button><br><br>
                <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
                    <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>">
                    <input type="submit" value="Delete" class="" name="submit">
                </form> -->
            </ul>
        <?php endforeach ?>
    </div>
</body>

</html>