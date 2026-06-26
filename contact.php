<!DOCTYPE html>
<html lang="en" class="heading-black">

<head>
    <?php include 'partials/title-meta.php'; ?>
    <?php include 'partials/head-css.php'; ?>

    <style>
        .contact-revamp {
            background: #ffffff;
        }

        /* ── Light theme overrides ── */
        .contact-revamp .text-white:not(.hero-section *):not(.hero-section),
        .contact-revamp h2:not(.hero-section *),
        .contact-revamp h3:not(.hero-section *),
        .contact-revamp h4:not(.hero-section *) {
            color: #0f172a !important;
        }

        /* Keep hero texts white */
        .contact-revamp .hero-section .text-white,
        .contact-revamp .hero-section h1,
        .contact-revamp .hero-section a.text-white,
        .contact-revamp .hero-section span.text-white {
            color: #ffffff !important;
        }

        .contact-revamp .text-neutral-500 { color: #64748b !important; }
        .contact-revamp .text-neutral-400 { color: #94a3b8 !important; }

        /* Info cards */
        .contact-info-card {
            background: #f8faff;
            border: 1px solid rgba(79, 142, 247, 0.15);
            border-radius: 20px;
            padding: 40px 32px;
            text-align: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .contact-info-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 20px 48px rgba(79, 142, 247, 0.12);
        }

        .contact-info-card .icon-wrap {
            width: 68px;
            height: 68px;
            background: rgba(79, 142, 247, 0.1);
            border-radius: 50%;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-size: 28px;
            color: #4f8ef7;
            margin-bottom: 20px;
            transition: background 0.3s ease, color 0.3s ease;
        }

        .contact-info-card:hover .icon-wrap {
            background: #4f8ef7;
            color: #ffffff;
        }

        /* Contact form */
        .contact-form-wrap {
            background: #f8faff;
            border: 1px solid rgba(79, 142, 247, 0.12);
            border-radius: 24px;
            padding: 56px 48px;
        }

        @media (max-width: 767px) {
            .contact-form-wrap { padding: 36px 24px; }
        }

        .contact-form-wrap .form-control,
        .contact-form-wrap .form-select {
            border: 1px solid rgba(0,0,0,0.12);
            border-radius: 12px;
            padding: 14px 18px;
            font-size: 15px;
            background: #ffffff;
            color: #0f172a;
            transition: border-color 0.25s ease, box-shadow 0.25s ease;
        }

        .contact-form-wrap .form-control:focus,
        .contact-form-wrap .form-select:focus {
            border-color: #4f8ef7;
            box-shadow: 0 0 0 4px rgba(79, 142, 247, 0.12);
            outline: none;
        }

        .contact-form-wrap textarea.form-control {
            min-height: 140px;
            resize: vertical;
        }

        .contact-form-wrap label {
            font-size: 13px;
            font-weight: 600;
            color: #334155;
            margin-bottom: 6px;
        }

        .btn-contact-submit {
            background: linear-gradient(135deg, #4f8ef7 0%, #2563eb 100%);
            color: #ffffff;
            border: none;
            border-radius: 50px;
            padding: 16px 48px;
            font-size: 15px;
            font-weight: 600;
            letter-spacing: 0.5px;
            cursor: pointer;
            transition: transform 0.25s ease, box-shadow 0.25s ease;
        }

        .btn-contact-submit:hover {
            transform: translateY(-3px);
            box-shadow: 0 12px 32px rgba(79, 142, 247, 0.35);
        }

        .contact-accent { color: #4f8ef7; }

        /* Map section */
        .map-embed {
            border-radius: 24px;
            overflow: hidden;
            box-shadow: 0 8px 32px rgba(0,0,0,0.08);
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
        <!-- ==================== Header Start Here ==================== -->
        <?php include 'partials/header.php'; ?>
        <!-- ==================== Header End Here ==================== -->

        <div id="smooth-content" class="contact-revamp">

            <!-- ==================== Hero Start ==================== -->
           <section class="pm-hero">
  <div class="pm-hero-inner">
    <p class="pm-breadcrumb">
      Home <span class="pm-dot">•</span> 
      <span class="pm-active">Contact us</span>
    </p>
    <h1 class="pm-title">Contact us</h1>
  </div>
</section>
            <!-- ==================== Hero End ==================== -->

            <!-- ==================== Contact Info Cards Start ==================== -->
           <section class="py-120">
    <div class="container">

       <div class="row align-items-stretch justify-content-center">

    <!-- Left Card -->
    <div class="col-lg-5 col-md-6 mb-4">
        <div class="contact-info-card text-center h-100 d-flex flex-column justify-content-center">
            
            <!-- Phone -->
            <div class="mb-4">
                <div class="icon-wrap">
                    <i class="ph-bold ph-phone"></i>
                </div>
                <h4>Call us on</h4>
                <p>+91 9841663161</p>
            </div>

            <!-- Email -->
            <div>
                <div class="icon-wrap">
                    <i class="ph-bold ph-envelope"></i>
                </div>
                <h4>Email us</h4>
                <p>growth@akkurate.in</p>
                <p>dinesh@akkurate.in</p>
            </div>

        </div>
    </div>

    <!-- Right Card -->
    <div class="col-lg-5 col-md-6 mb-4">
        <div class="contact-info-card text-center h-100 d-flex flex-column justify-content-center align-items-center">
            
            <div class="icon-wrap">
                <i class="ph-bold ph-map-pin"></i>
            </div>

            <h4>India locations</h4>

            <p><strong>Chennai</strong><br>
            No. 63/44, 3rd Cross Street, West Tambaram</p>

            <p><strong>Trichy</strong><br>
            Nawab Garden Street, Woraiyur</p>

            <p><strong>Singapore</strong><br>
            Ang Mo Kio Street 31</p>

        </div>
    </div>

</div>
    </div>
</section>
            <!-- ==================== Contact Info Cards End ==================== -->

            <!-- ==================== Contact Form + Map Start ==================== -->
            <section style="padding-bottom: 120px;">
                <div class="container">
                    <div class="row gy-5 align-items-start">

                        <!-- Contact Form -->
                        <div class="col-lg-7" data-aos="fade-right" data-aos-duration="700">
                            <div class="contact-form-wrap">
                                <p class="text-neutral-500 fw-semibold text-uppercase letter-spacing-1 tw-text-sm tw-mb-4">
                                    <span class="contact-accent">+</span> Send a Message
                                </p>
                                <h2 style="font-size: clamp(24px, 3vw, 38px); font-weight: 700; margin-bottom: 32px; line-height: 1.25;">
                                    Let's Build Something <span class="contact-accent">Akkurate</span> Together
                                </h2>

                                <form id="contactForm" novalidate>
                                    <div class="row gy-4">
                                        <div class="col-sm-6">
                                            <label for="contactName">Full Name *</label>
                                            <input type="text" id="contactName" name="name" class="form-control" placeholder="John Doe" required>
                                        </div>
                                        <div class="col-sm-6">
                                            <label for="contactEmail">Email Address *</label>
                                            <input type="email" id="contactEmail" name="email" class="form-control" placeholder="hello@company.com" required>
                                        </div>
                                        <div class="col-sm-6">
                                            <label for="contactPhone">Phone Number</label>
                                            <input type="tel" id="contactPhone" name="phone" class="form-control" placeholder="+91 98765 43210">
                                        </div>
                                        <div class="col-sm-6">
                                            <label for="contactService">Service Interested In</label>
                                            <select id="contactService" name="service" class="form-select">
                                                <option value="" disabled selected>Select a service</option>
                                                <option value="seo">Search Engine Optimization (SEO)</option>
                                                <option value="geo">Generative Engine Optimization (GEO)</option>
                                                <option value="aeo">Answer Engine Optimization (AEO)</option>
                                                <option value="social">Social Media Marketing</option>
                                                <option value="ads">Google / Meta Ads</option>
                                                <option value="webdev">Website Development</option>
                                                <option value="appdev">App Development</option>
                                                <option value="branding">Branding &amp; Logo Design</option>
                                                <option value="other">Other</option>
                                            </select>
                                        </div>
                                        <div class="col-12">
                                            <label for="contactMessage">Your Message *</label>
                                            <textarea id="contactMessage" name="message" class="form-control" placeholder="Tell us about your project, goals, or any questions you have…" required></textarea>
                                        </div>
                                        <div class="col-12">
                                            <button type="submit" class="btn-contact-submit" id="contactSubmitBtn">
                                                Send Message &nbsp;<i class="ph-bold ph-paper-plane-tilt"></i>
                                            </button>
                                        </div>
                                        <div class="col-12" id="contactFormMsg" style="display:none;"></div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <!-- Map -->
                        <div class="col-lg-5" data-aos="fade-left" data-aos-duration="700">
                            <div class="map-embed">
                                <iframe
                                    title="Akkurate Office Location"
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3888.827064177657!2d80.1198!3d12.9255!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a525f9bfe6ee571%3A0x7a5d8f2c0c5a16d!2sWest%20Tambaram%2C%20Chennai%2C%20Tamil%20Nadu!5e0!3m2!1sen!2sin!4v1700000000000!5m2!1sen!2sin"
                                    width="100%"
                                    height="540"
                                    style="border:0; display:block;"
                                    allowfullscreen=""
                                    loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade">
                                </iframe>
                            </div>

                            <!-- Quick social links -->
                            <div class="tw-mt-8 d-flex align-items-center tw-gap-4 flex-wrap">
                                <span class="text-neutral-500 fw-semibold" style="font-size: 14px;">Follow us:</span>
                                <a href="https://www.instagram.com/akkurate.in/" target="_blank" rel="noopener"
                                   style="width:42px;height:42px;border-radius:50%;background:#f8faff;border:1px solid rgba(79,142,247,0.2);display:inline-flex;align-items:center;justify-content:center;color:#4f8ef7;font-size:18px;transition:all 0.25s ease;text-decoration:none;"
                                   onmouseover="this.style.background='#4f8ef7';this.style.color='#fff';"
                                   onmouseout="this.style.background='#f8faff';this.style.color='#4f8ef7';">
                                    <i class="ph-bold ph-instagram-logo"></i>
                                </a>
                                <a href="https://www.linkedin.com/company/akkurate-in/" target="_blank" rel="noopener"
                                   style="width:42px;height:42px;border-radius:50%;background:#f8faff;border:1px solid rgba(79,142,247,0.2);display:inline-flex;align-items:center;justify-content:center;color:#4f8ef7;font-size:18px;transition:all 0.25s ease;text-decoration:none;"
                                   onmouseover="this.style.background='#4f8ef7';this.style.color='#fff';"
                                   onmouseout="this.style.background='#f8faff';this.style.color='#4f8ef7';">
                                    <i class="ph-bold ph-linkedin-logo"></i>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
            
            
            <!-- ==================== Contact Form + Map End ==================== -->

            <!-- ========================== Sleek Black Footer Start ========================= -->
            <?php include 'partials/footer.php'; ?>
            <!-- ========================== Sleek Black Footer End ========================= -->

        </div>
    </div>

    <script>
    (function () {
        var form = document.getElementById('contactForm');
        var msgEl = document.getElementById('contactFormMsg');
        if (!form) return;

        form.addEventListener('submit', function (e) {
            e.preventDefault();
            var name = document.getElementById('contactName').value.trim();
            var email = document.getElementById('contactEmail').value.trim();
            var message = document.getElementById('contactMessage').value.trim();

            if (!name || !email || !message) {
                msgEl.style.display = 'block';
                msgEl.style.color = '#ef4444';
                msgEl.textContent = 'Please fill in all required fields.';
                return;
            }

            // Simulate submission feedback
            var btn = document.getElementById('contactSubmitBtn');
            btn.disabled = true;
            btn.textContent = 'Sending…';

            setTimeout(function () {
                form.reset();
                btn.disabled = false;
                btn.innerHTML = 'Send Message &nbsp;<i class="ph-bold ph-paper-plane-tilt"></i>';
                msgEl.style.display = 'block';
                msgEl.style.color = '#16a34a';
                msgEl.textContent = '✓ Your message has been sent! We\'ll get back to you within 24 hours.';
            }, 1200);
        });
    })();
    </script>

    <?php include 'partials/javascript.php'; ?>

</body>

</html>
