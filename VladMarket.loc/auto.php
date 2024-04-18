<?php

$email=$_POST['email'];
$pass=$_POST['pass'];
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

	  $zapros="SELECT * FROM `regkl`";
	  $sql=mysqli_query($link, $zapros);


	while ($res=mysqli_fetch_array($sql)){
	    if($res['email']==$email && $pass==$res['pass'])
	    { 
	    	$otv=1; 
	    	break;
	    }
	    else {
	    	$otv=0;
	    }
	 }
	if($otv==1){
		echo "Вы авторизованны";
		echo "<script>setInterval(function(){
			window.location.href='lk.php?email=$email';
		}, 4000);
		</script>";
	}
	else
	{
		echo"Вы не авторизованны";
        echo"<script>setInterval(function()
        {window.location.href='regkl.php';
        },2000);</script>";
}


}

else
{ 
	       echo "Вы не прошли капчу, вы робот";
		   echo "<script>setInterval(function(){
				window.location.href='auto.php';
			}, 5000);
			</script>";
}


?>