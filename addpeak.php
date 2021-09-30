<?php
require_once  ('includes/db.php');
require_once ('includes/functions.php');
?>

<!DOCTYPE html>
<html>
<head>
    <link href="css/normalize.css" rel="stylesheet" type="text/css">
    <link href="css/mainstyling.css" rel="stylesheet" type="text/css">
    <title>Add New Hike</title>
</head>

<body>
<div class="form">
<!--    will make function for upload below-->
    <form method="post" action="newPeakUpload.php">
        <h1 class="add-hike-title">Add New Hike</h1>
        <h5>...just fill out the data below</h5>
        <section>
            <h2>Name</h2>
            <p>
                <input type="text" id="name" name="name">
            </p>
        </section>
        <section>
            <h2>Location</h2>
            <p>
                <input type="text" id="location" name="location">
            </p>
        </section>
        <section>
            <h2>Elevation</h2>
            <p>
                <input id="elevation" type="text" name="elevation">
            </p>
        </section>
        <section>
            <h2>Difficulty Level (1>5)</h2>
            <p>
                <input id="difficulty" type="text" name="level">
            </p>
        </section>
        <section>
            <h2>Mountain Range</h2>
            <p>
                <input type="text" id="range" name="mountain_range">
            </p>
        </section>
        <section>
            <h2>Image Name</h2>
            <p>
                <input type="text" id="image" name="image">
            </p>
        </section>
        <div class="form-buttons">
            <p><button type="reset">Reset</button></p>
            <p><button type="submit">Add Hike!</button></p>
        </div>
    </form>
</div>

</body>

</html>
