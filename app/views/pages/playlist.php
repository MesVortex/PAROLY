
<?php include APPROOT . '/views/includes/sidebar.php' ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../style.css">
        <script src="https://cdn.tailwindcss.com"> </script>
        
        <title>Playlist</title>
    </head>
    <body>
        
        <div class="bg-black text-gray-300 min-h-screen p-10">
  
  <!-- header -->
  <div class="flex">
    <img class="mr-6" src="https://placekitten.com/g/200/200">
    <div class="flex flex-col justify-center">
      <!-- content -->
      <h4 class="mt-0 mb-2 uppercase text-gray-500 tracking-widest text-xs">Playlist</h4>
      <h1 class="mt-0 mb-2 text-white text-4xl">Spotify of Ismail</h1>
      
      <p class="text-gray-600 mb-2 text-sm">With J. Cole, Quavo, Ty Dollar $ign</p>
      <p class="text-gray-600 text-sm">Created by <a>Spotify</a> - 50 songs, 3 hr 2 min</p>
    </div>
  </div>
  
  <!-- action buttons -->
  <div class="mt-6 flex justify-between">
    <div class="flex">
      <button class="mr-2 bg-green-500 text-green-100 block py-2 px-8 rounded-full">Play</button>
      <button class="mr-2 border border-white block p-2 rounded-full">Supprimer</button>
      <button class="mr-2 border border-white block p-2 rounded-full">...</button>
    </div>
  </div>
  
  <!-- song list   -->
  <div class="mt-10">
    <!-- song list header -->
    <div class="flex text-gray-600">
      <div class="p-2 w-8 flex-shrink-0"></div>
      <div class="p-2 w-8 flex-shrink-0"></div>
      <div class="p-2 w-full">Title</div>
      <div class="p-2 w-full">Artist</div>
      <div class="p-2 w-full">Album</div>
      <div class="p-2 w-12 flex-shrink-0 text-right">⏱</div>
    </div>
    
    <div class="flex border-b border-gray-800 hover:bg-gray-800">
      <div class="p-3 w-8 flex-shrink-0">▶️</div>
      <div class="p-3 w-full">My Song Here</div>
      <div class="p-3 w-full">Eminem</div>
      <div class="p-3 w-full">Spotify</div>
      <div class="p-3 w-12 flex-shrink-0 text-right">5:35</div>
    </div>
    <div class="flex border-b border-gray-800 hover:bg-gray-800">
      <div class="p-3 w-8 flex-shrink-0">▶️</div>
      <div class="p-3 w-full">My Song Here</div>
      <div class="p-3 w-full">Eminem</div>
      <div class="p-3 w-full">Spotify</div>
      <div class="p-3 w-12 flex-shrink-0 text-right">5:35</div>
    </div>
    <div class="flex border-b border-gray-800 hover:bg-gray-800">
      <div class="p-3 w-8 flex-shrink-0">▶️</div>
      <div class="p-3 w-full">My Song Here</div>
      <div class="p-3 w-full">Eminem</div>
      <div class="p-3 w-full">Spotify</div>
      <div class="p-3 w-12 flex-shrink-0 text-right">5:35</div>
    </div>
    <div class="flex border-b border-gray-800 hover:bg-gray-800">
      <div class="p-3 w-8 flex-shrink-0">▶️</div>
      <div class="p-3 w-full">My Song Here</div>
      <div class="p-3 w-full">Eminem</div>
      <div class="p-3 w-full">Spotify</div>
      <div class="p-3 w-12 flex-shrink-0 text-right">5:35</div>
    </div>
    <div class="flex border-b border-gray-800 hover:bg-gray-800">
      <div class="p-3 w-8 flex-shrink-0">▶️</div>
      <div class="p-3 w-full">My Song Here</div>
      <div class="p-3 w-full">Eminem</div>
      <div class="p-3 w-full">Spotify</div>
      <div class="p-3 w-12 flex-shrink-0 text-right">5:35</div>
    </div>
  </div>
</div>
</body>
</html>