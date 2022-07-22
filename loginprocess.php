<?php

        session_start();
        include 'database.php';
         
            $uname=$_POST['uname'];
            $password=$_POST['pass'];
            $standard=$_POST['standard'];
            $sql="select * from voteregister where uname='$uname' and password='$password'";
            $result=mysqli_query($con,$sql);
            if(mysqli_num_rows($result)>0){
                $sql="select uname,photo,votes,email from voteregister where standard='groups'";
                echo"<script>alert('login done')</script>";
                echo"<script> window.open('welcome.html','_self')</script>";
                
                $groupsec=mysqli_query($con,$sql);
                if(mysqli_num_rows($groupsec)>0){
                $groups=mysqli_fetch_all($groupsec,MYSQLI_ASSOC);
                $_SESSION['groups']=$groups;
                }
                $data=mysqli_fetch_array($result);
                $_SESSION['email']=$data['email'];
                $_SESSION['status']=$data['status'];
                $_SESSION['data']=$data;
            }
            
            else
            {
               echo"<script>alert('wrong username and password')</script>";
                echo "<script>window.open('reg.php','_self')</script>";
            }
           
        
         ?>
            