<?php

// $inputangka = 2;

var_dump($_POST['angka'][1]); die;

if(isset($_POST['angka'])) {
    for($i=0;$i<count($_POST['angka']);$i++) {
        if(intval($_POST['angka']) === 2) { 
            echo "ya input = 2 <br>";
        }else {
            echo "angka lain <br>";
        }
    }
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
    <form action="" method="POST">
        <input type="text" name="angka[]">
        <input type="text" name="angka[2]">     <!-- Inisialisai Array 2 dimensi -->
        <input type="submit" value="input">
    </form>
</body>
</html>

