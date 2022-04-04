@extends('layouts.main')

@section('container')

{{-- first section --}}
<section style="padding-top: 7rem;">
    <div class="bg-holder">
    </div>

    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-5 col-lg-6 order-0 order-md-1 text-end"><img
                    class="pt-7 pt-md-0 hero-img"
                    src="assets/img/hero/hero-img.png" alt="hero-header" />
            </div>
            <div class="col-md-7 col-lg-6 text-md-start text-center py-6">
                <h4 class="fw-bold text-danger mb-3">Best Destinations
                    around
                    the world</h4>
                <h1 class="hero-title">Travel, enjoy and live a new and full
                    life</h1>
                <p class="mb-4 fw-medium">Built Wicket longer admire do
                    barton
                    vanity itself do in it.<br
                        class="d-none d-xl-block" />Preferred to sportsmen
                    it
                    engrossed listening. Park gate<br
                        class="d-none d-xl-block" />sell they west hard for
                    the.
                </p>
                <div class="text-center text-md-start"> <a
                        class="btn btn-info btn-lg me-md-4 mb-3 mb-md-0 border-0 primary-btn-shadow"
                        href="#!" role="button">Find out more</a>
                    <div class="w-100 d-block d-md-none"></div><a href="#!"
                        role="button" data-bs-toggle="modal"
                        data-bs-target="#popupVideo"><span
                            class="btn btn-danger round-btn-lg rounded-circle me-3 danger-btn-shadow">
                            <img src="assets/img/hero/play.svg" width="15"
                                alt="paly" /></span></a><span
                        class="fw-medium">Play Demo</span>
                    <div class="modal fade" id="popupVideo" tabindex="-1"
                        aria-labelledby="popupVideo" aria-hidden="true">
                        <div
                            class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content">
                                <iframe class="rounded"
                                    style="width:100%;max-height:500px;"
                                    height="500px"
                                    src="https://www.youtube.com/embed/aKtb7Y3qOck?t=37"
                                    title="YouTube video player"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen="allowfullscreen"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- first section --}}


    <!-- <section> begin ============================-->
        <section class="pt-5 pt-md-9" id="service">

            <div class="container">
                <div class="position-absolute z-index--1 end-0 d-none d-lg-block">
                    <img src="assets/img/category/shape.svg"
                        style="max-width: 200px" alt="service" />
                </div>
                <div class="mb-7 text-center">
                    <h5 class="text-secondary">CATEGORY </h5>
                    <h3
                        class="fs-xl-10 fs-lg-8 fs-7 fw-bold font-cursive text-capitalize">
                        We Offer Best Services</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6 mb-6">
                        <div
                            class="card service-card shadow-hover rounded-3 text-center align-items-center">
                            <div class="card-body p-xxl-5 p-4"> <img
                                    src="assets/img/category/icon2.png" width="75"
                                    alt="Service" />
                                <h4 class="mb-3">Best Flights</h4>
                                <p class="mb-0 fw-medium">Engrossed listening. Park
                                    gate sell
                                    they west hard for the.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-6">
                        <div
                            class="card service-card shadow-hover rounded-3 text-center align-items-center">
                            <div class="card-body p-xxl-5 p-4"> <img
                                    src="assets/img/category/icon3.png" width="75"
                                    alt="Service" />
                                <h4 class="mb-3">Local Events</h4>
                                <p class="mb-0 fw-medium">Barton vanity itself do in
                                    it. Preferd
                                    to men it engrossed listening.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-6">
                        <div
                            class="card service-card shadow-hover rounded-3 text-center align-items-center">
                            <div class="card-body p-xxl-5 p-4"> <img
                                    src="assets/img/category/icon4.png" width="75"
                                    alt="Service" />
                                <h4 class="mb-3">Customization</h4>
                                <p class="mb-0 fw-medium">We deliver outsourced
                                    aviation
                                    services for military customers</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- end of .container-->

            <!-- <section> begin ============================-->
            <section class="pt-5" id="destination">
                <div class="container">
                    <div
                        class="position-absolute start-100 bottom-0 translate-middle-x d-none d-xl-block ms-xl-n4">
                        <img src="assets/img/dest/shape.svg" alt="destination" />
                    </div>
                    <div class="mb-7 text-center">
                        <h5 class="text-secondary">Top Selling </h5>
                        <h3
                            class="fs-xl-10 fs-lg-8 fs-7 fw-bold font-cursive text-capitalize">
                            Top Destinations</h3>
                    </div>
                    <div class="row">
                        <div class="col-md-3 mb-3">
                            <div class="card overflow-hidden shadow"> <img
                                    class="card-img-top"
                                    src="assets/img/dest/komodo.jpg"
                                    alt="Rome, Italty" />
                                <div class="card-body py-4 px-3">
                                    <div
                                        class="d-flex flex-column flex-lg-row justify-content-between mb-3">
                                        <h4 class="text-secondary fw-medium"><a
                                                class="link-900 text-decoration-none stretched-link"
                                                href="#!">Kuta Beach</a></h4>
                                        <span class="fs-1 fw-medium">IDR
                                            10.000</span>
                                    </div>
                                    <div class="d-flex align-items-center"> <img
                                            src="assets/img/dest/star.png"
                                            style="margin-right: 14px" width="20"
                                            alt="navigation" /><span
                                            class="fs-0 fw-medium">4.5/5</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <div class="card overflow-hidden shadow"> <img
                                    class="card-img-top"
                                    src="assets/img/dest/komodo.jpg"
                                    alt="London, UK" />
                                <div class="card-body py-4 px-3">
                                    <div
                                        class="d-flex flex-column flex-lg-row justify-content-between mb-3">
                                        <h4 class="text-secondary fw-medium"><a
                                                class="link-900 text-decoration-none stretched-link"
                                                href="#!">Komodo island</a>
                                        </h4><span class="fs-1 fw-medium">IDR
                                            10.000</span>
                                    </div>
                                    <div class="d-flex align-items-center"> <img
                                            src="assets/img/dest/star.png"
                                            style="margin-right: 14px" width="20"
                                            alt="navigation" /><span
                                            class="fs-0 fw-medium">4.5/5
                                        </span></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <div class="card overflow-hidden shadow"> <img
                                    class="card-img-top"
                                    src="assets/img/dest/komodo.jpg"
                                    alt="Full Europe" />
                                <div class="card-body py-4 px-3">
                                    <div
                                        class="d-flex flex-column flex-lg-row justify-content-between mb-3">
                                        <h4 class="text-secondary fw-medium"><a
                                                class="link-900 text-decoration-none stretched-link"
                                                href="#!">Monas</a></h4>
                                        <span class="fs-1 fw-medium">IDR
                                            10.000</span>
                                    </div>
                                    <div class="d-flex align-items-center"> <img
                                            src="assets/img/dest/star.png"
                                            style="margin-right: 14px" width="20"
                                            alt="navigation" /><span
                                            class="fs-0 fw-medium">4.5/5
                                        </span></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <div class="card overflow-hidden shadow"> <img
                                    class="card-img-top"
                                    src="assets/img/dest/komodo.jpg"
                                    alt="Full Europe" />
                                <div class="card-body py-4 px-3">
                                    <div
                                        class="d-flex flex-column flex-lg-row justify-content-between mb-3">
                                        <h4 class="text-secondary fw-medium"><a
                                                class="link-900 text-decoration-none stretched-link"
                                                href="#!">Gunung Semeru</a></h4>
                                        <span class="fs-1 fw-medium">IDR
                                            10.000</span>
                                    </div>
                                    <div class="d-flex align-items-center"> <img
                                            src="assets/img/dest/star.png"
                                            style="margin-right: 14px" width="20"
                                            alt="navigation" /><span
                                            class="fs-0 fw-medium">4.5/5
                                        </span></div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div><!-- end of .container-->

                <!-- <section> begin ============================-->
                <section class="pt-5" id="package">
                    <div class="container">
                        <div
                            class="position-absolute start-100 bottom-0 translate-middle-x d-none d-xl-block ms-xl-n4">
                            <img src="assets/img/dest/shape.svg" alt="package" />
                        </div>
                        <div class="mb-7 text-center">
                            <h5 class="text-secondary">Top Selling </h5>
                            <h3
                                class="fs-xl-10 fs-lg-8 fs-7 fw-bold font-cursive text-capitalize">
                                Top Package</h3>
                        </div>
                        <div class="row">
                            <div class="col-md-3 mb-3">
                                <div class="card overflow-hidden shadow"> <img
                                        class="card-img-top"
                                        src="assets/img/dest/balipackage.jpg"
                                        alt="Rome, Italty" />
                                    <div class="card-body py-4 px-3">
                                        <div
                                            class="d-flex flex-column flex-lg-row justify-content-between mb-3">
                                            <h4 class="text-secondary fw-medium"><a
                                                    class="link-900 text-decoration-none stretched-link"
                                                    href="#!">Trip Bali</a></h4>
                                            <span class="fs-1 fw-medium">IDR
                                                10.000</span>
                                        </div>
                                        <div class="d-flex align-items-center"> <img
                                                src="assets/img/dest/star.png"
                                                style="margin-right: 14px"
                                                width="20" alt="navigation" /><span
                                                class="fs-0 fw-medium">4.5/5</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <div class="card overflow-hidden shadow"> <img
                                        class="card-img-top"
                                        src="assets/img/dest/balipackage.jpg"
                                        alt="London, UK" />
                                    <div class="card-body py-4 px-3">
                                        <div
                                            class="d-flex flex-column flex-lg-row justify-content-between mb-3">
                                            <h4 class="text-secondary fw-medium"><a
                                                    class="link-900 text-decoration-none stretched-link"
                                                    href="#!">Trip Malang</a>
                                            </h4><span class="fs-1 fw-medium">IDR
                                                10.000</span>
                                        </div>
                                        <div class="d-flex align-items-center"> <img
                                                src="assets/img/dest/star.png"
                                                style="margin-right: 14px"
                                                width="20" alt="navigation" /><span
                                                class="fs-0 fw-medium">4.5/5
                                            </span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <div class="card overflow-hidden shadow"> <img
                                        class="card-img-top"
                                        src="assets/img/dest/balipackage.jpg"
                                        alt="Full Europe" />
                                    <div class="card-body py-4 px-3">
                                        <div
                                            class="d-flex flex-column flex-lg-row justify-content-between mb-3">
                                            <h4 class="text-secondary fw-medium"><a
                                                    class="link-900 text-decoration-none stretched-link"
                                                    href="#!">Trip Jakarta</a></h4>
                                            <span class="fs-1 fw-medium">IDR
                                                10.000</span>
                                        </div>
                                        <div class="d-flex align-items-center"> <img
                                                src="assets/img/dest/star.png"
                                                style="margin-right: 14px"
                                                width="20" alt="navigation" /><span
                                                class="fs-0 fw-medium">4.5/5
                                            </span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <div class="card overflow-hidden shadow"> <img
                                        class="card-img-top"
                                        src="assets/img/dest/balipackage.jpg"
                                        alt="Full Europe" />
                                    <div class="card-body py-4 px-3">
                                        <div
                                            class="d-flex flex-column flex-lg-row justify-content-between mb-3">
                                            <h4 class="text-secondary fw-medium"><a
                                                    class="link-900 text-decoration-none stretched-link"
                                                    href="#!">Trip Bandung</a></h4>
                                            <span class="fs-1 fw-medium">IDR
                                                10.000</span>
                                        </div>
                                        <div class="d-flex align-items-center"> <img
                                                src="assets/img/dest/star.png"
                                                style="margin-right: 14px"
                                                width="20" alt="navigation" /><span
                                                class="fs-0 fw-medium">4.5/5
                                            </span></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div><!-- end of .container-->

                    <!-- <section> begin ============================-->
                    <section id="testimonial">

                        <div class="container">
                            <div class="row">
                                <div class="col-lg-5">
                                    <div class="mb-8 text-start">
                                        <h5 class="text-secondary">Testimonials
                                        </h5>
                                        <h3
                                            class="fs-xl-10 fs-lg-8 fs-7 fw-bold font-cursive text-capitalize">
                                            What people say about Us.</h3>
                                    </div>
                                </div>
                                <div class="col-lg-1"></div>
                                <div class="col-lg-6">
                                    <div class="pe-7 ps-5 ps-lg-0">
                                        <div class="carousel slide carousel-fade position-static"
                                            id="testimonialIndicator"
                                            data-bs-ride="carousel">
                                            <div class="carousel-indicators">
                                                <button class="active" type="button"
                                                    data-bs-target="#testimonialIndicator"
                                                    data-bs-slide-to="0"
                                                    aria-current="true"
                                                    aria-label="Testimonial 0"></button>
                                                <button class="false" type="button"
                                                    data-bs-target="#testimonialIndicator"
                                                    data-bs-slide-to="1"
                                                    aria-current="true"
                                                    aria-label="Testimonial 1"></button>
                                                <button class="false" type="button"
                                                    data-bs-target="#testimonialIndicator"
                                                    data-bs-slide-to="2"
                                                    aria-current="true"
                                                    aria-label="Testimonial 2"></button>
                                            </div>
                                            <div class="carousel-inner">
                                                <div
                                                    class="carousel-item position-relative active">
                                                    <div class="card shadow"
                                                        style="border-radius:10px;">
                                                        <div
                                                            class="position-absolute start-0 top-0 translate-middle">
                                                            <img class="rounded-circle fit-cover"
                                                                src="assets/img/testimonial/author.png"
                                                                height="65"
                                                                width="65" alt="" />
                                                        </div>
                                                        <div class="card-body p-4">
                                                            <p
                                                                class="fw-medium mb-4">
                                                                &quot;On the Windows
                                                                talking
                                                                painted pasture yet
                                                                its express parties
                                                                use. Sure last
                                                                upon he same as knew
                                                                next. Of believed or
                                                                diverted
                                                                no.&quot;</p>
                                                            <h5
                                                                class="text-secondary">
                                                                Mike taylor</h5>
                                                            <p
                                                                class="fw-medium fs--1 mb-0">
                                                                Lahore, Pakistan</p>
                                                        </div>
                                                    </div>
                                                    <div class="card shadow-sm position-absolute top-0 z-index--1 mb-3 w-100 h-100"
                                                        style="border-radius:10px;transform:translate(25px, 25px)">
                                                    </div>
                                                </div>
                                                <div
                                                    class="carousel-item position-relative ">
                                                    <div class="card shadow"
                                                        style="border-radius:10px;">
                                                        <div
                                                            class="position-absolute start-0 top-0 translate-middle">
                                                            <img class="rounded-circle fit-cover"
                                                                src="assets/img/testimonial/author2.png"
                                                                height="65"
                                                                width="65" alt="" />
                                                        </div>
                                                        <div class="card-body p-4">
                                                            <p
                                                                class="fw-medium mb-4">
                                                                &quot;Jadoo is
                                                                recognized as
                                                                one of the finest
                                                                travel agency in the
                                                                world. When it
                                                                came to planning a
                                                                trip, I found them
                                                                to be
                                                                dependable.&quot;
                                                            </p>
                                                            <h5
                                                                class="text-secondary">
                                                                Thomas Wagon</h5>
                                                            <p
                                                                class="fw-medium fs--1 mb-0">
                                                                CEO of Red Button
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="card shadow-sm position-absolute top-0 z-index--1 mb-3 w-100 h-100"
                                                        style="border-radius:10px;transform:translate(25px, 25px)">
                                                    </div>
                                                </div>
                                                <div
                                                    class="carousel-item position-relative ">
                                                    <div class="card shadow"
                                                        style="border-radius:10px;">
                                                        <div
                                                            class="position-absolute start-0 top-0 translate-middle">
                                                            <img class="rounded-circle fit-cover"
                                                                src="assets/img/testimonial/author3.png"
                                                                height="65"
                                                                width="65" alt="" />
                                                        </div>
                                                        <div class="card-body p-4">
                                                            <p
                                                                class="fw-medium mb-4">
                                                                &quot;On the Windows
                                                                talking
                                                                painted pasture yet
                                                                its express parties
                                                                use. Sure last
                                                                upon he same as knew
                                                                next. Of believed or
                                                                diverted
                                                                no.&quot;</p>
                                                            <h5
                                                                class="text-secondary">
                                                                Kelly Willium</h5>
                                                            <p
                                                                class="fw-medium fs--1 mb-0">
                                                                Khulna, Bangladesh
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="card shadow-sm position-absolute top-0 z-index--1 mb-3 w-100 h-100"
                                                        style="border-radius:10px;transform:translate(25px, 25px)">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="carousel-navigation d-flex flex-column flex-between-center position-absolute end-0 top-lg-50 bottom-0 translate-middle-y z-index-1 me-3 me-lg-0"
                                                style="height:60px;width:20px;">
                                                <button
                                                    class="carousel-control-prev position-static"
                                                    type="button"
                                                    data-bs-target="#testimonialIndicator"
                                                    data-bs-slide="prev"><img
                                                        src="assets/img/icons/up.svg"
                                                        width="16"
                                                        alt="icon" /></button>
                                                <button
                                                    class="carousel-control-next position-static"
                                                    type="button"
                                                    data-bs-target="#testimonialIndicator"
                                                    data-bs-slide="next"><img
                                                        src="assets/img/icons/down.svg"
                                                        width="16"
                                                        alt="icon" /></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- end of .container-->

                    </section>
                    <!-- <section> close ============================-->
                    <!-- ============================================-->



@endsection
