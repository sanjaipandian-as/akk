import os

AEO_CONTENT = """
            <!-- ==================== Hero Start Here ==================== -->
            <style>
            .glass-panel {
                background: rgba(255, 255, 255, 0.8);
                backdrop-filter: blur(12px);
                -webkit-backdrop-filter: blur(12px);
                border: 1px solid rgba(0, 0, 0, 0.05);
                box-shadow: 0 10px 30px -10px rgba(0,0,0,0.05);
            }
            .glow-border {
                position: relative;
            }
            .glow-border::before {
                content: '';
                position: absolute;
                inset: -1px;
                border-radius: inherit;
                padding: 1px;
                background: linear-gradient(45deg, #10b981, #3b82f6, #8b5cf6);
                -webkit-mask: linear-gradient(#fff 0 0) content-box, linear-gradient(#fff 0 0);
                -webkit-mask-composite: xor;
                mask-composite: exclude;
                opacity: 0;
                transition: opacity 0.4s ease;
            }
            .glow-border:hover::before {
                opacity: 1;
            }
            .bento-card {
                transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            }
            .bento-card:hover {
                transform: translateY(-5px) scale(1.02);
                box-shadow: 0 20px 40px -10px rgba(59, 130, 246, 0.15);
            }
            .animated-gradient-text {
                background: linear-gradient(to right, #3b82f6, #10b981, #8b5cf6, #3b82f6);
                background-size: 300% 300%;
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
                animation: gradientMove 6s ease infinite;
            }
            @keyframes gradientMove {
                0% { background-position: 0% 50%; }
                50% { background-position: 100% 50%; }
                100% { background-position: 0% 50%; }
            }
            .floating-orb {
                position: absolute;
                border-radius: 50%;
                filter: blur(80px);
                opacity: 0.15;
                animation: floatOrb 10s infinite alternate ease-in-out;
            }
            @keyframes floatOrb {
                0% { transform: translate(0, 0) scale(1); }
                100% { transform: translate(30px, -50px) scale(1.2); }
            }
            </style>

            <section class="hero-section position-relative bg-neutral-50 tw-pb-120 overflow-hidden" style="min-height: 850px; padding-top: 250px;">
                <div class="floating-orb bg-main-600 tw-w-96 tw-h-96 top-0 tw-start-0 tw-mt-20"></div>
                <div class="floating-orb bg-purple-600 tw-w-96 tw-h-96 bottom-0 tw-end-0 tw-mb-20" style="animation-delay: 2s;"></div>
                
                <div class="container position-relative z-1 text-center">
                    <div class="d-inline-flex align-items-center tw-gap-3 tw-mb-6 glass-panel tw-px-6 tw-py-2 tw-rounded-full">
                        <span class="tw-w-2 tw-h-2 bg-main-600 rounded-circle animate-pulse"></span>
                        <span class="text-neutral-600 tw-text-sm fw-bold text-uppercase letter-spacing-1">Next-Gen Search is Here</span>
                    </div>
                    <h1 class="text-heading fw-bold tw-text-5xl md:tw-text-7xl lg:tw-text-8xl tw-mb-6 drop-shadow-sm tw-leading-tight">
                        Optimize for <br> <span class="animated-gradient-text">Answer Engines</span>
                    </h1>
                    <p class="text-neutral-600 tw-text-xl md:tw-text-2xl tw-mb-10 max-w-800-px mx-auto fw-light">
                        Be the exact answer users find when they ask AI platforms, Voice Assistants, and modern Search Engines.
                    </p>
                    <div class="d-flex justify-content-center tw-gap-4 flex-wrap">
                        <a href="/contact.php" class="btn btn-main hover-style-two tw-px-10 tw-py-4 rounded-pill fw-bold glow-border">
                            Start Optimizing
                        </a>
                        <a href="#explore" class="btn bg-white text-heading border border-neutral-200 hover-bg-neutral-50 tw-px-10 tw-py-4 rounded-pill fw-bold glass-panel">
                            Explore AEO
                        </a>
                    </div>
                </div>
            </section>
            <!-- ==================== Hero End Here ==================== -->

            <!-- ======================== What Is AEO ========================== -->
            <section id="explore" class="about-two py-120 position-relative z-1 overflow-hidden bg-white">
                <div class="container">
                    <div class="glass-panel bg-neutral-50 tw-rounded-3xl tw-p-8 md:tw-p-12 glow-border">
                        <div class="row gy-5 align-items-center">
                            <div class="col-lg-6" data-aos="fade-right" data-aos-duration="800">
                                <div class="position-relative">
                                    <div class="floating-orb bg-main-600 tw-w-64 tw-h-64 tw-start-10 top-10 opacity-15"></div>
                                    <img src="/assets/images/thumbs/about-four-thumb-1.png" class="w-100 tw-rounded-2xl position-relative z-1" style="box-shadow: 0 25px 50px -12px rgba(0,0,0,0.1);" alt="AEO Dashboard" />
                                    <div class="position-absolute bottom-0 tw-end-0 glass-panel tw-p-6 tw-rounded-2xl tw-m-6 z-2 border border-neutral-100 animate-bounce-slow">
                                        <h4 class="text-main-600 tw-text-3xl fw-bold tw-mb-1">10x</h4>
                                        <p class="text-neutral-600 tw-text-sm mb-0 fw-medium">More AI Visibility</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6" data-aos="fade-left" data-aos-duration="800">
                                <div class="ps-xl-5">
                                    <h4 class="tw-mb-3 fw-bold font-caveat text-main-600 tw-text-2xl">The Shift in Search</h4>
                                    <h2 class="text-heading text-capitalize tw-text-4xl md:tw-text-5xl fw-bold tw-mb-6">What Is AEO?</h2>
                                    <p class="text-neutral-600 tw-text-lg fw-light tw-leading-relaxed tw-mb-6">
                                        Users no longer just type keywords—they ask full questions to AI and Voice Assistants. Answer Engine Optimization (AEO) ensures your content is structured precisely so AI platforms recognize and feature <span class="text-heading fw-semibold">your business</span> as the direct answer.
                                    </p>
                                    <div class="row g-4 mt-2">
                                        <div class="col-sm-6">
                                            <div class="glass-panel bg-white tw-p-4 tw-rounded-xl d-flex align-items-center tw-gap-3 hover-bg-neutral-50 tw-transition border border-neutral-100">
                                                <div class="bg-main-50 tw-w-10 tw-h-10 rounded-circle d-flex justify-content-center align-items-center text-main-600"><i class="ph-bold ph-chat-teardrop-text"></i></div>
                                                <span class="text-heading fw-semibold">AI Answers</span>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="glass-panel bg-white tw-p-4 tw-rounded-xl d-flex align-items-center tw-gap-3 hover-bg-neutral-50 tw-transition border border-neutral-100">
                                                <div class="bg-purple-50 tw-w-10 tw-h-10 rounded-circle d-flex justify-content-center align-items-center text-purple-600"><i class="ph-bold ph-microphone-stage"></i></div>
                                                <span class="text-heading fw-semibold">Voice Search</span>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="glass-panel bg-white tw-p-4 tw-rounded-xl d-flex align-items-center tw-gap-3 hover-bg-neutral-50 tw-transition border border-neutral-100">
                                                <div class="bg-blue-50 tw-w-10 tw-h-10 rounded-circle d-flex justify-content-center align-items-center text-blue-600"><i class="ph-bold ph-star"></i></div>
                                                <span class="text-heading fw-semibold">Featured Snippets</span>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="glass-panel bg-white tw-p-4 tw-rounded-xl d-flex align-items-center tw-gap-3 hover-bg-neutral-50 tw-transition border border-neutral-100">
                                                <div class="bg-green-50 tw-w-10 tw-h-10 rounded-circle d-flex justify-content-center align-items-center text-green-600"><i class="ph-bold ph-tree-structure"></i></div>
                                                <span class="text-heading fw-semibold">Semantic Search</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- ======================== What Is AEO end ========================== -->

            <!-- ======================== AEO Services Bento ========================== -->
            <section class="service-details py-120 bg-neutral-50 position-relative z-1 overflow-hidden">
                <div class="floating-orb bg-main-600 tw-w-96 tw-h-96 top-50 tw-start-50 translate-middle opacity-10"></div>
                <div class="container">
                    <div class="max-w-602-px mx-auto text-center tw-mb-15">
                        <h3 class="fw-bold tw-text-4xl md:tw-text-5xl text-heading tw-mb-4">Our AEO Expertise</h3>
                        <p class="text-neutral-600 tw-text-lg fw-light">Dominate the AI landscape with our specialized optimization strategies.</p>
                    </div>
                    
                    <!-- Bento Grid -->
                    <div class="row g-4">
                        <!-- Large Card -->
                        <div class="col-lg-8" data-aos="fade-up" data-aos-duration="600">
                            <div class="glass-panel bg-white glow-border tw-rounded-3xl tw-p-8 md:tw-p-10 h-100 bento-card position-relative overflow-hidden border border-neutral-100">
                                <div class="position-absolute top-0 tw-end-0 bg-main-600 tw-w-32 tw-h-32 filter-blur-3xl opacity-10"></div>
                                <div class="tw-w-16 tw-h-16 bg-main-50 tw-text-3xl text-main-600 rounded-circle d-flex justify-content-center align-items-center tw-mb-6 shadow-sm">
                                    <i class="ph-bold ph-robot"></i>
                                </div>
                                <h3 class="text-heading tw-mb-4">AI Search Optimization</h3>
                                <p class="text-neutral-600 tw-text-lg fw-light max-w-500-px">
                                    We re-architect your website content to be highly readable by AI-driven search platforms and modern answer engines like ChatGPT, Perplexity, and Gemini.
                                </p>
                            </div>
                        </div>
                        
                        <!-- Small Card -->
                        <div class="col-lg-4" data-aos="fade-up" data-aos-duration="700">
                            <div class="glass-panel bg-white glow-border tw-rounded-3xl tw-p-8 h-100 bento-card border border-neutral-100">
                                <div class="tw-w-14 tw-h-14 bg-main-50 border border-main-100 tw-text-2xl text-main-600 rounded-circle d-flex justify-content-center align-items-center tw-mb-6">
                                    <i class="ph-bold ph-code"></i>
                                </div>
                                <h4 class="text-heading tw-mb-3">Structured Data</h4>
                                <p class="text-neutral-600 fw-light">Advanced schema markup that feeds direct, unambiguous facts to AI models.</p>
                            </div>
                        </div>

                        <!-- Medium Cards -->
                        <div class="col-lg-4" data-aos="fade-up" data-aos-duration="800">
                            <div class="glass-panel bg-white glow-border tw-rounded-3xl tw-p-8 h-100 bento-card border border-neutral-100">
                                <div class="tw-w-14 tw-h-14 bg-purple-50 border border-purple-100 tw-text-2xl text-purple-600 rounded-circle d-flex justify-content-center align-items-center tw-mb-6">
                                    <i class="ph-bold ph-microphone-stage"></i>
                                </div>
                                <h4 class="text-heading tw-mb-3">Voice Search</h4>
                                <p class="text-neutral-600 fw-light">Conversational optimizations tailored for Siri, Alexa, and Google Assistant.</p>
                            </div>
                        </div>
                        
                        <div class="col-lg-4" data-aos="fade-up" data-aos-duration="900">
                            <div class="glass-panel bg-white glow-border tw-rounded-3xl tw-p-8 h-100 bento-card border border-neutral-100">
                                <div class="tw-w-14 tw-h-14 bg-blue-50 border border-blue-100 tw-text-2xl text-blue-600 rounded-circle d-flex justify-content-center align-items-center tw-mb-6">
                                    <i class="ph-bold ph-question"></i>
                                </div>
                                <h4 class="text-heading tw-mb-3">Question Content</h4>
                                <p class="text-neutral-600 fw-light">High-intent FAQs and Q&A content designed to trigger direct answers.</p>
                            </div>
                        </div>

                        <div class="col-lg-4" data-aos="fade-up" data-aos-duration="1000">
                            <div class="glass-panel bg-white glow-border tw-rounded-3xl tw-p-8 h-100 bento-card border border-neutral-100">
                                <div class="tw-w-14 tw-h-14 bg-green-50 border border-green-100 tw-text-2xl text-green-600 rounded-circle d-flex justify-content-center align-items-center tw-mb-6">
                                    <i class="ph-bold ph-tree-structure"></i>
                                </div>
                                <h4 class="text-heading tw-mb-3">Entity SEO</h4>
                                <p class="text-neutral-600 fw-light">Building topical authority networks that AI systems deeply trust.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- ======================== AEO Services Bento end ========================== -->

            <!-- ============================ Why Us section start ============================== -->
            <section class="core-features bg-white tw-py-120 position-relative z-1 overflow-hidden">
                <div class="container border-top border-neutral-100 tw-pt-120">
                    <div class="row align-items-center">
                        <div class="col-lg-5 tw-mb-12 lg:tw-mb-0">
                            <div class="d-inline-flex align-items-center tw-gap-2 tw-mb-4 glass-panel bg-neutral-50 border-neutral-200 tw-px-4 tw-py-2 tw-rounded-full">
                                <i class="ph-bold ph-rocket-launch text-main-600"></i>
                                <span class="text-heading tw-text-sm fw-bold">The Akkurate Edge</span>
                            </div>
                            <h3 class="fw-bold tw-text-4xl md:tw-text-5xl text-heading tw-mb-6 tw-leading-tight">
                                Why Choose Us for AEO?
                            </h3>
                            <p class="text-neutral-600 tw-text-lg tw-mb-8 fw-light">
                                We don't just chase algorithms; we build future-proof authority. Our data-driven approach ensures you capture high-intent users before they even reach a traditional search result.
                            </p>
                            <a class="btn btn-main hover-style-two d-inline-flex align-items-center justify-content-center tw-gap-3 group tw-px-8 tw-py-4 rounded-pill fw-bold" href="/contact.php">
                                <span class="button__label">GET A DEMO TODAY</span>
                                <i class="ph-bold ph-arrow-right group-hover-translate-x-1 tw-transition"></i>
                            </a>
                        </div>
                        <div class="col-lg-7 pl-lg-5">
                            <div class="row g-4">
                                <div class="col-md-6" data-aos="fade-up" data-aos-duration="600">
                                    <div class="glass-panel bg-neutral-50 p-5 rounded-4 h-100 border-start border-main-600 tw-border-l-4 hover-bg-neutral-100 tw-transition border-top-0 border-end-0 border-bottom-0">
                                        <h5 class="mb-3 text-heading d-flex align-items-center tw-gap-3">
                                            <i class="ph-bold ph-chart-line-up text-main-600 tw-text-2xl"></i> Data-Driven
                                        </h5>
                                        <p class="text-neutral-600 mb-0 tw-text-sm fw-light">Every optimization is based on user behavior, search intent, and AI visibility trends.</p>
                                    </div>
                                </div>
                                <div class="col-md-6" data-aos="fade-up" data-aos-duration="700">
                                    <div class="glass-panel bg-neutral-50 p-5 rounded-4 h-100 border-start border-purple-500 tw-border-l-4 hover-bg-neutral-100 tw-transition md:tw-mt-8 border-top-0 border-end-0 border-bottom-0">
                                        <h5 class="mb-3 text-heading d-flex align-items-center tw-gap-3">
                                            <i class="ph-bold ph-rocket text-purple-600 tw-text-2xl"></i> Future-Focused
                                        </h5>
                                        <p class="text-neutral-600 mb-0 tw-text-sm fw-light">We prepare your business for the next generation of conversational search experiences.</p>
                                    </div>
                                </div>
                                <div class="col-md-6" data-aos="fade-up" data-aos-duration="800">
                                    <div class="glass-panel bg-neutral-50 p-5 rounded-4 h-100 border-start border-blue-500 tw-border-l-4 hover-bg-neutral-100 tw-transition border-top-0 border-end-0 border-bottom-0">
                                        <h5 class="mb-3 text-heading d-flex align-items-center tw-gap-3">
                                            <i class="ph-bold ph-file-text text-blue-600 tw-text-2xl"></i> Clear Reporting
                                        </h5>
                                        <p class="text-neutral-600 mb-0 tw-text-sm fw-light">Transparent insights into rankings, visibility, and answer engine performance.</p>
                                    </div>
                                </div>
                                <div class="col-md-6" data-aos="fade-up" data-aos-duration="900">
                                    <div class="glass-panel bg-neutral-50 p-5 rounded-4 h-100 border-start border-green-500 tw-border-l-4 hover-bg-neutral-100 tw-transition md:tw-mt-8 border-top-0 border-end-0 border-bottom-0">
                                        <h5 class="mb-3 text-heading d-flex align-items-center tw-gap-3">
                                            <i class="ph-bold ph-puzzle-piece text-green-600 tw-text-2xl"></i> Integrated
                                        </h5>
                                        <p class="text-neutral-600 mb-0 tw-text-sm fw-light">AEO works flawlessly when combined with SEO, content, and technical optimization.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- ============================ Why Us section end ============================== -->
"""

SEO_CONTENT = """
            <!-- ==================== Hero Start Here ==================== -->
            <section class="banner-two position-relative z-1 gradient-bg-two tw-pb-120" style="padding-top: 220px;">
                <img alt="Cloud Shape" class="position-absolute bottom-0 tw-start-0 w-100 z-n1" src="/assets/images/shapes/cloud-shape.png" />
                <div class="container text-center max-w-900-px">
                    <span class="text-capitalize font-caveat fw-bold tw-mb-6 h3 text-main-600">Grow Organically With Confidence</span>
                    <h1 class="splitTextStyleOne text-heading text-capitalize tw-leading-none tw-mb-6">
                        SEO That Drives Rankings, Traffic, and <span class="text-main-600">Revenue</span>
                    </h1>
                    <p class="text-neutral-600 tw-text-lg tw-mb-10 mx-auto">Getting traffic is easy. Getting qualified traffic that converts into business is what truly matters.</p>
                    <a class="hover--translate-y-1 active--translate-y-scale-9 btn btn-main hover-style-one button--stroke align-items-center justify-content-center tw-gap-5 group active--translate-y-2 tw-px-15 rounded-pill tw-py-505 fw-medium" href="/contact.php">
                        <span class="button__flair"></span>
                        <span class="button__label">Build My Growth Engine</span>
                    </a>
                </div>
            </section>
            <!-- ==================== Hero End Here ==================== -->

            <!-- ======================== Why SEO Matters ========================== -->
            <section class="about-two py-120 position-relative z-1 overflow-hidden">
                <div class="container">
                    <div class="row gy-4 align-items-center">
                        <div class="col-lg-6" data-aos="fade-right" data-aos-duration="800">
                            <div class="bg-white tw-py-8 tw-px-8 tw-rounded-2xl border border-neutral-100 common-shadow-two position-relative z-1">
                                <h3 class="tw-mb-6">Measurable Outcomes</h3>
                                <div class="tab-content" id="pills-tabContent">
                                    <div aria-labelledby="pills-Daily-tab" class="tab-pane fade show active" id="pills-Daily" role="tabpanel" tabindex="0">
                                        <span class="tw-text-sm text-neutral-500 tw-mb-1 text-uppercase">Organic Traffic</span>
                                        <h5 class="tw-mb-6 counter text-main-600">+142%</h5>
                                    </div>
                                </div>
                                <img alt="" src="/assets/images/thumbs/revenue-chart.png" class="w-100" />
                            </div>
                        </div>
                        <div class="col-lg-6 ps-lg-5" data-aos="fade-left" data-aos-duration="800">
                            <div class="tw-mb-10">
                                <h2 class="splitTextStyleOne text-heading text-capitalize">Why SEO Still Matters</h2>
                                <p class="text-neutral-600 tw-mt-6 fw-medium tw-text-lg">
                                    Search engines remain one of the strongest sources of high-intent traffic. When people search for products or services, they are already looking for solutions. SEO helps your business appear in front of those users at the right moment.
                                </p>
                            </div>
                            <div class="row g-4">
                                <div class="col-sm-6">
                                    <div class="d-flex align-items-center tw-gap-3"><div class="tw-w-8 tw-h-8 rounded-circle bg-main-50 text-main-600 d-flex justify-content-center align-items-center"><i class="ph-bold ph-check"></i></div><span class="fw-medium text-heading">Increase organic traffic</span></div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="d-flex align-items-center tw-gap-3"><div class="tw-w-8 tw-h-8 rounded-circle bg-main-50 text-main-600 d-flex justify-content-center align-items-center"><i class="ph-bold ph-check"></i></div><span class="fw-medium text-heading">Generate qualified leads</span></div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="d-flex align-items-center tw-gap-3"><div class="tw-w-8 tw-h-8 rounded-circle bg-main-50 text-main-600 d-flex justify-content-center align-items-center"><i class="ph-bold ph-check"></i></div><span class="fw-medium text-heading">Improve brand visibility</span></div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="d-flex align-items-center tw-gap-3"><div class="tw-w-8 tw-h-8 rounded-circle bg-main-50 text-main-600 d-flex justify-content-center align-items-center"><i class="ph-bold ph-check"></i></div><span class="fw-medium text-heading">Build authority & trust</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- ======================== Why SEO Matters end ========================== -->

            <!-- ======================== SEO Services ========================== -->
            <section class="service-details bg-neutral-50 py-120">
                <div class="container">
                    <div class="max-w-602-px mx-auto text-center tw-mb-15">
                        <span class="tw-py-1 tw-px-705 bg-white tw-text-sm fw-medium text-capitalize rounded-pill tw-mb-205 border border-neutral-200">Our Services</span>
                        <h3 class="splitTextStyleOne fw-bold tw-leading-104 tw-mb-9">What We Do Best</h3>
                    </div>
                    <div class="row g-4">
                        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="600">
                            <div class="bg-white p-5 rounded-4 h-100 border border-neutral-100 common-shadow-three group-item">
                                <div class="tw-w-16 tw-h-16 bg-main-50 tw-text-3xl text-main-600 rounded-circle d-flex justify-content-center align-items-center tw-mb-6">
                                    <i class="ph-bold ph-wrench"></i>
                                </div>
                                <h4 class="tw-mb-3 text-heading">Technical SEO</h4>
                                <p class="text-neutral-600">We improve your website structure, speed, crawlability, and overall search performance.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="700">
                            <div class="bg-white p-5 rounded-4 h-100 border border-neutral-100 common-shadow-three group-item">
                                <div class="tw-w-16 tw-h-16 bg-main-50 tw-text-3xl text-main-600 rounded-circle d-flex justify-content-center align-items-center tw-mb-6">
                                    <i class="ph-bold ph-magnifying-glass"></i>
                                </div>
                                <h4 class="tw-mb-3 text-heading">Keyword Strategy</h4>
                                <p class="text-neutral-600">We identify high-intent keywords that align with your audience and business goals.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="800">
                            <div class="bg-white p-5 rounded-4 h-100 border border-neutral-100 common-shadow-three group-item">
                                <div class="tw-w-16 tw-h-16 bg-main-50 tw-text-3xl text-main-600 rounded-circle d-flex justify-content-center align-items-center tw-mb-6">
                                    <i class="ph-bold ph-browser"></i>
                                </div>
                                <h4 class="tw-mb-3 text-heading">On-Page SEO</h4>
                                <p class="text-neutral-600">From metadata to content optimization, we improve every page for better visibility.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="600">
                            <div class="bg-white p-5 rounded-4 h-100 border border-neutral-100 common-shadow-three group-item">
                                <div class="tw-w-16 tw-h-16 bg-main-50 tw-text-3xl text-main-600 rounded-circle d-flex justify-content-center align-items-center tw-mb-6">
                                    <i class="ph-bold ph-pencil-line"></i>
                                </div>
                                <h4 class="tw-mb-3 text-heading">Content Marketing</h4>
                                <p class="text-neutral-600">We create search-focused content that attracts traffic and builds authority.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="700">
                            <div class="bg-white p-5 rounded-4 h-100 border border-neutral-100 common-shadow-three group-item">
                                <div class="tw-w-16 tw-h-16 bg-main-50 tw-text-3xl text-main-600 rounded-circle d-flex justify-content-center align-items-center tw-mb-6">
                                    <i class="ph-bold ph-map-pin"></i>
                                </div>
                                <h4 class="tw-mb-3 text-heading">Local SEO</h4>
                                <p class="text-neutral-600">We help businesses improve visibility for location-based searches and local customers.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="800">
                            <div class="bg-white p-5 rounded-4 h-100 border border-neutral-100 common-shadow-three group-item">
                                <div class="tw-w-16 tw-h-16 bg-main-50 tw-text-3xl text-main-600 rounded-circle d-flex justify-content-center align-items-center tw-mb-6">
                                    <i class="ph-bold ph-link"></i>
                                </div>
                                <h4 class="tw-mb-3 text-heading">Link Building</h4>
                                <p class="text-neutral-600">We build quality backlinks that improve domain authority and search rankings.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- ======================== SEO Services end ========================== -->

            <!-- ============================ Our Process section start ============================== -->
            <section class="core-features bg-white tw-py-120 position-relative z-1">
                <div class="container">
                    <div class="max-w-602-px mx-auto text-center tw-mb-15">
                        <span class="tw-py-1 tw-px-705 bg-white tw-text-sm fw-medium text-capitalize rounded-pill tw-mb-205 border border-neutral-100">Our SEO Process</span>
                        <h3 class="splitTextStyleOne fw-bold tw-leading-104 tw-mb-9">
                            We have a unique process
                        </h3>
                        <p class="text-neutral-600 tw-text-lg">At every instance, you are aware of what is happening. Our steps include:</p>
                    </div>

                    <div class="row g-4 justify-content-center">
                        <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-duration="600">
                            <div class="bg-neutral-50 p-4 p-xl-5 rounded-4 h-100 border border-neutral-100 hover-shadow-lg tw-transition group-item text-center">
                                <h2 class="text-main-600 tw-text-6xl fw-bold mb-4 opacity-25">01</h2>
                                <h5 class="mb-3 text-heading">Website Audit</h5>
                                <p class="text-neutral-600 mb-0 tw-text-sm">We analyze your website to identify technical issues and growth opportunities.</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-duration="700">
                            <div class="bg-neutral-50 p-4 p-xl-5 rounded-4 h-100 border border-neutral-100 hover-shadow-lg tw-transition group-item text-center">
                                <h2 class="text-main-600 tw-text-6xl fw-bold mb-4 opacity-25">02</h2>
                                <h5 class="mb-3 text-heading">Competitor Analysis</h5>
                                <p class="text-neutral-600 mb-0 tw-text-sm">Understanding competitors helps us create smarter SEO strategies.</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-duration="800">
                            <div class="bg-neutral-50 p-4 p-xl-5 rounded-4 h-100 border border-neutral-100 hover-shadow-lg tw-transition group-item text-center">
                                <h2 class="text-main-600 tw-text-6xl fw-bold mb-4 opacity-25">03</h2>
                                <h5 class="mb-3 text-heading">Content Optimization</h5>
                                <p class="text-neutral-600 mb-0 tw-text-sm">We improve existing pages and create new content that ranks and converts.</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-duration="900">
                            <div class="bg-neutral-50 p-4 p-xl-5 rounded-4 h-100 border border-neutral-100 hover-shadow-lg tw-transition group-item text-center">
                                <h2 class="text-main-600 tw-text-6xl fw-bold mb-4 opacity-25">04</h2>
                                <h5 class="mb-3 text-heading">Performance Tracking</h5>
                                <p class="text-neutral-600 mb-0 tw-text-sm">Every campaign is monitored with accurate reporting and measurable KPIs.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- ============================ Our Process section end ============================== -->
"""

WEB_CONTENT = """
            <!-- ==================== Hero Start Here ==================== -->
            <section class="banner tw-py-80-px overflow-hidden section-bg-three position-relative bg-main-600" style="padding-top: 220px; padding-bottom: 120px;">
                <img alt="Shape" class="position-absolute top-0 tw-end-0 tw-me-12-percent" src="/assets/images/shapes/sqaure_shape.png" />
                <div class="container max-w-1400-px">
                    <div class="row gy-4 align-items-center">
                        <div class="col-lg-6">
                            <div class="">
                                <h1 class="fw-bold tw-leading-104 text-white">
                                    Website Development Built for Performance
                                </h1>
                                <p class="text-white opacity-75 tw-text-lg max-w-500-px fw-medium tw-mt-8">
                                    We focus on functionality, performance, and user experience. We don’t fall for just visuals.
                                </p>
                                <div class="tw-mt-11 d-flex align-items-center tw-gap-42-px flex-wrap">
                                    <div data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="800">
                                        <a class="hover--translate-y-1 active--translate-y-scale-9 btn bg-white text-main-600 hover-style-one button--stroke d-sm-inline-flex align-items-center justify-content-center tw-gap-5 group active--translate-y-2 tw-px-56-px tw-py-5 fw-semibold rounded-pill" href="/contact.php">
                                            <span class="button__flair bg-neutral-100"></span>
                                            <span class="button__label">Build Your Site</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="tw-ps-98-px position-relative">
                                <div class="position-relative z-1">
                                    <img alt="" data-aos="zoom-in" data-aos-duration="1000" src="/assets/images/thumbs/banner-dashboard.png" class="tw-rounded-3xl common-shadow-two" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- ==================== Hero End Here ==================== -->

            <!-- ======================== Why Your Website Matters ========================== -->
            <section class="pt-60 pb-60 drag-rotate-element-section mt-5">
                <div class="container">
                    <div class="tw-rounded-50-px gradient-bg-one tw-px-36-px tw-py-80-px">
                        <div class="row gy-4 align-items-center">
                            <div class="col-lg-5">
                                <div class="tw-pe-12 about-cards-wrapper position-relative text-white">
                                    <h2 class="splitTextStyleOne text-white text-capitalize">Why Your Website Matters</h2>
                                    <p class="text-white opacity-75 tw-mt-6 fw-medium tw-text-lg">
                                        Your website is more than just a digital presence. It is your brand’s first impression, lead generation system, sales platform, and growth engine.<br><br>
                                        A slow, outdated, or poorly structured website can impact trust, conversions, and business growth.
                                    </p>
                                    <ul class="text-white opacity-75 tw-text-lg list-unstyled tw-flex tw-flex-col tw-gap-3 mt-4">
                                        <li><i class="ph-fill ph-check-circle text-white tw-me-2"></i> Build credibility</li>
                                        <li><i class="ph-fill ph-check-circle text-white tw-me-2"></i> Improve user experience</li>
                                        <li><i class="ph-fill ph-check-circle text-white tw-me-2"></i> Generate more leads</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="row g-2">
                                    <div class="col-sm-6" data-aos="fade-up" data-aos-duration="600">
                                        <div class="bg-white tw-rounded-3xl tw-p-8 text-center h-100 d-flex flex-column justify-content-center align-items-center hover-shadow-lg tw-transition">
                                            <div class="tw-w-16 tw-h-16 bg-main-50 tw-text-3xl text-main-600 rounded-circle d-flex justify-content-center align-items-center tw-mb-4">
                                                <i class="ph-bold ph-building-office"></i>
                                            </div>
                                            <h4 class="text-heading">Business Website</h4>
                                            <p class="text-neutral-600 tw-text-sm">Professional websites designed to represent your brand and convert visitors.</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-6" data-aos="fade-up" data-aos-duration="700">
                                        <div class="bg-white tw-rounded-3xl tw-p-8 text-center h-100 d-flex flex-column justify-content-center align-items-center hover-shadow-lg tw-transition">
                                            <div class="tw-w-16 tw-h-16 bg-main-50 tw-text-3xl text-main-600 rounded-circle d-flex justify-content-center align-items-center tw-mb-4">
                                                <i class="ph-bold ph-code"></i>
                                            </div>
                                            <h4 class="text-heading">Custom Web Dev</h4>
                                            <p class="text-neutral-600 tw-text-sm">Tailored solutions built around your business needs and workflows.</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-6" data-aos="fade-up" data-aos-duration="600">
                                        <div class="bg-white tw-rounded-3xl tw-p-8 text-center h-100 d-flex flex-column justify-content-center align-items-center hover-shadow-lg tw-transition">
                                            <div class="tw-w-16 tw-h-16 bg-main-50 tw-text-3xl text-main-600 rounded-circle d-flex justify-content-center align-items-center tw-mb-4">
                                                <i class="ph-bold ph-shopping-cart"></i>
                                            </div>
                                            <h4 class="text-heading">E-Commerce</h4>
                                            <p class="text-neutral-600 tw-text-sm">Online stores optimized for sales, user experience, and scalability.</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-6" data-aos="fade-up" data-aos-duration="700">
                                        <div class="bg-white tw-rounded-3xl tw-p-8 text-center h-100 d-flex flex-column justify-content-center align-items-center hover-shadow-lg tw-transition">
                                            <div class="tw-w-16 tw-h-16 bg-main-50 tw-text-3xl text-main-600 rounded-circle d-flex justify-content-center align-items-center tw-mb-4">
                                                <i class="ph-bold ph-layout"></i>
                                            </div>
                                            <h4 class="text-heading">Landing Pages</h4>
                                            <p class="text-neutral-600 tw-text-sm">High-converting landing pages built for campaigns and lead generation.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- ======================== Why Your Website Matters end ========================== -->

            <!-- ============================ Why Us section start ============================== -->
            <section class="core-features bg-neutral-50 tw-py-120 position-relative z-1">
                <div class="container">
                    <div class="max-w-602-px mx-auto text-center tw-mb-15">
                        <span class="tw-py-1 tw-px-705 bg-white tw-text-sm fw-medium text-capitalize rounded-pill tw-mb-205 border border-neutral-100">Why Us?</span>
                        <h3 class="splitTextStyleOne fw-bold tw-leading-104 tw-mb-9">
                            What Makes Our Websites Different?
                        </h3>
                        <p class="text-neutral-600 tw-text-lg">The market is full of brands that do the same thing for everyone. Here’s why we stand out.</p>
                    </div>

                    <div class="row g-4 justify-content-center">
                        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="600">
                            <div class="bg-white p-4 p-xl-5 rounded-4 h-100 border border-neutral-100 hover-shadow-lg tw-transition group-item text-center">
                                <div class="tw-w-20 tw-h-20 bg-main-50 text-main-600 tw-text-4xl rounded-circle d-flex justify-content-center align-items-center mx-auto tw-mb-6 group-hover-bg-main-600 group-hover-text-white tw-transition">
                                    <i class="ph-bold ph-device-mobile"></i>
                                </div>
                                <h4 class="mb-3 text-heading">Mobile-Responsive</h4>
                                <p class="text-neutral-600 mb-0">Your website performs seamlessly across mobile, tablet, and desktop devices.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="700">
                            <div class="bg-white p-4 p-xl-5 rounded-4 h-100 border border-neutral-100 hover-shadow-lg tw-transition group-item text-center">
                                <div class="tw-w-20 tw-h-20 bg-main-50 text-main-600 tw-text-4xl rounded-circle d-flex justify-content-center align-items-center mx-auto tw-mb-6 group-hover-bg-main-600 group-hover-text-white tw-transition">
                                    <i class="ph-bold ph-lightning"></i>
                                </div>
                                <h4 class="mb-3 text-heading">Fast Loading Speed</h4>
                                <p class="text-neutral-600 mb-0">We optimize performance to improve user experience and search rankings.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="800">
                            <div class="bg-white p-4 p-xl-5 rounded-4 h-100 border border-neutral-100 hover-shadow-lg tw-transition group-item text-center">
                                <div class="tw-w-20 tw-h-20 bg-main-50 text-main-600 tw-text-4xl rounded-circle d-flex justify-content-center align-items-center mx-auto tw-mb-6 group-hover-bg-main-600 group-hover-text-white tw-transition">
                                    <i class="ph-bold ph-magnifying-glass"></i>
                                </div>
                                <h4 class="mb-3 text-heading">SEO-Friendly</h4>
                                <p class="text-neutral-600 mb-0">Every website is built with search engine best practices in mind.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- ============================ Why Us section end ============================== -->
"""

def replace_content(filename, new_content):
    with open(filename, 'r', encoding='utf-8') as f:
        content = f.read()

    start_marker = '<div id="smooth-content">'
    end_marker = '<?php include \'partials/footer.php\'; ?>'
    
    start_idx = content.find(start_marker)
    end_idx = content.find(end_marker)

    if start_idx != -1 and end_idx != -1:
        start_idx += len(start_marker)
        
        new_file_content = content[:start_idx] + "\\n" + new_content + "\\n            " + content[end_idx:]
        
        with open(filename, 'w', encoding='utf-8') as f:
            f.write(new_file_content)
        print(f"Updated {filename}")
    else:
        print(f"Could not find markers in {filename}")

replace_content("aeo.php", AEO_CONTENT)
replace_content("seo.php", SEO_CONTENT)
replace_content("web-development.php", WEB_CONTENT)
