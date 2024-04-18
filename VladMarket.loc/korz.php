<?php
$kolvo=$_POST['kolvo'];
$email=$_POST['email'];
$id=$_POST['id'];
$name=$_POST['name'];
$price=$_POST['price'];
$photo=$_POST['photo'];

include("setup.php");
$zapros="SELECT * FROM `tovar` WHERE `id`=$id";
$sql=mysqli_query($link, $zapros);
$res=mysqli_fetch_array($sql);




if($kolvo>=1){
  $summa=$price * $kolvo;
}

else{
    $summa==$price;
}


$zapros1="INSERT INTO `zakaz`(`email`, `name`, `photo`, `idtov`, `price`, `kolvo`) VALUES ('$email','$name', '$photo', $id, $summa, $kolvo)";
$sql1=mysqli_query($link, $zapros1);
	
	if($sql){
		$zapros2="UPDATE `zakaz` SET `status`='делается' WHERE `id`=$id";
		$sql2=mysqli_query($link, $zapros2);
	echo "товар добавлен в кoрзину";
	echo "<script>setInterval(function(){window.location.href='lk.php?email=$email';},3000);</script>";
}
 else{
 	echo "товар не добавлен в кoрзину";
	echo "<script>setInterval(function(){window.location.href='lk.php?email=$email';},3000);</script>";
 }
 
?>