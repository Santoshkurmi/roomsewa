<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bing Maps Integration</title>
    <script type='text/javascript' src='https://www.bing.com/api/maps/mapcontrol?key=AlSfV3wSTlPFqxEdS97v1d1ZK25Qg4OxZerOAjFYQPZwtY4bQqhz4jDRou_kCmbJ&callback=loadMap' async defer></script>
    <style>
        #map {
            height: 300px;
            width: 100%;
            border-radius: 10px;
            border-width: 5px;
            border-color: green;
        }
    </style>
</head>
<body>

<div id="map"></div>

<script>
    function loadMap() {
        <?php
        global $latitude,$longitude;
        include("./config/config.php");
        $property_id = $_GET['property_id'];
        $sql = "SELECT latitude, longitude FROM add_property where property_id=$property_id";
        $result = $db->query($sql);

        $row = $result->fetch_assoc();
        $latitude = $row['latitude'];
        $longitude = $row['longitude'];
        ?>
        var map = new Microsoft.Maps.Map('#map', {
            credentials: 'AlSfV3wSTlPFqxEdS97v1d1ZK25Qg4OxZerOAjFYQPZwtY4bQqhz4jDRou_kCmbJ',
            center: new Microsoft.Maps.Location(<?php echo $latitude; ?>, <?php echo $longitude; ?>),
            zoom: 5.5
        });

        // Fetch locations from the database and add markers to the map
        

        // Add marker using fetched data
        addMarker(<?php echo $latitude; ?>, <?php echo $longitude; ?>);

        function addMarker(latitude, longitude) {
            var location = new Microsoft.Maps.Location(latitude, longitude);
            var pin = new Microsoft.Maps.Pushpin(location);
            map.entities.push(pin);
        }
    }

    // Load the map after the page has fully loaded
    document.addEventListener('DOMContentLoaded', loadMap);
</script>

</body>
</html>
