<?php
include "head.php";
?>
<body>
<!-- Header section -->
<?php
include "header_uz.php";
?>
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
                        <button class="button btn-brown mt-4">Jo'natish</button>
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
                <img src="./img/IMG_3187.jpg" alt="About us image" class="about-us__img img-fluid">
            </div>
            <div class="col-md-6 col-xl-7">
                <h2 class="text-brown">Marmaris Hotel SPA</h2>
                <p class="section-text about-us-text my-5">
                    Zamonaviy va shinam Marmaris mehmonxonasi Toshkentning markazida joylashgan bo'lib, mehmonxonamiz biznes safarlari va dam olish uchun mo'ljallangan.
                </p>
                <p class="section-text about-us-text my-5">
                    Marmaris mehmonxonasida zamonaviy texnikalar bilan jihozlangan turli toifadagi 55 ta xona mavjud. Har bir xonada zamonaviy mebel, mini muzlatgich, konditsioner, smart televizor, WI-FI va mini bar mavjud.
                </p>
                <p class="section-text about-us-text my-5">
                    Mehmonxona mehmonlari uchun anjumanlar zali, bar, restoran, fitness zali, basseyn, sauna va shinam hovli mavjud.
                </p>
                <a class="abouts-us__link section-text text-brown fw-semibold" href="about.html">
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
                        Fitnes
                    </h4>
                </div>
                <div class="col-md-6 col-lg-3 py-3 py-lg-0">
                    <img class="amenities-img" src="./img/about-us-2.svg" alt="amenities img">
                    <h4 class="amenities-title">
                        Baseyn
                    </h4>
                </div>
                <div class="col-md-6 col-lg-3 py-3 py-lg-0">
                    <img class="amenities-img" src="./img/about-us-3.svg" alt="amenities img">
                    <h4 class="amenities-title">
                        Sauna
                    </h4>
                </div>
                <div class="col-md-6 col-lg-3 py-3 py-lg-0">
                    <img class="amenities-img" src="./img/about-us-4.svg" alt="amenities img">
                    <h4 class="amenities-title">
                        Avtoturargoh
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
                <div class="col-4 col-sm-3 col-md-2 col-lg-3">
                    <a href="#">
                        <div class="card">
                            <div class="card-head">
                                <img src="./rooms/standart/IMG_E2619.jpg" class="card-img-top img-fluid" alt="room image">
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
                                <img src="./rooms/deluxe/IMG_E2663.jpg" class="card-img-top img-fluid" alt="room image">
                                <div class="opacity"></div>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title text-brown">Deluxe Twin</h5>
                                <div class="card-border"></div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-8 col-sm-6 col-md-4 col-lg-3 mt-4 mt-md-0">
                    <a href="#">
                        <div class="card">
                            <div class="card-head">
                                <img src="./rooms/lux/IMG_E2849.jpg" class="card-img-top img-fluid" alt="room image">
                                <div class="opacity"></div>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title text-brown">Lux Twin</h5>
                                <div class="card-border"></div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-8 col-sm-6 col-md-4 col-lg-3 mt-4 mt-lg-0">
                    <a href="#">
                        <div class="card">
                            <div class="card-head">
                                <img src="./rooms/family/IMG_E2870.jpg" class="card-img-top img-fluid" alt="room image">
                                <div class="opacity"></div>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title text-brown">Family Room</h5>
                                <div class="card-border"></div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-8 col-sm-6 col-md-4 col-lg-3 mt-4">
                    <a href="#">
                        <div class="card">
                            <div class="card-head">
                                <img src="./rooms/apartment/IMG_E3015.jpg" class="card-img-top img-fluid" alt="room image">
                                <div class="opacity"></div>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title text-brown">Apartment</h5>
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
    <!--            <div class="container">-->
    <!--                <div class="section-title my-5">-->
    <!--                    <h2 class="section-title__text">Ob'ektlar</h2>-->
    <!--                    <div class="section-title__border"></div>-->
    <!--                </div>-->
    <!--                <div class="facilities-items">-->
    <!--                    <div class="row justify-content-center">-->
    <!--                        <div class="col-sm-8 col-md-6 col-lg-5 col-xl-4">-->
    <!--                            <a href="#">-->
    <!--                                <div class="facilities-item">-->
    <!--                                    <img src="./img/facilities/pool1.png" alt="" class="facilities-item__img img-fluid">-->
    <!--                                    <h2 class="facilities-item__title">-->
    <!--                                        Suzish xavzasi-->
    <!--                                    </h2>-->
    <!--                                    <div class="opacity"></div>-->
    <!--                                </div>-->
    <!--                            </a>-->
    <!--                        </div>-->
    <!--                        <div class="col-sm-8 col-md-6 col-lg-5 col-xl-4 mt-4 mt-md-0">-->
    <!--                            <a href="#">-->
    <!--                                <div class="facilities-item">-->
    <!--                                    <img src="./img/facilities/bar1.png" alt="" class="facilities-item__img img-fluid">-->
    <!--                                    <h2 class="facilities-item__title">-->
    <!--                                        Bar-->
    <!--                                    </h2>-->
    <!--                                    <div class="opacity"></div>-->
    <!--                                </div>-->
    <!--                            </a>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                    <div class="row justify-content-center">-->
    <!--                        <div class="col-sm-8 col-md-6 col-lg-5 col-xl-4 mt-4">-->
    <!--                            <a href="#">-->
    <!--                                <div class="facilities-item">-->
    <!--                                    <img src="./img/facilities/gym1.png" alt="" class="facilities-item__img img-fluid">-->
    <!--                                    <h2 class="facilities-item__title">-->
    <!--                                        Sportzal-->
    <!--                                    </h2>-->
    <!--                                    <div class="opacity"></div>-->
    <!--                                </div>-->
    <!--                            </a>-->
    <!--                        </div>-->
    <!--                        <div class="col-sm-8 col-md-6 col-lg-5 col-xl-4 mt-4">-->
    <!--                            <a href="#">-->
    <!--                                <div class="facilities-item">-->
    <!--                                    <img src="./img/facilities/billiard1.png" alt="" class="facilities-item__img img-fluid">-->
    <!--                                    <h2 class="facilities-item__title">-->
    <!--                                        Billiard xonasi-->
    <!--                                    </h2>-->
    <!--                                    <div class="opacity"></div>-->
    <!--                                </div>-->
    <!--                            </a>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                    <div class="row justify-content-center">-->
    <!--                        <div class="col-sm-8 col-md-6 col-lg-5 col-xl-4 mt-4">-->
    <!--                            <a href="#">-->
    <!--                                <div class="facilities-item">-->
    <!--                                    <img src="./img/facilities/restaurant1.png" alt="" class="facilities-item__img img-fluid">-->
    <!--                                    <h2 class="facilities-item__title">-->
    <!--                                        Restoran-->
    <!--                                    </h2>-->
    <!--                                    <div class="opacity"></div>-->
    <!--                                </div>-->
    <!--                            </a>-->
    <!--                        </div>-->
    <!--                        <div class="col-sm-8 col-md-6 col-lg-5 col-xl-4 mt-4">-->
    <!--                            <a href="#">-->
    <!--                                <div class="facilities-item">-->
    <!--                                    <img src="./img/facilities/conference1.png" alt="" class="facilities-item__img img-fluid">-->
    <!--                                    <h2 class="facilities-item__title">-->
    <!--                                        Konferents-zallar-->
    <!--                                    </h2>-->
    <!--                                    <div class="opacity"></div>-->
    <!--                                </div>-->
    <!--                            </a>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--                <div class="row mx-auto">-->
    <!--                    <div class="col text-center">-->
    <!--                        <a class="my-4 text-center" href="#">-->
    <!--                            <button class="button btn-warning">Ko'proq</button>-->
    <!--                        </a>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--                -->
    <!--            </div>-->
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
<?php
include "map.php";
?>
<!-- /Map section -->
<!-- Footer section -->
<?php
include "footer_uz.php";
?>
<!-- /Footer section -->

</body>
</html>