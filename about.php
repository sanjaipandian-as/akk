<!DOCTYPE html>
<html lang="en" class="heading-black">

<head>
    <?php include 'partials/title-meta.php'; ?>

    <?php include 'partials/head-css.php'; ?>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&display=swap" rel="stylesheet">

    <style>
        .about-revamp {
            background: #ffffff;
        }

        /* ── Light theme overrides ── */
        .about-revamp .text-white:not(.hero-section *):not(.hero-section),
        .about-revamp h2:not(.hero-section *),
        .about-revamp h3:not(.hero-section *),
        .about-revamp h4:not(.hero-section *) {
            color: #0f172a !important;
        }

        /* Keep hero texts white (dark overlay bg) */
        .about-revamp .hero-section .text-white,
        .about-revamp .hero-section h1,
        .about-revamp .hero-section a.text-white,
        .about-revamp .hero-section span.text-white {
            color: #ffffff !important;
        }

        .about-revamp .text-neutral-500 {
            color: #64748b !important;
        }

        .about-revamp .text-neutral-400 {
            color: #94a3b8 !important;
        }

        .about-revamp .feature-card {
            background: #ffffff;
        }

        .about-revamp .feature-card {
            border-left-color:  rgba(0,0,0,0.1) !important;
            border-right-color: rgba(0,0,0,0.1) !important;
        }

        .about-revamp .about-highlight {
            color: #4f8ef7;
        }

        .about-revamp .section-intro {
            background: radial-gradient(circle at 92% 40%, rgba(79, 142, 247, 0.12), transparent 40%), #ffffff;
        }

        .about-revamp .section-intro .feature-item {
            border-top: 1px solid rgba(0, 0, 0, 0.08);
        }

        .about-revamp .feature-icon-wrap {
            width: 72px;
            height: 72px;
            background: rgba(0, 0, 0, 0.06);
            transition: background 0.3s ease, transform 0.3s ease, color 0.3s ease;
            cursor: pointer;
        }

        .about-revamp .feature-icon-wrap:hover {
            background: #4f8ef7;
            color: #040506 !important;
            transform: scale(1.15);
        }

        .about-revamp .video-frame {
            border-radius: 28px;
            overflow: visible;
            position: relative;
        }

        .about-revamp .video-frame img {
            width: 100%;
            height: 420px;
            object-fit: cover;
            border-radius: 28px;
            display: block;
        }

        /* Floating arrow decoration */
        @keyframes arrowFloat {
            0%, 100% { transform: translateY(0px) rotate(-5deg); }
            50%       { transform: translateY(-18px) rotate(5deg); }
        }

        .about-revamp .section-deco-arrow {
            position: absolute;
            right: 4%;
            top: 50%;
            transform: translateY(-50%);
            width: clamp(120px, 13vw, 200px);
            opacity: 0.75;
            pointer-events: none;
            animation: arrowFloat 3.5s ease-in-out infinite;
        }

        .about-revamp .play-btn {
            position: absolute;
            right: -48px;
            top: 50%;
            transform: translateY(-50%);
            width: 96px;
            height: 96px;
            border-radius: 50%;
            background: #0a0b0f;
            color: #4f8ef7;
            border: 0;
            font-size: 44px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
            z-index: 2;
            box-shadow: 0 0 0 8px rgba(79,142,247,0.15);
        }

        .about-revamp .play-btn:hover {
            background: #4f8ef7;
            color: #040506;
            box-shadow: 0 0 0 12px rgba(79,142,247,0.2);
        }

        .about-revamp .video-watch-label {
            position: absolute;
            left: 40px;
            top: 50%;
            transform: translateY(-50%);
            color: #fff;
            font-family: 'Dancing Script', cursive, serif;
            font-size: clamp(24px, 3vw, 42px);
            font-style: italic;
            letter-spacing: 1px;
            pointer-events: none;
            text-shadow: 0 2px 12px rgba(0,0,0,0.5);
        }

        .about-revamp .our-features-title {
            font-size: clamp(62px, 11vw, 154px);
            line-height: 0.95;
            letter-spacing: 0.5px;
            text-align: center;
            transition: transform 0.12s ease-out;
            will-change: transform;
            display: inline-block;
            white-space: nowrap;
        }

        .about-revamp .features-magnetic-wrap {
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            height: 220px;
            cursor: crosshair;
        }

        .about-revamp .our-features-title .stroke {
            color: transparent;
            -webkit-text-stroke: 2px rgba(0, 0, 0, 0.15);
            text-stroke: 2px rgba(0, 0, 0, 0.15);
        }

        .about-revamp .feature-grid {
            /* borders handled by full-width hr elements outside the padded wrapper */
        }

        .about-revamp .feature-card {
            border-left: 1px solid rgba(255, 255, 255, 0.1);
            border-right: 1px solid rgba(255, 255, 255, 0.1);
            position: relative;
            padding: 40px 32px 60px;
        }

        .about-revamp .feature-card h3 {
            font-size: 18px;
            margin-bottom: 4px;
            transition: color 0.3s ease;
        }

        .about-revamp .feature-card:hover h3 {
            color: #4f8ef7 !important;
        }

        .about-revamp .feature-card .card-subtitle {
            font-size: 13px;
            margin-bottom: 28px;
        }

        .about-revamp .feature-card .card-img {
            width: 100%;
            max-width: 280px;
            height: 240px;
            object-fit: contain;
            display: block;
            margin: 0 auto 28px;
        }

        .about-revamp .feature-card .feature-desc {
            font-size: 13px;
            line-height: 1.7;
            max-width: 300px;
            margin: 0 auto;
        }

        .about-revamp .feature-arrow {
            position: absolute;
            left: 50%;
            bottom: -22px;
            transform: translateX(-50%) scale(0.6);
            width: 44px;
            height: 44px;
            border-radius: 999px;
            border: none;
            background: #4f8ef7;
            color: #050608;
            opacity: 0;
            pointer-events: none;
            transition: all 0.25s ease;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            z-index: 5;
        }

        .about-revamp .feature-card:hover .feature-arrow {
            opacity: 1;
            transform: translateX(-50%) scale(1);
            pointer-events: auto;
        }

        /* Gentle float animation for card images */
        @keyframes cardImgFloat {
            0%   { transform: translate(0px, 0px); }
            25%  { transform: translate(4px, -5px); }
            50%  { transform: translate(-3px, -8px); }
            75%  { transform: translate(-5px, -3px); }
            100% { transform: translate(0px, 0px); }
        }

        .about-revamp .feature-card .card-img {
            animation: cardImgFloat 5s ease-in-out infinite;
            transition: transform 0.1s ease;
        }

        @keyframes cardImgSpin {
            from { transform: scale(1.1) rotate(0deg); }
            to   { transform: scale(1.1) rotate(360deg); }
        }

        .about-revamp .feature-card:hover .card-img {
            animation: cardImgSpin 8s linear infinite;
        }

        @media (max-width: 991.98px) {
            .about-revamp .play-btn {
                width: 78px;
                height: 78px;
                font-size: 34px;
                right: 16px;
                transform: translate(0, -50%);
            }

            .about-revamp .feature-card {
                border-bottom: 1px solid rgba(255, 255, 255, 0.1);
                min-height: 520px;
            }
        }
    </style>
    <style>
              
/* HERO */
.pm-hero {
  margin: 20px;
  border-radius: 16px;
  padding: 35px 20px;
  margin-bottom:40px;
  text-align: center;
  color: #fff;
 background: linear-gradient(135deg, #0f172a, #1e3a8a);
  position: relative;
  overflow: hidden;
}

/* subtle circle effect */
.pm-hero::before,
.pm-hero::after {
  content: "";
  position: absolute;
  width: 300px;
  height: 300px;
  border-radius: 50%;
  background: rgba(255,255,255,0.05);
}

.pm-hero::before {
  left: -100px;
  bottom: -100px;
}

.pm-hero::after {
  right: -100px;
  top: -100px;
}

.pm-breadcrumb {
  font-size: 14px;
  color: #bbb;
}

.pm-active {
  color: #fff;
}

.pm-title {
  font-size: 42px;
  font-weight: 700;
  margin-top: 8px;
}
    </style>
</head>

<body>

    <?php include 'partials/common-content.php'; ?>

    <div id="smooth-wrapper">
        <!-- ==================== Header Two Start Here ==================== -->
          <?php include 'partials/header.php'; ?>
        <!-- ==================== Header Two End Here ==================== -->
        <div id="smooth-content" class="about-revamp">
            <!-- ==================== Hero Start Here ==================== -->
                                            
<section class="pm-hero">
  <div class="pm-hero-inner">
    <p class="pm-breadcrumb">
      Home <span class="pm-dot">•</span> 
      <span class="pm-active">About us</span>
    </p>
    <h1 class="pm-title">About us</h1>
  </div>
</section>
            <!-- ==================== Hero End Here ==================== -->
            <!-- ==================== Section Two Start ==================== -->
            <section class="section-intro py-120 position-relative" style="overflow: visible;">
                <!-- Floating arrow decoration — right empty space -->
                <img src="https://res.cloudinary.com/ddnxhn442/image/upload/v1769858821/arrow_png_htywsx.png"
                     class="section-deco-arrow"
                     alt="">
                <div class="container-fluid px-0">

                    <!-- "About Us" plain text — left side with ~20% gap -->
                    <p class="text-neutral-400 tw-text-sm fw-semibold text-uppercase letter-spacing-1 tw-mb-10" style="padding-left: 20%;">
                        <span class="about-highlight">+</span> Our Story
                    </p>

                    <!-- Content block: centered on page, text left-aligned -->
                    <div class="mx-auto" style="max-width: 900px; padding: 0 16px;">

                        <!-- Main Heading — smaller, text left-aligned -->
                        <h2 class="text-white tw-leading-tight tw-mb-5" style="font-size: clamp(22px, 2.6vw, 38px); text-align: left;">
                             Building Accurate Brands for a Digital Tomorrow
                            <span class="about-highlight">creativity and innovation</span>
                        </h2>

                        <!-- Paragraph — left-aligned text -->
                        <p class="text-neutral-500 tw-mb-10" style="font-size: 15px; line-height: 1.8; text-align: left;">
                            We’re more than just a digital services agency. Akkurate is your growth partner. Our mission is to help businesses of all sizes stand out in today’s market with accuracy in content, strategy, and communication. From local marketing to SEO, app development to brand identity, we create strategies that actually work.

From India to Singapore, we are helping clients boost their ROI and impressions every single day. Every campaign we design is backed by research, data, and creativity. Our team blends innovation with execution, ensuring your business grows sustainably. We believe in transparency, measurable results, and long-term impact. With us, your digital presence isn’t just built - it thrives with ACCURACY.
                        </p>

                        <!-- Horizontal Divider -->
                        <hr style="border-color: rgba(255,255,255,0.12); margin: 0 0 56px;">

                        <!-- 3 Icon Blocks: icon left, text right -->
                        <div class="row gy-5 justify-content-center feature-item">

                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <div class="d-flex align-items-start tw-gap-4">
                                    <span class="feature-icon-wrap rounded-circle d-inline-flex align-items-center justify-content-center text-main-600 tw-text-4xl flex-shrink-0">
                                        <i class="ph-bold ph-users-three"></i>
                                    </span>
                                    <div>
                                        <h4 class="text-white tw-mb-2" style="font-size: 17px;">Innovation with Purpose</h4>
                                        <p class="text-neutral-500 tw-mb-0" style="font-size: 14px; line-height: 1.6;">We don’t believe in trends for the sake of trends. Every idea we bring to the table has a clear purpose: to move your business forward. By blending creativity with strategy, we deliver solutions that make a lasting difference.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <div class="d-flex align-items-start tw-gap-4">
                                    <span class="feature-icon-wrap rounded-circle d-inline-flex align-items-center justify-content-center text-main-600 tw-text-4xl flex-shrink-0">
                                        <i class="ph-bold ph-lightbulb"></i>
                                    </span>
                                    <div>
                                        <h4 class="text-white tw-mb-2" style="font-size: 17px;">Transparency You Can Trust</h4>
                                        <p class="text-neutral-500 tw-mb-0" style="font-size: 14px; line-height: 1.6;">Trust is the foundation of all great partnerships. That’s why we believe in open communication, clear reporting, and honest advice. You’ll always know where your money is going and how your campaigns are performing.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <div class="d-flex align-items-start tw-gap-4">
                                    <span class="feature-icon-wrap rounded-circle d-inline-flex align-items-center justify-content-center text-main-600 tw-text-4xl flex-shrink-0">
                                        <i class="ph-bold ph-megaphone"></i>
                                    </span>
                                    <div>
                                        <h4 class="text-white tw-mb-2" style="font-size: 17px;">Results That Matter</h4>
                                        <p class="text-neutral-500 tw-mb-0" style="font-size: 14px; line-height: 1.6;">For us, success isn’t measured in likes or clicks. It’s measured in accurate leads, conversions, and business growth. We focus on the numbers that truly impact your bottom line and help you scale with confidence.</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- End 3 Icon Blocks -->

                    </div>
                </div>
            </section>
            <!-- ==================== Section Two End ==================== -->

            <!-- ==================== Section Three Start ==================== -->
            <section class="tw-pt-0 position-relative" style="padding-bottom: 0;">
                <div class="container">
                    <!-- Video frame: contained, rounded, centered -->
                    <div class="video-frame mx-auto" style="max-width: 820px; margin-bottom: 80px;">
                        <img src="/assets/images/thumbs/office-stock.jpg" alt="Watch the video">
                        <!-- Watch The Video overlay text -->
                        <span class="video-watch-label">Watch The Video</span>
                        <!-- Play button: horizontally centered at bottom edge -->
                        <button class="play-btn" type="button" aria-label="Play video">
                            <i class="ph-fill ph-play"></i>
                        </button>
                    </div>

                    <!-- OUR FEATURES: centered + cursor-magnetic -->
                    <div class="features-magnetic-wrap tw-mt-13" id="featuresMagneticWrap">
                        <h2 class="our-features-title fw-bold tw-mb-0 text-uppercase" id="featuresMagneticTitle">
                            <span class="about-highlight">OUR</span>
                            <span class="stroke"> FEATURES</span>
                        </h2>
                    </div>
                </div>
            </section>
            <!-- ==================== Section Three End ==================== -->

            <!-- ==================== Section Four Start ==================== -->
            <section style="padding-top: 0; padding-bottom: 120px;">
                <!-- Full-width top border line -->
                <div style="width:100%; height:1px; background:rgba(0,0,0,0.12);"></div>
                <!-- 15% gap on each side, overflow visible for arrow -->
                <div style="padding-left: 15%; padding-right: 15%; overflow: visible;">
                    <div class="row g-0 feature-grid" style="overflow: visible;">

                        <!-- Card 1: Brand Identity -->
                        <div class="col-lg-4">
                            <article class="feature-card text-center">
                                <h3 class="text-white">Brand Identity</h3>
                                <p class="card-subtitle text-neutral-500">2D &amp; 3D Animation</p>
                                <img class="card-img" src="https://res.cloudinary.com/ddnxhn442/image/upload/v1772683420/circle_3d_fankzr.png" alt="Brand identity">
                                <p class="feature-desc text-neutral-500 tw-mb-0">
                                    Proin efficitur, mauris vel condimentum pulvinar, velit orci consectetur
                                </p>
                                <button type="button" class="feature-arrow" aria-label="View brand identity">
                                    <i class="ph-bold ph-arrow-down-right"></i>
                                </button>
                            </article>
                        </div>

                        <!-- Card 2: Web Design (center — arrow always slightly peeking) -->
                        <div class="col-lg-4">
                            <article class="feature-card text-center">
                                <h3 class="text-white">Web Design</h3>
                                <p class="card-subtitle text-neutral-500">Art Direction</p>
                                <img class="card-img" src="https://res.cloudinary.com/ddnxhn442/image/upload/v1772683420/circle_3d_1_szxll0.png" alt="Web design">
                                <p class="feature-desc text-neutral-500 tw-mb-0">
                                    Proin efficitur, mauris vel condimentum pulvinar, velit orci consectetur
                                </p>
                                <button type="button" class="feature-arrow" aria-label="View web design">
                                    <i class="ph-bold ph-arrow-down-right"></i>
                                </button>
                            </article>
                        </div>

                        <!-- Card 3: Digital Platform -->
                        <div class="col-lg-4">
                            <article class="feature-card text-center">
                                <h3 class="text-white">Digital Platform</h3>
                                <p class="card-subtitle text-neutral-500">Product Development</p>
                                <img class="card-img" src="https://res.cloudinary.com/ddnxhn442/image/upload/v1772683420/circle_3d_2_ocoe49.png" alt="Digital platform">
                                <p class="feature-desc text-neutral-500 tw-mb-0">
                                    Proin efficitur, mauris vel condimentum pulvinar, velit orci consectetur
                                </p>
                                <button type="button" class="feature-arrow" aria-label="View digital platform">
                                    <i class="ph-bold ph-arrow-down-right"></i>
                                </button>
                            </article>
                        </div>

                    </div>
                </div>
                <!-- Full-width bottom border line -->
                <div style="width:100%; height:1px; background:rgba(0,0,0,0.12);"></div>
            </section>
            
            
                <div class="brand-slider-wrapper overflow-hidden">
                <div class="brand-slider swiper">
                    <div class="swiper-wrapper align-items-center">
                        <div class="swiper-slide me-0 tw-py-4 border tw-border-dashed border-neutral-200 border-top-0 tw-h-114-px border-end-0 tw-px-4 d-flex justify-content-center align-items-center"
                            data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="600">
                            <div class="text-center">
                                <img alt="Logo" class="" src="/assets/images/brand_logo/brand01.png" />
                            </div>
                        </div>
                        <div class="swiper-slide me-0 tw-py-4 border tw-border-dashed border-neutral-200 border-top-0 tw-h-114-px border-end-0 tw-px-4 d-flex justify-content-center align-items-center"
                            data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="700">
                            <div class="text-center">
                                <img alt="Logo" class="" src="/assets/images/brand_logo/brand02.png" />
                            </div>
                        </div>
                        <div class="swiper-slide me-0 tw-py-4 border tw-border-dashed border-neutral-200 border-top-0 tw-h-114-px border-end-0 tw-px-4 d-flex justify-content-center align-items-center"
                            data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="800">
                            <div class="text-center">
                                <img alt="Logo" class="" src="/assets/images/brand_logo/brand03.png" />
                            </div>
                        </div>
                        <div class="swiper-slide me-0 tw-py-4 border tw-border-dashed border-neutral-200 border-top-0 tw-h-114-px border-end-0 tw-px-4 d-flex justify-content-center align-items-center"
                            data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="600">
                            <div class="text-center">
                                <img alt="Logo" class="" src="/assets/images/brand_logo/brand04.png" />
                            </div>
                        </div>
                        <div class="swiper-slide me-0 tw-py-4 border tw-border-dashed border-neutral-200 border-top-0 tw-h-114-px border-end-0 tw-px-4 d-flex justify-content-center align-items-center"
                            data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="700">
                            <div class="text-center">
                                <img alt="Logo" class="" src="/assets/images/brand_logo/brand05.png" />
                            </div>
                        </div>
                        <div class="swiper-slide me-0 tw-py-4 border tw-border-dashed border-neutral-200 border-top-0 tw-h-114-px border-end-0 tw-px-4 d-flex justify-content-center align-items-center"
                            data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="800">
                            <div class="text-center">
                                <img alt="Logo" class="" src="/assets/images/brand_logo/brand06.png" />
                            </div>
                        </div>
                        <div class="swiper-slide me-0 tw-py-4 border tw-border-dashed border-neutral-200 border-top-0 tw-h-114-px border-end-0 tw-px-4 d-flex justify-content-center align-items-center"
                            data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="600">
                            <div class="text-center">
                                <img alt="Logo" class="" src="/assets/images/brand_logo/brand07.png" />
                            </div>
                        </div>
                        <div class="swiper-slide me-0 tw-py-4 border tw-border-dashed border-neutral-200 border-top-0 tw-h-114-px border-end-0 tw-px-4 d-flex justify-content-center align-items-center"
                            data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="700">
                            <div class="text-center">
                                <img alt="Logo" class="" src="/assets/images/brand_logo/brand08.png" />
                            </div>
                        </div>
                        <div class="swiper-slide me-0 tw-py-4 border tw-border-dashed border-neutral-200 border-top-0 tw-h-114-px border-end-0 tw-px-4 d-flex justify-content-center align-items-center"
                            data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="700">
                            <div class="text-center">
                                <img alt="Logo" class="" src="/assets/images/brand_logo/brand09.png" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ==================== Section Four End ==================== -->
            <!-- ========================== Sleek Black Footer Start ========================= -->
            <?php include 'partials/footer.php'; ?>
            <!-- ========================== Sleek Black Footer End ========================= -->
        </div>
    </div>

    <script>
    (function () {
        const wrap = document.getElementById('featuresMagneticWrap');
        const title = document.getElementById('featuresMagneticTitle');
        if (!wrap || !title) return;

        const strength = 45; // max px shift in any direction
        let rafId = null;
        let targetX = 0, targetY = 0;
        let currentX = 0, currentY = 0;

        function lerp(a, b, t) { return a + (b - a) * t; }

        function animate() {
            currentX = lerp(currentX, targetX, 0.18);
            currentY = lerp(currentY, targetY, 0.18);
            title.style.transform = `translate(${currentX}px, ${currentY}px)`;
            rafId = requestAnimationFrame(animate);
        }

        wrap.addEventListener('mousemove', function (e) {
            const rect = wrap.getBoundingClientRect();
            // Normalised offset from center: -1 to 1
            const nx = ((e.clientX - rect.left) / rect.width - 0.5) * 2;
            const ny = ((e.clientY - rect.top) / rect.height - 0.5) * 2;
            targetX = nx * strength;
            targetY = ny * strength;
        });

        wrap.addEventListener('mouseleave', function () {
            targetX = 0;
            targetY = 0;
        });

        animate(); // keep loop always running for smooth lerp
    })();
    </script>

    <?php include 'partials/javascript.php'; ?>

</body>

</html>



