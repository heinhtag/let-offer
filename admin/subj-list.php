<?php
require('./confs/config.php');

//get subject date from database
$sql = "SELECT * FROM subjects INNER JOIN categories ON subjects.category_id = categories.id AND subjects.category_id = {$_GET['id']};";

if ($result = mysqli_query($conn, $sql)) {
    $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subject</title>
    <style type="text/css">
        .profile {
            width: 180px;
            height: auto;
        }

        img {
            width: 180px;
            height: auto;
        }
    </style>
</head>

<body>
    <div class="container">
        <?php foreach ($rows as $row) : ?>
            <div class="cover">
                <img src="images/<?php echo $row['cover']; ?>"><br><br>
            </div>
            <h3><?php echo $row['subj_name']; ?></h3><br>
            <p><?php echo $row['subj_description']; ?></p>
        <?php endforeach; ?>
    </div>
</body>

</html>