<?php

try {
    $db = new PDO("mysql:host=localhost;dbname=database-news;","root","");
    $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $stmt = $db->prepare("SELECT * FROM `database-news`");
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $result = $stmt->fetchAll();

    print_r($result);

    foreach($result as $key => $value) {
        $id = $value['id'];
        //echo $id;
        $title = $value['title'];
        //echo $title;
    }

} catch(Exception $e) {
    echo "Unable to connect. Error: ";
    echo $e->getMessage();
    exit;
}

echo "Connected to the database!";



?>