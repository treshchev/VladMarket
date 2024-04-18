<?php 
$popol=$_POST['popol'];
$email=$_POST['email'];
$id=$_POST['id'];

include('setup.php');
$zapros1="SELECT * FROM `regkl` WHERE `email` = '$email'";
$sql1=mysqli_query($link, $zapros1);
$res=mysqli_fetch_array($sql1);
$bal=$res['bal'];


$momo = (int)$bal + (int)$popol;

$zapros="UPDATE `regkl` SET `bal`=$momo WHERE `email`='$email'";
$sql=mysqli_query($link, $zapros);


if($sql){
    	echo "Успешно пополненно!";
	   echo "<script>setInterval(function(){window.location.href='korzina.php?email=$email&id=$id';},3000);</script>";
    }
    else{
    	echo "Что-то пошло не так, не пополненно";
    	echo "<script>setInterval(function(){window.location.href='korzina.php?email=$email&id=$id';},3000);</script>";
    }
          


?>