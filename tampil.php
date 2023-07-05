<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampil Data</title>
</head>
<body>
    <?php
   include "config.php";
    $select = "SELECT `pelajaran` FROM `alarm` WHERE id=1";
    $result = mysqli_query($db, $select);
    $row = mysqli_fetch_assoc($result);
    $pelajaran = $row['pelajaran'];
    echo  $pelajaran ;
    ?>
</body>
</html>