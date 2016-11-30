<?php
    require_once 'config.php';
    require_once 'database.php';
    $db = new database($pdo); //Create new DB --> Send the config
    $rows = $db->getData('users'); //Execute a method sending custom parameter.

    //print_r($rows)
    echo json_encode($rows);
?>