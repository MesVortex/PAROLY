<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= SITENAME?></title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }



        body {
            background: linear-gradient(0deg, rgba(0, 0, 0, 1) 0%, rgba(34, 116, 24, 1) 100%);
            background-size: cover;
            background-repeat: no-repeat;
            height: 95vh;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            display: grid;
            place-items: center;
            min-height: 100vh;
            overflow: hidden;
        }

        .container {
            background-color: rgb(173 237 165 / 63%);
            width: 600px;
            height: 450px;
            position: relative;
            display: grid;
            grid-template-columns: 1fr 1fr;
            place-items: center;
            line-height: 1.5;
            box-shadow: 0 20px 30px rgba(0, 0, 0, 0.185);
            border-radius: 5px 50px;
        }

        .container img {
            width: 250px;
            height: 400px;
            object-fit: cover;
            object-position: center;
            border-radius: 5px 50px;
        }

        .container-text {
            padding: 10px 40px 10px 10px;
        }

        .container-text h2 {
            font-size: 1.2rem;
            color: #1A2250;
        }

        .container-text form {
            margin-top: 20px;
        }

        .container-text label {
            font-size: 14px;
            color: white;
            display: block;
            margin-bottom: 5px;
        }

        .container-text input {
            width: 100%;
            border: none;
            padding: 10px;
            border-radius: 3px;
            margin-bottom: 10px;
            font-size: 1rem;
            color: #656880;
            border: 2px solid #DADDEC;
        }

        .button {
            all: unset;
            display: flex;
            align-items: center;
            position: relative;
            padding: 0.1em 3em;
            border: rgba(34, 116, 24, 1) solid 0.15em;
            border-radius: 0.25em;
            color: white;
            font-size: 1.5em;
            font-weight: 600;
            cursor: pointer;
            overflow: hidden;
            transition: border 300ms, color 300ms;
            user-select: none;
        }

        .button p {
            z-index: 1;
        }

        .button:hover {
            color: #212121;
        }

        .button:active {
            border-color: teal;
        }

        .button::after,
        .button::before {
            content: "";
            position: absolute;
            width: 9em;
            aspect-ratio: 1;
            background: rgba(34, 116, 24, 1);
            opacity: 50%;
            border-radius: 50%;
            transition: transform 500ms, background 300ms;
        }

        .button::before {
            left: 0;
            transform: translateX(-8em);
        }

        .button::after {
            right: 0;
            transform: translateX(8em);
        }

        .button:hover:before {
            transform: translateX(-1em);
        }

        .button:hover:after {
            transform: translateX(1em);
        }

        .button:active:before,
        .button:active:after {
            background: teal;
        }
    </style>
</head>

<body>
    <div class="container">
        <img src="<?php echo URLROOT ?>/img/playlist.jpg" alt="image">
        <div class="container-text">
            <h2>Add PlayList</h2>
            <form method="POST" action="<?= URLROOT ?>/ArtisteController/addPlaylist" enctype="multipart/form-data">
                <label for="song_name">Name Of Playlist:</label>
                <input type="text" name="name" required>

                <label for="song_image">Image of playlist:</label>
                <input type="file" name="image" required>


                <button type="submit" class="button">
                    <p>ADD</p>
                </button>
            </form>
        </div>
    </div>
</body>

</html>