<?php

function verifyLogin()
{
    $db = new SQLite3('TaskMangementDB.db');
    $sql = "SELECT UserID, Username, PssWrd, RoleUA FROM Users WHERE Username=:uname and PssWrd=:pwd";

    $stmt = $db->prepare($sql);

    $stmt->bindParam(':uname', $_POST['uname'], SQLITE3_TEXT);
    $stmt->bindParam(':pwd', $_POST['pwd'], SQLITE3_TEXT);

    $result = $stmt->execute();

    while ($row = $result->fetchArray(SQLITE3_NUM)) {
        $arrayResult[] = $row;
    }

    return $arrayResult;
}
