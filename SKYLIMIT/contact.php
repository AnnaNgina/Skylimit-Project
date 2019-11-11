


<?php
 //Database connection
	$db_host ="localhost";
	$db_user="root";
	$db_password="";
	$db_name="skylimit";
	$connect = mysqli_connect($db_host,$db_user,$db_password,$db_name);
	if($connect){
	echo '';
	}else
	{
	echo 'Failed to connect';
	}
	
//Send feedback scripts
if(isset($_POST['send'])){
//collecting data from user form
$Firstname= $_POST['Firstname'];
$Lastname=$_POST['Lastname'];
$email=$_POST['email'];
$comment=$_POST['comment'];

 // insert the collected data into database SQL
  $sql = "INSERT INTO contact(Firstname,Lastname,email,comment) VALUES('$Firstname','$Lastname','$email','$comment') ";
  
 //execute the query
 mysqli_query($connect,$sql);
 ?>

<!DOCTYPE html>
<html>
<head>
	<title> contact us </title>
</head>
	<link rel="stylesheet" type="text/css" href="CSS.css">
	<body>
		<header>
	
	<h1>SKYLIMIT PRIMARY SCHOOL</h1>
<ul><li>
		<a href="index.html"> Home</li></a>
		
		
		<li>
			<a href="about.html"> About</a>
		</li>
		<li>
			<a href="service.html"> Services</a>
			</li>
			<li>
				<a href="contact.html">Contact</a>
			</li>
		</ul>
	</header>
<div class="row">
	<div class="column">
	<img src="images/eat.jpg" width="90%">
	<h2>Lunch Time</h2>
	<br><br>
</div>
	<div class="column">
	<h2>TALK TO US</h2>
<pre>
Address: Headteacher</br>
SkyLimit Primary school </br>
p.o. box 34904</br>
kenya .</br></br>
email:skylimit@gmail.com</br>
principal number:072000000</br>
secretary number:0729898989</br>
</pre>
</div>
<div class="column">
	<form>
		<fieldset>
		<h2> CONTACT FORM</h2>
		<h3> Fill all the required fields.</h3>
		First name:</br>
<input type="text" name="Firstname"value="Firstname "></br>
		Last name:</br>
		<input type="text" name="lastname" value="Lastname"></br>
		<input type="radio"name="gender"  value="male"> male<br>
		<input type="radio" name="gender"value="female"> female<br>
		Email:<br>
		<input type="text" name="email" value="email"></br><br>
		<label for="comment">Comment</label>
		<textarea name="message" row="10" cols="30">
	</textarea><br>
	<input type="submit" value="submit"></br>
</fieldset>
	</form>
</div>
<hr>

<div class="row">
	<div class="column">
					<pre>
  
           	<h1>Our Program</h1>
           	Monday-Friday: 5:40-7:00<br>
           	Saturday-Sunday:6:00-6:30<br>
           	Music program:Monday-30min<br>
           </pre>
           </div>
				<div class="column">
					<pre>
				<h1> Contact Us</h1>
		email:skylimit@gmail.com</br>
                principal number:072000000</br>
                secretary number:0729898989</br>
                website:https://www.skylimit.co.ke
            </pre>
            </div>
            <div class="column">
            	<pre>
            <h1>Services</h1>
            dormitry<br>
            Elerning<br>
            Library<br>
            Music and arts<br>
        </pre>
        </div>
  
       </body>
</html>