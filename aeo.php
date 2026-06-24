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
        
        
        /* Hero */
        .web-hero {
            padding: 40px 0 80px;
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
            font-weight: 800; letter-spacing: -0.04em;
            color: #050505; margin-bottom: 24px;
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
        .bento-section { padding: 100px 0; background: #fafafa; border-radius: 40px; margin: 0 20px; }
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
        .bento-title { font-size: 1.25rem; font-weight: 700; color: #050505; margin-bottom: 16px; letter-spacing: -0.01em; }
        .bento-desc { font-size: 1rem; color: #4a4a4a; line-height: 1.6; }
        
        .bento-large { background: #050505; color: #ffffff; }
        .bento-large .bento-title { color: #ffffff; font-size: 1.5rem; }
        .bento-large .bento-desc { color: #a1a1aa; }
        .bento-large .bento-icon { background: rgba(255,255,255,0.1); border-color: rgba(255,255,255,0.05); color: #ffffff; }
        
        /* Editorial Section */
        .editorial-section { padding: 80px 0; background: #ffffff; }
        .editorial-title { font-size: clamp(2rem, 3vw, 2.75rem); font-weight: 700; line-height: 1.2; letter-spacing: -0.02em; color: #050505; margin-bottom: 24px; }
        .editorial-text { font-size: 1.05rem; line-height: 1.6; color: #4a4a4a; }

        /* Grid Boxes */
        .grid-box { background: #fcfcfc; border: 1px solid rgba(0,0,0,0.05); border-radius: 20px; padding: 40px; height: 100%; transition: all 0.3s ease; }
        .grid-box:hover { background: #ffffff; box-shadow: 0 10px 30px rgba(0,0,0,0.03); transform: translateY(-3px); border-color: rgba(0,0,0,0.08); }

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
        
        .quote-block {
            background: #f8fafc;
            border-left: 4px solid #2563eb;
            padding: 24px 32px;
            border-radius: 0 16px 16px 0;
            margin-bottom: 16px;
        }
        
        @media (max-width: 991px) {
            .bento-section { margin: 0; border-radius: 0; padding: 60px 0; }
        }
    </style>
</head>

<body>

    <?php include 'partials/common-content.php'; ?>

    <div id="smooth-wrapper">
        <?php include 'partials/header.php'; ?>
        
        <div id="smooth-content">

            <!-- Hero Section -->
            <section class="web-hero">
                <div class="container">
                    <div class="row align-items-center gx-5">
                        <div class="col-lg-6 mb-5 mb-lg-0 pe-lg-5">
                            <div class="hero-pill">
                                <span class="tw-w-2 tw-h-2 rounded-circle bg-blue-600"></span>
                                Answer Engine Optimization
                            </div>
                            
                            <h1 class="web-title tw-text-left" style="text-align: left; font-size: clamp(1.8rem, 4vw, 3.2rem); line-height: 1.2;">
                                Get Found Where People Are <span class="text-gradient">Asking Questions.</span>
                            </h1>
                            
                            <p class="hero-subtitle tw-text-base tw-mb-4" style="text-align: left; line-height: 1.6;">
                                Today, people are no longer searching the same way they used to. Instead of typing short keywords, they ask complete questions on AI platforms, voice assistants, and answer engines. That is where AEO becomes important.
                            </p>
                            <p class="hero-subtitle tw-text-base tw-mb-4" style="text-align: left; line-height: 1.6;">
                                At Akkurate, we help your brand become the answer people see first. Our AEO services are designed to improve your visibility across AI-powered search experiences like Google AI Overviews, ChatGPT, voice search, and modern answer engines.
                            </p>
                            <p class="hero-subtitle tw-text-base tw-mb-8 fw-bold text-dark" style="text-align: left;">
                                We do not just optimize for rankings. We optimize for visibility, trust, and conversions.
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
                                <img src="/assets/images/thumbs/about-2.png" alt="AEO Dashboard" class="w-100" style="height: auto; min-height: 450px; object-fit: cover;">
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- What Is AEO? -->
            <section class="editorial-section border-bottom bg-neutral-50">
                <div class="container">
                    <div class="row gx-5 align-items-center">
                        <div class="col-lg-5 mb-5 mb-lg-0">
                            <h2 class="editorial-title">What Is AEO?</h2>
                            <p class="editorial-text mb-4">
                                Answer Engine Optimization (AEO) involves structuring your website and content so search engines and AI tools can understand it. Only then can they feature your business as a direct answer.
                            </p>
                            <p class="editorial-text fw-bold text-dark border-start border-4 border-blue-600 ps-4 py-2 bg-white rounded-end">
                                Instead of only focusing on traditional rankings, AEO focuses on mapping answers directly to user intent. This helps your business stay visible in the future of search.
                            </p>
                            <a href="/contact.php" class="btn-black d-none d-lg-inline-flex mt-4">GET A DEMO</a>
                        </div>
                        
                        <div class="col-lg-7">
                            <div class="elegant-feature">
                                <div class="elegant-icon"><i class="ph-bold ph-star"></i></div>
                                <div>
                                    <h4 class="tw-text-xl fw-bold mb-2 text-dark">Featured Snippets</h4>
                                    <p class="editorial-text mb-0 tw-text-base">Structuring content to increase your chances of appearing in position zero.</p>
                                </div>
                            </div>
                            
                            <div class="elegant-feature">
                                <div class="elegant-icon"><i class="ph-bold ph-robot"></i></div>
                                <div>
                                    <h4 class="tw-text-xl fw-bold mb-2 text-dark">AI-Generated Answers</h4>
                                    <p class="editorial-text mb-0 tw-text-base">Optimizing your website content for AI-driven search platforms and tools.</p>
                                </div>
                            </div>
                            
                            <div class="elegant-feature">
                                <div class="elegant-icon"><i class="ph-bold ph-microphone-stage"></i></div>
                                <div>
                                    <h4 class="tw-text-xl fw-bold mb-2 text-dark">Voice Search Visibility</h4>
                                    <p class="editorial-text mb-0 tw-text-base">Improving your website for conversational and voice-based searches.</p>
                                </div>
                            </div>
                            
                            <div class="elegant-feature">
                                <div class="elegant-icon"><i class="ph-bold ph-question"></i></div>
                                <div>
                                    <h4 class="tw-text-xl fw-bold mb-2 text-dark">Question-Based Content</h4>
                                    <p class="editorial-text mb-0 tw-text-base">Creating high-intent content that directly answers customer queries.</p>
                                </div>
                            </div>
                            
                            <div class="elegant-feature" style="border-bottom: 1px solid rgba(0,0,0,0.08);">
                                <div class="elegant-icon"><i class="ph-bold ph-tree-structure"></i></div>
                                <div>
                                    <h4 class="tw-text-xl fw-bold mb-2 text-dark">Semantic Optimization</h4>
                                    <p class="editorial-text mb-0 tw-text-base">Strengthening topical authority so AI systems trust your website more.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Bento Grid Services -->
            <section id="services" class="bento-section my-5">
                <div class="container">
                    <div class="text-center max-w-700-px mx-auto mb-5 pb-4">
                        <h2 class="web-title tw-text-3xl md:tw-text-4xl">Our AEO Services</h2>
                        <p class="hero-subtitle mx-auto">Here’s what people approach our experts for:</p>
                    </div>
                    
                    <div class="row g-4">
                        <!-- AI Search Optimization (Large) -->
                        <div class="col-lg-8">
                            <div class="bento-card bento-large">
                                <div class="bento-icon"><i class="ph-bold ph-robot"></i></div>
                                <h3 class="bento-title">AI Search Optimization</h3>
                                <p class="bento-desc max-w-500-px">We optimize your website content for AI-driven search platforms and modern answer engines.</p>
                            </div>
                        </div>
                        
                        <!-- Question-Based Content -->
                        <div class="col-lg-4">
                            <div class="bento-card">
                                <div class="bento-icon"><i class="ph-bold ph-question"></i></div>
                                <h3 class="bento-title">Question-Based Content</h3>
                                <p class="bento-desc">We create high-intent content that directly answers customer queries.</p>
                            </div>
                        </div>
                        
                        <!-- Structured Data -->
                        <div class="col-lg-4">
                            <div class="bento-card">
                                <div class="bento-icon"><i class="ph-bold ph-code"></i></div>
                                <h3 class="bento-title">Structured Data</h3>
                                <p class="bento-desc">Schema markup helps search engines understand your business clearly.</p>
                            </div>
                        </div>
                        
                        <!-- Voice Search -->
                        <div class="col-lg-4">
                            <div class="bento-card">
                                <div class="bento-icon"><i class="ph-bold ph-microphone-stage"></i></div>
                                <h3 class="bento-title">Voice Search Optimization</h3>
                                <p class="bento-desc">We improve your website for conversational and voice-based searches.</p>
                            </div>
                        </div>
                        
                        <!-- Featured Snippets -->
                        <div class="col-lg-4">
                            <div class="bento-card">
                                <div class="bento-icon"><i class="ph-bold ph-star"></i></div>
                                <h3 class="bento-title">Featured Snippets</h3>
                                <p class="bento-desc">We structure content to increase your chances of appearing in position zero.</p>
                            </div>
                        </div>
                        
                        <!-- Entity & Semantic SEO -->
                        <div class="col-lg-12">
                            <div class="bento-card d-md-flex align-items-center gap-5">
                                <div class="bento-icon mb-md-0 flex-shrink-0"><i class="ph-bold ph-tree-structure"></i></div>
                                <div>
                                    <h3 class="bento-title mb-2">Entity & Semantic SEO</h3>
                                    <p class="bento-desc mb-0">We strengthen topical authority so AI systems trust your website more.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            
            <!-- Why Businesses Need AEO Today -->
            <section class="editorial-section border-bottom">
                <div class="container">
                    <div class="row gx-5">
                        <div class="col-lg-5 mb-5 mb-lg-0">
                            <h2 class="editorial-title">Why Businesses Need AEO Today</h2>
                            <p class="editorial-text">Search behavior is changing rapidly. Users now ask complex, direct questions instantly. AI tools and search engines instantly provide direct answers to these queries.</p>
                            <p class="editorial-text fw-bold text-dark border-start border-4 border-blue-600 ps-4 py-2 bg-neutral-50 rounded-end">If your business is not optimized for answer engines, you risk losing visibility even if your website ranks well traditionally.</p>
                        </div>
                        <div class="col-lg-7">
                            <div class="quote-block">
                                <p class="text-heading tw-text-xl md:tw-text-xl fw-medium fst-italic m-0">“What is the best digital marketing agency?”</p>
                            </div>
                            <div class="quote-block">
                                <p class="text-heading tw-text-xl md:tw-text-xl fw-medium fst-italic m-0">“Which company offers affordable web development?”</p>
                            </div>
                            <div class="quote-block">
                                <p class="text-heading tw-text-xl md:tw-text-xl fw-medium fst-italic m-0">“Who provides SEO services for startups?”</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Why Choose Us Grid -->
            <section class="editorial-section">
                <div class="container">
                    <div class="text-center max-w-700-px mx-auto mb-5 pb-4">
                        <h2 class="editorial-title">Why Choose Akkurate for AEO?</h2>
                        <p class="editorial-text mx-auto">Out of all the brands out there, why should you choose us? It is purely because of our:</p>
                    </div>
                    
                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="grid-box">
                                <h3 class="tw-text-xl fw-bold mb-3 text-dark">Data-Driven Strategy</h3>
                                <p class="editorial-text mb-0">Every optimization is based on user behavior, search intent, and AI visibility trends.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="grid-box">
                                <h3 class="tw-text-xl fw-bold mb-3 text-dark">Future-Focused SEO</h3>
                                <p class="editorial-text mb-0">We prepare your business for the next generation of search experiences.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="grid-box">
                                <h3 class="tw-text-xl fw-bold mb-3 text-dark">Clear Reporting</h3>
                                <p class="editorial-text mb-0">You get transparent insights into rankings, visibility, traffic, and answer engine performance.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="grid-box">
                                <h3 class="tw-text-xl fw-bold mb-3 text-dark">Integrated Growth Approach</h3>
                                <p class="editorial-text mb-0">AEO works best when combined with SEO, content, and technical optimization — and we handle it all under one roof.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- CTA -->
            <section class="py-120 bg-white text-center border-top">
                <div class="container">
                    <div class="max-w-800-px mx-auto">
                        <h2 class="web-title tw-text-3xl md:tw-text-4xl">Ready to Optimize for the Future of Search?</h2>
                        <p class="hero-subtitle mx-auto tw-mb-6">
                            The future of digital discovery belongs to businesses that can provide the best answers quickly and clearly. Akkurate helps you become the brand customers discover first across search engines, AI assistants, and answer platforms.
                        </p>
                        <p class="hero-subtitle mx-auto fw-bold text-dark tw-mb-10">
                            Let’s build an AEO strategy that keeps your business visible, trusted, and ahead of competitors.
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
