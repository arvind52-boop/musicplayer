
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,
            initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="phone.css">
        <link rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
        <title>Music Player</title>
    </head>

    <body>
        <header>
            <div class="menu_side">
                <h6 id="menu_list_active"><i class="bi bi-music-note-list"></i></h6>
                <h1>Playlist</h1>
                <div class="playlist">
                    <h4 class="active"><span> </span><i class="bi
                            bi-music-note-beamed"></i>playlist</h4>
                    <h4 class="active"><span></span><i class="bi
                            bi-music-note-beamed"></i>Last Played</h4>
                    <h4 class="active"><span></span><i class="bi
                            bi-music-note-beamed"></i>Recommended</h4>
                </div>
                <div class="menu_song">
                    <li class="songItem">
                        <span>01</span>
                        <img src="1.png" alt="">
                        <h5> On My Way
                            <div class="subtitle">Alanwalker</div>

                        </h5>
                        <i class="bi playlistPlay bi-play-circle-fill"
                            id="1"></i>
                    </li>

                    <li class="songItem">
                        <span>02</span>
                        <img src="2.png" alt="">
                        <h5 id="song_title"> Alan Walker-Fade
                            <div class="subtitle">Alanwalker</div>
                        </h5>
                        <i class="bi playlistPlay bi-play-circle-fill"
                            id="2"></i>

                    </li>
                    <li class="songItem">
                        <span>03</span>
                        <img src="3.png" alt="">
                        <h5> Cartoon-On & On
                            <div class="subtitle">Alanwalker</div>
                        </h5>
                        <i class="bi playlistPlay bi-play-circle-fill"
                            id="3"></i>

                    </li>
                    <li class="songItem">
                        <span>04</span>
                        <img src="4.png" alt="">
                        <h5> Waariyo-Mortals
                            <div class="subtitle">Alanwalker</div>
                        </h5>
                        <i class="bi playlistPlay bi-play-circle-fill"
                            id="4"></i>

                    </li>
                    <li class="songItem">
                        <span>05</span>
                        <img src="5.png" alt="">
                        <h5> Electronic Music
                            <div class="subtitle">Alan Walker</div>
                        </h5>
                        <i class="bi playlistPlay bi-play-circle-fill"
                            id="5"></i>

                    </li>
                    <li class="songItem">
                        <span>06</span>
                        <img src="6.png" alt="">
                        <h5> Ertugrul
                            <div class="subtitle">Alan Walker</div>
                        </h5>
                        <i class="bi playlistPlay bi-play-circle-fill"
                            id="6"></i>

                    </li>

                    <li class="songItem">
                        <span>07</span>
                        <img src="7.png" alt="">
                        <h5> Let Me Love
                            <div class="subtitle">Justin Biebber</div>
                        </h5>
                        <i class="bi playlistPlay bi-play-circle-fill"
                            id="7"></i>

                    </li>

                </div>
            </div>

            <div class="song_side">
                <nav>
                    <ul>
                        <li>Discover <span></span></li>
                        <li>My Library</li>
                        <li>Radio </li>

                    </ul>
                    <div class="search">
                        <i class="bi bi-search"></i>
                        <input type="text" placeholder="Search Music...">
                        <div class="search_result">
                            <!-- <a href="#" class="card">
                            <img src="1.png" alt="">
                            <div class="content">
                                On My Way <br>
                                <div class="subtitle">Alan Walker</div>
                            </div>
                        </a>
                        -->
                        </div>
                    </div>
                    <div class="user">
                        <img src="logo.png" alt="">
                        <a href="logout.php" title="Logout"><i class="bi bi-door-closed-fill"></i></a>
                    </div>
                </nav>
                <div class="content">
                    <h1>Alan Walker</h1>
                    <p>
                        You were the shadow to my Light Did you feel us
                        Another Start you fade
                        <br>
                        away afraid our aim is out of sight wanna a see us
                        alive
                    </p>
                    <div class="buttons">
                        <button>PLAY</button>
                        <button>FOLLOW</button>
                    </div>
                    <div class="popular_songs">
                        <div class="h4">
                            <h4>Popular Songs</h4>
                            <div class="btn_s">
                                <i id="left_scroll" class="bi
                                    bi-arrow-left-short"></i>
                                <i id="right_scroll" class="bi
                                    bi-arrow-right-short"></i>
                            </div>
                        </div>
                        <div class="pop_song">
                            <li class="songItem">
                                <div class="img_play">
                                    <img src="8.png" alt="">
                                    <i class="bi playlistPlay
                                        bi-play-circle-fill" id="8"></i>
                                </div>
                                <h5> Agar tum saath Ho
                                    <br>
                                    <div class="subtitle">Alan Walker</div>
                                </h5>
                            </li>
                            <li class="songItem">
                                <div class="img_play">
                                    <img src="9.png" alt="">
                                    <i class="bi playlistPlay
                                        bi-play-circle-fill" id="9"></i>
                                </div>
                                <h5> SunaHai
                                    <br>
                                    <div class="subtitle">Alan Walker</div>
                                </h5>
                            </li>
                            <li class="songItem">
                                <div class="img_play">
                                    <img src="10.png" alt="">
                                    <i class="bi playlistPlay
                                        bi-play-circle-fill" id="10"></i>
                                </div>
                                <h5> Dilbar
                                    <br>
                                    <div class="subtitle">Neha Kakkar</div>
                                </h5>
                            </li>
                            <li class="songItem">
                                <div class="img_play">
                                    <img src="11.png" alt="">
                                    <i class="bi playlistPlay
                                        bi-play-circle-fill" id="11"></i>
                                </div>
                                <h5> Duniya
                                    <br>
                                    <div class="subtitle">Alan Walker</div>
                                </h5>
                            </li>
                            <li class="songItem">
                                <div class="img_play">
                                    <img src="12.png" alt="">
                                    <i class="bi playlistPlay
                                        bi-play-circle-fill" id="12"></i>
                                </div>
                                <h5> Lagdi Lahore Di
                                    <br>
                                    <div class="subtitle">Guru Randhawa</div>
                                </h5>
                            </li>
                            <li class="songItem">
                                <div class="img_play">
                                    <img src="13.png" alt="">
                                    <i class="bi playlistPlay
                                        bi-play-circle-fill" id="13"></i>
                                </div>
                                <h5> Lut Gaye
                                    <br>
                                    <div class="subtitle">Alan Walker</div>
                                </h5>
                            </li>
                            <li class="songItem">
                                <div class="img_play">
                                    <img src="14.png" alt="">
                                    <i class="bi playlistPlay
                                        bi-play-circle-fill" id="14"></i>
                                </div>
                                <h5> Last Peg
                                    <br>
                                    <div class="subtitle">Raju Punjabi</div>
                                </h5>
                            </li>
                            <li class="songItem">
                                <div class="img_play">
                                    <img src="15.png" alt="">
                                    <i class="bi playlistPlay
                                        bi-play-circle-fill" id="15"></i>
                                </div>
                                <h5> 8 Parche
                                    <br>
                                    <div class="subtitle">Banni Sandhu</div>
                                </h5>
                            </li>
                            <li class="songItem">
                                <div class="img_play">
                                    <img src="16.png" alt="">
                                    <i class="bi playlistPlay
                                        bi-play-circle-fill" id="16"></i>
                                </div>
                                <h5> Raule Gaule
                                    <br>
                                    <div class="subtitle">Gurlej Akhtar</div>
                                </h5>
                            </li>

                        </div>
                    </div>
                </div>
                <div class="popular_Artists">
                    <div class="h4">
                        <h4>Popular Artists</h4>
                        <div class="btn_s">
                            <i id="left_scrolls" class="bi
                                bi-arrow-left-short"></i>
                            <i id="right_scrolls" class="bi
                                bi-arrow-right-short"></i>
                        </div>
                    </div>
                    <div class="item">
                        <li>
                            <a href="arjit.html"><img src="artist1.png"
                                    alt="arijit singh" title="Arijit
                                    Singh"></a>
                        </li>
                        <li>
                            <img src="artist2.png" alt="arijit singh"
                                title="Arijit Singh">
                        </li>
                        <li>
                            <a href="punjabi.html"><img src="artist3.png"
                                    alt="arijit singh" title="Arijit
                                    Singh"></a>
                        </li>
                        <li>
                            <img src="artist4.png" alt="arijit singh"
                                title="Arijit Singh">
                        </li>
                        <li>
                            <img src="artist5.png" alt="arijit singh"
                                title="Arijit Singh">
                        </li>
                        <li>
                            <img src="artist6.png" alt="arijit singh"
                                title="Arijit Singh">
                        </li>
                        <li>
                            <img src="artist7.png" alt="arijit singh"
                                title="Arijit Singh">
                        </li>
                        <li>
                            <img src="artist8.png" alt="arijit singh"
                                title="Arijit Singh">
                        </li>
                        <li>
                            <img src="artist9.png" alt="arijit singh"
                                title="Arijit Singh">
                        </li>
                        <li>
                            <img src="artist10.png" alt="arijit singh"
                                title="Arijit Singh">
                        </li>
                        <li>
                            <img src="artist11.png" alt="arijit singh"
                                title="Arijit Singh">
                        </li>
                        <li>
                            <img src="artist11.png" alt="arijit singh"
                                title="Arijit Singh">
                        </li>
                        <li>
                            <img src="artist11.png" alt="arijit singh"
                                title="Arijit Singh">
                        </li>






                    </div>
                </div>
            </div>

            <div class="master_play">
                <div class="wave">
                    <div class="wave1"></div>
                    <div class="wave1"></div>
                    <div class="wave1"></div>
                </div>
                <img src="1.png" alt="" id="poster_master_play">
                <h5 id="title"> On My Way
                    <div class="subtitle">Alan Walker</div>
                </h5>
                <div class="icon">
                    <i class="bi shuffle bi-music-note-beamed">next</i>
                    <i class="bi bi-skip-start-fill" id="back"></i>
                    <i class="bi bi-play-fill" id="masterPlay"></i>
                    <i class="bi bi-skip-end-fill" id="next"></i>
                    <a href="" downnload id="download_music"><i class="bi
                            bi-cloud-arrow-down-fill"></i></a>
                </div>
                <span id="currentStart">0:00</span>
                <div class="bar">
                    <input type="range" id="seek" min="0" value="0"
                        max="100">
                    <div class="bar2" id="bar2"></div>
                    <div class="dot"></div>
                </div>
                <span id="currentEnd">0:00</span>
                <div class="vol"><i class="bi bi-volume-down-fill"
                        id="vol_icon"></i>
                    <input type="range" id="vol" min="0" value="30"
                        max="100">
                    <div class="vol_bar"></div>
                    <div class="dot" id="vol_dot"></div>
                </div>
            </div>
        </header>
        <script src="app.js"></script>
        <script>
    
   </script>

    </body>

</html>