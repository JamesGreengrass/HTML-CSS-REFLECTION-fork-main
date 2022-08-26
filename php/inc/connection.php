<?php

try {
    $db = new PDO("mysql:host=localhost;dbname=database-news;","root","");
    $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    echo "Connected to the database!";
} catch(Exception $e) {
    echo "Unable to connect. Error: ";
    echo $e->getMessage();
    exit;
}

/*
    foreach($result as $key => $value) {
        $id = $value['id'];
        //echo $id;
        $title = $value['title'];
        //echo $title;
    }
*/

?>