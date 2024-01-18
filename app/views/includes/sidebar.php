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
                <form action="<?php echo URLROOT; ?>/Pages/playlist" method="post">
                    <input type="hidden" name="id_user" value ='1'>
                    <button class="text-gray-500" href="<?php echo URLROOT; ?>/pages/playlist">
                        <span class="fa fas fa-book"></span>
                        <span>Your Library</span>
                    </button>
                </form>
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


</div>