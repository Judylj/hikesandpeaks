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

//adding a new item onto the db//
function addNewHike(PDO $db, array $newPeak): bool
{
    $query = $db->prepare(
        'INSERT INTO `peak_data` (`name`, `location`, `elevation`, `level`, `mountain_range`, `image`)'
        . ' VALUES (?, ?, ?, ?, ?, ?);'
    );

    $name = $_POST['name'];
    $location = $_POST['location'];
    $elevation = $_POST ['elevation'];
    $level = $_POST['level'];
    $mountain_range = $_POST ['mountain_range'];
    $image = $_POST['image'];

    return $query->execute([$name, $location, $elevation, $level, $mountain_range, $image]);
}

function formatImageContainer(array $peak): string {
    if (empty($peak)) {
        throw new InvalidArgumentException('input is empty');
    }

    $container = '<div class="image-container">';
//    above defines the $container as a div which contains the images.
    $container .= '<div class="image-background">';
    if (!isset($peak['image']) || is_null($peak['image']) || strlen($peak ['image'])===0) {
        $peak['image']="unknown.jpg";
    }
//the above needs changing to new image dispaying image missing

    $container .= '<img src="images/' . $peak['image'] . '">';
    $container .= "</div>";
    $container .= '<div class="imagetext">';
    $container .= "<p><span class='text-label'>Name:</span> " . $peak['name'] . "</p>";
    $container .= "<p><span class='text-label'>Location:</span> " . $peak['location'] . "</p>";
    $container .= "<p><span class='text-label'>Elevation:</span> " . $peak['elevation'] . "</p>";
    $container .= "<p><span class='text-label'>Difficulty:</span> " . $peak['level'] . "</p>";
    $container .= "<p><span class='text-label'>Range:</span> " . $peak['mountain_range'] . "</p>";
    $container .= "</div>";
    $container .= "</div>";
    return $container;
//    the above is building the image conrtainer (format image container)
}
