<?php
include 'database.php';
if(isset($_POST['submit']))

    $fullname=$_POST['fname'];
    $username=$_POST['uname'];
    $email=$_POST['email'];
    $phonenumber=$_POST['pnumber'];
    $image=$_POST['photo'];
   $tmp_name=$_POST['photo'];
    $password=$_POST['pass'];
    $cpassword=$_POST['confirmpass'];
    $gen=$_POST['gender']; 
    $standard=$_POST['standard'];
   
    
     if($password!==$cpassword){
         echo'<script>alert("password did not match");
         window.location="firtspage.php";</script>';
     }
     else{
        move_uploaded_file($tmp_name,"$image");
         $sql="insert into voteregister (fname,uname,email,phone,photo,password,confirmpass,gender,standard,status,votes)
         values('$fullname','$username','$email','$phonenumber','$image','$password','$cpassword','$gen','$standard',0,0)";
         $result=mysqli_query($con,$sql);
         if($result){
            echo'<script>alert("registration successfull")</script>';
            echo'<script>window.location="reg.php";</script>';
         }
     }
            

        
    