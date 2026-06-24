<!DOCTYPE html>
    <html lang="en" class="home-one">

    <head>
        <?php include 'partials/title-meta.php'; ?>
        
        <?php include 'partials/head-css.php'; ?>
        <style>
            @media (max-width: 991.98px) {
                .about-cards-wrapper {
                    padding-inline-end: 0 !important;
                }
                
                /* About Us container mobile styling improvements */
                .gradient-bg-one.tw-px-36-px {
                    padding-left: 16px !important;
                    padding-right: 16px !important;
                }
                .gradient-bg-one.tw-py-80-px {
                    padding-top: 40px !important;
                    padding-bottom: 40px !important;
                }
                .gradient-bg-one.tw-rounded-50-px {
                    border-radius: 24px !important;
                }
                
                /* About Us card mobile styling improvements */
                .common-shadow-three {
                    padding-left: 20px !important;
                    padding-right: 20px !important;
                    padding-top: 30px !important;
                    padding-bottom: 30px !important;
                    border-radius: 24px !important;
                }
                .common-shadow-three .d-flex.align-items-start {
                    gap: 16px !important;
                }
                .common-shadow-three .tw-w-14 {
                    width: 40px !important;
                    height: 40px !important;
                    flex-shrink: 0 !important;
                }
                .common-shadow-three p {
                    text-align: left !important;
                    margin-left: 0 !important;
                    margin-right: 0 !important;
                    max-width: 100% !important;
                    font-size: 14px !important;
                    line-height: 1.5 !important;
                }
                .common-shadow-three h6 {
                    text-align: left !important;
                    font-size: 16px !important;
                    margin-bottom: 6px !important;
                }
                .common-shadow-three h3 {
                    font-size: 24px !important;
                    line-height: 1.25 !important;
                }
                .common-shadow-three h3 span {
                    display: inline !important;
                }
                
                /* Showcase section mobile styling improvements */
                .show-case {
                    padding-top: 48px !important;
                    padding-bottom: 48px !important;
                }
                .show-case .tw-mb-15 {
                    margin-bottom: 32px !important;
                }
                .show-case-slider {
                    padding-bottom: 36px !important;
                }
                .show-case-slider .group-item h5 a {
                    display: -webkit-box !important;
                    -webkit-line-clamp: 2 !important;
                    -webkit-box-orient: vertical !important;
                    overflow: visible !important;
                    white-space: normal !important;
                    line-height: 1.4 !important;
                    font-size: 18px !important;
                    text-align: center !important;
                }
                .show-case-slider .group-item .tw-mt-8 {
                    margin-top: 16px !important;
                    text-align: center !important;
                }
                .show-case-slider .group-item span {
                    display: block !important;
                    text-align: center !important;
                }
            }

        /* Stacked Cards Section */
        .stacked-section {
            padding: 100px 0;
            background: #fff;
            position: relative;
        }
        .stacked-heading-wrapper {
            text-align: center;
            margin-bottom: 80px;
            position: relative;
        }
        .stacked-badge {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 15px;
        }
        .stacked-badge::before, .stacked-badge::after {
            content: '';
            width: 30px;
            height: 1px;
            background: #000;
        }
        .stacked-badge span {
            border: 1px solid #000;
            padding: 5px 15px;
            font-weight: 600;
            font-size: 14px;
        }
        .stacked-ghost-text {
            font-size: clamp(3rem, 8vw, 6rem);
            font-weight: 900;
            color: rgba(0,0,0,0.04);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -60%);
            white-space: nowrap;
            z-index: 0;
        }
        .stacked-main-heading {
            position: relative;
            z-index: 1;
            font-size: clamp(2rem, 4vw, 3.5rem);
            font-weight: 900;
            color: #000;
            letter-spacing: -0.02em;
        }
        .stacked-main-heading .text-yellow {
            color: #facc15;
            text-shadow: 1px 1px 0 rgba(0,0,0,0.1);
        }
        .stacked-subheading {
            max-width: 900px;
            margin: 20px auto 0;
            color: #4a4a4a;
            font-size: 1.1rem;
            line-height: 1.6;
        }

        .sticky-cards-container {
            position: relative;
            padding-bottom: 50px;
        }
        .sticky-card {
            position: sticky;
            background: #250b46;
            border-radius: 24px;
            padding: 50px;
            margin-bottom: 30px;
            box-shadow: 0 -10px 30px rgba(0,0,0,0.05);
            color: #fff;
            overflow: hidden;
            transform-origin: top center;
            transition: transform 0.3s ease;
        }
        .sticky-card:nth-child(1) { top: 100px; }
        .sticky-card:nth-child(2) { top: 120px; }
        .sticky-card:nth-child(3) { top: 140px; }
        .sticky-card:nth-child(4) { top: 160px; }

        .sticky-card.color-1 { background: #250b46; }
        .sticky-card.color-2 { background: #1a0833; }
        .sticky-card.color-3 { background: #0f0520; }
        .sticky-card.color-4 { background: #000000; }

        .sc-title { font-size: 2.2rem; font-weight: 700; margin-bottom: 20px; letter-spacing: -0.02em; color: #fff; }
        .sc-desc { font-size: 1.1rem; line-height: 1.6; color: #e5e7eb; margin-bottom: 30px; max-width: 90%; }
        .sc-list { list-style: none; padding: 0; margin: 0 0 40px 0; }
        .sc-list li { font-size: 1.05rem; margin-bottom: 16px; display: flex; align-items: center; color: #fff; }
        .sc-list li i { color: #facc15; margin-right: 12px; font-weight: bold; font-size: 1.2rem; }
        .sc-btn {
            display: inline-flex;
            align-items: center;
            padding: 12px 30px;
            border: 1px solid rgba(255,255,255,0.4);
            border-radius: 100px;
            color: #fff;
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s ease;
        }
        .sc-btn:hover { background: #fff; color: #250b46; }
        .sc-btn i { margin-left: 10px; font-size: 1.1rem; }
        .sc-img-wrap { border-radius: 16px; overflow: hidden; height: 100%; min-height: 350px; }
        .sc-img-wrap img { width: 100%; height: 100%; object-fit: cover; }
        @media (max-width: 991px) {
            .sticky-card { padding: 40px 30px; position: relative; top: auto !important; margin-bottom: 20px; }
            .sc-img-wrap { margin-top: 30px; min-height: 250px; }
            .sc-title { font-size: 1.8rem; }
        }
        </style>
    </head>

<body class="overflow-x-hidden w-100">

    <?php include 'partials/common-content.php'; ?>

    <div id="smooth-wrapper">
        <!-- ========================== Top Header Start ============================== -->
        <div class="bg-main-600 tw-py-205 d-none">
            <div class="container">
                <div class="d-flex justify-content-center">
                    <p class="text-white bg-white-13 d-inline-block tw-py-1 tw-px-5 rounded-pill fw-normal">We're
                        introducing an exceptionally crafted UI/UX template on ThemeForest, designed to deliver
                        outstanding conversion results!</p>
                </div>
            </div>
        </div>
        <!-- ========================== Top Header End ============================== -->
        <!-- ==================== Header Start Here ==================== -->
        <?php include 'partials/header.php'; ?>
        <!-- ==================== Header End Here ==================== -->
        <div id="smooth-content">
            <!-- ============================== Top Features Section start ============================== -->
            <div class="bg-white border-top border-neutral-100 tw-py-4 common-shadow-one d-none">
                <div class="container">
                    <div class="top-features-slider overflow-hidden left-right-gradient position-relative">
                        <div class="d-flex align-items-center tw-gap-4">
                            <img alt="Icon" src="/assets/images/icons/chart-icon.svg" />
                            <span class="text-heading fw-medium tw-text-base">Perfect solution for success</span>
                        </div>
                        <div class="d-flex align-items-center tw-gap-4">
                            <img alt="Icon" src="/assets/images/icons/chart-icon.svg" />
                            <span class="text-heading fw-medium tw-text-base">Excellence in tailored IT Srvices</span>
                        </div>
                        <div class="d-flex align-items-center tw-gap-4">
                            <img alt="Icon" src="/assets/images/icons/chart-icon.svg" />
                            <span class="text-heading fw-medium tw-text-base">Elevate your brand sasstech</span>
                        </div>
                        <div class="d-flex align-items-center tw-gap-4">
                            <img alt="Icon" src="/assets/images/icons/chart-icon.svg" />
                            <span class="text-heading fw-medium tw-text-base">Achieve business golas solution</span>
                        </div>
                        <div class="d-flex align-items-center tw-gap-4">
                            <img alt="Icon" src="/assets/images/icons/chart-icon.svg" />
                            <span class="text-heading fw-medium tw-text-base">Innnovation in every presence</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================== Top Features Section end ============================== -->
            <!-- ============================= Banner Section Start ============================== -->
            <section class="banner tw-py-80-px overflow-hidden section-bg-three position-relative">
                <img alt="Shape" class="position-absolute top-0 tw-end-0 tw-me-12-percent"
                    src="/assets/images/shapes/sqaure_shape.png" />
                <div class="container max-w-1400-px">
                    <div class="row gy-4 align-items-center">
                        <div class="col-lg-6">
                            <div class="">
                               <h1 id="heroTitle" class="fw-bold tw-leading-104">
  Accurate Marketing That Performs Like Revenue
</h1>

<p id="heroDesc" class="text-neutral-500 tw-text-lg max-w-500-px fw-medium tw-mt-8">
  Data-first digital growth systems built for brands that want measurable outcomes, not vanity metrics.
</p>
                                <div class="tw-mt-11 d-flex align-items-center tw-gap-42-px flex-wrap">
                                    <div data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="800">
                                        <a class="hover--translate-y-1 active--translate-y-scale-9 btn btn-main hover-style-one button--stroke d-sm-inline-flex align-items-center justify-content-center tw-gap-5 group active--translate-y-2 tw-px-56-px tw-py-5 fw-semibold rounded-pill"
                                            data-block="button" href="/register">
                                            <span class="button__flair"></span>
                                            <span class="button__label">Build My Growth Engine</span>
                                        </a>
                                    </div>
                                    <div class="" data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                                        data-aos-duration="800">
                                        <div class="d-flex align-items-center tw-gap-4">
                                            <div class="d-flex align-items-center">
                                                <div
                                                    class="tw-w-9 tw-h-9 rounded-circle overflow-hidden tw-duration-300 hover-scale-14 tw-hover-z-9 position-relative z-2">
                                                    <img alt="Client Image" class="w-100 h-100 object-fit-cover"
                                                        src="/assets/images/brand_logo/brand06.png" />
                                                </div>
                                                <div
                                                    class="tw-w-9 tw-h-9 rounded-circle overflow-hidden tw-duration-300 hover-scale-14 tw-hover-z-9 position-relative tw--ms-10-px z-1">
                                                    <img alt="Client Image" class="w-100 h-100 object-fit-cover"
                                                        src="/assets/images/brand_logo/brand03.png" />
                                                </div>
                                                <div
                                                    class="tw-w-9 tw-h-9 rounded-circle overflow-hidden tw-duration-300 hover-scale-14 tw-hover-z-9 position-relative tw--ms-10-px">
                                                    <img alt="Client Image" class="w-100 h-100 object-fit-cover"
                                                        src="/assets/images/brand_logo/brand01.png" />
                                                </div>
                                            </div>
                                            <span class="h5 counter">2.3M+</span>
                                        </div>
                                        <p class="fw-bold tw-text-sm font-heading text-heading tw-mt-2 counter">5000+
                                            Client reviews</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="tw-ps-98-px position-relative tw-pb-8">
                                <div class="position-relative z-1">
                                    <img alt="" data-aos="zoom-in" data-aos-anchor-placement="top-bottom"
                                        data-aos-duration="1000" src="/assets/images/thumbs/banner-img.png" />
                                </div>
                                <!-- Review -->
                                <div
                                    class="bg-white tw-rounded-3xl tw-p-6 max-w-218-px position-absolute end-0 top-0 w-100 tw--mt-8-px tw--me-8-px common-shadow-two z-1 d-none d-lg-block">
                                    <div
                                        class="d-inline-flex align-items-center tw-gap-1 bg-green tw-py-05 tw-px-3 rounded-pill position-absolute top-0 tw-end-0 tw--mt-12-px tw--me-12-px">
                                        <span class="text-white fw-bold tw-text-sm">4.9</span>
                                        <span class="text-white d-flex">
                                            <img alt="" src="/assets/images/icons/star.svg" />
                                        </span>
                                    </div>
                                    <img alt="" class="" src="/assets/images/icons/ratings.svg" />
                                    <div class="tw-mt-3 d-flex align-items-center justify-content-between max-w-154-px">
                                        <span class="tw-text-lg text-heading fw-semibold">Trust pilot</span>
                                        <img alt="" src="/assets/images/icons/verified-icon.svg" />
                                    </div>
                                </div>
                                <!-- Review -->
                                <!-- Experience -->
                                <div class="bg-main-600 tw-p-12 tw-pe-6 d-inline-block tw-rounded-xl clip-path-one position-absolute bottom-0 tw-end-0 z-1 tw--me-70-px tw-mb-205 d-none d-lg-inline-block"
                                    data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="900">
                                    <h2 class="text-white counter">8+</h2>
                                    <span class="text-white">Years Experience</span>
                                </div>
                                <!-- Experience -->
                                <!-- Revenue -->
                                <div class="bg-white-7 tw-py-6 tw-px-7 tw-rounded-2xl border border-white bg-blur-20 position-absolute bottom-0 tw-start-0 z-1 d-flex align-items-center tw-gap-8 common-shadow-two d-none d-md-flex"
                                    data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="800">
                                    <img alt=""
                                        class="flower animate__wobble__two position-absolute tw-end-100 bottom-100 tw--m-24-px z-n1"
                                        src="/assets/images/shapes/revenue-shape.png" />
                                    <div class="">
                                        <div class="tab-content" id="pills-tabContent">
                                            <div aria-labelledby="pills-Daily-tab" class="tab-pane fade show active"
                                                id="pills-Daily" role="tabpanel" tabindex="0">
                                                <span
                                                    class="tw-text-sm text-neutral-500 tw-mb-1 text-uppercase">Revenue</span>
                                                <h5 class="tw-mb-6 counter">$4820.00</h5>
                                            </div>
                                            <div aria-labelledby="pills-Weekly-tab" class="tab-pane fade" id="pills-Weekly"
                                                role="tabpanel" tabindex="0">
                                                <span
                                                    class="tw-text-sm text-neutral-500 tw-mb-1 text-uppercase">Revenue</span>
                                                <h5 class="tw-mb-6 counter">$2445.00</h5>
                                            </div>
                                            <div aria-labelledby="pills-Monthly-tab" class="tab-pane fade"
                                                id="pills-Monthly" role="tabpanel" tabindex="0">
                                                <span
                                                    class="tw-text-sm text-neutral-500 tw-mb-1 text-uppercase">Revenue</span>
                                                <h5 class="tw-mb-6 counter">$8221.00</h5>
                                            </div>
                                        </div>
                                        <ul class="nav nav-pills common-tab d-flex align-items-center tw-gap-205"
                                            id="pills-tab" role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <button aria-controls="pills-Daily" aria-selected="true"
                                                    class="nav-link bg-transparent hover--translate-y-1 tw-transition-all tw-duration-300 text-neutral-500 tw-text-sm fw-medium p-0 active"
                                                    data-bs-target="#pills-Daily" data-bs-toggle="pill" id="pills-Daily-tab"
                                                    role="tab" type="button">Daily</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button aria-controls="pills-Weekly" aria-selected="false"
                                                    class="nav-link bg-transparent hover--translate-y-1 tw-transition-all tw-duration-300 text-neutral-500 tw-text-sm fw-medium p-0"
                                                    data-bs-target="#pills-Weekly" data-bs-toggle="pill"
                                                    id="pills-Weekly-tab" role="tab" type="button">Weekly</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button aria-controls="pills-Monthly" aria-selected="false"
                                                    class="nav-link bg-transparent hover--translate-y-1 tw-transition-all tw-duration-300 text-neutral-500 tw-text-sm fw-medium p-0"
                                                    data-bs-target="#pills-Monthly" data-bs-toggle="pill"
                                                    id="pills-Monthly-tab" role="tab" type="button">Monthly</button>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="">
                                        <img alt="" src="/assets/images/thumbs/revenue-chart.png" />
                                    </div>
                                </div>
                                <!-- Revenue -->
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- ============================= Banner Section End ============================== -->
            <!-- ============================ brand slider start =========================== -->
            <div class="brand-slider-wrapper overflow-hidden">
                <div class="brand-slider swiper">
                    <div class="swiper-wrapper align-items-center">
                        <div class="swiper-slide me-0 tw-py-4 border tw-border-dashed border-neutral-200 border-top-0 tw-h-114-px border-end-0 tw-px-4 d-flex justify-content-center align-items-center"
                            data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="200">
                            <div class="text-center">
                                <img alt="Logo" class="" src="/assets/images/brand_logo/brand01.png" />
                            </div>
                        </div>
                        <div class="swiper-slide me-0 tw-py-4 border tw-border-dashed border-neutral-200 border-top-0 tw-h-114-px border-end-0 tw-px-4 d-flex justify-content-center align-items-center"
                            data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="200">
                            <div class="text-center">
                                <img alt="Logo" class="" src="/assets/images/brand_logo/brand02.png" />
                            </div>
                        </div>
                        <div class="swiper-slide me-0 tw-py-4 border tw-border-dashed border-neutral-200 border-top-0 tw-h-114-px border-end-0 tw-px-4 d-flex justify-content-center align-items-center"
                            data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="200">
                            <div class="text-center">
                                <img alt="Logo" class="" src="/assets/images/brand_logo/brand03.png" />
                            </div>
                        </div>
                        <div class="swiper-slide me-0 tw-py-4 border tw-border-dashed border-neutral-200 border-top-0 tw-h-114-px border-end-0 tw-px-4 d-flex justify-content-center align-items-center"
                            data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="200">
                            <div class="text-center">
                                <img alt="Logo" class="" src="/assets/images/brand_logo/brand04.png" />
                            </div>
                        </div>
                        <div class="swiper-slide me-0 tw-py-4 border tw-border-dashed border-neutral-200 border-top-0 tw-h-114-px border-end-0 tw-px-4 d-flex justify-content-center align-items-center"
                            data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="200">
                            <div class="text-center">
                                <img alt="Logo" class="" src="/assets/images/brand_logo/brand05.png" />
                            </div>
                        </div>
                        <div class="swiper-slide me-0 tw-py-4 border tw-border-dashed border-neutral-200 border-top-0 tw-h-114-px border-end-0 tw-px-4 d-flex justify-content-center align-items-center"
                            data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="200">
                            <div class="text-center">
                                <img alt="Logo" class="" src="/assets/images/brand_logo/brand06.png" />
                            </div>
                        </div>
                        <div class="swiper-slide me-0 tw-py-4 border tw-border-dashed border-neutral-200 border-top-0 tw-h-114-px border-end-0 tw-px-4 d-flex justify-content-center align-items-center"
                            data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="200">
                            <div class="text-center">
                                <img alt="Logo" class="" src="/assets/images/brand_logo/brand07.png" />
                            </div>
                        </div>
                        <div class="swiper-slide me-0 tw-py-4 border tw-border-dashed border-neutral-200 border-top-0 tw-h-114-px border-end-0 tw-px-4 d-flex justify-content-center align-items-center"
                            data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="200">
                            <div class="text-center">
                                <img alt="Logo" class="" src="/assets/images/brand_logo/brand08.png" />
                            </div>
                        </div>
                        <div class="swiper-slide me-0 tw-py-4 border tw-border-dashed border-neutral-200 border-top-0 tw-h-114-px border-end-0 tw-px-4 d-flex justify-content-center align-items-center"
                            data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="200">
                            <div class="text-center">
                                <img alt="Logo" class="" src="/assets/images/brand_logo/brand09.png" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================ brand slider end =========================== -->
            <!-- ========================== About section start ============================= -->
            <section class="pt-60 pb-60 drag-rotate-element-section">
                <div class="container">
                    <div class="tw-rounded-50-px gradient-bg-one tw-px-36-px tw-py-80-px">
                        <div class="row gy-4">
                            <div class="col-lg-6">
                                <div class="tw-pe-12 about-cards-wrapper position-relative">
                                    <div class="row g-2">
                                        <div class="col-sm-6" data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                                            data-aos-duration="800">
                                            <div
                                                class="bg-main-600 tw-rounded-3xl tw-p-8 text-center h-100 d-flex flex-column justify-content-center align-items-center">
                                                <h3 class="text-white d-inline-flex align-items-center tw-gap-3 tw-mb-9">
                                                    <span class="d-flex">
                                                        <img alt="" src="/assets/images/icons/arrow-up.svg" />
                                                    </span>
                                                    88%
                                                </h3>
                                                <p class="text-white tw-text-sm">Average revenue growth for per
                                                    successful clients</p>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 position-relative" data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                                            data-aos-duration="800">
                                            <div
                                                class="bg-main-two-600 tw-rounded-3xl tw-h-260-px d-flex flex-column justify-content-center align-items-center position-relative">
                                                <img alt="" class="position-absolute tw-start-50 bottom-0 tw-translate-x-50"
                                                    src="/assets/images/thumbs/model.png" />
                                            </div>
                                            <div
                                                class="bg-white tw-rounded-lg common-shadow-one border-bottom border-3 border-main-600 tw-px-4 tw-py-2 d-flex align-items-center tw-gap-3 z-1 position-absolute top-0 tw-end-0 tw-mt-194-px">
                                                <span
                                                    class="bg-neutral-200 tw-w-10 tw-h-10 tw-rounded-xl d-flex justify-content-center align-items-center text-neutral-500">
                                                    <i class="ph-bold ph-smiley"></i>
                                                </span>
                                                <div class="">
                                                    <h6 class="">99.8%</h6>
                                                    <p class="fw-medium tw-text-sm text-neutral-500">Client Satisfaction
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6" data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                                            data-aos-duration="800">
                                            <div
                                                class="bg-main-two-600 tw-rounded-3xl tw-p-8 text-center d-flex flex-column justify-content-center align-items-center tw-h-260-px">
                                                <div class="circle-border d-inline-block">
                                                    <svg class="radial-progress" data-percentage="78" viewbox="0 0 80 80">
                                                        <circle class="incomplete" cx="40" cy="40" r="35"></circle>
                                                        <circle class="complete" cx="40" cy="40" r="35"></circle>
                                                        <text class="percentage" transform="matrix(0, 1, -1, 0, 80, 0)"
                                                            x="50%" y="57%">78%</text>
                                                    </svg>
                                                </div>
                                                <p class="text-white tw-text-sm tw-mt-5">Avarage revenew growth for per
                                                    succesful clients</p>
                                            </div>
                                        </div>
                                        <div class="col-sm-6" data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                                            data-aos-duration="800">
                                            <div
                                                class="myContainer position-relative d-flex flex-column justify-content-center align-items-center h-100 tw-gap-705 overflow-hidden">
                                                <span
                                                    class="drag-rotate-element cursor-grab min-w-max z-1 tw-px-9 tw-py-1 fw-semibold text-white bg-main-two-600 rounded-pill">Cybersecurity</span>
                                                <span
                                                    class="drag-rotate-element cursor-grab min-w-max z-1 tw-px-4 tw-py-1 fw-semibold text-white bg-pink rounded-pill">Infrastructure
                                                    Management</span>
                                                <span
                                                    class="drag-rotate-element cursor-grab min-w-max z-1 tw-px-9 tw-py-1 fw-semibold text-white bg-main-600 rounded-pill">Operational
                                                    Excellence</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 position-relative">
                                <div class="common-shadow-three tw-rounded-40-px bg-white tw-px-44-px tw-py-54-px">
                                    <div class="tw-mb-6">
                                        <span
                                            class="text-black tw-text-lg fw-bold text-uppercase tw-mb-205 d-inline-block">ABOUT
                                            US</span>
                                        <h3 class="splitTextStyleOne fw-light tw-leading-104">
                                            <span class="d-inline-block"> Not Another Agency.</span>
                                            <span class="d-inline-block fw-semibold"></span>
                                            <span class="d-inline-block"></span>
                                            <span class="d-inline-block fw-semibold">  A Growth Engineering Team</span>
                                        </h3>
                                    </div>
                                    <div class="d-flex flex-column tw-gap-6">
                                        <div class="d-flex align-items-start tw-gap-26-px animation-item" data-aos="fade-up"
                                            data-aos-anchor-placement="top-bottom" data-aos-duration="600">
                                            <span class="tw-w-14 d-flex justify-content-center align-items-center">
                                                <img alt="We Start With Data" class="w-100 h-auto object-fit-contain" src="/assets/Gifs/bulb.gif" />
                                            </span>
                                            <div class="">
                                                <h6 class="tw-mb-4">We Start With Data, Not Design</h6>
                                                <p class="text-neutral-500 max-w-400-px">Every campaign begins with insight. Be it analytics, behavior mapping, or market intelligence.</p>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-start tw-gap-26-px animation-item" data-aos="fade-up"
                                            data-aos-anchor-placement="top-bottom" data-aos-duration="600">
                                            <span class="tw-w-14 d-flex justify-content-center align-items-center">
                                                <img alt="Performance Over Promises" class="w-100 h-auto object-fit-contain" src="/assets/Gifs/goal.gif" />
                                            </span>
                                            <div class="">
                                                <h6 class="tw-mb-4">Performance Over Promises</h6>
                                                <p class="text-neutral-500 max-w-400-px">We track revenue, CAC, LTV, pipeline velocity and not just clicks and impressions.</p>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-start tw-gap-26-px animation-item" data-aos="fade-up"
                                            data-aos-anchor-placement="top-bottom" data-aos-duration="600">
                                            <span class="tw-w-14 d-flex justify-content-center align-items-center">
                                                <img alt="Tech + Marketing Under One Roof" class="w-100 h-auto object-fit-contain" src="/assets/Gifs/growth.gif" />
                                            </span>
                                            <div class="">
                                                <h6 class="tw-mb-4">Tech + Marketing Under One Roof.</h6>
                                                <p class="text-neutral-500 max-w-400-px">We bridge the gap between development and growth marketing to build high-performing digital engines.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- ========================== About section End ============================= -->
            
       <section class="bg-main-two-600 tw-py-80-px tw-px-6 text-white">

  <div class="container">
    <div class="row gy-4">

      <!-- LEFT -->
      <div class="col-lg-6 d-flex flex-column">
        <!-- <p class="text-sm opacity-70 mb-2">- Services</p> -->

        <h2 class="fw-semibold tw-leading-104 tw-mb-6">
          Best-in-class <br>
          Services to Deliver <br>
          What Matters
        </h2>

        <img src="https://images.unsplash.com/photo-1556761175-b413da4baf72"
             class="tw-rounded-xl w-100 flex-grow-1 object-fit-cover tw-h-300-px"/>
      </div>

      <!-- RIGHT -->
   <div class="col-lg-6">
  <div class="services-list-container">

  <div class="service-btnss">
    <div class="left">
      <i class="ph ph-robot"></i>
      <span>AI Consulting Services</span>
    </div>
    <span class="arrow">↗</span>
  </div>

  <div class="service-btnss">
    <div class="left">
      <i class="ph ph-cloud"></i>
      <span>Cloud Services</span>
    </div>
    <span class="arrow">↗</span>
  </div>

  <div class="service-btnss">
    <div class="left">
      <i class="ph ph-chart-line"></i>
      <span>BI Analytical Services</span>
    </div>
    <span class="arrow">↗</span>
  </div>

  <div class="service-btnss">
    <div class="left">
      <i class="ph ph-check-circle"></i>
      <span>QA Services</span>
    </div>
    <span class="arrow">↗</span>
  </div>

  <div class="service-btnss">
    <div class="left">
      <i class="ph ph-gear"></i>
      <span>Managed Services</span>
    </div>
    <span class="arrow">↗</span>
  </div>

  <div class="service-btnss">
    <div class="left">
      <i class="ph ph-code"></i>
      <span>Web Development</span>
    </div>
    <span class="arrow">↗</span>
  </div>

  <div class="service-btnss">
    <div class="left">
      <i class="ph ph-megaphone"></i>
      <span>Digital Marketing</span>
    </div>
    <span class="arrow">↗</span>
  </div>

</div>
</div>

    </div>
  </div>
</section>

<script>
document.addEventListener("DOMContentLoaded", function () {
  window.activateService = function(el) {
    document.querySelectorAll('.overlay').forEach(o => {
      o.style.transform = "translateX(-100%)";
    });

    el.querySelector('.overlay').style.transform = "translateX(0)";
  }
});
</script>
            
            
            
            
            <!-- ==================== Stacked Cards Services ==================== -->
            <section id="services" class="stacked-section">
                <div class="container">
                    <div class="stacked-heading-wrapper">
                        <div class="stacked-ghost-text">With Our</div>
                        <div class="stacked-badge">
                            <span>What We Offer</span>
                        </div>
                        <h2 class="stacked-main-heading">Production-Ready <span class="text-yellow">Systems</span></h2>
                        <p class="stacked-subheading">
                            Akkurate helps enterprises and high-growth businesses design, build, and scale advanced digital systems that are secure, compliant, and built for real-world adoption.
                        </p>
                    </div>
                    
                    <div class="sticky-cards-container">
                        <!-- Card 1 -->
                        <div class="sticky-card color-1">
                            <div class="row align-items-center h-100">
                                <div class="col-lg-6 pe-lg-5">
                                    <h3 class="sc-title">Build Intelligent & Autonomous AI Systems</h3>
                                    <p class="sc-desc">We design AI systems that move beyond experimentation—capable of reasoning, decision-making, and execution across enterprise workflows.</p>
                                    <ul class="sc-list">
                                        <li><i class="ph-bold ph-arrow-right"></i> RAG Development</li>
                                        <li><i class="ph-bold ph-arrow-right"></i> Autonomous AI Agents</li>
                                        <li><i class="ph-bold ph-arrow-right"></i> AI-Engine Games</li>
                                    </ul>
                                    <a href="/contact.php" class="sc-btn">Explore AI solutions <i class="ph-bold ph-arrow-right"></i></a>
                                </div>
                                <div class="col-lg-6 mt-4 mt-lg-0">
                                    <div class="sc-img-wrap">
                                        <img src="/assets/images/thumbs/office-stock.jpg" alt="AI Systems">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Card 2 -->
                        <div class="sticky-card color-2">
                            <div class="row align-items-center h-100">
                                <div class="col-lg-6 pe-lg-5">
                                    <h3 class="sc-title">Custom Web & Digital Platforms</h3>
                                    <p class="sc-desc">We build scalable, high-performance web applications and digital platforms tailored to your specific business requirements and user needs.</p>
                                    <ul class="sc-list">
                                        <li><i class="ph-bold ph-arrow-right"></i> Enterprise Web Apps</li>
                                        <li><i class="ph-bold ph-arrow-right"></i> SaaS Product Development</li>
                                        <li><i class="ph-bold ph-arrow-right"></i> E-Commerce Solutions</li>
                                    </ul>
                                    <a href="/contact.php" class="sc-btn">Explore Web solutions <i class="ph-bold ph-arrow-right"></i></a>
                                </div>
                                <div class="col-lg-6 mt-4 mt-lg-0">
                                    <div class="sc-img-wrap">
                                        <img src="/assets/images/thumbs/office-stock.jpg" alt="Web Platforms">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Card 3 -->
                        <div class="sticky-card color-3">
                            <div class="row align-items-center h-100">
                                <div class="col-lg-6 pe-lg-5">
                                    <h3 class="sc-title">Data Engineering & Analytics</h3>
                                    <p class="sc-desc">Transform raw data into actionable insights with robust data pipelines, warehousing, and intuitive analytics dashboards.</p>
                                    <ul class="sc-list">
                                        <li><i class="ph-bold ph-arrow-right"></i> Data Warehousing</li>
                                        <li><i class="ph-bold ph-arrow-right"></i> Real-time Analytics</li>
                                        <li><i class="ph-bold ph-arrow-right"></i> Business Intelligence</li>
                                    </ul>
                                    <a href="/contact.php" class="sc-btn">Explore Data solutions <i class="ph-bold ph-arrow-right"></i></a>
                                </div>
                                <div class="col-lg-6 mt-4 mt-lg-0">
                                    <div class="sc-img-wrap">
                                        <img src="/assets/images/thumbs/office-stock.jpg" alt="Data Engineering">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Card 4 -->
                        <div class="sticky-card color-4">
                            <div class="row align-items-center h-100">
                                <div class="col-lg-6 pe-lg-5">
                                    <h3 class="sc-title">Cloud Infrastructure & DevOps</h3>
                                    <p class="sc-desc">Ensure your applications are highly available, secure, and easily scalable with our cloud architecture and continuous delivery practices.</p>
                                    <ul class="sc-list">
                                        <li><i class="ph-bold ph-arrow-right"></i> Cloud Migration</li>
                                        <li><i class="ph-bold ph-arrow-right"></i> Infrastructure as Code</li>
                                        <li><i class="ph-bold ph-arrow-right"></i> CI/CD Pipelines</li>
                                    </ul>
                                    <a href="/contact.php" class="sc-btn">Explore Cloud solutions <i class="ph-bold ph-arrow-right"></i></a>
                                </div>
                                <div class="col-lg-6 mt-4 mt-lg-0">
                                    <div class="sc-img-wrap">
                                        <img src="/assets/images/thumbs/office-stock.jpg" alt="Cloud Infrastructure">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            
            <!-- =========================== Roadmap section start ========================== -->
            <section class="pt-120 pb-80 bg-white">
                <div class="container max-w-1440-px">
                    <!-- what we do Start -->
                    <div class="bg-main-two-600 tw-rounded-3xl overflow-hidden position-relative" id="roadmap-section">
                        <div class="tw-ps-74-px tw-pe-6">
                            <div class="d-flex flex-xl-nowrap flex-wrap tw-gap-6 gap-xl-5">
                                <div class="max-w-432-px w-100 flex-shrink-0">
                                    <div class="pt-60 tw-pb-9 position-relative">
                                        <span
                                            class="text-white tw-text-sm fw-semibold text-capitalize tw-mb-3 d-inline-block">What
                                            we do</span>
                                        <h3 class="splitTextStyleOne fw-light tw-leading-104 text-white tw-mb-6">
                                            <span class="d-inline-block fw-semibold">From Accurate Strategy to Scalable Revenue</span>
                                        </h3>
                                        <p class="splitTextStyleOne text-neutral-400 max-w-432-px">A structured, tech-driven roadmap that turns marketing into a predictable growth engine.</p>
                                        <div class="tw-mt-11 d-flex align-items-center tw-gap-42-px flex-wrap">
                                            <a class="hover--translate-y-1 active--translate-y-scale-9 btn btn-main hover-style-three button--stroke d-sm-inline-flex d-none align-items-center justify-content-center tw-gap-5 group active--translate-y-2 tw-px-56-px tw-py-5 fw-semibold rounded-pill"
                                                data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                                                data-aos-duration="800" data-block="button" href="/register">
                                                <span class="button__flair"></span>
                                                <span class="button__label">Get Started</span>
                                            </a>
                                            <div class="" data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                                                data-aos-duration="800">
                                                <div class="d-flex align-items-center tw-gap-4">
                                                    <div class="d-flex align-items-center">
                                                        <div
                                                            class="tw-w-9 tw-h-9 rounded-circle bg-white overflow-hidden tw-duration-300 hover-scale-14 tw-hover-z-9 position-relative z-2">
                                                            <img alt="Client Image" class="w-100 h-100 object-fit-cover"
                                                                src="/assets/images/brand_logo/brand03.png" />
                                                        </div>
                                                        <div
                                                            class="tw-w-9 tw-h-9 rounded-circle bg-white overflow-hidden tw-duration-300 hover-scale-14 tw-hover-z-9 position-relative tw--ms-10-px z-1">
                                                            <img alt="Client Image" class="w-100 h-100 object-fit-cover"
                                                                src="/assets/images/brand_logo/brand06.png" />
                                                        </div>
                                                        <div
                                                            class="tw-w-9 tw-h-9 rounded-circle bg-white overflow-hidden tw-duration-300 hover-scale-14 tw-hover-z-9 position-relative tw--ms-10-px">
                                                            <img alt="Client Image" class="w-100 h-100 object-fit-cover"
                                                                src="/assets/images/brand_logo/brand01.png" />
                                                        </div>
                                                    </div>
                                                    <span class="h5 counter text-white">2.3M+</span>
                                                </div>
                                                <p
                                                    class="fw-bold tw-text-sm font-heading text-heading tw-mt-2 counter text-white">
                                                    5000+ Client reviews</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-grow-1 pt-60">
                                    <div class="d-flex tw-gap-3 flex-wrap">
                                        <div
                                            class="ball text-center rounded-circle tw-w-180-px tw-h-180-px tw-w-180-px d-flex flex-column justify-content-center align-items-center position-relative animation-item bg-main-600 tw-mt-705">
                                            <span
                                                class="tw-h-6 tw-w-6 bg-sky rounded-circle text-white fw-medium tw-text-xs d-flex justify-content-center align-items-center position-absolute top-0 tw-start-0 tw-mt-6 tw-ms-2">01</span>
                                            <img alt="Icon" class="animate__swing" src="/assets/images/icons/roadmap-icon1.svg" />
                                            <h6 class="tw-text-base text-white tw-mt-4 fw-medium max-w-118-px mx-auto">
                                                SEO</h6>
                                        </div>
                                        <div
                                            class="ball text-center rounded-circle tw-w-180-px tw-h-180-px tw-w-180-px d-flex flex-column justify-content-center align-items-center position-relative animation-item bg-dark-deep tw--mt-8-px">
                                            <span
                                                class="tw-h-6 tw-w-6 bg-sky rounded-circle text-white fw-medium tw-text-xs d-flex justify-content-center align-items-center position-absolute top-0 tw-start-0 tw-mt-6 tw-ms-2">02</span>
                                            <img alt="Icon" class="animate__swing" src="/assets/images/icons/roadmap-icon2.svg" />
                                            <h6 class="tw-text-base text-white tw-mt-4 fw-medium max-w-118-px mx-auto">
                                               Video production</h6>
                                        </div>
                                        <div
                                            class="ball text-center rounded-circle tw-w-180-px tw-h-180-px tw-w-180-px d-flex flex-column justify-content-center align-items-center position-relative animation-item bg-sky-deep tw-mt-505">
                                            <span
                                                class="tw-h-6 tw-w-6 bg-sky rounded-circle text-white fw-medium tw-text-xs d-flex justify-content-center align-items-center position-absolute top-0 tw-start-0 tw-mt-6 tw-ms-2">03</span>
                                            <img alt="Icon" class="animate__swing" src="/assets/images/icons/roadmap-icon3.svg" />
                                            <h6 class="tw-text-base text-white tw-mt-4 fw-medium max-w-118-px mx-auto">
                                                YouTube and Meta ads</h6>
                                        </div>
                                        <div
                                            class="ball text-center rounded-circle tw-w-180-px tw-h-180-px tw-w-180-px d-flex flex-column justify-content-center align-items-center position-relative animation-item bg-dark-deep tw--mt-28-px">
                                            <span
                                                class="tw-h-6 tw-w-6 bg-sky rounded-circle text-white fw-medium tw-text-xs d-flex justify-content-center align-items-center position-absolute top-0 tw-start-0 tw-mt-6 tw-ms-2">04</span>
                                            <img alt="Icon" class="animate__swing" src="/assets/images/icons/roadmap-icon4.svg" />
                                            <h6 class="tw-text-base text-white tw-mt-4 fw-medium max-w-118-px mx-auto">
                                                 Whatsapp automation</h6>
                                        </div>
                                        <div
                                            class="ball text-center rounded-circle tw-w-180-px tw-h-180-px tw-w-180-px d-flex flex-column justify-content-center align-items-center position-relative animation-item bg-dark-deep tw-mt-8">
                                            <span
                                                class="tw-h-6 tw-w-6 bg-sky rounded-circle text-white fw-medium tw-text-xs d-flex justify-content-center align-items-center position-absolute top-0 tw-start-0 tw-mt-6 tw-ms-2">05</span>
                                            <img alt="Icon" class="animate__swing" src="/assets/images/icons/roadmap-icon5.svg" />
                                            <h6 class="tw-text-base text-white tw-mt-4 fw-medium max-w-118-px mx-auto">
                                                Linkedin management</h6>
                                        </div>
                                        <div
                                            class="ball text-center rounded-circle tw-w-180-px tw-h-180-px tw-w-180-px d-flex flex-column justify-content-center align-items-center position-relative animation-item bg-pink tw--mt-8-px">
                                            <span
                                                class="tw-h-6 tw-w-6 bg-sky rounded-circle text-white fw-medium tw-text-xs d-flex justify-content-center align-items-center position-absolute top-0 tw-start-0 tw-mt-6 tw-ms-2">06</span>
                                            <img alt="Icon" class="animate__swing" src="/assets/images/icons/roadmap-icon6.svg" />
                                            <h6 class="tw-text-base text-white tw-mt-4 fw-medium max-w-118-px mx-auto">
                                                 Logo design</h6>
                                        </div>
                                        <div
                                            class="ball text-center rounded-circle tw-w-180-px tw-h-180-px tw-w-180-px d-flex flex-column justify-content-center align-items-center position-relative animation-item bg-main-600 tw-mt-4">
                                            <span
                                                class="tw-h-6 tw-w-6 bg-sky rounded-circle text-white fw-medium tw-text-xs d-flex justify-content-center align-items-center position-absolute top-0 tw-start-0 tw-mt-6 tw-ms-2">07</span>
                                            <img alt="Icon" class="animate__swing" src="/assets/images/icons/roadmap-icon7.svg" />
                                            <h6 class="tw-text-base text-white tw-mt-4 fw-medium max-w-118-px mx-auto">
                                                Google Adwords</h6>
                                        </div>
                                        <div
                                            class="ball text-center rounded-circle tw-w-180-px tw-h-180-px tw-w-180-px d-flex flex-column justify-content-center align-items-center position-relative animation-item bg-sky-deep tw--mt-28-px">
                                            <span
                                                class="tw-h-6 tw-w-6 bg-sky rounded-circle text-white fw-medium tw-text-xs d-flex justify-content-center align-items-center position-absolute top-0 tw-start-0 tw-mt-6 tw-ms-2">08</span>
                                            <img alt="Icon" class="animate__swing" src="/assets/images/icons/roadmap-icon8.svg" />
                                            <h6 class="tw-text-base text-white tw-mt-4 fw-medium max-w-118-px mx-auto">
                                                App development</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tw-pb-9">
                            <img alt="" class="w-100" src="/assets/images/shapes/curve-line.png" />
                        </div>
                    </div>
                    <!-- what we do end -->
                    <!-- Global Increase Start -->
                    <div class="pt-60">
                        <style>
                            /* --- Accurate Results Section Custom Styles --- */
                            .results-grid-container {
                                display: flex;
                                flex-wrap: wrap;
                                justify-content: center;
                                gap: 16px; /* Tight, professional even gap */
                                width: 100%;
                            }
                            
                            .results-card-custom {
                                min-height: 184px;
                                border-radius: 100px;
                                display: flex;
                                justify-content: center;
                                align-items: center;
                                padding: 24px 40px;
                                transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
                                box-shadow: 0 10px 30px rgba(0, 0, 0, 0.02);
                                text-decoration: none;
                            }
                            
                            /* Centered Column Layout (for 3X-5X and 25%) */
                            .results-card-custom.layout-center {
                                flex-direction: column;
                                text-align: center;
                                gap: 8px;
                            }
                            
                            /* Row Layout (for others with stats and description side-by-side) */
                            .results-card-custom.layout-row {
                                flex-direction: row;
                                text-align: left;
                                gap: 24px;
                            }
                            
                            /* Hover effects for premium/interactive feel */
                            .results-card-custom:hover {
                                transform: translateY(-6px);
                            }
                            
                            .results-card-custom.bg-main-600:hover {
                                box-shadow: 0 20px 40px rgba(19, 81, 216, 0.22);
                            }
                            
                            .results-card-custom.bg-white {
                                box-shadow: 0 10px 30px rgba(15, 23, 42, 0.04) !important;
                                border: 1px solid #e8eaf0 !important;
                            }
                            
                            .results-card-custom.bg-white:hover {
                                box-shadow: 0 20px 40px rgba(15, 23, 42, 0.08) !important;
                                border-color: #1351D8 !important;
                            }
                            
                            .results-card-custom h3 {
                                margin-bottom: 0 !important;
                                line-height: 1 !important;
                            }
                            
                            .results-card-custom p {
                                margin-bottom: 0 !important;
                                line-height: 1.4 !important;
                            }

                            /* Responsive Adjustments */
                            @media (max-width: 1200px) {
                                .results-card-custom {
                                    max-width: 100% !important;
                                    flex: 1 1 calc(50% - 12px); /* 2 columns on medium screens */
                                }
                            }
                            
                            @media (max-width: 768px) {
                                .results-grid-container {
                                    gap: 12px;
                                }
                                .results-card-custom {
                                    flex: 1 1 100%; /* 1 column on mobile */
                                    border-radius: 50px;
                                    min-height: auto;
                                    padding: 24px;
                                    gap: 16px;
                                }
                                .results-card-custom.layout-row {
                                    flex-direction: column;
                                    text-align: center;
                                    gap: 10px;
                                }
                            }
                        </style>
                        <h3 class="splitTextStyleOne fw-light tw-leading-104 tw-mb-14 text-center">
                            <span class="d-inline-block" style="margin-right:8px;">Accurate </span>
                            <span class="d-inline-block fw-semibold"> Results </span>
                            <span class="d-inline-block">That Compound</span>
                        </h3>
                        <div class="results-grid-container">
                            <div class="results-card-custom bg-main-600 text-white max-w-388-px w-100 layout-center"
                                data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="600">
                                <h3 class="h1 counter text-white fw-medium">3X – 5X</h3>
                                <p class="text-white max-w-228-px mx-auto">Average ROAS Across Campaigns</p>
                            </div>
                            <div class="results-card-custom bg-main-600 text-white max-w-514-px w-100 layout-row"
                                data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="600">
                                <h3 class="h1 counter text-white fw-medium d-inline-flex align-items-center gap-2">
                                    <img alt="" src="/assets/images/icons/arrow-up-green.svg" style="height: 32px; width: auto;" />
                                    40%
                                </h3>
                                <p class="text-white max-w-194-px">Reduction in Customer Acquisition Cost</p>
                            </div>
                            <div class="results-card-custom bg-white max-w-388-px w-100 layout-row border border-main-50"
                                data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="600">
                                <h3 class="h1 counter text-main-600 fw-medium">2x</h3>
                                <p class="text-main-two-600 max-w-194-px">Increase in Qualified Leads Within 90 Days</p>
                            </div>
                            <div class="results-card-custom bg-white max-w-490-px w-100 layout-row border border-main-50"
                                data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="600">
                                <h3 class="h1 counter text-main-600 fw-medium">60%</h3>
                                <p class="text-main-two-600 max-w-194-px">Faster Funnel Conversions</p>
                            </div>
                            <div class="results-card-custom bg-main-600 text-white max-w-288-px w-100 layout-center"
                                data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="600">
                                <h3 class="h1 counter text-white fw-medium">25%</h3>
                                <p class="text-white max-w-228-px mx-auto">Improvement in Retention Metrics</p>
                            </div>
                            <div class="results-card-custom bg-white max-w-514-px w-100 layout-row border border-main-50"
                                data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="600">
                                <h3 class="h1 counter text-main-600 fw-medium">100%</h3>
                                <p class="text-main-two-600 max-w-194-px">Transparent Performance Reporting clients</p>
                            </div>
                        </div>
                    </div>
                    <!-- Global Increase End -->
                </div>
            </section>
            <!-- =========================== Roadmap section End ========================== -->
            <!-- =============================== Offer section start ============================== -->
            <section class="offer pt-60 pb-60 overflow-hidden">
                <div class="container">
                    <div class="tw-mb-13">
                        <!-- <span class="text-main-600 tw-text-sm fw-bold text-capitalize tw-mb-205 d-block">What We Offering</span> -->
                        <div class="d-flex flex-lg-nowrap flex-wrap justify-content-between align-items-center tw-gap-4">
                            <div class="max-w-672-px w-100 text-lg-start text-center">
                                <h3 class="splitTextStyleOne tw-leading-104">
                                    Our Core Growth Services
                                </h3>
                            </div>
                            <p class="splitTextStyleOne text-neutral-500 max-w-500-px text-lg-start text-center mx-auto mx-lg-0">
                                In today's competitive business, the demand for efficient and
                                cost-effective IT solutions has never been more critical.
                            </p>
                        </div>
                    </div>
                    <div class="row gy-4">
                        <div class="col-lg-4">
                            <div class="row gy-4">
                                <div class="col-lg-12 col-sm-6" data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                                    data-aos-duration="600">
                                    <div
                                        class="group-item position-relative tw-rounded-3xl overflow-hidden z-1 h-100 tw-pt-15 bg-pink-dark tw-px-40-px tw-pb-84-px tw-duration-300">
                                        <span class="tw-text-base fw-semibold tw-mb-2 text-pink">Performance Marketing</span>
                                        <h4 class="splitTextStyleOne tw-mb-5 max-w-218-px">
                                            High-ROI paid campaigns across Google, Meta, LinkedIn, and emerging platforms
                                        </h4>
                                        <a class="tw-w-15 tw-h-15 d-flex justify-content-center align-items-center rounded-circle bg-white tw-text-2xl hover-bg-main-600 hover-text-white hover--translate-y-1 active--translate-y-scale-9"
                                            href="/service-details">
                                            <i class="ph-bold ph-arrow-up-right"></i>
                                        </a>
                                        <img alt="Image" class="tw-duration-300 position-absolute bottom-0 tw-end-0 z-n1"
                                            src="/assets/images/thumbs/offer-img1.png" />
                                    </div>
                                </div>
                                <div class="col-lg-12 col-sm-6" data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                                    data-aos-duration="600">
                                    <div
                                        class="group-item position-relative tw-rounded-3xl overflow-hidden z-1 h-100 tw-pt-15 bg-pink-lighter tw-px-40-px tw-pb-136-px tw-duration-300">
                                        <span class="tw-text-base fw-semibold tw-mb-2 text-pink">Logo Design</span>
                                        <h4 class="splitTextStyleOne fw-light tw-mb-5 max-w-330-px">
                                            <span class="d-inline-block fw-semibold">Turn traffic into customers with attractive logo designs.</span>
                                        </h4>
                                        <a class="tw-w-15 tw-h-15 d-flex justify-content-center align-items-center rounded-circle bg-pink-light tw-text-2xl text-white hover--translate-y-1 active--translate-y-scale-9"
                                            href="/service-details">
                                            <i class="ph-bold ph-arrow-up-right"></i>
                                        </a>
                                        <img alt="Image" class="tw-duration-300 position-absolute bottom-0 tw-end-0 z-n1"
                                            src="/assets/images/thumbs/offer-img2.png" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4" data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                            data-aos-duration="600">
                            <div
                                class="group-item position-relative tw-rounded-3xl overflow-hidden z-1 tw-pt-15 bg-main-50 tw-px-40-px tw-pb-84-px tw-duration-300 h-100">
                                <span class="text-main-600 fw-semibold tw-mb-2">SEO & Organic Growth Systems
</span>
                                <h4 class="splitTextStyleOne tw-mb-5 max-w-218-px">
                                    Technical SEO and content engines that rank and convert.
                                </h4>
                                <a class="tw-w-15 tw-h-15 d-flex justify-content-center align-items-center rounded-circle text-white tw-text-2xl bg-main-600 hover-text-white hover--translate-y-1 active--translate-y-scale-9"
                                    href="/service-details">
                                    <i class="ph-bold ph-arrow-up-right"></i>
                                </a>
                                <img alt="Image"
                                    class="tw-duration-300 position-absolute bottom-0 tw-end-0 z-n1 tw-mx-4 tw-mb-12 d-md-block d-none"
                                    src="/assets/images/thumbs/offer-img3.png" />
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="row gy-4">
                                <div class="col-lg-12 col-sm-6" data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                                    data-aos-duration="600">
                                    <div
                                        class="group-item position-relative tw-rounded-3xl overflow-hidden z-1 tw-pt-15 h-100 bg-purple-light tw-px-40-px tw-pb-84-px tw-duration-300">
                                        <span class="tw-text-base fw-semibold tw-mb-2 text-purple">Marketing Automation</span>
                                        <h4 class="splitTextStyleOne tw-mb-5 max-w-218-px">
                                            Lead nurturing, CRM workflows, and AI-powered journeys.
                                        </h4>
                                        <a class="tw-w-15 tw-h-15 d-flex justify-content-center align-items-center rounded-circle bg-white tw-text-2xl hover-bg-main-600 hover-text-white hover--translate-y-1 active--translate-y-scale-9"
                                            href="/service-details">
                                            <i class="ph-bold ph-arrow-up-right"></i>
                                        </a>
                                        <img alt="Image" class="tw-duration-300 position-absolute bottom-0 end-0 z-n1"
                                            src="/assets/images/thumbs/offer-img4.png" />
                                    </div>
                                </div>
                                <div class="col-lg-12 col-sm-6" data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                                    data-aos-duration="600">
                                    <div
                                        class="group-item position-relative tw-rounded-3xl overflow-hidden z-1 tw-pt-15 h-100 bg-paste-light tw-px-40-px tw-pb-136-px tw-duration-300">
                                        <span class="tw-text-base fw-semibold tw-mb-2 text-pink">Website Design and Development</span>
                                        <h4 class="splitTextStyleOne fw-light tw-mb-5 max-w-330-px">
                                            <span class="d-inline-block fw-semibold">Design frameworks, link building, and scalable website ecosystems</span>
                                        </h4>
                                        <a class="tw-w-15 tw-h-15 d-flex justify-content-center align-items-center rounded-circle bg-paste tw-text-2xl text-white hover--translate-y-1 active--translate-y-scale-9"
                                            href="/service-details">
                                            <i class="ph-bold ph-arrow-up-right"></i>
                                        </a>
                                        <img alt="Image" class="tw-duration-300 position-absolute bottom-0 tw-end-0 z-n1"
                                            src="/assets/images/thumbs/offer-img5.png" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- =============================== Offer section end ============================== -->
            <!-- =============================== faq section start ============================== -->
            <!-- ================================== Show-case section start ========================== -->
            <section class="show-case py-60 bg-main-two-600 overflow-hidden">
                <div class="max-w-602-px mx-auto text-center tw-mb-15">
                    <span class="text-white opacity-75 text-uppercase fw-bold tw-text-sm tw-mb-3" style="letter-spacing: 0.15em; display: inline-block;">
                        Work Showcase
                    </span>
                    <h3 class="splitTextStyleOne fw-semibold tw-leading-104 tw-mb-9 text-white">
                        Case Studies &amp; Growth Stories
                    </h3>
                </div>
                <div class="show-case-slider swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide" data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                            data-aos-duration="600">
                            <div class="group-item">
                                <div class="position-relative">
                                    <a class="w-100 h-100 tw-max-h-410-px overflow-hidden tw-rounded-28-px"
                                        href="/project-details">
                                        <img alt="Image"
                                            class="w-100 h-100 object-fit-cover group-hover-item-scale-12 tw-duration-300"
                                            src="/assets/images/thumbs/show-case-img1.png" />
                                    </a>
                                    <a class="tw-w-15 tw-h-15 d-flex justify-content-center align-items-center rounded-circle bg-white tw-text-2xl hover-bg-main-600 hover-text-white hover--translate-y-1 active--translate-y-scale-9 position-absolute top-0 tw-end-0 tw-me-8 tw-mt-8 hidden opacity-0 group-hover-item-opacity-1 group-hover-item-visible tw-scale-04 group-hover-item-scale-1"
                                        href="/project-details">
                                        <i class="ph-bold ph-arrow-up-right"></i>
                                    </a>
                                </div>
                                <div class="tw-mt-8">
                                    <span class="tw-text-base fw-medium text-white">Performance Marketing</span>
                                    <h5 class="text-white tw-mt-1">
                                        <a class="hover-text-main-600 text-white line-clamp-1 hover--translate-y-1"
                                            href="/project-details">Mobile
                                            Application Development</a>
                                    </h5>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                            data-aos-duration="600">
                            <div class="group-item">
                                <div class="position-relative">
                                    <a class="w-100 h-100 tw-max-h-410-px overflow-hidden tw-rounded-28-px"
                                        href="/project-details">
                                        <img alt="Image"
                                            class="w-100 h-100 object-fit-cover group-hover-item-scale-12 tw-duration-300"
                                            src="/assets/images/thumbs/show-case-img2.png" />
                                    </a>
                                    <a class="tw-w-15 tw-h-15 d-flex justify-content-center align-items-center rounded-circle bg-white tw-text-2xl hover-bg-main-600 hover-text-white hover--translate-y-1 active--translate-y-scale-9 position-absolute top-0 tw-end-0 tw-me-8 tw-mt-8 hidden opacity-0 group-hover-item-opacity-1 group-hover-item-visible tw-scale-04 group-hover-item-scale-1"
                                        href="/project-details">
                                        <i class="ph-bold ph-arrow-up-right"></i>
                                    </a>
                                </div>
                                <div class="tw-mt-8">
                                    <span class="tw-text-base fw-medium text-white">Excellent Performance</span>
                                    <h5 class="text-white tw-mt-1">
                                        <a class="hover-text-main-600 text-white line-clamp-1 hover--translate-y-1"
                                            href="/project-details">Cloud
                                            Computing System</a>
                                    </h5>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                            data-aos-duration="600">
                            <div class="group-item">
                                <div class="position-relative">
                                    <a class="w-100 h-100 tw-max-h-410-px overflow-hidden tw-rounded-28-px"
                                        href="/project-details">
                                        <img alt="Image"
                                            class="w-100 h-100 object-fit-cover group-hover-item-scale-12 tw-duration-300"
                                            src="/assets/images/thumbs/show-case-img3.png" />
                                    </a>
                                    <a class="tw-w-15 tw-h-15 d-flex justify-content-center align-items-center rounded-circle bg-white tw-text-2xl hover-bg-main-600 hover-text-white hover--translate-y-1 active--translate-y-scale-9 position-absolute top-0 tw-end-0 tw-me-8 tw-mt-8 hidden opacity-0 group-hover-item-opacity-1 group-hover-item-visible tw-scale-04 group-hover-item-scale-1"
                                        href="/project-details">
                                        <i class="ph-bold ph-arrow-up-right"></i>
                                    </a>
                                </div>
                                <div class="tw-mt-8">
                                    <span class="tw-text-base fw-medium text-white">Excellent Performance</span>
                                    <h5 class="text-white tw-mt-1">
                                        <a class="hover-text-main-600 text-white line-clamp-1 hover--translate-y-1"
                                            href="/project-details">Mobile
                                            Application Development</a>
                                    </h5>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                            data-aos-duration="600">
                            <div class="group-item">
                                <div class="position-relative">
                                    <a class="w-100 h-100 tw-max-h-410-px overflow-hidden tw-rounded-28-px"
                                        href="/project-details">
                                        <img alt="Image"
                                            class="w-100 h-100 object-fit-cover group-hover-item-scale-12 tw-duration-300"
                                            src="/assets/images/thumbs/show-case-img4.png" />
                                    </a>
                                    <a class="tw-w-15 tw-h-15 d-flex justify-content-center align-items-center rounded-circle bg-white tw-text-2xl hover-bg-main-600 hover-text-white hover--translate-y-1 active--translate-y-scale-9 position-absolute top-0 tw-end-0 tw-me-8 tw-mt-8 hidden opacity-0 group-hover-item-opacity-1 group-hover-item-visible tw-scale-04 group-hover-item-scale-1"
                                        href="/project-details">
                                        <i class="ph-bold ph-arrow-up-right"></i>
                                    </a>
                                </div>
                                <div class="tw-mt-8">
                                    <span class="tw-text-base fw-medium text-white">Excellent Performance</span>
                                    <h5 class="text-white tw-mt-1">
                                        <a class="hover-text-main-600 text-white line-clamp-1 hover--translate-y-1"
                                            href="/project-details">Creative
                                            Complete Data Setup</a>
                                    </h5>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                            data-aos-duration="600">
                            <div class="group-item">
                                <div class="position-relative">
                                    <a class="w-100 h-100 tw-max-h-410-px overflow-hidden tw-rounded-28-px"
                                        href="/project-details">
                                        <img alt="Image"
                                            class="w-100 h-100 object-fit-cover group-hover-item-scale-12 tw-duration-300"
                                            src="/assets/images/thumbs/show-case-img3.png" />
                                    </a>
                                    <a class="tw-w-15 tw-h-15 d-flex justify-content-center align-items-center rounded-circle bg-white tw-text-2xl hover-bg-main-600 hover-text-white hover--translate-y-1 active--translate-y-scale-9 position-absolute top-0 tw-end-0 tw-me-8 tw-mt-8 hidden opacity-0 group-hover-item-opacity-1 group-hover-item-visible tw-scale-04 group-hover-item-scale-1"
                                        href="/project-details">
                                        <i class="ph-bold ph-arrow-up-right"></i>
                                    </a>
                                </div>
                                <div class="tw-mt-8">
                                    <span class="tw-text-base fw-medium text-white">Excellent Performance</span>
                                    <h5 class="text-white tw-mt-1">
                                        <a class="hover-text-main-600 text-white line-clamp-1 hover--translate-y-1"
                                            href="/project-details">Mobile
                                            Application Development</a>
                                    </h5>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                            data-aos-duration="600">
                            <div class="group-item">
                                <div class="position-relative">
                                    <a class="w-100 h-100 tw-max-h-410-px overflow-hidden tw-rounded-28-px"
                                        href="/project-details">
                                        <img alt="Image"
                                            class="w-100 h-100 object-fit-cover group-hover-item-scale-12 tw-duration-300"
                                            src="/assets/images/thumbs/show-case-img2.png" />
                                    </a>
                                    <a class="tw-w-15 tw-h-15 d-flex justify-content-center align-items-center rounded-circle bg-white tw-text-2xl hover-bg-main-600 hover-text-white hover--translate-y-1 active--translate-y-scale-9 position-absolute top-0 tw-end-0 tw-me-8 tw-mt-8 hidden opacity-0 group-hover-item-opacity-1 group-hover-item-visible tw-scale-04 group-hover-item-scale-1"
                                        href="/project-details">
                                        <i class="ph-bold ph-arrow-up-right"></i>
                                    </a>
                                </div>
                                <div class="tw-mt-8">
                                    <span class="tw-text-base fw-medium text-white">Excellent Performance</span>
                                    <h5 class="text-white tw-mt-1">
                                        <a class="hover-text-main-600 text-white line-clamp-1 hover--translate-y-1"
                                            href="/project-details">Cloud
                                            Computing System</a>
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- ================================== Show-case section End ========================== -->
            <!-- ============================ Testimonials section start ============================= -->
            <section class="testimonials testimonials-rebuild pt-60 pb-20 position-relative z-1">
                <style>
                /* CSS marquee override for testimonials section with Image 1 card style */
                .testimonials-rebuild {
                    overflow: hidden;
                }
                .testimonials-rebuild__eyebrow {
                    color: #000000 !important;
                    background: transparent !important;
                    text-transform: uppercase !important;
                    font-size: 13px !important;
                    font-weight: 700 !important;
                    letter-spacing: 0.1em !important;
                    display: inline-block !important;
                    margin-bottom: 16px !important;
                    }
                .testimonials-rebuild__title {
                    color: #000000 !important;
                    font-size: clamp(2rem, 1.6rem + 1.7vw, 3.45rem) !important;
                    line-height: 1.15 !important;
                    margin: 0 !important;
                    font-weight: 400 !important;
                    letter-spacing: -0.02em !important;
                }
                .testimonials-rebuild__title span {
                    color: #000000 !important;
                    font-style: normal !important;
                    font-weight: 400 !important;
                }
                .testimonials-rebuild__marquee-container {
                    overflow: hidden;
                    width: 100%;
                    display: flex;
                    position: relative;
                    margin-top: 24px;
                }
                .testimonials-rebuild__track-marquee {
                    display: flex !important;
                    gap: 24px !important;
                    width: max-content !important;
                    animation: testimonials-marquee 25s linear infinite !important;
                }
                .testimonials-rebuild__track-marquee:hover {
                    animation-play-state: paused !important;
                }
                .testimonials-rebuild__card {
                    flex: 0 0 380px !important;
                    width: 380px !important;
                    background: transparent !important;
                    border: 2px solid #000000 !important;
                    border-radius: 12px !important;
                    padding: 24px 20px !important;
                    min-height: auto !important;
                    display: flex;
                    flex-direction: column;
                    justify-content: space-between;
                    box-shadow: none !important;
                    box-sizing: border-box;
                }
                .testimonials-rebuild__card-company {
                    font-size: 18px !important;
                    font-weight: 700 !important;
                    color: #000000 !important;
                    margin-bottom: 8px !important;
                    }
                .testimonials-rebuild__rating {
                    display: none !important;
                }
                .testimonials-rebuild__quote-container {
                    position: relative;
                    flex-grow: 1;
                    margin-bottom: 20px;
                }
                .testimonials-rebuild__quote-open {
                    font-size: 32px !important;
                    font-weight: 700 !important;
                    color: #000000 !important;
                    line-height: 1 !important;
                    display: block !important;
                    margin: 8px 0 !important;
                    }
                .testimonials-rebuild__quote-close {
                    font-size: 32px !important;
                    font-weight: 700 !important;
                    color: #000000 !important;
                    line-height: 1 !important;
                    display: block !important;
                    margin: 8px 0 !important;
                    text-align: right !important;
                }
                .testimonials-rebuild__text {
                    color: #000000 !important;
                    font-size: 15px !important;
                    line-height: 1.65 !important;
                    margin: 0 !important;
                    padding: 0 !important;
                    }
                .testimonials-rebuild__footer {
                    margin-top: auto;
                    border-top: none !important;
                    padding-top: 16px;
                }
                .testimonials-rebuild__author-name {
                    font-size: 15px !important;
                    font-weight: 700 !important;
                    color: #000000 !important;
                    }
                @keyframes testimonials-marquee {
                    0% {
                        transform: translateX(0);
                    }
                    100% {
                        transform: translateX(-50%);
                    }
                }
                </style>
                <div class="container">
                    <div class="max-w-1000-px mx-auto text-center tw-mb-6">
                        <span class="testimonials-rebuild__eyebrow">Don’t just take our word for it</span>
                        <h3 class="testimonials-rebuild__title">
                            Our clients’ <span>success stories</span> speak volumes about the impact of our services
                        </h3>
                    </div>
                </div>
                <div class="testimonials-rebuild__marquee-container">
                        <div class="testimonials-rebuild__track-marquee" aria-label="Client testimonials">
                            <!-- Card 1 -->
                            <article class="testimonials-rebuild__card">
                                <div>
                                    <div class="testimonials-rebuild__card-company">Happy Pique</div>
                                    <div class="testimonials-rebuild__quote-container">
                                        <span class="testimonials-rebuild__quote-open">“</span>
                                        <p class="testimonials-rebuild__text">
                                            Their SEO team was great and helped us start from scratch. No matter what product you
                                            search for on any medium, our website and products turn up. The...
                                        </p>
                                        <span class="testimonials-rebuild__quote-close">”</span>
                                    </div>
                                </div>
                                <div class="testimonials-rebuild__footer">
                                    <div class="testimonials-rebuild__author-name">Mr. Ansel Nishan</div>
                                </div>
                            </article>
                            <!-- Card 2 -->
                            <article class="testimonials-rebuild__card">
                                <div>
                                    <div class="testimonials-rebuild__card-company">Lensman Production</div>
                                    <div class="testimonials-rebuild__quote-container">
                                        <span class="testimonials-rebuild__quote-open">“</span>
                                        <p class="testimonials-rebuild__text">
                                            We wanted our business and website to pop up when people searched online. With good SEO
                                            and website optimization, the team helped us accurately rank high.
                                        </p>
                                        <span class="testimonials-rebuild__quote-close">”</span>
                                    </div>
                                </div>
                                <div class="testimonials-rebuild__footer">
                                    <div class="testimonials-rebuild__author-name">Mr. Indrakumar</div>
                                </div>
                            </article>
                            <!-- Card 3 -->
                            <article class="testimonials-rebuild__card">
                                <div>
                                    <div class="testimonials-rebuild__card-company">RB Dance Court</div>
                                    <div class="testimonials-rebuild__quote-container">
                                        <span class="testimonials-rebuild__quote-open">“</span>
                                        <p class="testimonials-rebuild__text">
                                            We needed our logo and brand name to be revisited as the initial ones were too long.
                                            Customers did not read our full names or pay attention to the...
                                        </p>
                                        <span class="testimonials-rebuild__quote-close">”</span>
                                    </div>
                                </div>
                                <div class="testimonials-rebuild__footer">
                                    <div class="testimonials-rebuild__author-name">Mr. Yuvaraj</div>
                                </div>
                            </article>
                            <!-- Card 4 -->
                            <article class="testimonials-rebuild__card">
                                <div>
                                    <div class="testimonials-rebuild__card-company">GRT Hotels &amp; Resorts</div>
                                    <div class="testimonials-rebuild__quote-container">
                                        <span class="testimonials-rebuild__quote-open">“</span>
                                        <p class="testimonials-rebuild__text">
                                            We have 2 hotel chains in Madurai, India and we found it hard to rank both of them
                                            online. Akkurate helped us optimize our Google My Business pages...
                                        </p>
                                        <span class="testimonials-rebuild__quote-close">”</span>
                                    </div>
                                </div>
                                <div class="testimonials-rebuild__footer">
                                    <div class="testimonials-rebuild__author-name">Mr. Ravi Balakrishnan</div>
                                </div>
                            </article>

                            <!-- Duplicated Card 1 -->
                            <article class="testimonials-rebuild__card">
                                <div>
                                    <div class="testimonials-rebuild__card-company">Happy Pique</div>
                                    <div class="testimonials-rebuild__quote-container">
                                        <span class="testimonials-rebuild__quote-open">“</span>
                                        <p class="testimonials-rebuild__text">
                                            Their SEO team was great and helped us start from scratch. No matter what product you
                                            search for on any medium, our website and products turn up. The...
                                        </p>
                                        <span class="testimonials-rebuild__quote-close">”</span>
                                    </div>
                                </div>
                                <div class="testimonials-rebuild__footer">
                                    <div class="testimonials-rebuild__author-name">Mr. Ansel Nishan</div>
                                </div>
                            </article>
                            <!-- Duplicated Card 2 -->
                            <article class="testimonials-rebuild__card">
                                <div>
                                    <div class="testimonials-rebuild__card-company">Lensman Production</div>
                                    <div class="testimonials-rebuild__quote-container">
                                        <span class="testimonials-rebuild__quote-open">“</span>
                                        <p class="testimonials-rebuild__text">
                                            We wanted our business and website to pop up when people searched online. With good SEO
                                            and website optimization, the team helped us accurately rank high.
                                        </p>
                                        <span class="testimonials-rebuild__quote-close">”</span>
                                    </div>
                                </div>
                                <div class="testimonials-rebuild__footer">
                                    <div class="testimonials-rebuild__author-name">Mr. Indrakumar</div>
                                </div>
                            </article>
                            <!-- Duplicated Card 3 -->
                            <article class="testimonials-rebuild__card">
                                <div>
                                    <div class="testimonials-rebuild__card-company">RB Dance Court</div>
                                    <div class="testimonials-rebuild__quote-container">
                                        <span class="testimonials-rebuild__quote-open">“</span>
                                        <p class="testimonials-rebuild__text">
                                            We needed our logo and brand name to be revisited as the initial ones were too long.
                                            Customers did not read our full names or pay attention to the...
                                        </p>
                                        <span class="testimonials-rebuild__quote-close">”</span>
                                    </div>
                                </div>
                                <div class="testimonials-rebuild__footer">
                                    <div class="testimonials-rebuild__author-name">Mr. Yuvaraj</div>
                                </div>
                            </article>
                            <!-- Duplicated Card 4 -->
                            <article class="testimonials-rebuild__card">
                                <div>
                                    <div class="testimonials-rebuild__card-company">GRT Hotels &amp; Resorts</div>
                                    <div class="testimonials-rebuild__quote-container">
                                        <span class="testimonials-rebuild__quote-open">“</span>
                                        <p class="testimonials-rebuild__text">
                                            We have 2 hotel chains in Madurai, India and we found it hard to rank both of them
                                            online. Akkurate helped us optimize our Google My Business pages...
                                        </p>
                                        <span class="testimonials-rebuild__quote-close">”</span>
                                    </div>
                                </div>
                                <div class="testimonials-rebuild__footer">
                                    <div class="testimonials-rebuild__author-name">Mr. Ravi Balakrishnan</div>
                                </div>
                            </article>
                        </div>
                    </div>
            </section>
            <!-- ============================ Testimonials section End ============================= -->
            <div class="position-relative z-1">
                <img alt="Shape" class="position-absolute w-100 tw-start-0 bottom-0 z-n1"
                    src="/assets/images/shapes/shape-image.png" />
                <!-- ===================================== Blog section start ============================== -->
            <section class="simple-blog-section py-5" style="background-color: #f8fafc;">
                <div class="container">
                    <div class="text-center mb-5">
                        <span class="text-uppercase fw-bold" style="letter-spacing: 0.1em; font-size: 14px; color: #002c7d;">Our Insights</span>
                        <h2 class="fw-bold mt-2" style="font-size: 2.5rem; color: #0f172a;">Latest Blogs & Articles</h2>
                    </div>
                    
                    <div class="swiper blog-swiper pb-5">
                        <div class="swiper-wrapper">
                        <!-- Card 1 -->
                        <div class="swiper-slide">
                            <div class="blog-card bg-white rounded-3 shadow-sm d-flex flex-column h-100" style="border: 1px solid #e2e8f0;">
                                <img src="https://images.pexels.com/photos/3182763/pexels-photo-3182763.jpeg?auto=compress&cs=tinysrgb&w=800" alt="Grow Your Business" style="width: 100%; height: 220px; object-fit: cover;">
                                <div class="p-4 d-flex flex-column flex-grow-1">
                                    <h3 class="fw-bold mb-3" style="font-size: 1.25rem; color: #0f172a;">Decoding the future: ai's impact on the industries</h3>
                                    <p class="text-muted mb-4 flex-grow-1" style="font-size: 0.95rem; line-height: 1.6;">Our dedicated patent sit amet consectetur adipiscing elit Ut et massa me. Aliquam hendrerit urna vitae mattis...</p>
                                    <a href="/blog" class="btn btn-primary mt-auto align-self-start px-4 py-2 text-white" style="background-color: #2563eb; border-color: #2563eb; font-weight: 600; border-radius: 8px;">Read more</a>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Card 2 -->
                        <div class="swiper-slide">
                            <div class="blog-card bg-white rounded-3 shadow-sm d-flex flex-column h-100" style="border: 1px solid #e2e8f0;">
                                <img src="https://images.pexels.com/photos/590016/pexels-photo-590016.jpeg?auto=compress&cs=tinysrgb&w=800" alt="SEO Tips" style="width: 100%; height: 220px; object-fit: cover;">
                                <div class="p-4 d-flex flex-column flex-grow-1">
                                    <h3 class="fw-bold mb-3" style="font-size: 1.25rem; color: #0f172a;">Innovation unleashed: behind the scenes our ai breakthroughs</h3>
                                    <p class="text-muted mb-4 flex-grow-1" style="font-size: 0.95rem; line-height: 1.6;">Our dedicated patent sit amet consectetur adipiscing elit Ut et massa me. Aliquam hendrerit urna vitae mattis...</p>
                                    <a href="/blog" class="btn btn-primary mt-auto align-self-start px-4 py-2 text-white" style="background-color: #2563eb; border-color: #2563eb; font-weight: 600; border-radius: 8px;">Read more</a>
                                </div>
                            </div>
                        </div>

                        <!-- Card 3 -->
                        <div class="swiper-slide">
                            <div class="blog-card bg-white rounded-3 shadow-sm d-flex flex-column h-100" style="border: 1px solid #e2e8f0;">
                                <img src="https://images.pexels.com/photos/3183197/pexels-photo-3183197.jpeg?auto=compress&cs=tinysrgb&w=800" alt="Marketing Trends" style="width: 100%; height: 220px; object-fit: cover;">
                                <div class="p-4 d-flex flex-column flex-grow-1">
                                    <h3 class="fw-bold mb-3" style="font-size: 1.25rem; color: #0f172a;">Decoding the future: ai's impact on the industries</h3>
                                    <p class="text-muted mb-4 flex-grow-1" style="font-size: 0.95rem; line-height: 1.6;">Our dedicated patent sit amet consectetur adipiscing elit Ut et massa me. Aliquam hendrerit urna vitae mattis...</p>
                                    <a href="/blog" class="btn btn-primary mt-auto align-self-start px-4 py-2 text-white" style="background-color: #2563eb; border-color: #2563eb; font-weight: 600; border-radius: 8px;">Read more</a>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Card 4 -->
                        <div class="swiper-slide">
                            <div class="blog-card bg-white rounded-3 shadow-sm d-flex flex-column h-100" style="border: 1px solid #e2e8f0;">
                                <img src="https://images.pexels.com/photos/3184291/pexels-photo-3184291.jpeg?auto=compress&cs=tinysrgb&w=800" alt="Content Strategy" style="width: 100%; height: 220px; object-fit: cover;">
                                <div class="p-4 d-flex flex-column flex-grow-1">
                                    <h3 class="fw-bold mb-3" style="font-size: 1.25rem; color: #0f172a;">Innovation unleashed: behind the scenes our ai breakthroughs</h3>
                                    <p class="text-muted mb-4 flex-grow-1" style="font-size: 0.95rem; line-height: 1.6;">Our dedicated patent sit amet consectetur adipiscing elit Ut et massa me. Aliquam hendrerit urna vitae mattis...</p>
                                    <a href="/blog" class="btn btn-primary mt-auto align-self-start px-4 py-2 text-white" style="background-color: #2563eb; border-color: #2563eb; font-weight: 600; border-radius: 8px;">Read more</a>
                                </div>
                            </div>
                        </div>

                        <!-- Card 5 -->
                        <div class="swiper-slide">
                            <div class="blog-card bg-white rounded-3 shadow-sm d-flex flex-column h-100" style="border: 1px solid #e2e8f0;">
                                <img src="https://images.pexels.com/photos/3184306/pexels-photo-3184306.jpeg?auto=compress&cs=tinysrgb&w=800" alt="Brand Identity" style="width: 100%; height: 220px; object-fit: cover;">
                                <div class="p-4 d-flex flex-column flex-grow-1">
                                    <h3 class="fw-bold mb-3" style="font-size: 1.25rem; color: #0f172a;">Building a powerful brand identity in the modern era</h3>
                                    <p class="text-muted mb-4 flex-grow-1" style="font-size: 0.95rem; line-height: 1.6;">Our dedicated patent sit amet consectetur adipiscing elit Ut et massa me. Aliquam hendrerit urna vitae mattis...</p>
                                    <a href="/blog" class="btn btn-primary mt-auto align-self-start px-4 py-2 text-white" style="background-color: #2563eb; border-color: #2563eb; font-weight: 600; border-radius: 8px;">Read more</a>
                                </div>
                            </div>
                        </div>

                        <!-- Card 6 -->
                        <div class="swiper-slide">
                            <div class="blog-card bg-white rounded-3 shadow-sm d-flex flex-column h-100" style="border: 1px solid #e2e8f0;">
                                <img src="https://images.pexels.com/photos/3184325/pexels-photo-3184325.jpeg?auto=compress&cs=tinysrgb&w=800" alt="Team Collaboration" style="width: 100%; height: 220px; object-fit: cover;">
                                <div class="p-4 d-flex flex-column flex-grow-1">
                                    <h3 class="fw-bold mb-3" style="font-size: 1.25rem; color: #0f172a;">The role of teamwork in driving digital innovation</h3>
                                    <p class="text-muted mb-4 flex-grow-1" style="font-size: 0.95rem; line-height: 1.6;">Our dedicated patent sit amet consectetur adipiscing elit Ut et massa me. Aliquam hendrerit urna vitae mattis...</p>
                                    <a href="/blog" class="btn btn-primary mt-auto align-self-start px-4 py-2 text-white" style="background-color: #2563eb; border-color: #2563eb; font-weight: 600; border-radius: 8px;">Read more</a>
                                </div>
                            </div>
                        </div>
                        </div> <!-- end swiper-wrapper -->
                        <div class="swiper-pagination blog-swiper-pagination position-absolute bottom-0 w-100"></div>
                    </div> <!-- end blog-swiper -->
                </div>
            </section>
                    
            <style>
            .blog-swiper {
                padding-bottom: 50px !important;
            }
            .blog-swiper-pagination {
                bottom: 0 !important;
            }
            .blog-swiper-pagination .swiper-pagination-bullet {
                width: 10px;
                height: 10px;
                background-color: #cbd5e1;
                opacity: 1;
                margin: 0 6px !important;
                transition: all 0.3s ease;
            }
            .blog-swiper-pagination .swiper-pagination-bullet-active {
                background-color: #2563eb;
                width: 24px;
                border-radius: 5px;
            }
            </style>
            <script>
            document.addEventListener('DOMContentLoaded', function() {
                if (typeof Swiper !== 'undefined') {
                    new Swiper('.blog-swiper', {
                        slidesPerView: 1,
                        spaceBetween: 24,
                        loop: true,
                        slidesPerGroup: 1,
                        autoplay: {
                            delay: 3000,
                            disableOnInteraction: false,
                        },
                        pagination: {
                            el: '.blog-swiper-pagination',
                            clickable: true,
                        },
                        breakpoints: {
                            768: {
                                slidesPerView: 2,
                                slidesPerGroup: 2,
                            },
                            992: {
                                slidesPerView: 3,
                                slidesPerGroup: 3,
                            }
                        }
                    });
                }
            });
            </script>
                <!-- ===================================== Blog section End ============================== -->
            </div>
                
                <section style="
  background: linear-gradient(135deg, #020617, #0f172a, #1e40af);
  padding: 20px 0 70px;
  color: white;
  text-align: center;
">

  <?php
  $clients = [
    "1.png","2.png","3.png","4.png","5.png","6.png","7.png","8.png","9.png","10.png","11.png","12.png","13.png","14.png","15.avif","16.png"
  ];
  ?>

  

  <!-- Heading -->
  <h2 class="fw-bold text-white px-4" style="font-size: clamp(2.5rem, 2rem + 2vw, 3.5rem); margin-bottom: 20px; letter-spacing: -0.03em; line-height: 1.2; ">
    Success shared with <br class="d-md-none">
    <span style="color: #60a5fa; position: relative; display: inline-block;">
      clients worldwide
      <span style="position: absolute; bottom: 8px; left: 0; width: 100%; height: 6px; background-color: #3b82f6; opacity: 0.3; z-index: -1;"></span>
    </span>
  </h2>

  <!-- Description -->
  <p class="px-4" style="
    max-width: 650px;
    margin: 0 auto 50px;
    color: #94a3b8;
    font-size: 16px;
    line-height: 1.6;
  ">
    We build strong relationships based on trust, transparency, and consistent
    quality — helping businesses grow and succeed together.
  </p>

  <!-- Infinite Loop Logo Slider -->
  <style>
  .marquee-wrapper {
      overflow: hidden;
      width: 100%;
      position: relative;
      display: flex;
      flex-direction: column;
      gap: 18px;
      margin-top: 40px;
  }
  .marquee-track {
      display: flex;
      gap: 18px;
      min-width: max-content;
      transition: animation-play-state 0.3s ease;
  }
  .marquee-track:hover {
      animation-play-state: paused;
  }
  .marquee-track-left {
      animation: marquee-left 40s linear infinite;
  }
  .marquee-track-right {
      animation: marquee-right 40s linear infinite;
  }
  @keyframes marquee-left {
      0% { transform: translateX(0); }
      100% { transform: translateX(-50%); }
  }
  @keyframes marquee-right {
      0% { transform: translateX(-50%); }
      100% { transform: translateX(0); }
  }
  .client-logo-box {
      background: #f8fafc;
      border-radius: 10px;
      padding: 12px;
      width: 200px;
      display: flex;
      justify-content: center;
      align-items: center;
      flex-shrink: 0;
      box-shadow: 0 4px 10px rgba(0,0,0,0.05);
  }
  .client-logo-box img {
      width: 100%;
      height: 55px;
      object-fit: contain;
  }
  </style>

  <?php
  // Split the 16 clients into 2 rows of 8
  $row1 = array_slice($clients, 0, 8);
  $row2 = array_slice($clients, 8, 8);
  
  // Duplicate the arrays multiple times so the infinite scroll never runs out of track
  // -50% translation means it will scroll exactly half of the array seamlessly
  $row1_loop = array_merge($row1, $row1, $row1, $row1);
  $row2_loop = array_merge($row2, $row2, $row2, $row2);
  ?>

  <div class="marquee-wrapper">
      <!-- First Row: Scrolls Right -->
      <div class="marquee-track marquee-track-right">
          <?php foreach ($row1_loop as $logo): ?>
              <div class="client-logo-box">
                  <img src="/assets/images/brand_logo/brand/<?php echo $logo; ?>" alt="Client">
              </div>
          <?php endforeach; ?>
      </div>

      <!-- Second Row: Scrolls Left -->
      <div class="marquee-track marquee-track-left">
          <?php foreach ($row2_loop as $logo): ?>
              <div class="client-logo-box">
                  <img src="/assets/images/brand_logo/brand/<?php echo $logo; ?>" alt="Client">
              </div>
          <?php endforeach; ?>
      </div>
  </div>

</section>
                
                
                <!-- ============================ Cta section start ========================== -->
                <section class="cta py-md-0 py-5">
                    <div class="container">
                        <div class="row gy-4 align-items-center">
                            <div class="col-md-6 d-md-block d-none">
                                <div class="pe-lg-2">
                                    <div class="position-relative">
                                        <img alt="Model" src="/assets/images/thumbs/model-img.png" />
                                        <img alt="Arrow shape"
                                            class="position-absolute top-0 tw-end-0 tw-mt-160-px animate__wobble__two"
                                            src="/assets/images/shapes/arrow-right-curve.png" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="ps-lg-4 w-100" style="max-width: 580px;">
                                    <div class="text-center text-md-start">
                                        <span class="d-inline-block text-main-600 tw-text-sm fw-bold tw-mb-4" style="letter-spacing: 0.1em; text-transform: uppercase;">
                                            Ready to Scale?
                                        </span>
                                    </div>
                                    <h2 class="fw-bold tw-mb-6 text-black" style="font-size: clamp(2.8rem, 2rem + 2.5vw, 4.2rem); line-height: 1.1; letter-spacing: -0.03em;">
                                        <span style="font-weight: 400; color: #4b5563;">Ready to Turn</span> <br>
                                        Marketing Into a <br>
                                        Growth Engine?
                                    </h2>
                                    <p class="text-neutral-500 tw-mb-8" style="font-size: 1.25rem; line-height: 1.6; max-width: 480px;">
                                        Let’s build a predictable revenue system that scales effortlessly with your business.
                                    </p>
                                    <a class="hover--translate-y-1 active--translate-y-scale-9 btn btn-main-two hover-style-two d-sm-inline-flex d-none align-items-center justify-content-center tw-gap-3 group active--translate-y-2 tw-px-9 tw-py-4 w-100 tw-rounded-2xl fw-bold text-white shadow-lg"
                                        style="font-size: 1.15rem; letter-spacing: 0.02em; transition: all 0.3s ease; max-width: 400px; background: linear-gradient(135deg, #0f172a, #1e1b4b);"
                                        data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="800"
                                        href="/register">
                                        <span class="button__label">Book a Strategy Call Today</span>
                                        <i class="ph-bold ph-arrow-right tw-text-xl group-hover:translate-x-1 tw-transition-transform tw-duration-300"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- ============================ Cta section End ========================== -->
        <section class="global-section">

  <div class="global-container">

    <!-- LEFT -->
    <div class="global-left">
      <!-- <p class="tag">• Global Presence</p> -->

      <h1>
        Trusted to Deliver Excellence <br>
        Across Geographies
      </h1>

      <button class="talk-btn">Talk to us ↗</button>
    </div>

    <!-- RIGHT GLOBE -->
    <div id="globeViz"></div>

  </div>

  <!-- LOCATION BAR -->
<div class="location-bar">

  <div class="loc" onclick="goToLocation(12.9249,80.1000)">
    <img src="assets/images/icons/india.png" class="flag">
    <div class="loc-text">
      Chennai <span>West Tambaram</span>
    </div>
  </div>

  <div class="loc" onclick="goToLocation(10.8231,78.6930)">
    <img src="assets/images/icons/india.png" class="flag">
    <div class="loc-text">
      Trichy <span>Woraiyur</span>
    </div>
  </div>

  <div class="loc" onclick="goToLocation(1.3691,103.8454)">
    <img src="assets/images/icons/singapore.png" class="flag">
    <div class="loc-text">
      Singapore <span>Ang Mo Kio</span>
    </div>
  </div>

</div>
</section>

<!-- LIBRARIES -->
<script src="https://unpkg.com/three"></script>
<script src="https://unpkg.com/globe.gl"></script>

<script>
const globe = Globe()
  (document.getElementById('globeViz'))
  .globeImageUrl('https://unpkg.com/three-globe/example/img/earth-blue-marble.jpg')
  .backgroundColor('rgba(0,0,0,0)');

// SIZE
globe.width(420);
globe.height(420);

// ROTATION
globe.controls().autoRotate = true;
globe.controls().autoRotateSpeed = 0.6;

// DISABLE ZOOM
globe.controls().enableZoom = false;
globe.controls().enablePan = false;

// FIX CAMERA
globe.pointOfView({ lat: 10, lng: 90, altitude: 2 });

// 🌍 ONLY YOUR 3 LOCATIONS
const locations = [
  {
    lat: 12.9249,
    lng: 80.1000,
    name: "Chennai - West Tambaram"
  },
  {
    lat: 10.8231,
    lng: 78.6930,
    name: "Trichy - Woraiyur"
  },
  {
    lat: 1.3691,
    lng: 103.8454,
    name: "Singapore - Ang Mo Kio"
  }
];

// ✅ CUSTOM IMAGE MARKERS
globe.htmlElementsData(locations)
  .htmlElement(d => {
    const el = document.createElement('div');
    el.className = 'marker';

    const img = document.createElement('img');
    img.src = 'assets/images/icons/location.png';
    img.className = 'marker-img';

    // OPTIONAL TOOLTIP
    img.title = d.name;

    el.appendChild(img);
    return el;
  });

// CLICK FUNCTION
function goToLocation(lat, lng) {
  globe.pointOfView({ lat: lat, lng: lng, altitude: 2 }, 1500);
}
</script>

<style>
.marker {
  transform: translate(-50%, -100%);
}

.marker-img {
  width: 18px;
  height: 18px;
  object-fit: contain;
  cursor: pointer;

  animation: float 2s ease-in-out infinite;
}

@keyframes float {
  0% { transform: translateY(0); }
  50% { transform: translateY(-6px); }
  100% { transform: translateY(0); }
}

/* FLAG IMAGE */
.flag {
  width: 38px;
  height: 38px;
  border-radius: 50%; /* makes it round */
  object-fit: cover;
  display: block;
  margin: 0;

}
/* SECTION */
.global-section {
  background: linear-gradient(135deg, #0c4a57, #0f6b78);
  color: #fff;
  padding: 80px 20px 0;
  position: relative;
  overflow: hidden;
}


/* CONTAINER */
.global-container {
  max-width: 1200px;
  margin: auto;
  display: flex;
  align-items: center;
  justify-content: center; /* FIXED */
  gap: 80px;
}

/* LEFT */
.global-left {
  flex: 1;
  max-width: 500px;
}

.global-left h1 {
  font-size: 40px;
  line-height: 1.4;
}

/* BUTTON */
.talk-btn {
  margin-top: 20px;
  padding: 12px 22px;
  border-radius: 30px;
  border: none;
  background: white;
  color: #0f6b78;
  cursor: pointer;
  font-weight: bold;
}

/* GLOBE */
#globeViz {
  flex: 1;
  width: 420px;
  height: 420px;
  display: flex;
  align-items: center;
  justify-content: center;
}

/* FORCE CANVAS FIT */
#globeViz canvas {
  width: 100% !important;
  height: 100% !important;
}

/* LOCATION BAR */
/* SECTION (LIGHT GREY THEME) */
.global-section {
  background: linear-gradient(135deg, #f5f7fa, #e4e9f0);
  color: #1a1a1a;
  padding: 40px 20px 0;
  position: relative;
  overflow: hidden;
}

/* SOFT BACKGROUND CIRCLE */
.global-section::after {
  content: "";
  position: absolute;
  right: -200px;
  top: -100px;
  width: 700px;
  height: 700px;
  background: rgba(0,0,0,0.03);
  border-radius: 50%;
  pointer-events: none;
}

/* TEXT */
.global-left h1 {
  font-size: clamp(2rem, 1.8rem + 1.5vw, 3.2rem);
  line-height: 1.2;
  color: #111827;
  font-weight: 800;
  letter-spacing: -0.03em;
  margin-bottom: 24px;
}

.tag {
  color: #6b7280;
  font-size: 13px;
  text-transform: uppercase;
  letter-spacing: 0.1em;
  font-weight: 700;
  margin-bottom: 12px;
}

/* BUTTON */
.talk-btn {
  margin-top: 10px;
  padding: 14px 28px;
  border-radius: 50px;
  border: none;
  background: #111; /* dark button */
  color: #fff;
  cursor: pointer;
  font-weight: 700;
  font-size: 15px;
  transition: all 0.3s ease;
  box-shadow: 0 4px 15px rgba(0,0,0,0.1);
}

.talk-btn:hover {
  background: #2563eb;
  transform: translateY(-2px);
  box-shadow: 0 6px 20px rgba(37,99,235,0.25);
}

/* LOCATION BAR */
.location-bar {
  margin-top: 30px;
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  border-top: 1px solid rgba(0,0,0,0.1);
}

/* LOCATION ITEM */
.loc {
  display: flex;
  align-items: center;
  justify-content: center; /* or flex-start if you want left aligned */
 
  padding: 20px;
  cursor: pointer;
  border-right: 1px solid rgba(0,0,0,0.08);
  transition: 0.3s;
}

.loc {
  display: flex;
  align-items: flex-start; /* align top */
  gap: 8px; /* small gap (set 0 if you want touching) */
}

/* TEXT COLUMN */
.loc-text {
  display: flex;
  flex-direction: column;
  line-height: 1.2;
}

/* MAIN NAME */
.loc-text strong {
  font-size: 14px;
}

/* SUB TEXT */
.loc-text span {
  font-size: 12px;
  opacity: 0.7;
}


.loc span {
  display: block;
  margin-top: 5px;
}

/* HOVER */
.loc:hover {
  background: rgba(0,0,0,0.04);
}
/* MOBILE */
@media(max-width: 900px){
  .global-container {
    flex-direction: column;
    text-align: center;
    position: relative;
  }

  .global-left {
    position: relative;
    z-index: 10; /* Ensures text and button stay clickable on top */
  }

  #globeViz {
    margin-top: -160px; /* Pulls the globe up behind the text */
    position: relative;
    z-index: 1; /* Sits behind the text layer */
  }

  .location-bar {
    grid-template-columns: repeat(2, 1fr);
    position: relative;
    z-index: 10;
    margin-top: -20px; /* Pulls the bar up slightly to tighten space */
  }
}

</style>
            <!-- ========================== Integrations Section Start ========================= -->
            <section class="integrations-section position-relative overflow-hidden" style="background-color: #ffffff; min-height: 600px; display: flex; flex-direction: column; align-items: center; padding-top: 100px; padding-bottom: 80px;">
                
                <div class="container position-relative z-1" style="text-align: center; margin-bottom: 60px;">
                    <div class="d-inline-flex align-items-center justify-content-center tw-mb-4 position-relative">
                        <span class="text-uppercase fw-bold" style="color: #8b5cf6; letter-spacing: 0.15em; font-size: 13px;">Integrations</span>
                        <!-- Decorative dots -->
                        <!-- <div style="position: absolute; right: -40px; top: 50%; transform: translateY(-50%); display: flex; align-items: center; gap: 8px;">
                            <div style="width: 6px; height: 6px; border-radius: 50%; background-color: #8b5cf6;"></div>
                            <div style="width: 16px; height: 16px; border-radius: 50%; border: 1px solid rgba(139, 92, 246, 0.4);"></div>
                        </div> -->
                    </div>
                    
                    <h2 class="fw-bold text-heading tw-mb-2" style="font-size: clamp(2rem, 3.5vw, 3rem); letter-spacing: -0.02em;">Incorporate our tool into</h2>
                    <h2 class="fw-bold" style="font-size: clamp(2rem, 3.5vw, 3rem); color: #3b82f6; letter-spacing: -0.02em;">your everyday tasks</h2>
                </div>

                <!-- Scrolling Logos Area -->
                <div class="logos-area position-relative w-100" style="height: 340px; z-index: 1; margin-top: 40px; margin-bottom: 60px;">
                    
                    <!-- Row 1 -->
                    <div class="marquee-row" style="top: 0;">
                        <div class="marquee-content" style="animation: marquee-left 45s linear infinite;">
                            <!-- set 1 -->
                            <div class="logo-box"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/react/react-original.svg" alt="React"></div>
                            <div class="logo-box"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/blender/blender-original.svg" alt="Blender"></div>
                            <div class="logo-box"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/magento/magento-original.svg" alt="Magento"></div>
                            <div class="logo-box"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/woocommerce/woocommerce-original.svg" alt="WooCommerce"></div>
                            <div class="logo-box"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/figma/figma-original.svg" alt="Figma"></div>
                            <div class="logo-box"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/photoshop/photoshop-plain.svg" alt="Photoshop"></div>
                            <div class="logo-box"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg" alt="JavaScript"></div>
                            <div class="logo-box"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/html5/html5-original.svg" alt="HTML5"></div>
                            <div class="logo-box"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/slack/slack-original.svg" alt="Slack"></div>
                            <div class="logo-box"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/github/github-original.svg" alt="GitHub"></div>
                            <!-- set 2 -->
                            <div class="logo-box"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/react/react-original.svg" alt="React"></div>
                            <div class="logo-box"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/blender/blender-original.svg" alt="Blender"></div>
                            <div class="logo-box"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/magento/magento-original.svg" alt="Magento"></div>
                            <div class="logo-box"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/woocommerce/woocommerce-original.svg" alt="WooCommerce"></div>
                            <div class="logo-box"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/figma/figma-original.svg" alt="Figma"></div>
                            <div class="logo-box"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/photoshop/photoshop-plain.svg" alt="Photoshop"></div>
                            <div class="logo-box"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg" alt="JavaScript"></div>
                            <div class="logo-box"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/html5/html5-original.svg" alt="HTML5"></div>
                            <div class="logo-box"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/slack/slack-original.svg" alt="Slack"></div>
                            <div class="logo-box"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/github/github-original.svg" alt="GitHub"></div>
                            <!-- set 3 -->
                            <div class="logo-box"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/react/react-original.svg" alt="React"></div>
                            <div class="logo-box"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/blender/blender-original.svg" alt="Blender"></div>
                            <div class="logo-box"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/magento/magento-original.svg" alt="Magento"></div>
                            <div class="logo-box"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/woocommerce/woocommerce-original.svg" alt="WooCommerce"></div>
                            <div class="logo-box"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/figma/figma-original.svg" alt="Figma"></div>
                            <div class="logo-box"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/photoshop/photoshop-plain.svg" alt="Photoshop"></div>
                            <div class="logo-box"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg" alt="JavaScript"></div>
                            <div class="logo-box"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/html5/html5-original.svg" alt="HTML5"></div>
                            <div class="logo-box"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/slack/slack-original.svg" alt="Slack"></div>
                            <div class="logo-box"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/github/github-original.svg" alt="GitHub"></div>
                        </div>
                    </div>

                    <!-- Row 2 -->
                    <div class="marquee-row" style="top: 180px;">
                        <div class="marquee-content" style="animation: marquee-right 50s linear infinite;">
                            <!-- set 1 -->
                            <div class="logo-box"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/aftereffects/aftereffects-plain.svg" alt="After Effects"></div>
                            <div class="logo-box"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/nodejs/nodejs-original.svg" alt="NodeJS"></div>
                            <div class="logo-box"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/typescript/typescript-original.svg" alt="TypeScript"></div>
                            <div class="logo-box"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/illustrator/illustrator-plain.svg" alt="Illustrator"></div>
                            <div class="logo-box"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/premierepro/premierepro-plain.svg" alt="Premiere Pro"></div>
                            <div class="logo-box"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/canva/canva-original.svg" alt="Canva"></div>
                            <div class="logo-box"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/vuejs/vuejs-original.svg" alt="Vue"></div>
                            <div class="logo-box"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/python/python-original.svg" alt="Python"></div>
                            <div class="logo-box"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/wordpress/wordpress-plain.svg" alt="WP"></div>
                            <div class="logo-box"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg" alt="PHP"></div>
                            <!-- set 2 -->
                            <div class="logo-box"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/aftereffects/aftereffects-plain.svg" alt="After Effects"></div>
                            <div class="logo-box"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/nodejs/nodejs-original.svg" alt="NodeJS"></div>
                            <div class="logo-box"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/typescript/typescript-original.svg" alt="TypeScript"></div>
                            <div class="logo-box"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/illustrator/illustrator-plain.svg" alt="Illustrator"></div>
                            <div class="logo-box"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/premierepro/premierepro-plain.svg" alt="Premiere Pro"></div>
                            <div class="logo-box"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/canva/canva-original.svg" alt="Canva"></div>
                            <div class="logo-box"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/vuejs/vuejs-original.svg" alt="Vue"></div>
                            <div class="logo-box"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/python/python-original.svg" alt="Python"></div>
                            <div class="logo-box"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/wordpress/wordpress-plain.svg" alt="WP"></div>
                            <div class="logo-box"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg" alt="PHP"></div>
                            <!-- set 3 -->
                            <div class="logo-box"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/aftereffects/aftereffects-plain.svg" alt="After Effects"></div>
                            <div class="logo-box"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/nodejs/nodejs-original.svg" alt="NodeJS"></div>
                            <div class="logo-box"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/typescript/typescript-original.svg" alt="TypeScript"></div>
                            <div class="logo-box"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/illustrator/illustrator-plain.svg" alt="Illustrator"></div>
                            <div class="logo-box"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/premierepro/premierepro-plain.svg" alt="Premiere Pro"></div>
                            <div class="logo-box"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/canva/canva-original.svg" alt="Canva"></div>
                            <div class="logo-box"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/vuejs/vuejs-original.svg" alt="Vue"></div>
                            <div class="logo-box"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/python/python-original.svg" alt="Python"></div>
                            <div class="logo-box"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/wordpress/wordpress-plain.svg" alt="WP"></div>
                            <div class="logo-box"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg" alt="PHP"></div>
                        </div>
                    </div>

                    <!-- Center Orb -->
                    <div class="center-orb-wrapper">
                        <div class="center-orb"></div>
                        <div class="center-icon">
                            <div style="width: 120px; height: 120px; border-radius: 50%; background: linear-gradient(135deg, #3b82f6, #8b5cf6); display: flex; align-items: center; justify-content: center; box-shadow: 0 10px 25px rgba(59, 130, 246, 0.4);">
                                <svg class="center-akkurate-logo" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 110 102.2" style="width: 70px; height: 70px; fill: white;">
                                    <path d="m54.9 1.4c-4.3 0-8.2 3.4-8.3 8-0.1 4.3 3.2 8.6 8.1 8.7 4.6 0.1 8.3-3.5 8.4-8 0.2-4.2-3.3-8.7-8.2-8.7z"/>
                                    <path d="m38.3 10.9c-1.2-2.4-3.7-4.1-6.8-4.1-2.6-0.1-5.2 1.2-6.8 3.5-1.7 2.3-2 5.8-0.4 8.5l14 23.6h-29.8c-3.8 0.1-7.1 3.1-7 7.5-0.1 4.3 3.2 8 7.1 8.2h32.5l12.1-20.9-14.9-26.3z"/>
                                    <path d="m101.6 42.5-29.6-0.1 14.1-23.8c1.5-2.8 1.3-6.3-1.1-8.9-1.4-1.6-3.3-2.7-5.6-2.7-2 0-4.8 0.9-6.4 3.3l-16.1 27 12.3 20.8h32.6c3.9 0 7.2-3.3 7.1-7.9-0.2-3.9-3.3-7.4-7.3-7.7z"/>
                                    <path d="m17.4 64.6c-4.4 0-8 3.4-8 7.9-0.1 4 2.8 8.7 8 8.8 4.5 0 8.1-3.4 8.2-7.7 0.2-4-2.9-8.9-8.2-9z"/>
                                    <path d="m92.7 64.7c-4.3-0.2-8.3 3.1-8.3 7.7-0.1 4.1 2.9 8.8 8.3 8.9 4.2-0.1 8-3.1 8-8 0-4.2-3.4-8.4-8-8.6z"/>
                                    <path d="m55.1 41.2-28.4 47.6c-1 1.4-1.3 3-1.1 4.9 0.4 2.9 3 6.5 7.4 6.8 2 0.1 5.3-0.4 7-3.2l14.4-24.7c-0.5-3.5-1.1-7.3-1.3-7.9-0.3-0.6-4.8-2.9-4.8-2.9s4.4-2.2 4.7-2.4c0.4-0.4 2.1-4.5 2.1-4.5s1.7 4 2 4.5c0.3 0.4 4.6 2.4 4.6 2.4s-4.1 2.2-4.6 2.7c-0.3 1.2-1.3 8.1-1.3 8.1l14.3 24.3c1.3 2.2 3.7 3.5 6.5 3.6 4 0.1 7.8-2.9 7.9-7.4 0-1.4-0.2-2.8-1.1-4.2l-28.3-47.7z"/>
                                </svg>
                            </div>
                        </div>
                    </div>

                    <!-- Gradient overlays for fade out effect at edges -->
                    <div style="position: absolute; top: 0; left: 0; width: 15%; height: 100%; background: linear-gradient(to right, #ffffff 0%, rgba(255,255,255,0) 100%); z-index: 2; pointer-events: none;"></div>
                    <div style="position: absolute; top: 0; right: 0; width: 15%; height: 100%; background: linear-gradient(to left, #ffffff 0%, rgba(255,255,255,0) 100%); z-index: 2; pointer-events: none;"></div>
                </div>

            </section>

            <style>
            .integrations-section {
                font-family: 'Inter', sans-serif;
            }
            .marquee-row {
                position: absolute;
                width: 100%;
                display: flex;
                overflow: hidden;
            }
            .marquee-content {
                display: flex;
                gap: 50px;
                padding-right: 50px;
                width: max-content;
            }
            .logo-box {
                width: 110px;
                height: 110px;
                background: #ffffff;
                border: 1px solid #e2e8f0;
                border-radius: 20px;
                display: flex;
                align-items: center;
                justify-content: center;
                transition: all 0.3s ease;
                box-shadow: 0 4px 10px rgba(0, 0, 0, 0.03);
            }
            
            /* Staggering alignment for a dynamic scattered look */
            .marquee-row:nth-child(1) .logo-box:nth-child(odd) {
                margin-top: 0px;
            }
            .marquee-row:nth-child(1) .logo-box:nth-child(even) {
                margin-top: 50px;
            }
            .marquee-row:nth-child(2) .logo-box:nth-child(odd) {
                margin-top: 50px;
            }
            .marquee-row:nth-child(2) .logo-box:nth-child(even) {
                margin-top: 0px;
            }

            .logo-box:hover {
                background: #f8fafc;
                transform: translateY(-5px);
                border-color: #cbd5e1;
                box-shadow: 0 12px 20px -3px rgba(0,0,0,0.1);
            }
            .logo-box img {
                width: 60px;
                height: 60px;
                object-fit: contain;
                opacity: 0.85;
                transition: opacity 0.3s ease, transform 0.3s ease;
            }
            .logo-box:hover img {
                opacity: 1;
                transform: scale(1.15);
            }

            @keyframes marquee-left {
                0% { transform: translateX(0); }
                100% { transform: translateX(calc(-100% / 3)); }
            }

            @keyframes marquee-right {
                0% { transform: translateX(calc(-100% / 3)); }
                100% { transform: translateX(0); }
            }

            .center-orb-wrapper {
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                width: 380px;
                height: 380px;
                z-index: 10;
                pointer-events: none;
            }
            .center-orb {
                width: 100%;
                height: 100%;
                border-radius: 50%;
                background: linear-gradient(135deg, rgba(255, 255, 255, 0.4) 0%, rgba(255, 255, 255, 0.05) 100%);
                backdrop-filter: blur(16px);
                -webkit-backdrop-filter: blur(16px);
                border: 1px solid rgba(255, 255, 255, 0.8);
                border-bottom: 1px solid rgba(255, 255, 255, 0.2);
                border-right: 1px solid rgba(255, 255, 255, 0.2);
                box-shadow: 0 8px 32px rgba(0, 0, 0, 0.05), inset 0 0 20px rgba(255, 255, 255, 0.5);
                position: absolute;
                top: 0;
                left: 0;
            }
            .center-icon {
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
            }
            
            /* Responsive adjustments */
            @media (max-width: 768px) {
                .logos-area {
                    height: 250px !important;
                    margin-bottom: 40px !important;
                }
                .center-orb-wrapper {
                    width: 250px;
                    height: 250px;
                }
                .marquee-row:nth-child(2) {
                    top: 140px !important;
                }
                .logo-box {
                    width: 80px;
                    height: 80px;
                }
                .logo-box img {
                    width: 45px;
                    height: 45px;
                }
                .marquee-content {
                    gap: 30px;
                    padding-right: 30px;
                }
                .marquee-row:nth-child(1) .logo-box:nth-child(even) {
                    margin-top: 30px;
                }
                .marquee-row:nth-child(2) .logo-box:nth-child(odd) {
                    margin-top: 30px;
                }
            }
            </style>
            <!-- ========================== Integrations Section End ========================= -->

            <!-- ========================== Sleek Black Footer Start ========================= -->
            <?php include 'partials/footer.php'; ?>
            <!-- ========================== Sleek Black Footer End ========================= -->
        </div>
    </div>
    <script>
const slides = [
  {
    title: "Accurate Digital Marketing Services",
    desc: "Get precise digital marketing strategies designed to deliver real results. Contact us today for your audit."
  },
  {
    title: "Accurate Strategies. Real Growth.",
    desc: "We create data-driven strategies that position your brand at the top. Experience measurable growth and performance."
  },
  {
    title: "Accuracy in Every Web Experience",
    desc: "Build meaningful connections through smart design and targeted strategies. Turn every visitor into a loyal customer."
  },
  {
    title: "Accurate Logos for Strong Brands",
    desc: "We design logos that reflect your brand identity and build trust. Make every impression powerful and memorable."
  }
];

  let index = 0;

  const title = document.getElementById("heroTitle");
  const desc = document.getElementById("heroDesc");

  setInterval(() => {
    // fade out
    title.classList.add("fade-out");
    desc.classList.add("fade-out");

    setTimeout(() => {
      index = (index + 1) % slides.length;

      title.innerText = slides[index].title;
      desc.innerText = slides[index].desc;

      // fade in
      title.classList.remove("fade-out");
      desc.classList.remove("fade-out");

      title.classList.add("fade-in");
      desc.classList.add("fade-in");

    }, 500);
  }, 2000);
</script>

<style>
    .fade-in {
  opacity: 1;
  transform: translateY(0);
  transition: all 0.5s ease;
}

.fade-out {
  opacity: 0;
  transform: translateY(20px);
  transition: all 0.5s ease;
}


</style>

<style>
.services-list-container {
  display: flex;
  flex-direction: column;
  gap: 18px; /* Increased gap between buttons */
}

.service-btnss {
  position: relative;
  display: flex;
  justify-content: space-between;
  align-items: center;

  padding: 18px 24px; /* Increased padding to make buttons bigger and taller */
  background: rgba(255, 255, 255, 0.02); /* Glass texture */
  border: 1px solid rgba(255, 255, 255, 0.15); /* Delicate default border */
  border-radius: 12px; /* Smooth rounded corners */
  cursor: pointer;
  overflow: hidden;

  color: white;
  transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
}

/* WHITE SLIDE */
.service-btnss::before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 0%;
  height: 100%;
  background: #ffffff;   /* ✅ PURE WHITE */
  transition: width 0.4s cubic-bezier(0.16, 1, 0.3, 1);
  z-index: 1;
}

/* HOVER */
.service-btnss:hover::before {
  width: 100%;
}

.service-btnss:hover {
  border-color: #ffffff;
  box-shadow: 0 10px 25px rgba(255, 255, 255, 0.08);
}

/* LEFT WRAPPER */
.service-btnss .left {
  display: flex;
  align-items: center;
  gap: 12px;
  position: relative;
  z-index: 2; /* Keeps icon and text above slide background */
  transition: color 0.3s ease;
}

/* HOVER TEXT/ICON COLOR CHANGE */
.service-btnss:hover,
.service-btnss:hover .left,
.service-btnss:hover .left i,
.service-btnss:hover .left span {
  color: #0b0c10 !important; /* Bold high-contrast text on white slide */
}

/* ARROW */
.service-btnss .arrow {
  position: relative;
  z-index: 2;
  transition: transform 0.4s cubic-bezier(0.16, 1, 0.3, 1);
}

/* ARROW DIAGONAL MOVE ON HOVER */
.service-btnss:hover .arrow {
  transform: translate(3px, -3px);
}
</style>

    <?php include 'partials/javascript.php'; ?>

    </body>
</html>



