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
            <h1 class="title">HIKES & PEAKS</h1>
            <h2><em>Outdoor Inspiration</em></h2>
            <div class="layout-flex">
<?php
$peak_data = getALLPeaks($db);
//peak data represents each data item for each peak
foreach ($peak_data as $peak) {
    $container = '<div class="image-container">';
//    above defines the $container as a div which contains the images.
    $container .= '<div class="image-background">';
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
echo $container;
}
?>
            </div>

            <div class="information">
                <h2>About...</h2>
                <div class="description">Hikes & Peaks is a platform for climbers, hikers and nature
                    lovers to share and discover new walks, hikes and outdoor spaces.
                     Add your hike using the "add my hike" button, or simply use it as a source of inspiration
                     for your next adventure. Happy Hiking!
                </div>
            </div>
        </div>
    </body>
</html>