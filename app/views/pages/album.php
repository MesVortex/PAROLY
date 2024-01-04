<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>ADD ALBUM</h1>
     <form method="post" action="AddController.php">
        <label for="album_name">Nom de l'album:</label>
        <input type="text" name="album_name" required>
        
        <label for="album_image">Image de l'album:</label>
        <input type="text" name="album_image" required>
        
        <input type="hidden" name="action" value="addAlbum">
        <input type="submit" value="Ajouter un album">
    </form>
</body>
</html>