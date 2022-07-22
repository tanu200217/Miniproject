<html>
<head>
        <title>Login page</title>
        <link rel = "stylesheet" type="text/css" href="reg.css">
        <body>
            <div class ="loginbox">
                <img src="avatar2.jpeg" class="avatar">
                <h1>Login here</h1>
                <form method="post" action="loginprocess.php">
                    <p>username</p>
                    <input type ="text" name="uname" placeholder="Enter username">
                    <p>Password</p>
                    <input type="password" name="pass" placeholder="Enter password"><br>
                    <select name="standard" >
                        <option value="1">voter</option>
                        <option value="2">groups</option>
                    </select><br><br>
                    <input type="submit" name="submit" value="login"><br>
                    <a  href = "#"> forgot password</a><br>
                    <a href="#">don't have an account</a>


                </form>
            </div>
</body>
</head>
</html>