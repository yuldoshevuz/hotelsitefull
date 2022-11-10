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
<main id="main" class="main booking-main d-flex justify-content-center align-items-md-center"></main>
<!-- /Main section -->
<!-- Booking style -->
<section id="booking">
    <div class="container">
        <h2 class="title-style">Bron qilish</h2>
        <div class="booking-wrapper">
            <h3 class="booking-title mb-5">
                Kelish, jo'nash sanasi va mehmonlar sonini tanlang
            </h3>
            <div class="tag-line"></div>
            <div class="row justify-content-end my-5 mt-5">
                <!-- <div class="col-10 col-sm-6 col-md-4 col-lg-3 col-xl-4 select-bar d-flex justify-content-end align-items-center">
                    <div class="select-btn form-control dropdown bg-white">
                        <a class="dropdown-toggle fw-semibold" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img class="flag" src="../img/flags/uz.svg" alt="RU">
                        </a>
                        <ul class="dropdown-menu">
                            <li class="fw-semibold ps-3"><img class="flag" src="../img/flags/uz.svg" alt="UZ">O'zbek tili</li>
                            <li class="fw-semibold ps-3"><img class="flag" src="../img/flags/us.svg" alt="EN">English</li>
                            <li class="fw-semibold ps-3"><img class="flag" src="../img/flags/ru.svg" alt="RU">Russian</li>
                        </ul>
                    </div>
                    <div class="input-container">
                        <select class="form-select ms-2">
                            <option value="UZS" disabled selected>UZS — O'zbek so'mi</option>
                            <option value="RUB">RUB — Rossiya rubli</option>
                            <option value="USD">USD — AQSH dollari</option>
                            <option value="EUR">EUR — Yevro</option>
                            <option value="GBP">GBP — Funt sterling</option>
                            <option value="AED">AED — Birlashgan Arab Amirliklari dirhami</option>
                            <option value="AMD">AMD — Armaniston drami</option>
                            <option value="AUD">AUD — Avstraliya dollari</option>
                            <option value="AZN">AZN — Ozarbayjon manati</option>
                            <option value="BGN">BGN — Bolgariya levi</option>
                            <option value="BYN">BYN — Belarus rubli</option>
                            <option value="CAD">CAD — Kanada dollari</option>
                            <option value="CHF">CHF — Shveysariya franki</option>
                            <option value="CNY">CNY — Yuan Renminbi</option>
                            <option value="CZK">CZK — Chexiya kroni</option>
                            <option value="DKK">DKK — Daniya kroni</option>
                            <option value="DOP">DOP — Dominika pesosi</option>
                            <option value="GEL">GEL — Gruziya lari</option>
                            <option value="HRK">HRK — Xorvatiya kunasi</option>
                            <option value="HUF">HUF — Vengriya forinti</option>
                            <option value="INR">INR — Hindiston rupiyasi</option>
                            <option value="IDR">IDR — Indoneziya rupiyasi</option>
                            <option value="JOD">JOD — Iordaniya dinori</option>
                            <option value="KES">KES — Keniya shillingi</option>
                            <option value="KGS">KGS — Qirg'iziston so'mi</option>
                            <option value="KZT">KZT — Qozog'iston tengesi</option>
                            <option value="KRW">KRW — Janubiy Koreya voni</option>
                            <option value="MAD">MAD — Marokash dirhami</option>
                            <option value="MDL">MDL — Moldova leyi</option>
                            <option value="ILS">ILS — Isroil shekeli</option>
                            <option value="NOK">NOK — Norvegiya kroni</option>
                            <option value="PHP">PHP — Filippin pesosi</option>
                            <option value="PLN">PLN — Polsha zlotiysi</option>
                            <option value="SAR">SAR — Saudiya riyali</option>
                            <option value="THB">THB — Tailand bati</option>
                            <option value="TJS">TJS — Tojikiston somoni</option>
                            <option value="TND">TND — Tunis dinori</option>
                            <option value="TRY">TRY — Turkiya lirasi</option>
                            <option value="UAH">UAH — Ukraina grivnasi</option>
                            <option value="VND">VND — Vyetnam dongi</option>
                            <option value="MYR">MYR — Malayziya ringgiti</option>
                            <option value="SEK">SEK — Shvetsiya kronasi</option>
                        </select>
                        <span class="down select-item"></span>
                    </div>
                </div> -->
            </div>
            <form class="form">
                <div class="row justify-content-center">
                    <div class="col-sm-12 col-md-10">
                        <div class="booking-content">
                            <div class="room-container row justify-content-between pb-2">
                                <div class="col-sm-6">
                                    <p class="section-text mb-2">Kelish sanasi</p>
                                    <div class="input-container">
                                        <input type="date" class="form-control">
                                        <i class="input-icon calendar-icon fa-sharp fa-solid fa-calendar-days"></i>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <p class="section-text mt-3 mt-sm-0 mb-2">Jo'nash sanasi</p>
                                    <div class="input-container">
                                        <input type="date" class="form-control">
                                        <i class="input-icon calendar-icon fa-sharp fa-solid fa-calendar-days"></i>
                                    </div>
                                </div>
                                <div class="col-12 mt-4">
                                    <p class="section-text mb-2">Xona sig'imi</p>
                                    <p class="form-subtitle mb-3">Kattalar 3 yosh va kattaroq</p>
                                </div>
                                <div class="col-sm-12 col-md-10 mb-2 d-none">
                                    <b class="room-num">Xona 1</b>
                                </div>
                                <div class="col-sm-6">
                                    <div class="input-container">
                                        <select class="form-select add-people" name="add-people">
                                            <option value="1">1 katta</option>
                                            <option value="2" selected>2 kattalar</option>
                                            <option value="3">3 kattalar</option>
                                            <option value="4">4 kattalar</option>
                                            <option value="5">5 kattalar</option>
                                            <option value="6">6 kattalar</option>
                                            <option value="7">7 kattalar</option>
                                            <option value="8">8 kattalar</option>
                                            <option value="9">9 kattalar</option>
                                            <option value="10">10 kattalar</option>
                                        </select>
                                        <span class="down"></span>
                                        <i class="input-icon select-icon fa-solid fa-user"></i>
                                    </div>
                                </div>
                                <div class="col-sm-6 mt-4 mt-sm-0">
                                    <div class="input-container">
                                        <select class="form-select add-children" name="add-children">
                                            <option value="none" disabled selected>Bolalar sonini qo'shish</option>
                                            <option value="none">Yo'q</option>
                                            <option value="0">Yosh bola (1yoshgacha)</option>
                                            <option value="1">Yosh bola 1yosh</option>
                                            <option value="2">Yosh bola 2yosh</option>
                                        </select>
                                        <span class="down"></span>
                                        <i class="input-icon select-icon fa-sharp fa-solid fa-plus"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row booking-menu justify-content-center">
                    <div class="col-sm-10 mt-4">
                        <div class="add-room d-flex justify-content-center justify-content-md-start align-items-center">
                            <p class="add-room-text m-0 me-2">
                                Qo'shimcha <b>yana 1</b> xona kerak
                            </p>
                            <div class="button btn-brown btn-plus text-center">
                                <i class="fa-sharp fa-solid fa-plus"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-10 mt-4">
                        <button type="menu" class="button search btn-brown w-100">QIDIRISH</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

</section>
<!-- /Booking style -->
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