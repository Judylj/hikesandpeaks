<?php

function getALLPeaks(PDO $db): array
//extracts the data from the database and outputs an array
{
    $sqlStr =
//        this is a MySql query, retrieves data items from (hikes and peaks db) to a function(get ALLPeaks)
        'SELECT'
        .'`peak_data` .`id`, `name`, `level`, `location`, `elevation`, `mountain_range`, `terrain`, `image`'
        .'FROM `peak_data`'
        .'LEFT JOIN `terrain`'
        .'ON `peak_data`.`terrain` = `terrain`.`id`;';
    $query = $db->prepare($sqlStr);
//requests information from the db (hikes and peaks) and asks to prepare, then get all / fetchall
    $query->execute();

    return $query->fetchAll();

//this is then called in index.php (see $peak_data = getALLPeaks($db);)
}