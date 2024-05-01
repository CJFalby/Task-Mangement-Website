<?php
require("NavBar.php");
require("db_queries.php");
$allField = true;

if (isset($_POST['CreateList'])) {

    if ($_POST['ListName'] == NULL) {
        $unameError = "List Name Required.";
        $allField = FALSE;
    }
    if ($allField == TRUE) {
        CreateList($_POST['ListName'], $_GET['id']);
    }
}


?>

<body class="bgColor">
    <nav class="navbar navbar-light navbarStart justify-content-between" style="height: 95px">
        <div>
            <h1 class="titlefont3">Taskado</h1>
            <h1 class="titlefont2">Taskado</h1>
            <h1 class="titlefont1">Taskado</h1>
        </div>
        <a href="StartPage.php"><button class="signupButton1 buttonText btn btn-outline-light my-2 my-sm-0 " style="background-color:cornflowerblue" type="submit">Log-Out</button></a>
    </nav>
    <div class="container">
        <main role="main" class="pb-3">
            <br>

        </main>
    </div>
    </nav>
    <nav class="box1">
        <h1 class="titlefont4">Create List</h1>
        <div>
            <form method="post">
                <div>
                    <h2 class="username_txt" style="top: 45%; left: 4%; color: white; text-shadow: -1px 1px 2px #0f467c, 1px 1px 2px #0f467c, 1px -1px 5px #0f467c, -1px -1px 5px #0f467c;">List Name</h2>
                    <input type="text" class="form-control" name="ListName" placeholder="ListName">
                    <span class="text-danger" style="font-weight: bold; top:60%; left:38%;">
                </div>
                <div class="form-group logincenter">
                    <input type="submit" name="CreateList" class="login_btn form-control" style="width:300px; top: 90%; left: 87%" value="Create List">
                    <input type="submit" name="" class="login_btn form-control" style="width:300px; top: 90%; left: 67%" value="Back">
                </div>
            </form>
        </div>
    </nav>
</body>

<?php require("Footer.php"); ?>