<?php
$db = new PDO('mysql:host=localhost;dbname=fietsenmaker',
    "root" . "");

funtion getFietsen(:array){
    try{
        Global $db;
        $db = new PDO('mysql:host=localhost;dbname=fietsenmaker',
            "root" . "");
        $query = $db->prepare("select * FROM fietsenmaker");
        $query->execute();
        $fietsen = $query->fetchAll(PDO::FETCH_ASSOC);
        return $fietsen;

    } catch (/PDOException)
}
