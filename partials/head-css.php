<!-- Bootstrap -->
<link rel="stylesheet" href="/assets/css/bootstrap.min.css">
<!-- aos -->
<link rel="stylesheet" href="/assets/css/aos.css">
<!-- Swiper -->
<link rel="stylesheet" href="/assets/css/swiper-bundle.min.css">
<!-- Magnific -->
<link rel="stylesheet" href="/assets/css/magnific-popup.css">
<!-- Satoshi -->
<link rel="stylesheet" href="/assets/css/satoshi.css">
<!-- Main css -->
<link rel="stylesheet" href="/assets/css/main.css">

<!-- Brand Logo Styling -->
<style>
    .logo-wrapper {
        display: inline-flex;
        align-items: center;
        gap: 12px;
        text-decoration: none !important;
        vertical-align: middle;
    }
    .logo-svg {
        height: 48px;
        width: auto;
        flex-shrink: 0;
    }
    .logo-svg path {
        fill: #002c7d; /* Default Blue for light headers */
        transition: fill 0.3s ease;
    }
    .logo-text {
        display: inline-flex;
        flex-direction: column;
        line-height: 1.1;
        font-family: 'Space Grotesk', sans-serif;
        text-align: left;
    }
    .logo-text-main {
        font-size: 28px;
        font-weight: 800;
        letter-spacing: -0.02em;
        color: #0f172a; /* Dark color for light headers */
        transition: color 0.3s ease;
        line-height: 0.95;
    }
    .logo-text-sub {
        font-size: 11px;
        font-weight: 700;
        letter-spacing: 0.12em;
        color: #475569; /* Muted subtext color */
        transition: color 0.3s ease;
        margin-top: 3px;
    }

    /* Light logo on dark headers/footers */
    .custom-footer .logo-svg path,
    .footer-three .logo-svg path,
    .bg-black .logo-svg path,
    .bg-dark .logo-svg path {
        fill: #ffffff !important;
    }
    .custom-footer .logo-text-main,
    .footer-three .logo-text-main,
    .bg-black .logo-text-main,
    .bg-dark .logo-text-main {
        color: #ffffff !important;
    }
    .custom-footer .logo-text-sub,
    .footer-three .logo-text-sub,
    .bg-black .logo-text-sub,
    .bg-dark .logo-text-sub {
        color: #a3a3a3 !important;
    }
    
    /* Hover effect */
    .logo-wrapper:hover .logo-text-main {
        color: #3b82f6 !important;
    }

    /* Premium Header CTA Button */
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
        display: none !important;
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

    @media (min-width: 992px) {
        .btn-header-cta {
            display: inline-flex !important;
        }
    }

    /* Responsive Mobile Header Improvements */
    @media (max-width: 991.98px) {
        .toggle-mobileMenu {
            background: #f8fafc !important;
            border: 1px solid #e2e8f0 !important;
            border-radius: 12px !important;
            width: 44px !important;
            height: 44px !important;
            display: inline-flex !important;
            align-items: center !important;
            justify-content: center !important;
            color: #0f172a !important;
            font-size: 22px !important;
            transition: all 0.2s ease !important;
            box-shadow: 0 1px 3px rgba(0,0,0,0.02) !important;
            padding: 0 !important;
        }
        .toggle-mobileMenu:active {
            background: #f1f5f9 !important;
            transform: scale(0.95) !important;
        }
        .btn-header-contact-icon {
            background: #f8fafc !important;
            border: 1px solid #e2e8f0 !important;
            border-radius: 12px !important;
            width: 44px !important;
            height: 44px !important;
            display: inline-flex !important;
            align-items: center !important;
            justify-content: center !important;
            color: #0f172a !important;
            font-size: 20px !important;
            transition: all 0.2s ease !important;
            box-shadow: 0 1px 3px rgba(0,0,0,0.02) !important;
            padding: 0 !important;
            text-decoration: none !important;
        }
        .btn-header-contact-icon:active {
            background: #f1f5f9 !important;
            transform: scale(0.95) !important;
        }
    }
    
    @media (max-width: 575px) {
        .logo-svg {
            height: 44px !important;
        }
        .logo-text-main {
            font-size: 24px !important;
        }
        .logo-text-sub {
            font-size: 9px !important;
            letter-spacing: 0.12em !important;
            margin-top: 1px !important;
        }
        .logo-wrapper {
            gap: 10px !important;
        }
    }

    /* Dropdown Gap Bridge Fix (Prevents dropdowns from closing when mouse enters the gap) */
    .services-mega-dropdown::before {
        content: "";
        position: absolute;
        top: -20px;
        left: 0;
        right: 0;
        height: 25px;
        background: transparent;
    }
    .nav-submenu::before {
        content: "";
        position: absolute;
        top: -25px;
        left: 0;
        right: 0;
        height: 30px;
        background: transparent;
    }
</style>