<?php
// include("C:\\xampp\\TaskManagement\\TaskMangementDB.db"); put divs in between each thing maybe
require("NavBar.php");
include_once("loginCheck_User.php");

$unameError = $pwdError = "";
$allField = True;

if (isset($_POST['login'])) {

    if ($_POST['uname'] == NULL) {
        $unameError = "Username Required.";
        $allField = FALSE;
    }

    if ($_POST['pwd'] == NULL) {
        $pwdError = "Password Required.";
        $allField = FALSE;
    }

    if ($allField == True) {
        $userArray = verifyLogin();
        if ($userArray != null) {

            $uname = $userArray[0][1];
            $pwd = $userArray[0][2];
            $role = $userArray[0][3];

            if ($role == "user") {
                header("Location: User_Homepage.php?Users=" . $userArray[0][1]);
            }
            if ($role == "admin") {
                header("Location: Admin_Homepage.php?Users=" . $userArray[0][1]);
            }
        }
    } else {
        $invalidMesg = "Invalid Username and Password.";
    }
}
?>


<body class="navbarStart">
    <nav class="navbar navbar-light navbarStart justify-content-between" style="height: 95px">
        <div>
            <h1 class="titlefont3">Taskado</h1>
            <h1 class="titlefont2">Taskado</h1>
            <h1 class="titlefont1">Taskado</h1>
        </div>
        <div>
            <a href="Sign-Up.php"><button class="signupButton2 buttonText btn btn-outline-light my-2 my-sm-0 " style="background-color:cornflowerblue" type="submit">No-Account?</button></a>
        </div>
        <nav class="mybox">
            <h1 class="login_txt" style="color: white;">Login</h1>
            <form method="post">
                <div>
                    <h2 class="username_txt" style="color: white;">Username</h2>
                    <input type="text" class="form-control" name="uname" placeholder="Username">
                    <span class="text-danger" style="font-weight: bold; top:60%; left:38%;"><?php echo $unameError; ?></span>
                </div>
                <div>
                    <h2 class="password_txt" style="color: white;">Password</h2>
                    <input type="password" class="form-control" name="pwd" placeholder="Password">
                    <span class="text-danger" style="font-weight: bold;"><?php echo $pwdError; ?></span>
                </div>
                <div class="form-group logincenter">
                    <input type="submit" name="login" class="login_btn form-control" value="Login">
                </div>
            </form>
            <div>
                <a href="StartPage.php"><input type="submit" class="back_btn" value="Back"></a>
            </div>
            <div>
                <img src="loginImg.jpg" class="loginImg">
            </div>
        </nav>
</body>