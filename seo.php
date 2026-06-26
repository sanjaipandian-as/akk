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
        
        
        /* Agency Hero */
        .agency-hero {
            padding: 60px 0;
            background: #ffffff;
            color: #050505;
            position: relative;
            overflow: hidden;
            min-height: calc(100vh - 100px);
            display: flex;
            align-items: center;
        }
        .agency-hero::before {
            content: '';
            position: absolute;
            top: -50%; left: -20%; width: 100%; height: 200%;
            background: none;
            z-index: 0;
            pointer-events: none;
        }
        .agency-hero .container { position: relative; z-index: 1; }
        
        .hero-badge {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            padding: 6px 16px;
            border-radius: 100px;
            border: 1px solid rgba(0,0,0,0.1);
            font-size: 12px;
            letter-spacing: 1px;
            text-transform: uppercase;
            margin-bottom: 24px;
            color: #4a4a4a;
            font-weight: 600;
        }
        .hero-title {
            font-size: clamp(1.8rem, 4vw, 3.2rem);
            font-weight: 800;
            line-height: 1.1;
            letter-spacing: -0.03em;
            margin-bottom: 20px;
            color: #050505;
        }
        .hero-subtitle {
            font-size: 1.05rem;
            line-height: 1.5;
            color: #4a4a4a;
            max-width: 600px;
            margin-bottom: 24px;
        }
        .hero-image {
            max-height: 65vh;
            width: auto;
            max-width: 100%;
            object-fit: contain;
            border-radius: 24px;
        }

        /* Editorial Section */
        .editorial-section {
            padding: 80px 0;
            background: #ffffff;
        }
        .editorial-title {
            font-size: clamp(2rem, 3vw, 2.75rem);
            font-weight: 700;
            line-height: 1.1;
            letter-spacing: -0.03em;
            color: #050505;
        }
        .editorial-text {
            font-size: 1.05rem;
            line-height: 1.7;
            color: #4a4a4a;
        }
        
        .list-bullet {
            width: 8px;
            height: 8px;
            background: #2563eb;
            display: inline-block;
            border-radius: 50%;
            margin-right: 16px;
        }

        /* Services List (No Cards) */
        .service-row {
            border-bottom: 1px solid rgba(0,0,0,0.1);
            padding: 30px 0;
            transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
        }
        .service-row:first-child { border-top: 1px solid rgba(0,0,0,0.1); }
        .service-row:hover {
            padding-left: 30px;
            padding-right: 30px;
            background: #ffffff;
        }
        .service-number {
            font-size: 1.125rem;
            color: #2563eb;
            font-weight: 700;
            margin-bottom: 15px;
            display: block;
            font-family: monospace;
        }
        .service-name {
            font-size: 1.75rem;
            font-weight: 700;
            margin: 0;
            color: #050505;
            letter-spacing: -0.02em;
        }
        .service-desc {
            font-size: 1rem;
            line-height: 1.6;
            color: #4a4a4a;
            margin: 0;
        }

        /* Process Steps Redesign */
        .process-container {
            background: #081a4b;
            color: #ffffff;
            padding: 100px 0;
        }
        .process-title {
            font-size: clamp(2.5rem, 4vw, 3.5rem);
            font-weight: 800;
            letter-spacing: -0.03em;
            color: #ffffff;
            margin-bottom: 30px;
        }
        .process-subtitle {
            font-size: 1.1rem;
            line-height: 1.6;
            color: rgba(255,255,255,0.8);
        }
        .process-card {
            background: rgba(255,255,255,0.03);
            border: 1px solid rgba(255,255,255,0.1);
            border-radius: 24px;
            padding: 40px;
            margin-bottom: 30px;
            position: relative;
            overflow: hidden;
            transition: all 0.3s ease;
        }
        .process-card:hover {
            background: rgba(255,255,255,0.06);
            border-color: rgba(255,255,255,0.2);
            transform: translateY(-5px);
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

        /* Unique CTA Redesign */
        .agency-cta {
            padding: 100px 0;
            background: #ffffff;
        }
        .cta-wrapper {
            background: #081a4b;
            border-radius: 40px;
            padding: 60px;
            position: relative;
            overflow: hidden;
            box-shadow: 0 20px 40px rgba(8,26,75,0.15);
        }
        .cta-wrapper::before {
            content: '';
            position: absolute;
            top: -30%; left: -10%;
            width: 600px; height: 600px;
            background: radial-gradient(circle, rgba(255,255,255,0.05) 0%, transparent 70%);
            border-radius: 50%;
            pointer-events: none;
        }
        
        .differentiator-item {
            padding-left: 24px;
            border-left: 2px solid rgba(255,255,255,0.1);
            margin-bottom: 30px;
            transition: all 0.3s ease;
        }
        .differentiator-item:hover {
            border-left-color: #ffffff;
        }
        .differentiator-title {
            font-size: 1.2rem;
            font-weight: 700;
            margin-bottom: 8px;
            color: #ffffff;
        }
        .differentiator-desc {
            font-size: 0.95rem;
            color: rgba(255,255,255,0.7);
            line-height: 1.6;
        }

        .cta-box {
            background: #ffffff;
            padding: 50px;
            border-radius: 24px;
            box-shadow: 0 30px 60px rgba(0,0,0,0.2);
            position: relative;
            z-index: 2;
            transform: translateY(-20px);
        }

        /* Buttons */
        .btn-premium {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 16px 40px;
            background: #2563eb;
            color: #fff;
            font-weight: 600;
            font-size: 1rem;
            border-radius: 100px;
            text-decoration: none;
            transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
            border: none;
        }
        .btn-premium:hover {
            background: #1d4ed8;
            transform: translateY(-4px);
            color: #fff;
            box-shadow: 0 10px 20px rgba(37,99,235,0.2);
        }
        .btn-premium-outline {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 14px 40px;
            background: transparent;
            color: #050505;
            font-weight: 600;
            font-size: 1rem;
            border: 1px solid rgba(0,0,0,0.15);
            border-radius: 100px;
            text-decoration: none;
            transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
        }
        .btn-premium-outline:hover {
            border-color: #050505;
            background: #050505;
            color: #ffffff;
            transform: translateY(-4px);
        }
        
        /* Utility */
        .mb-20 { margin-bottom: 3rem; }
    </style>
</head>

<body>

    <?php include 'partials/common-content.php'; ?>

    <div id="smooth-wrapper">
        <!-- ==================== Header Two Start Here ==================== -->
        <?php include 'partials/header.php'; ?>
        <!-- ==================== Header Two End Here ==================== -->
        
        <div id="smooth-content">

            <!-- ==================== Agency Hero Start ==================== -->
            <section class="agency-hero">
                <div class="container">
                    <div class="row align-items-center gx-5">
                        <div class="col-lg-6 mb-5 mb-lg-0">
                            <div class="hero-badge">
                                <span class="tw-w-2 tw-h-2 rounded-circle bg-blue-500"></span>
                                Search Engine Optimization
                            </div>
                            
                            <h1 class="hero-title">SEO That Drives Rankings, Traffic & Revenue.</h1>
                            
                            <p class="hero-subtitle">
                                Getting traffic is easy. Getting qualified traffic that converts into business is what truly matters.<br><br>
                                We do not chase vanity metrics. We build sustainable organic growth systems focused on measurable business outcomes.
                            </p>
                            
                            <div class="d-flex flex-wrap tw-gap-4">
                                <a href="#services" class="btn-premium">Explore Services</a>
                                <a href="/contact.php" class="btn-premium-outline">Learn More</a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="position-relative text-center mt-5 mt-lg-0">
                                <img src="assets/images/thumbs/banner-two-img.png" alt="SEO Dashboard" class="hero-image shadow-lg">
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- ==================== Editorial: Why SEO Matters ==================== -->
            <section class="editorial-section">
                <div class="container">
                    <div class="row gx-5 align-items-start">
                        <div class="col-lg-5 mb-5 mb-lg-0 position-sticky" style="top: 120px; z-index: 10;">
                            <h2 class="editorial-title mb-4">Why SEO Still Matters.</h2>
                            <p class="editorial-text mb-4">
                                In an era of AI and social media, organic search is still the most reliable and highest-converting channel for sustainable business growth.
                            </p>
                            <a href="/contact.php" class="btn-premium d-none d-lg-inline-flex mt-2">Get Your SEO Audit</a>
                        </div>
                        <div class="col-lg-7">
                            <p class="editorial-text tw-mb-8">
                                Search engines remain one of the strongest sources of high-intent traffic. When people search for products or services, they are already looking for solutions. SEO helps your business appear in front of those users at the right moment.
                            </p>
                            <p class="editorial-text tw-mb-10 fw-medium text-dark">
                                A properly optimized website becomes a long-term revenue asset for your business. Strong SEO helps you:
                            </p>
                            
                            <div class="row gy-4">
                                <div class="col-md-6">
                                    <div class="d-flex align-items-center">
                                        <span class="list-bullet"></span>
                                        <span class="fs-5 text-dark fw-medium">Increase organic traffic</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex align-items-center">
                                        <span class="list-bullet"></span>
                                        <span class="fs-5 text-dark fw-medium">Generate qualified leads</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex align-items-center">
                                        <span class="list-bullet"></span>
                                        <span class="fs-5 text-dark fw-medium">Improve brand visibility</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex align-items-center">
                                        <span class="list-bullet"></span>
                                        <span class="fs-5 text-dark fw-medium">Build authority and trust</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex align-items-center">
                                        <span class="list-bullet"></span>
                                        <span class="fs-5 text-dark fw-medium">Reduce long-term ad costs</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex align-items-center">
                                        <span class="list-bullet"></span>
                                        <span class="fs-5 text-dark fw-medium">Drive sustainable growth</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- ==================== Services List (Agency Style) ==================== -->
            <section id="services" class="editorial-section" style="background: #f8fafc;">
                <div class="container">
                    <div class="row mb-20">
                        <div class="col-lg-6">
                            <h2 class="editorial-title">Our SEO Expertise.</h2>
                        </div>
                        <div class="col-lg-6">
                            <p class="editorial-text">What we do best. We combine technical foundations with robust content strategy and user experience to help your brand rank higher.</p>
                        </div>
                    </div>
                    
                    <div class="services-wrapper">
                        <!-- Service 1 -->
                        <div class="service-row">
                            <div class="row align-items-center gx-5">
                                <div class="col-md-5 mb-4 mb-md-0">
                                    <span class="service-number">01 /</span>
                                    <h3 class="service-name">Technical SEO</h3>
                                </div>
                                <div class="col-md-7">
                                    <p class="service-desc">We improve your website structure, speed, crawlability, and overall search performance ensuring search engines can read and rank your site flawlessly.</p>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Service 2 -->
                        <div class="service-row">
                            <div class="row align-items-center gx-5">
                                <div class="col-md-5 mb-4 mb-md-0">
                                    <span class="service-number">02 /</span>
                                    <h3 class="service-name">Keyword Strategy</h3>
                                </div>
                                <div class="col-md-7">
                                    <p class="service-desc">We identify high-intent keywords that align with your audience and business goals, targeting terms that bring actual buyers, not just browsers.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Service 3 -->
                        <div class="service-row">
                            <div class="row align-items-center gx-5">
                                <div class="col-md-5 mb-4 mb-md-0">
                                    <span class="service-number">03 /</span>
                                    <h3 class="service-name">On-Page SEO</h3>
                                </div>
                                <div class="col-md-7">
                                    <p class="service-desc">From metadata to content optimization, we improve every page for better visibility, making sure your existing assets perform at their absolute peak.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Service 4 -->
                        <div class="service-row">
                            <div class="row align-items-center gx-5">
                                <div class="col-md-5 mb-4 mb-md-0">
                                    <span class="service-number">04 /</span>
                                    <h3 class="service-name">Content Marketing</h3>
                                </div>
                                <div class="col-md-7">
                                    <p class="service-desc">We create search-focused content that attracts traffic and builds authority. Content that answers your audience's deepest questions and builds trust.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Service 5 -->
                        <div class="service-row">
                            <div class="row align-items-center gx-5">
                                <div class="col-md-5 mb-4 mb-md-0">
                                    <span class="service-number">05 /</span>
                                    <h3 class="service-name">Local SEO</h3>
                                </div>
                                <div class="col-md-7">
                                    <p class="service-desc">We help businesses improve visibility for location-based searches and local customers, driving foot traffic and hyper-local leads.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Service 6 -->
                        <div class="service-row">
                            <div class="row align-items-center gx-5">
                                <div class="col-md-5 mb-4 mb-md-0">
                                    <span class="service-number">06 /</span>
                                    <h3 class="service-name">Link Building</h3>
                                </div>
                                <div class="col-md-7">
                                    <p class="service-desc">We build quality backlinks that improve domain authority and search rankings, signaling to Google that your brand is an industry leader.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mt-5 pt-5">
                        <a href="/contact.php" class="btn-premium">Get Custom Quote</a>
                    </div>
                </div>
            </section>

            <!-- ==================== Process Timeline ==================== -->
            <section class="process-container">
                <div class="container">
                    <div class="row gx-5 align-items-start">
                        <div class="col-lg-5 mb-5 mb-lg-0 position-sticky" style="top: 120px; z-index: 10;">
                            <h2 class="process-title">Our Unique Process.</h2>
                            <p class="process-subtitle pe-lg-5">
                                We have a highly streamlined methodology. At every instance, you are aware of what is happening and the impact it is driving.
                            </p>
                        </div>
                        <div class="col-lg-7">
                            <div class="process-card">
                                <div class="process-number">01</div>
                                <h3 class="process-step-title">Website Audit</h3>
                                <p class="process-step-desc">We comprehensively analyze your website to identify technical issues and uncover hidden growth opportunities before writing a single line of code or content.</p>
                            </div>
                            <div class="process-card">
                                <div class="process-number">02</div>
                                <h3 class="process-step-title">Competitor Analysis</h3>
                                <p class="process-step-desc">Understanding competitors helps us create smarter SEO strategies. We find their weaknesses and exploit them to your advantage.</p>
                            </div>
                            <div class="process-card">
                                <div class="process-number">03</div>
                                <h3 class="process-step-title">Content Optimization</h3>
                                <p class="process-step-desc">We improve existing pages and architect entirely new content that not only ranks high on search engines but reliably converts readers into customers.</p>
                            </div>
                            <div class="process-card">
                                <div class="process-number">04</div>
                                <h3 class="process-step-title">Performance Tracking</h3>
                                <p class="process-step-desc">Every campaign is rigorously monitored with accurate, transparent reporting and measurable KPIs. You will always know the exact return on your investment.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- ==================== Why Choose Us ==================== -->
            <section class="agency-cta" style="padding-bottom: 40px;">
                <div class="container">
                    <div class="cta-wrapper" style="padding: 80px 60px;">
                        <div class="text-center mb-5">
                            <h2 class="editorial-title text-white">Why Choose Akkurate?</h2>
                        </div>
                        
                        <div class="row g-4">
                            <div class="col-md-6">
                                <div class="differentiator-item">
                                    <h4 class="differentiator-title text-white">Results-Focused SEO</h4>
                                    <p class="differentiator-desc">We focus on rankings that bring tangible business impact and revenue, not just empty traffic numbers.</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="differentiator-item">
                                    <h4 class="differentiator-title text-white">Transparent Communication</h4>
                                    <p class="differentiator-desc">You always know what is happening with your campaign and performance. No black box strategies.</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="differentiator-item">
                                    <h4 class="differentiator-title text-white">Long-Term Organic Growth</h4>
                                    <p class="differentiator-desc">We build solid SEO foundations that continue delivering compound results over time.</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="differentiator-item">
                                    <h4 class="differentiator-title text-white">Integrated Expertise</h4>
                                    <p class="differentiator-desc">SEO works better when connected with content, development, and analytics — we bring everything together.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- ==================== Contact CTA ==================== -->
            <section class="py-5 bg-white mb-5">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="cta-box text-center p-5 border-0 bg-light" style="border-radius: 24px; transform: none; box-shadow: none;">
                                <h3 class="editorial-title mb-3" style="font-size: 2rem;">Grow Organically With Confidence.</h3>
                                <p class="editorial-text mb-5 mx-auto" style="max-width: 600px;">
                                    SEO is not just about being visible online. It is about becoming the trusted solution your audience chooses. Let’s build an SEO strategy that attracts the right audience and drives measurable growth.
                                </p>
                                
                                <form action="/contact.php" method="POST" class="d-flex flex-column gap-3 text-start">
                                    <div class="row g-3">
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control p-3 bg-white border-0 shadow-sm" placeholder="Your Name" style="border-radius: 12px;" required>
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="email" class="form-control p-3 bg-white border-0 shadow-sm" placeholder="Your Email" style="border-radius: 12px;" required>
                                        </div>
                                    </div>
                                    <input type="text" class="form-control p-3 bg-white border-0 shadow-sm" placeholder="Company Website" style="border-radius: 12px;">
                                    <textarea class="form-control p-3 bg-white border-0 shadow-sm" rows="3" placeholder="How can we help?" style="border-radius: 12px;"></textarea>
                                    <div class="text-center mt-3">
                                        <button type="submit" class="btn-premium px-5 py-3 fs-5" style="border-radius: 12px;">Get a Demo Today</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            
            <?php include 'partials/footer.php'; ?>
        </div>
    </div>

    <?php include 'partials/javascript.php'; ?>

</body>

</html>
