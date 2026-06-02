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

            /* ── Premium Navbar Styles ────────────────── */
            .header {
                position: sticky !important;
                top: 0 !important;
                z-index: 1000 !important;
                background: rgba(255, 255, 255, 0.85) !important;
                backdrop-filter: blur(16px) !important;
                -webkit-backdrop-filter: blur(16px) !important;
                border-bottom: 1px solid rgba(0, 0, 0, 0.06) !important;
                box-shadow: 0 4px 30px rgba(0, 0, 0, 0.01) !important;
                transition: all 0.3s ease !important;
                padding: 14px 0 !important;
            }
            
            @media (min-width: 992px) {
                .header-menu {
                    margin-left: auto !important;
                    margin-right: 48px !important;
                }
                .btn-header-cta {
                    display: inline-flex !important;
                }
            }
            
            .nav-menu {
                margin: 0 !important;
                padding: 0 !important;
                list-style: none !important;
                display: flex !important;
                align-items: center !important;
                gap: 36px !important; /* Elegant spacing */
            }
            
            .nav-menu__item {
                position: relative !important;
            }
            
            .nav-menu__link {
                font-family: 'Space Grotesk', sans-serif !important;
                font-size: 17px !important;
                font-weight: 600 !important;
                color: #0f172a !important; /* Deep Slate */
                text-decoration: none !important;
                padding: 6px 0 !important;
                display: inline-flex !important;
                align-items: center !important;
                gap: 6px !important;
                position: relative !important;
                transition: color 0.25s ease !important;
            }
            
            /* Underline animation */
            .nav-menu__link::after {
                content: '' !important;
                position: absolute !important;
                bottom: -2px !important;
                left: 0 !important;
                width: 100% !important;
                height: 2px !important;
                background: #002c7d !important; /* Dark Blue */
                transform: scaleX(0) !important;
                transform-origin: right !important;
                transition: transform 0.3s ease !important;
            }
            
            .nav-menu__link:hover {
                color: #002c7d !important;
            }
            
            .nav-menu__link:hover::after {
                transform: scaleX(1) !important;
                transform-origin: left !important;
            }
            
            /* Dropdown indicator icon alignment */
            .nav-menu__link i {
                font-size: 13px !important;
                color: #64748b !important;
                transition: transform 0.25s ease !important;
            }
            .nav-menu__item:hover .nav-menu__link i {
                transform: rotate(180deg) !important;
                color: #002c7d !important;
            }

            /* Services Mega Dropdown */
            .services-mega-dropdown {
                opacity: 0 !important;
                visibility: hidden !important;
                transform: translateX(-50%) translateY(12px) !important;
                transition: opacity 0.3s ease, transform 0.3s cubic-bezier(0.16, 1, 0.3, 1), visibility 0.3s !important;
                position: absolute !important;
                top: 100% !important;
                left: 50% !important;
                background: #ffffff !important;
                border: 1px solid #e2e8f0 !important;
                box-shadow: 0 20px 40px rgba(0,0,0,0.06) !important;
                border-radius: 20px !important;
                padding: 28px !important;
                display: flex !important;
                gap: 36px !important;
                min-width: 780px !important;
                z-index: 999 !important;
                margin-top: 10px !important;
            }
            
            .services-mega-parent:hover .services-mega-dropdown {
                opacity: 1 !important;
                visibility: visible !important;
                transform: translateX(-50%) translateY(0) !important;
            }
            
            .services-mega-col {
                flex: 1 !important;
            }
            
            .services-mega-heading {
                font-size: 13.5px !important;
                font-weight: 700 !important;
                color: #0f172a !important;
                text-transform: uppercase !important;
                letter-spacing: 0.05em !important;
                margin-bottom: 14px !important;
                border-bottom: 1.5px solid #f1f5f9 !important;
                padding-bottom: 8px !important;
            }
            
            .services-mega-list {
                list-style: none !important;
                padding: 0 !important;
                margin: 0 !important;
                display: flex !important;
                flex-direction: column !important;
                gap: 10px !important;
            }
            
            .services-mega-list a {
                font-size: 14px !important;
                font-weight: 500 !important;
                color: #475569 !important;
                text-decoration: none !important;
                transition: all 0.2s ease !important;
                display: inline-block !important;
            }
            
            .services-mega-list a:hover {
                color: #002c7d !important;
                transform: translateX(4px) !important;
            }
            
            /* Industries Dropdown */
            .industries-dropdown {
                opacity: 0 !important;
                visibility: hidden !important;
                transform: translateY(12px) !important;
                transition: opacity 0.3s ease, transform 0.3s cubic-bezier(0.16, 1, 0.3, 1), visibility 0.3s !important;
                background: #ffffff !important;
                border: 1px solid #e2e8f0 !important;
                box-shadow: 0 20px 40px rgba(0,0,0,0.06) !important;
                border-radius: 16px !important;
                min-width: 220px !important;
                padding: 10px !important;
                margin-top: 10px !important;
            }
            
            .nav-menu__item.has-submenu:hover .industries-dropdown {
                opacity: 1 !important;
                visibility: visible !important;
                transform: translateY(0) !important;
            }
            
            .nav-submenu__link {
                font-size: 14px !important;
                font-weight: 500 !important;
                color: #475569 !important;
                padding: 8px 12px !important;
                border-radius: 8px !important;
                transition: all 0.2s ease !important;
                text-decoration: none !important;
            }
            
            .nav-submenu__link:hover {
                background: #f1f5f9 !important;
                color: #002c7d !important;
                transform: translateX(4px) !important;
            }
            
            /* Premium CTA Button */
            .btn-header-cta {
                background: #002c7d !important;
                color: #ffffff !important;
                font-weight: 700 !important;
                font-size: 14.5px !important;
                padding: 10px 24px !important;
                border-radius: 100px !important;
                transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1) !important;
                text-decoration: none !important;
                border: 1.5px solid #002c7d !important;
                align-items: center !important;
                justify-content: center !important;
                box-shadow: 0 4px 14px rgba(0, 44, 125, 0.15) !important;
            }
            .btn-header-cta:hover {
                background: transparent !important;
                color: #002c7d !important;
                transform: translateY(-2px) !important;
                box-shadow: 0 6px 20px rgba(0, 44, 125, 0.2) !important;
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
        <header class="header bg-white transition-all">
            <div class="container container-two">
                <nav class="d-flex align-items-center justify-content-between position-relative">
                    <!-- Logo Start -->
                    <div class="logo">
                        <a class="link hover--translate-y-1 active--translate-y-scale-9" href="/">
                            <?php include 'partials/logo.php'; ?>
                        </a>
                    </div>
                    <!-- Logo End  -->
                    <!-- Menu Start  -->
                    <div class="header-menu d-lg-block d-none">
                        <!-- Nav menu Start -->
                        <ul class="nav-menu d-lg-flex align-items-center tw-gap-14">
                            <li class="nav-menu__item">
                                <a class="nav-menu__link hover--translate-y-1 tw-pe-5 text-heading tw-py-9 fw-semibold w-100" href="/">Home</a>
                            </li>
                            <li class="nav-menu__item has-submenu position-relative services-mega-parent">
                                <a class="nav-menu__link text-heading tw-py-9 fw-semibold w-100"
                                    href="javascript:void(0)">Services <i class="ph ph-caret-down"></i></a>
                                    <div class="services-mega-dropdown">
                                        <div class="services-mega-col">
                                            <h4 class="services-mega-heading">Digital Marketing</h4>
                                            <ul class="services-mega-list">
                                                <li><a href="#">Generative Engine Optimization(GEO)</a></li>
                                                <li><a href="#">Answer Engine Optimization(AEO)</a></li>
                                                <li><a href="#">Search Engine Optimization(SEO)</a></li>
                                                <li><a href="#">Google Ads</a></li>
                                                <li><a href="#">Meta Ads</a></li>
                                                <li><a href="#">Linkedin Ads</a></li>
                                                <li><a href="#">Social Media Marketing</a></li>
                                                <li><a href="#">Youtube Marketing</a></li>
                                                <li><a href="#">Google My Business Page</a></li>
                                            </ul>
                                        </div>
                                        <div class="services-mega-col">
                                            <h4 class="services-mega-heading">Website Development</h4>
                                            <ul class="services-mega-list">
                                                <li><a href="#">App Development</a></li>
                                                <li><a href="#">Website Development</a></li>
                                                <li><a href="#">Web Application</a></li>
                                                <li><a href="#">CMS Development</a></li>
                                                <li><a href="#">E-Commerce Service</a></li>
                                                <li><a href="#">Website Design</a></li>
                                            </ul>
                                        </div>
                                        <div class="services-mega-col">
                                            <h4 class="services-mega-heading">Branding</h4>
                                            <ul class="services-mega-list">
                                                <li><a href="#">Logo Design</a></li>
                                                <li><a href="#">Content Creation</a></li>
                                                <li><a href="#">UI/UX Design</a></li>
                                                <li><a href="#">Motion Graphics</a></li>
                                                <li><a href="#">Explainer Video</a></li>
                                                <li><a href="#">Corporate Video</a></li>
                                                <li><a href="#">Reels Making</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li class="nav-menu__item has-submenu position-relative">
                                    <a class="nav-menu__link text-heading tw-py-9 fw-semibold w-100"
                                        href="javascript:void(0)">Industries <i class="ph ph-caret-down"></i></a>
                                    <ul
                                        class="industries-dropdown nav-submenu scroll-sm position-absolute tw-start-0 top-100 tw-w-max tw-rounded-md overflow-y-auto tw-p-2 tw-mt-4 tw-duration-200 tw-z-99">
                                        <li class="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
                                            <a class="nav-submenu__link text-heading fw-semibold w-100 d-block tw-py-2 tw-px-305 tw-rounded" href="#">B2B Marketing</a>
                                        </li>
                                        <li class="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
                                            <a class="nav-submenu__link text-heading fw-semibold w-100 d-block tw-py-2 tw-px-305 tw-rounded" href="#">Eduction</a>
                                        </li>
                                        <li class="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
                                            <a class="nav-submenu__link text-heading fw-semibold w-100 d-block tw-py-2 tw-px-305 tw-rounded" href="#">Healthcare</a>
                                        </li>
                                        <li class="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
                                            <a class="nav-submenu__link text-heading fw-semibold w-100 d-block tw-py-2 tw-px-305 tw-rounded" href="#">Hospitality</a>
                                        </li>
                                        <li class="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
                                            <a class="nav-submenu__link text-heading fw-semibold w-100 d-block tw-py-2 tw-px-305 tw-rounded" href="#">Real Estate</a>
                                        </li>
                                        <li class="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
                                            <a class="nav-submenu__link text-heading fw-semibold w-100 d-block tw-py-2 tw-px-305 tw-rounded" href="#">Jewellery</a>
                                        </li>
                                        <li class="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
                                            <a class="nav-submenu__link text-heading fw-semibold w-100 d-block tw-py-2 tw-px-305 tw-rounded" href="#">Travel</a>
                                        </li>
                                        <li class="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
                                            <a class="nav-submenu__link text-heading fw-semibold w-100 d-block tw-py-2 tw-px-305 tw-rounded" href="#">Food</a>
                                        </li>
                                        <li class="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
                                            <a class="nav-submenu__link text-heading fw-semibold w-100 d-block tw-py-2 tw-px-305 tw-rounded" href="#">Clothing</a>
                                        </li>
                                        <li class="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
                                            <a class="nav-submenu__link text-heading fw-semibold w-100 d-block tw-py-2 tw-px-305 tw-rounded" href="#">Manufacture</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-menu__item">
                                    <a class="nav-menu__link hover--translate-y-1 text-heading tw-py-9 fw-semibold w-100"
                                        href="/project-details">Our Work</a>
                                </li>
                                <li class="nav-menu__item">
                                    <a class="nav-menu__link hover--translate-y-1 text-heading tw-py-9 fw-semibold w-100"
                                        href="/blog">Blog</a>
                                </li>
                                <li class="nav-menu__item">
                                    <a class="nav-menu__link hover--translate-y-1 text-heading tw-py-9 fw-semibold w-100"
                                        href="/about">About Us</a>
                                </li>
                                <!-- Contact Us moved to right side CTA button -->
                            </ul>
                        <!-- Nav menu End  -->
                    </div>
                    <!-- Menu End  -->
                    <!-- Header Right start -->
                    <div class="d-flex align-items-center tw-gap-3">
                        <a href="/contact" class="btn-header-cta d-lg-inline-block d-none">Contact Us</a>
                        <a href="/contact" class="btn-header-contact-icon d-lg-none d-inline-flex" title="Contact Us">
                            <i class="ph ph-phone"></i>
                        </a>
                        <button class="toggle-mobileMenu leading-none d-lg-none text-neutral-800 tw-text-9" type="button">
                            <i class="ph ph-list"></i>
                        </button>
                    </div>
                    <!-- Header Right End  -->
                </nav>
            </div>
        </header>
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
            <!-- =============================== Why Akkurate section start ============================== -->
            <section class="why-akkurate-section position-relative z-1 overflow-hidden" id="why-akkurate">
                <style>
                /* ── Trusted/Testimonials Section ─────────────────── */
                .why-akkurate-section {
                    background: #ffffff;
                    padding: 60px 0;
                    font-family: 'Inter', sans-serif;
                }
                .trusted-header-row {
                    display: flex;
                    justify-content: space-between;
                    align-items: center;
                    flex-wrap: wrap;
                    gap: 24px;
                    margin-bottom: 40px;
                }
                .trusted-title {
                    font-size: 38px;
                    font-weight: 800;
                    line-height: 1.15;
                    color: #0d0d14;
                    letter-spacing: -0.02em;
                    margin: 0;
                }
                .trusted-ratings {
                    display: flex;
                    align-items: center;
                    gap: 20px;
                    flex-wrap: wrap;
                }
                .rating-item {
                    display: flex;
                    flex-direction: column;
                    align-items: flex-start;
                    gap: 2px;
                }
                .rating-item-top {
                    display: flex;
                    align-items: center;
                    gap: 6px;
                    font-size: 16px;
                    font-weight: 700;
                    color: #0d0d14;
                }
                .rating-subtext {
                    font-size: 11.5px;
                    color: #71717a;
                    font-weight: 500;
                    margin-left: 22px;
                }
                .rating-divider {
                    width: 1px;
                    height: 36px;
                    background-color: #e2e8f0;
                    align-self: center;
                }
                .rating-item i.ph-star-fill {
                    color: #fbbf24;
                }
                .rating-item .score {
                    font-weight: 700;
                    margin-left: 4px;
                }
                .rating-item .star-icon-yellow {
                    color: #ffb800;
                    font-size: 15px;
                }

                /* Sub-nav Category bar */
                .trusted-subnav {
                    display: flex;
                    justify-content: space-between;
                    align-items: center;
                    margin-bottom: 48px;
                }
                .trusted-categories-pill {
                    background: #ffffff;
                    border: 1.5px solid #e8eaf0;
                    border-radius: 100px;
                    padding: 4px;
                    display: inline-flex;
                    align-items: center;
                    gap: 4px;
                }
                .category-btn {
                    background: transparent;
                    border: none;
                    border-radius: 100px;
                    padding: 8px 20px;
                    font-size: 13.5px;
                    font-weight: 600;
                    color: #71717a;
                    cursor: pointer;
                    transition: all 0.2s ease;
                }
                .category-btn.active {
                    background: #000000;
                    color: #ffffff;
                }
                .category-btn:hover:not(.active) {
                    color: #000000;
                }
                .trusted-nav-arrows {
                    display: flex;
                    gap: 8px;
                }
                .nav-arrow-btn {
                    width: 36px;
                    height: 36px;
                    border: 1.5px solid #e8eaf0;
                    border-radius: 50%;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    background: #ffffff;
                    color: #0d0d14;
                    cursor: pointer;
                    transition: all 0.2s ease;
                    font-size: 14px;
                }
                .nav-arrow-btn:hover {
                    background: #f4f4f5;
                    border-color: #cbd5e1;
                }

                .prev-arrow-inline,
                .next-arrow-inline {
                    display: none !important;
                }
                .trusted-categories-pill-wrapper {
                    display: flex;
                    align-items: center;
                    gap: 16px;
                }
                .trusted-nav-arrows-desktop {
                    display: flex;
                    gap: 8px;
                }

                @media (max-width: 768px) {
                    .trusted-nav-arrows-desktop {
                        display: none !important;
                    }
                    
                    .prev-arrow-inline,
                    .next-arrow-inline {
                        display: flex !important;
                        width: 32px;
                        height: 32px;
                        border: 1px solid #e8eaf0 !important;
                        background: #ffffff !important;
                        border-radius: 50% !important;
                        align-items: center !important;
                        justify-content: center !important;
                        font-size: 12px !important;
                        color: #0f172a !important;
                        cursor: pointer !important;
                        padding: 0 !important;
                        flex-shrink: 0 !important;
                        transition: all 0.2s ease !important;
                        box-shadow: 0 2px 4px rgba(0,0,0,0.02) !important;
                    }
                    .prev-arrow-inline:hover,
                    .next-arrow-inline:hover {
                        background: #f8fafc !important;
                        border-color: #cbd5e1 !important;
                    }

                    .trusted-categories-pill-wrapper {
                        display: flex !important;
                        align-items: center !important;
                        background: #ffffff !important;
                        border: 1.5px solid #e8eaf0 !important;
                        border-radius: 100px !important;
                        padding: 4px 6px !important;
                        gap: 8px !important;
                        width: auto !important;
                        max-width: 100% !important;
                        box-shadow: 0 4px 12px rgba(0,0,0,0.03) !important;
                        margin: 0 auto !important;
                    }

                    .trusted-categories-pill {
                        border: none !important;
                        background: transparent !important;
                        padding: 0 !important;
                        gap: 4px !important;
                        display: flex !important;
                        align-items: center !important;
                    }

                    .category-btn {
                        display: none !important;
                    }
                    
                    .category-btn.mobile-visible {
                        display: inline-block !important;
                        padding: 8px 16px !important;
                        font-size: 13px !important;
                        border-radius: 100px !important;
                    }

                    .category-btn.active {
                        background: #000000 !important;
                        color: #ffffff !important;
                        font-weight: 600 !important;
                    }

                    .category-btn.mobile-next {
                        background: transparent !important;
                        color: #0f172a !important;
                        font-weight: 500 !important;
                        cursor: pointer !important;
                    }
                    
                    .trusted-header-row {
                        justify-content: center !important;
                        text-align: center !important;
                    }
                    
                    .trusted-nav-group {
                        justify-content: center !important;
                        width: 100% !important;
                        margin-top: 12px !important;
                    }

                    .trusted-card {
                        min-height: auto !important;
                        padding: 36px 20px 24px 20px !important;
                    }
                }

                /* Video Column */
                .trusted-video-wrapper {
                    position: relative;
                    height: 100%;
                    min-height: 440px;
                    border-radius: 24px;
                    overflow: hidden;
                    box-shadow: 0 10px 30px rgba(0,0,0,0.04);
                }
                .trusted-video-img {
                    width: 100%;
                    height: 100%;
                    object-fit: cover;
                    position: absolute;
                    top: 0;
                    left: 0;
                }
                .trusted-video-play-btn {
                    position: absolute;
                    top: 50%;
                    left: 50%;
                    transform: translate(-50%, -50%);
                    width: 60px;
                    height: 60px;
                    background: rgba(0, 0, 0, 0.65);
                    backdrop-filter: blur(4px);
                    border-radius: 50%;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    cursor: pointer;
                    transition: all 0.3s ease;
                    border: none;
                }
                .trusted-video-play-btn::after {
                    content: "";
                    display: block;
                    width: 0;
                    height: 0;
                    border-style: solid;
                    border-width: 10px 0 10px 16px;
                    border-color: transparent transparent transparent #ffffff;
                    margin-left: 4px;
                }
                .trusted-video-play-btn:hover {
                    background: rgba(0, 0, 0, 0.8);
                    transform: translate(-50%, -50%) scale(1.08);
                }
                .trusted-video-overlay {
                    position: absolute;
                    bottom: 20px;
                    left: 20px;
                    right: 20px;
                    background: rgba(15, 15, 15, 0.6);
                    backdrop-filter: blur(12px);
                    -webkit-backdrop-filter: blur(12px);
                    border-radius: 99px;
                    padding: 10px 20px 10px 10px;
                    display: flex;
                    align-items: center;
                    gap: 12px;
                }
                .trusted-video-logo-container {
                    width: 44px;
                    height: 44px;
                    border-radius: 50%;
                    background: #ffffff;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    flex-shrink: 0;
                    overflow: hidden;
                    border: 1px solid rgba(255,255,255,0.2);
                }
                .trusted-video-logo-img {
                    width: 85%;
                    height: 85%;
                    object-fit: contain;
                }
                .trusted-video-name {
                    font-size: 15px;
                    font-weight: 700;
                    color: #ffffff;
                    margin-bottom: 1px;
                    line-height: 1.2;
                }
                .trusted-video-title {
                    font-size: 12px;
                    color: #cbd5e1;
                    line-height: 1.2;
                }

                /* Right Cards Grid */
                .trusted-cards-grid {
                    display: grid;
                    grid-template-columns: repeat(3, 1fr);
                    gap: 24px;
                }
                @media (max-width: 1200px) {
                    .trusted-cards-grid {
                        grid-template-columns: repeat(2, 1fr);
                    }
                }
                @media (max-width: 768px) {
                    .trusted-cards-grid {
                        grid-template-columns: 1fr;
                    }
                }
                .trusted-card {
                    background: #ffffff;
                    border: 1.5px solid #f1f5f9;
                    border-radius: 24px;
                    padding: 48px 24px 28px 24px;
                    position: relative;
                    box-shadow: 0 4px 20px rgba(0,0,0,0.02);
                    display: flex;
                    flex-direction: column;
                    justify-content: space-between;
                    min-height: 420px;
                    transition: all 0.3s ease;
                }
                .trusted-card:hover {
                    transform: translateY(-4px);
                    box-shadow: 0 12px 30px rgba(0,0,0,0.05);
                    border-color: #e2e8f0;
                }
                .trusted-card-badge {
                    position: absolute;
                    top: 0;
                    left: 50%;
                    transform: translate(-50%, -50%);
                    background: #ffffff;
                    border: 2px solid #e2e8f0;
                    border-radius: 50%;
                    width: 48px;
                    height: 48px;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    font-size: 14px;
                    font-weight: 700;
                    color: #ec4899;
                    box-shadow: 0 4px 10px rgba(0,0,0,0.03);
                }
                .trusted-card-text {
                    font-size: 14.5px;
                    color: #475569;
                    line-height: 1.6;
                    margin-bottom: 24px;
                }
                .trusted-card-text strong {
                    font-weight: 700;
                    color: #0f172a;
                }
                .trusted-card-author {
                    font-size: 15px;
                    font-weight: 700;
                    color: #0f172a;
                    margin-top: auto;
                }
                </style>

                <div class="container">
                    <!-- Title and Filter Row -->
                    <div class="trusted-header-row">
                        <h2 class="trusted-title">
                            Built for Founders<br>Who Care About Numbers
                        </h2>
                        <div class="trusted-nav-group" style="display: flex; align-items: center; gap: 16px; flex-wrap: wrap;">
                            <div class="trusted-categories-pill-wrapper">
                                <button class="nav-arrow-btn prev-arrow-inline"><i class="ph ph-caret-left"></i></button>
                                <div class="trusted-categories-pill">
                                    <button class="category-btn active">Ease of use</button>
                                    <button class="category-btn">All-in-One</button>
                                    <button class="category-btn">Scalability</button>
                                    <button class="category-btn">Customer Support</button>
                                </div>
                                <button class="nav-arrow-btn next-arrow-inline"><i class="ph ph-caret-right"></i></button>
                            </div>
                            <div class="trusted-nav-arrows-desktop">
                                <button class="nav-arrow-btn prev-arrow-desktop"><i class="ph ph-caret-left"></i></button>
                                <button class="nav-arrow-btn next-arrow-desktop"><i class="ph ph-caret-right"></i></button>
                            </div>
                        </div>
                    </div>

                    <!-- Main Columns layout -->
                    <div class="row gy-5 align-items-stretch">
                        <!-- LEFT: Video thumbnail -->
                        <div class="col-lg-4 col-md-5 col-12">
                            <div class="trusted-video-wrapper">
                                <img class="trusted-video-img" src="/assets/images/thumbs/about-team-img1.jpg" alt="Client testimonial video" />
                                <button class="trusted-video-play-btn"></button>
                                <div class="trusted-video-overlay">
                                    <div class="trusted-video-logo-container">
                                        <!-- Custom Sumo styled logo fallback or SVG -->
                                        <svg width="28" height="28" viewBox="0 0 32 32" fill="none">
                                            <circle cx="16" cy="16" r="16" fill="#000000"/>
                                            <text x="16" y="20" fill="#ffffff" font-size="10" font-weight="bold" font-family="Arial" text-anchor="middle">Sumo</text>
                                        </svg>
                                    </div>
                                    <div class="trusted-video-meta">
                                        <div class="trusted-video-name">Julianne Holt-Kailihiwa</div>
                                        <div class="trusted-video-title">CEO, Sumo Sushi & Bento</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- RIGHT: Testimonial cards -->
                        <div class="col-lg-8 col-md-7 col-12">
                            <p style="font-size: 16px; font-weight: 700; color: #0d0d14; text-transform: uppercase; letter-spacing: 0.05em; margin-bottom: 28px; margin-top: -6px; text-align: center; border: 2px solid #0d0d14; padding: 12px 20px; border-radius: 8px; display: block;">
                                Verified Customer Reviews & Feedback From Our Users
                            </p>
                            <div class="trusted-cards-grid" id="trusted-cards-container">
                                
                                <!-- Card 1 -->
                                <div class="trusted-card">
                                    <div class="trusted-card-badge">KH</div>
                                    <p class="trusted-card-text">
                                        Easy to use and learn by anyone, no proper training is required to adapt to Akkurate in your business. That's the nature of the application. We can access all the reports required to analyze and forecast sales. Overall, it's pretty good. <strong>We are very happy with it.</strong>
                                    </p>
                                    <div class="trusted-card-author">Khaja</div>
                                </div>

                                <!-- Card 2 -->
                                <div class="trusted-card">
                                    <div class="trusted-card-badge">ZO</div>
                                    <p class="trusted-card-text">
                                        Akkurate is an excellent POS system that streamlines restaurant operations effortlessly. <strong>Its user-friendly interface makes managing orders, inventory, and sales a breeze.</strong> The integration with delivery platforms is seamless. Overall, Akkurate is a reliable and efficient solution.
                                    </p>
                                    <div class="trusted-card-author">Zoltan B</div>
                                </div>

                                <!-- Card 3 -->
                                <div class="trusted-card">
                                    <div class="trusted-card-badge">OE</div>
                                    <p class="trusted-card-text">
                                        Akkurate is a very straightforward system, it's easy to use.
                                    </p>
                                    <div class="trusted-card-author">Oelbert H</div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <script>
                document.addEventListener("DOMContentLoaded", function() {
                    const testimonials = {
                        "Ease of use": [
                            {
                                badge: "KH",
                                text: "Easy to use and learn by anyone, no proper training is required to adapt to Akkurate in your business. That's the nature of the application. We can access all the reports required to analyze and forecast sales. Overall, it's pretty good. <strong>We are very happy with it.</strong>",
                                author: "Khaja"
                            },
                            {
                                badge: "ZO",
                                text: "Akkurate is an excellent POS system that streamlines restaurant operations effortlessly. <strong>Its user-friendly interface makes managing orders, inventory, and sales a breeze.</strong> The integration with delivery platforms is seamless. Overall, Akkurate is a reliable and efficient solution.",
                                author: "Zoltan B"
                            },
                            {
                                badge: "OE",
                                text: "Akkurate is a very straightforward system, it's easy to use.",
                                author: "Oelbert H"
                            }
                        ],
                        "All-in-One": [
                            {
                                badge: "AM",
                                text: "Having inventory, menu management, and multi-outlet billing in a single platform is a game-changer. <strong>It keeps all our sales and stock data perfectly synchronized in real-time.</strong> Highly recommended.",
                                author: "Amit M."
                            },
                            {
                                badge: "SL",
                                text: "Everything we need from online delivery integration to table management is built right in. <strong>No extra plugins or tricky configurations required.</strong> Simple and unified.",
                                author: "Sarah L."
                            },
                            {
                                badge: "DK",
                                text: "We switched from multiple disconnected tools to this all-in-one system, and it saved us hours of daily admin work.",
                                author: "David K."
                            }
                        ],
                        "Scalability": [
                            {
                                badge: "RC",
                                text: "We scaled from 1 to 15 branches in less than a year, and the system handled the expansion without a single hitch. <strong>Centralized menu control and consolidated reporting made it effortless.</strong>",
                                author: "Roberto C."
                            },
                            {
                                badge: "JN",
                                text: "Perfect for fast-growing chains. <strong>Adding new registers or franchises takes literally minutes.</strong> The cloud architecture is exceptionally stable during peak holiday sales.",
                                author: "Jessica N."
                            },
                            {
                                badge: "MB",
                                text: "Reliable cloud sync means even if the internet drops, our registers keep running and sync up later automatically.",
                                author: "Marcus B."
                            }
                        ],
                        "Customer Support": [
                            {
                                badge: "TA",
                                text: "The onboarding team walked us through every single step. <strong>Their 24/7 customer support is genuinely helpful and responsive.</strong> Any issue is resolved within minutes.",
                                author: "Tariq A."
                            },
                            {
                                badge: "EM",
                                text: "Customer service is top-notch. <strong>They treat our business like their own and listen to feature feedback.</strong> Extremely satisfied with the relationship.",
                                author: "Elena M."
                            },
                            {
                                badge: "HP",
                                text: "Prompt responses, helpful video guides, and friendly staff. Support has been fantastic since day one.",
                                author: "Harpreet P."
                            }
                        ]
                    };

                    const container = document.getElementById("trusted-cards-container");
                    const tabs = document.querySelectorAll(".category-btn");
                    const prevBtns = document.querySelectorAll(".prev-arrow-desktop, .prev-arrow-inline");
                    const nextBtns = document.querySelectorAll(".next-arrow-desktop, .next-arrow-inline");

                    let activeCategoryIndex = 0;
                    const categoriesKeys = Object.keys(testimonials);

                    function updateMobileTabs() {
                        tabs.forEach(t => {
                            t.classList.remove("mobile-visible", "mobile-next");
                        });
                        
                        tabs[activeCategoryIndex].classList.add("mobile-visible");
                        const nextIdx = (activeCategoryIndex + 1) % tabs.length;
                        tabs[nextIdx].classList.add("mobile-visible", "mobile-next");
                    }

                    function updateTestimonials(category) {
                        // Apply fade-out style effect
                        container.style.opacity = 0;
                        container.style.transform = "translateY(8px)";
                        container.style.transition = "all 0.25s ease";

                        setTimeout(() => {
                            container.innerHTML = "";
                            const data = testimonials[category] || [];
                            data.forEach(item => {
                                const card = document.createElement("div");
                                card.className = "trusted-card";
                                card.innerHTML = `
                                    <div class="trusted-card-badge">${item.badge}</div>
                                    <p class="trusted-card-text">${item.text}</p>
                                    <div class="trusted-card-author">${item.author}</div>
                                `;
                                container.appendChild(card);
                            });

                            // Fade-in
                            container.style.opacity = 1;
                            container.style.transform = "translateY(0)";
                        }, 250);
                    }

                    tabs.forEach((tab, index) => {
                        tab.addEventListener("click", () => {
                            tabs.forEach(t => t.classList.remove("active"));
                            tab.classList.add("active");
                            activeCategoryIndex = index;
                            updateTestimonials(tab.textContent.trim());
                            updateMobileTabs();
                        });
                    });

                    prevBtns.forEach(btn => {
                        btn.addEventListener("click", () => {
                            activeCategoryIndex = (activeCategoryIndex - 1 + categoriesKeys.length) % categoriesKeys.length;
                            const key = categoriesKeys[activeCategoryIndex];
                            tabs.forEach(t => {
                                if (t.textContent.trim() === key) {
                                    t.classList.add("active");
                                } else {
                                    t.classList.remove("active");
                                }
                            });
                            updateTestimonials(key);
                            updateMobileTabs();
                        });
                    });

                    nextBtns.forEach(btn => {
                        btn.addEventListener("click", () => {
                            activeCategoryIndex = (activeCategoryIndex + 1) % categoriesKeys.length;
                            const key = categoriesKeys[activeCategoryIndex];
                            tabs.forEach(t => {
                                if (t.textContent.trim() === key) {
                                    t.classList.add("active");
                                } else {
                                    t.classList.remove("active");
                                }
                            });
                            updateTestimonials(key);
                            updateMobileTabs();
                        });
                    });

                    updateMobileTabs();
                });
                </script>
            </section>
            <!-- =============================== Why Akkurate section end ============================== -->
            <!-- =============================== Choose Us section start ============================ -->
            <section class="choose-us position-relative z-1 overflow-hidden" style="padding-top: 50px; padding-bottom: 40px;">
                <style>
                    /* Responsive styling for Choose Us section floating logos */
                    #box-wrapper {
                        margin-left: 20px;
                        position: relative;
                        z-index: 1;
                    }
                    .floating-logo-container {
                        background: #ffffff;
                        display: flex;
                        justify-content: center;
                        align-items: center;
                        border-radius: 0.75rem; /* tw-rounded-xl equivalent */
                        position: absolute;
                        z-index: 1;
                        box-shadow: 0 15px 35px rgba(0,0,0,0.1);
                        transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
                    }
                    /* Default positions and sizes (Desktop / lg + xl) */
                    .floating-logo-1 {
                        width: 100px;
                        height: 100px;
                        top: 10%;
                        left: -15%;
                        padding: 15px;
                    }
                    .floating-logo-2 {
                        width: 100px;
                        height: 100px;
                        top: 15%;
                        right: -10%;
                        padding: 20px;
                    }
                    .floating-logo-3 {
                        width: 110px;
                        height: 110px;
                        top: 45%;
                        left: -10%;
                        padding: 20px;
                    }
                    .floating-logo-4 {
                        width: 120px;
                        height: 120px;
                        bottom: 15%;
                        right: -15%;
                        padding: 22px;
                    }
                    
                    /* Medium and Small Desktops / Tablets */
                    @media (max-width: 1199px) {
                        #box-wrapper {
                            margin-left: 0;
                            max-width: 450px;
                            margin-left: auto !important;
                            margin-right: auto !important;
                        }
                        .floating-logo-1 {
                            width: 80px;
                            height: 80px;
                            left: -10%;
                            padding: 12px;
                        }
                        .floating-logo-2 {
                            width: 80px;
                            height: 80px;
                            right: -8%;
                            padding: 15px;
                        }
                        .floating-logo-3 {
                            width: 90px;
                            height: 90px;
                            left: -8%;
                            padding: 15px;
                        }
                        .floating-logo-4 {
                            width: 100px;
                            height: 100px;
                            bottom: 15%;
                            right: -10%;
                            padding: 18px;
                        }
                    }
                    
                    /* Narrow Tablet portrait screens (like 768px in the screenshot) */
                    @media (max-width: 768px) {
                        #box-wrapper {
                            max-width: 400px;
                        }
                        .floating-logo-1 {
                            width: 70px;
                            height: 70px;
                            left: -8%;
                            padding: 10px;
                        }
                        .floating-logo-2 {
                            width: 70px;
                            height: 70px;
                            right: -6%;
                            padding: 12px;
                        }
                        .floating-logo-3 {
                            width: 85px;
                            height: 85px;
                            left: -6%;
                            padding: 14px;
                        }
                        .floating-logo-4 {
                            width: 95px;
                            height: 95px;
                            bottom: 15%;
                            right: -8%;
                            padding: 16px;
                        }
                    }
                </style>
                <div class="container">
                    <div class="row gy-4 gx-5">
                        <div class="col-lg-5 d-sm-block d-none order-lg-2">
                            <div class="position-relative z-1 overflow-visible" id="box-wrapper">
                                <img alt="Team Collaboration" class="w-100 object-fit-cover tw-rounded-3xl" style="height: 600px; box-shadow: 0 20px 40px rgba(0,0,0,0.08);"
                                    src="https://i.pinimg.com/736x/c4/f5/45/c4f545af2a8090cfa1fc68a58c7831dd.jpg" />
                                
                                <!-- Logo 1 (Top Left) -->
                                <div class="floating-logo-container floating-logo-1">
                                    <img alt="Figma" src="/assets/images/thumbs/choose-us-icon1.png" style="max-width: 100%; max-height: 100%; object-fit: contain;" />
                                </div>
                                
                                <!-- Logo 2 (Top Right) -->
                                <div class="floating-logo-container floating-logo-2">
                                    <img alt="Notion" src="/assets/images/thumbs/choose-us-icon2.png" style="max-width: 100%; max-height: 100%; object-fit: contain;" />
                                </div>
                                
                                <!-- Logo 3 (Center Left) -->
                                <div class="floating-logo-container floating-logo-3">
                                    <img alt="ChatGPT" src="/assets/images/thumbs/choose-us-icon3.png" style="max-width: 100%; max-height: 100%; object-fit: contain;" />
                                </div>
                                
                                <!-- Logo 4 (Bottom Right) -->
                                <div class="floating-logo-container floating-logo-4">
                                    <img alt="Analytics" src="/assets/images/thumbs/choose-us-icon4.png" style="max-width: 100%; max-height: 100%; object-fit: contain;" />
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 order-lg-1">
                            <div class="ps-lg-3 text-center d-flex flex-column align-items-center">
                                <span
                                    class="text-black fw-bold text-uppercase tw-mb-3" style="letter-spacing: 0.1em; font-size: 16px; font-family: 'Space Grotesk', sans-serif;">Why
                                    Choose Us</span>
                                <div class="max-w-672-px">
                                    <h3 class="fw-bold cursor-big tw-mb-4 text-black text-center" style="font-size: clamp(2rem, 1.6rem + 1.5vw, 2.7rem); line-height: 1.2; font-family: 'Space Grotesk', sans-serif; letter-spacing: -0.02em;">
                                        What We Do Differently <br class="d-none d-md-block"> (And Why It Matters)
                                    </h3>
                                    <p class="text-neutral-600 text-center max-w-500-px tw-mb-6 mx-auto" style="font-size: 14.5px; line-height: 1.6;">We act like an in-house growth lab that is aligned to your business goals. We are focused on lasting growth and not just vanity metrics.</p>
                                </div>
                                <div class="tw-mt-2 w-100">
                                    <style>
                                        .premium-square-card {
                                            background: linear-gradient(180deg, #ffffff 40%, #fff8f5 100%) !important;
                                            box-shadow: 0 10px 40px rgba(0,0,0,0.03);
                                            transition: transform 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275), box-shadow 0.4s ease, background 0.4s ease, border-color 0.4s ease;
                                            border: 1px solid rgba(255, 95, 31, 0.1) !important;
                                            min-height: auto;
                                            display: flex;
                                            flex-direction: column;
                                            justify-content: center;
                                            padding: 24px 16px !important;
                                        }
                                        @media (min-width: 768px) {
                                            .premium-square-card {
                                                min-height: 280px;
                                                padding: 32px 24px !important;
                                            }
                                        }
                                        @media (min-width: 1200px) {
                                            .premium-square-card {
                                                aspect-ratio: 1 / 1;
                                                min-height: auto;
                                            }
                                        }
                                        .premium-square-card:hover {
                                            transform: translateY(-10px);
                                            box-shadow: 0 20px 50px rgba(255, 95, 31, 0.08);
                                            background: linear-gradient(180deg, #ffffff 30%, #fff1eb 100%) !important;
                                            border-color: rgba(255, 95, 31, 0.25) !important;
                                        }
                                        .akkurate-highlight-box {
                                            background: transparent;
                                            border: none;
                                            padding: 0;
                                            margin-top: 14px;
                                        }
                                    </style>
                                    <div class="row g-2 align-items-center">
                                        <!-- Card 1 -->
                                        <div class="col-md-4 col-12" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="600" data-aos-delay="100">
                                            <div class="tw-rounded-3xl d-flex flex-column justify-content-center align-items-center text-center position-relative premium-square-card">
                                                <div class="w-100">
                                                    <span class="d-block tw-text-xs fw-bold text-uppercase tw-mb-3 text-neutral-400" style="letter-spacing: 0.1em;">The Industry</span>
                                                    <h6 class="tw-mb-4 text-neutral-500 fw-normal" style="font-size: 15px; line-height: 1.5;">Most agencies focus on campaigns.</h6>
                                                    <div class="tw-w-8 tw-mb-4 mx-auto tw-rounded-full" style="background: rgba(255, 95, 31, 0.2); height: 2px;"></div>
                                                    <div class="akkurate-highlight-box">
                                                        <span class="d-block tw-text-xs fw-bold text-uppercase tw-mb-2" style="letter-spacing: 0.1em; color: #ff5f1f;">Akkurate</span>
                                                        <p class="text-black fw-bold tw-mb-0" style="font-size: 17px; line-height: 1.3;">We focus on infrastructure.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Card 2 -->
                                        <div class="col-md-4 col-12" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="600" data-aos-delay="200">
                                           <div class="tw-rounded-3xl d-flex flex-column justify-content-center align-items-center text-center position-relative premium-square-card">
                                                <div class="w-100">
                                                    <span class="d-block tw-text-xs fw-bold text-uppercase tw-mb-3 text-neutral-400" style="letter-spacing: 0.1em;">The Industry</span>
                                                    <h6 class="tw-mb-4 text-neutral-500 fw-normal" style="font-size: 15px; line-height: 1.5;">Most talk impressions.</h6>
                                                    <div class="tw-w-8 tw-mb-4 mx-auto tw-rounded-full" style="background: rgba(255, 95, 31, 0.2); height: 2px;"></div>
                                                    <div class="akkurate-highlight-box">
                                                        <span class="d-block tw-text-xs fw-bold text-uppercase tw-mb-2" style="letter-spacing: 0.1em; color: #ff5f1f;">Akkurate</span>
                                                        <p class="text-black fw-bold tw-mb-0" style="font-size: 17px; line-height: 1.3;">We track revenue attribution.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Card 3 -->
                                        <div class="col-md-4 col-12" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="600" data-aos-delay="300">
                                              <div class="tw-rounded-3xl d-flex flex-column justify-content-center align-items-center text-center position-relative premium-square-card">
                                                <div class="w-100">
                                                    <span class="d-block tw-text-xs fw-bold text-uppercase tw-mb-3 text-neutral-400" style="letter-spacing: 0.1em;">The Industry</span>
                                                    <h6 class="tw-mb-4 text-neutral-500 fw-normal" style="font-size: 15px; line-height: 1.5;">Most deliver reports.</h6>
                                                    <div class="tw-w-8 tw-mb-4 mx-auto tw-rounded-full" style="background: rgba(255, 95, 31, 0.2); height: 2px;"></div>
                                                    <div class="akkurate-highlight-box">
                                                        <span class="d-block tw-text-xs fw-bold text-uppercase tw-mb-2" style="letter-spacing: 0.1em; color: #ff5f1f;">Akkurate</span>
                                                        <p class="text-black fw-bold tw-mb-0" style="font-size: 17px; line-height: 1.3;">We deliver insights & action plans.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex flex-column align-items-center text-center tw-mt-4" data-aos="fade-up"
                                    data-aos-anchor-placement="top-bottom" data-aos-duration="600">
                                    <h3 class="text-main-600 tw-mb-1" style="font-size: 4rem; font-weight: 800; line-height: 1;">1.3m</h3>
                                    <p class="text-main-two-600 fw-semibold tw-mb-0" style="font-size: 24px; line-height: 1.4; max-width: 600px;">Average revenue growth for per successful client</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- =============================== Choose Us section end ============================== -->
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
                    font-family: 'Inter', sans-serif !important;
                }
                .testimonials-rebuild__title {
                    color: #000000 !important;
                    font-size: clamp(2rem, 1.6rem + 1.7vw, 3.45rem) !important;
                    line-height: 1.15 !important;
                    margin: 0 !important;
                    font-weight: 400 !important;
                    font-family: 'Space Grotesk', sans-serif !important;
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
                    font-family: 'Inter', sans-serif !important;
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
                    font-family: Georgia, serif !important;
                }
                .testimonials-rebuild__quote-close {
                    font-size: 32px !important;
                    font-weight: 700 !important;
                    color: #000000 !important;
                    line-height: 1 !important;
                    display: block !important;
                    margin: 8px 0 !important;
                    font-family: Georgia, serif !important;
                    text-align: right !important;
                }
                .testimonials-rebuild__text {
                    color: #000000 !important;
                    font-size: 15px !important;
                    line-height: 1.65 !important;
                    margin: 0 !important;
                    padding: 0 !important;
                    font-family: 'Inter', sans-serif !important;
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
                    font-family: 'Inter', sans-serif !important;
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
          <section class="premium-blog-section">
              <div class="container-fluid px-4">
                  <div class="premium-blog-header">
                      <span class="premium-blog-eyebrow">Our Insights</span>
                      <h2 class="premium-blog-heading">Latest Blogs &amp; Articles</h2>
                  </div>

                  <div class="premium-blog-slider-viewport">
                      <div class="premium-blog-slider-track">
                          <!-- Card 1 -->
                          <div class="premium-blog-slide">
                              <article class="premium-blog-card">
                                  <div class="premium-blog-image-wrapper">
                                      <img src="https://images.pexels.com/photos/3182763/pexels-photo-3182763.jpeg" alt="Grow Your Business">
                                  </div>
                                  <div class="premium-blog-content">
                                      <span class="premium-blog-category">Business Growth</span>
                                      <h3 class="premium-blog-card-title">Grow Your Business</h3>
                                      <p class="premium-blog-card-text">Learn powerful strategies to scale your business online and reach global markets.</p>
                                      <a href="#" class="premium-blog-link">Read Article <i class="ph ph-arrow-right"></i></a>
                                  </div>
                              </article>
                          </div>

                          <!-- Card 2 -->
                          <div class="premium-blog-slide">
                              <article class="premium-blog-card">
                                  <div class="premium-blog-image-wrapper">
                                      <img src="https://images.pexels.com/photos/590016/pexels-photo-590016.jpeg" alt="SEO Tips 2026">
                                  </div>
                                  <div class="premium-blog-content">
                                      <span class="premium-blog-category">SEO &amp; Web</span>
                                      <h3 class="premium-blog-card-title">SEO Tips 2026</h3>
                                      <p class="premium-blog-card-text">Latest search engine optimization techniques to rank your website faster in search results.</p>
                                      <a href="#" class="premium-blog-link">Read Article <i class="ph ph-arrow-right"></i></a>
                                  </div>
                              </article>
                          </div>

                          <!-- Card 3 -->
                          <div class="premium-blog-slide">
                              <article class="premium-blog-card">
                                  <div class="premium-blog-image-wrapper">
                                      <img src="https://images.pexels.com/photos/3183197/pexels-photo-3183197.jpeg" alt="Marketing Trends">
                                  </div>
                                  <div class="premium-blog-content">
                                      <span class="premium-blog-category">Marketing</span>
                                      <h3 class="premium-blog-card-title">Marketing Trends</h3>
                                      <p class="premium-blog-card-text">Stay ahead of the curve with modern digital marketing trends and conversion strategies.</p>
                                      <a href="#" class="premium-blog-link">Read Article <i class="ph ph-arrow-right"></i></a>
                                  </div>
                              </article>
                          </div>

                          <!-- Card 4 -->
                          <div class="premium-blog-slide">
                              <article class="premium-blog-card">
                                  <div class="premium-blog-image-wrapper">
                                      <img src="https://images.pexels.com/photos/3184291/pexels-photo-3184291.jpeg" alt="Content Strategy">
                                  </div>
                                  <div class="premium-blog-content">
                                      <span class="premium-blog-category">Content Strategy</span>
                                      <h3 class="premium-blog-card-title">Content Marketing</h3>
                                      <p class="premium-blog-card-text">Craft high-impact content that resonates with your audience and drives organic growth.</p>
                                      <a href="#" class="premium-blog-link">Read Article <i class="ph ph-arrow-right"></i></a>
                                  </div>
                              </article>
                          </div>

                          <!-- Card 5 -->
                          <div class="premium-blog-slide">
                              <article class="premium-blog-card">
                                  <div class="premium-blog-image-wrapper">
                                      <img src="https://images.pexels.com/photos/3184306/pexels-photo-3184306.jpeg" alt="Brand Identity">
                                  </div>
                                  <div class="premium-blog-content">
                                      <span class="premium-blog-category">Branding</span>
                                      <h3 class="premium-blog-card-title">Brand Identity</h3>
                                      <p class="premium-blog-card-text">Build a memorable brand personality and visual identity that stands out in the industry.</p>
                                      <a href="#" class="premium-blog-link">Read Article <i class="ph ph-arrow-right"></i></a>
                                  </div>
                              </article>
                          </div>
                      </div>
                  </div>
              </div>
          </section>

          <style>
          .premium-blog-section {
              padding: 30px 0 90px 0;
              background-color: #ffffff;
              overflow: hidden;
          }
          .premium-blog-header {
              text-align: center;
              margin-bottom: 50px;
          }
          .premium-blog-eyebrow {
              font-family: 'Inter', sans-serif !important;
              text-transform: uppercase !important;
              font-size: 13px !important;
              font-weight: 700 !important;
              letter-spacing: 0.1em !important;
              color: #64748b !important;
              display: inline-block !important;
              margin-bottom: 12px !important;
          }
          .premium-blog-heading {
              font-family: 'Space Grotesk', sans-serif !important;
              font-size: clamp(2rem, 1.6rem + 1.7vw, 3rem) !important;
              font-weight: 700 !important;
              color: #000000 !important;
              letter-spacing: -0.02em !important;
              margin: 0 !important;
          }
          .premium-blog-slider-viewport {
              overflow: hidden;
              width: 100%;
              position: relative;
              padding: 20px 0;
          }
          .premium-blog-slider-track {
              display: flex;
              will-change: transform;
          }
          .premium-blog-slide {
              flex: 0 0 20%;
              padding: 0 10px;
              box-sizing: border-box;
              transition: transform 1s cubic-bezier(0.2, 0.8, 0.2, 1), opacity 1s cubic-bezier(0.2, 0.8, 0.2, 1);
          }
          @media (max-width: 1024px) {
              .premium-blog-slide {
                  flex: 0 0 33.333333%;
              }
          }
          @media (max-width: 600px) {
              .premium-blog-slide {
                  flex: 0 0 100%;
              }
          }
          .premium-blog-slide.active-center {
              transform: scale(1.06);
              z-index: 2;
          }
          .premium-blog-slide:not(.active-center) {
              transform: scale(0.94);
              opacity: 0.6;
          }
          .premium-blog-card {
              background: #ffffff;
              border: 1px solid #e2e8f0;
              border-radius: 12px;
              overflow: hidden;
              height: 100%;
              transition: all 0.35s cubic-bezier(0.16, 1, 0.3, 1);
              display: flex;
              flex-direction: column;
          }
          .premium-blog-card:hover {
              box-shadow: 0 15px 30px rgba(0, 0, 0, 0.04);
              border-color: #cbd5e1;
          }
          .premium-blog-image-wrapper {
              width: 100%;
              height: 150px;
              overflow: hidden;
              position: relative;
              background: #f1f5f9;
          }
          .premium-blog-image-wrapper img {
              width: 100%;
              height: 100%;
              object-fit: cover;
              transition: transform 0.5s ease;
          }
          .premium-blog-card:hover .premium-blog-image-wrapper img {
              transform: scale(1.04);
          }
          .premium-blog-content {
              padding: 16px;
              display: flex;
              flex-direction: column;
              flex-grow: 1;
          }
          .premium-blog-category {
              font-family: 'Inter', sans-serif !important;
              font-size: 11px !important;
              font-weight: 700 !important;
              text-transform: uppercase !important;
              color: #2563eb !important;
              letter-spacing: 0.05em !important;
              margin-bottom: 8px !important;
          }
          .premium-blog-card-title {
              font-family: 'Space Grotesk', sans-serif !important;
              font-size: 18px !important;
              font-weight: 600 !important;
              color: #000000 !important;
              margin: 0 0 8px 0 !important;
              line-height: 1.3 !important;
          }
          .premium-blog-card-text {
              font-family: 'Inter', sans-serif !important;
              font-size: 13.5px !important;
              color: #64748b !important;
              line-height: 1.5 !important;
              margin: 0 0 14px 0 !important;
              flex-grow: 1;
          }
          .premium-blog-link {
              font-family: 'Inter', sans-serif !important;
              font-size: 13.5px !important;
              font-weight: 600 !important;
              color: #000000 !important;
              text-decoration: none !important;
              display: inline-flex;
              align-items: center;
              gap: 6px;
              margin-top: auto;
              transition: gap 0.2s ease, color 0.2s ease !important;
          }
          .premium-blog-link i {
              font-size: 15px;
          }
          .premium-blog-link:hover {
              gap: 10px;
              color: #2563eb !important;
          }
          </style>

          <script>
          document.addEventListener("DOMContentLoaded", function() {
              const track = document.querySelector('.premium-blog-slider-track');
              if (!track) return;
              
              const slides = Array.from(track.children);
              const slideCount = slides.length;
              
              // Clone slides at both ends in the correct order to ensure smooth looping
              const clonesBefore = [];
              const clonesAfter = [];
              slides.forEach(slide => {
                  const cloneBefore = slide.cloneNode(true);
                  const cloneAfter = slide.cloneNode(true);
                  cloneBefore.classList.add('clone');
                  cloneAfter.classList.add('clone');
                  clonesBefore.push(cloneBefore);
                  clonesAfter.push(cloneAfter);
              });
              
              // Append after clones
              clonesAfter.forEach(clone => track.appendChild(clone));
              // Prepend before clones keeping original relative order
              clonesBefore.reverse().forEach(clone => {
                  track.insertBefore(clone, track.firstChild);
              });
              
              const allSlides = Array.from(track.children);
              let currentIndex = slideCount; // Start at the first original slide
              
              function getSlidesPerView() {
                  const width = window.innerWidth;
                  if (width <= 600) return 1;
                  if (width <= 1024) return 3;
                  return 5;
              }
              
              function updateSlider(instant = false) {
                  if (instant) {
                      track.style.transition = 'none';
                  } else {
                      track.style.transition = 'transform 1s cubic-bezier(0.2, 0.8, 0.2, 1)';
                  }
                  
                  const slidesPerView = getSlidesPerView();
                  const slideWidthPercent = 100 / slidesPerView;
                  const offsetIndex = currentIndex - Math.floor(slidesPerView / 2);
                  
                  track.style.transform = `translateX(-${offsetIndex * slideWidthPercent}%)`;
                  
                  allSlides.forEach((slide, idx) => {
                      if (idx === currentIndex) {
                          slide.classList.add('active-center');
                      } else {
                          slide.classList.remove('active-center');
                      }
                  });
              }
              
              updateSlider(true);
              
              let interval = setInterval(nextSlide, 1000);
              
              function nextSlide() {
                  if (currentIndex >= slideCount * 2) {
                      currentIndex = slideCount;
                      updateSlider(true);
                      track.offsetHeight; // Force reflow to apply instant jump immediately
                  }
                  
                  currentIndex++;
                  updateSlider();
              }
              
              window.addEventListener('resize', () => {
                  updateSlider(true);
              });
              
              const viewport = document.querySelector('.premium-blog-slider-viewport');
              if (viewport) {
                  viewport.addEventListener('mouseenter', () => clearInterval(interval));
                  viewport.addEventListener('mouseleave', () => {
                      clearInterval(interval);
                      interval = setInterval(nextSlide, 1000);
                  });
              }
          });
          </script>
                
                <!-- ===================================== Blog section End ============================== -->
                
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
  <h2 class="fw-bold text-white px-4" style="font-size: clamp(2.5rem, 2rem + 2vw, 3.5rem); margin-bottom: 20px; letter-spacing: -0.03em; line-height: 1.2; font-family: 'Space Grotesk', sans-serif;">
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
                                    <h2 class="fw-bold tw-mb-6 text-black" style="font-size: clamp(2.8rem, 2rem + 2.5vw, 4.2rem); line-height: 1.1; font-family: 'Space Grotesk', sans-serif; letter-spacing: -0.03em;">
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
  font-family: Arial;
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
  font-family: 'Space Grotesk', sans-serif;
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



