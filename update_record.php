<?php 
require 'connection.php';
$name = $_POST['name'];
$zanimanje = $_POST['zanimanje'];
$id = $_POST['id'];
$sql = "UPDATE drustvo SET name='$name', zanimanje='$zanimanje' WHERE id='$id'";
$query = mysqli_query($db,$sql);
header('Location: index.php');
?>