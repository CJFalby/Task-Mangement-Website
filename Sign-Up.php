<?php
// include("C:\\xampp\\TaskManagement\\TaskMangementDB.db");
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
            <a href="User_Login.php"><button class="signupButton2 buttonText btn btn-outline-light my-2 my-sm-0 " style="background-color:cornflowerblue" type="submit">Login</button></a>
        </div>

        <nav class="mybox">
            <h1 class="sign_up_txt" style="color: white">Sign-Up</h1>
            <div>
                <h2 class="username_txtSU" style="color: white">Username</h2>
                <input type="text" class="UsernameSU" placeholder="Username">
            </div>
            <div>
                <h2 class="password_txtSU" style="color: white">Password</h2>
                <input type="password" class="PasswordSU" placeholder="Password">
            </div>
            <div>
                <h2 class="Repassword_txtSU1" style="color: white">Re-Enter</h2>
                <h2 class="Repassword_txtSU2" style="color: white">Password</h2>
                <input type="password" class="RePasswordSU" placeholder="Re-Enter Password">
            </div>
            <div>
                <h2 class="email_txtSU" style="color: white">Email</h2>
                <input type="text" class="EmailSU" placeholder="Email">
            </div>
            <div>
                <a href="User_Login.php"><input type="submit" class="login_btnSU" value="Sign-Up"></a>
            </div>
            <div>
                <a href="StartPage.php"><input type="submit" class="back_btnSU" value="Back"></a>
            </div>
            <div>
                <img src="loginImg.jpg" class="loginImg">
            </div>
        </nav>
</body>