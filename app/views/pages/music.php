<?php
  require APPROOT .'/views/includes/header.php';
?>
<header>
  <div class="sidebar">
    <div class="logo">
      <a href="#">
        <img src="<?php echo URLROOT?>/img/Paroly_logo-removebg.png" alt="Logo" />
      </a>
    </div>

    <div class="navigation">
      <ul>
        <li>
          <a href="#">
            <span class="fa fa-home"></span>
            <span>Home</span>
          </a>
        </li>

        <li>
          <a href="#">
            <span class="fa fa-search"></span>
            <span>Search</span>
          </a>
        </li>

        <li>
          <a href="#">
            <span class="fa fas fa-book"></span>
            <span>Your Library</span>
          </a>
        </li>
      </ul>
    </div>

    <div class="navigation">
      <ul>
        <li>
          <a href="#">
            <span class="fa fas fa-plus-square"></span>
            <span>Create Playlist</span>
          </a>
        </li>

        <li>
          <a href="#">
            <span class="fa fas fa-heart"></span>
            <span>Liked Songs</span>
          </a>
        </li>
      </ul>
    </div>

    <div class="policies">
      <ul>
        <li>
          <a href="#">Cookies</a>
        </li>
        <li>
          <a href="#">Privacy</a>
        </li>
      </ul>
    </div>
  </div>

  <div class="main-container">
    <div class="topbar">
      <div class="prev-next-buttons">
        <button type="button" class="fa fas fa-chevron-left"></button>
        <button type="button" class="fa fas fa-chevron-right"></button>
      </div>

      <div class="navbar">
        <ul>
          <li>
            <a href="#">Premium</a>
          </li>
          <li>
            <a href="#">Support</a>
          </li>
          <li>
            <a href="#">Download</a>
          </li>
          <li class="divider">|</li>
          <li>
            <a href="#">Sign Up</a>
          </li>
        </ul>
        <button type="button">Log In</button>
      </div>
    </div>
  </div>
</header>

<section class="music-section">
  <div class="flex flex-col">
  <div class="music-img">
    <img src="" alt="image">
  </div>
  <div class="song-title">
    <h2 class="text-2xl font-bold">song name</h2>
    <div>
      <a href="">
        <i class="fa-regular fa-heart fa-lg" style="color: #1db954;"></i>
      </a>
      <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class=" self-end w-10 font-medium rounded-lg mb-3 text-center " type="button">
        <i class="fa-solid fa-list-ul fa-lg" style="color: #1db954;"></i>
      </button>
    <!-- Dropdown menu -->
      <div id="dropdown" class="z-10 hidden bg-gray-700 divide-y divide-gray-100 rounded-lg shadow w-44">
          <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
            <li>
              <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">add Song to playlist</a>
            </li>
          </ul>
      </div>
    </div>
  </div>
  <p class="artist">artist</p>
  <div class="playback mb-10">
    <div class="playback_btn_wrapper">
      <i class="btn-prev fa fa-step-backward" aria-hidden="true"></i>
      <div class="btn-switch"><i class="btn-play fa fa-play" aria-hidden="true"></i><i class="btn-pause fa fa-pause" aria-hidden="true"></i></div>
      <i class="btn-next fa fa-step-forward" aria-hidden="true"></i>
    </div>
    <div class="playback_timeline">
      <div class="playback_timeline_start-time">00:31</div>
      <div class="playback_timeline_slider">
        <div class="slider_base"></div>
        <div class="slider_progress"></div>
        <div class="slider_handle"></div>
      </div>
      <div class="playback_timeline_end-time">03:11</div>
    </div>
  </div>
</section>
<section class="lyrics-section my-10">
  <hr class="mb-10 w-10/12 sm:mx-auto border-gray-700" />
  <div class="flex justify-between mb-5">
  <h2 class="text-2xl font-bold text-white self-center">Lyrics</h2>
  <button type="button" class="border focus:outline-none rounded-full px-3 py-5 text-center inline-flex items-center border-green-500 text-green-500 hover:text-white hover:bg-green-500">
    <i class="fa-brands fa-creative-commons-sampling-plus fa-xl"></i>
  </button>
  </div>
  <div class="flex items-start justify-between mb-5">
    <img class="w-8 h-8 rounded-full self-center" src="/docs/images/people/profile-picture-3.jpg" alt="Jese image">
    <div class="flex flex-col w-full max-w-[320px] leading-1.5 p-4 border-gray-200 bg-[#121212] rounded-e-xl rounded-es-xl">
      <div class="flex items-center space-x-2 rtl:space-x-reverse">
        <span class="text-sm font-semibold text-gray-900 dark:text-white">Bonnie Green</span>
        <span class="text-sm font-normal text-gray-500 dark:text-gray-400">11:46</span>
      </div>
      <p class="text-sm font-normal py-2.5 text-gray-900 dark:text-white">That's awesome. I think our users will really appreciate the improvements.</p>
      <div>
        <i class="fa-solid fa-circle-check text-green-600"></i>
        <span class="text-sm font-normal text-gray-500 dark:text-gray-400">Verified</span>
      </div>
    </div>
    <button class="inline-flex self-center items-center" type="button">
      <i class="fa-regular fa-heart fa-lg text-green-600"></i><span class=" text-green-600 ml-3">8</span>
    </button>
    <button class="inline-flex self-center items-center" type="button">
      <i class="fa-regular fa-flag fa-lg hover:text-red-600 text-green-600"></i></i>
    </button>
  </div>
</section>


<?php
  require APPROOT .'/views/includes/footer.php';
?>