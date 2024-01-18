<?php
require_once APPROOT . '/controllers/apiController.php';
require_once APPROOT . '/controllers/Users.php';

$apiEndpoint = 'https://openwhyd.org/hot/electro?format=json';
$curlApiClient = new CurlApiClient($apiEndpoint);
$data = $curlApiClient->fetchData();

require APPROOT . '/views/includes/header.php';
?>

<?php require APPROOT . '/views/includes/header.php'; ?>

<?php include APPROOT . '/views/includes/sidebar.php' ?>

<div class="main-container">
    <?php include APPROOT . '/views/includes/navbar.php' ?>

    


    <div class="spotify-playlists">
    <h2>Openwhyd Playlists <p></p></h2>
    <div class="list">
        <?php
        $startIndex = 10;
        $endIndex = 19; 

        for ($count = $startIndex; $count <= $endIndex; $count++):
            $item = $data['tracks'][$count];
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
        <?php endfor; ?>
    </div>
</div>

</div>

<script src="https://kit.fontawesome.com/23cecef777.js" crossorigin="anonymous"></script>
