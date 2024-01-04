<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artiste View</title>
</head>
<body>
    <h1>ADD SONG</h1>
    <form method="post" action="ArtisteController.php">
        <label for="song_name">Nom de la chanson:</label>
        <input type="text" name="song_name" required>
        
        <label for="song_image">Image de la chanson:</label>
        <input type="text" name="song_image" required>
        
        <input type="hidden" name="action" value="addSong">
        <input type="submit" value="Ajouter une chanson">
    </form>
</body>
</html>
