<?php
$email=$_POST['email'];
$idtov=$_POST['idtov'];
$id=$_POST['id'];


include("setup.php");
$zapros="SELECT * FROM `klient` WHERE `email`='$email'";
$sql=mysqli_query($link, $zapros);
$res=mysqli_fetch_array($sql);

$zapros1="SELECT * FROM `zakaz` WHERE `idtov`=$idtov";
$sql1=mysqli_query($link, $zapros1);
$res1=mysqli_fetch_array($sql1);


$otv=0;

      if($res['balans']>=$res1['price']){
      	$otv=1; 


      }
  else{
      	$otv=0;
      }
      

if($otv==1){
       $momo=(int)$res['balans']-(int)$res1['price'];

       $zapros2="UPDATE `klient` SET `balans`=$momo WHERE `email`='$email'";
	   $sql2=mysqli_query($link, $zapros2);
	   $zapros3="UPDATE `zakaz` SET `status`='делается, оплачено' WHERE `id`=$id";
		$sql3=mysqli_query($link, $zapros3);
	
	echo "оплачено!";
      echo "<script>setInterval(function(){window.location.href='korzina.php?email=$email';},3000);</script>";
}

	else{
		echo "не хватает денежных средств";
	echo "<script>setInterval(function(){window.location.href='korzina.php?email=$email';},3000);</script>";
	}



?>