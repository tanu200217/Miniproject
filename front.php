<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
</head>
<style>
    *{
        background-color:rgb(252, 171, 244)
    }

    .image{
        border-radius: 50%;
        width:150px;
        height:150px;
        margin-top:-70px;

    }
    .text{
        text-align: center;
        font-family: "Book Antiqua";
    }
    .login{
        background-color:orange;
        margin-left:600px;
        width: 400px;
        height: 100px;
        font-size: 20px;
        font-family: "Arial Black";
        border-radius: 20%;
        cursor: pointer;
    }
    .reg{
        background-color: aquamarine;
        color:blue;
        margin-left:700px;
        width: 200px;
        height: 90px;
        font-size:20px;
        font-family:Algerian;
        border-radius: 10%;
        cursor: pointer;
    }
</style>
<body >
<form >
    <table align ="center">
        <tr>
    <div> <h1 class="text">DIGI VOTING </h1></div>
            <img class="image" src="logo.jpeg" alt="votelogo" >
            <hr>
        </tr>
<br>
    <input class="login" type="button" name="login" value="Click to login" onClick="location.href = 'http://localhost:8080/voting%20project/reg.php'"></td>
        <br>
    <br>
    <input class="reg"  type=button name="register" value="Register" onClick="location.href = 'http://localhost:8080/voting%20project/firtspage.php'"/></td>

    </table>
</form>
</body>
</html>