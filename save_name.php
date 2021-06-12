<?php 
require 'connection.php';
$name = $_POST['name'];
$zanimanje =$_POST['zanimanje'];
$sql = "INSERT INTO drustvo VALUES(NULL, '$name','$zanimanje')";
$query = mysqli_query($db,$sql);

if($query){
    header('Location: index.php');
}
?>