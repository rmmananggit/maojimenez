<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['qrcode'])) {

 ?>
 

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--========== BOX ICONS ==========-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
        <!--========== LINK REL ==========-->
        <link rel="stylesheet" href="./fontawesome-free-5/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>

        <!--========== CSS ==========-->
        <link rel="stylesheet" href="assets/css/styles.css">
        <script type="text/javascript" src="jassets/css/main.js"></script>
        

        <title>ONLINE EXAMINATION</title>
    </head>
    <body>
        <!--========== HEADER ==========-->
        <header class="header">
            <div class="header__container">
                <a href="home.php" class="header__img"><svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 0.82);transform: ;msFilter:;"><path d="M21 11H6.414l5.293-5.293-1.414-1.414L2.586 12l7.707 7.707 1.414-1.414L6.414 13H21z"></path></svg></a>

                <a href="home.php" class="header__logo">ONLINE EXAMINATION</a>
    
                <div class="header__search">
                    <input type="search" placeholder="Search" class="header__input">
                    <i class='bx bx-search header__icon'></i>
                </div>
    
                <div class="header__toggle">
                    <i class='bx bx-menu' id="header-toggle"></i>
                </div>
            </div>
        </header>

        <!--========== NAV ==========-->
        <div class="nav" id="navbar">
            <nav class="nav__container">
                <div>
                    <a href="home.php" class="nav__link nav__logo">
                        <i class='bx bx-book-open nav__icon' ></i>
                        <span class="nav__logo-name">ONLINE EXAMINATION</span>
                    </a>
    
                    <div class="nav__list">
                        <div class="nav__items">
                            <h3 class="nav__subtitle">Profile</h3>
    
                            <a href="home.php" class="nav__link active">
                                <i class='bx bx-home nav__icon' ></i>
                                <span class="nav__name">Home</span>
                            </a>
                            
                            <div class="nav__dropdown">
                                <a href="#" class="nav__link">
                                    <i class='bx bx-user nav__icon' ></i>
                                    <span class="nav__name"><?php echo $_SESSION['name']; ?></span>
                                </a>
                            </div>

                            <a href="#" class="nav__link">
                                <i class='bx bx-message-rounded nav__icon' ></i>
                                <span class="nav__name">Messages</span>
                            </a>

                            <div class="nav__dropdown">
                                <a href="#" class="nav__link">
                                    <i class='bx bx-bell nav__icon' ></i>
                                    <span class="nav__name">Notifications</span>
                                    <i class='bx bx-chevron-down nav__icon nav__dropdown-icon'></i>
                                </a>

                                <div class="nav__dropdown-collapse">
                                    <div class="nav__dropdown-content">
                                        <a href="#" class="nav__dropdown-item">Grades</a>
                                        <a href="#" class="nav__dropdown-item">Work</a>
                                        <a href="#" class="nav__dropdown-item">Missing</a>
                                    </div>
                                </div>

                            </div>
                            
                        <div class="nav__items">
                            <h3 class="nav__subtitle">Menu</h3>

                            <div class="nav__dropdown">
                                <a href="#" class="nav__link">
                                    <i class='bx bx-book nav__icon' ></i>
                                    <span class="nav__name">Subjects</span>
                                    <i class='bx bx-chevron-down nav__icon nav__dropdown-icon'></i>
                                </a>

                                <div class="nav__dropdown-collapse">
                                    <div class="nav__dropdown-content">
                                        <a href="subj1.php" class="nav__dropdown-item">Subject 1</a>
                                        <a href="#" class="nav__dropdown-item">Subject 2</a>
                                        <a href="#" class="nav__dropdown-item">Subject 3</a>
                                    </div>
                                </div>
                              </div>
                        
                        <div class="nav__dropdown">
                                <a href="#" class="nav__link">
                                    <i class='bx bx-edit-alt nav__icon' ></i>
                                    <span class="nav__name">Exams</span>
                                    <i class='bx bx-chevron-down nav__icon nav__dropdown-icon'></i>
                                </a>

                                <div class="nav__dropdown-collapse">
                                    <div class="nav__dropdown-content">
                                        <a href="longquiz.php" class="nav__dropdown-item">Long Quiz</a>
                                        <a href="#" class="nav__dropdown-item">Midterm Exam</a>
                                        <a href="#" class="nav__dropdown-item">Final Exam</a>
                                    </div>
                                </div>
                              </div>
                            </div>
                            <a href="#" class="nav__link">
                                <i class='bx bx-help-circle nav__icon' ></i>
                                <span class="nav__name">Help & Support</span>
                            </a>
                            <a href="#" class="nav__link">
                                <i class='bx bx-cog nav__icon' ></i>
                                <span class="nav__name">Settings & Privacy</span>
                            </a>
                             <a href="#" class="nav__link">
                                <i class='bx bx-moon nav__icon' id="theme_button" ></i>
                                <span class="nav__name">Night Mode</span>
                            </a>
                        </div>
                    </div>
                </div>

                <a href="logout.php" class="nav__link nav__logout">
                   <i class='bx bx-log-out nav__icon'></i>
                    <span class="nav__name" id="log_out">Logout</a></span>
                </a>
            </nav>
        </div>

        <!--========== CONTENTS ==========-->
        <main>
            <section>
       <div class="center">

  <div class="card">
    <div class="additional">
      <div class="user-card">
        <div class="level center">
          Level 13
        </div>
        <div class="points center">
          5,312 Points
        </div>
        <svg width="110" height="110" viewBox="0 0 250 250" xmlns="http://www.w3.org/2000/svg" role="img" aria-labelledby="title desc" class="center">
          <title id="title">Teacher</title>
          <desc id="desc">Cartoon of a Caucasian woman smiling, and wearing black glasses and a purple shirt with white collar drawn by Alvaro Montoro.</desc>
          <style>
            .skin { fill: #eab38f; }
            .eyes { fill: #1f1f1f; }
            .hair { fill: #2f1b0d; }
            .line { fill: none; stroke: #2f1b0d; stroke-width:2px; }
          </style>
          <defs>
            <clipPath id="scene">
              <circle cx="125" cy="125" r="115"/>
            </clipPath>
            <clipPath id="lips">
              <path d="M 106,132 C 113,127 125,128 125,132 125,128 137,127 144,132 141,142  134,146  125,146  116,146 109,142 106,132 Z" />
            </clipPath>
          </defs>
          <circle cx="125" cy="125" r="120" fill="rgba(0,0,0,0.15)" />
          <g stroke="none" stroke-width="0" clip-path="url(#scene)">
            <rect x="0" y="0" width="250" height="250" fill="#b0d2e5" />
            <g id="head">
              <path fill="none" stroke="#111111" stroke-width="2" d="M 68,103 83,103.5" />
              <path class="hair" d="M 67,90 67,169 78,164 89,169 100,164 112,169 125,164 138,169 150,164 161,169 172,164 183,169 183,90 Z" />
              <circle cx="125" cy="100" r="55" class="skin" />
              <ellipse cx="102" cy="107" rx="5" ry="5" class="eyes" id="eye-left" />
              <ellipse cx="148" cy="107" rx="5" ry="5" class="eyes" id="eye-right" />
              <rect x="119" y="140" width="12" height="40" class="skin" />
              <path class="line eyebrow" d="M 90,98 C 93,90 103,89 110,94" id="eyebrow-left" />
              <path class="line eyebrow" d="M 160,98 C 157,90 147,89 140,94" id="eyebrow-right"/>
              <path stroke="#111111" stroke-width="4" d="M 68,103 83,102.5" />
              <path stroke="#111111" stroke-width="4" d="M 182,103 167,102.5" />
              <path stroke="#050505" stroke-width="3" fill="none" d="M 119,102 C 123,99 127,99 131,102" />
              <path fill="#050505" d="M 92,97 C 85,97 79,98 80,101 81,104 84,104 85,102" />
              <path fill="#050505" d="M 158,97 C 165,97 171,98 170,101 169,104 166,104 165,102" />
              <path stroke="#050505" stroke-width="3" fill="rgba(240,240,255,0.4)" d="M 119,102 C 118,111 115,119 98,117 85,115 84,108 84,104 84,97 94,96 105,97 112,98 117,98 119,102 Z" />
              <path stroke="#050505" stroke-width="3" fill="rgba(240,240,255,0.4)" d="M 131,102 C 132,111 135,119 152,117 165,115 166,108 166,104 166,97 156,96 145,97 138,98 133,98 131,102 Z" />
              <path class="hair" d="M 60,109 C 59,39 118,40 129,40 139,40 187,43 189,99 135,98 115,67 115,67 115,67 108,90 80,109 86,101 91,92 92,87 85,99 65,108 60,109" />
              <path id="mouth" fill="#d73e3e" d="M 106,132 C 113,127 125,128 125,132 125,128 137,127 144,132 141,142  134,146  125,146  116,146 109,142 106,132 Z" /> 
              <path id="smile" fill="white" d="M125,141 C 140,141 143,132 143,132 143,132 125,133 125,133 125,133 106.5,132 106.5,132 106.5,132 110,141 125,141 Z" clip-path="url(#lips)" />
            </g>
            <g id="shirt">
              <path fill="#8665c2" d="M 132,170 C 146,170 154,200 154,200 154,200 158,250 158,250 158,250 92,250 92,250 92,250 96,200 96,200 96,200 104,170 118,170 118,170 125,172 125,172 125,172 132,170 132,170 Z"/>
              <path id="arm-left" class="arm" stroke="#8665c2" fill="none" stroke-width="14" d="M 118,178 C 94,179 66,220 65,254" />
              <path id="arm-right" class="arm" stroke="#8665c2" fill="none" stroke-width="14" d="M 132,178 C 156,179 184,220 185,254" />
              <path fill="white" d="M 117,166 C 117,166 125,172 125,172 125,182 115,182 109,170 Z" />
              <path fill="white" d="M 133,166 C 133,166 125,172 125,172 125,182 135,182 141,170 Z" />
              <circle cx="125" cy="188" r="4" fill="#5a487b" />
              <circle cx="125" cy="202" r="4" fill="#5a487b" />
              <circle cx="125" cy="216" r="4" fill="#5a487b" />
              <circle cx="125" cy="230" r="4" fill="#5a487b" />
              <circle cx="125" cy="244" r="4" fill="#5a487b" />
              <path stroke="#daa37f" stroke-width="1" class="skin hand" id="hand-left" d="M 51,270 C 46,263 60,243 63,246 65,247 66,248 61,255 72,243 76,238 79,240 82,243 72,254 69,257 72,254 82,241 86,244 89,247 75,261 73,263 77,258 84,251 86,253 89,256 70,287 59,278" /> 
              <path stroke="#daa37f" stroke-width="1" class="skin hand" id="hand-right" d="M 199,270 C 204,263 190,243 187,246 185,247 184,248 189,255 178,243 174,238 171,240 168,243 178,254 181,257 178,254 168,241 164,244 161,247 175,261 177,263 173,258 166,251 164,253 161,256 180,287 191,278"/> 
            </g>
          </g>
        </svg>
      </div>
      <div class="more-info">
        <h1>Jane Doe</h1>
        <div class="coords">
          <span>Group Name</span>
          <span>Joined January 2019</span>
        </div>
        <div class="coords">
          <span>Position/Role</span>
          <span>City, Country</span>
        </div>
        <div class="stats">
          <div>
            <div class="title">Awards</div>
            <i class="fa fa-trophy"></i>
            <div class="value">2</div>
          </div>
          <div>
            <div class="title">Matches</div>
            <i class="fa fa-gamepad"></i>
            <div class="value">27</div>
          </div>
          <div>
            <div class="title">Pals</div>
            <i class="fa fa-group"></i>
            <div class="value">123</div>
          </div>
          <div>
            <div class="title">Coffee</div>
            <i class="fa fa-coffee"></i>
            <div class="value infinity">∞</div>
          </div>
        </div>
      </div>
    </div>
    <div class="general">
      <h1>Jane Doe</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce a volutpat mauris, at molestie lacus. Nam vestibulum sodales odio ut pulvinar.</p>
      <span class="more">Mouse over the card for more info</span>
    </div>
  </div>

  <div class="card green">
    <div class="additional">
      <div class="user-card">
        <div class="level center">
          Level 13
        </div>
        <div class="points center">
          5,312 Points
        </div>
        <svg width="110" height="110" viewBox="0 0 250 250" xmlns="http://www.w3.org/2000/svg" role="img" aria-labelledby="title desc" class="center">
          <title id="title">Teacher</title>
          <desc id="desc">Cartoon of a Caucasian woman smiling, and wearing black glasses and a purple shirt with white collar drawn by Alvaro Montoro.</desc>
          <style>
            .skin { fill: #eab38f; }
            .eyes { fill: #1f1f1f; }
            .hair { fill: #2f1b0d; }
            .line { fill: none; stroke: #2f1b0d; stroke-width:2px; }
          </style>
          <defs>
            <clipPath id="scene">
              <circle cx="125" cy="125" r="115"/>
            </clipPath>
            <clipPath id="lips">
              <path d="M 106,132 C 113,127 125,128 125,132 125,128 137,127 144,132 141,142  134,146  125,146  116,146 109,142 106,132 Z" />
            </clipPath>
          </defs>
          <circle cx="125" cy="125" r="120" fill="rgba(0,0,0,0.15)" />
          <g stroke="none" stroke-width="0" clip-path="url(#scene)">
            <rect x="0" y="0" width="250" height="250" fill="#b0d2e5" />
            <g id="head">
              <path fill="none" stroke="#111111" stroke-width="2" d="M 68,103 83,103.5" />
              <path class="hair" d="M 67,90 67,169 78,164 89,169 100,164 112,169 125,164 138,169 150,164 161,169 172,164 183,169 183,90 Z" />
              <circle cx="125" cy="100" r="55" class="skin" />
              <ellipse cx="102" cy="107" rx="5" ry="5" class="eyes" id="eye-left" />
              <ellipse cx="148" cy="107" rx="5" ry="5" class="eyes" id="eye-right" />
              <rect x="119" y="140" width="12" height="40" class="skin" />
              <path class="line eyebrow" d="M 90,98 C 93,90 103,89 110,94" id="eyebrow-left" />
              <path class="line eyebrow" d="M 160,98 C 157,90 147,89 140,94" id="eyebrow-right"/>
              <path stroke="#111111" stroke-width="4" d="M 68,103 83,102.5" />
              <path stroke="#111111" stroke-width="4" d="M 182,103 167,102.5" />
              <path stroke="#050505" stroke-width="3" fill="none" d="M 119,102 C 123,99 127,99 131,102" />
              <path fill="#050505" d="M 92,97 C 85,97 79,98 80,101 81,104 84,104 85,102" />
              <path fill="#050505" d="M 158,97 C 165,97 171,98 170,101 169,104 166,104 165,102" />
              <path stroke="#050505" stroke-width="3" fill="rgba(240,240,255,0.4)" d="M 119,102 C 118,111 115,119 98,117 85,115 84,108 84,104 84,97 94,96 105,97 112,98 117,98 119,102 Z" />
              <path stroke="#050505" stroke-width="3" fill="rgba(240,240,255,0.4)" d="M 131,102 C 132,111 135,119 152,117 165,115 166,108 166,104 166,97 156,96 145,97 138,98 133,98 131,102 Z" />
              <path class="hair" d="M 60,109 C 59,39 118,40 129,40 139,40 187,43 189,99 135,98 115,67 115,67 115,67 108,90 80,109 86,101 91,92 92,87 85,99 65,108 60,109" />
              <path id="mouth" fill="#d73e3e" d="M 106,132 C 113,127 125,128 125,132 125,128 137,127 144,132 141,142  134,146  125,146  116,146 109,142 106,132 Z" /> 
              <path id="smile" fill="white" d="M125,141 C 140,141 143,132 143,132 143,132 125,133 125,133 125,133 106.5,132 106.5,132 106.5,132 110,141 125,141 Z" clip-path="url(#lips)" />
            </g>
            <g id="shirt">
              <path fill="#8665c2" d="M 132,170 C 146,170 154,200 154,200 154,200 158,250 158,250 158,250 92,250 92,250 92,250 96,200 96,200 96,200 104,170 118,170 118,170 125,172 125,172 125,172 132,170 132,170 Z"/>
              <path id="arm-left" class="arm" stroke="#8665c2" fill="none" stroke-width="14" d="M 118,178 C 94,179 66,220 65,254" />
              <path id="arm-right" class="arm" stroke="#8665c2" fill="none" stroke-width="14" d="M 132,178 C 156,179 184,220 185,254" />
              <path fill="white" d="M 117,166 C 117,166 125,172 125,172 125,182 115,182 109,170 Z" />
              <path fill="white" d="M 133,166 C 133,166 125,172 125,172 125,182 135,182 141,170 Z" />
              <circle cx="125" cy="188" r="4" fill="#5a487b" />
              <circle cx="125" cy="202" r="4" fill="#5a487b" />
              <circle cx="125" cy="216" r="4" fill="#5a487b" />
              <circle cx="125" cy="230" r="4" fill="#5a487b" />
              <circle cx="125" cy="244" r="4" fill="#5a487b" />
              <path stroke="#daa37f" stroke-width="1" class="skin hand" id="hand-left" d="M 51,270 C 46,263 60,243 63,246 65,247 66,248 61,255 72,243 76,238 79,240 82,243 72,254 69,257 72,254 82,241 86,244 89,247 75,261 73,263 77,258 84,251 86,253 89,256 70,287 59,278" /> 
              <path stroke="#daa37f" stroke-width="1" class="skin hand" id="hand-right" d="M 199,270 C 204,263 190,243 187,246 185,247 184,248 189,255 178,243 174,238 171,240 168,243 178,254 181,257 178,254 168,241 164,244 161,247 175,261 177,263 173,258 166,251 164,253 161,256 180,287 191,278"/> 
            </g>
          </g>
        </svg>
      </div>
      <div class="more-info">
        <h1>Jane Doe</h1>
        <div class="coords">
          <span>Group Name</span>
          <span>Joined January 2019</span>
        </div>
        <div class="coords">
          <span>Position/Role</span>
          <span>City, Country</span>
        </div>
        <div class="stats">
          <div>
            <div class="title">Awards</div>
            <i class="fa fa-trophy"></i>
            <div class="value">2</div>
          </div>
          <div>
            <div class="title">Matches</div>
            <i class="fa fa-gamepad"></i>
            <div class="value">27</div>
          </div>
          <div>
            <div class="title">Pals</div>
            <i class="fa fa-group"></i>
            <div class="value">123</div>
          </div>
          <div>
            <div class="title">Coffee</div>
            <i class="fa fa-coffee"></i>
            <div class="value infinity">∞</div>
          </div>
        </div>
      </div>
    </div>
    <div class="general">
      <h1>Jane Doe</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce a volutpat mauris, at molestie lacus. Nam vestibulum sodales odio ut pulvinar.</p>
      <span class="more">Mouse over the card for more info</span>
    </div>
  </div>

  <div class="card green">
    <div class="additional">
      <div class="user-card">
        <div class="level center">
          Level 13
        </div>
        <div class="points center">
          5,312 Points
        </div>
        <svg width="110" height="110" viewBox="0 0 250 250" xmlns="http://www.w3.org/2000/svg" role="img" aria-labelledby="title desc" class="center">
          <title id="title">Teacher</title>
          <desc id="desc">Cartoon of a Caucasian woman smiling, and wearing black glasses and a purple shirt with white collar drawn by Alvaro Montoro.</desc>
          <style>
            .skin { fill: #eab38f; }
            .eyes { fill: #1f1f1f; }
            .hair { fill: #2f1b0d; }
            .line { fill: none; stroke: #2f1b0d; stroke-width:2px; }
          </style>
          <defs>
            <clipPath id="scene">
              <circle cx="125" cy="125" r="115"/>
            </clipPath>
            <clipPath id="lips">
              <path d="M 106,132 C 113,127 125,128 125,132 125,128 137,127 144,132 141,142  134,146  125,146  116,146 109,142 106,132 Z" />
            </clipPath>
          </defs>
          <circle cx="125" cy="125" r="120" fill="rgba(0,0,0,0.15)" />
          <g stroke="none" stroke-width="0" clip-path="url(#scene)">
            <rect x="0" y="0" width="250" height="250" fill="#b0d2e5" />
            <g id="head">
              <path fill="none" stroke="#111111" stroke-width="2" d="M 68,103 83,103.5" />
              <path class="hair" d="M 67,90 67,169 78,164 89,169 100,164 112,169 125,164 138,169 150,164 161,169 172,164 183,169 183,90 Z" />
              <circle cx="125" cy="100" r="55" class="skin" />
              <ellipse cx="102" cy="107" rx="5" ry="5" class="eyes" id="eye-left" />
              <ellipse cx="148" cy="107" rx="5" ry="5" class="eyes" id="eye-right" />
              <rect x="119" y="140" width="12" height="40" class="skin" />
              <path class="line eyebrow" d="M 90,98 C 93,90 103,89 110,94" id="eyebrow-left" />
              <path class="line eyebrow" d="M 160,98 C 157,90 147,89 140,94" id="eyebrow-right"/>
              <path stroke="#111111" stroke-width="4" d="M 68,103 83,102.5" />
              <path stroke="#111111" stroke-width="4" d="M 182,103 167,102.5" />
              <path stroke="#050505" stroke-width="3" fill="none" d="M 119,102 C 123,99 127,99 131,102" />
              <path fill="#050505" d="M 92,97 C 85,97 79,98 80,101 81,104 84,104 85,102" />
              <path fill="#050505" d="M 158,97 C 165,97 171,98 170,101 169,104 166,104 165,102" />
              <path stroke="#050505" stroke-width="3" fill="rgba(240,240,255,0.4)" d="M 119,102 C 118,111 115,119 98,117 85,115 84,108 84,104 84,97 94,96 105,97 112,98 117,98 119,102 Z" />
              <path stroke="#050505" stroke-width="3" fill="rgba(240,240,255,0.4)" d="M 131,102 C 132,111 135,119 152,117 165,115 166,108 166,104 166,97 156,96 145,97 138,98 133,98 131,102 Z" />
              <path class="hair" d="M 60,109 C 59,39 118,40 129,40 139,40 187,43 189,99 135,98 115,67 115,67 115,67 108,90 80,109 86,101 91,92 92,87 85,99 65,108 60,109" />
              <path id="mouth" fill="#d73e3e" d="M 106,132 C 113,127 125,128 125,132 125,128 137,127 144,132 141,142  134,146  125,146  116,146 109,142 106,132 Z" /> 
              <path id="smile" fill="white" d="M125,141 C 140,141 143,132 143,132 143,132 125,133 125,133 125,133 106.5,132 106.5,132 106.5,132 110,141 125,141 Z" clip-path="url(#lips)" />
            </g>
            <g id="shirt">
              <path fill="#8665c2" d="M 132,170 C 146,170 154,200 154,200 154,200 158,250 158,250 158,250 92,250 92,250 92,250 96,200 96,200 96,200 104,170 118,170 118,170 125,172 125,172 125,172 132,170 132,170 Z"/>
              <path id="arm-left" class="arm" stroke="#8665c2" fill="none" stroke-width="14" d="M 118,178 C 94,179 66,220 65,254" />
              <path id="arm-right" class="arm" stroke="#8665c2" fill="none" stroke-width="14" d="M 132,178 C 156,179 184,220 185,254" />
              <path fill="white" d="M 117,166 C 117,166 125,172 125,172 125,182 115,182 109,170 Z" />
              <path fill="white" d="M 133,166 C 133,166 125,172 125,172 125,182 135,182 141,170 Z" />
              <circle cx="125" cy="188" r="4" fill="#5a487b" />
              <circle cx="125" cy="202" r="4" fill="#5a487b" />
              <circle cx="125" cy="216" r="4" fill="#5a487b" />
              <circle cx="125" cy="230" r="4" fill="#5a487b" />
              <circle cx="125" cy="244" r="4" fill="#5a487b" />
              <path stroke="#daa37f" stroke-width="1" class="skin hand" id="hand-left" d="M 51,270 C 46,263 60,243 63,246 65,247 66,248 61,255 72,243 76,238 79,240 82,243 72,254 69,257 72,254 82,241 86,244 89,247 75,261 73,263 77,258 84,251 86,253 89,256 70,287 59,278" /> 
              <path stroke="#daa37f" stroke-width="1" class="skin hand" id="hand-right" d="M 199,270 C 204,263 190,243 187,246 185,247 184,248 189,255 178,243 174,238 171,240 168,243 178,254 181,257 178,254 168,241 164,244 161,247 175,261 177,263 173,258 166,251 164,253 161,256 180,287 191,278"/> 
            </g>
          </g>
        </svg>
      </div>
      <div class="more-info">
        <h1>Jane Doe</h1>
        <div class="coords">
          <span>Group Name</span>
          <span>Joined January 2019</span>
        </div>
        <div class="coords">
          <span>Position/Role</span>
          <span>City, Country</span>
        </div>
        <div class="stats">
          <div>
            <div class="title">Awards</div>
            <i class="fa fa-trophy"></i>
            <div class="value">2</div>
          </div>
          <div>
            <div class="title">Matches</div>
            <i class="fa fa-gamepad"></i>
            <div class="value">27</div>
          </div>
          <div>
            <div class="title">Pals</div>
            <i class="fa fa-group"></i>
            <div class="value">123</div>
          </div>
          <div>
            <div class="title">Coffee</div>
            <i class="fa fa-coffee"></i>
            <div class="value infinity">∞</div>
          </div>
        </div>
      </div>
    </div>
    <div class="general">
      <h1>Jane Doe</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce a volutpat mauris, at molestie lacus. Nam vestibulum sodales odio ut pulvinar.</p>
      <span class="more">Mouse over the card for more info</span>
    </div>
  </div>

  <div class="card green">
    <div class="additional">
      <div class="user-card">
        <div class="level center">
          Level 13
        </div>
        <div class="points center">
          5,312 Points
        </div>
        <svg width="110" height="110" viewBox="0 0 250 250" xmlns="http://www.w3.org/2000/svg" role="img" aria-labelledby="title desc" class="center">
          <title id="title">Teacher</title>
          <desc id="desc">Cartoon of a Caucasian woman smiling, and wearing black glasses and a purple shirt with white collar drawn by Alvaro Montoro.</desc>
          <style>
            .skin { fill: #eab38f; }
            .eyes { fill: #1f1f1f; }
            .hair { fill: #2f1b0d; }
            .line { fill: none; stroke: #2f1b0d; stroke-width:2px; }
          </style>
          <defs>
            <clipPath id="scene">
              <circle cx="125" cy="125" r="115"/>
            </clipPath>
            <clipPath id="lips">
              <path d="M 106,132 C 113,127 125,128 125,132 125,128 137,127 144,132 141,142  134,146  125,146  116,146 109,142 106,132 Z" />
            </clipPath>
          </defs>
          <circle cx="125" cy="125" r="120" fill="rgba(0,0,0,0.15)" />
          <g stroke="none" stroke-width="0" clip-path="url(#scene)">
            <rect x="0" y="0" width="250" height="250" fill="#b0d2e5" />
            <g id="head">
              <path fill="none" stroke="#111111" stroke-width="2" d="M 68,103 83,103.5" />
              <path class="hair" d="M 67,90 67,169 78,164 89,169 100,164 112,169 125,164 138,169 150,164 161,169 172,164 183,169 183,90 Z" />
              <circle cx="125" cy="100" r="55" class="skin" />
              <ellipse cx="102" cy="107" rx="5" ry="5" class="eyes" id="eye-left" />
              <ellipse cx="148" cy="107" rx="5" ry="5" class="eyes" id="eye-right" />
              <rect x="119" y="140" width="12" height="40" class="skin" />
              <path class="line eyebrow" d="M 90,98 C 93,90 103,89 110,94" id="eyebrow-left" />
              <path class="line eyebrow" d="M 160,98 C 157,90 147,89 140,94" id="eyebrow-right"/>
              <path stroke="#111111" stroke-width="4" d="M 68,103 83,102.5" />
              <path stroke="#111111" stroke-width="4" d="M 182,103 167,102.5" />
              <path stroke="#050505" stroke-width="3" fill="none" d="M 119,102 C 123,99 127,99 131,102" />
              <path fill="#050505" d="M 92,97 C 85,97 79,98 80,101 81,104 84,104 85,102" />
              <path fill="#050505" d="M 158,97 C 165,97 171,98 170,101 169,104 166,104 165,102" />
              <path stroke="#050505" stroke-width="3" fill="rgba(240,240,255,0.4)" d="M 119,102 C 118,111 115,119 98,117 85,115 84,108 84,104 84,97 94,96 105,97 112,98 117,98 119,102 Z" />
              <path stroke="#050505" stroke-width="3" fill="rgba(240,240,255,0.4)" d="M 131,102 C 132,111 135,119 152,117 165,115 166,108 166,104 166,97 156,96 145,97 138,98 133,98 131,102 Z" />
              <path class="hair" d="M 60,109 C 59,39 118,40 129,40 139,40 187,43 189,99 135,98 115,67 115,67 115,67 108,90 80,109 86,101 91,92 92,87 85,99 65,108 60,109" />
              <path id="mouth" fill="#d73e3e" d="M 106,132 C 113,127 125,128 125,132 125,128 137,127 144,132 141,142  134,146  125,146  116,146 109,142 106,132 Z" /> 
              <path id="smile" fill="white" d="M125,141 C 140,141 143,132 143,132 143,132 125,133 125,133 125,133 106.5,132 106.5,132 106.5,132 110,141 125,141 Z" clip-path="url(#lips)" />
            </g>
            <g id="shirt">
              <path fill="#8665c2" d="M 132,170 C 146,170 154,200 154,200 154,200 158,250 158,250 158,250 92,250 92,250 92,250 96,200 96,200 96,200 104,170 118,170 118,170 125,172 125,172 125,172 132,170 132,170 Z"/>
              <path id="arm-left" class="arm" stroke="#8665c2" fill="none" stroke-width="14" d="M 118,178 C 94,179 66,220 65,254" />
              <path id="arm-right" class="arm" stroke="#8665c2" fill="none" stroke-width="14" d="M 132,178 C 156,179 184,220 185,254" />
              <path fill="white" d="M 117,166 C 117,166 125,172 125,172 125,182 115,182 109,170 Z" />
              <path fill="white" d="M 133,166 C 133,166 125,172 125,172 125,182 135,182 141,170 Z" />
              <circle cx="125" cy="188" r="4" fill="#5a487b" />
              <circle cx="125" cy="202" r="4" fill="#5a487b" />
              <circle cx="125" cy="216" r="4" fill="#5a487b" />
              <circle cx="125" cy="230" r="4" fill="#5a487b" />
              <circle cx="125" cy="244" r="4" fill="#5a487b" />
              <path stroke="#daa37f" stroke-width="1" class="skin hand" id="hand-left" d="M 51,270 C 46,263 60,243 63,246 65,247 66,248 61,255 72,243 76,238 79,240 82,243 72,254 69,257 72,254 82,241 86,244 89,247 75,261 73,263 77,258 84,251 86,253 89,256 70,287 59,278" /> 
              <path stroke="#daa37f" stroke-width="1" class="skin hand" id="hand-right" d="M 199,270 C 204,263 190,243 187,246 185,247 184,248 189,255 178,243 174,238 171,240 168,243 178,254 181,257 178,254 168,241 164,244 161,247 175,261 177,263 173,258 166,251 164,253 161,256 180,287 191,278"/> 
            </g>
          </g>
        </svg>
      </div>
      <div class="more-info">
        <h1>Jane Doe</h1>
        <div class="coords">
          <span>Group Name</span>
          <span>Joined January 2019</span>
        </div>
        <div class="coords">
          <span>Position/Role</span>
          <span>City, Country</span>
        </div>
        <div class="stats">
          <div>
            <div class="title">Awards</div>
            <i class="fa fa-trophy"></i>
            <div class="value">2</div>
          </div>
          <div>
            <div class="title">Matches</div>
            <i class="fa fa-gamepad"></i>
            <div class="value">27</div>
          </div>
          <div>
            <div class="title">Pals</div>
            <i class="fa fa-group"></i>
            <div class="value">123</div>
          </div>
          <div>
            <div class="title">Coffee</div>
            <i class="fa fa-coffee"></i>
            <div class="value infinity">∞</div>
          </div>
        </div>
      </div>
    </div>
    <div class="general">
      <h1>Jane Doe</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce a volutpat mauris, at molestie lacus. Nam vestibulum sodales odio ut pulvinar.</p>
      <span class="more">Mouse over the card for more info</span>
    </div>
  </div>
</div>         
            </section>
        </main>
<style>
   @import url('https://fonts.googleapis.com/css?family=Abel');

.center {
  position: absolute;
  top: 80%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
}

.card {
  width: 480px;
  height: 280px;
  background-color: #fff;
  background: linear-gradient(#f8f8f8, #fff);
  box-shadow: 0 8px 16px -8px rgba(0,0,0,0.4);
  border-radius: 6px;
  overflow: hidden;
  position: relative;
  margin: 1.5rem;
  cursor: pointer;
}

.card h1 {
  text-align: center;
}

.card .additional {
  position: absolute;
  width: 150px;
  height: 100%;
  background: linear-gradient(#dE685E, #EE786E);
  transition: width 0.4s;
  overflow: hidden;
  z-index: 2;
}

.card.green .additional {
  background: linear-gradient(#92bCa6, #A2CCB6);
}


.card:hover .additional {
  width: 100%;
  border-radius: 0 5px 5px 0;
}

.card .additional .user-card {
  width: 150px;
  height: 100%;
  position: relative;
  float: left;
}

.card .additional .user-card::after {
  content: "";
  display: block;
  position: absolute;
  top: 10%;
  right: -2px;
  height: 80%;
  border-left: 2px solid rgba(0,0,0,0.025);*/
}

.card .additional .user-card .level,
.card .additional .user-card .points {
  top: 15%;
  color: #fff;
  text-transform: uppercase;
  font-size: 0.75em;
  font-weight: bold;
  background: rgba(0,0,0,0.15);
  padding: 0.125rem 0.75rem;
  border-radius: 100px;
  white-space: nowrap;
}

.card .additional .user-card .points {
  top: 85%;
}

.card .additional .user-card svg {
  top: 50%;
}

.card .additional .more-info {
  width: 300px;
  float: left;
  position: absolute;
  left: 150px;
  height: 100%;
}

.card .additional .more-info h1 {
  color: #fff;
  margin-bottom: 0;
}

.card.green .additional .more-info h1 {
  color: #224C36;
}

.card .additional .coords {
  margin: 0 1rem;
  color: #fff;
  font-size: 1rem;
}

.card.green .additional .coords {
  color: #325C46;
}

.card .additional .coords span + span {
  float: right;
}

.card .additional .stats {
  font-size: 2rem;
  display: flex;
  position: absolute;
  bottom: 1rem;
  left: 1rem;
  right: 1rem;
  top: auto;
  color: #fff;
}

.card.green .additional .stats {
  color: #325C46;
}

.card .additional .stats > div {
  flex: 1;
  text-align: center;
}

.card .additional .stats i {
  display: block;
}

.card .additional .stats div.title {
  font-size: 0.75rem;
  font-weight: bold;
  text-transform: uppercase;
}

.card .additional .stats div.value {
  font-size: 1.5rem;
  font-weight: bold;
  line-height: 1.5rem;
}

.card .additional .stats div.value.infinity {
  font-size: 2.5rem;
}

.card .general {
  width: 300px;
  height: 100%;
  position: absolute;
  top: 0;
  right: 0;
  z-index: 1;
  box-sizing: border-box;
  padding: 1rem;
  padding-top: 0;
}

.card .general .more {
  position: absolute;
  bottom: 1rem;
  right: 1rem;
  font-size: 0.9em;
}


</style>

    <!-- CONTACT US -->

    <div class="wrapper">
    <div class="button">
    <div class="icon">
    <i class="fab fa-facebook-messenger"></i>

    </div>
    <span>Message Us</span>
    </div>
    </div>

<script>
    const wrapper = document.querySelector(".wrapper"),
    header = wrapper.querySelector("span");
    i = wrapper.querySelector("i");
    function onDrag({movementX, movementY}){
      let getStyle = window.getComputedStyle(wrapper);
      let leftVal = parseInt(getStyle.left);
      let topVal = parseInt(getStyle.top);
      wrapper.style.left = `${leftVal + movementX}px`;
      wrapper.style.top = `${topVal + movementY}px`;
    }
    header.addEventListener("mousedown", ()=>{
      header.classList.add("active");
      header.addEventListener("mousemove", onDrag);
    });
    i.addEventListener("mousedown", ()=>{
      i.classList.add("active");
      i.addEventListener("mousemove", onDrag);
    });
    document.addEventListener("mouseup", ()=>{
      header.classList.remove("active");
      header.removeEventListener("mousemove", onDrag);
    });
    document.addEventListener("mouseup", ()=>{
      i.classList.remove("active");
      i.removeEventListener("mousemove", onDrag);
    });
  </script>

    <style type="text/css">
        /* Contact Us */

.wrapper{
  position: fixed;
  bottom: 2%;
  right: 0%;
  height: 60px;
  width: 40px;
  border-radius: 50px;
  transform: translate(-50%, -50%);
  cursor: pointer;
}
.wrapper i{

  height: 60px;
  width: 60px;
  font-size: 5em;
  border-radius: 50%;
  display: inline-block;
  align-items: center;
}
.wrapper i.active{
  cursor: move;
  user-select: none;
}

.wrapper .button{
  display: inline-block;
  height: 60px;
  width: 60px;
  float: right;
  margin: 0 5px;
  overflow: hidden;
  background: #0099ff;
  color: #fff;
  border-radius: 50px;
  cursor: pointer;
  box-shadow: 0px 10px 10px rgba(0,0,0,0.1);
  transition: all 0.3s ease-out;
}
.wrapper .button:hover{
  width: 200px;
}
.wrapper .button .icon{
  display: inline-block;
  height: 60px;
  width: 60px;
  text-align: center;
  border-radius: 50px;
  box-sizing: border-box;
  line-height: 60px;
  transition: all 0.3s ease-out;
}
.wrapper .button:nth-child(1):hover .icon{
  background: #fff;
}

.wrapper .button .icon i{
  font-size: 25px;
  line-height: 60px;
  transition: all 0.3s ease-out;
}
.wrapper .button:hover .icon i{
  color: #0099ff;
}
.wrapper .button span{
  font-size: 20px;
  font-weight: 500;
  line-height: 60px;
  margin-left: 10px;
  transition: all 0.3s ease-out;
}
.wrapper .button:nth-child(1) span{
  color: #fff;
}

/* */
    </style>

        <!--========== MAIN JS ==========-->
        <script src="assets/js/mainjs.js"></script>
    </body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>