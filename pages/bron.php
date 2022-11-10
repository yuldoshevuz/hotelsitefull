<section id="booking-rooms" class="booking-rooms">
    <div class="container">
        <div class="wrapper">
            <div class="row">
                <div class="col-12">
                    <h2 class="booking-rooms-wrapper__title mb-3">
                        Xonalarni band qilish
                    </h2>
                </div>
            </div>
            <form class="booking-wrapper-container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="bron-input">
                            <label for="arrive">Kelish sanasi</label>
                            <input id="arrive" type="date" class="form-control fw-semibold">
                            <i class="fa-sharp fa-solid fa-calendar-days"></i>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 mt-3 mt-sm-0">
                        <div class="bron-input">
                            <label for="departure">Jo'nash sanasi</label>
                            <input id="departure" type="date" class="form-control fw-semibold">
                            <i class="fa-sharp fa-solid fa-calendar-days"></i>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 mt-3 mt-md-0">
                        <div class="bron-input btn-guests">
                            <label class="guests" for="guests">Mehmonlar soni</label>
                            <div class="bron-input-content text-dark fw-semibold">
                                1 kattalar, 0 bolalar
                            </div>
                            <i class="fa-solid fa-user user-icon"></i>
                        </div>
                        <div class="bron-dropdown-wrapper mt-3 p-4 d-none">
                            <div class="row">
                                <div class="col-12">
                                    <h4 class="bron-dropdown__title">Mehmonlar soni</h4>
                                </div>
                                <div class="col-12">
                                    <div class="tag-line"></div>
                                </div>
                                <div class="col-12">
                                    <form class="form-bron" id="bron-form">
                                        <div class="row dropdown-wrapper__rooms">
                                            <div class="dropdown-wrapper__room col-12">
                                                <div class="row">
                                                    <div class="col-12 mt-3">
                                                        <h5 class="bron-dropdown__subtitle text-uppercase my-0">Xona 1</h5>
                                                    </div>
                                                    <div class="col-6 my-2">
                                                        <h5 class="bron-category my-0">Kattalar</h5>
                                                    </div>
                                                    <div class="col-6 my-2">
                                                        <h5 class="bron-category my-0">
                                                            3 yoshdan kichik bolalar
                                                        </h5>
                                                    </div>
                                                    <div class="col-6">
                                                        <input type="number" class="form-control bron-value" placeholder="Kattalar soni">
                                                    </div>
                                                    <div class="col-6">
                                                        <input type="number" class="form-control bron-value" placeholder="Bolalar soni">
                                                    </div>
                                                    <div class="col-12 mt-4">
                                                        <div class="tag-line"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-8 mt-4">
                                    <button class="button btn-white add=more-room p-1">
                                        <i class="fa-sharp fa-solid fa-plus"></i>
                                        Yana xona qo'shish
                                    </button>
                                </div>
                                <div class="col-4 mt-4">
                                    <button class="button btn-brown done">Tayyor</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-12 col-lg-3 mt-3 mt-lg-0">
                        <button class="button btn-brown border border-radius-0 py-1rem">Xonani topmoq</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>