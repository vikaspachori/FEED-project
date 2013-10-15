<?php
session_start();
include('databaseconnect.php');
if(isset($_POST['submit']))
{
	
	$unm=$_POST['username'];
	$pwd=$_POST['passwd'];
	$q='select * from login where username="'.$unm.'" AND password="'.$pwd.'" ';
	$res=mysql_query($q) or die(mysql_error());
	$n=mysql_num_rows($res);
	$fetch = mysql_fetch_assoc($res);
	if($n>0)
	{
			$_SESSION['success']=true;
			$_SESSION['user']=$unm;
			echo 'you are here';
			if ( $fetch['type']=='auth')
			 {
			   echo 'authority';
			   header("location:authority.php");
			  }
			 else if ( $fetch['type']=='student')
			 {
			 	header("location:feed.php");
			 }
			     
		
			
	}
	else
	{
	
		$_SESSION['fail']=true;
		header('location:index.html');
	}

}

?>