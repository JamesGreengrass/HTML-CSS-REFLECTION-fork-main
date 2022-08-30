<?php

function full_news_array() {
    include("connection.php");

    try {
        $results = $db->prepare("SELECT * FROM `database-news`");
        $results->execute();
        $results->setFetchMode(PDO::FETCH_ASSOC);
        $news = $results->fetchAll();
        echo "Retrieved results";
        print_r($news);
    } catch (Exception $e) {
        echo "Unable to retrieve results";
        exit;
    }
}

function single_news_array($id, $column) {
    include("connection.php");

    try {
        $results = $db->prepare("SELECT $column FROM `database-news` WHERE id = $id");
        $results->execute();
        $results->setFetchMode(PDO::FETCH_ASSOC);
        $news = $results->fetch();
        //echo "Retrieved results";
        foreach($news as $key => $value) { 
            echo $value; 
        }
    } catch (Exception $e) {
        echo "Unable to retrieve results. Error: ";
        echo $e->getMessage();
        exit;
    }
}

?>