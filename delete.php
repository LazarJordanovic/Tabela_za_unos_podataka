<?php 
require 'connection.php';
$id = $_GET['id'];
$sql ="DELETE FROM drustvo WHERE id= $id";

$query = mysqli_query($db,$sql);
header('Location: index.php');
?>