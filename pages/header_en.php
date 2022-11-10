<header id="header">
            <nav class="nav" id="nav">
                <div class="container">
                    <ul class="nav-items d-flex flex-column flex-md-row justify-content-md-between align-items-center">
                        <li class="nav-item mt-4 mt-md-0"><a href="./" class="nav-item__link active">Bosh sahifa</a></li>
                        <li class="nav-item mt-4 mt-md-0"><a href="./booking/" class="nav-item__link">Bron qilish</a></li>
                        <li class="nav-item mt-4 mt-md-0"><a href="./about/" class="nav-item__link">Biz haqimizda</a></li>
                        <li class="nav-item mt-4 mt-md-0"><a href="./rooms/" class="nav-item__link">Xonalar</a></li>
                        <li class="nav-item mt-4 mt-md-0"><a href="./facilities/" class="nav-item__link">Ob'ektlar</a></li>
                        <li class="nav-item mt-4 mt-md-0"><a href="./news/" class="nav-item__link">Yangiliklar</a></li>
                        <li class="nav-item mt-4 mt-md-0"><a href="./contacts/" class="nav-item__link">Kontaktlar</a></li>
                        <li class="nav-item dropdown">
                            <a class="dropdown-toggle fw-semibold" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img class="flag" src="./img/flags/<?php echo $_SESSION["lang"] ?>.svg" alt="<?php echo $_SESSION["lang"] ?>">
                            </a>
                            <ul class="dropdown-menu text-center">
                                <li class="fw-semibold"><a href="ru.html"><img class="flag" src="./img/flags/ru.svg" alt="RU">RU</a></li>
                                <li class="fw-semibold"><a href="uz.html"><img class="flag" src="./img/flags/uz.svg" alt="UZ">UZ</a></li>
                                <li class="fw-semibold"><a href="en.html"><img class="flag" src="./img/flags/en.svg" alt="EN">EN</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- Nav Mobile -->
            <nav class="nav-mobile d-none d-md-none" id="nav-mobile">
                <div class="container">
                    <ul class="nav-mobile-items">
                        <li class="nav-mobile-item text-center"><a href="./" class="nav-item__link active">Bosh sahifa</a></li>
                        <li class="nav-mobile-item text-center"><a href="./booking/" class="nav-item__link">Bron qilish</a></li>
                        <li class="nav-mobile-item text-center"><a href="./about/" class="nav-item__link">Biz haqimizda</a></li>
                        <li class="nav-mobile-item text-center"><a href="../rooms/" class="nav-item__link">Xonalar</a></li>
                        <li class="nav-mobile-item text-center"><a href="../facilities/" class="nav-item__link">Ob'ektlar</a></li>
                        <li class="nav-mobile-item text-center"><a href="../news/" class="nav-item__link">Yangiliklar</a></li>
                        <li class="nav-mobile-item text-center"><a href="../contacts" class="nav-item__link">Kontaktlar</a></li>
                    </ul>
                </div>
            </nav>
            <div class="header-info">
                <div class="container">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-6">
                            <a class="header-info__link" href="./">
                                <img class="img-fluid" src="./img/logo100.png" alt="Logo">
                            </a>
                        </div>
                        <div class="col-6 d-flex justify-content-end">
                            <h3 class="header-info__text text-end">
                                <a href="tel:+998971234567">
                                    +998 75 123 45 67
                                </a>
                            </h3>
                            <li class="nav-mobile-item dropdown d-md-none">
                                <a class="dropdown-toggle fw-semibold" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <img class="flag" src="./img/flags/uz.svg" alt="RU">
                                </a>
                                <ul class="dropdown-menu text-center">
                                    <li class="fw-semibold"><a href="ru.html"><img class="flag" src="./img/flags/ru.svg" alt="RU">RU</a></li>
                                    <li class="fw-semibold"><a href="uz.html"><img class="flag" src="./img/flags/uz.svg" alt="UZ">UZ</a></li>
                                    <li class="fw-semibold"><a href="en.html"><img class="flag" src="./img/flags/en.svg" alt="EN">EN</a></li>
                                </ul>
                            </li>
                            <button class="toggle-menu showing text-end" id="toggle-menu">
                                <i class="fa-sharp fa-solid fa-bars"></i>
                            </button>
                            <button class="toggle-menu hidden text-end d-none" id="x-menu">
                                <i class="fa-sharp fa-solid fa-xmark"></i>
                            </button>
                        </div>
                        
                    </div>
                </div>    
            </div>
        </header>