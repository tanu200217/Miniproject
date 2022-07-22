<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>add party</title>
    <style>
        .dropbtn {
            background-color: #4CAF50;
            color: white;
            padding: 16px;
            font-size: 16px;
            border: none;
            cursor: pointer;
        }

        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px
            0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {
            background-color: #f1f1f1
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .dropdown:hover .dropbtn {
            background-color: #3e8e41;
        }
        .cssmarquee {
height: 50px;
overflow: hidden;
position: relative;
}
.cssmarquee h1 {
font-size: 2em;
color: turquoise;
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
</head>
    <body background-color="#e0ffff">
<center>
    <div class="cssmarquee">
     <h1 style="color: green">
        Select Party To VOTE.
    </h1>
    </div>
    <div class="dropdown">
        <a href="desb.php">
        <button class="dropbtn">
            Parties
        </button></a>
        <div class="dropdown-content" >
            <a href="#">
                <img src="bjp.jpg"
                     width="30" height="25"> BJP</a>

            <a href="#">
                <img src="aap.jpg"
                     width="30" height="25"> AAP</a>

            <a href="#">
                <img src="bsp.jpg"
                     width="30" height="25"> BSP</a>
            <a href="#">
                <img src="sp.jpg"
                     width="30" height="25"> SP</a>
            <a href="#">
                <img src="congress.jpg"
                     width="30" height="25"> CONGRESS</a>
        </div>
    </div>
</center>
</body>

</html>

</body>
</html>