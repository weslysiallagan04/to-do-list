<?php

$mysqli = mysqli_connect("localhost","root","","to_do_list");


$sql = "SELECT id, act_name FROM act_list";
$result = mysqli_query($mysqli,$sql);


// Associative array
$row = mysqli_fetch_all($result);

// Free result set
mysqli_free_result($result);
mysqli_close($mysqli);

// var_dump($_POST['delete_btn']); die;
    if(isset($_POST['delete_btn'])) {
        $mysqli = mysqli_connect("localhost","root","","to_do_list");
        $id_act = $_POST['id_act'];
        $sql = "DELETE FROM act_list WHERE id = ".$id_act;
        $result = mysqli_query($mysqli,$sql);
       
        // var_dump($result); die;
        mysqli_close($mysqli);
        if($result) {
            header("Location: home");
        }
    }
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To Do List App</title>
</head>
<body>
    <b>TO DO LIST</b>
    <table>
        <?php for($i=0;$i<count($row);$i++) { ?>
        <tr>
            <td>
                <?= $i+1 ?>.
            </td>
            <td>
                <?= $row[$i][1] ?>
            </td>
            <td>
                <form method="POST" action="">
                    <input type="hidden" value="<?= $row[$i][0] ?>" name="id_act">
                    <input type="submit" value="delete" name="delete_btn">
                </form>
            </td>
        </tr>
        <?php } ?>
    </table>

</body>
</html>