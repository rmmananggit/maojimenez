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

        <!--========== CSS ==========-->
        <link rel="stylesheet" href="assets/css/styles.css">
        <link rel="stylesheet" href="assets/css/subjcss.css">

        <title>ONLINE EXAMINATION</title>
    </head>
    <body>
        <!--========== HEADER ==========-->
        <header class="header">
            <div class="header__container">
                  <a href="home.php" class="header__img"><svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 0.82);transform: ;msFilter:;"><path d="M21 11H6.414l5.293-5.293-1.414-1.414L2.586 12l7.707 7.707 1.414-1.414L6.414 13H21z"></path></svg></a>
                <a href="subj1.php" class="header__logo">SUBJECT 1</a>
    
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
    
                            <a href="home.php" class="nav__link">
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
                                <a href="#" class="nav__link active">
                                    <i class='bx bx-book nav__icon' ></i>
                                    <span class="nav__name">Subjects</span>
                                    <i class='bx bx-chevron-down nav__icon nav__dropdown-icon'></i>
                                </a>

                                <div class="nav__dropdown-collapse">
                                    <div class="nav__dropdown-content">
                                        <a href="subj1.php" class="nav__link active">Subject 1</a>
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
                <main class="main bd-grid">
            <article class="card">
                <div class="card__img">
                    <img src="assets/img/img1.png" alt="">
                </div>
                <div class="card__name">
                    <p>WEEK 1</p>
                </div>
                <div class="card__precis">
                    <a href="" class="card__icon" ><ion-icon name="heart-outline"></ion-icon></a>
                    
                    <div>
                        <span class="card__preci card__preci--before">AUG 23 (EDITED YESTERDAY)</span>
                        <span class="card__preci card__preci--now">INTRODUCTION TO SUBJECT 1</span>
                    </div>
                    <a href="" class="card__icon"><ion-icon name="enter-outline"></ion-icon></a>
                </div>
            </article>

            <article class="card">
                <div class="card__img">
                    <img src="assets/img/img2.png" alt="">
                </div>
                <div class="card__name">
                    <p>WEEEK 2</p>
                </div>
                <div class="card__precis">
                    <a href="" class="card__icon" ><ion-icon name="heart-outline"></ion-icon></a>
                    <div>
                        <span class="card__preci card__preci--before">AUG 24</span>
                        <span class="card__preci card__preci--now">WEEK - 1 - INTRO-TO-CAPSTONE-AND-RESEARCH </span>
                    </div>
                    <a href="" class="card__icon"><ion-icon name="enter-outline"></ion-icon></a>
                </div>
            </article>

            <article class="card">
                <div class="card__img">
                    <img src="assets/img/img3.png" alt="">
                </div>
                <div class="card__name">
                    <p>WEEK 3</p>
                </div>
                <div class="card__precis">
                    <a href="" class="card__icon" ><ion-icon name="heart-outline"></ion-icon></a>
                    
                    <div>
                        <span class="card__preci card__preci--before">AUG 25</span>
                        <span class="card__preci card__preci--now">WEEK - 2</span>
                    </div>
                    <a href="" class="card__icon"><ion-icon name="enter-outline"></ion-icon></a>
                </div>
            </article>

            <article class="card">
                <div class="card__img">
                    <img src="assets/img/img4.png" alt="">
                </div>
                <div class="card__name">
                    <p>WEEK 4</p>
                </div>
                <div class="card__precis">
                    <a href="" class="card__icon" ><ion-icon name="heart-outline"></ion-icon></a>
                    
                    <div>
                        <span class="card__preci card__preci--before">AUG 26</span>
                        <span class="card__preci card__preci--now">WEEK - 3</span>
                    </div>
                    <a href="" class="card__icon"><ion-icon name="enter-outline"></ion-icon></a>
                </div>
            </article>

            <article class="card">
                <div class="card__img">
                    <img src="assets/img/img4.png" alt="">
                </div>
                <div class="card__name">
                    <p>WEEK 4</p>
                </div>
                <div class="card__precis">
                    <a href="" class="card__icon" ><ion-icon name="heart-outline"></ion-icon></a>
                    
                    <div>
                        <span class="card__preci card__preci--before">AUG 27</span>
                        <span class="card__preci card__preci--now">WEEK - 4</span>
                    </div>
                    <a href="" class="card__icon"><ion-icon name="enter-outline"></ion-icon></a>
                </div>
            </article>

            <article class="card">
                <div class="card__img">
                    <img src="assets/img/img4.png" alt="">
                </div>
                <div class="card__name">
                    <p>WEEK 4</p>
                </div>
                <div class="card__precis">
                    <a href="" class="card__icon" ><ion-icon name="heart-outline"></ion-icon></a>
                    
                    <div>
                        <span class="card__preci card__preci--before">AUG 28</span>
                        <span class="card__preci card__preci--now"><?php echo $_SESSION['name']; ?></span>
                    </div>
                    <a href="" class="card__icon"><ion-icon name="enter-outline"></ion-icon></a>
                </div>
            </article>

            <article class="card">
                <div class="card__img">
                    <img src="assets/img/img4.png" alt="">
                </div>
                <div class="card__name">
                    <p></p>
                </div>
                <div class="card__precis">
                    <a href="" class="card__icon" ><ion-icon name="heart-outline"></ion-icon></a>
                    
                    <div>
                        <span class="card__preci card__preci--before"></span>
                        <span class="card__preci card__preci--now"></span>
                    </div>
                    <a href="" class="card__icon"><ion-icon name="enter-outline"></ion-icon></a>
                </div>
            </article>

        </main>

        <!-- ICONS -->
        <script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
                
            </section>

        </main>

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