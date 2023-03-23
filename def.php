<?php
include("connection.php");
echo $q="delete from fruit_table where fruit_id=".$_GET['fruitid'];
$res=mysqli_query($con,$q);
header("location:viewf.php");

?>