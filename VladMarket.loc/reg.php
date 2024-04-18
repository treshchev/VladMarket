<?php

$email=$_POST['email'];
$pass=$_POST['pass'];
$name=$_POST['name'];
$age=$_POST['age'];
$tel=$_POST['tel'];
$tip=$_POST['tip'];
$kapcha=$_POST['kapcha'];
$id=$_POST['id'];

$otv=0;

include_once("setup.php");




$zapros7="SELECT * FROM `kapcha` WHERE `id`=$id"; 
$sql7=mysqli_query($link , $zapros7);
$res=mysqli_fetch_array($sql7);

if ($kapcha==$res['word']) 
{
	echo "Вы прошли капчу! ";
	if ($tip == "kli")
{
	  $zapros="SELECT * FROM `regkl`";
	$sql=mysqli_query($link, $zapros);


	while ($res=mysqli_fetch_array($sql)){
	    if($res['email']==$email)
	    { 
	    	$otv=1; 
	    	break;
	    }
	    else {
	    	$otv=0;
	    }
	 }
	if($otv){
		echo "Такой пользователь зарегистрирован ";
		echo "<script>setInterval(function(){
			window.location.href='regkl.php';
		}, 4000);
		</script>";
	}
	else
	{
		$zapros1="INSERT INTO `regkl` (`name` , `email` , `pass` , `age` , `tel`)
		VALUES ('$name' , '$email' , '$pass' , $age , '$tel')";

		$sql1 = mysqli_query($link , $zapros1);

		if ($sql){
			echo "Вы зарегистрированны ";
			echo "<script>setInterval(function(){
				window.location.href='vhod.php';
			}, 4000);
			</script>";
		}
		else{
			echo "Ошибка, вы не зарегистрированны ";
			echo "<script>setInterval(function(){
				window.location.href='regkl.php';
			}, 4000);
			</script>";

		}
}

}
else if($tip == "isp")
{
	$zapros2="SELECT * FROM `regis`";
	$sql2=mysqli_query($link, $zapros2);


	while ($res=mysqli_fetch_array($sql2)){
	    if($res['email']==$email)
	    { 
	    	$otv=1; 
	    	break;
	    }
	    else {
	    	$otv=0;
	    }
	 }
	if($otv){
		echo "Такой пользователь зарегистрирован ";
		echo "<script>setInterval(function(){
			window.location.href='regkl.php';
		}, 4000);
		</script>";
	}
	else
	{
		$zapros12="INSERT INTO `regis` (`name` , `email` , `pass` , `age` , `tel`)
		VALUES ('$name' , '$email' , '$pass' , $age , '$tel')";

		$sql12 = mysqli_query($link , $zapros12);

		if ($sql12){
			echo "Вы зарегистрированны ";
			echo "<script>setInterval(function(){
				window.location.href='vhod.php';
			}, 4000);
			</script>";
		}
		else{
			echo "Ошибка, вы не зарегистрированны ";
			echo "<script>setInterval(function(){
				window.location.href='regkl.php';
			}, 4000);
			</script>";


		}

}
}
}

else
{ 
	       echo "Вы не прошли капчу, вы робот";
		echo "<script>setInterval(function(){
				window.location.href='regkl.php';
			}, 5000);
			</script>";
}


?>