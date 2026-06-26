<!DOCTYPE html>
<html lang="en" class="heading-black">

<head>
    <?php include 'partials/title-meta.php'; ?>

    <?php include 'partials/head-css.php'; ?>
    
    <style>
        body { 
            background-color: #ffffff !important; 
            color: #1a1a1a; 
             
        }
        
            
        /* Web Dev Hero */
        .web-hero {
            padding: 40px 0;
            background: radial-gradient(ellipse at 50% -20%, rgba(240,244,255,0.6) 0%, #ffffff 70%);
            position: relative;
            overflow: hidden;
        }
        .hero-pill {
            display: inline-flex; align-items: center; gap: 10px;
            padding: 8px 20px; border-radius: 100px;
            background: #ffffff; border: 1px solid rgba(37,99,235,0.1);
            font-size: 13px; font-weight: 600; color: #2563eb;
            margin-bottom: 32px;
            box-shadow: 0 4px 12px rgba(37,99,235,0.05);
        }
        .web-title {
            font-size: clamp(1.5rem, 3vw, 2.5rem);
            font-weight: 800; letter-spacing: -0.04em;
            color: #050505; line-height: 1.1; margin-bottom: 24px;
        }
        .text-gradient {
            background: linear-gradient(135deg, #050505, #4a4a4a);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        
        /* Browser Mockup */
        .browser-mockup {
            border-radius: 20px;
            overflow: hidden;
            border: 1px solid rgba(0,0,0,0.08);
            box-shadow: 0 30px 60px -12px rgba(0, 0, 0, 0.08);
            background: #fff;
            margin-top: 60px;
            position: relative;
        }
        .browser-header {
            background: #fcfcfc; padding: 16px 20px;
            border-bottom: 1px solid rgba(0,0,0,0.05);
            display: flex; gap: 8px;
        }
        .browser-dot { width: 12px; height: 12px; border-radius: 50%; background: #e2e8f0; }
        .browser-dot.red { background: #ef4444; }
        .browser-dot.yellow { background: #eab308; }
        .browser-dot.green { background: #22c55e; }
        
        /* Bento Grid Services */
        .bento-section { padding: 60px 0; background: #fafafa; border-radius: 40px; margin: 0 20px; }
        .bento-card {
            background: #ffffff;
            border: 1px solid rgba(0,0,0,0.04);
            border-radius: 24px;
            padding: 48px;
            height: 100%;
            transition: all 0.4s ease;
            box-shadow: 0 10px 30px rgba(0,0,0,0.01);
            position: relative;
            overflow: hidden;
        }
        .bento-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.04);
            border-color: rgba(0,0,0,0.08);
        }
        .bento-icon {
            width: 64px; height: 64px;
            background: #f8fafc; border-radius: 16px;
            display: flex; justify-content: center; align-items: center;
            font-size: 28px; color: #050505; margin-bottom: 32px;
            border: 1px solid rgba(0,0,0,0.03);
        }
        .bento-title { font-size: 1.25rem; font-weight: 700; color: #050505; margin-bottom: 16px; letter-spacing: -0.02em; }
        .bento-desc { font-size: 1rem; color: #4a4a4a; line-height: 1.6; }
        
        .bento-large { background: #050505; color: #ffffff; }
        .bento-large .bento-title { color: #ffffff; font-size: 1.25rem; }
        .bento-large .bento-desc { color: rgba(255,255,255,0.85); }
        .bento-large .bento-icon { background: rgba(255,255,255,0.1); border-color: rgba(255,255,255,0.05); color: #ffffff; }
        
        /* Editorial Section */
        .editorial-section { padding: 60px 0; background: #ffffff; }
        .editorial-title { font-size: clamp(1.5rem, 2.5vw, 2.25rem); font-weight: 800; line-height: 1.2; letter-spacing: -0.03em; color: #050505; margin-bottom: 24px; }
        .editorial-text { font-size: 1.05rem; line-height: 1.7; color: #4a4a4a; }
        .list-bullet { width: 8px; height: 8px; background: #2563eb; display: inline-block; border-radius: 50%; margin-right: 16px; }

        /* Process Steps Redesign */
        .process-container { background: #081a4b; color: #ffffff; padding: 100px 0; margin-bottom: 60px; }
        .process-title { font-size: clamp(2.5rem, 4vw, 3.5rem); font-weight: 800; letter-spacing: -0.03em; color: #ffffff; margin-bottom: 30px; }
        .process-subtitle { font-size: 1.1rem; line-height: 1.6; color: rgba(255,255,255,0.8); }
        .process-card {
            background: rgba(255,255,255,0.03);
            border: 1px solid rgba(255,255,255,0.1);
            border-radius: 24px;
        .process-container { background: #f8f9fa; color: #1a1a1a; padding: 100px 0; margin-bottom: 60px; }
        .process-title { font-size: clamp(2.5rem, 4vw, 3.5rem); font-weight: 800; letter-spacing: -0.03em; color: #050505; margin-bottom: 30px; }
        .process-subtitle { font-size: 1.1rem; line-height: 1.6; color: #4a4a4a; }
        .premium-card {
            background: #ffffff;
            border: 1px solid rgba(0,0,0,0.05);
            border-radius: 20px;
            padding: 30px 20px;
            height: 100%;
            transition: all 0.3s ease;
            box-shadow: 0 10px 30px rgba(0,0,0,0.02);
        }
        .premium-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.05);
            border-color: rgba(0,0,0,0.08);
        }
        .process-number {
            position: absolute;
            top: -10px;
            right: 10px;
            font-size: 120px;
            font-weight: 900;
            color: rgba(255,255,255,0.03);
            line-height: 1;
            pointer-events: none;
        }
        .process-step-title {
            font-size: 1.5rem;
            font-weight: 700;
            color: #ffffff;
            margin-bottom: 15px;
            position: relative;
            z-index: 2;
        }
        .process-step-desc {
            font-size: 1rem;
            line-height: 1.7;
            color: rgba(255,255,255,0.7);
            position: relative;
            z-index: 2;
        }
        
        /* Grid Boxes (Why Choose Us) */
        .grid-box { background: #fcfcfc; border: 1px solid rgba(0,0,0,0.05); border-radius: 20px; padding: 40px; height: 100%; transition: all 0.3s ease; }
        .grid-box:hover { background: #ffffff; box-shadow: 0 10px 30px rgba(0,0,0,0.03); transform: translateY(-3px); border-color: rgba(0,0,0,0.08); }

        /* Buttons */
        .btn-black {
            display: inline-flex; align-items: center; justify-content: center;
            padding: 18px 36px; background: #050505; color: #ffffff;
            font-size: 1.125rem; font-weight: 600; border-radius: 100px;
            text-decoration: none; transition: all 0.3s ease;
            border: 1px solid #050505;
        }
        .btn-black:hover {
            background: transparent; color: #050505;
            transform: translateY(-2px);
        }
        
        /* Elegant Feature List */
        .elegant-feature {
            padding: 32px 0;
            border-bottom: 1px solid rgba(0,0,0,0.08);
            display: flex;
            align-items: center;
            gap: 30px;
            transition: all 0.3s ease;
            position: relative;
        }
        .elegant-feature:first-child {
            border-top: 1px solid rgba(0,0,0,0.08);
        }
        .elegant-feature:hover {
            padding-left: 20px;
            padding-right: 20px;
            background-color: rgba(255,255,255,0.5);
            border-radius: 12px;
            border-bottom-color: transparent;
        }
        .elegant-icon {
            width: 80px; height: 80px;
            border-radius: 20px;
            background: #ffffff;
            color: #050505;
            display: flex; align-items: center; justify-content: center;
            font-size: 32px;
            flex-shrink: 0;
            box-shadow: 0 10px 20px rgba(0,0,0,0.02);
            border: 1px solid rgba(0,0,0,0.04);
            transition: all 0.3s ease;
        }
        .elegant-feature:hover .elegant-icon {
            background: #050505;
            color: #ffffff;
        }
        
        @media (max-width: 991px) {
            .bento-section { margin: 0; border-radius: 0; padding: 60px 0; }
        }
    </style>
</head>

<body>

    <?php include 'partials/common-content.php'; ?>

    <div id="smooth-wrapper">
        <!-- ==================== Header Two Start Here ==================== -->
        <?php include 'partials/header.php'; ?>
        <!-- ==================== Header Two End Here ==================== -->
        
        <div id="smooth-content">

            <!-- ==================== Web Dev Hero Start ==================== -->
            <section class="web-hero">
                <div class="container">
                    <div class="row align-items-center gx-5">
                        <div class="col-lg-6 mb-5 mb-lg-0 pe-lg-5">
                            <div class="hero-pill">
                                <span class="tw-w-2 tw-h-2 rounded-circle bg-blue-600"></span>
                                Web Development
                            </div>
                            
                            <h1 class="web-title tw-text-left" style="text-align: left; line-height: 1.2;">
                                Website Development Built for <span class="text-gradient">Performance and Growth.</span>
                            </h1>
                            
                            <p class="hero-subtitle tw-text-base tw-mb-4" style="text-align: left; line-height: 1.6;">
                                Your website is more than just a digital presence. It is your brand’s first impression, lead generation system, sales platform, and growth engine.
                            </p>
                            <p class="hero-subtitle tw-text-base tw-mb-4" style="text-align: left; line-height: 1.6;">
                                At Akkurate, we create websites that are fast, scalable, user-focused, and built to perform. From business websites to custom platforms, we combine design, technology, and strategy to create websites that help businesses grow.
                            </p>
                            <p class="hero-subtitle tw-text-base tw-mb-8 fw-bold text-dark" style="text-align: left;">
                                We focus on functionality, performance, and user experience. We don’t fall for just visuals.
                            </p>
                            
                            <div style="text-align: left;">
                                <a href="#services" class="btn-black">LEARN MORE</a>
                            </div>
                        </div>
                        
                        <div class="col-lg-6">
                            <div class="browser-mockup m-0">
                                <div class="browser-header">
                                    <div class="browser-dot red"></div>
                                    <div class="browser-dot yellow"></div>
                                    <div class="browser-dot green"></div>
                                </div>
                                <img src="/assets/images/thumbs/office-stock.jpg" alt="Web Development" class="w-100" style="height: auto; min-height: 450px; object-fit: cover;">
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- ==================== Editorial: Why Your Website Matters ==================== -->
            <section class="editorial-section border-bottom" style="padding-top: 20px;">
                <div class="container">
                    <div class="row gx-5 align-items-start">
                        <div class="col-lg-5 mb-5 mb-lg-0 position-sticky" style="top: 120px; z-index: 10;">
                            <h2 class="editorial-title">Why Your Website Matters.</h2>
                        </div>
                        <div class="col-lg-7">
                            <div class="p-5 rounded-4 shadow-sm" style="background-color: #081a4b; color: #ffffff;">
                                <p class="tw-text-lg mb-4" style="color: rgba(255,255,255,0.9); line-height: 1.7;">
                                    A slow, outdated, or poorly structured website can impact trust, conversions, and business growth. A professionally developed website helps you:
                                </p>
                                <div class="row g-3 mb-5">
                                    <div class="col-sm-6">
                                        <div class="d-flex align-items-center bg-white bg-opacity-10 rounded-3 p-3 h-100 transition-all hover-translate-y-1">
                                            <i class="ph-bold ph-check-circle text-info fs-4 me-3"></i>
                                            <span class="fw-medium">Build credibility</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="d-flex align-items-center bg-white bg-opacity-10 rounded-3 p-3 h-100 transition-all hover-translate-y-1">
                                            <i class="ph-bold ph-check-circle text-info fs-4 me-3"></i>
                                            <span class="fw-medium">Improve user experience</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="d-flex align-items-center bg-white bg-opacity-10 rounded-3 p-3 h-100 transition-all hover-translate-y-1">
                                            <i class="ph-bold ph-check-circle text-info fs-4 me-3"></i>
                                            <span class="fw-medium">Generate more leads</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="d-flex align-items-center bg-white bg-opacity-10 rounded-3 p-3 h-100 transition-all hover-translate-y-1">
                                            <i class="ph-bold ph-check-circle text-info fs-4 me-3"></i>
                                            <span class="fw-medium">Increase conversions</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="d-flex align-items-center bg-white bg-opacity-10 rounded-3 p-3 h-100 transition-all hover-translate-y-1">
                                            <i class="ph-bold ph-check-circle text-info fs-4 me-3"></i>
                                            <span class="fw-medium">Improve SEO performance</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="d-flex align-items-center bg-white bg-opacity-10 rounded-3 p-3 h-100 transition-all hover-translate-y-1">
                                            <i class="ph-bold ph-check-circle text-info fs-4 me-3"></i>
                                            <span class="fw-medium">Stronger digital presence</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-start border-4 border-info ps-4 py-3 bg-white bg-opacity-10 rounded-end">
                                    <p class="fw-bold mb-0 text-white tw-text-lg">
                                        Your website should work like a business asset and not just an online brochure.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- ==================== Bento Grid Services ==================== -->
            <section id="services" class="bento-section my-5">
                <div class="container">
                    <div class="text-center max-w-700-px mx-auto mb-5 pb-4">
                        <h2 class="editorial-title">Our Web Development Services</h2>
                        <p class="hero-subtitle mx-auto">We offer these expert services to our clients:</p>
                    </div>
                    
                    <div class="row g-4">
                        <!-- Custom Web Dev (Large Card) -->
                        <div class="col-lg-8">
                            <div class="bento-card bento-large">
                                <div class="bento-icon"><i class="ph-bold ph-code"></i></div>
                                <h3 class="bento-title">Custom Web Development</h3>
                                <p class="bento-desc max-w-500-px">Tailored solutions built around your business needs and workflows.</p>
                            </div>
                        </div>
                        
                        <!-- Business Website -->
                        <div class="col-lg-4">
                            <div class="bento-card">
                                <div class="bento-icon"><i class="ph-bold ph-building-office"></i></div>
                                <h3 class="bento-title">Business Website</h3>
                                <p class="bento-desc">Professional websites designed to represent your brand and convert visitors into customers.</p>
                            </div>
                        </div>
                        
                        <!-- E-Commerce -->
                        <div class="col-lg-4">
                            <div class="bento-card">
                                <div class="bento-icon"><i class="ph-bold ph-shopping-cart"></i></div>
                                <h3 class="bento-title">E-Commerce Development</h3>
                                <p class="bento-desc">Online stores optimized for sales, user experience, and scalability.</p>
                            </div>
                        </div>
                        
                        <!-- Landing Pages -->
                        <div class="col-lg-4">
                            <div class="bento-card">
                                <div class="bento-icon"><i class="ph-bold ph-layout"></i></div>
                                <h3 class="bento-title">Landing Page Development</h3>
                                <p class="bento-desc">High-converting landing pages built for campaigns and lead generation.</p>
                            </div>
                        </div>
                        
                        <!-- Website Redesign -->
                        <div class="col-lg-4">
                            <div class="bento-card">
                                <div class="bento-icon"><i class="ph-bold ph-arrows-clockwise"></i></div>
                                <h3 class="bento-title">Website Redesign</h3>
                                <p class="bento-desc">We modernize outdated websites with improved design, speed, and functionality.</p>
                            </div>
                        </div>
                        
                        <!-- Website Maintenance -->
                        <div class="col-lg-12">
                            <div class="bento-card d-md-flex align-items-center gap-5">
                                <div class="bento-icon mb-md-0 flex-shrink-0"><i class="ph-bold ph-wrench"></i></div>
                                <div>
                                    <h3 class="bento-title mb-2">Website Maintenance & Support</h3>
                                    <p class="bento-desc mb-0">Continuous updates, security improvements, and technical support for smooth performance.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="text-center mt-5 pt-4">
                        <a href="/contact.php" class="btn-black">GET CUSTOM QUOTE</a>
                    </div>
                </div>
            </section>
            
            <!-- ==================== What Makes Our Websites Different? ==================== -->
            <section class="editorial-section bg-neutral-50">
                <div class="container">
                    <div class="row gx-5 align-items-start">
                        <div class="col-lg-5 mb-5 mb-lg-0 position-sticky" style="top: 120px; z-index: 10;">
                            <h2 class="editorial-title">What Makes Our Websites Different?</h2>
                            <p class="editorial-text mb-5">The market is full of brands that do the same thing for everyone. Here’s why we stand out from the saturated market.</p>
                            <a href="/contact.php" class="btn-black d-none d-lg-inline-flex">GET A DEMO TODAY</a>
                        </div>
                        
                        <div class="col-lg-7">
                            <div class="elegant-feature">
                                <div class="elegant-icon"><i class="ph-bold ph-device-mobile"></i></div>
                                <div>
                                    <h4 class="tw-text-lg fw-bold mb-2 text-dark">Mobile-Responsive Design</h4>
                                    <p class="editorial-text mb-0 tw-text-base">Your website performs seamlessly across mobile, tablet, and desktop devices.</p>
                                </div>
                            </div>
                            
                            <div class="elegant-feature">
                                <div class="elegant-icon"><i class="ph-bold ph-lightning"></i></div>
                                <div>
                                    <h4 class="tw-text-lg fw-bold mb-2 text-dark">Fast Loading Speed</h4>
                                    <p class="editorial-text mb-0 tw-text-base">We optimize performance to improve user experience and search rankings.</p>
                                </div>
                            </div>
                            
                            <div class="elegant-feature">
                                <div class="elegant-icon"><i class="ph-bold ph-magnifying-glass"></i></div>
                                <div>
                                    <h4 class="tw-text-lg fw-bold mb-2 text-dark">SEO-Friendly Structure</h4>
                                    <p class="editorial-text mb-0 tw-text-base">Every website is built with search engine best practices in mind.</p>
                                </div>
                            </div>
                            
                            <div class="elegant-feature">
                                <div class="elegant-icon"><i class="ph-bold ph-cursor-click"></i></div>
                                <div>
                                    <h4 class="tw-text-lg fw-bold mb-2 text-dark">Conversion-Focused Development</h4>
                                    <p class="editorial-text mb-0 tw-text-base">We design websites that guide users toward action.</p>
                                </div>
                            </div>
                            
                            <div class="elegant-feature" style="border-bottom: 1px solid rgba(0,0,0,0.08);">
                                <div class="elegant-icon"><i class="ph-bold ph-trend-up"></i></div>
                                <div>
                                    <h4 class="tw-text-lg fw-bold mb-2 text-dark">Scalable Technology</h4>
                                    <p class="editorial-text mb-0 tw-text-base">Your website grows alongside your business needs.</p>
                                </div>
                            </div>
                            
                            <div class="mt-5 d-lg-none text-center">
                                <a href="/contact.php" class="btn-black">GET A DEMO TODAY</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- ==================== Process Timeline ==================== -->
            <section class="process-container">
                <div class="container">
                    <div class="row gx-5 align-items-start">
                        <div class="col-lg-5 mb-5 mb-lg-0 position-sticky" style="top: 120px; z-index: 10;">
                            <h2 class="process-title">Our Development Process</h2>
                            <p class="process-subtitle pe-lg-5">
                                We follow a simple process for best results:
                            </p>
                        </div>
                        <div class="col-lg-7">
                            <div class="process-card">
                                <div class="process-number">01</div>
                                <h3 class="process-step-title">Discovery & Strategy</h3>
                                <p class="process-step-desc">We understand your business goals, audience, and functionality requirements.</p>
                            </div>
                            <div class="process-card">
                                <div class="process-number">02</div>
                                <h3 class="process-step-title">UI/UX Planning</h3>
                                <p class="process-step-desc">User experience is carefully planned to improve engagement and navigation.</p>
                            </div>
                            <div class="process-card">
                                <div class="process-number">03</div>
                                <h3 class="process-step-title">Development & Testing</h3>
                                <p class="process-step-desc">Every website is tested for speed, responsiveness, and performance.</p>
                            </div>
                            <div class="process-card">
                                <div class="process-number">04</div>
                                <h3 class="process-step-title">Launch & Optimization</h3>
                                <p class="process-step-desc">We launch your website smoothly and continue optimizing for better results.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            
            <!-- ==================== Why Choose Us Grid ==================== -->
            <section class="editorial-section" style="background-color: #fafafa;">
                <div class="container">
                    <div class="text-center max-w-700-px mx-auto mb-5 pb-2">
                        <h2 class="editorial-title text-dark">Why Choose Akkurate for Web Development?</h2>
                        <p class="editorial-text mx-auto text-muted">Here’s why people choose us for their website development needs:</p>
                    </div>
                    
                    <div class="row g-4">
                        <div class="col-md-6 col-lg-3">
                            <div class="premium-card text-center">
                                <div class="mb-4"><img src="/assets/images/thumbs/business_web.png" class="img-fluid rounded w-100 object-fit-cover" style="height: 120px;" alt="Business-Driven Approach"></div>
                                <h4 class="tw-text-lg fw-bold mb-3 text-dark">Business-Driven</h4>
                                <p class="editorial-text mb-0 tw-text-sm text-muted">We develop websites focused on performance, usability, and growth.</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="premium-card text-center">
                                <div class="mb-4"><img src="/assets/images/thumbs/end_to_end.png" class="img-fluid rounded w-100 object-fit-cover" style="height: 120px;" alt="End-to-End Expertise"></div>
                                <h4 class="tw-text-lg fw-bold mb-3 text-dark">Full Expertise</h4>
                                <p class="editorial-text mb-0 tw-text-sm text-muted">From strategy and design to SEO and development, everything works together.</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="premium-card text-center">
                                <div class="mb-4"><img src="/assets/images/thumbs/transparent_workflow.png" class="img-fluid rounded w-100 object-fit-cover" style="height: 120px;" alt="Transparent Workflow"></div>
                                <h4 class="tw-text-lg fw-bold mb-3 text-dark">Transparency</h4>
                                <p class="editorial-text mb-0 tw-text-sm text-muted">You stay informed throughout the development process.</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="premium-card text-center">
                                <div class="mb-4"><img src="/assets/images/thumbs/long_term_support.png" class="img-fluid rounded w-100 object-fit-cover" style="height: 120px;" alt="Long-Term Support"></div>
                                <h4 class="tw-text-lg fw-bold mb-3 text-dark">Long-Term</h4>
                                <p class="editorial-text mb-0 tw-text-sm text-muted">We continue supporting your website as your business evolves.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- ==================== CTA ==================== -->
            <section class="py-5 bg-white text-center border-top">
                <div class="container">
                    <div class="max-w-800-px mx-auto">
                        <h2 class="editorial-title">Build a Website That Works for Your Business</h2>
                        <p class="hero-subtitle mx-auto tw-mb-6">
                            Your website should help your business attract customers, build trust, and grow consistently.<br>
                            At Akkurate, we create digital experiences designed for real business impact.
                        </p>
                        <p class="hero-subtitle mx-auto fw-bold text-dark tw-mb-10">
                            Ready to Build a High-Performance Website?<br>
                            Let’s create a website that reflects your brand and supports your growth goals.
                        </p>
                        <a href="/contact.php" class="btn-black">CONTACT US</a>
                    </div>
                </div>
            </section>

            <?php include 'partials/footer.php'; ?>
        </div>
    </div>

    <?php include 'partials/javascript.php'; ?>

</body>
</html>
