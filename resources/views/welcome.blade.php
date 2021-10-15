<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--==================== UNICONS ====================-->
         <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
          <!--========== BOX ICONS ==========-->
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

        <!--=============== FAVICON ===============-->
        <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">

        <!--=============== REMIX ICONS ===============-->
        <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

        <!--=============== CSS ===============-->
        <link rel="stylesheet" href="{{ asset('common' )}}/styles.css">


        <title>Al Shahriar Mehedi</title>
    </head>
    <body>
        <!--=============== HEADER ===============-->
        <header class="header" id="header">
            <nav class="nav container">
                <a href="#" class="nav__logo">
                    <img src="assets/img/logo.png" alt="">
                </a>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <div class="nav__btns">
                            <!-- Theme change button -->
                           <li><i class="bx bx-moon  bx bx-moon bx-burst" id="theme-button"></i></li>
    
                        </div>
                        <li class="nav__item">
                            <a href="#home" class="nav__link active-link">Home</a>
                        </li>
                        <li class="nav__item">
                            <a href="#specs" class="nav__link">Skills</a>
                        </li>
                        <li class="nav__item">
                            <a href="#case" class="nav__link">sHAHRIAr &reg;</a>
                        </li>
                        <li class="nav__item">
                            <a href="https://github.com/brainshahriar?tab=repositories" class="nav__link">Download</a>
                        </li>
                       
                    </ul>

                    <div class="nav__close" id="nav-close">
                        <i class="ri-close-line"></i>
                    </div>
                </div>
                <div class="nav__toggle" id="nav-toggle">
                    <i class="ri-function-line"></i>
                </div>
            </nav>
        </header>

        <main class="main">
            <!--=============== HOME ===============-->
            <section class="home section" id="home">
                <div class="home__container container grid">
                    <div>
                        <img src="assets/img/home.png" alt="" class="home__img">
                    </div>
                    
                    <div class="home__data">
                        <div class="home__header">
                            <h1 class="home__title">Hello!</h1>
                            <h2 class="home__subtitle">I'm sHAHRIAr</h2>
                      

                        </div>

                        <div class="home__footer">
                            <h3 class="home__title-description">About Me </h3>
                            <p>
                                <h1>
                                  <a href="" class="typewrite" data-period="2000" data-type='[ "Hello!,Im Shahriar", "Currently i worked at globalskills development agency as a web Developer, I have pursued my Bachelors in Computer Science of Engineering from East West University." ]'>
                                 <span class="wrap"></span>
                                 </a>
                                 </h1>
                          </p> <br> &nbsp;
                            <a href="https://github.com/brainshahriar?tab=overview&from=2021-08-01&to=2021-08-31" class="button button--flex">
                                <span class="button--flex">
                                    <i class="uil uil-info-circle"></i> More info
                                </span>
                                <span class="home__price"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
            


            <!--=============== SPECS ===============-->
            <section class="specs section grid" id="specs">
                <h2 class="section__title section__title-gradient">Skills</h2>

                <div class="specs__container container grid">
                    <div class="specs__content grid">
                        <div class="specs__data">
                            <i class="uil uil-desktop"></i>
                            <h3 class="specs__title">Developer</h3>
                            <span class="specs__subtitle"></span>
                        </div>
    
                        <div class="specs__data">
                            <i class="uil uil-browser"></i>
                            <h3 class="specs__title">Web Development</h3>
                            <span class="specs__subtitle">Front&Back End</span>
                        </div>
    
                        <div class="specs__data">
                            <i class="uil uil-mobile-android"></i>
                            <h3 class="specs__title">Android AOSP Development</h3>
                            <span class="specs__subtitle">Custom Rom - GSI/ custom Kernel</span>
                        </div>
    
                        <div class="specs__data">
                            <i class="uil uil-apps"></i>
                            <h3 class="specs__title">App/Game development</h3>
                            <span class="specs__subtitle"> <br> </span>
                        </div>
                    </div>
                    
                    <div>
                        <img src="assets/img/specs.png" alt="" class="specs__img">
                    </div>
                </div>
            </section>
          <!--=============== CASE ===============-->
            <section class="case section grid" id="case">
                <h2 class="section__title section__title-gradient">sHAHRIAr&reg;</h2>

                <div class="case__container container grid">
                    <div>
                        <img src="assets/img/case.png" alt="" class="case__img">
                    </div>

                    <div class="case__data">
                        <p class="case__description">This  is my github for open source contribution stuff...
                        </p>
                        <a href="https://github.com/brainshahriar?tab=overview&from=2021-08-01&to=2021-08-31" class="button button--flex">
                            <i class="ri-information-line button__icon"></i> More info
                        </a>
                    </div>
                </div>
            </section>


                        <!--=============== DISCOUNT ===============-->
                        <section class="discount section">
                            <div class="discount__container container grid">
                                <div class="discount__animate">
                                    <h2 class="discount__title"> <i class="uil uil-cube"></i> OpenSource <br>Download My Projects Free to use and Open-source </h2>
                                    <p class="discount__description">Check My github Profile for more...</p>
                                    <a href="https://github.com/brainshahriar?tab=repositories" class="button button--flex">
                                        <i class="uil uil-arrow-to-bottom"></i> Download
                                    </a>
                                </div>
            
                                <img src="assets/img/discount.png" alt="" class="discount__img">
                            </div>
                        </section>

</main>

        <!--=============== FOOTER ===============-->
        <footer class="footer section">
            <div class="footer__container container grid">
                <a href="#" class="footer__logo">
                    <img src="assets/img/logo.png" alt="">
                </a>
    
                <div class="footer__content">
                    <h3 class="footer__title">sHAHRIAr&reg;</h3> &nbsp;&nbsp;
    
                    <ul class="footer__links">
                        <li>
                            <a href="mailto:shahriarmehedi94@gmail.com" class="footer__link">Email</a>
                        </li>
                        <li>
                            <a href="https://www.google.com.bd/maps/place/ICLEI+-+South+Asia,+Bangladesh/@23.8123759,90.4298752,19z/data=!3m1!5s0x3755c64af2be3ee7:0x25f28636bbc85be7!4m5!3m4!1s0x3755c74ad4d50609:0xe2cb0264d90893d4!8m2!3d23.8125504!4d90.4301056" class="footer__link">My Location in Universe</a>
                        </li>
                    </ul>
                </div>
    
                <div class="footer__content">
                    <h3 class="footer__title">Support</h3> &nbsp;&nbsp;
    
                    <ul class="footer__links">
                        <li>
                            <a href="mailto:shahriarmehedi94@gmail.com" class="footer__link">Help
                                <i class="uil uil-discord"></i>
                            </a>
                        </li>
                        <li>
                            <a href="" class="footer__link">Updates</a>
                        </li>
                        <li>
                            <a href="https://github.com/brainshahriar?tab=repositories" class="footer__link">Download</a>
                        </li>
                    </ul>
                </div>
                  
                <div class="footer__content">
                    <form action="" class="footer__form">
                        <input type="email" placeholder="Email" class="footer__input">
                        <button class="button button--flex">
                            <i class="ri-send-plane-line button__icon"></i> Subscribe
                        </button>
                    </form>
    
                    <div class="footer__social">
                            &nbsp;&nbsp;
                        <a href="" target="_blank" class="footer__social-link">
                            <i class="uil uil-telegram-alt"></i> &nbsp; <br>
                        </a>
                        <a href="" target="_blank" class="footer__social-link">
                            <i class="uil uil-instagram"></i> &nbsp; <br>
                        </a> 
                        <a href="" target="_blank" class="footer__social-link">
                            <i class="uil uil-reddit-alien-alt"></i> &nbsp;<br>
                            
                        </a> 
                       
                        <a href="" target="_blank" class="footer__social-link">
                            <i class="uil uil-dribbble"></i> &nbsp;<br>
                        </a> 
                           
                        <a href="" target="_blank" class="footer__social-link">
                            <i class="uil uil-tumblr-alt"></i> &nbsp;<br>
                        </a> 
                        <a href="" target="_blank" class="footer__social-link">
                            <i class="uil uil-github-alt"></i> &nbsp;<br>
                        </a> 
                        <a href="" target="_blank" class="footer__social-link">
                            <i class="uil uil-youtube"></i> &nbsp;<br>
                            
                        </a> 
                        <a href="https://www.linkedin.com/in/al-shahriar-4094341bb/" target="_blank" class="footer__social-link">
                            <i class="uil uil-linkedin-alt"></i> &nbsp;<br>
                        </a>  
                          
                        <a href="" target="_blank" class="footer__social-link">
                            <i class="uil uil-twitter-alt"></i> &nbsp;<br>
                        </a>
                        <a href="" target="_blank" class="footer__social-link">
                            <i class='bx bxl-pinterest' ></i>
                        </a> 
                            
                       </div>
                    </div>
                </div>
            </div>

            <p class="footer__copy">
                <a href="#" target="_blank" class="footer__copy-link">sHAHRIAr&reg;2021 &nbsp;&#169; ASM. <i class='bx bx-save'></i> Save <i class='bx bxs-tree' ></i> Trees  All right reserved</a>
            </p>
        </footer>

        <!--=============== SCROLL UP ===============-->
        <a href="#" class="scrollup" id="scroll-up">
            <i class="ri-arrow-up-s-line scrollup__icon"></i>
        </a>
        
        <!--=============== SCROLL REVEAL ===============-->
        <script src="https://unpkg.com/scrollreveal"></script>

        <!--=============== MAIN JS ===============-->
        <script src="{{ asset('common' )}}/main.js"></script>
    </body>
</html>