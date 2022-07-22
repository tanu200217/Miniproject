<?php
session_start();
include('database.php');
$votes=$_POST['groupvote'];
$totalvotes=$votes + 1;
$gid=$_POST['groupid'];
$uid=$_SESSION['email'];
$updatevotes=mysqli_query($con,"update 'library' set votes='$totalvotes'
where email='$gid'");
$updatestatus=mysqli_query($con,"update 'library' set status=1 where
email='$uid'");
if($updatevotes and $updatestatus){
    $getgroups=mysqli_query($con,"select uname,photo,votes,email from 
    voteregister where standard='group'");
    $groups=mysqli_fetch_all($setgroups,MYSQLI_ASSOC);
    $_SESSION['groups']=$groups;
    $_SESSION['status']=1;
    echo'<script>alert("Voting Successfully");
    window.location="dasb.php";
    </script>';


}else{
    echo'<script>alert("Technical error !! vote after sometime");
    window.location="dasb.php";
    </script>';
}

?>