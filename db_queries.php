<?php

function getID($uname)
{
    $db = new SQLite3('TaskMangementDB.db');
    $sql = "SELECT UserID FROM Users WHERE Username='" . $uname . "'";

    $stmt = $db->prepare($sql);

    $result = $stmt->execute();

    while ($row = $result->fetchArray()) {
        $arrayResult[] = $row;
    }

    return $arrayResult;
}

function ListInfo($id)
{
    $db = new SQLite3('TaskMangementDB.db');
    $sql = "SELECT ListID, ListName FROM Lists WHERE Users_UserID='" . $id . "'";

    $stmt = $db->prepare($sql);

    $result = $stmt->execute();

    while ($row = $result->fetchArray()) {
        $arrayResult[] = $row;
    }

    return $arrayResult;
}

function TaskInfo($id)
{
    $db = new SQLite3('TaskMangementDB.db');
    $sql = "SELECT TaskName, Completed FROM Tasks WHERE Lists_ListID='" . $id . "'";

    $stmt = $db->prepare($sql);

    $result = $stmt->execute();

    $arrayResult = [];
    while ($row = $result->fetchArray()) {
        $arrayResult[] = $row;
    }

    return $arrayResult;
}

function CreateList($ListName, $id)
{
    $db = new SQLite3('TaskMangementDB.db');
    $sql = "INSERT INTO Lists (ListName, Users_UserID) VALUES ('" . $ListName . "', " . $id . ")";

    $stmt = $db->prepare($sql);

    $stmt->execute();
}

function CreateTaskInList($TaskName, $Listid, $id)
{
    $db = new SQLite3('TaskMangementDB.db');
    $sql = "INSERT INTO Tasks (TaskName, Users_UserID, Lists_ListID, Completed) VALUES ('" . $TaskName . "','" . $id . "','" . $Listid . "', 0)";

    $stmt = $db->prepare($sql);

    $stmt->execute();
}
