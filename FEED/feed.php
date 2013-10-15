<?php
 session_start();
  include('databaseconnect.php');
  if(isset($_POST['submit']))
   {
     $unm = $_SESSION['user'];
	  $pos = $_POST['positive'];
	  $neg = $_POST['negative'];
	  $other = $_POST['other'];
	  $ch = $_POST['choice'];
	  echo $unm;
	if ($ch=='hospital')
	   header("location:hospitalfeed.php");
	else if($ch == 'security') 
	  echo '<h1>'." SECURITY page is under maintaince ! Sorry for inncovineince".'</h1>';
	  //header("location:securityfeed.php");
	else if($ch == "construction")
   		 echo '<h1>'." CONSTRUCTION page is under maintaince ! Sorry for inncovineince".'</h1>';
		 //header("location:constructfeed.php");
	  }
?>
<html>
<body>
<link href="css/style2.css" rel="stylesheet" type="text/css" />
<div id="wrapper">

	<!--SLIDE-IN ICONS-->
    <div class="user-icon"></div>
    <div class="pass-icon"></div>
    <!--END SLIDE-IN ICONS-->

<!--LOGIN FORM-->
<form name="login-form" class="login-form" action="feed.php" method="post">

	<!--HEADER-->
    <div class="header">
    <!--TITLE--><h1>FEED-feedback and idea</h1><!--END TITLE-->
    <!--DESCRIPTION--><span><b>FEED to express your IDEAS and FEEDbacks</b></span><!--END DESCRIPTION-->
    </div>
    <!--END HEADER-->
	
	<!--CONTENT-->
    <div class="content">
	<input type="radio" name='choice' value="hospital">hospital&nbsp;
	<input type="radio" name='choice' value="security">security&nbsp;
	<input type="radio" name='choice' value="construction">construction&nbsp;
	
	<!--USERNAME--><textarea name="positive" cols="50" rows="10" >positive</textarea> <!--END USERNAME-->
    <!--PASSWORD--><textarea name="negative" cols="50" rows="10">negative</textarea><!--END PASSWORD-->
     				<textarea name="other" cols="50" rows="10"> Others</textarea>
    </div>
    <!--END CONTENT-->
    
    <!--FOOTER-->
    <div class="footer">
    <!--LOGIN BUTTON--><input type="submit" name="submit" value="submit" class="button" /><!--END LOGIN BUTTON-->
    </div>
    <!--END FOOTER-->

</form>
<!--END LOGIN FORM-->

</div>
<!--END WRAPPER-->

<!--GRADIENT--><div class="gradient"></div><!--END GRADIENT-->

</body>
</html>