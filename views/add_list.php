<?php

    if(isset($_POST['act_name'])) {
        $mysqli = mysqli_connect("localhost","root","","to_do_list");
        $nama_keg = $_POST['act_name'];
        $sql = "INSERT INTO act_list(act_name) VALUES ('$nama_keg')";
        $result = mysqli_query($mysqli,$sql);
        mysqli_close($mysqli);
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="">
        <p>Add List</p>
        <input type="text" name="act_name"> <br> Nama Kegiatan
        <br>
        <input type="submit">
    </form>
</body>
</html>