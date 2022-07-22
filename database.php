<?php
$servername="localhost";
$username="root";
$password="";
$database="library";
$con=mysqli_connect($servername,$username,$password,$database);
//$con=mysqli_connect("localhost","root",",","libarry");
if(!$con)
{
    die("error detected".mysqli_error($con));
}
?>