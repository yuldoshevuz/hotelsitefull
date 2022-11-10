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
        <main id="main" class="main main-contacts"></main>
        <!-- /Main section -->
        <!-- Contacts section -->
        <section id="contacts">
            <div class="container">
                <div class="section-title d-inline-block my-5">
                    <h2 class="section-title__text">Kontaktlar</h2>
                    <div class="section-title__border"></div>
                </div>
                <p class="section-text">
                    O'zbekiston r, Toshkent shahri, Chilonzor, Gavhar ko’chasi, 164- 165- 166 Uy
                </p>
                <p class="section-text my-4">
                    Tel: <a class="text-brown" href="tel:+998555062424">(+998) 55 506 2424</a>
                    Tel: <a class="text-brown" href="tel:+998555024848">(+998) 55 502 4848</a>
                </p>
                <p class="section-text my-4">
                    <a class="text-brown" href="mailto:marmarishoteluz@gmail.com">marmarishoteluz@gmail.com</a>
                </p>

                <div class="social-items my-4">
                    <a href="https://instagram.com/marmarishotel">
                        <i class="fa-brands fa-instagram">  marmarishotel</i>
                    </a>
                    <a href="https://www.facebook.com/profile.php?id=100073466139225">
                        <i class="fa-brands fa-facebook-f">  marmarishotel</i>
                    </a>
                    <a href="https://t.me/marmarishotel">
                       <i class="fa-brands fa-telegram">  marmarishotel</i>
                    </a>
                </div>
                <button class="mt-1 button btn-brown fw-semibold" data-bs-toggle="modal" data-bs-target="#contactFormModal">Xabar yubormoq</button>
                <!-- Contact form modal -->
                  <div class="modal fade" id="contactFormModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="contactFormModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h1 class="modal-title fs-5 text-uppercase" id="contactFormModalLabel">Xabaringizni qoldiring</h1>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <div class="container-fluid">
                            <form class="form needs-validation" novalidate>
                                <div class="row">
                                    <div class="col-12 mt-3">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="firstName" placeholder="Ismingiz:" required>
                                            <label for="firstName">Ismingiz:</label>
                                            <div class="invalid-feedback">
                                                Iltimos ismingizni kiriting.
                                            </div>
                                            <div class="valid-feedback">
                                                Tayyor.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 mt-3">
                                        <div class="form-floating">
                                            <input type="number" class="form-control" id="phoneNumber" placeholder="Telefon raqamingiz:" required>
                                            <label for="phoneNumber">Telefon raqamingiz:</label>
                                            <div class="invalid-feedback">
                                                Iltimos telefon raqamingizni kiriting.
                                            </div>
                                            <div class="valid-feedback">
                                                Tayyor.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 mt-3">
                                        <div class="form-floating">
                                            <input type="email" class="form-control" id="phoneNumber" placeholder="Elektron pochta:" required>
                                            <label for="phoneNumber">E-pochta manzili:</label>
                                            <div class="invalid-feedback">
                                                Elektron pochtangizni kiriting.
                                            </div>
                                            <div class="valid-feedback">
                                                Tayyor.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 mt-3">
                                        <div class="form-floating">
                                            <textarea class="form-control" placeholder="Xabar yozing:" id="floatingTextarea2" style="height: 100px" required></textarea>
                                            <label for="floatingTextarea2">Xabar yozing:</label>
                                            <div class="invalid-feedback">
                                                Xabar qoldiring.
                                            </div>
                                            <div class="valid-feedback">
                                                Tayyor.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 text-end my-4">
                                        <button type="reset" class="button btn-warning py-3 px-4 me-2">Tozalash</button>
                                        <button type="submit" class="button btn-brown">Yuborish</button>
                                    </div>
                                </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                <!-- /Contact form modal -->
            </div>
        </section>
        <!-- /Contacts section -->
        <!-- Booking rooms  -->
        <?php
        include "bron.php";
        ?>
        <!-- /Booking rooms -->
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
                            <li class="footer-item first-item"><a class="footer-item__link" href="../">Bosh sahifa</a></li>
                            <li class="footer-item"><a class="footer-item__link" href="../booking/">Bron qilish</a></li>
                            <li class="footer-item"><a class="footer-item__link" href="../about/">Biz haqimizda</a></li>
                            <li class="footer-item"><a class="footer-item__link" href="../rooms/">Xonalar</a></li>
                            <li class="footer-item"><a class="footer-item__link" href="../facilities/">Ob'ektlar</a></li>
                            <li class="footer-item"><a class="footer-item__link" href="../news/">Yangiliklar</a></li>
                            <li class="footer-item"><a class="footer-item__link" href="./">Kontaktlar</a></li>
                            <li class="footer-item dropdown">
                                <a class="dropdown-toggle fw-semibold" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <img class="flag" src="../img/flags/uz.svg" alt="RU">
                                </a>
                                <ul class="dropdown-menu text-center">
                                    <li class="fw-semibold"><img class="flag" src="../img/flags/ru.svg" alt="RU">RU</li>
                                    <li class="fw-semibold"><img class="flag" src="../img/flags/uz.svg" alt="UZ">UZ</li>
                                    <li class="fw-semibold"><img class="flag" src="../img/flags/us.svg" alt="EN">EN</li>
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
                            <li class="footer-item">O‘zbekiston, Toshkent sh., Mirzo-Ulug‘bek tumani, ko‘ch. Ne’mat, 4.</li>
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
        <script>
            (() => {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            const forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            Array.from(forms).forEach(form => {
                form.addEventListener('submit', event => {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }

                form.classList.add('was-validated')
                }, false)
            })
            })()
        </script>
        <script src="../JS/script.js"></script>
        <!-- Bootstrap JS link -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </body>
</html>