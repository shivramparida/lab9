
<?php
session_start();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

	<link rel='stylesheet' type='text/css' href='styles.css' />
	<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" /><style type="text/css">
<!--
body {
	background-image: url(Iron_gate_design_1_by_Industrial_Forest.jpg);
	background-size: 1300px 900px;
	background-attachment: scroll;
	background-position: 0px 80px;
	background-repeat: no-repeat;
	background-color: #000000;
}
body,td,th {
	color: #3333FF;
}
-->
</style><title>sign up</title></head>
<body>
<div id='cssmenu'>
<ul>
   <li class='active'><a href='home.php'><span>Home</span></a></li>
   <li class='has-sub'><a href='sign_in.php'>sign in</a>
      <ul>
         <li class='has-sub'><a href='sign_in.php'><span>student</span></a>
         
         </li>
         <li class='has-sub'><a href='admin.php'><span>Admin</span></a>
      
         </li>
      </ul>
   </li>
   <li><a href='menu.php'>Mess Menu</a></li>
   <li class='last'><a href='sign_up.php'><span>Contact</span></a>
	<ul>
		 <li class='last'><a href='sign_up.php'><span>Shiv Ram Parida</span></a>
   				<ul>
         
		     <li class='has-sub'><a href='sign_up.php'><span>+918903240352</span></a><li>
			 <li class='has-sub'><a href='sign_up.php'><span>shivramparida@gmail.com</span></a><li>
               <li class='last'><a href='sign_up.php'><span>205112034@nitt.edu</span></a></li>
   		   </ul>
	  </ul>
	<li class='last'><a href='sign_up.php'><span><strong><b>&nbsp;&nbsp;&nbsp;&nbsp;MESS FEEDBACK APPLICATION</b></strong></span></a></li>
			<li class='last'><a href='sign_up.php'><b><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sing up here</b></a>
</ul>
</div>
</br>
</br>
<form action="sign_up.php" method="post" class="style3">
  <div align="center">
    <table width="451" height="426" align="right">
      <tr>
        <th width="253" scope="row">Username</th>
      <td width="186"><input name="username" type="text" id="username" maxlength="20" /></td>
    </tr>
      <tr>
        <th scope="row">Password</th>
        <td><input name="pass" type="password" id="pass" /></td>
    </tr>
      <tr>
        <th scope="row">Name</th>
        <td><input name="Name" type="text" id="Name" maxlength="20" /></td>
    </tr>
      <tr>
        <th scope="row">Rollno</th>
        <td><input name="Rollno" type="text" id="Rollno" value="" /></td>
      </tr>
      <tr>
        <th scope="row">Course</th>
        <td><input name="Course" type="text" id="Course" maxlength="20" /></td>
    </tr>
      <tr>
        <th scope="row">Mobile no </th>
        <td><input name="mob" type="text" id="Mobile no" /></td>
    </tr>
      <tr>
        <th scope="row">Batch</th>
        <td><input name="batch" type="text" id="batch" maxlength="4" /></td>
    </tr><td height="50"></br>
      <tr>
        <th colspan="2" scope="row"><input type="submit" name="Submit" value="Sing Up" /></th>
      </tr>
    </table> 
  </div>
</form>
</body>
</html>

<?php
$con=mysql_connect("localhost","root","") or die (mysql_error());
$db=mysql_select_db('my_db',$con) or die (mysql_error());
if(isset($_POST['Submit']))
{
 $u_name=$_POST['username'];
 $pass=$_POST['pass'];
 $name=$_POST['Name'];
 $rollno=$_POST['Rollno'];
 $course=$_POST['Course'];
 $Mobile=$_POST['mob'];
 $batch=$_POST['batch'];

if($u_name==''){
echo "<script>alert('please Enter your Username')</script>";
exit();
}
if($pass=='')
{
echo "<script>alert('please Enter your password')</script>";
exit();
}
if($name=='')
{
echo "<script>alert('please Enter your Name')</script>";
exit();
}
if($rollno=='')
{
echo "<script>alert('please Enter your Roll no')</script>";
exit();
}
if($course=='')
{
echo "<script>alert('please Enter your Course')</script>";
exit();
}
if($Mobile=='')
{
echo "<script>alert('please Enter your Mobile')</script>";
exit();
}
if($batch=='')
{
echo "<script>alert('please Enter your Batch')</script>";
exit();
}
else
{
$que="insert into user_reg(username,password,name,rollno,course,mobile,batch) values ('$u_name','$pass','$name','$rollno','$course','$Mobile','$batch')";
if(mysql_query($que)){
echo "<script>alert('thank you')</script>";
header("location:home.php");
}
}
}

?>