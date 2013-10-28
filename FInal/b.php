<?php
session_start();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>B mess</title>
<link href="styles.css" rel="stylesheet" type="text/css" />
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Image-less CSS3 Glowing Form Implementation</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
	<script>
		$(function(){
		  var $form_inputs =   $('form input');
		  var $rainbow_and_border = $('.rain, .border');
		  /* Used to provide loping animations in fallback mode */
		  $form_inputs.bind('focus', function(){
		  	$rainbow_and_border.addClass('end').removeClass('unfocus start');
		  });
		  $form_inputs.bind('blur', function(){
		  	$rainbow_and_border.addClass('unfocus start').removeClass('end');
		  });
		  $form_inputs.first().delay(800).queue(function() {
			$(this).focus();
		  });
		});
	</script>
		<style>
			body{
				background: #FFFFFF;
				color: #000;
				font-family: 'Helvetica', 'Lucida Grande', 'Arial', sans-serif;
			}
			.border,
			.rain{
				height: 370px;
				width: 340px;
			}
			/* Layout with mask */
			.rain{
				 padding: 10px 12px 12px 10px;
				 -moz-box-shadow: 10px 10px 10px rgba(0,0,0,1) inset, -9px -9px 8px rgba(0,0,0,1) inset;
				 -webkit-box-shadow: 8px 8px 8px rgba(0,0,0,1) inset, -9px -9px 8px rgba(0,0,0,1) inset;
				 box-shadow: 8px 8px 8px rgba(0,0,0,1) inset, -9px -9px 8px rgba(0,0,0,1) inset;
				 margin: 10px 800px;
			}
			/* Artifical "border" to clear border to bypass mask */
			.border{
				padding: 1px;
				-moz-border-radius: 5px;
			    -webkit-border-radius: 5px;
				border-radius: 5px;
			}

			.border,
			.rain,
			.border.start,
			.rain.start{
				background-repeat: repeat-x, repeat-x, repeat-x, repeat-x;
				background-position: 0 0, 0 0, 0 0, 0 0;
				/* Blue-ish Green Fallback for Mozilla */
				background-image: -moz-linear-gradient(left, #09BA5E 0%, #00C7CE 15%, #3472CF 26%, #00C7CE 48%, #0CCF91 91%, #09BA5E 100%);
				/* Add "Highlight" Texture to the Animation */
				background-image: -webkit-gradient(linear, left top, right top, color-stop(1%,rgba(0,0,0,.3)), color-stop(23%,rgba(0,0,0,.1)), color-stop(40%,rgba(255,231,87,.1)), color-stop(61%,rgba(255,231,87,.2)), color-stop(70%,rgba(255,231,87,.1)), color-stop(80%,rgba(0,0,0,.1)), color-stop(100%,rgba(0,0,0,.25)));
				/* Starting Color */
				background-color: #39f;
				/* Just do something for IE-suck */
				filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#00BA1B', endColorstr='#00BA1B',GradientType=1 );
			}
			
			/* Non-keyframe fallback animation */
			.border.end,
			.rain.end{
				-moz-transition-property: background-position;  
				-moz-transition-duration: 30s;
				-moz-transition-timing-function: linear;
				-webkit-transition-property: background-position;  
				-webkit-transition-duration: 30s;  
				-webkit-transition-timing-function: linear;
				-o-transition-property: background-position;  
				-o-transition-duration: 30s;  
				-o-transition-timing-function: linear;
				transition-property: background-position;  
				transition-duration: 30s;  
				transition-timing-function: linear;
				background-position: -5400px 0, -4600px 0, -3800px 0, -3000px 0;	
			}
			
			/* Keyfram-licious animation */
			@-webkit-keyframes colors {
			    0% {background-color: #39f;}
			    15% {background-color: #F246C9;}
			    30% {background-color: #4453F2;}
			    45% {background-color: #44F262;}
			    60% {background-color: #F257D4;}
			    75% {background-color: #EDF255;}
			    90% {background-color: #F20006;}
			    100% {background-color: #39f;}
		    }
		    .border,.rain{
			    -webkit-animation-direction: normal;
			    -webkit-animation-duration: 20s;
			    -webkit-animation-iteration-count: infinite;
			    -webkit-animation-name: colors;
			    -webkit-animation-timing-function: ease;
		    }
		    
		    /* In-Active State Style */
			.border.unfocus{
				background: #333 !important;	
				 -moz-box-shadow: 0px 0px 15px rgba(255,255,255,.2);
				 -webkit-box-shadow: 0px 0px 15px rgba(255,255,255,.2);
				 box-shadow: 0px 0px 15px rgba(255,255,255,.2);
				 -webkit-animation-name: none;
			}
			.rain.unfocus{
				background: #000 !important;	
				-webkit-animation-name: none;
			}
			
			/* Regular Form Styles */
			form{
				background: #212121;
				-moz-border-radius: 5px;
				-webkit-border-radius: 5px;
			    border-radius: 5px;
				height: 100%;
				width: 100%;
				background: -moz-radial-gradient(50% 46% 90deg,circle closest-corner, #FFFFFF, #FFFFFF);
				background: -webkit-gradient(radial, 50% 50%, 0, 50% 50%, 150, from(#FFFFFF), to(#FFFFFF));
			}
			form label{
				display: block;
				padding: 10px 10px 5px 15px;
				font-size: 11px;
				color: #777;
			}
			form input{
				display: block;
				margin: 5px 10px 10px 15px;
				width: 85%;
				background: #111;
				-moz-box-shadow: 0px 0px 4px #000 inset;
				-webkit-box-shadow: 0px 0px 4px #000 inset;
				box-shadow: 0px 0px 4px #000 inset;
				outline: 1px solid #333;
				border: 1px solid #000;
				padding: 5px;
				color: #444;
				font-size: 16px;
			}
			form input:focus{
				outline: 1px solid #555;
				color: #FFF;
			}
			input[type="submit"]{
				color: #999;
				padding: 5px 10px;
				float: right;
				margin: 20px 0;
				border: 1px solid #000;
				font-weight: lighter;
				-moz-border-radius: 15px;
			    -webkit-border-radius: 15px;
				border-radius: 15px;
				background: #45484d;
				background: -moz-linear-gradient(top, #222 0%, #111 100%);
				background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#222), color-stop(100%,#111));
				filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#22222', endColorstr='#11111',GradientType=0 );
				-moz-box-shadow: 0px 1px 1px #000, 0px 1px 0px rgba(255,255,255,.3) inset;
				-webkit-box-shadow: 0px 1px 1px #000, 0px 1px 0px rgba(255,255,255,.3) inset;
				box-shadow: 0px 1px 1px #000,0px 1px 0px rgba(255,255,255,.3) inset;
				text-shadow: 0 1px 1px #000;
			}
		</style>
	</head>
	<body>
	<div id='cssmenu'>
<ul>
   <li class='active'><a href='home.php'><span>Home</span></a></li>
      
   </li>
     <li class='last'><a href='menu.php'>Menu<span></span></a>
		  
    <li class='last'>
	 <li class='last'><a href='b.php'><span>Contact</span></a>
  <ul>
		 <li class='last'><a href='b.php'><span>Shiv Ram Parida</span></a>
			<ul>         
		     <li class='has-sub'><a href='b.php'><span>+918903240352</span></a><li>
			 <li class='has-sub'><a href='b.php'><span>shivramparida@gmail.com</span></a><li>
               <li class='last'><a href='b.php'><span>205112034@nitt.edu</span></a></li>
            </ul>
		</ul>
   <li class='last'><a href='b.php'><span><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;B MESS </b></span></a>
     
		 <li class='last'><a href='signout.php'><span><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sign out</b></span></a></li>
		
</ul><ul></div>
</br>
 </body>
 </html>
 <?php 
 if(isset($_SESSION['username']))  
  { 
  echo "<div id='username'>Welcome: " . $_SESSION['username'] . "</div>"; 
  }  
  $username=$_SESSION['username'];
$con=mysql_connect("localhost","root","") or die (mysql_error());
$db=mysql_select_db('my_db',$con) or die (mysql_error());
$i="select * from user_reg where username='$username'";
$run=mysql_query($i) or die (mysql_error());
while($info = mysql_fetch_array($run)) 
								 { 
									echo "" ;?> <img src= "<?php echo $info['image'] ?>"height ="100" width="100" /><?php echo "";
								 } 
	
	?>
	<html>
	<body id="home">
		<div class="rain">
			<div class="border start">
				
 <FORM action="b.php" method="post">
<table width="400" height="447" align="right">

<td width="274" height="55" align="center"><span class="style1">Food Qyuality</span></td>
<td width="114"><select name="quality" size="1" id="quality">
  <option value="0">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
  <option value="8">8</option>
  <option value="9">9</option>
  <option value="10">10</option>
</select></td>
</tr>
<tr>
<td width="274" height="44" align="center"><span class="style1">Food Quntity</span></td>
<td width="114"><select name="quantity" size="1" id="quantity">
	 <option value="0">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
  <option value="8">8</option>
  <option value="9">9</option>
  <option value="10">10</option>
</select></td>
</tr>
<tr>
<td width="274" height="50" align="center"><span class="style1">Water</span></td>
<td width="114"><select name="Water" size="1" id="Water">
 <option value="0">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
  <option value="8">8</option>
  <option value="9">9</option>
  <option value="10">10</option>
</select></td>
</tr>
<tr>
<td width="274" height="44" align="center"><span class="style1">Timing</span></td> 
<td width="114"><select name="Timing" size="1" id="Timing">
 <option value="0">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
  <option value="8">8</option>
  <option value="9">9</option>
  <option value="10">10</option>
</select></td>
</tr>
<tr>
<td width="274" height="51" align="center"><span class="style1">Catering</span></td>
<td width="114"><select name="cart" size="1" id="cart">
 <option value="0">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
  <option value="8">8</option>
  <option value="9">9</option>
  <option value="10">10</option>
</select></td>
</tr>
<tr>
<td width="274" height="43" align="center"><span class="style1">cleaning</span></td>
<td width="114"><select name="clean" size="1" id="clean">
 <option value="0">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
  <option value="8">8</option>
  <option value="9">9</option>
  <option value="10">10</option>
</select></td>
</tr>

</br>
      <tr>
        <th colspan="2" scope="row"><input type="submit" name="Submit" value="SUBMIT" /></th>
      </tr>
</table>
</FORM>
			</div>
		</div>
	</strong>
</body>
</html>

<?php
if(isset($_POST['Submit']))
{
 $q1=$_POST['quality'];
 $q2=$_POST['quantity'];
 $w=$_POST['Water'];
 $t=$_POST['Timing'];
 $c=$_POST['cart'];
 $C=$_POST['clean'];

if($q1<='0')
{
echo "<script>alert('please Enter your quality grade')</script>";
exit();
}
if($q2<='0')
{
echo "<script>alert('please Enter your quantity grade')</script>";
exit();
}
if($w<='0')
{
echo "<script>alert('please Enter grade of serving water')</script>";
exit();
}
if($t<='0')
{
echo "<script>alert('please Enter grade for timing')</script>";
exit();
}
if($c<='0')
{
echo "<script>alert('please Enter your  grade for catrer')</script>";
exit();
}
if($C<='0')
{
echo "<script>alert('please Enter your grade for cleaning')</script>";
exit();
}

$que="insert into b(username,quality,quantity,water,timing,cart,cleaning) values ('$username','$q1','$q2','$w','$t','$c','$C')";
if(mysql_query($que))
{
echo "<script>alert('thank you')</script>";
echo "<script>window.open('signout.php','_self')</script>";
}
}

?>