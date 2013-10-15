<?php
session_start();

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link href="*" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
body,td,th {
	color: #FFFFFF;
	font-weight: bold;
}
body {
	background-image: url(7.jpg);
	background-size: 1280px 800px;
	background-attachment: scroll;
	background-position: 0px 85px;
	background-repeat: no-repeat;
	background-color: #000000;
}
-->
</style>
</head>

<body>
<!DOCTYPE html>
<html>
<head>
	<link rel='stylesheet' type='text/css' href='styles.css' />
</head>
<body>
<form action="admin.php" method="post" name="form1">
<div id='cssmenu'>
<ul>
   <li class='active'><a href='home.php'><span>Home</span></a></li>
   <li><a href='sign_up.php'><span>sing up</span></a></li>
   <li class='last'><a href='menu.php'>Menu<span></span></a>
   <ul>
             <li class='has-sub'><a href='monday.php'><span>Monday</span></a><li>
			 <li class='has-sub'><a href='tuesday.php'><span>Tuesday</span></a><li>
			 <li class='has-sub'><a href='wednesday.php'><span>wednesday</span></a><li>
			  <li class='has-sub'><a href='thursday.php'><span>Thursday</span></a></li>
			 <li class='has-sub'><a href='friday.php'><span>Friday</span></a><li>
			 <li class='has-sub'><a href='saturday.php'><span>Saturday</span></a><li>
			 <li class='last'><a href='sunday.php'><span>Sunday</span></a><li>
              
            </ul>
    <li class='last'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;username<input name="username" type="text" value="" size="20" maxlength="9" /><span></span>
	 <li class='last'>Password<input name="password" type="password" value="" size="20" maxlength="9" /><span></span></li>
	 <li><input type="submit" name="Submit" value="log in" /></li>
</ul>
</div>
</form
></body>
</html>
<?php
$con=mysql_connect("localhost","root","") or die (mysql_error());
$db=mysql_select_db('my_db',$con) or die (mysql_error());
if(isset($_POST['Submit']))
{
 $u_name=$_POST['username'];
 $pass=$_POST['password'];
	if($u_name==''){
	echo "<script>alert('please Enter your Username')</script>";
	exit();
	}
	if($pass==''){
	echo "<script>alert('please Enter your password')</script>";
	exit();
	}
	else{
	$query="select * from admin where username='$u_name' AND password='$pass'";
	$run=mysql_query($query) or die (mysql_error());
		if(mysql_num_rows($run)>0){ 
		header("location:result.php");
		}
		else
		{
		echo "<script>alert('your Username or password is wrong')</script>";
		}
	}

}

?>

