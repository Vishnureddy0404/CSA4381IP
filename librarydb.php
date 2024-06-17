<?php
$servername="localhost";
$username="root";
$password="";
$dbname="library";
$conn=new mysqli($servername,$username,$password,$dbname);
$st=$conn->prepare("INSERT INTO user VALUES (?,?,?,?,?,?,?)");
$st->bind_param("sissssi",$student_name,$reg_no,$user_name,$password,$Gender,$dept,$year);
$student_name=$_POST["name"];
$reg_no=$_POST["reg"];
$user_name=$_POST["user_name"];
$password=$_POST["pw"];
$Gender=$_POST["gender"];
$dept=$_POST["dept"];
$year=$_POST["Year"];
$st->execute();
echo "SUCCESS!";
$conn->close();
$st->close();
?>