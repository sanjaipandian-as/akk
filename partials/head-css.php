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
<style>
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
                font-size: 17px !important;
                font-weight: 500 !important;
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
