<?php
// include("C:\\xampp\\TaskManagement\\TaskMangementDB.db"); put divs in between each thing maybe style="position:absolute; top:-6%; left:1100px; width:550px; height:800px">
require("NavBar.php");
?>

<body class="navbarStart">
    <nav class="navbar navbar-light navbarStart justify-content-between" style="height: 95px">
        <div>
            <h1 class="titlefont3">Taskado</h1>
            <h1 class="titlefont2">Taskado</h1>
            <h1 class="titlefont1">Taskado</h1>
        </div>
        <div>
            <a href="User_Login.php"><button class="AdminLoginButton buttonText btn btn-outline-light my-2 my-sm-0 " style="background-color:cornflowerblue" type="submit">User Login</button></a>
            <a href="Sign-Up.php"><button class="signupButton2 buttonText btn btn-outline-light my-2 my-sm-0 " style="background-color:cornflowerblue" type="submit">No-Account?</button></a>
        </div>
        <nav class="mybox">
            <h1 class="login_txt" style="color: white;"> Admin Login</h1>
            <div>
                <h2 class="username_txt" style="color: white;">Username</h2>
                <input type="text" name="Username" placeholder="Username">
            </div>
            <div>
                <h2 class="password_txt" style="color: white;">Password</h2>
                <input type="password" name="Password" placeholder="Password">
            </div>
            <div>
                <a href="User_Homepage.php"><input type="submit" class="login_btn" value="Login"></a>
            </div>
            <div>
                <a href="StartPage.php"><input type="submit" class="back_btn" value="Back"></a>
            </div>
            <div>
                <img src="loginImg.jpg" class="loginImg">
            </div>
        </nav>
</body>