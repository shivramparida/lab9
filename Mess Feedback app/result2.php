<?php
session_start();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="green.css" rel="stylesheet" type="text/css" />
<title>Untitled Document</title>
<style type="text/css">
#contactform{
width: 100%;
font-size: 16px; /* Primary font size of form. Contained elements' font size are all relative to this setting */
}


#contactform input, #contactform textarea{
width: 98%;
border-radius: 5px;
border: 1px solid gray;
font: normal 1.5em auto; /* 24px, or 16px x 1.5 */
padding: 0.4166666666666667em; /* 10px, or 24px x 0.4166666666666667 */
box-shadow: 0 0 10px gray inset;
-webkit-box-sizing: border-box;
-moz-box-sizing: border-box;
box-sizing: border-box;
}

#contactform textarea{
resize:vertical; /* allow vertical resize of textarea */
height: 200px;
}


#contactform input:focus, #contactform textarea:focus{
box-shadow: 0 0 10px green inset;
}




#contactform select{
width: 80%;
font-size: 1.5em;
border: 2px solid #eee;
}

#contactform .formcolumn{ /* column div inside form */
width: 49%;
float: left;
}

#contactform .formcolumn:first-of-type{
margin-left:350px;/* 2% margin after first column */
}

#contactform .formcolumn label, #contactform .formcolumn fieldset{
font: bold 0.8em Verdana; /* font size is 12.8px, or 16 x 0.8 */
text-transform: uppercase;
display: block;
margin-top: 4em;
margin-bottom: 3px;
}

#contactform fieldset{
width: 98%;
-webkit-box-sizing: border-box;
-moz-box-sizing: border-box;
}

box-sizing: border-box;
#contactform .formcolumn label:first-child, #contactform .formcolumn fieldset:first-child{
#contactform fieldset ul{
margin-top: 100; /* first label or fieldset within each column should not no top margin */
}

list-type: none;
margin: 0;
padding: 0;
}

#contactform fieldset ul li{
display: inline-block;
margin-bottom: 5px;
margin-right: 1em;
}

#contactform div.buttons{
clear: both;
text-align: center;
}

#contactform input.button{
margin-top: 1.5EM;
width: 50%;
box-shadow: 0 0 10px gray;
text-transform: uppercase;
cursor: pointer;
min-width: 50px;
max-width: 200px;
color: white;
font-weight: bold;
letter-spacing: 7px;
text-shadow: 0 -2px 1px #8a8a8a;
background: rgb(169,3,41);
background: -moz-linear-gradient(top,  rgba(169,3,41,1) 0%, rgba(143,2,34,1) 44%, rgba(109,0,25,1) 100%);
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(169,3,41,1)), color-stop(44%,rgba(143,2,34,1)), color-stop(100%,rgba(109,0,25,1)));
background: -webkit-linear-gradient(top,  rgba(169,3,41,1) 0%,rgba(143,2,34,1) 44%,rgba(109,0,25,1) 100%);
background: -o-linear-gradient(top,  rgba(169,3,41,1) 0%,rgba(143,2,34,1) 44%,rgba(109,0,25,1) 100%);
background: -ms-linear-gradient(top,  rgba(169,3,41,1) 0%,rgba(143,2,34,1) 44%,rgba(109,0,25,1) 100%);
background: linear-gradient(to bottom,  rgba(169,3,41,1) 0%,rgba(143,2,34,1) 44%,rgba(109,0,25,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#a90329', endColorstr='#6d0019',GradientType=0 );
}




</style>


</head>

<body>
<div id='cssmenu'>
<ul>
   <li class='active'><a href='home.php'><span>Home</span></a></li>
      
   </li>
     <li class='last'><a href='menu.php'>Menu<span></span></a></li>
    <li class='last'>
	<li><a href='http://localhost/phpmyadmin/index.php?db=my_db&token=4eb18905f70dacf419c27b3852b7ced6'><span>Databse</span></a></li>
	 
   <li class='last'><a href='m1.php'><span><b></b></span></a>
   <li class='last'><a href='m1.php'><span>Contact</span></a>
  <ul>
		 <li class='last'><a href='m1.php'><span>shiv Ram Parida</span></a>
			<ul>         
		     <li class='has-sub'><a href='m1.php'><span>+918903240352</span></a><li>
			 <li class='has-sub'><a href='m1.php'><span>shivramparida@gmail.com</span></a><li>
               <li class='last'><a href='m1.php'><span>205112034@nitt.edu</span></a></li>
            </ul>
		</ul>
			<label>     
		 <li class='last'><a href='signout.php' title="Sign out"><img src="50x50.png" /></a></li>
		
</ul>
 <ul></div>
 <b>Welcome :: Admin</b>
<form action="#" method="post" id="contactform">

<div class="formcolumn">

<label for="dept">Select Mess:</label>
<select  class="a" name="select">
      <option value="0"></option>
      <option value="1">Mega mess 1</option>
      <option value="2">Mega mess 2</option>
      <option value="3">A mess</option>
      <option value="4">B mess</option>
      <option value="5">Opal mess</option>
    </select>

<label for="dept">Grade for :</label>
<select name="select2" size="1" >
    <option value="7">All</option>
    <option value="1">Quality</option>
    <option value="2">Quantity</option>
    <option value="3">water</option>
    <option value="4">timing</option>
    <option value="5">cleaning</option>
    <option value="6">catrar</option>
  </select>


</div>

<div class="buttons">
<input class="button" type="submit" name="Submit" value="Submit!" />
</div>

</form>

</body>
</html>
<?php
$con=mysql_connect("localhost","root","") or die (mysql_error());
$db=mysql_select_db('my_db',$con) or die (mysql_error());

if(isset($_POST['Submit']))
{
 $q1=$_POST['select'];
 $q2=$_POST['select2'];
 
if($q1<='0')
{
echo "<script>alert('please select mess name')</script>";
exit();
}
if($q2<='0')
{
echo "<script>alert('please selcct grade')</script>";
exit();
}
	switch($q1)
	{
		case 1:
				switch($q2)
					{
						case 1:
								$qu="select AVG(quality) as qu from m1";
								$result=mysql_query($qu);
 								while($info = mysql_fetch_array($result )) 
									 { 
										 Print "<b>Avg grade for Quality is:</b> ".$info['qu'] . " "; 
									 } 
						break;
						case 2:
								$qu="select AVG(quantity) as qu from m1";
								$result=mysql_query($qu);
								 while($info = mysql_fetch_array($result )) 
									 { 
										 Print "<b>Avg grade for Quantity is:</b> ".$info['qu'] . " "; 
									 } 
						break;
						case 3:
								$qu="select AVG(water) as qu from m1";
								$result=mysql_query($qu);
 								while($info = mysql_fetch_array($result )) 
 									{ 
 										Print "<b>Avg grade for water is:</b> ".$info['qu'] . " "; 
									 } 
						break;
						case 4:
								$qu="select AVG(timing) as qu from m1";
								$result=mysql_query($qu);
 								while($info = mysql_fetch_array($result )) 
								 { 
 										Print "<b>Avg grade For the timing is:</b> ".$info['qu'] . " "; 
 									} 
						break;
						case 5:
								$qu="select AVG(cleaning) as qu from m1";
								$result=mysql_query($qu);
 								while($info = mysql_fetch_array($result )) 
								 { 
									 Print "<b>Avg grade for Cleaning is:</b> ".$info['qu'] . " "; 
								 } 
						break;
						case 6:
								$qu="select AVG(cart) as qu from m1";
								$result=mysql_query($qu);
								 while($info = mysql_fetch_array($result )) 
 								{ 
		 							Print "<b>Avg grade catrar:</b> ".$info['qu'] . " "; 
 								} 
						break;
						case 7:
						$qu="select AVG(quality) as qu from m1";
								$result=mysql_query($qu);
 								while($info = mysql_fetch_array($result )) 
									 { 
										 Print "<b>Avg grade:Quaality is</b> ".$info['qu'] . " "; 
									 } 
									 echo "<br />";
						$qu="select AVG(quantity) as qu from m1";
								$result=mysql_query($qu);
								 while($info = mysql_fetch_array($result )) 
									 { 
										 Print "<b>Avg grade:Quantity is</b> ".$info['qu'] . " "; 
									 } 
									 echo "<br />";
						$qu="select AVG(quantity) as qu from m1";
								$result=mysql_query($qu);
								 while($info = mysql_fetch_array($result )) 
									 { 
										 Print "<b>Avg grade Water is:</b> ".$info['qu'] . " "; 
									 } 
									 echo "<br />";
						$qu="select AVG(timing) as qu from m1";
								$result=mysql_query($qu);
 								while($info = mysql_fetch_array($result )) 
								 { 
 										Print "<b>Avg grade for timing is:</b> ".$info['qu'] . " "; 
 									} 
									echo "<br />";
							
					$qu="select AVG(cleaning) as qu from m1";
								$result=mysql_query($qu);
 								while($info = mysql_fetch_array($result )) 
								 { 
									 Print "<b>Avg grade fro cleaning is:</b> ".$info['qu'] . " "; 
								 }
								 echo "<br />";
					$qu="select AVG(cart) as qu from m1";
								$result=mysql_query($qu);
								 while($info = mysql_fetch_array($result )) 
 								{ 
		 							Print "<b>Avg grade for Catrar is:</b> ".$info['qu'] . " "; 
 								} 
								echo "<br />";
						break;
					
					
					}
				break;
				case 2:
				switch($q2)
					{
						case 1:
								$qu="select AVG(quality) as qu from m2";
								$result=mysql_query($qu);
 								while($info = mysql_fetch_array($result )) 
									 { 
										 Print "<b>Avg grade:is</b> ".$info['qu'] . " "; 
									 } 
						break;
						case 2:
								$qu="select AVG(quntity) as qu from m2";
								$result=mysql_query($qu);
								 while($info = mysql_fetch_array($result )) 
									 { 
										 Print "<b>Avg grade:is</b> ".$info['qu'] . " "; 
									 } 
						break;
						case 3:
								$qu="select AVG(water) as qu from m2";
								$result=mysql_query($qu);
 								while($info = mysql_fetch_array($result )) 
 									{ 
 										Print "<b>Avg grade:is</b> ".$info['qu'] . " "; 
									 } 
						break;
						case 4:
								$qu="select AVG(timing) as qu from m2";
								$result=mysql_query($qu);
 								while($info = mysql_fetch_array($result )) 
								 { 
 										Print "<b>Avg grade:is</b> ".$info['qu'] . " "; 
 									} 
						break;
						case 5:
								$qu="select AVG(cleaning) as qu from m2";
								$result=mysql_query($qu);
 								while($info = mysql_fetch_array($result )) 
								 { 
									 Print "<b>Avg grade:is</b> ".$info['qu'] . " "; 
								 } 
						break;
						case 6:
								$qu="select AVG(cart) as qu from m2";
								$result=mysql_query($qu);
								 while($info = mysql_fetch_array($result )) 
 								{ 
		 							Print "<b>Avg grade:</b> ".$info['qu'] . " "; 
 								} 
						break;
						
						case 7:
						$qu="select AVG(quality) as qu from m2";
								$result=mysql_query($qu);
 								while($info = mysql_fetch_array($result )) 
									 { 
										 Print "<b>Avg grade:Quaality is</b> ".$info['qu'] . " "; 
									 } 
									 echo "<br />";
						$qu="select AVG(quantity) as qu from m2";
								$result=mysql_query($qu);
								 while($info = mysql_fetch_array($result )) 
									 { 
										 Print "<b>Avg grade:Quantity is</b> ".$info['qu'] . " "; 
									 } 
									 echo "<br />";
						$qu="select AVG(quantity) as qu from m2";
								$result=mysql_query($qu);
								 while($info = mysql_fetch_array($result )) 
									 { 
										 Print "<b>Avg grade Water: is</b> ".$info['qu'] . " "; 
									 } 
									 echo "<br />";
						$qu="select AVG(timing) as qu from m2";
								$result=mysql_query($qu);
 								while($info = mysql_fetch_array($result )) 
								 { 
 										Print "<b>Avg grade for timing: is</b> ".$info['qu'] . " "; 
 									} 
									echo "<br />";
							
					$qu="select AVG(cleaning) as qu from m2";
								$result=mysql_query($qu);
 								while($info = mysql_fetch_array($result )) 
								 { 
									 Print "<b>Avg grade fro cleaning : is</b> ".$info['qu'] . " "; 
								 }
								 echo "<br />";
					$qu="select AVG(cart) as qu from m2";
								$result=mysql_query($qu);
								 while($info = mysql_fetch_array($result )) 
 								{ 
		 							Print "<b>Avg grade for Catrar is: is</b> ".$info['qu'] . " "; 
 								} 
								echo "<br />";
						break;
					}
					break;
					case 3:
				switch($q2)
					{
						case 1:
								$qu="select AVG(quality) as qu from a";
								$result=mysql_query($qu);
 								while($info = mysql_fetch_array($result )) 
									 { 
										 Print "<b>Avg grade: is</b> ".$info['qu'] . " "; 
									 } 
						break;
						case 2:
								$qu="select AVG(quntity) as qu from a";
								$result=mysql_query($qu);
								 while($info = mysql_fetch_array($result )) 
									 { 
										 Print "<b>Avg grade: is</b> ".$info['qu'] . " "; 
									 } 
						break;
						case 3:
								$qu="select AVG(water) as qu from a";
								$result=mysql_query($qu);
 								while($info = mysql_fetch_array($result )) 
 									{ 
 										Print "<b>Avg grade: is</b> ".$info['qu'] . " "; 
									 } 
						break;
						case 4:
								$qu="select AVG(timing) as qu from a";
								$result=mysql_query($qu);
 								while($info = mysql_fetch_array($result )) 
								 { 
 										Print "<b>Avg grade: is</b> ".$info['qu'] . " "; 
 									} 
						break;
						case 5:
								$qu="select AVG(cleaning) as qu from a";
								$result=mysql_query($qu);
 								while($info = mysql_fetch_array($result )) 
								 { 
									 Print "<b>Avg grade:</b> ".$info['qu'] . " "; 
								 } 
						break;
						case 6:
								$qu="select AVG(cart) as qu from a";
								$result=mysql_query($qu);
								 while($info = mysql_fetch_array($result )) 
 								{ 
		 							Print "<b>Avg grade: is</b> ".$info['qu'] . " "; 
 								} 
						break;
						
						case 7:
						$qu="select AVG(quality) as qu from a";
								$result=mysql_query($qu);
 								while($info = mysql_fetch_array($result )) 
									 { 
										 Print "<b>Avg grade:Quaality is</b> ".$info['qu'] . " "; 
									 } 
									 echo "<br />";
						$qu="select AVG(quantity) as qu from a";
								$result=mysql_query($qu);
								 while($info = mysql_fetch_array($result )) 
									 { 
										 Print "<b>Avg grade:Quantity is</b> ".$info['qu'] . " "; 
									 } 
									 echo "<br />";
						$qu="select AVG(quantity) as qu from a";
								$result=mysql_query($qu);
								 while($info = mysql_fetch_array($result )) 
									 { 
										 Print "<b>Avg grade Water: is</b> ".$info['qu'] . " "; 
									 } 
									 echo "<br />";
						$qu="select AVG(timing) as qu from a";
								$result=mysql_query($qu);
 								while($info = mysql_fetch_array($result )) 
								 { 
 										Print "<b>Avg grade for timing: is</b> ".$info['qu'] . " "; 
 									} 
									echo "<br />";
							
					$qu="select AVG(cleaning) as qu from a";
								$result=mysql_query($qu);
 								while($info = mysql_fetch_array($result )) 
								 { 
									 Print "<b>Avg grade fro cleaning : is</b> ".$info['qu'] . " "; 
								 }
								 echo "<br />";
					$qu="select AVG(cart) as qu from a";
								$result=mysql_query($qu);
								 while($info = mysql_fetch_array($result )) 
 								{ 
		 							Print "<b>Avg grade for Catrar is:</b> ".$info['qu'] . " "; 
 								} 
								echo "<br />";
						break;
					}
					break;
					case 4:
				switch($q2)
					{
						case 1:
								$qu="select AVG(quality) as qu from b";
								$result=mysql_query($qu);
 								while($info = mysql_fetch_array($result )) 
									 { 
										 Print "<b>Avg grade: is</b> ".$info['qu'] . " "; 
									 } 
						break;
						case 2:
								$qu="select AVG(quntity) as qu from b";
								$result=mysql_query($qu);
								 while($info = mysql_fetch_array($result )) 
									 { 
										 Print "<b>Avg grade: is</b> ".$info['qu'] . " "; 
									 } 
						break;
						case 3:
								$qu="select AVG(water) as qu from b";
								$result=mysql_query($qu);
 								while($info = mysql_fetch_array($result )) 
 									{ 
 										Print "<b>Avg grade: is</b> ".$info['qu'] . " "; 
									 } 
						break;
						case 4:
								$qu="select AVG(timing) as qu from b";
								$result=mysql_query($qu);
 								while($info = mysql_fetch_array($result )) 
								 { 
 										Print "<b>Avg grade: is</b> ".$info['qu'] . " "; 
 									} 
						break;
						case 5:
								$qu="select AVG(cleaning) as qu from b";
								$result=mysql_query($qu);
 								while($info = mysql_fetch_array($result )) 
								 { 
									 Print "<b>Avg grade: is</b> ".$info['qu'] . " "; 
								 } 
						break;
						case 6:
								$qu="select AVG(cart) as qu from b";
								$result=mysql_query($qu);
								 while($info = mysql_fetch_array($result )) 
 								{ 
		 							Print "<b>Avg grade: is</b> ".$info['qu'] . " "; 
 								} 
						break;
						
						case 7:
						$qu="select AVG(quality) as qu from b";
								$result=mysql_query($qu);
 								while($info = mysql_fetch_array($result )) 
									 { 
										 Print "<b>Avg grade:Quaality is</b> ".$info['qu'] . " "; 
									 } 
									 echo "<br />";
						$qu="select AVG(quantity) as qu from b";
								$result=mysql_query($qu);
								 while($info = mysql_fetch_array($result )) 
									 { 
										 Print "<b>Avg grade:Quantity is</b> ".$info['qu'] . " "; 
									 } 
									 echo "<br />";
						$qu="select AVG(quantity) as qu from b";
								$result=mysql_query($qu);
								 while($info = mysql_fetch_array($result )) 
									 { 
										 Print "<b>Avg grade Water: is</b> ".$info['qu'] . " "; 
									 } 
									 echo "<br />";
						$qu="select AVG(timing) as qu from b";
								$result=mysql_query($qu);
 								while($info = mysql_fetch_array($result )) 
								 { 
 										Print "<b>Avg grade for timing: is</b> ".$info['qu'] . " "; 
 									} 
									echo "<br />";
							
					$qu="select AVG(cleaning) as qu from b";
								$result=mysql_query($qu);
 								while($info = mysql_fetch_array($result )) 
								 { 
									 Print "<b>Avg grade fro cleaning : is</b> ".$info['qu'] . " "; 
								 }
								 echo "<br />";
					$qu="select AVG(cart) as qu from b";
								$result=mysql_query($qu);
								 while($info = mysql_fetch_array($result )) 
 								{ 
		 							Print "<b>Avg grade for Catrar is: </b> ".$info['qu'] . " "; 
 								} 
								echo "<br />";
						break;
					}
				break;
				case 5:
				switch($q2)
					{
						case 1:
								$qu="select AVG(quality) as qu from o";
								$result=mysql_query($qu);
 								while($info = mysql_fetch_array($result )) 
									 { 
										 Print "<b>Avg grade: is</b> ".$info['qu'] . " "; 
									 } 
						break;
						case 2:
								$qu="select AVG(quntity) as qu from o";
								$result=mysql_query($qu);
								 while($info = mysql_fetch_array($result )) 
									 { 
										 Print "<b>Avg grade: is</b> ".$info['qu'] . " "; 
									 } 
						break;
						case 3:
								$qu="select AVG(water) as qu from o";
								$result=mysql_query($qu);
 								while($info = mysql_fetch_array($result )) 
 									{ 
 										Print "<b>Avg grade: is</b> ".$info['qu'] . " "; 
									 } 
						break;
						case 4:
								$qu="select AVG(timing) as qu from o";
								$result=mysql_query($qu);
 								while($info = mysql_fetch_array($result )) 
								 { 
 										Print "<b>Avg grade:</b> ".$info['qu'] . " "; 
 									} 
						break;
						case 5:
								$qu="select AVG(cleaning) as qu from o";
								$result=mysql_query($qu);
 								while($info = mysql_fetch_array($result )) 
								 { 
									 Print "<b>Avg grade: is</b> ".$info['qu'] . " "; 
								 } 
						break;
						case 6:
								$qu="select AVG(cart) as qu from o";
								$result=mysql_query($qu);
								 while($info = mysql_fetch_array($result )) 
 								{ 
		 							Print "<b>Avg grade: is</b> ".$info['qu'] . " "; 
 								} 
						break;
						
						case 7:
						$qu="select AVG(quality) as qu from o";
								$result=mysql_query($qu);
 								while($info = mysql_fetch_array($result )) 
									 { 
										 Print "<b>Avg grade:Quaality is</b> ".$info['qu'] . " "; 
									 } 
									 echo "<br />";
						$qu="select AVG(quantity) as qu from o";
								$result=mysql_query($qu);
								 while($info = mysql_fetch_array($result )) 
									 { 
										 Print "<b>Avg grade:Quantity is</b> ".$info['qu'] . " "; 
									 } 
									 echo "<br />";
						$qu="select AVG(quantity) as qu from o";
								$result=mysql_query($qu);
								 while($info = mysql_fetch_array($result )) 
									 { 
										 Print "<b>Avg grade Water: is</b> ".$info['qu'] . " "; 
									 } 
									 echo "<br />";
						$qu="select AVG(timing) as qu from o";
								$result=mysql_query($qu);
 								while($info = mysql_fetch_array($result )) 
								 { 
 										Print "<b>Avg grade for timing: is</b> ".$info['qu'] . " "; 
 									} 
									echo "<br />";
							
					$qu="select AVG(cleaning) as qu from o";
								$result=mysql_query($qu);
 								while($info = mysql_fetch_array($result )) 
								 { 
									 Print "<b>Avg grade fro cleaning : is</b> ".$info['qu'] . " "; 
								 }
								 echo "<br />";
					$qu="select AVG(cart) as qu from o";
								$result=mysql_query($qu);
								 while($info = mysql_fetch_array($result )) 
 								{ 
		 							Print "<b>Avg grade for Catrar is: is</b> ".$info['qu'] . " "; 
 								} 
								echo "<br />";
						break;
					}
			break;

			}
}

?>
<?php
session_unset();

?>
