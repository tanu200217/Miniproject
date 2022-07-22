<?php
session_start();
$data=$_SESSION['data'];

if($_SESSION['status']==1){
    $status='<b class"text-success">Voted</b>';
}
else{
    $status='<b class"text-danger">Not Voted</b>';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>vote counting</title>
</head>
<style>
    *{
        background-color:rgb(159, 244, 232);
    }

    button{
        background-color:red;
        border:none;
        color:white;
        padding:15px 32px;
        text-align:center;
        text-decoration:none;
        display:inline-block;
        font-size:16px;
        cursor:pointer;
        margin-left:50%;
    }
    .b{
        background-color:blue;
    }
    
    .cssmarquee {
        height: 50px;
        overflow: hidden;
        position: relative;
    }
    .cssmarquee h1 {
        font-size: 2em;

        position: absolute;
        width: 100%;
        height: 100%;
        margin: 0;
        line-height: 50px;
        text-align: center;
        transform:translateX(100%);
        animation: cssmarquee 10s linear infinite;
    }
    @keyframes cssmarquee {
        0% {
            transform: translateX(100%);
        }
        100% {
            transform: translateX(-100%);
        }
    }
</style>
<body >
         <div class="cssmarquee"><h1>COUNTING VOTING </h1></div><hr>
                <br/>
           <div class="row-5">
               <div class="row-7">
                    <!--group-->
                          <?php
                    
                    if(isset($_SESSION['groups'])){
                        $groups=$_SESSION['groups'];
                        for($i=0;$i<count($groups);$i++){
                            ?>
                            <div class="row">
                            <div class="col-4">
                                <img src="<?php echo $groups[$i]['photo']?>" alt="group image">
                            </div>
                            <div class="col-8">
                                 <strong class="text-dark">Group Name:</strong>
                                 <?php echo $groups[$i]['uname']?><br>
                                 <strong class="text-dark">Votes:</strong>
                                 <?php echo $groups[$i]['votes']?>"<br>
                            </div>
                        </div>
                        <form action="voting.php"method="post">
                            <input type="hidden" name="groupvote"<?php echo $groups[$i]['votes']?>>
                            <input type="hidden" name="groupid" <?php echo $groups[$i]['email']?>>
                            <?php
                            if($_SESSION['status']==1){
                                ?>
                                <button class="white">Voted</button>
                                <?php
                            }
                            else{
                                ?>
                                <button class="dang" type="submit">vote</button>
                                <?php
                            }
                            ?>
                        </form>
                        <hr>
                            <?php
                         }
                    }else{
                        ?>
                        <div class="cont">
                        <p>No group to display</p>
                    </div>
                    <?php
                    }
                   ?>
                   
               
               <div class="col-5">
                    <!--user profile-->
                   
                    <strong class="text-dark">Name:</strong>
                    <?php echo $data['uname'] ; ?><br>
                    <strong class="text-dark">Mobile:</strong><br>
                    <?php echo $data['phone'] ; ?><br>
                    <strong class="text-dark">status:</strong><br>
                    <?php echo $status ; ?><br>
               </div><hr>
               
                
           </div>     
           
            <div class="backb">
                <a href="reg.php"><button class="b">Back</button></a>
            </div><br>
            <div class="backb">
                <a href="front.php"><button class="b">Logout</button></a>
            </div>
</body>
</html>