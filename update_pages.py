import os
import re

AEO_CONTENT = """
            <!-- ==================== Hero Start Here ==================== -->
            <style>
            .premium-heading {
                letter-spacing: -0.03em;
                line-height: 1.1;
                color: #0b090f;
            }
            .accent-blue {
                color: #2563eb;
            }
            .accent-underline {
                position: relative;
                display: inline-block;
            }
            .accent-underline::after {
                content: '';
                position: absolute;
                bottom: 8px;
                left: 0;
                width: 100%;
                height: 8px;
                background-color: rgba(37, 99, 235, 0.2);
                z-index: -1;
            }
            .editorial-card {
                background: #ffffff;
                border: 1px solid #e2e8f0;
                border-radius: 24px;
                transition: transform 0.3s ease, box-shadow 0.3s ease;
                box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05), 0 2px 4px -1px rgba(0, 0, 0, 0.03);
            }
            .editorial-card:hover {
                transform: translateY(-4px);
                box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
                border-color: #cbd5e1;
            }
            .feature-icon-wrapper {
                width: 56px;
                height: 56px;
                border-radius: 16px;
                background: #f1f5f9;
                display: flex;
                align-items: center;
                justify-content: center;
                font-size: 1.5rem;
                color: #2563eb;
                margin-bottom: 1.5rem;
            }
            </style>

            <section class="hero-section position-relative bg-white tw-pb-120 overflow-hidden" style="min-height: 850px; padding-top: 250px;">
                <div class="container position-relative z-1">
                    <div class="row align-items-center">
                        <div class="col-lg-8 max-w-900-px">
                            <div class="d-inline-flex align-items-center tw-gap-3 tw-mb-6 border border-neutral-200 tw-px-5 tw-py-2 tw-rounded-full bg-neutral-50">
                                <span class="tw-w-2 tw-h-2 bg-blue-600 rounded-circle"></span>
                                <span class="text-neutral-700 tw-text-sm fw-bold text-uppercase letter-spacing-1">Next-Gen Search is Here</span>
                            </div>
                            <h1 class="premium-heading fw-bold tw-text-5xl md:tw-text-7xl lg:tw-text-8xl tw-mb-6">
                                Optimize for <br> <span class="accent-underline text-heading">Answer Engines</span>
                            </h1>
                            <p class="text-neutral-600 tw-text-xl md:tw-text-2xl tw-mb-10 fw-light max-w-700-px">
                                Be the exact answer users find when they ask AI platforms, Voice Assistants, and modern Search Engines.
                            </p>
                            <div class="d-flex tw-gap-4 flex-wrap">
                                <a href="/contact.php" class="btn btn-main hover-style-two tw-px-10 tw-py-4 rounded-pill fw-bold" style="background-color: #2563eb; border-color: #2563eb;">
                                    Start Optimizing
                                </a>
                                <a href="#explore" class="btn bg-white text-heading border border-neutral-300 hover-bg-neutral-50 tw-px-10 tw-py-4 rounded-pill fw-bold">
                                    Explore AEO
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- ==================== Hero End Here ==================== -->

            <!-- ======================== What Is AEO ========================== -->
            <section id="explore" class="about-two py-120 position-relative z-1 overflow-hidden bg-neutral-50">
                <div class="container">
                    <div class="row gy-5 align-items-center">
                        <div class="col-lg-6" data-aos="fade-right" data-aos-duration="800">
                            <div class="position-relative">
                                <img src="/assets/images/thumbs/about-four-thumb-1.png" class="w-100 tw-rounded-3xl position-relative z-1 shadow-sm" alt="AEO Dashboard" />
                                <div class="position-absolute bottom-0 tw-end-0 bg-white tw-p-8 tw-rounded-3xl tw-m-6 z-2 shadow-sm border border-neutral-100">
                                    <h4 class="text-heading tw-text-4xl fw-bold tw-mb-2">10x</h4>
                                    <p class="text-neutral-500 tw-text-sm mb-0 fw-medium text-uppercase letter-spacing-1">More AI Visibility</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6" data-aos="fade-left" data-aos-duration="800">
                            <div class="ps-xl-5">
                                <h4 class="tw-mb-4 fw-bold text-blue-600 tw-text-lg text-uppercase letter-spacing-1">The Shift in Search</h4>
                                <h2 class="text-heading text-capitalize premium-heading tw-text-4xl md:tw-text-5xl tw-mb-6">What Is AEO?</h2>
                                <p class="text-neutral-600 tw-text-lg fw-light tw-leading-relaxed tw-mb-8">
                                    Users no longer just type keywords—they ask full questions to AI and Voice Assistants. Answer Engine Optimization (AEO) ensures your content is structured precisely so AI platforms recognize and feature <span class="text-heading fw-semibold">your business</span> as the direct answer.
                                </p>
                                <div class="row g-4 mt-2">
                                    <div class="col-sm-6">
                                        <div class="bg-white tw-p-5 tw-rounded-2xl d-flex align-items-center tw-gap-4 border border-neutral-200">
                                            <i class="ph-bold ph-chat-teardrop-text tw-text-2xl text-neutral-400"></i>
                                            <span class="text-heading fw-semibold">AI Answers</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="bg-white tw-p-5 tw-rounded-2xl d-flex align-items-center tw-gap-4 border border-neutral-200">
                                            <i class="ph-bold ph-microphone-stage tw-text-2xl text-neutral-400"></i>
                                            <span class="text-heading fw-semibold">Voice Search</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="bg-white tw-p-5 tw-rounded-2xl d-flex align-items-center tw-gap-4 border border-neutral-200">
                                            <i class="ph-bold ph-star tw-text-2xl text-neutral-400"></i>
                                            <span class="text-heading fw-semibold">Featured Snippets</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="bg-white tw-p-5 tw-rounded-2xl d-flex align-items-center tw-gap-4 border border-neutral-200">
                                            <i class="ph-bold ph-tree-structure tw-text-2xl text-neutral-400"></i>
                                            <span class="text-heading fw-semibold">Semantic Search</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- ======================== What Is AEO end ========================== -->

            <!-- ======================== AEO Services ========================== -->
            <section class="service-details py-120 bg-white position-relative z-1 overflow-hidden border-top border-neutral-100">
                <div class="container">
                    <div class="max-w-700-px mx-auto text-center tw-mb-15">
                        <h4 class="tw-mb-4 fw-bold text-blue-600 tw-text-lg text-uppercase letter-spacing-1">Solutions</h4>
                        <h3 class="premium-heading tw-text-4xl md:tw-text-5xl tw-mb-4">Our AEO Expertise</h3>
                        <p class="text-neutral-500 tw-text-lg fw-light">Dominate the AI landscape with our specialized, data-driven optimization strategies.</p>
                    </div>
                    
                    <div class="row g-4">
                        <div class="col-lg-8" data-aos="fade-up" data-aos-duration="600">
                            <div class="editorial-card tw-p-8 md:tw-p-12 h-100 d-flex flex-column justify-content-between">
                                <div>
                                    <div class="feature-icon-wrapper">
                                        <i class="ph-bold ph-robot"></i>
                                    </div>
                                    <h3 class="text-heading tw-text-3xl fw-bold tw-mb-4">AI Search Optimization</h3>
                                    <p class="text-neutral-600 tw-text-lg fw-light max-w-500-px">
                                        We re-architect your website content to be highly readable by AI-driven search platforms and modern answer engines like ChatGPT, Perplexity, and Gemini.
                                    </p>
                                </div>
                                <div class="mt-5">
                                    <a href="/contact.php" class="text-blue-600 fw-bold hover-text-blue-700 tw-transition d-inline-flex align-items-center tw-gap-2">
                                        Learn More <i class="ph-bold ph-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-lg-4" data-aos="fade-up" data-aos-duration="700">
                            <div class="editorial-card tw-p-8 h-100 bg-neutral-50 border-0">
                                <div class="feature-icon-wrapper bg-white shadow-sm text-neutral-800">
                                    <i class="ph-bold ph-code"></i>
                                </div>
                                <h4 class="text-heading tw-text-xl fw-bold tw-mb-3">Structured Data</h4>
                                <p class="text-neutral-600 fw-light">Advanced schema markup that feeds direct, unambiguous facts to AI models.</p>
                            </div>
                        </div>

                        <div class="col-lg-4" data-aos="fade-up" data-aos-duration="800">
                            <div class="editorial-card tw-p-8 h-100">
                                <div class="feature-icon-wrapper bg-blue-50 text-blue-600">
                                    <i class="ph-bold ph-microphone-stage"></i>
                                </div>
                                <h4 class="text-heading tw-text-xl fw-bold tw-mb-3">Voice Search</h4>
                                <p class="text-neutral-600 fw-light">Conversational optimizations tailored for Siri, Alexa, and Google Assistant.</p>
                            </div>
                        </div>
                        
                        <div class="col-lg-4" data-aos="fade-up" data-aos-duration="900">
                            <div class="editorial-card tw-p-8 h-100">
                                <div class="feature-icon-wrapper bg-green-50 text-green-600">
                                    <i class="ph-bold ph-question"></i>
                                </div>
                                <h4 class="text-heading tw-text-xl fw-bold tw-mb-3">Question Content</h4>
                                <p class="text-neutral-600 fw-light">High-intent FAQs and Q&A content designed to trigger direct answers.</p>
                            </div>
                        </div>

                        <div class="col-lg-4" data-aos="fade-up" data-aos-duration="1000">
                            <div class="editorial-card tw-p-8 h-100">
                                <div class="feature-icon-wrapper bg-purple-50 text-purple-600">
                                    <i class="ph-bold ph-tree-structure"></i>
                                </div>
                                <h4 class="text-heading tw-text-xl fw-bold tw-mb-3">Entity SEO</h4>
                                <p class="text-neutral-600 fw-light">Building topical authority networks that AI systems deeply trust.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- ======================== AEO Services end ========================== -->

            <!-- ============================ Why Us section start ============================== -->
            <section class="core-features bg-neutral-50 tw-py-120 position-relative z-1 overflow-hidden">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-5 tw-mb-12 lg:tw-mb-0">
                            <h4 class="tw-mb-4 fw-bold text-blue-600 tw-text-lg text-uppercase letter-spacing-1">The Edge</h4>
                            <h3 class="premium-heading tw-text-4xl md:tw-text-5xl tw-mb-6 tw-leading-tight">
                                Why Choose Us for AEO?
                            </h3>
                            <p class="text-neutral-600 tw-text-lg tw-mb-8 fw-light">
                                We don't just chase algorithms; we build future-proof authority. Our data-driven approach ensures you capture high-intent users before they even reach a traditional search result.
                            </p>
                            <a class="btn bg-white text-heading border border-neutral-300 hover-bg-neutral-100 d-inline-flex align-items-center justify-content-center tw-gap-3 group tw-px-8 tw-py-4 rounded-pill fw-bold shadow-sm" href="/contact.php">
                                <span class="button__label">Get A Demo Today</span>
                                <i class="ph-bold ph-arrow-right group-hover-translate-x-1 tw-transition"></i>
                            </a>
                        </div>
                        <div class="col-lg-7 pl-lg-5">
                            <div class="row g-4">
                                <div class="col-md-6" data-aos="fade-up" data-aos-duration="600">
                                    <div class="bg-white p-5 rounded-4 h-100 border border-neutral-200 hover-bg-neutral-50 tw-transition">
                                        <div class="tw-text-3xl text-blue-600 tw-mb-4"><i class="ph-bold ph-chart-line-up"></i></div>
                                        <h5 class="mb-3 text-heading fw-bold">Data-Driven</h5>
                                        <p class="text-neutral-500 mb-0 tw-text-sm fw-light tw-leading-relaxed">Every optimization is based on user behavior, search intent, and AI visibility trends.</p>
                                    </div>
                                </div>
                                <div class="col-md-6" data-aos="fade-up" data-aos-duration="700">
                                    <div class="bg-white p-5 rounded-4 h-100 border border-neutral-200 hover-bg-neutral-50 tw-transition md:tw-mt-8">
                                        <div class="tw-text-3xl text-blue-600 tw-mb-4"><i class="ph-bold ph-rocket"></i></div>
                                        <h5 class="mb-3 text-heading fw-bold">Future-Focused</h5>
                                        <p class="text-neutral-500 mb-0 tw-text-sm fw-light tw-leading-relaxed">We prepare your business for the next generation of conversational search experiences.</p>
                                    </div>
                                </div>
                                <div class="col-md-6" data-aos="fade-up" data-aos-duration="800">
                                    <div class="bg-white p-5 rounded-4 h-100 border border-neutral-200 hover-bg-neutral-50 tw-transition">
                                        <div class="tw-text-3xl text-blue-600 tw-mb-4"><i class="ph-bold ph-file-text"></i></div>
                                        <h5 class="mb-3 text-heading fw-bold">Clear Reporting</h5>
                                        <p class="text-neutral-500 mb-0 tw-text-sm fw-light tw-leading-relaxed">Transparent insights into rankings, visibility, and answer engine performance.</p>
                                    </div>
                                </div>
                                <div class="col-md-6" data-aos="fade-up" data-aos-duration="900">
                                    <div class="bg-white p-5 rounded-4 h-100 border border-neutral-200 hover-bg-neutral-50 tw-transition md:tw-mt-8">
                                        <div class="tw-text-3xl text-blue-600 tw-mb-4"><i class="ph-bold ph-puzzle-piece"></i></div>
                                        <h5 class="mb-3 text-heading fw-bold">Integrated</h5>
                                        <p class="text-neutral-500 mb-0 tw-text-sm fw-light tw-leading-relaxed">AEO works flawlessly when combined with SEO, content, and technical optimization.</p>
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
            <section class="hero-section position-relative bg-cover bg-center tw-pb-120" style="background-image: url('/assets/images/thumbs/office-stock.jpg'); min-height: 700px; padding-top: 300px;">
                <div class="position-absolute top-0 start-0 w-100 h-100 bg-black opacity-50 z-0"></div>
                <div class="container position-relative z-1 text-center">
                    <div class="d-inline-flex align-items-center tw-gap-2 tw-mb-4 text-white hover-text-main-600 tw-text-sm fw-medium text-uppercase letter-spacing-1">
                        <a href="/" class="text-white hover-text-main-600 tw-transition">Home</a>
                        <span class="tw-text-8-px">
                            <i class="ph-fill ph-circle"></i>
                        </span>
                        <span class="text-white">Services</span>
                    </div>
                    <h1 class="text-white fw-bold tw-text-5xl md:tw-text-6xl lg:tw-text-7xl tw-mb-6 text-capitalize drop-shadow-md">SEO (Search Engine Optimization)</h1>
                    <p class="text-white tw-text-xl tw-mb-8 max-w-700-px mx-auto">SEO That Drives Rankings, Traffic, and Revenue</p>
                </div>
            </section>
            <!-- ==================== Hero End Here ==================== -->
            <!-- ======================== Services Details Start ========================== -->
            <section class="service-details py-120">
                <div class="container">
                    <div class="row gy-4">
                        <div class="col-xl-5 pe-lg-5">
                            <div id="sticky-sidebar" class="max-w-450-px d-flex flex-column tw-gap-8">
                                <h2 class="splitTextStyleOne fw-bold tw-mb-0">
                                    Why SEO Still Matters
                                </h2>
                                <p class="text-neutral-600 tw-text-lg">
                                    Search engines remain one of the strongest sources of high-intent traffic.<br><br>
                                    When people search for products or services, they are already looking for solutions. SEO helps your business appear in front of those users at the right moment.
                                </p>
                                <ul class="text-neutral-600 tw-text-lg list-unstyled tw-flex tw-flex-col tw-gap-3">
                                    <li><i class="ph-fill ph-check-circle text-main-600 tw-me-2"></i> Increase organic traffic</li>
                                    <li><i class="ph-fill ph-check-circle text-main-600 tw-me-2"></i> Generate qualified leads</li>
                                    <li><i class="ph-fill ph-check-circle text-main-600 tw-me-2"></i> Improve brand visibility</li>
                                    <li><i class="ph-fill ph-check-circle text-main-600 tw-me-2"></i> Build authority and trust</li>
                                    <li><i class="ph-fill ph-check-circle text-main-600 tw-me-2"></i> Reduce long-term advertising costs</li>
                                    <li><i class="ph-fill ph-check-circle text-main-600 tw-me-2"></i> Drive sustainable business growth</li>
                                </ul>
                                <div>
                                    <a class="btn btn-main hover-style-two button--stroke d-inline-flex align-items-center justify-content-center tw-gap-5 group active--translate-y-2 tw-px-10 tw-py-405 rounded-pill fw-bold"
                                        data-block="button" href="/contact.php">
                                        <span class="button__flair"></span>
                                        <span class="button__label">LEARN MORE</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-7">
                            <h3 class="tw-mb-8">Our SEO Services</h3>
                            <div class="row g-4">
                                <div class="col-md-6" data-aos="fade-up" data-aos-duration="600">
                                    <div class="bg-white tw-p-8 tw-rounded-2xl border border-neutral-100 hover-shadow-lg tw-transition h-100 group-item">
                                        <div class="tw-w-16 tw-h-16 bg-main-50 tw-text-3xl text-main-600 rounded-circle d-flex justify-content-center align-items-center tw-mb-6 group-hover-bg-main-600 group-hover-text-white tw-transition">
                                            <i class="ph-bold ph-wrench"></i>
                                        </div>
                                        <h4 class="tw-mb-3"><a href="#" class="text-heading hover-text-main-600 tw-transition line-clamp-1">Technical SEO</a></h4>
                                        <p class="text-neutral-600 line-clamp-3">We improve your website structure, speed, crawlability, and overall search performance.</p>
                                    </div>
                                </div>
                                <div class="col-md-6" data-aos="fade-up" data-aos-duration="700">
                                    <div class="bg-white tw-p-8 tw-rounded-2xl border border-neutral-100 hover-shadow-lg tw-transition h-100 group-item">
                                        <div class="tw-w-16 tw-h-16 bg-main-50 tw-text-3xl text-main-600 rounded-circle d-flex justify-content-center align-items-center tw-mb-6 group-hover-bg-main-600 group-hover-text-white tw-transition">
                                            <i class="ph-bold ph-magnifying-glass"></i>
                                        </div>
                                        <h4 class="tw-mb-3"><a href="#" class="text-heading hover-text-main-600 tw-transition line-clamp-1">Keyword Strategy</a></h4>
                                        <p class="text-neutral-600 line-clamp-3">We identify high-intent keywords that align with your audience and business goals.</p>
                                    </div>
                                </div>
                                <div class="col-md-6" data-aos="fade-up" data-aos-duration="600">
                                    <div class="bg-white tw-p-8 tw-rounded-2xl border border-neutral-100 hover-shadow-lg tw-transition h-100 group-item">
                                        <div class="tw-w-16 tw-h-16 bg-main-50 tw-text-3xl text-main-600 rounded-circle d-flex justify-content-center align-items-center tw-mb-6 group-hover-bg-main-600 group-hover-text-white tw-transition">
                                            <i class="ph-bold ph-browser"></i>
                                        </div>
                                        <h4 class="tw-mb-3"><a href="#" class="text-heading hover-text-main-600 tw-transition line-clamp-1">On-Page SEO</a></h4>
                                        <p class="text-neutral-600 line-clamp-3">From metadata to content optimization, we improve every page for better visibility.</p>
                                    </div>
                                </div>
                                <div class="col-md-6" data-aos="fade-up" data-aos-duration="700">
                                    <div class="bg-white tw-p-8 tw-rounded-2xl border border-neutral-100 hover-shadow-lg tw-transition h-100 group-item">
                                        <div class="tw-w-16 tw-h-16 bg-main-50 tw-text-3xl text-main-600 rounded-circle d-flex justify-content-center align-items-center tw-mb-6 group-hover-bg-main-600 group-hover-text-white tw-transition">
                                            <i class="ph-bold ph-pencil-line"></i>
                                        </div>
                                        <h4 class="tw-mb-3"><a href="#" class="text-heading hover-text-main-600 tw-transition line-clamp-1">Content Marketing</a></h4>
                                        <p class="text-neutral-600 line-clamp-3">We create search-focused content that attracts traffic and builds authority.</p>
                                    </div>
                                </div>
                                <div class="col-md-6" data-aos="fade-up" data-aos-duration="600">
                                    <div class="bg-white tw-p-8 tw-rounded-2xl border border-neutral-100 hover-shadow-lg tw-transition h-100 group-item">
                                        <div class="tw-w-16 tw-h-16 bg-main-50 tw-text-3xl text-main-600 rounded-circle d-flex justify-content-center align-items-center tw-mb-6 group-hover-bg-main-600 group-hover-text-white tw-transition">
                                            <i class="ph-bold ph-map-pin"></i>
                                        </div>
                                        <h4 class="tw-mb-3"><a href="#" class="text-heading hover-text-main-600 tw-transition line-clamp-1">Local SEO</a></h4>
                                        <p class="text-neutral-600 line-clamp-3">We help businesses improve visibility for location-based searches and local customers.</p>
                                    </div>
                                </div>
                                <div class="col-md-6" data-aos="fade-up" data-aos-duration="700">
                                    <div class="bg-white tw-p-8 tw-rounded-2xl border border-neutral-100 hover-shadow-lg tw-transition h-100 group-item">
                                        <div class="tw-w-16 tw-h-16 bg-main-50 tw-text-3xl text-main-600 rounded-circle d-flex justify-content-center align-items-center tw-mb-6 group-hover-bg-main-600 group-hover-text-white tw-transition">
                                            <i class="ph-bold ph-link"></i>
                                        </div>
                                        <h4 class="tw-mb-3"><a href="#" class="text-heading hover-text-main-600 tw-transition line-clamp-1">Link Building</a></h4>
                                        <p class="text-neutral-600 line-clamp-3">We build quality backlinks that improve domain authority and search rankings.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- ======================== Services Details end ========================== -->
            <!-- ============================ Core Features section start ============================== -->
            <section class="core-features bg-neutral-50 tw-py-120 position-relative z-1">
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
                            <div class="bg-white p-4 p-xl-5 rounded-4 h-100 border border-neutral-100 hover-shadow-lg tw-transition group-item text-center">
                                <h2 class="text-main-600 mb-4 opacity-50">01</h2>
                                <h5 class="mb-3 text-heading">Website Audit</h5>
                                <p class="text-neutral-600 mb-0">We analyze your website to identify technical issues and growth opportunities.</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-duration="700">
                            <div class="bg-white p-4 p-xl-5 rounded-4 h-100 border border-neutral-100 hover-shadow-lg tw-transition group-item text-center">
                                <h2 class="text-main-600 mb-4 opacity-50">02</h2>
                                <h5 class="mb-3 text-heading">Competitor Analysis</h5>
                                <p class="text-neutral-600 mb-0">Understanding competitors helps us create smarter SEO strategies.</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-duration="800">
                            <div class="bg-white p-4 p-xl-5 rounded-4 h-100 border border-neutral-100 hover-shadow-lg tw-transition group-item text-center">
                                <h2 class="text-main-600 mb-4 opacity-50">03</h2>
                                <h5 class="mb-3 text-heading">Content Optimization</h5>
                                <p class="text-neutral-600 mb-0">We improve existing pages and create new content that ranks and converts.</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-duration="900">
                            <div class="bg-white p-4 p-xl-5 rounded-4 h-100 border border-neutral-100 hover-shadow-lg tw-transition group-item text-center">
                                <h2 class="text-main-600 mb-4 opacity-50">04</h2>
                                <h5 class="mb-3 text-heading">Performance Tracking</h5>
                                <p class="text-neutral-600 mb-0">Every campaign is monitored with accurate reporting and measurable KPIs.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- ============================ Core Features section end ============================== -->
            <!-- ============================ Boost Efficiency section start ============================== -->
            <section class="efficiency-section py-120 overflow-hidden">
                <div class="container">
                    <div class="row gy-5 align-items-center">
                        <div class="col-lg-6" data-aos="fade-right" data-aos-duration="800">
                            <div class="position-relative">
                                <img alt="Efficiency" class="w-100 rounded-4" src="/assets/images/thumbs/about-img.png" />
                            </div>
                        </div>
                        <div class="col-lg-6 ps-lg-5" data-aos="fade-left" data-aos-duration="800">
                            <h2 class="splitTextStyleOne fw-bold tw-mb-6">
                                Grow Organically With Confidence
                            </h2>
                            <p class="text-neutral-600 tw-text-lg tw-mb-10">
                                SEO is not just about being visible online. It is about becoming the trusted solution your audience chooses.<br><br>
                                At Akkurate, we help businesses create scalable organic growth systems that continue performing month after month.
                            </p>
                            <div>
                                <a class="btn btn-main hover-style-two button--stroke d-inline-flex align-items-center justify-content-center tw-gap-5 group active--translate-y-2 tw-px-10 tw-py-405 rounded-pill fw-bold"
                                    data-block="button" href="/contact.php">
                                    <span class="button__flair"></span>
                                    <span class="button__label">GET A DEMO TODAY</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- ============================ Boost Efficiency section end ============================== -->
"""

WEB_CONTENT = """
            <!-- ==================== Hero Start Here ==================== -->
            <section class="hero-section position-relative bg-cover bg-center tw-pb-120" style="background-image: url('/assets/images/thumbs/office-stock.jpg'); min-height: 700px; padding-top: 300px;">
                <div class="position-absolute top-0 start-0 w-100 h-100 bg-black opacity-50 z-0"></div>
                <div class="container position-relative z-1 text-center">
                    <div class="d-inline-flex align-items-center tw-gap-2 tw-mb-4 text-white hover-text-main-600 tw-text-sm fw-medium text-uppercase letter-spacing-1">
                        <a href="/" class="text-white hover-text-main-600 tw-transition">Home</a>
                        <span class="tw-text-8-px">
                            <i class="ph-fill ph-circle"></i>
                        </span>
                        <span class="text-white">Services</span>
                    </div>
                    <h1 class="text-white fw-bold tw-text-5xl md:tw-text-6xl lg:tw-text-7xl tw-mb-6 text-capitalize drop-shadow-md">Web Development</h1>
                    <p class="text-white tw-text-xl tw-mb-8 max-w-700-px mx-auto">Website Development Built for Performance and Growth</p>
                </div>
            </section>
            <!-- ==================== Hero End Here ==================== -->
            <!-- ======================== Services Details Start ========================== -->
            <section class="service-details py-120">
                <div class="container">
                    <div class="row gy-4">
                        <div class="col-xl-5 pe-lg-5">
                            <div id="sticky-sidebar" class="max-w-450-px d-flex flex-column tw-gap-8">
                                <h2 class="splitTextStyleOne fw-bold tw-mb-0">
                                    Why Your Website Matters
                                </h2>
                                <p class="text-neutral-600 tw-text-lg">
                                    A slow, outdated, or poorly structured website can impact trust, conversions, and business growth. A professionally developed website helps you:<br><br>
                                </p>
                                <ul class="text-neutral-600 tw-text-lg list-unstyled tw-flex tw-flex-col tw-gap-3">
                                    <li><i class="ph-fill ph-check-circle text-main-600 tw-me-2"></i> Build credibility</li>
                                    <li><i class="ph-fill ph-check-circle text-main-600 tw-me-2"></i> Improve user experience</li>
                                    <li><i class="ph-fill ph-check-circle text-main-600 tw-me-2"></i> Generate more leads</li>
                                    <li><i class="ph-fill ph-check-circle text-main-600 tw-me-2"></i> Increase conversions</li>
                                    <li><i class="ph-fill ph-check-circle text-main-600 tw-me-2"></i> Improve SEO performance</li>
                                    <li><i class="ph-fill ph-check-circle text-main-600 tw-me-2"></i> Create a stronger digital presence</li>
                                </ul>
                                <div>
                                    <a class="btn btn-main hover-style-two button--stroke d-inline-flex align-items-center justify-content-center tw-gap-5 group active--translate-y-2 tw-px-10 tw-py-405 rounded-pill fw-bold"
                                        data-block="button" href="/contact.php">
                                        <span class="button__flair"></span>
                                        <span class="button__label">LEARN MORE</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-7">
                            <h3 class="tw-mb-8">Our Web Development Services</h3>
                            <div class="row g-4">
                                <div class="col-md-6" data-aos="fade-up" data-aos-duration="600">
                                    <div class="bg-white tw-p-8 tw-rounded-2xl border border-neutral-100 hover-shadow-lg tw-transition h-100 group-item">
                                        <div class="tw-w-16 tw-h-16 bg-main-50 tw-text-3xl text-main-600 rounded-circle d-flex justify-content-center align-items-center tw-mb-6 group-hover-bg-main-600 group-hover-text-white tw-transition">
                                            <i class="ph-bold ph-building-office"></i>
                                        </div>
                                        <h4 class="tw-mb-3"><a href="#" class="text-heading hover-text-main-600 tw-transition line-clamp-1">Business Website</a></h4>
                                        <p class="text-neutral-600 line-clamp-3">Professional websites designed to represent your brand and convert visitors into customers.</p>
                                    </div>
                                </div>
                                <div class="col-md-6" data-aos="fade-up" data-aos-duration="700">
                                    <div class="bg-white tw-p-8 tw-rounded-2xl border border-neutral-100 hover-shadow-lg tw-transition h-100 group-item">
                                        <div class="tw-w-16 tw-h-16 bg-main-50 tw-text-3xl text-main-600 rounded-circle d-flex justify-content-center align-items-center tw-mb-6 group-hover-bg-main-600 group-hover-text-white tw-transition">
                                            <i class="ph-bold ph-code"></i>
                                        </div>
                                        <h4 class="tw-mb-3"><a href="#" class="text-heading hover-text-main-600 tw-transition line-clamp-1">Custom Web Dev</a></h4>
                                        <p class="text-neutral-600 line-clamp-3">Tailored solutions built around your business needs and workflows.</p>
                                    </div>
                                </div>
                                <div class="col-md-6" data-aos="fade-up" data-aos-duration="600">
                                    <div class="bg-white tw-p-8 tw-rounded-2xl border border-neutral-100 hover-shadow-lg tw-transition h-100 group-item">
                                        <div class="tw-w-16 tw-h-16 bg-main-50 tw-text-3xl text-main-600 rounded-circle d-flex justify-content-center align-items-center tw-mb-6 group-hover-bg-main-600 group-hover-text-white tw-transition">
                                            <i class="ph-bold ph-shopping-cart"></i>
                                        </div>
                                        <h4 class="tw-mb-3"><a href="#" class="text-heading hover-text-main-600 tw-transition line-clamp-1">E-Commerce</a></h4>
                                        <p class="text-neutral-600 line-clamp-3">Online stores optimized for sales, user experience, and scalability.</p>
                                    </div>
                                </div>
                                <div class="col-md-6" data-aos="fade-up" data-aos-duration="700">
                                    <div class="bg-white tw-p-8 tw-rounded-2xl border border-neutral-100 hover-shadow-lg tw-transition h-100 group-item">
                                        <div class="tw-w-16 tw-h-16 bg-main-50 tw-text-3xl text-main-600 rounded-circle d-flex justify-content-center align-items-center tw-mb-6 group-hover-bg-main-600 group-hover-text-white tw-transition">
                                            <i class="ph-bold ph-layout"></i>
                                        </div>
                                        <h4 class="tw-mb-3"><a href="#" class="text-heading hover-text-main-600 tw-transition line-clamp-1">Landing Pages</a></h4>
                                        <p class="text-neutral-600 line-clamp-3">High-converting landing pages built for campaigns and lead generation.</p>
                                    </div>
                                </div>
                                <div class="col-md-6" data-aos="fade-up" data-aos-duration="600">
                                    <div class="bg-white tw-p-8 tw-rounded-2xl border border-neutral-100 hover-shadow-lg tw-transition h-100 group-item">
                                        <div class="tw-w-16 tw-h-16 bg-main-50 tw-text-3xl text-main-600 rounded-circle d-flex justify-content-center align-items-center tw-mb-6 group-hover-bg-main-600 group-hover-text-white tw-transition">
                                            <i class="ph-bold ph-arrows-clockwise"></i>
                                        </div>
                                        <h4 class="tw-mb-3"><a href="#" class="text-heading hover-text-main-600 tw-transition line-clamp-1">Website Redesign</a></h4>
                                        <p class="text-neutral-600 line-clamp-3">We modernize outdated websites with improved design, speed, and functionality.</p>
                                    </div>
                                </div>
                                <div class="col-md-6" data-aos="fade-up" data-aos-duration="700">
                                    <div class="bg-white tw-p-8 tw-rounded-2xl border border-neutral-100 hover-shadow-lg tw-transition h-100 group-item">
                                        <div class="tw-w-16 tw-h-16 bg-main-50 tw-text-3xl text-main-600 rounded-circle d-flex justify-content-center align-items-center tw-mb-6 group-hover-bg-main-600 group-hover-text-white tw-transition">
                                            <i class="ph-bold ph-wrench"></i>
                                        </div>
                                        <h4 class="tw-mb-3"><a href="#" class="text-heading hover-text-main-600 tw-transition line-clamp-1">Maintenance</a></h4>
                                        <p class="text-neutral-600 line-clamp-3">Continuous updates, security improvements, and technical support.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- ======================== Services Details end ========================== -->
            <!-- ============================ Core Features section start ============================== -->
            <section class="core-features bg-neutral-50 tw-py-120 position-relative z-1">
                <div class="container">
                    <div class="max-w-602-px mx-auto text-center tw-mb-15">
                        <span class="tw-py-1 tw-px-705 bg-white tw-text-sm fw-medium text-capitalize rounded-pill tw-mb-205 border border-neutral-100">Why Us?</span>
                        <h3 class="splitTextStyleOne fw-bold tw-leading-104 tw-mb-9">
                            What Makes Our Websites Different?
                        </h3>
                        <p class="text-neutral-600 tw-text-lg">The market is full of brands that do the same thing for everyone. Here’s why we stand out from the saturated market.</p>
                    </div>

                    <div class="row g-4 justify-content-center">
                        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="600">
                            <div class="bg-white p-4 p-xl-5 rounded-4 h-100 border border-neutral-100 hover-shadow-lg tw-transition group-item">
                                <div class="d-flex align-items-center tw-gap-4 tw-mb-5">
                                    <div class="tw-w-12 tw-h-12 bg-main-50 text-main-600 tw-text-2xl rounded-circle d-flex justify-content-center align-items-center group-hover-bg-main-600 group-hover-text-white tw-transition">
                                        <i class="ph-bold ph-device-mobile"></i>
                                    </div>
                                    <h5 class="mb-0 text-heading">Mobile-Responsive Design</h5>
                                </div>
                                <p class="text-neutral-600 mb-0">Your website performs seamlessly across mobile, tablet, and desktop devices.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="700">
                            <div class="bg-white p-4 p-xl-5 rounded-4 h-100 border border-neutral-100 hover-shadow-lg tw-transition group-item">
                                <div class="d-flex align-items-center tw-gap-4 tw-mb-5">
                                    <div class="tw-w-12 tw-h-12 bg-main-50 text-main-600 tw-text-2xl rounded-circle d-flex justify-content-center align-items-center group-hover-bg-main-600 group-hover-text-white tw-transition">
                                        <i class="ph-bold ph-lightning"></i>
                                    </div>
                                    <h5 class="mb-0 text-heading">Fast Loading Speed</h5>
                                </div>
                                <p class="text-neutral-600 mb-0">We optimize performance to improve user experience and search rankings.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="800">
                            <div class="bg-white p-4 p-xl-5 rounded-4 h-100 border border-neutral-100 hover-shadow-lg tw-transition group-item">
                                <div class="d-flex align-items-center tw-gap-4 tw-mb-5">
                                    <div class="tw-w-12 tw-h-12 bg-main-50 text-main-600 tw-text-2xl rounded-circle d-flex justify-content-center align-items-center group-hover-bg-main-600 group-hover-text-white tw-transition">
                                        <i class="ph-bold ph-magnifying-glass"></i>
                                    </div>
                                    <h5 class="mb-0 text-heading">SEO-Friendly Structure</h5>
                                </div>
                                <p class="text-neutral-600 mb-0">Every website is built with search engine best practices in mind.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- ============================ Core Features section end ============================== -->
            <!-- ============================ Boost Efficiency section start ============================== -->
            <section class="efficiency-section py-120 overflow-hidden">
                <div class="container">
                    <div class="row gy-5 align-items-center">
                        <div class="col-lg-6" data-aos="fade-right" data-aos-duration="800">
                            <div class="position-relative">
                                <img alt="Efficiency" class="w-100 rounded-4" src="/assets/images/thumbs/about-img.png" />
                            </div>
                        </div>
                        <div class="col-lg-6 ps-lg-5" data-aos="fade-left" data-aos-duration="800">
                            <h2 class="splitTextStyleOne fw-bold tw-mb-6">
                                Build a Website That Works for Your Business
                            </h2>
                            <p class="text-neutral-600 tw-text-lg tw-mb-10">
                                Your website should help your business attract customers, build trust, and grow consistently.<br><br>
                                At Akkurate, we create digital experiences designed for real business impact.
                            </p>
                            <div>
                                <a class="btn btn-main hover-style-two button--stroke d-inline-flex align-items-center justify-content-center tw-gap-5 group active--translate-y-2 tw-px-10 tw-py-405 rounded-pill fw-bold"
                                    data-block="button" href="/contact.php">
                                    <span class="button__flair"></span>
                                    <span class="button__label">GET A DEMO TODAY</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- ============================ Boost Efficiency section end ============================== -->
"""

def replace_content(filename, new_content):
    with open(filename, 'r', encoding='utf-8') as f:
        content = f.read()

    # Find the block between <div id="smooth-content"> and <?php include 'partials/footer.php'; ?>
    start_marker = '<div id="smooth-content">'
    end_marker = '<?php include \'partials/footer.php\'; ?>'
    
    start_idx = content.find(start_marker)
    end_idx = content.find(end_marker)

    if start_idx != -1 and end_idx != -1:
        start_idx += len(start_marker)
        
        # Keep the wrapper and inject new content
        new_file_content = content[:start_idx] + "\\n" + new_content + "\\n            " + content[end_idx:]
        
        with open(filename, 'w', encoding='utf-8') as f:
            f.write(new_file_content)
        print(f"Updated {filename}")
    else:
        print(f"Could not find markers in {filename}")

replace_content("aeo.php", AEO_CONTENT)
replace_content("seo.php", SEO_CONTENT)
replace_content("web-development.php", WEB_CONTENT)

# Now update links across all PHP files
directory = '.'
for filename in os.listdir(directory):
    if filename.endswith('.php'):
        filepath = os.path.join(directory, filename)
        with open(filepath, 'r', encoding='utf-8') as f:
            content = f.read()
            
        original_content = content
        
        # Replace links using regex
        content = re.sub(r'<a[^>]*>Answer Engine Optimization\(AEO\)</a>', '<a href="/aeo.php">Answer Engine Optimization(AEO)</a>', content)
        content = re.sub(r'<a[^>]*>Search Engine Optimization\(SEO\)</a>', '<a href="/seo.php">Search Engine Optimization(SEO)</a>', content)
        content = re.sub(r'<a[^>]*>Website Development</a>', '<a href="/web-development.php">Website Development</a>', content)
        
        if content != original_content:
            with open(filepath, 'w', encoding='utf-8') as f:
                f.write(content)
            print(f"Updated links in {filename}")
