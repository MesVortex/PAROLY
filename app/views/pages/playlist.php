<script src="https://cdn.tailwindcss.com"> </script>

<style>
input[type="range"]::-webkit-slider-thumb {
  -webkit-appearance: none;
  cursor: pointer;
  visibility: 1;
  opacity: 0;
}

input[type="range"]::-webkit-slider-thumb:hover {
  opacity: 1;
}

</style>
<div class="flex h-screen overflow-hidden relative">
  <div class="w-full xl:w-3/12 sm:w-4/12 bg-black text-white flex flex-col">
    <div class="w-52 py-5 px-8">
      <img src="//s22.q4cdn.com/540910603/files/design/Spotify_Logo_White.png" class="inline" alt="logo" />
    </div>
    <div class="px-3">
      <ul>
        <li class="bg-gray-700 text-gray-100 px-2 flex items-center rounded-sm capitalize">
          <a class= "flex justify-center items-center" href="<?php echo URLROOT; ?>/pages/index">
            <svg class="fill-current" viewBox="0 0 48 48" width="24px" height="48px">
              <path d="M39.5,43h-9c-1.381,0-2.5-1.119-2.5-2.5v-9c0-1.105-0.895-2-2-2h-4c-1.105,0-2,0.895-2,2v9c0,1.381-1.119,2.5-2.5,2.5h-9	C7.119,43,6,41.881,6,40.5V21.413c0-2.299,1.054-4.471,2.859-5.893L23.071,4.321c0.545-0.428,1.313-0.428,1.857,0L39.142,15.52	C40.947,16.942,42,19.113,42,21.411V40.5C42,41.881,40.881,43,39.5,43z" />
            </svg>
            <span class="px-4">home</span>
          </a>
          </li>
      </ul>
    </div>

    <div class="px-3 py-3">
      <ul>
        <li class="text-gray-400 hover:bg-opacity-10 hover:bg-white px-2 flex items-center rounded-sm capitalize cursor-pointer">
          <form action="<?php echo URLROOT ?>/PlaylistController/addPlaylistClient" method="post">
        <input type="text" placeholder= "Playlist name" name="playlistname"  class="block w-full p-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </input>
        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Upload file</label>
        <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" name = "image" type="file">
        <input class="mt-1 focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800" type="submit" name="addPlaylist" value="Ajouter playlist">
        

          </form>
        </li>      
      </ul>
    </div>
  </div>
  <main class="bg-gray-800 text-center text-red-100 w-full overflow-y-scroll">
    <div class="text-left p-8 bg-gradient-to-b from-green-500">
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
    <div id="recenty played" class="text-left p-8">
      <h2 class="text-3xl capitalize my-6">Recently played</h2>
      <div class="flex overflow-x-hidden">
        <div class="2xl:w-1/6 xl:w-1/5 lg:w-1/4 sm:w-1/3 px-3">
          <span class="bg-white bg-opacity-5 hover:bg-opacity-10 cursor-pointer flex flex-col rounded-sm">
            <img class="rounded-md sm:m-2 lg:m-4" src="https://source.unsplash.com/bsLXJsucvxc/200x200" />
            <span class="capitalize px-2 font-bold text-blue-100">
              <h3 class="text-lg text-blue-50 whitespace-nowrap overflow-ellipsis w-full overflow-x-hidden">may i elaborate? asdadsadsda</h3>
              <div class="text-sm my-2 text-gray-400 overflow-hidden overflow-ellipsis h-11">by mark francis carandang sdfage ergwergerg erwgwrg</div>
            </span>
          </span>
        </div>
        <div class="2xl:w-1/6 xl:w-1/5 lg:w-1/4 sm:w-1/3 px-3">
          <span class="bg-white bg-opacity-5 hover:bg-opacity-10 cursor-pointer flex flex-col rounded-sm">
            <img class="rounded-md sm:m-2 lg:m-4" src="https://source.unsplash.com/bsLXJsucvxc/200x200" />
            <span class="capitalize px-2 font-bold text-blue-100">
              <h3 class="text-lg text-blue-50 whitespace-nowrap overflow-ellipsis w-full overflow-x-hidden">may i elaborate? asdadsadsda</h3>
              <div class="text-sm my-2 text-gray-400 overflow-hidden overflow-ellipsis h-11">by mark francis carandang sdfage ergwergerg erwgwrg</div>
            </span>
          </span>
        </div>
        <div class="2xl:w-1/6 xl:w-1/5 lg:w-1/4 sm:w-1/3 px-3">
          <span class="bg-white bg-opacity-5 hover:bg-opacity-10 cursor-pointer flex flex-col rounded-sm">
            <img class="rounded-md sm:m-2 lg:m-4" src="https://source.unsplash.com/bsLXJsucvxc/200x200" />
            <span class="capitalize px-2 font-bold text-blue-100">
              <h3 class="text-lg text-blue-50 whitespace-nowrap overflow-ellipsis w-full overflow-x-hidden">may i elaborate? asdadsadsda</h3>
              <div class="text-sm my-2 text-gray-400 overflow-hidden overflow-ellipsis h-11">by mark francis carandang sdfage ergwergerg erwgwrg</div>
            </span>
          </span>
        </div>
        <div class="2xl:w-1/6 xl:w-1/5 lg:w-1/4 sm:w-1/3 px-3">
          <span class="bg-white bg-opacity-5 hover:bg-opacity-10 cursor-pointer flex flex-col rounded-sm">
            <img class="rounded-md sm:m-2 lg:m-4" src="https://source.unsplash.com/bsLXJsucvxc/200x200" />
            <span class="capitalize px-2 font-bold text-blue-100">
              <h3 class="text-lg text-blue-50 whitespace-nowrap overflow-ellipsis w-full overflow-x-hidden">may i elaborate? asdadsadsda</h3>
              <div class="text-sm my-2 text-gray-400 overflow-hidden overflow-ellipsis h-11">by mark francis carandang sdfage ergwergerg erwgwrg</div>
            </span>
          </span>
        </div>
        <div class="2xl:w-1/6 xl:w-1/5 lg:w-1/4 sm:w-1/3 px-3">
          <span class="bg-white bg-opacity-5 hover:bg-opacity-10 cursor-pointer flex flex-col rounded-sm">
            <img class="rounded-md sm:m-2 lg:m-4" src="https://source.unsplash.com/bsLXJsucvxc/200x200" />
            <span class="capitalize px-2 font-bold text-blue-100">
              <h3 class="text-lg text-blue-50 whitespace-nowrap overflow-ellipsis w-full overflow-x-hidden">may i elaborate? asdadsadsda</h3>
              <div class="text-sm my-2 text-gray-400 overflow-hidden overflow-ellipsis h-11">by mark francis carandang sdfage ergwergerg erwgwrg</div>
            </span>
          </span>
        </div>
        <div class="2xl:w-1/6 xl:w-1/5 lg:w-1/4 sm:w-1/3 px-3">
          <span class="bg-white bg-opacity-5 hover:bg-opacity-10 cursor-pointer flex flex-col rounded-sm">
            <img class="rounded-md sm:m-2 lg:m-4" src="https://source.unsplash.com/bsLXJsucvxc/100x100" />
            <span class="capitalize px-2 font-bold text-blue-100">
              <h3 class="text-lg text-blue-50 whitespace-nowrap overflow-ellipsis w-full overflow-x-hidden">may i elaborate? asdadsadsda</h3>
              <div class="text-sm my-2 text-gray-400 overflow-hidden overflow-ellipsis h-11">by mark francis carandang sdfage ergwergerg erwgwrg</div>
            </span>
          </span>
        </div>
      </div>
    </div>
  </main>
  <div id="player" class="absolute bg-black w-screen bottom-0 h-24 flex flex-row">
    <div id="cover-and-title" class="flex w-1/3">
      <div id="cover" class="w-24 h-24 p-2">
        <img src="https://source.unsplash.com/bsLXJsucvxc/100x100" class="object-cover h-full w-full" />
      </div>
      <div id="title" class="w-8/12 text-gray-200 flex flex-col justify-center">
        <h2 class="font-bold">Side family</h2>
        <div class="text-gray-300 overflow-ellipsis whitespace-nowrap overflow-x-hidden capitalize">may i elaborate? Daly wisdom from JB smove</div>
      </div>
    </div>
    <div id="controlers" class="w-1/3 flex flex-col h-full">
      <div class="h-3/5 flex justify-center items-center">
        <div class="rounded-full h-8 w-8 text-gray-300 hover:text-gray-100 cursor-pointer flex mx-2">
          <svg class="p-2 fill-current" viewBox="0 0 32 32">
            <g>
              <path d="M30.5,2.62a1,1,0,0,0-1,0L7.82,15.13a1,1,0,0,0,0,1.74L29.5,29.38a1,1,0,0,0,1.5-.86v-25A1,1,0,0,0,30.5,2.62ZM29,26.78,10.32,16,29,5.22Z" />
              <path d="M2,5.2a1,1,0,0,0-1,1V25.8a1,1,0,0,0,2,0V6.2A1,1,0,0,0,2,5.2Z" />
            </g>
          </svg>
        </div>
        <div class="rounded-full h-10 w-10 text-gray-100 cursor-pointer flex mx-2">
          <svg class="p-2 fill-current" viewBox="0 0 32 32">
            <path d="M28.62,15.13,4.38,1.13A1,1,0,0,0,2.88,2V30a1,1,0,0,0,.5.87,1,1,0,0,0,1,0l24.24-14A1,1,0,0,0,28.62,15.13ZM4.88,28.27V3.73L26.12,16Z" />
          </svg>
        </div>
        <div class="rounded-full h-8 w-8 text-gray-300 hover:text-gray-100 cursor-pointer flex mx-2">
          <svg class="p-2 fill-current" viewBox="0 0 32 32">
            <g>
              <path d="M24.18,15.13,2.5,2.62A1,1,0,0,0,1,3.48v25a1,1,0,0,0,1.5.86L24.18,16.87A1,1,0,0,0,24.18,15.13ZM3,26.78V5.22L21.68,16Z" />
              <path d="M30,5.2a1,1,0,0,0-1,1V25.8a1,1,0,0,0,2,0V6.2A1,1,0,0,0,30,5.2Z" />
            </g>
          </svg>
        </div>
      </div>
      <div class="h-2/5 w-full flex justify-between items-center">
        <span class="text-sm text-gray-200 w-12 text-left">12:29</span>
        <input type="range" class="w-full h-1" />
        <span class="text-sm text-gray-200 w-12 text-right">13:50</span>
      </div>
    </div>
    <div id="volume" class="w-1/3 flex justify-end items-center text-gray-100 p-3">
      <div class="w-4 mx-1">
        <svg viewBox="0 0 32 32" class="fill-current">
          <g>
            <path d="M1.5,11.66a1,1,0,0,0,1,0l7.75-4.4a1,1,0,0,0,0-1.74L2.49,1.13A1,1,0,0,0,1,2v8.8A1,1,0,0,0,1.5,11.66ZM3,3.72,7.72,6.4,3,9.08Z" />
            <path d="M14,7.4H30a1,1,0,0,0,0-2H14A1,1,0,0,0,14,7.4Z" />
            <path d="M30,13.27H2a1,1,0,0,0,0,2H30A1,1,0,0,0,30,13.27Z" />
            <path d="M30,21.13H2a1,1,0,0,0,0,2H30A1,1,0,0,0,30,21.13Z" />
            <path d="M30,29H2a1,1,0,0,0,0,2H30A1,1,0,0,0,30,29Z" />
          </g>
        </svg>
      </div>
      <div class="w-4 mx-1">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-volume-2">
          <polygon points="11 5 6 9 2 9 2 15 6 15 11 19 11 5"></polygon>
          <path d="M19.07 4.93a10 10 0 0 1 0 14.14M15.54 8.46a5 5 0 0 1 0 7.07"></path>
        </svg>
      </div>
      <div class="w-24">
        <input class="h-1 w-full" type="range" />
      </div>

      <div class="w-4 mx-1">
        <svg viewBox="0 0 24 24" class="fill-current">
          <path d="M9.79,12.79,4,18.59V17a1,1,0,0,0-2,0v4a1,1,0,0,0,.08.38,1,1,0,0,0,.54.54A1,1,0,0,0,3,22H7a1,1,0,0,0,0-2H5.41l5.8-5.79a1,1,0,0,0-1.42-1.42ZM21.92,2.62a1,1,0,0,0-.54-.54A1,1,0,0,0,21,2H17a1,1,0,0,0,0,2h1.59l-5.8,5.79a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0L20,5.41V7a1,1,0,0,0,2,0V3A1,1,0,0,0,21.92,2.62Z" />
        </svg>
      </div>
    </div>
  </div>
</div>