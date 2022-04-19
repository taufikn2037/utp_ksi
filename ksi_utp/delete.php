<?php 

include_once("koneksi.php");
 

$id = $_GET['id'];
 

$result = mysqli_query($conn, "DELETE FROM crud WHERE id=$id");
 

header("Location:admin.php");
 ?>