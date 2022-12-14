<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>"Navruz Hotel" mehmonhonasi</title>
        <!-- Bootstrap css link -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<!--        <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">-->
        <script src="plugins/bootstrap/bootstrap.min.js"></script>
        <!-- Css styles link -->
        <link rel="stylesheet" href="./css/main.css">
        <link rel="stylesheet" href="./css/shared.css">
        <link rel="stylesheet" href="./css/media.css">
        <link rel="shortcut icon" href="./img/logo100.png" type="image/x-icon">
        <!-- Font Awesome link -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<!--        <link rel="stylesheet" href="plugins/awesome/all.min.css">-->
    </head>
    <body>
        <!-- Header section -->
        <header id="header">
            <nav class="nav" id="nav">
                <div class="container">
                    <ul class="nav-items d-flex flex-column flex-md-row justify-content-md-between align-items-center">
                        <li class="nav-item mt-4 mt-md-0"><a href="./" class="nav-item__link active">Bosh sahifa</a></li>
                        <li class="nav-item mt-4 mt-md-0"><a href="./booking/" class="nav-item__link">Bron qilish</a></li>
                        <li class="nav-item mt-4 mt-md-0"><a href="./about/" class="nav-item__link">Biz haqimizda</a></li>
                        <li class="nav-item mt-4 mt-md-0"><a href="#" class="nav-item__link">Xonalar</a></li>
                        <li class="nav-item mt-4 mt-md-0"><a href="#" class="nav-item__link">Ob'ektlar</a></li>
                        <li class="nav-item mt-4 mt-md-0"><a href="#" class="nav-item__link">Yangiliklar</a></li>
                        <li class="nav-item mt-4 mt-md-0"><a href="#" class="nav-item__link">Kontaktlar</a></li>
                        <li class="nav-item dropdown">
                            <a class="dropdown-toggle fw-semibold" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img class="flag" src="./img/flags/<?php echo $_SESSION["lang"] ?>.svg" alt="RU">
                            </a>
                            <ul class="dropdown-menu text-center">
                                <li class="fw-semibold"><a href="ru.html"><img class="flag" src="./img/flags/ru.svg" alt="RU">RU</li>
                                <li class="fw-semibold"><a href="uz.html"><img class="flag" src="./img/flags/uz.svg" alt="UZ">UZ</li>
                                <li class="fw-semibold"><a href="en.html"><img class="flag" src="./img/flags/en.svg" alt="EN">EN</li>
                            </ul>
                        </li>



                    </ul>
                </div>
            </nav>
            <!-- Nav Mobile -->
            <nav class="nav-mobile" id="nav-mobile">
                <div class="container">
                    <ul class="nav-mobile-items d-flex flex-column flex-md-row justify-content-md-between align-items-center">
                        <li class="nav-mobile-item mt-4 mt-md-0"><a href="./" class="nav-item__link active">Bosh sahifa</a></li>
                        <li class="nav-mobile-item mt-4 mt-md-0"><a href="./booking/" class="nav-item__link">Bron qilish</a></li>
                        <li class="nav-mobile-item mt-4 mt-md-0"><a href="./about/" class="nav-item__link">Biz haqimizda</a></li>
                        <li class="nav-mobile-item mt-4 mt-md-0"><a href="#" class="nav-item__link">Xonalar</a></li>
                        <li class="nav-mobile-item mt-4 mt-md-0"><a href="#" class="nav-item__link">Ob'ektlar</a></li>
                        <li class="nav-mobile-item mt-4 mt-md-0"><a href="#" class="nav-item__link">Yangiliklar</a></li>
                        <li class="nav-mobile-item mt-4 mt-md-0"><a href="#" class="nav-item__link">Kontaktlar</a></li>
                        <li class="nav-mobile-item dropdown">
                            <a class="dropdown-toggle fw-semibold" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img class="flag" src="./img/flags/uz.svg" alt="RU">
                            </a>
                            <ul class="dropdown-menu text-center">
                                <li class="fw-semibold"><img class="flag" src="./img/flags/ru.svg" alt="RU">RU</li>
                                <li class="fw-semibold"><img class="flag" src="./img/flags/uz.svg" alt="UZ">UZ</li>
                                <li class="fw-semibold"><img class="flag" src="./img/flags/en.svg" alt="EN">EN</li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="header-info">
                <div class="container">
                    <div class="row justify-content-between align-items-center">
                        <a class="header-info__link col-6" href="./">
                            <img class="img-fluid" src="./img/logo100.png" alt="Logo">
                        </a>
                        <h3 class="header-info__text text-end col-6">
                            +998 75 123 45 67
                        </h3>
                        <button class="col-2 toggle-menu showing text-end" id="toggle-menu">
                            <i class="fa-sharp fa-solid fa-bars"></i>
                        </button>
                        <button class="col-2 toggle-menu hidden text-end d-none" id="x-menu">
                            <i class="fa-sharp fa-solid fa-xmark"></i>
                        </button>
                    </div>
                </div>    
            </div>
        </header>
        <!-- /Header section -->
        <!-- Main section -->
        <main id="main" class="d-flex justify-content-center align-items-md-center">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-md-6">
                        <div class="text-center text-md-start mt-5 mt-md-0">
                            <h2 class="main-title text-white fw-semibold">
                                Toshkentning <br> markazida joylashgan <br>
                                shinam mehmonxona
                            </h2>
                            <a class="main-link d-none d-md-block mt-4 mt-md-2" href="#">
                                <button class="button btn-brown">Bron qiling</button>
                            </a>
                        </div>    
                    </div>
                    <div class="col-md-6 d-flex justify-content-center justify-content-md-end">
                        <div class="bron-wrapper">
                            <h3 class="bron-title">
                                Xonalarni band qilish
                            </h3>
                            <form class="form">
                                <div class="bron-input mt-2">
                                    <label for="arrive">Kelish sanasi</label>
                                    <input id="arrive" type="date" class="form-control">
                                    <i class="fa-sharp fa-solid fa-calendar-days"></i>
                                </div>
                                <div class="bron-input mt-2">
                                    <label for="departure">Jo'nash sanasi</label>
                                    <input id="departure" type="date" class="form-control">
                                    <i class="fa-sharp fa-solid fa-calendar-days"></i>
                                </div>
                                <div class="bron-input mt-2">
                                    <label for="guests">Mehmonlar soni</label>
                                    <input id="guests" type="number" class="form-control">
                                    <i class="fa-solid fa-user"></i>
                                </div>
                                <button class="button btn-brown mt-4">Xonani topmoq</button>
                            </form>
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="opacity"></div>
        </main>
        <!-- /Main section -->
        <!-- Abous us section -->
        <section id="about-us">
            <div class="container">
                <div class="section-title my-5">
                    <h2 class="section-title__text">Biz haqimizda</h2>
                    <div class="section-title__border"></div>
                </div>
                <div class="row justify-content-between">
                    <div class="col-md-5 col-lg-6 col-xl-5 d-none d-md-block">
                        <img src="./img/about-us.png" alt="About us image" class="about-us__img img-fluid">
                    </div>
                    <div class="col-md-6 col-xl-7">
                        <h2 class="about-us-title text-dark">Mehmonxona - <span class="text-brown">Navruz Hotel</span></h2>
                        <p class="section-text about-us-text my-5">
                            Shinam va qulay Navruz Hotel Tashkent
                            mehmonxonasi shahar markazida joylashgan
                            va o???z eshiklarini mehmonlar uchun 2018 yilda ochgan.
                        </p>
                        <p class="section-text about-us-text my-5">
                            Mehmonxonada qulay yashash uchun 130 ta
                            har xil toifadagi xonalar zamonaviy jihozlar bilan
                            jihozlangan. Har bir xonada smart televizor,
                            kichik muzlatkich, konditsioner, Wi-Fi internet
                            va xavsiz seyf mavjud.
                        </p>
                        <p class="section-text about-us-text my-5">
                            Mehmonlar uchun konferentsiya zali, bar, restoran,
                            bilyard o???ynash honasi, ochiq hovuz, sauna
                            va shinam hovli faoliyat yuritadi.
                        </p>
                        <a class="abouts-us__link section-text text-brown fw-semibold" href="#">
                            Ko'proq bilish
                            <i class="arrow-icon fa-sharp fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="amenities-wrapper my-5 py-5 px-4">
                    <div class="row amenities-el justify-content-between">
                        <div class="col-md-6 col-lg-3 py-3 py-lg-0">
                            <img class="amenities-img" src="./img/about-us-1.svg" alt="amenities img">
                            <h4 class="amenities-title">
                                Xonaning arzon narxi
                            </h4>
                        </div>
                        <div class="col-md-6 col-lg-3 py-3 py-lg-0">
                            <img class="amenities-img" src="./img/about-us-2.svg" alt="amenities img">
                            <h4 class="amenities-title">
                                Dam olishga yashil maydon
                            </h4>
                        </div>
                        <div class="col-md-6 col-lg-3 py-3 py-lg-0">
                            <img class="amenities-img" src="./img/about-us-3.svg" alt="amenities img">
                            <h4 class="amenities-title">
                                Bepul Wi-Fi
                            </h4>
                        </div>
                        <div class="col-md-6 col-lg-3 py-3 py-lg-0">
                            <img class="amenities-img" src="./img/about-us-4.svg" alt="amenities img">
                            <h4 class="amenities-title">
                                Malakali xodimlar
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /About us section -->
        <!-- Rooms section -->
        <section id="rooms">
            <div class="container my-5">
                <div class="section-title my-5">
                    <h2 class="section-title__text">Xonalar</h2>
                    <div class="section-title__border"></div>
                </div>
                <div class="rooms">
                    <div class="row justify-content-center justify-content-lg-between">
                        <div class="col-8 col-sm-6 col-md-4 col-lg-3">
                            <a href="#">
                                <div class="card">
                                    <div class="card-head">
                                        <img src="./img/room1.png" class="card-img-top img-fluid" alt="room image">
                                        <div class="opacity"></div>
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title text-brown">Standart Twin</h5>
                                        <div class="card-border"></div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-8 col-sm-6 col-md-4 col-lg-3 mt-4 mt-sm-0">
                            <a href="#">
                                <div class="card">
                                    <div class="card-head">
                                        <img src="./img/room2.png" class="card-img-top img-fluid" alt="room image">
                                        <div class="opacity"></div>
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title text-brown">Standart King</h5>
                                        <div class="card-border"></div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-8 col-sm-6 col-md-4 col-lg-3 mt-4 mt-md-0">
                            <a href="#">
                                <div class="card">
                                    <div class="card-head">
                                        <img src="./img/room3.png" class="card-img-top img-fluid" alt="room image">
                                        <div class="opacity"></div>
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title text-brown">Suite</h5>
                                        <div class="card-border"></div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-8 col-sm-6 col-md-4 col-lg-3 mt-4 mt-lg-0">
                            <a href="#">
                                <div class="card">
                                    <div class="card-head">
                                        <img src="./img/room4.png" class="card-img-top img-fluid" alt="room image">
                                        <div class="opacity"></div>
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title text-brown">Econom Standart</h5>
                                        <div class="card-border"></div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-8 col-sm-6 col-md-4 col-lg-3 mt-4">
                            <a href="#">
                                <div class="card">
                                    <div class="card-head">
                                        <img src="./img/room5.png" class="card-img-top img-fluid" alt="room image">
                                        <div class="opacity"></div>
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title text-brown">Superior King</h5>
                                        <div class="card-border"></div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Rooms section -->
        <!-- Facilities section -->
        <section id="facilities">
            <div class="container">
                <div class="section-title my-5">
                    <h2 class="section-title__text">Ob'ektlar</h2>
                    <div class="section-title__border"></div>
                </div>
                <div class="facilities-items">
                    <div class="row justify-content-center">
                        <div class="col-sm-8 col-md-6 col-lg-5 col-xl-4">
                            <a href="#">
                                <div class="facilities-item">
                                    <img src="./img/facilities/pool1.png" alt="" class="facilities-item__img img-fluid">
                                    <h2 class="facilities-item__title">
                                        Suzish xavzasi
                                    </h2>
                                    <div class="opacity"></div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-8 col-md-6 col-lg-5 col-xl-4 mt-4 mt-md-0">
                            <a href="#">
                                <div class="facilities-item">
                                    <img src="./img/facilities/bar1.png" alt="" class="facilities-item__img img-fluid">
                                    <h2 class="facilities-item__title">
                                        Bar
                                    </h2>
                                    <div class="opacity"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-sm-8 col-md-6 col-lg-5 col-xl-4 mt-4">
                            <a href="#">
                                <div class="facilities-item">
                                    <img src="./img/facilities/gym1.png" alt="" class="facilities-item__img img-fluid">
                                    <h2 class="facilities-item__title">
                                        Sportzal
                                    </h2>
                                    <div class="opacity"></div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-8 col-md-6 col-lg-5 col-xl-4 mt-4">
                            <a href="#">
                                <div class="facilities-item">
                                    <img src="./img/facilities/billiard1.png" alt="" class="facilities-item__img img-fluid">
                                    <h2 class="facilities-item__title">
                                        Billiard xonasi
                                    </h2>
                                    <div class="opacity"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-sm-8 col-md-6 col-lg-5 col-xl-4 mt-4">
                            <a href="#">
                                <div class="facilities-item">
                                    <img src="./img/facilities/restaurant1.png" alt="" class="facilities-item__img img-fluid">
                                    <h2 class="facilities-item__title">
                                        Restoran
                                    </h2>
                                    <div class="opacity"></div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-8 col-md-6 col-lg-5 col-xl-4 mt-4">
                            <a href="#">
                                <div class="facilities-item">
                                    <img src="./img/facilities/conference1.png" alt="" class="facilities-item__img img-fluid">
                                    <h2 class="facilities-item__title">
                                        Konferents-zallar
                                    </h2>
                                    <div class="opacity"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row mx-auto">
                    <div class="col text-center">
                        <a class="my-4 text-center" href="#">
                            <button class="button btn-warning">Ko'proq</button>
                        </a>
                    </div>
                </div>
                
            </div>
        </section>
        <!-- /Facilities section -->
        <!-- Review section -->
        <section id="review">
            <div class="container my-5">
                <div class="section-title my-5">
                    <h2 class="section-title__text">Bizning mehmonlarimizning sharhlari</h2>
                    <div class="section-title__border"></div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="review-card p-4">
                            <div class="review-card-user d-flex align-items-center">
                                <img src="./img/user1.png" alt="Review item" class="review-card-user__photo">
                                <div class="review-card-user__name ms-2">
                                    <h3 class="review-name">Svetlana O.</h3>
                                    <img src="./img/rate-stars.svg" alt="rate" class="review-stars">
                                </div>
                            </div>
                            <p class="review-comment section-text mt-4">
                                Ajoyib imkoniyatlar va yaxshi nonushta bilan ajoyib mehmonxona
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-6 mt-4 mt-sm-0">
                        <div class="review-card p-4">
                            <div class="review-card-user d-flex align-items-center">
                                <img src="./img/user2.png" alt="Review item" class="review-card-user__photo">
                                <div class="review-card-user__name ms-2">
                                    <h3 class="review-name">Kiril K.</h3>
                                    <img src="./img/rate-stars.svg" alt="rate" class="review-stars">
                                </div>
                            </div>
                            <p class="review-comment section-text mt-4">
                                Ajoyib mehmonxona. Juda muloyim xodimlar. Yangi raqamlar
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-6 mt-4">
                        <div class="review-card p-4">
                            <div class="review-card-user d-flex align-items-center">
                                <img src="./img/user3.png" alt="Review item" class="review-card-user__photo">
                                <div class="review-card-user__name ms-2">
                                    <h3 class="review-name">Vadim K.</h3>
                                    <img src="./img/rate-stars.svg" alt="rate" class="review-stars">
                                </div>
                            </div>
                            <p class="review-comment section-text mt-4">
                                Ajoyib mehmonxona! Tavsiya eting! Yaxshi darajali,
                                xushmuomala xodimlar. Va bu yangi mehmonxona, bu muhim
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-6 mt-4">
                        <div class="review-card p-4">
                            <div class="review-card-user d-flex align-items-center">
                                <img src="./img/user4.png" alt="Review item" class="review-card-user__photo">
                                <div class="review-card-user__name ms-2">
                                    <h3 class="review-name">Stanislav R.</h3>
                                    <img src="./img/rate-stars.svg" alt="rate" class="review-stars">
                                </div>
                            </div>
                            <p class="review-comment section-text mt-4">
                                Yaxshi! Chiroyli joy! Do'stona va tezkor xizmat!
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-6 mt-4">
                        <div class="review-card p-4">
                            <div class="review-card-user d-flex align-items-center">
                                <img src="./img/user5.png" alt="Review item" class="review-card-user__photo">
                                <div class="review-card-user__name ms-2">
                                    <h3 class="review-name">Danil.</h3>
                                    <img src="./img/rate-stars.svg" alt="rate" class="review-stars">
                                </div>
                            </div>
                            <p class="review-comment section-text mt-4">
                                Yangi mehmonxona, tozalik, qulaylik, yordamchi xodimlar
                                - hammasi zo'r! Siz mehmonxonaga ishonch bilan 4 yulduzni
                                berishingiz mumkin
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Review section -->
        <!-- Map section -->
        <section id="map">
            <div class="container y">
                <div class="map-container">
                    <iframe width="100%" height="400" allowfullscreen="allowfullscreen" loading="lazy" class="shadow border lazyLoad isLoaded" style="border:0" data-v-db9ba75a="" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2995.799345849854!2d69.28380981495592!3d41.334976407206355!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38ae8bf49b954dd3%3A0x8b6b32b227cbe29e!2sNavruz%20Hotel%20Tashkent!5e0!3m2!1suz!2spl!4v1633181354135!5m2!1suz!2spl"></iframe>
                </div>
            </div>
        </section>
        <!-- /Map section -->
        <!-- Footer section -->
        <footer id="footer">
            <div class="container">
                <div class="row align-items-start">
                    <div class="col-5 col-md-3">
                        <ul class="footer-items">
                            <li class="footer-item first-item"><a class="footer-item__link" href="#">Bosh sahifa</a></li>
                            <li class="footer-item"><a class="footer-item__link" href="#">Bron qilish</a></li>
                            <li class="footer-item"><a class="footer-item__link" href="#">Biz haqimizda</a></li>
                            <li class="footer-item"><a class="footer-item__link" href="#">Xonalar</a></li>
                            <li class="footer-item"><a class="footer-item__link" href="#">Ob'ektlar</a></li>
                            <li class="footer-item"><a class="footer-item__link" href="#">Yangiliklar</a></li>
                            <li class="footer-item"><a class="footer-item__link" href="#">Kontaktlar</a></li>
                            <li class="footer-item dropdown">
                                <a class="dropdown-toggle fw-semibold" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <img class="flag" src="./img/flags/uz.svg" alt="RU">
                                </a>
                                <ul class="dropdown-menu text-center">
                                    <li class="fw-semibold"><img class="flag" src="./img/flags/ru.svg" alt="RU">RU</li>
                                    <li class="fw-semibold"><img class="flag" src="./img/flags/uz.svg" alt="UZ">UZ</li>
                                    <li class="fw-semibold"><img class="flag" src="./img/flags/en.svg" alt="EN">EN</li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="col-5 col-md-3">
                        <ul class="footer-items">
                            <h3 class="footer-title">Ijtimoiy tarmoq</h3>
                            <li class="footer-item"><a class="footer-item__link" href="#">Facebook</a></li>
                            <li class="footer-item"><a class="footer-item__link" href="#">Instagram</a></li>
                            <li class="footer-item"><a class="footer-item__link" href="#">Telegram</a></li>
                        </ul>
                    </div>
                    <div class="col-12 col-md-3 mt-4 mt-md-0">
                        <ul class="footer-items">
                            <h3 class="footer-title">Bizning manzil</h3>
                            <li class="footer-item">O???zbekiston, Toshkent sh., Mirzo-Ulug???bek tumani, ko???ch. Ne???mat, 4.</li>
                            <li class="footer-item">Aloqa raqamlari: (998 55) 501-7000, 502-0808,</li>
                            <li class="footer-item">
                                Elektron pochta manzillari: <br>
                                info@navruzhotel.uz <br>
                                reservation@navruzhotel.uz <br>
                                sales@navruzhotel.uz <br>
                                fnb@navruzhotel.uz
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <!-- /Footer section -->

        <!-- JS files link -->
        <script src="./JS/script.js"></script>
        <script src="./JS/request.js"></script>
        <!-- Bootstrap JS link -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<!--        <script src="plugins/bootstrap/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>-->
    </body>
</html>