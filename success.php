<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Openwhyd Playlists</title>
    <link rel="stylesheet" href="./public/css/style.css">
</head>

<body>

    <?php include("./app/helpers/sidebar.php") ?>

    <?php 
include("./app/helpers/navbar.php")
?> <?php
        // Specify the Openwhyd API endpoint
        $apiEndpoint = 'https://openwhyd.org/hot/electro?format=json';

        // Initialize a cURL session
        $ch = curl_init($apiEndpoint);

        // Set cURL options
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        // Execute the cURL session and get the response
        $response = curl_exec($ch);

        // Check for cURL errors
        if (curl_errno($ch)) {
            echo 'Curl error: ' . curl_error($ch);
        }

        // Close cURL session
        curl_close($ch);

        // Decode the JSON response
        $data = json_decode($response, true);

        // Output the structure of the $data variable
        // var_dump($data);
        ?>

    <div class="spotify-playlists">
        <h2>Openwhyd Playlists</h2>
        <div class="list">
            <?php
                // Display only 10 items
                $count = 0;
                foreach ($data['tracks'] as $item):
                    if ($count >= 10) {
                        break;
                    }
                    ?>
            <div class="item">
                <img src="<?php echo $item['img']; ?>" />
                <div class="play">
                    <span class="fa fa-play"></span>
                </div>
                <h4>
                    <?php echo $item['name']; ?>
                </h4>
                <p>
                    <?php echo $item['uNm']; ?>
                </p>
            </div>
            <?php
                    $count++;
                endforeach;
                ?>
        </div>
    </div>

    <script src="https://kit.fontawesome.com/23cecef777.js" crossorigin="anonymous"></script>
</body>

</html>