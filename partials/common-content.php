<!--==================== Preloader Start ====================-->
<div class="preloader">
    <div class="cssload-loading"><i></i><i></i><i></i><i></i></div>
</div>
<!--==================== Preloader End ====================-->
<!--==================== Overlay Start ====================-->
<div class="overlay"></div>
<!--==================== Overlay End ====================-->
<!--==================== Sidebar Overlay End ====================-->
<div class="side-overlay"></div>
<!--==================== Sidebar Overlay End ====================-->
<!-- Custom Toast Message start -->
<div id="toast-container"></div>
<!-- Custom Toast Message End -->
<!-- ==================== Scroll to Top Removed (Overlapped with WhatsApp button) ==================== -->
<!-- Custom Cursor Start -->
<div class="cursor"></div>
<span class="dot"></span>
<!-- Custom Cursor End -->
<!-- ==================== Mobile Menu Start Here ==================== -->
<div class="mobile-menu d-lg-none d-block position-fixed tw-z-999 tw--translate-y-full">
    <div class="mobile-menu__logo-row">
        <a href="/">
            <?php include 'partials/logo.php'; ?>
        </a>
        <button class="close-button mobile-menu__close-btn" type="button">
            <i class="ph ph-x"></i>
        </button>
    </div>
    <div class="mobile-menu-container">
        <!-- Main Panel -->
        <div class="mobile-menu__panel mobile-menu__panel--main">
            <ul class="mobile-menu__list">
                <li class="nav-menu__item">
                    <a href="/">Home</a>
                </li>
                <li class="nav-menu__item">
                    <a href="javascript:void(0)" class="has-sub" data-target="services-sub">
                        Services <i class="ph ph-caret-right"></i>
                    </a>
                </li>
                <li class="nav-menu__item">
                    <a href="javascript:void(0)" class="has-sub" data-target="industries-sub">
                        Industries <i class="ph ph-caret-right"></i>
                    </a>
                </li>
                <li class="nav-menu__item">
                    <a href="/project-details">Our Work</a>
                </li>
                <li class="nav-menu__item">
                    <a href="/blog">Blog</a>
                </li>
                <li class="nav-menu__item">
                    <a href="/about">About Us</a>
                </li>
            </ul>
            
            <div class="mobile-menu__bottom-buttons">
                <a href="/contact" class="mobile-menu__btn mobile-menu__btn--primary">Contact Us</a>
            </div>
        </div>

        <!-- Services Sub-Panel -->
        <div class="mobile-menu__panel mobile-menu__panel--sub" id="services-sub">
            <div class="mobile-menu__sub-header">
                <button class="mobile-menu__back-btn" data-back="services-sub">
                    <i class="ph ph-caret-left"></i> Services
                </button>
            </div>
            
            <div class="mobile-menu__sub-content">
                <!-- Accordion 1: Digital Marketing -->
                <div class="mobile-menu__accordion">
                    <button class="mobile-menu__accordion-trigger" type="button">
                        <span>Digital Marketing</span> <i class="ph ph-caret-right"></i>
                    </button>
                    <div class="mobile-menu__accordion-content">
                        <ul class="mobile-menu__list mobile-menu__list--sub">
                            <li><a href="#">Generative Engine Optimization (GEO)</a></li>
                            <li><a href="#">Answer Engine Optimization (AEO)</a></li>
                            <li><a href="#">Search Engine Optimization (SEO)</a></li>
                            <li><a href="#">Google Ads</a></li>
                            <li><a href="#">Meta Ads</a></li>
                            <li><a href="#">Linkedin Ads</a></li>
                            <li><a href="#">Social Media Marketing</a></li>
                            <li><a href="#">Youtube Marketing</a></li>
                            <li><a href="#">Google My Business Page</a></li>
                        </ul>
                    </div>
                </div>
                
                <!-- Accordion 2: Website Development -->
                <div class="mobile-menu__accordion">
                    <button class="mobile-menu__accordion-trigger" type="button">
                        <span>Website Development</span> <i class="ph ph-caret-right"></i>
                    </button>
                    <div class="mobile-menu__accordion-content">
                        <ul class="mobile-menu__list mobile-menu__list--sub">
                            <li><a href="#">App Development</a></li>
                            <li><a href="#">Website Development</a></li>
                            <li><a href="#">Web Application</a></li>
                            <li><a href="#">CMS Development</a></li>
                            <li><a href="#">E-Commerce Service</a></li>
                            <li><a href="#">Website Design</a></li>
                        </ul>
                    </div>
                </div>
                
                <!-- Accordion 3: Branding -->
                <div class="mobile-menu__accordion">
                    <button class="mobile-menu__accordion-trigger" type="button">
                        <span>Branding</span> <i class="ph ph-caret-right"></i>
                    </button>
                    <div class="mobile-menu__accordion-content">
                        <ul class="mobile-menu__list mobile-menu__list--sub">
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
            </div>
        </div>

        <!-- Industries Sub-Panel -->
        <div class="mobile-menu__panel mobile-menu__panel--sub" id="industries-sub">
            <div class="mobile-menu__sub-header">
                <button class="mobile-menu__back-btn" data-back="industries-sub">
                    <i class="ph ph-caret-left"></i> Industries
                </button>
            </div>
            
            <div class="mobile-menu__sub-content">
                <ul class="mobile-menu__list">
                    <li><a href="#">B2B Marketing</a></li>
                    <li><a href="#">Education</a></li>
                    <li><a href="#">Healthcare</a></li>
                    <li><a href="#">Hospitality</a></li>
                    <li><a href="#">Real Estate</a></li>
                    <li><a href="#">Jewellery</a></li>
                    <li><a href="#">Travel</a></li>
                    <li><a href="#">Food</a></li>
                    <li><a href="#">Clothing</a></li>
                    <li><a href="#">Manufacture</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<style>
/* ── Sliding Panel Mobile Menu Styles ────────────────── */
.mobile-menu {
    position: fixed !important;
    top: 0 !important;
    left: 0 !important;
    width: 100% !important;
    max-width: 100% !important;
    height: 100vh !important;
    padding: 0 !important;
    overflow: hidden !important;
    background: #ffffff !important;
    transform: translateY(-100%); /* slide down from above */
    z-index: 1050 !important; /* ensure it overlays the sticky header */
}


.mobile-menu-container {
    position: relative !important;
    width: 100% !important;
    height: calc(100% - 80px) !important;
    overflow: hidden !important;
}

/* Header & Logo row inside mobile menu */
.mobile-menu__logo-row {
    padding: 16px 24px !important;
    display: flex !important;
    align-items: center !important;
    justify-content: space-between !important;
    border-bottom: 1px solid #f1f5f9 !important;
    background: #ffffff !important;
    height: 80px !important;
    box-sizing: border-box !important;
}

.mobile-menu__logo-row a {
    display: inline-block !important;
}

.mobile-menu__close-btn {
    background: #f8fafc !important;
    border: 1px solid #e2e8f0 !important;
    border-radius: 12px !important;
    width: 44px !important;
    height: 44px !important;
    display: flex !important;
    align-items: center !important;
    justify-content: center !important;
    color: #0f172a !important;
    font-size: 22px !important;
    cursor: pointer !important;
    transition: background-color 0.2s ease !important;
    position: relative !important;
    box-shadow: 0 1px 3px rgba(0,0,0,0.02) !important;
    padding: 0 !important;
}
.mobile-menu__close-btn:hover {
    background: #f1f5f9 !important;
    color: #0f172a !important;
}
.mobile-menu__close-btn:active {
    background: #e2e8f0 !important;
    transform: scale(0.95) !important;
}

.mobile-menu__panel {
    position: absolute !important;
    top: 0 !important;
    left: 0 !important;
    width: 100% !important;
    height: 100% !important;
    background: #ffffff !important;
    display: flex !important;
    flex-direction: column !important;
    transition: transform 0.35s cubic-bezier(0.16, 1, 0.3, 1) !important;
    z-index: 1 !important;
}

/* Main panel starts active */
.mobile-menu__panel--main {
    transform: translateX(0) !important;
    z-index: 2 !important;
}

.mobile-menu__panel--main.pushed {
    transform: translateX(-25%) !important;
}

/* Subpanels start off-screen right */
.mobile-menu__panel--sub {
    transform: translateX(100%) !important;
    z-index: 3 !important;
}

.mobile-menu__panel--sub.active {
    transform: translateX(0) !important;
}

/* Header & Logo row removed since we use header logo and toggle */

/* Sub-header row */
.mobile-menu__sub-header {
    background: #f8fafc !important;
    padding: 16px 24px !important;
    border-bottom: 1px solid #e2e8f0 !important;
    display: flex !important;
    align-items: center !important;
}

.mobile-menu__back-btn {
    background: none !important;
    border: none !important;
    font-family: 'Space Grotesk', sans-serif !important;
    font-size: 18px !important;
    font-weight: 700 !important;
    color: #0f172a !important;
    display: flex !important;
    align-items: center !important;
    gap: 8px !important;
    cursor: pointer !important;
    padding: 0 !important;
}
.mobile-menu__back-btn i {
    font-size: 18px !important;
    color: #0f172a !important;
}

/* Lists */
.mobile-menu__list {
    list-style: none !important;
    margin: 0 !important;
    padding: 0 !important;
    display: flex !important;
    flex-direction: column !important;
    overflow-y: auto !important;
    flex: 1 !important;
}

.mobile-menu__list li {
    border-bottom: 1px solid #f1f5f9 !important;
}

.mobile-menu__list a {
    display: flex !important;
    align-items: center !important;
    justify-content: space-between !important;
    padding: 18px 24px !important;
    font-family: 'Space Grotesk', sans-serif !important;
    font-size: 17px !important;
    font-weight: 700 !important;
    color: #0f172a !important;
    text-decoration: none !important;
    transition: background-color 0.2s ease !important;
}

.mobile-menu__list a:active {
    background-color: #f8fafc !important;
}

.mobile-menu__list a i {
    font-size: 18px !important;
    color: #64748b !important;
}

/* Sub-content scroll areas */
.mobile-menu__sub-content {
    overflow-y: auto !important;
    flex: 1 !important;
    display: flex !important;
    flex-direction: column !important;
}

.mobile-menu__section-title {
    background: #f8fafc !important;
    padding: 12px 24px !important;
    font-family: 'Space Grotesk', sans-serif !important;
    font-size: 13px !important;
    font-weight: 800 !important;
    text-transform: uppercase !important;
    color: #64748b !important;
    letter-spacing: 0.05em !important;
    border-bottom: 1px solid #f1f5f9 !important;
    border-top: 1px solid #f1f5f9 !important;
    margin-top: -1px !important;
}

.mobile-menu__list--sub li {
    border-bottom: 1px solid #f8fafc !important;
}

.mobile-menu__list--sub a {
    padding: 14px 24px !important;
    font-size: 15px !important;
    font-weight: 600 !important;
    color: #334155 !important;
}

/* Bottom CTA buttons */
.mobile-menu__bottom-buttons {
    padding: 20px 24px !important;
    border-top: 1px solid #f1f5f9 !important;
    display: flex !important;
    flex-direction: column !important;
    gap: 12px !important;
    background: #ffffff !important;
}

.mobile-menu__btn {
    display: flex !important;
    align-items: center !important;
    justify-content: center !important;
    height: 50px !important;
    border-radius: 12px !important;
    font-family: 'Space Grotesk', sans-serif !important;
    font-size: 16px !important;
    font-weight: 700 !important;
    text-decoration: none !important;
    transition: all 0.2s ease !important;
}

.mobile-menu__btn--outline {
    background: #ffffff !important;
    color: #0f172a !important;
    border: 1.5px solid #e2e8f0 !important;
}
.mobile-menu__btn--outline:active {
    background: #f8fafc !important;
    border-color: #cbd5e1 !important;
}

.mobile-menu__btn--primary {
    background: #002c7d !important;
    color: #ffffff !important;
    border: 1.5px solid #002c7d !important;
    box-shadow: 0 4px 12px rgba(0, 44, 125, 0.1) !important;
}
.mobile-menu__btn--primary:active {
    background: #001e57 !important;
    border-color: #001e57 !important;
    transform: translateY(1px) !important;
}

/* Accordion Styles */
.mobile-menu__accordion {
    border-bottom: 1px solid #f1f5f9 !important;
}

.mobile-menu__accordion-trigger {
    display: flex !important;
    align-items: center !important;
    justify-content: space-between !important;
    width: 100% !important;
    padding: 18px 24px !important;
    background: none !important;
    border: none !important;
    font-family: 'Space Grotesk', sans-serif !important;
    font-size: 17px !important;
    font-weight: 700 !important;
    color: #0f172a !important;
    text-align: left !important;
    cursor: pointer !important;
    transition: all 0.2s ease !important;
}

.mobile-menu__accordion-trigger:active {
    background-color: #f8fafc !important;
}

.mobile-menu__accordion-trigger i {
    font-size: 18px !important;
    color: #64748b !important;
    transition: transform 0.25s ease !important;
}

.mobile-menu__accordion.open .mobile-menu__accordion-trigger i {
    transform: rotate(90deg) !important;
    color: #002c7d !important;
}

.mobile-menu__accordion.open .mobile-menu__accordion-trigger {
    color: #002c7d !important;
    background-color: #f8fafc !important;
}

.mobile-menu__accordion-content {
    max-height: 0;
    overflow: hidden !important;
    transition: max-height 0.3s cubic-bezier(0.16, 1, 0.3, 1) !important;
    background: #fafcfd !important;
}

.mobile-menu__list--sub {
    overflow: hidden !important;
}

.mobile-menu__list--sub li {
    border-bottom: 1px solid rgba(241, 245, 249, 0.6) !important;
}

.mobile-menu__list--sub li:last-child {
    border-bottom: none !important;
}

.mobile-menu__list--sub a {
    padding: 14px 28px !important;
    font-family: 'Space Grotesk', sans-serif !important;
    font-size: 15px !important;
    font-weight: 600 !important;
    color: #475569 !important;
}
</style>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const hasSubLinks = document.querySelectorAll('.mobile-menu__list .has-sub');
    const backButtons = document.querySelectorAll('.mobile-menu__back-btn');
    const mainPanel = document.querySelector('.mobile-menu__panel--main');
    
    hasSubLinks.forEach(link => {
        link.addEventListener('click', (e) => {
            e.preventDefault();
            const targetId = link.getAttribute('data-target');
            const targetPanel = document.getElementById(targetId);
            if (targetPanel) {
                targetPanel.classList.add('active');
                if (mainPanel) {
                    mainPanel.classList.add('pushed');
                }
            }
        });
    });
    
    backButtons.forEach(btn => {
        btn.addEventListener('click', () => {
            const targetId = btn.getAttribute('data-back');
            const targetPanel = document.getElementById(targetId);
            if (targetPanel) {
                targetPanel.classList.remove('active');
                if (mainPanel) {
                    mainPanel.classList.remove('pushed');
                }
            }
        });
    });

    // Accordion Toggle Logic
    const accordions = document.querySelectorAll('.mobile-menu__accordion');
    accordions.forEach(acc => {
        const trigger = acc.querySelector('.mobile-menu__accordion-trigger');
        const content = acc.querySelector('.mobile-menu__accordion-content');
        
        trigger.addEventListener('click', () => {
            const isOpen = acc.classList.contains('open');
            
            // Close other accordions for accordion effect
            accordions.forEach(otherAcc => {
                if (otherAcc !== acc) {
                    otherAcc.classList.remove('open');
                    otherAcc.querySelector('.mobile-menu__accordion-content').style.maxHeight = null;
                }
            });
            
            if (isOpen) {
                acc.classList.remove('open');
                content.style.maxHeight = null;
            } else {
                acc.classList.add('open');
                content.style.maxHeight = content.scrollHeight + "px";
            }
        });
    });

    const overlay = document.querySelector('.side-overlay');
    const closeBtn = document.querySelector('.mobile-menu__close-btn');
    
    const resetPanels = () => {
        document.querySelectorAll('.mobile-menu__panel--sub').forEach(panel => {
            panel.classList.remove('active');
        });
        if (mainPanel) {
            mainPanel.classList.remove('pushed');
        }
        // Reset accordions to closed state
        accordions.forEach(acc => {
            acc.classList.remove('open');
            acc.querySelector('.mobile-menu__accordion-content').style.maxHeight = null;
        });
    };
    
    if (closeBtn) {
        closeBtn.addEventListener('click', () => {
            const burgerBtn = document.querySelector('.toggle-mobileMenu');
            if (burgerBtn) {
                burgerBtn.click(); // trigger toggleMobileMenu click to reverse timeline
            }
        });
    }
    
    if (overlay) {
        overlay.addEventListener('click', resetPanels);
    }
    
    // Listen for custom menu-closed event from custom-gsap.js
    document.addEventListener('menu-closed', resetPanels);
});
</script>
<!-- ==================== Mobile Menu End Here ==================== -->
