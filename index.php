<?php
require_once ('includes/db.php');
require_once('includes/functions.php');
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/mainstyling.css">
        <title>Outdoor Inspiration | Hikes & Peaks</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <body>
        <div class="background-images">
            <h1 class="title title1">Hikes & Peaks</h1>
            <div class="title subheading">
                <h2 class="title2">Outdoor Inspiration</h2>
<!--        button    -->
                <form action="addpeak.php" method="post">
                    <button class="mainbutton">Add Hike!</button>
                </form>
            </div>
            <div class="layout-flex">
<?php
$peak_data = getALLPeaks($db);
//peak data represents each data item for each peak
foreach ($peak_data as $peak) {

    echo formatImageContainer($peak);
}

?>
            </div>

            <div class="information">
                <h2 class="heading-title">About...</h2>
                <div class="description">Hikes & Peaks is a platform for climbers, hikers and nature
                    lovers to share and discover new walks, hikes and outdoor spaces.
                     Add your hike using the "add my hike" button, or simply use it as a source of inspiration
                     for your next adventure. Happy Hiking!
                </div>
            </div>
        </div>
    </body>
</html>