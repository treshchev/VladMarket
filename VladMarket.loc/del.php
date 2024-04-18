<?php 
$id=$_GET['id'];
$email=$_GET['email'];

include("setup.php");
$zapros="DELETE FROM `zakaz` WHERE `id`=$id";
$sql=mysqli_query($link, $zapros);

if($sql){
	echo "товар удален";
	echo "<script>setInterval(function(){window.location.href='korzina.php?email=$email';},3000);</script>";
}

else{
	echo "что-то пошло не так";
	echo "<script>setInterval(function(){window.location.href='korzina.php?email=$email';},3000);</script>";
}


?>