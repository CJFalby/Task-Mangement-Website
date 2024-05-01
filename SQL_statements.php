<?php

$db = new SQLite3("C:\\xampp\\TaskManagement\\TaskMangementDB.db");
$sql = "SELECT * FROM Admins";
$stmt = $db->prepare($sql);
$result = $stmt->execute();

while ($row = $result->fetchArray()) {
    $arrayResult[] = $row;
    // echo ($row . " ");
}

echo "Test";
print_r($arrayResult);
