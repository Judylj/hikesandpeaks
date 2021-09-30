<?php
require_once ('includes/db.php');
require_once('includes/functions.php');

$hikeAdded = addNewHike($db, $_POST);

if ($hikeAdded) {
    header( 'location: index.php');
} else {
    header('location: addpeak.php');
}
