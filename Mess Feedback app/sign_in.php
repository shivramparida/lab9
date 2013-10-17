<?php
session_start();

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link href="*" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" type="text/css" href="css/style1.css" />
<style type="text/css">
<!--
body,td,th {
	color: #FFFFFF;
	font-weight: bold;
}
body {
	background-image: url(7.jpg);
	background-size: 1250px 680px;
	background-repeat: no-repeat;
	background-color: #000000;
	background-attachment: scroll;
	background-position: 0px 85px;
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
<form action="sign_in.php" method="post" name="form1">
<div id='cssmenu'>
<p class="codrops-demos">
<ul>
   <li class='active'><a href='home.php'><span>Home</span></a></li>
   <li><a href='sign_up.php'><span>sing up</span></a></li>
   <li class='has-sub'><a href='log.php'>sign in</a>
      <ul>
         <li class='has-sub'><a href='sign_in.php'><span>student</span></a>
         
         </li>
         <li class='has-sub'><a href='admin.php'><span>Admin</span></a>
      
         </li>
      </ul>
   </li>
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <li class='last'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;username<input name="username" type="text" value="" size="10" maxlength="9" /><span></span>
	 <li class='last'>Password<input name="password" type="password" value="" size="10" maxlength="9" /><span></span></li>
	<li class='last'>Mess <select  class="a" name="select">
      <option value="0"></option>
      <option value="1">Mega mess 1</option>
      <option value="2">Mega mess 2</option>
      <option value="3">A mess</option>
      <option value="4">B mess</option>
      <option value="5">Opal mess</option>
    </select></li>
	 <li><input type="submit" name="Submit" value="log in" /></li>
</ul>
<p class="codrops-demos">
</div>
</form>
</body>
</html>
</body>
</html>
<?php
$con=mysql_connect("localhost","root","") or die (mysql_error());
$db=mysql_select_db('my_db',$con) or die (mysql_error());
if(isset($_POST['Submit']))
{
 $u_name=$_POST['username'];
 $pass=$_POST['password'];
 $m=$_POST['select'];
	if($u_name==''){
	echo "<script>alert('please Enter your Username')</script>";
	exit();
	}
	if($pass==''){
	echo "<script>alert('please Enter your password')</script>";
	exit();
	}
	else{
	$query="select * from user_reg where username='$u_name' AND password='$pass'";
	$run=mysql_query($query) or die (mysql_error());
		if(mysql_num_rows($run)>0){ 
		$_SESSION['username'] = $u_name;
		switch($m)
		{
		
		case 1:
		header("location:m1.php");
		break ;
		case 2:
		header("location:m2.php");
		break ;
		case 3:
		header("location:a.php");
		break ;
		case 4:
		header("location:b.php");
		break ;
		case 5:
		header("location:0.php");
		break ;
		default:
		echo "<script>alert('please select mess name')</script>";
		exit();
		
		}
		}
		else
		{
		echo "<script>alert('your Username or password is wrong')</script>";
		}
	}

}

?>

