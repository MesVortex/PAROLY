<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <!-- My CSS -->
    <link rel="stylesheet" href="<?php echo URLROOT ?>/css/artiste.css">

    <title>ArtisteHub</title>
</head>

<body>


    <!-- SIDEBAR -->
    <section id="sidebar">
        <a href="#" class="brand">
            <i class='bx bxs-smile'></i>
            <span class="text">Paroly</span>
        </a>
        <ul class="side-menu top">
            <li class="active">
                <a href="#">
                    <i class='bx bxs-dashboard'></i>
                    <span class="text">Home Page</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class='bx'><svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" width="25px" height="25px" viewBox="0 0 24 24">
                            <path d="M22,7a1,1,0,0,0-1-1H20V3a1,1,0,0,0-1-1H5A1,1,0,0,0,4,3V6H3A1,1,0,0,0,2,7V21a1,1,0,0,0,1,1H21a1,1,0,0,0,1-1ZM6,4H18V6H6ZM20,20H4V8H20ZM14,9.25a1,1,0,0,0-1,1v2.684a2.966,2.966,0,0,0-1-.184,3,3,0,1,0,3,3v-5.5A1,1,0,0,0,14,9.25Zm-2,7.5a1,1,0,1,1,1-1A1,1,0,0,1,12,16.75Z" />
                        </svg></i>
                    <span class="text">Albums</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class='bx'>
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 120 120">
                            <path class="st0" fill="currentColor" d="M49.58,0h11.34v3.79c28.37,6.5,31.61,20.12,15.16,41.59c1.75-21.3-0.4-25.87-15.16-26.86v53.86 c0.03,0.29,0.04,0.57,0.04,0.86c0,7-7.35,13.94-16.4,15.51c-9.06,1.57-16.4-2.84-16.4-9.84c0-9.55,13.12-17.84,21.43-14.92L49.58,0 L49.58,0L49.58,0z M72.31,91.69h-0.16c0-1.29-0.48-2.41-1.44-3.38c-0.96-0.96-2.09-1.44-3.38-1.44v-0.16 c1.29,0,2.41-0.48,3.38-1.44c0.96-0.97,1.44-2.09,1.44-3.37h0.16c0,1.29,0.48,2.41,1.44,3.37c0.96,0.96,2.09,1.44,3.38,1.44v0.16 c-1.29,0-2.41,0.48-3.38,1.44C72.79,89.27,72.31,90.4,72.31,91.69L72.31,91.69L72.31,91.69z M92.53,74.61l-0.4-0.03 c0.24-3.22-0.75-6.13-2.97-8.72s-4.94-4.01-8.17-4.25l0.03-0.4c3.22,0.25,6.13-0.75,8.72-2.97c2.59-2.23,4.01-4.95,4.25-8.16 l0.4,0.03c-0.24,3.22,0.75,6.13,2.97,8.72s4.94,4.01,8.17,4.25l-0.03,0.4c-3.22-0.25-6.13,0.75-8.72,2.97 C94.19,68.67,92.78,71.39,92.53,74.61L92.53,74.61L92.53,74.61z M109.33,42.87l-0.5,0.06c-0.52-4.13-2.51-7.55-5.99-10.26 c-3.47-2.71-7.28-3.8-11.42-3.29l-0.06-0.5c4.13-0.51,7.55-2.51,10.26-5.99s3.8-7.29,3.29-11.41l0.5-0.06 c0.52,4.13,2.51,7.55,5.99,10.26c3.48,2.71,7.28,3.8,11.42,3.29l0.06,0.5c-4.13,0.52-7.55,2.51-10.26,5.99 C109.91,34.93,108.82,38.74,109.33,42.87L109.33,42.87L109.33,42.87z M18.45,54.03c-2.3,0-4.17-1.87-4.17-4.17s1.87-4.17,4.17-4.17 h16.63c-2.3,0-4.17,1.87-4.17,4.17s1.87,4.17,4.17,4.17H18.45L18.45,54.03L18.45,54.03z M10.57,33.79c-2.3,0-4.17-1.87-4.17-4.17 c0-2.3,1.87-4.17,4.17-4.17h24.52c-2.3,0-4.17,1.87-4.17,4.17c0,2.3,1.87,4.17,4.17,4.17H3.67L10.57,33.79L10.57,33.79z M4.17,13.55 C1.87,13.55,0,11.68,0,9.37c0-2.3,1.87-4.17,4.17-4.17h30.92c-2.3,0-4.17,1.87-4.17,4.17c0,2.3,1.87,4.17,4.17,4.17L4.17,13.55 L4.17,13.55L4.17,13.55z" />
                        </svg>

                    </i>
                    <span class="text">Songs</span>
                </a>
            </li>

        </ul>
        <ul class="side-menu">
            <li>
                <a href="#">
                    <i class='bx bxs-cog'></i>
                    <span class="text">Settings</span>
                </a>
            </li>
            <li>
                <a href="#" class="logout">
                    <i class='bx bxs-log-out-circle'></i>
                    <span class="text">Logout</span>
                </a>
            </li>
        </ul>
    </section>
    <!-- SIDEBAR -->

    <!-- CONTENT -->
    <section id="content">
        <!-- NAVBAR -->
        <nav>
            <i class='bx bx-menu'></i>
            <a href="#" class="nav-link">Categories</a>
            <form action="#">
                <div class="form-input">
                    <input type="search" placeholder="Search...">
                    <button type="submit" class="search-btn"><i class='bx bx-search'></i></button>
                </div>
            </form>
            <!-- <input type="checkbox" id="switch-mode" hidden>
            <label for="switch-mode" class="switch-mode"></label> -->
            <a href="#" class="notification">
                <i class='bx bxs-bell'></i>
                <span class="num">8</span>
            </a>
            <a href="#" class="profile">
                <img src="img/people.png">
            </a>
        </nav>
        <!-- NAVBAR -->

        <!-- MAIN -->
        <main>
            <div class="head-title">
                <div class="left">
                    <h1>Where your music
                        is everything</h1>
                    <ul class="breadcrumb">
                        <li>
                            <a href="#">Home</a>
                        </li>
                        <li><i class='bx bx-chevron-right'></i></li>
                    </ul>
                </div>
            </div>

            <ul class="box-info">
                <li>
                    <a href="<?php echo URLROOT ?>/pages/song">
                        <i class='bx'>
                            <svg xmlns="http://www.w3.org/2000/svg" width="30px" height="30px" viewBox="0 0 24 24">

                                <title />

                                <g id="Complete">

                                    <g data-name="add" id="add-2">

                                        <g>

                                            <line fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" x1="12" x2="12" y1="19" y2="5" />

                                            <line fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" x1="5" x2="19" y1="12" y2="12" />

                                        </g>

                                    </g>

                                </g>
                            </svg>
                        </i>
                        <span class="text">
                            <h3>Add Song</h3>
                        </span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo URLROOT ?>/pages/album">
                        <i class='bx'>
                            <svg xmlns="http://www.w3.org/2000/svg" width="30px" height="30px" viewBox="0 0 24 24">

                                <title />

                                <g id="Complete">

                                    <g data-name="add" id="add-2">

                                        <g>

                                            <line fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" x1="12" x2="12" y1="19" y2="5" />

                                            <line fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" x1="5" x2="19" y1="12" y2="12" />

                                        </g>

                                    </g>

                                </g>
                            </svg>
                        </i>
                        <span class="text">
                            <h3>Add Album</h3>
                        </span>
                    </a>
                </li>
            </ul>



            <div class="table-data">
                <div class="order">
                    <div class="head">
                        <h3>Recent Songs</h3>
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <th>track</th>
                                <th>date of addition</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <img src="img/people.png">
                                    <p>John Doe</p>
                                </td>
                                <td>01-10-2021</td>

                            </tr>
                            <tr>
                                <td>
                                    <img src="img/people.png">
                                    <p>John Doe</p>
                                </td>
                                <td>01-10-2021</td>

                            </tr>
                            <tr>
                                <td>
                                    <img src="img/people.png">
                                    <p>John Doe</p>
                                </td>
                                <td>01-10-2021</td>

                            </tr>
                            <tr>
                                <td>
                                    <img src="img/people.png">
                                    <p>John Doe</p>
                                </td>
                                <td>01-10-2021</td>

                            </tr>
                            <tr>
                                <td>
                                    <img src="img/people.png">
                                    <p>John Doe</p>
                                </td>
                                <td>01-10-2021</td>

                            </tr>
                        </tbody>
                    </table>
                </div>



                <div class="table-data">
                    <div class="order">
                        <div class="head">
                            <h3>Recent Albums</h3>
                        </div>
                        <table>
                            <thead>
                                <tr>
                                    <th>Album</th>
                                    <th>date of addition</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <img src="img/people.png">
                                        <p>John Doe</p>
                                    </td>
                                    <td>01-10-2021</td>

                                </tr>
                                <tr>
                                    <td>
                                        <img src="img/people.png">
                                        <p>John Doe</p>
                                    </td>
                                    <td>01-10-2021</td>

                                </tr>
                                <tr>
                                    <td>
                                        <img src="img/people.png">
                                        <p>John Doe</p>
                                    </td>
                                    <td>01-10-2021</td>

                                </tr>
                                <tr>
                                    <td>
                                        <img src="img/people.png">
                                        <p>John Doe</p>
                                    </td>
                                    <td>01-10-2021</td>

                                </tr>
                                <tr>
                                    <td>
                                        <img src="img/people.png">
                                        <p>John Doe</p>
                                    </td>
                                    <td>01-10-2021</td>

                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>

            </div>
        </main>
        <!-- MAIN -->
    </section>
    <!-- CONTENT -->


    <script src="<?php echo
                    URLROOT
                    ?> /js/artiste.js"></script>
</body>

</html>