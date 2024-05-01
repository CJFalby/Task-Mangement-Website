<?php
require("NavBar.php");
require("db_queries.php");

$userID = getID($_GET['Users']);
// echo $userID[0][0];

$List = ListInfo($userID[0][0]);

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
            <h1 class="pagefont"> Hello <?php echo $_GET['Users']; ?></h1>
            <br>

        </main>
    </div>
    </nav>
    <nav class="box1">
        <h1 class="titlefont4">Managing Tasks:</h1>
        <br>
        <br>
        <?php for ($I = 0; $I < count($List); $I++) {
            $Tasks = TaskInfo($List[$I][0]) ?>

            <div class="col">
                <div class="ListTitle">
                    <h2 style="color:white; text-shadow: -1px 1px 2px #0f467c, 1px 1px 2px #0f467c, 1px -1px 5px #0f467c, -1px -1px 5px #0f467c; letter-spacing: 1px; font-family: monospace;"><?php echo $List[$I][1]; ?></h2>
                </div>
                <div class="TaskBox col-6">
                    <?php $Z = 0;
                    //var_dump($Tasks);
                    if ($Tasks != NULL) {

                        while ($Z < count($Tasks)) { ?>
                            <div class="TaskName">
                                <h4 style="color:white; text-shadow: -1px 1px 2px #0f467c, 1px 1px 2px #0f467c, 1px -1px 5px #0f467c, -1px -1px 5px #0f467c; letter-spacing: 1px; font-family: monospace;"><?php echo $Tasks[$Z][0]; ?></h4>
                            </div>
                    <?php $Z++;
                        }
                    } //ENDFOR TASK 
                    ?>
                </div>
            </div>
        <?php } //ENDFOR LIST
        ?>
        <div>
            <a href=<?php echo "Create_List.php?id=" . $userID[0][0]; ?>><button class="CreateListButton buttonText btn btn-outline-light my-2 my-sm-0 " style="background-color:cornflowerblue" type="submit">Create List</button></a>
            <a href=<?php echo "Create_Task.php?id=" . $userID[0][0]; ?>><button class="CreateTaskButton buttonText btn btn-outline-light my-2 my-sm-0 " style="background-color:cornflowerblue" type="submit">Create Task</button></a>
            <a href=<?php echo "CreateNew_Admin.php?id=" . $userID[0][0]; ?>><button class="CreateUserButton buttonText btn btn-outline-light my-2 my-sm-0 " style="background-color:cornflowerblue" type="submit">Create User</button></a>
        </div>
    </nav>
</body>

<?php require("Footer.php"); ?>