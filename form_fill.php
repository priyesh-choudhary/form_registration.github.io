<?php

$connection = mysqli_connect('localhost','root','Priyesh@2143','fill_form');

if(isset($_POST['name'])){
   $name = $_POST['name'];
   $email = $_POST['email'];
   $year = $_POST['year'];
   $mobile = $_POST['mobile'];
   $whatsapp = $_POST['whatsapp'];
   $skills = $_POST['skills'];
   $intro = $_POST['intro'];
   $resume = $_POST['resume'];
   
   
   $request = " insert into CWform_fill(name, email, year, mobile, whatsapp, skills, intro, resume) values('$name','$email','$year','$mobile','$whatsapp','$skills','$intro','$resume') ";
   mysqli_query($connection, $request);
   header('location:form.php'); 
}else{
   echo 'something went wrong please try again!';
}

?>