<?php
include "config/database.php";
if(isset($_POST['id'])){
    $id = $_POST['id'];
    $query = mysqli_query($db,"UPDATE is_siswa SET status = 1 WHERE id='$id'");
    if($query){
        header("location:index.php?alert=5");
    }
}
?>