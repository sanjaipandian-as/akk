<!DOCTYPE html>
<html lang="en" class="home-one">

<head>
    <?php include 'partials/title-meta.php'; ?>
        
    <?php include 'partials/head-css.php'; ?>
</head>

<body>

    <?php include 'partials/common-content.php'; ?>

    <div id="smooth-wrapper">
        <!-- ==================== Header Two Start Here ==================== -->
        <?php include 'partials/header.php'; ?>
        <!-- ==================== Header Two End Here ==================== -->
        <div id="smooth-content">
                      
<section class="pm-hero">
  <div class="pm-hero-inner">
    <p class="pm-breadcrumb">
      Home <span class="pm-dot">•</span> 
      <span class="pm-active">Our Work</span>
    </p>
    <h1 class="pm-title">Our Work</h1>
  </div>
</section>
            <!-- ========================== Sleek Black Footer Start ========================= -->
            <?php include 'partials/footer.php'; ?>
            <!-- ========================== Sleek Black Footer End ========================= -->
        </div>
    </div>

<style>
 /* RESET */

body {
  background: #fffff;
  
}


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
.pm-filter {
  margin: 30px auto;          /* center the whole section */
  max-width: 1200px;          /* match your container width */
  padding: 0 20px;            /* same side spacing as header */
}
.pm-filter-wrap {
  display: flex;
  justify-content: center;  /* centers everything */
  gap: 20px;
  flex-wrap: wrap;
  align-items: center;
}
.pm-label {
  font-weight: 600;
  margin-right: 10px;
}

.pm-btn {
  padding: 10px 18px;
  border-radius: 10px;
  border: none;
  background: transparent;
  cursor: pointer;
  transition: 0.3s;
  font-weight: 500;
}

.pm-btn.active {
  background: #1e3a8a;  /* solid dark blue */
  color: #ffffff;
}

.pm-btn:hover {
  background: #fff;  /* darker hover */
}
/* MASONRY */
.pm-portfolio {
  padding: 20px;
}

.pm-grid {
  column-count: 3;
  column-gap: 20px;
}

.pm-card {
  margin-bottom: 20px;
  break-inside: avoid;
  border-radius: 12px;
  overflow: hidden;
  background: #fff;
  transition: 0.3s;
}

.pm-card img {
  width: 100%;
  display: block;
}

.pm-card:hover {
  transform: translateY(-6px);
}

/* RESPONSIVE */
@media (max-width: 992px) {
  .pm-grid {
    column-count: 2;
  }
}

@media (max-width: 600px) {
  .pm-grid {
    column-count: 1;
  }

  .pm-title {
    font-size: 28px;
  }
}
</style>

<script>
const pmButtons = document.querySelectorAll(".pm-btn");
const pmCards = document.querySelectorAll(".pm-card");

pmButtons.forEach(btn => {
  btn.addEventListener("click", () => {

    pmButtons.forEach(b => b.classList.remove("active"));
    btn.classList.add("active");

    const filter = btn.dataset.filter;

   pmCards.forEach(card => {
  if (filter === "all" || card.dataset.category === filter) {
    card.style.opacity = "1";
    card.style.transform = "scale(1)";
    card.style.pointerEvents = "auto";
  } else {
    card.style.opacity = "0";
    card.style.transform = "scale(0.8)";
    card.style.pointerEvents = "none";
  }
});

  });
});
</script>
    <?php include 'partials/javascript.php'; ?>

</body>

</html>
