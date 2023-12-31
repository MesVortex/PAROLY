<?php
require_once("./app/controllers/apiController.php");
$apiEndpoint = 'https://openwhyd.org/hot/electro?format=json';
$curlApiClient = new CurlApiClient($apiEndpoint);
$data = $curlApiClient->fetchData();
?>

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

    <div class="main-container">
        <?php include("./app/helpers/navbar.php") ?>

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
    </div>

    <script src="https://kit.fontawesome.com/23cecef777.js" crossorigin="anonymous"></script>
</body>

</html>