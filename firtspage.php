<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="first.css">
    <link rel="stylesheet" href="css/all.css">
<body>
    <div class="container">
    <div class="heading">Registration</div>
    <form action="process.php" method="post">
        <div class="details">
            <div class="box">
                <span class="det">Full Name</span>
                <input type="text" placeholder="Enter your fullname" name="fname">
            </div>
            <div class="box">
                <span class="det">Username</span>
                <input type="text" placeholder="Enter your Username" name="uname">
            </div>
            <div class="box">
                <span class="det">Email</span>
                <input type="text" placeholder="Enter your Email" name="email">
            </div>
            <div class="box">
                <span class="det">Phone number</span>
                <input type="phone" placeholder="Enter your Phone number" name="pnumber">
            </div>
            <div class="box">
                <span class="det">upload your Image</span>
                <input type="file" name="photo">
            </div>
            <div class="box">
                <span class="det">Password</span>
                <input type="password" placeholder="Enter your Password" name="pass">
            </div>
            <div class="box">
                <span class="det">Confirm password</span>
                <input type="password" placeholder="Confirm Password" name="confirmpass">
            </div>
            
        </div>
        <div class="form">
            <span class="title">Gender</span>
            <div class="category">
                <input type="radio" name="gender" value="m">Male 
                <input type="radio" name="gender"value="f">Female
                <input type="radio" name="gender" value="o">Other
            </div>

        </div>
        <select name="standard" >
                        <option value="1"name="standard">voter</option>
                        <option value="2"name="standard">groups</option>
                    </select><br>
        <div class="button">
            <input type="submit" value="Register" name="submit">

        </div>
    </form>
    </div>

</body>

</html> 
