const fs = require("fs");
const path = require("path");

// Create build directory
const buildDir = path.join(__dirname, "../build");
if (!fs.existsSync(buildDir)) {
  fs.mkdirSync(buildDir, { recursive: true });
}

// Copy assets function
const copyRecursiveSync = (src, dest) => {
  const exists = fs.existsSync(src);
  const stats = exists && fs.statSync(src);
  const isDirectory = exists && stats.isDirectory();

  if (isDirectory) {
    if (!fs.existsSync(dest)) {
      fs.mkdirSync(dest, { recursive: true });
    }
    fs.readdirSync(src).forEach((childItemName) => {
      copyRecursiveSync(
        path.join(src, childItemName),
        path.join(dest, childItemName),
      );
    });
  } else {
    fs.copyFileSync(src, dest);
  }
};

// Build static site
console.log("📦 Building static site for Netlify...");

// Create build directories
const assetDirs = ["./build/assets", "./build/programs"];
assetDirs.forEach((dir) => {
  if (!fs.existsSync(dir)) {
    fs.mkdirSync(dir, { recursive: true });
  }
});

// Copy theme assets
if (fs.existsSync("./wp-content/themes/mentorship/assets")) {
  copyRecursiveSync("./wp-content/themes/mentorship/assets", "./build/assets");
}

// Copy main compiled files
if (fs.existsSync("./wp-content/themes/mentorship/style.css")) {
  fs.copyFileSync(
    "./wp-content/themes/mentorship/style.css",
    "./build/style.css",
  );
}

// Copy compiled JS if it exists
if (fs.existsSync("./wp-content/themes/mentorship/assets/js/main.js")) {
  fs.copyFileSync(
    "./wp-content/themes/mentorship/assets/js/main.js",
    "./build/main.js",
  );
}

// Create main index.html with EXACT original design
const indexHtml = `<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mentorship - Professional Development Platform</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inknut+Antiqua:wght@300&family=Inter:wght@300;400;500&family=Montserrat:wght@100&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@latest/font/bootstrap-icons.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="./style.css">
</head>

<body class="home blog">

<div id="page" class="site">
    <header id="masthead" class="site-header">
        <div class="sticky-top">
            <nav class="navbar main-navbar navbar-expand-lg bg-navbar py-4">
                <div class="container">
                    <a href="./" class="navbar-brand fw-bold">
                        Mentorship.
                    </a>

                    <button type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#main-navbar"
                            aria-controls="main-navbar"
                            aria-expanded="false"
                            aria-label="Toggle navigation"
                            class="navbar-toggler">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div id="main-navbar" class="collapse navbar-collapse">
                        <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a href="./" class="nav-link active">Home</a>
                            </li>
                            <li class="nav-item">
                                <a href="./resources.html" class="nav-link">Resources</a>
                            </li>
                            <li class="nav-item">
                                <a href="./mentors.html" class="nav-link">Find a mentor</a>
                            </li>
                            <li class="dropdown nav-item">
                                <a href="#"
                                   data-bs-toggle="dropdown"
                                   aria-expanded="false"
                                   class="nav-link dropdown-toggle">
                                    Programs
                                </a>
                                <ul class="dropdown-menu shadow border-0 rounded">
                                    <li>
                                        <a class="dropdown-item" href="./programs/career-mentorship-program.html">
                                            Career Mentorship Program
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="./programs/life-coach-program.html">
                                            Life Coach Program
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="./programs/business-mentorship-program.html">
                                            Business Mentorship Program
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="./programs/business-coach-program.html">
                                            Business Coach Program
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="./contact-us.html" class="nav-link">Contact Us</a>
                            </li>
                        </ul>

                        <div class="d-flex">
                            <div>
                                <a href="./login.html" class="btn me-1 fw-bold border-0">Login</a>
                                <a href="./register.html" class="btn btn-primary">Signup</a>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>

    <main id="primary" class="site-main">
        <div>
            <!-- Hero Section -->
            <div class="container py-3 py-sm-5">
                <div class="row flex-lg-row-reverse justify-content-between align-items-center">
                    <div class="mx-auto col-sm-8 col-lg-5">
                        <img src="./assets/images/hero-img.png"
                             width="700"
                             height="500"
                             loading="lazy"
                             class="d-block mx-lg-auto img-fluid"
                             alt="Hero Image">
                    </div>
                    <div class="col-lg-6">
                        <h1 class="hero-title mb-4 d-flex flex-wrap">
                            <span class="me-3">Find your</span>
                            <span class="text-marked idol me-3">
                                IDOL
                                <img src="./assets/illustrations/iii.png"
                                     alt=""
                                     class="iii">
                            </span>
                            <span class="me-3">and</span>
                            <span class="text-marked me-3">KISS</span>
                            <span class="me-3">your</span>
                            <span class="text-marked">
                                SUCCESS
                                <span class="bar"></span>
                                <span class="bar"></span>
                            </span>
                        </h1>
                        <p class="fw-semibold fs-5 hero-description mt-4">
                            Get in touch with your mentor for previte one on one online lesson to boost your success
                        </p>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                            <a href="./register.html" class="btn btn-outline-primary">Become mentor</a>
                            <a href="./mentors.html" class="btn btn-primary">Find mentor</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Programs Section -->
            <div class="container my-5">
                <div class="row">
                    <div class="col-sm-6 col-lg-3">
                        <div class="py-1" style="height: 100%;">
                            <div class="card program-card">
                                <div class="card-body">
                                    <span class="program-icon" style="background-color: rgb(40, 69, 126);">
                                        <i class="fa fa-user" aria-hidden="true"></i>
                                    </span>
                                    <div class="program-type"></div>
                                    <div class="program-title my-2">
                                        Career Mentorship Program
                                    </div>
                                    <div class="program-description mb-3">
                                        Guidance, Support, Skill Development, Networking, Growth.
                                    </div>
                                    <p class="mb-0">
                                        <a class="text-info" href="./programs/career-mentorship-program.html">
                                            View more
                                            <i aria-hidden="true" class="fa fa-arrow-circle-right ms-2"></i>
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-3">
                        <div class="py-1" style="height: 100%;">
                            <div class="card program-card">
                                <div class="card-body">
                                    <span class="program-icon" style="background-color: rgb(32, 177, 9);">
                                        <i class="fa fa-user" aria-hidden="true"></i>
                                    </span>
                                    <div class="program-type"></div>
                                    <div class="program-title my-2">
                                        Life Coach Program
                                    </div>
                                    <div class="program-description mb-3">
                                        Personal Growth, Self-Discovery, Empowerment, Balance, Fulfillment.
                                    </div>
                                    <p class="mb-0">
                                        <a class="text-info" href="./programs/life-coach-program.html">
                                            View more
                                            <i aria-hidden="true" class="fa fa-arrow-circle-right ms-2"></i>
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-3">
                        <div class="py-1" style="height: 100%;">
                            <div class="card program-card">
                                <div class="card-body">
                                    <span class="program-icon" style="background-color: rgb(255, 0, 245);">
                                        <i class="fa fa-gift" aria-hidden="true"></i>
                                    </span>
                                    <div class="program-type"></div>
                                    <div class="program-title my-2">
                                        Business Mentorship Program
                                    </div>
                                    <div class="program-description mb-3">
                                        Entrepreneurial Success, Strategy, Expertise, Networking, Growth.
                                    </div>
                                    <p class="mb-0">
                                        <a class="text-info" href="./programs/business-mentorship-program.html">
                                            View more
                                            <i aria-hidden="true" class="fa fa-arrow-circle-right ms-2"></i>
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-3">
                        <div class="py-1" style="height: 100%;">
                            <div class="card program-card">
                                <div class="card-body">
                                    <span class="program-icon" style="background-color: rgb(255, 138, 0);">
                                        <i class="fa fa-gift" aria-hidden="true"></i>
                                    </span>
                                    <div class="program-type"></div>
                                    <div class="program-title my-2">
                                        Business Coach Program
                                    </div>
                                    <div class="program-description mb-3">
                                        Success, Strategy, Skills, Support, Growth.
                                    </div>
                                    <p class="mb-0">
                                        <a class="text-info" href="./programs/business-coach-program.html">
                                            View more
                                            <i aria-hidden="true" class="fa fa-arrow-circle-right ms-2"></i>
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Benefits of Mentorship Section -->
            <section class="benefits-mentorship my-5 py-5 bg-light">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-5">
                            <img src="./assets/images/hero-img.png"
                                 class="img-fluid rounded"
                                 alt="Benefits of Mentorship">
                        </div>
                        <div class="col-lg-7">
                            <h3 class="section-title mb-4">Benefits of Mentorship</h3>
                            <p class="section-description mb-4">
                                Discover how mentorship can transform your career and personal growth.
                            </p>
                            <ul class="benefits-list icons-items">
                                <li class="d-flex align-items-start mb-3">
                                    <div class="list-icon me-3">
                                        <i class="fa fa-check-circle" aria-hidden="true"></i>
                                    </div>
                                    <div>
                                        <h5 class="mb-2">Personalized Guidance</h5>
                                        <p class="mb-0">
                                            Get tailored advice specific to your career goals and challenges.
                                        </p>
                                    </div>
                                </li>
                                <li class="d-flex align-items-start mb-3">
                                    <div class="list-icon me-3">
                                        <i class="fa fa-users" aria-hidden="true"></i>
                                    </div>
                                    <div>
                                        <h5 class="mb-2">Professional Network</h5>
                                        <p class="mb-0">
                                            Expand your network with industry professionals and peers.
                                        </p>
                                    </div>
                                </li>
                                <li class="d-flex align-items-start mb-3">
                                    <div class="list-icon me-3">
                                        <i class="fa fa-chart-line" aria-hidden="true"></i>
                                    </div>
                                    <div>
                                        <h5 class="mb-2">Skill Development</h5>
                                        <p class="mb-0">
                                            Develop crucial skills needed for career advancement.
                                        </p>
                                    </div>
                                </li>
                                <li class="d-flex align-items-start mb-3">
                                    <div class="list-icon me-3">
                                        <i class="fa fa-lightbulb" aria-hidden="true"></i>
                                    </div>
                                    <div>
                                        <h5 class="mb-2">Fresh Perspective</h5>
                                        <p class="mb-0">
                                            Gain new insights and approaches to overcome challenges.
                                        </p>
                                    </div>
                                </li>
                                <li class="d-flex align-items-start mb-3">
                                    <div class="list-icon me-3">
                                        <i class="fa fa-rocket" aria-hidden="true"></i>
                                    </div>
                                    <div>
                                        <h5 class="mb-2">Career Acceleration</h5>
                                        <p class="mb-0">
                                            Fast-track your career growth with expert guidance and support.
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Benefits of Coaching Section -->
            <section class="benefits-coaching my-5 py-5">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-7">
                            <h3 class="section-title mb-4">Benefits of Coaching</h3>
                            <p class="section-description mb-4">
                                Experience transformational coaching that unlocks your full potential.
                            </p>
                            <ul class="benefits-list icons-items">
                                <li class="d-flex align-items-start mb-3">
                                    <div class="list-icon me-3">
                                        <i class="fa fa-target" aria-hidden="true"></i>
                                    </div>
                                    <div>
                                        <h5 class="mb-2">Goal Achievement</h5>
                                        <p class="mb-0">
                                            Set and achieve meaningful personal and professional goals.
                                        </p>
                                    </div>
                                </li>
                                <li class="d-flex align-items-start mb-3">
                                    <div class="list-icon me-3">
                                        <i class="fa fa-brain" aria-hidden="true"></i>
                                    </div>
                                    <div>
                                        <h5 class="mb-2">Self-Awareness</h5>
                                        <p class="mb-0">
                                            Develop deeper understanding of your strengths and areas for growth.
                                        </p>
                                    </div>
                                </li>
                                <li class="d-flex align-items-start mb-3">
                                    <div class="list-icon me-3">
                                        <i class="fa fa-balance-scale" aria-hidden="true"></i>
                                    </div>
                                    <div>
                                        <h5 class="mb-2">Work-Life Balance</h5>
                                        <p class="mb-0">
                                            Create harmony between your professional and personal life.
                                        </p>
                                    </div>
                                </li>
                                <li class="d-flex align-items-start mb-3">
                                    <div class="list-icon me-3">
                                        <i class="fa fa-shield-alt" aria-hidden="true"></i>
                                    </div>
                                    <div>
                                        <h5 class="mb-2">Confidence Building</h5>
                                        <p class="mb-0">
                                            Build unshakeable confidence in your abilities and decisions.
                                        </p>
                                    </div>
                                </li>
                                <li class="d-flex align-items-start mb-3">
                                    <div class="list-icon me-3">
                                        <i class="fa fa-heart" aria-hidden="true"></i>
                                    </div>
                                    <div>
                                        <h5 class="mb-2">Personal Fulfillment</h5>
                                        <p class="mb-0">
                                            Find deeper meaning and satisfaction in your work and life.
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-5">
                            <img src="./assets/images/hero-img.png"
                                 class="img-fluid rounded"
                                 alt="Benefits of Coaching">
                        </div>
                    </div>
                </div>
            </section>

            <!-- Newsletter Section -->
            <section class="newsletter-section bg-primary text-white py-5">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-5">
                            <img src="./assets/images/hero-img.png"
                                 class="img-fluid rounded"
                                 alt="Newsletter">
                        </div>
                        <div class="col-lg-7">
                            <h3 class="mb-3">Stay Updated with Our Newsletter</h3>
                            <p class="mb-4">
                                Get the latest insights on mentorship, career development, and personal growth delivered to your inbox.
                            </p>
                            <a href="./newsletter.html" class="btn btn-light btn-lg">Subscribe Now</a>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Stats Section -->
            <section class="stats-section py-5">
                <div class="container">
                    <div class="row text-center">
                        <div class="col-6 col-md counter-item">
                            <div class="counter-number display-4 fw-bold text-primary">1000+</div>
                            <span class="counter-text">Successful Mentorships</span>
                        </div>
                        <div class="col-6 col-md counter-item">
                            <div class="counter-number display-4 fw-bold text-success">500+</div>
                            <span class="counter-text">Expert Mentors</span>
                        </div>
                        <div class="col-6 col-md counter-item">
                            <div class="counter-number display-4 fw-bold text-info">50+</div>
                            <span class="counter-text">Industries Covered</span>
                        </div>
                        <div class="col-6 col-md counter-item">
                            <div class="counter-number display-4 fw-bold text-warning">98%</div>
                            <span class="counter-text">Success Rate</span>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Featured Mentors -->
            <section id="mentors" class="features-mentor my-5 py-5 bg-light">
                <div class="container">
                    <h3 class="text-center mb-5 display-5 fw-bold">Featured Mentors</h3>
                    <div class="row mb-5">
                        <div class="col-md-6 col-lg-4 mb-4">
                            <div class="card mentor-card p-3 my-3">
                                <div class="mentor-card-img text-center">
                                    <img alt="Mentor Avatar" class="img-fluid rounded-circle" width="80" height="80" src="./assets/images/avatar.png">
                                </div>
                                <div class="mentor-card-info mt-3 border-bottom">
                                    <div class="row align-items-center">
                                        <div class="col-8">
                                            <a class="text-info h5" href="#">Sarah Johnson</a>
                                            <p class="text-small ms-1">Senior Product Manager</p>
                                        </div>
                                        <div class="col-4 text-end">
                                            <span class="text-info star-stat">(4.9)</span>
                                            <div class="text-warning">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mentor-card-stat mt-2">
                                    <div class="row align-items-center">
                                        <div class="col-12">
                                            <p class="text-muted mb-0">Expertise: Product Strategy, Team Leadership</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-4 mb-4">
                            <div class="card mentor-card p-3 my-3">
                                <div class="mentor-card-img text-center">
                                    <img alt="Mentor Avatar" class="img-fluid rounded-circle" width="80" height="80" src="./assets/images/avatar.png">
                                </div>
                                <div class="mentor-card-info mt-3 border-bottom">
                                    <div class="row align-items-center">
                                        <div class="col-8">
                                            <a class="text-info h5" href="#">Michael Chen</a>
                                            <p class="text-small ms-1">Tech Entrepreneur</p>
                                        </div>
                                        <div class="col-4 text-end">
                                            <span class="text-info star-stat">(4.8)</span>
                                            <div class="text-warning">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mentor-card-stat mt-2">
                                    <div class="row align-items-center">
                                        <div class="col-12">
                                            <p class="text-muted mb-0">Expertise: Startup Strategy, Business Development</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-4 mb-4">
                            <div class="card mentor-card p-3 my-3">
                                <div class="mentor-card-img text-center">
                                    <img alt="Mentor Avatar" class="img-fluid rounded-circle" width="80" height="80" src="./assets/images/avatar.png">
                                </div>
                                <div class="mentor-card-info mt-3 border-bottom">
                                    <div class="row align-items-center">
                                        <div class="col-8">
                                            <a class="text-info h5" href="#">Emily Rodriguez</a>
                                            <p class="text-small ms-1">Life Coach</p>
                                        </div>
                                        <div class="col-4 text-end">
                                            <span class="text-info star-stat">(5.0)</span>
                                            <div class="text-warning">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mentor-card-stat mt-2">
                                    <div class="row align-items-center">
                                        <div class="col-12">
                                            <p class="text-muted mb-0">Expertise: Personal Development, Career Transitions</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="text-center">
                        <a class="btn btn-primary btn-lg" href="./mentors.html">
                            View all mentors
                        </a>
                    </p>
                </div>
            </section>
        </div>
    </main>

    <footer id="colophon" class="site-footer">
        <div class="mt-5 bg-footer py-4 text-light">
            <div class="container">
                <div class="row py-5">
                    <div class="col-sm-6 col-md-3">
                        <h3 class="footer-brand">Mentorship </h3>
                        <p>
                            E-mail: <a href="mailto:email@mail.com" class="text-light">email@mail.com</a>
                        </p>
                        <p>
                            Phone: <a href="tel:+2626200000" class="text-light">+2626200000.0.0.</a>
                        </p>
                        <div class="d-flex">
                            <a href="#" class="social-link">
                                <i class="fa-brands fa-facebook-f"></i>
                            </a>
                            <a href="#" class="social-link">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                            <a href="#" class="social-link">
                                <i class="fa-brands fa-twitter"></i>
                            </a>
                            <a href="#" class="social-link">
                                <i class="fa-brands fa-linkedin-in"></i>
                            </a>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-3">
                        <h3>Quick links</h3>
                        <p>
                            <a href="#" class="footer-link">
                                <i class="fa fa-chevron-right text-small me-2" aria-hidden="true"></i>
                                How it works
                            </a>
                        </p>
                        <p>
                            <a href="./programs/" class="footer-link">
                                <i class="fa fa-chevron-right text-small me-2" aria-hidden="true"></i>
                                Programs
                            </a>
                        </p>
                        <p>
                            <a href="./mentors.html" class="footer-link">
                                <i class="fa fa-chevron-right text-small me-2" aria-hidden="true"></i>
                                Find mentor
                            </a>
                        </p>
                        <p>
                            <a href="./programs/" class="footer-link">
                                <i class="fa fa-chevron-right text-small me-2" aria-hidden="true"></i>
                                Programs
                            </a>
                        </p>
                    </div>

                    <div class="col-sm-6">
                        <h3>Send message</h3>
                        <div class="footer-contact-form">
                            <p>Contact form will be implemented here.</p>
                        </div>
                    </div>
                </div>

                <p class="text-center">
                    © Copyright 2022 Mentorship. All Rights Reserved | Site-Map
                </p>
            </div>
        </div>
    </footer>

</div>

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Bootstrap JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<!-- Custom JavaScript -->
<script src="./main.js"></script>

<script>
jQuery(document).ready(function($) {
    // Simple dropdown toggle handler
    $('.dropdown-toggle').on('click', function(e) {
        e.preventDefault();
        e.stopPropagation();

        // Close other dropdowns
        $('.dropdown-menu').not($(this).next()).removeClass('show').hide();
        $('.dropdown-toggle').not(this).attr('aria-expanded', 'false');

        // Toggle current dropdown
        var dropdownMenu = $(this).next('.dropdown-menu');
        var isShown = dropdownMenu.hasClass('show');

        if (isShown) {
            dropdownMenu.removeClass('show').fadeOut(200);
            $(this).attr('aria-expanded', 'false');
        } else {
            dropdownMenu.addClass('show').fadeIn(200);
            $(this).attr('aria-expanded', 'true');
        }
    });

    // Close dropdown when clicking outside
    $(document).on('click', function(e) {
        if (!$(e.target).closest('.dropdown').length) {
            $('.dropdown-menu.show').removeClass('show').fadeOut(200);
            $('.dropdown-toggle').attr('aria-expanded', 'false');
        }
    });

    // Close dropdown on escape key
    $(document).on('keydown', function(e) {
        if (e.keyCode === 27) { // Escape key
            $('.dropdown-menu.show').removeClass('show').fadeOut(200);
            $('.dropdown-toggle').attr('aria-expanded', 'false');
        }
    });

    // Prevent dropdown from closing when clicking inside the menu
    $('.dropdown-menu').on('click', function(e) {
        e.stopPropagation();
    });
});
</script>

</body>
</html>`;

// Create program pages with original design
const programPages = [
  {
    filename: "career-mentorship-program.html",
    title: "Career Mentorship Program",
    description: "Guidance, Support, Skill Development, Networking, Growth.",
    iconColor: "rgb(40, 69, 126)",
    iconClass: "fa fa-user",
  },
  {
    filename: "life-coach-program.html",
    title: "Life Coach Program",
    description:
      "Personal Growth, Self-Discovery, Empowerment, Balance, Fulfillment.",
    iconColor: "rgb(32, 177, 9)",
    iconClass: "fa fa-user",
  },
  {
    filename: "business-mentorship-program.html",
    title: "Business Mentorship Program",
    description:
      "Entrepreneurial Success, Strategy, Expertise, Networking, Growth.",
    iconColor: "rgb(255, 0, 245)",
    iconClass: "fa fa-gift",
  },
  {
    filename: "business-coach-program.html",
    title: "Business Coach Program",
    description: "Success, Strategy, Skills, Support, Growth.",
    iconColor: "rgb(255, 138, 0)",
    iconClass: "fa fa-gift",
  },
];

programPages.forEach((program) => {
  const programHtml = `<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>${program.title} - Mentorship</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inknut+Antiqua:wght@300&family=Inter:wght@300;400;500&family=Montserrat:wght@100&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@latest/font/bootstrap-icons.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="../style.css">
</head>

<body>

<div id="page" class="site">
    <header id="masthead" class="site-header">
        <div class="sticky-top">
            <nav class="navbar main-navbar navbar-expand-lg bg-navbar py-4">
                <div class="container">
                    <a href="../" class="navbar-brand fw-bold">
                        Mentorship.
                    </a>

                    <button type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#main-navbar"
                            aria-controls="main-navbar"
                            aria-expanded="false"
                            aria-label="Toggle navigation"
                            class="navbar-toggler">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div id="main-navbar" class="collapse navbar-collapse">
                        <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a href="../" class="nav-link">Home</a>
                            </li>
                            <li class="nav-item">
                                <a href="../resources.html" class="nav-link">Resources</a>
                            </li>
                            <li class="nav-item">
                                <a href="../mentors.html" class="nav-link">Find a mentor</a>
                            </li>
                            <li class="dropdown nav-item">
                                <a href="#"
                                   data-bs-toggle="dropdown"
                                   aria-expanded="false"
                                   class="nav-link dropdown-toggle active">
                                    Programs
                                </a>
                                <ul class="dropdown-menu shadow border-0 rounded">
                                    <li>
                                        <a class="dropdown-item" href="./career-mentorship-program.html">
                                            Career Mentorship Program
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="./life-coach-program.html">
                                            Life Coach Program
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="./business-mentorship-program.html">
                                            Business Mentorship Program
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="./business-coach-program.html">
                                            Business Coach Program
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="../contact-us.html" class="nav-link">Contact Us</a>
                            </li>
                        </ul>

                        <div class="d-flex">
                            <div>
                                <a href="../login.html" class="btn me-1 fw-bold border-0">Login</a>
                                <a href="../register.html" class="btn btn-primary">Signup</a>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>

    <main id="primary" class="site-main">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <div class="mb-4">
                        <span class="program-icon d-inline-flex align-items-center justify-content-center mb-3" style="background-color: ${program.iconColor}; width: 80px; height: 80px; border-radius: 50%;">
                            <i class="${program.iconClass} text-white fa-2x" aria-hidden="true"></i>
                        </span>
                    </div>
                    <h1 class="mb-4">${program.title}</h1>
                    <p class="lead mb-5">${program.description}</p>

                    <div class="row g-4 text-start">
                        <div class="col-md-6">
                            <div class="card h-100 p-4">
                                <div class="d-flex align-items-center mb-3">
                                    <i class="fa fa-clock text-primary fa-2x me-3"></i>
                                    <h5 class="mb-0">Flexible Schedule</h5>
                                </div>
                                <p>Sessions tailored to fit your availability and time zone.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card h-100 p-4">
                                <div class="d-flex align-items-center mb-3">
                                    <i class="fa fa-user-tie text-primary fa-2x me-3"></i>
                                    <h5 class="mb-0">Expert Mentors</h5>
                                </div>
                                <p>Connect with industry professionals with proven track records.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card h-100 p-4">
                                <div class="d-flex align-items-center mb-3">
                                    <i class="fa fa-certificate text-primary fa-2x me-3"></i>
                                    <h5 class="mb-0">Certification</h5>
                                </div>
                                <p>Receive a certificate upon successful completion of the program.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card h-100 p-4">
                                <div class="d-flex align-items-center mb-3">
                                    <i class="fa fa-support text-primary fa-2x me-3"></i>
                                    <h5 class="mb-0">Ongoing Support</h5>
                                </div>
                                <p>Access to resources and community support throughout your journey.</p>
                            </div>
                        </div>
                    </div>

                    <div class="mt-5">
                        <a href="../register.html" class="btn btn-primary btn-lg me-3">Get Started</a>
                        <a href="../mentors.html" class="btn btn-outline-primary btn-lg">View Mentors</a>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer id="colophon" class="site-footer">
        <div class="mt-5 bg-footer py-4 text-light">
            <div class="container">
                <div class="row py-5">
                    <div class="col-sm-6 col-md-3">
                        <h3 class="footer-brand">Mentorship </h3>
                        <p>
                            E-mail: <a href="mailto:email@mail.com" class="text-light">email@mail.com</a>
                        </p>
                        <p>
                            Phone: <a href="tel:+2626200000" class="text-light">+2626200000.0.0.</a>
                        </p>
                        <div class="d-flex">
                            <a href="#" class="social-link">
                                <i class="fa-brands fa-facebook-f"></i>
                            </a>
                            <a href="#" class="social-link">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                            <a href="#" class="social-link">
                                <i class="fa-brands fa-twitter"></i>
                            </a>
                            <a href="#" class="social-link">
                                <i class="fa-brands fa-linkedin-in"></i>
                            </a>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-3">
                        <h3>Quick links</h3>
                        <p>
                            <a href="#" class="footer-link">
                                <i class="fa fa-chevron-right text-small me-2" aria-hidden="true"></i>
                                How it works
                            </a>
                        </p>
                        <p>
                            <a href="../programs/" class="footer-link">
                                <i class="fa fa-chevron-right text-small me-2" aria-hidden="true"></i>
                                Programs
                            </a>
                        </p>
                        <p>
                            <a href="../mentors.html" class="footer-link">
                                <i class="fa fa-chevron-right text-small me-2" aria-hidden="true"></i>
                                Find mentor
                            </a>
                        </p>
                        <p>
                            <a href="../programs/" class="footer-link">
                                <i class="fa fa-chevron-right text-small me-2" aria-hidden="true"></i>
                                Programs
                            </a>
                        </p>
                    </div>

                    <div class="col-sm-6">
                        <h3>Send message</h3>
                        <div class="footer-contact-form">
                            <p>Contact form will be implemented here.</p>
                        </div>
                    </div>
                </div>

                <p class="text-center">
                    © Copyright 2022 Mentorship. All Rights Reserved | Site-Map
                </p>
            </div>
        </div>
    </footer>
</div>

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Bootstrap JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<!-- Custom JavaScript -->
<script src="../main.js"></script>

<script>
jQuery(document).ready(function($) {
    // Simple dropdown toggle handler
    $('.dropdown-toggle').on('click', function(e) {
        e.preventDefault();
        e.stopPropagation();

        // Close other dropdowns
        $('.dropdown-menu').not($(this).next()).removeClass('show').hide();
        $('.dropdown-toggle').not(this).attr('aria-expanded', 'false');

        // Toggle current dropdown
        var dropdownMenu = $(this).next('.dropdown-menu');
        var isShown = dropdownMenu.hasClass('show');

        if (isShown) {
            dropdownMenu.removeClass('show').fadeOut(200);
            $(this).attr('aria-expanded', 'false');
        } else {
            dropdownMenu.addClass('show').fadeIn(200);
            $(this).attr('aria-expanded', 'true');
        }
    });

    // Close dropdown when clicking outside
    $(document).on('click', function(e) {
        if (!$(e.target).closest('.dropdown').length) {
            $('.dropdown-menu.show').removeClass('show').fadeOut(200);
            $('.dropdown-toggle').attr('aria-expanded', 'false');
        }
    });

    // Close dropdown on escape key
    $(document).on('keydown', function(e) {
        if (e.keyCode === 27) { // Escape key
            $('.dropdown-menu.show').removeClass('show').fadeOut(200);
            $('.dropdown-toggle').attr('aria-expanded', 'false');
        }
    });

    // Prevent dropdown from closing when clicking inside the menu
    $('.dropdown-menu').on('click', function(e) {
        e.stopPropagation();
    });
});
</script>

</body>
</html>`;

  fs.writeFileSync(`./build/programs/${program.filename}`, programHtml);
});

// Write main files
fs.writeFileSync("./build/index.html", indexHtml);

// Create Resources page
const resourcesHtml = `<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Resources - Mentorship</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inknut+Antiqua:wght@300&family=Inter:wght@300;400;500&family=Montserrat:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@latest/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./style.css">
</head>
<body class="resources-page">
    <div id="page" class="site">
        <header id="masthead" class="site-header">
            <div class="sticky-top">
                <nav class="navbar main-navbar navbar-expand-lg bg-navbar py-4">
                    <div class="container">
                        <a href="./" class="navbar-brand fw-bold">Mentorship.</a>
                        <button type="button" data-bs-toggle="collapse" data-bs-target="#main-navbar" aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div id="main-navbar" class="collapse navbar-collapse">
                            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                                <li class="nav-item"><a href="./" class="nav-link">Home</a></li>
                                <li class="nav-item"><a href="./resources.html" class="nav-link active">Resources</a></li>
                                <li class="nav-item"><a href="./mentors.html" class="nav-link">Find a mentor</a></li>
                                <li class="dropdown nav-item">
                                    <a href="#" data-bs-toggle="dropdown" aria-expanded="false" class="nav-link dropdown-toggle">Programs</a>
                                    <ul class="dropdown-menu shadow border-0 rounded">
                                        <li><a class="dropdown-item" href="./programs/career-mentorship-program.html">Career Mentorship Program</a></li>
                                        <li><a class="dropdown-item" href="./programs/life-coach-program.html">Life Coach Program</a></li>
                                        <li><a class="dropdown-item" href="./programs/business-mentorship-program.html">Business Mentorship Program</a></li>
                                        <li><a class="dropdown-item" href="./programs/business-coach-program.html">Business Coach Program</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item"><a href="./contact-us.html" class="nav-link">Contact Us</a></li>
                            </ul>
                            <div class="d-flex">
                                <div>
                                    <a href="./login.html" class="btn me-1 fw-bold border-0">Login</a>
                                    <a href="./register.html" class="btn btn-primary">Signup</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
        <main id="primary" class="site-main">
            <div class="container py-5">
                <div class="row">
                    <div class="col-12 text-center mb-5">
                        <h1>Resources</h1>
                        <p class="lead">Explore our comprehensive collection of mentorship and career development resources.</p>
                    </div>
                </div>
                <div class="row g-4">
                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100">
                            <div class="card-body">
                                <i class="fa fa-book fa-2x text-primary mb-3"></i>
                                <h5 class="card-title">Career Guides</h5>
                                <p class="card-text">Comprehensive guides for career development and professional growth.</p>
                                <a href="#" class="btn btn-outline-primary">Explore</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100">
                            <div class="card-body">
                                <i class="fa fa-video fa-2x text-primary mb-3"></i>
                                <h5 class="card-title">Video Tutorials</h5>
                                <p class="card-text">Learn from expert mentors through our video tutorial library.</p>
                                <a href="#" class="btn btn-outline-primary">Watch</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100">
                            <div class="card-body">
                                <i class="fa fa-podcast fa-2x text-primary mb-3"></i>
                                <h5 class="card-title">Podcasts</h5>
                                <p class="card-text">Listen to inspiring stories and advice from successful professionals.</p>
                                <a href="#" class="btn btn-outline-primary">Listen</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <footer id="colophon" class="site-footer">
            <div class="mt-5 bg-footer py-4 text-light">
                <div class="container">
                    <p class="text-center">© Copyright 2022 Mentorship. All Rights Reserved | Site-Map</p>
                </div>
            </div>
        </footer>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./main.js"></script>
    <script>
    jQuery(document).ready(function($) {
        $('.dropdown-toggle').on('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            $('.dropdown-menu').not($(this).next()).removeClass('show').hide();
            $('.dropdown-toggle').not(this).attr('aria-expanded', 'false');
            var dropdownMenu = $(this).next('.dropdown-menu');
            var isShown = dropdownMenu.hasClass('show');
            if (isShown) {
                dropdownMenu.removeClass('show').fadeOut(200);
                $(this).attr('aria-expanded', 'false');
            } else {
                dropdownMenu.addClass('show').fadeIn(200);
                $(this).attr('aria-expanded', 'true');
            }
        });
        $(document).on('click', function(e) {
            if (!$(e.target).closest('.dropdown').length) {
                $('.dropdown-menu.show').removeClass('show').fadeOut(200);
                $('.dropdown-toggle').attr('aria-expanded', 'false');
            }
        });
    });
    </script>
</body>
</html>`;

// Create Mentors page
const mentorsHtml = `<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Find a Mentor - Mentorship</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inknut+Antiqua:wght@300&family=Inter:wght@300;400;500&family=Montserrat:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@latest/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./style.css">
</head>
<body class="mentors-page">
    <div id="page" class="site">
        <header id="masthead" class="site-header">
            <div class="sticky-top">
                <nav class="navbar main-navbar navbar-expand-lg bg-navbar py-4">
                    <div class="container">
                        <a href="./" class="navbar-brand fw-bold">Mentorship.</a>
                        <button type="button" data-bs-toggle="collapse" data-bs-target="#main-navbar" aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div id="main-navbar" class="collapse navbar-collapse">
                            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                                <li class="nav-item"><a href="./" class="nav-link">Home</a></li>
                                <li class="nav-item"><a href="./resources.html" class="nav-link">Resources</a></li>
                                <li class="nav-item"><a href="./mentors.html" class="nav-link active">Find a mentor</a></li>
                                <li class="dropdown nav-item">
                                    <a href="#" data-bs-toggle="dropdown" aria-expanded="false" class="nav-link dropdown-toggle">Programs</a>
                                    <ul class="dropdown-menu shadow border-0 rounded">
                                        <li><a class="dropdown-item" href="./programs/career-mentorship-program.html">Career Mentorship Program</a></li>
                                        <li><a class="dropdown-item" href="./programs/life-coach-program.html">Life Coach Program</a></li>
                                        <li><a class="dropdown-item" href="./programs/business-mentorship-program.html">Business Mentorship Program</a></li>
                                        <li><a class="dropdown-item" href="./programs/business-coach-program.html">Business Coach Program</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item"><a href="./contact-us.html" class="nav-link">Contact Us</a></li>
                            </ul>
                            <div class="d-flex">
                                <div>
                                    <a href="./login.html" class="btn me-1 fw-bold border-0">Login</a>
                                    <a href="./register.html" class="btn btn-primary">Signup</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
        <main id="primary" class="site-main">
            <div class="container py-5">
                <div class="row">
                    <div class="col-12 text-center mb-5">
                        <h1>Find a Mentor</h1>
                        <p class="lead">Connect with experienced mentors who can guide your career journey.</p>
                    </div>
                </div>
                <div class="row g-4">
                    <div class="col-md-6 col-lg-4">
                        <div class="card mentor-card p-3">
                            <div class="mentor-card-img text-center">
                                <img alt="Mentor Avatar" class="img-fluid rounded-circle" width="80" height="80" src="./assets/images/avatar.png">
                            </div>
                            <div class="mentor-card-info mt-3 border-bottom">
                                <div class="row align-items-center">
                                    <div class="col-8">
                                        <a class="text-info h5" href="#">Sarah Johnson</a>
                                        <p class="text-small ms-1">Senior Product Manager</p>
                                    </div>
                                    <div class="col-4 text-end">
                                        <span class="text-info star-stat">(4.9)</span>
                                        <div class="text-warning">
                                            <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mentor-card-stat mt-2">
                                <div class="row align-items-center">
                                    <div class="col-12">
                                        <p class="text-muted mb-0">Expertise: Product Strategy, Team Leadership</p>
                                        <a href="#" class="btn btn-primary btn-sm mt-2">Connect</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="card mentor-card p-3">
                            <div class="mentor-card-img text-center">
                                <img alt="Mentor Avatar" class="img-fluid rounded-circle" width="80" height="80" src="./assets/images/avatar.png">
                            </div>
                            <div class="mentor-card-info mt-3 border-bottom">
                                <div class="row align-items-center">
                                    <div class="col-8">
                                        <a class="text-info h5" href="#">Michael Chen</a>
                                        <p class="text-small ms-1">Tech Entrepreneur</p>
                                    </div>
                                    <div class="col-4 text-end">
                                        <span class="text-info star-stat">(4.8)</span>
                                        <div class="text-warning">
                                            <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mentor-card-stat mt-2">
                                <div class="row align-items-center">
                                    <div class="col-12">
                                        <p class="text-muted mb-0">Expertise: Startup Strategy, Business Development</p>
                                        <a href="#" class="btn btn-primary btn-sm mt-2">Connect</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="card mentor-card p-3">
                            <div class="mentor-card-img text-center">
                                <img alt="Mentor Avatar" class="img-fluid rounded-circle" width="80" height="80" src="./assets/images/avatar.png">
                            </div>
                            <div class="mentor-card-info mt-3 border-bottom">
                                <div class="row align-items-center">
                                    <div class="col-8">
                                        <a class="text-info h5" href="#">Emily Rodriguez</a>
                                        <p class="text-small ms-1">Life Coach</p>
                                    </div>
                                    <div class="col-4 text-end">
                                        <span class="text-info star-stat">(5.0)</span>
                                        <div class="text-warning">
                                            <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mentor-card-stat mt-2">
                                <div class="row align-items-center">
                                    <div class="col-12">
                                        <p class="text-muted mb-0">Expertise: Personal Development, Career Transitions</p>
                                        <a href="#" class="btn btn-primary btn-sm mt-2">Connect</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <footer id="colophon" class="site-footer">
            <div class="mt-5 bg-footer py-4 text-light">
                <div class="container">
                    <p class="text-center">© Copyright 2022 Mentorship. All Rights Reserved | Site-Map</p>
                </div>
            </div>
        </footer>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./main.js"></script>
    <script>
    jQuery(document).ready(function($) {
        $('.dropdown-toggle').on('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            $('.dropdown-menu').not($(this).next()).removeClass('show').hide();
            $('.dropdown-toggle').not(this).attr('aria-expanded', 'false');
            var dropdownMenu = $(this).next('.dropdown-menu');
            var isShown = dropdownMenu.hasClass('show');
            if (isShown) {
                dropdownMenu.removeClass('show').fadeOut(200);
                $(this).attr('aria-expanded', 'false');
            } else {
                dropdownMenu.addClass('show').fadeIn(200);
                $(this).attr('aria-expanded', 'true');
            }
        });
        $(document).on('click', function(e) {
            if (!$(e.target).closest('.dropdown').length) {
                $('.dropdown-menu.show').removeClass('show').fadeOut(200);
                $('.dropdown-toggle').attr('aria-expanded', 'false');
            }
        });
    });
    </script>
</body>
</html>`;

// Create Contact Us page
const contactHtml = `<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact Us - Mentorship</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inknut+Antiqua:wght@300&family=Inter:wght@300;400;500&family=Montserrat:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@latest/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./style.css">
</head>
<body class="contact-page">
    <div id="page" class="site">
        <header id="masthead" class="site-header">
            <div class="sticky-top">
                <nav class="navbar main-navbar navbar-expand-lg bg-navbar py-4">
                    <div class="container">
                        <a href="./" class="navbar-brand fw-bold">Mentorship.</a>
                        <button type="button" data-bs-toggle="collapse" data-bs-target="#main-navbar" aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div id="main-navbar" class="collapse navbar-collapse">
                            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                                <li class="nav-item"><a href="./" class="nav-link">Home</a></li>
                                <li class="nav-item"><a href="./resources.html" class="nav-link">Resources</a></li>
                                <li class="nav-item"><a href="./mentors.html" class="nav-link">Find a mentor</a></li>
                                <li class="dropdown nav-item">
                                    <a href="#" data-bs-toggle="dropdown" aria-expanded="false" class="nav-link dropdown-toggle">Programs</a>
                                    <ul class="dropdown-menu shadow border-0 rounded">
                                        <li><a class="dropdown-item" href="./programs/career-mentorship-program.html">Career Mentorship Program</a></li>
                                        <li><a class="dropdown-item" href="./programs/life-coach-program.html">Life Coach Program</a></li>
                                        <li><a class="dropdown-item" href="./programs/business-mentorship-program.html">Business Mentorship Program</a></li>
                                        <li><a class="dropdown-item" href="./programs/business-coach-program.html">Business Coach Program</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item"><a href="./contact-us.html" class="nav-link active">Contact Us</a></li>
                            </ul>
                            <div class="d-flex">
                                <div>
                                    <a href="./login.html" class="btn me-1 fw-bold border-0">Login</a>
                                    <a href="./register.html" class="btn btn-primary">Signup</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
        <main id="primary" class="site-main">
            <div class="container py-5">
                <div class="row">
                    <div class="col-12 text-center mb-5">
                        <h1>Contact Us</h1>
                        <p class="lead">Get in touch with us for any questions or support.</p>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="contact-form">
                            <form>
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="Your Name" required>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="email" class="form-control" placeholder="Your Email" required>
                                    </div>
                                    <div class="col-12">
                                        <input type="text" class="form-control" placeholder="Subject" required>
                                    </div>
                                    <div class="col-12">
                                        <textarea class="form-control" rows="5" placeholder="Your Message" required></textarea>
                                    </div>
                                    <div class="col-12 text-center">
                                        <button type="submit" class="btn btn-primary btn-lg">Send Message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <footer id="colophon" class="site-footer">
            <div class="mt-5 bg-footer py-4 text-light">
                <div class="container">
                    <p class="text-center">© Copyright 2022 Mentorship. All Rights Reserved | Site-Map</p>
                </div>
            </div>
        </footer>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./main.js"></script>
    <script>
    jQuery(document).ready(function($) {
        $('.dropdown-toggle').on('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            $('.dropdown-menu').not($(this).next()).removeClass('show').hide();
            $('.dropdown-toggle').not(this).attr('aria-expanded', 'false');
            var dropdownMenu = $(this).next('.dropdown-menu');
            var isShown = dropdownMenu.hasClass('show');
            if (isShown) {
                dropdownMenu.removeClass('show').fadeOut(200);
                $(this).attr('aria-expanded', 'false');
            } else {
                dropdownMenu.addClass('show').fadeIn(200);
                $(this).attr('aria-expanded', 'true');
            }
        });
        $(document).on('click', function(e) {
            if (!$(e.target).closest('.dropdown').length) {
                $('.dropdown-menu.show').removeClass('show').fadeOut(200);
                $('.dropdown-toggle').attr('aria-expanded', 'false');
            }
        });
        $('form').on('submit', function(e) {
            e.preventDefault();
            alert('Thank you for your message! We will get back to you soon.');
            this.reset();
        });
    });
    </script>
</body>
</html>`;

// Create Login page
const loginHtml = `<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login - Mentorship</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inknut+Antiqua:wght@300&family=Inter:wght@300;400;500&family=Montserrat:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@latest/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./style.css">
</head>
<body class="login-page">
    <div class="container-fluid vh-100 d-flex align-items-center justify-content-center">
        <div class="row w-100 justify-content-center">
            <div class="col-md-6 col-lg-4">
                <div class="card shadow">
                    <div class="card-body p-5">
                        <div class="text-center mb-4">
                            <a href="./" class="navbar-brand fw-bold h3">Mentorship.</a>
                            <h4 class="mt-3">Welcome Back</h4>
                            <p class="text-muted">Sign in to your account</p>
                        </div>
                        <form>
                            <div class="mb-3">
                                <input type="email" class="form-control" placeholder="Email Address" required>
                            </div>
                            <div class="mb-3">
                                <input type="password" class="form-control" placeholder="Password" required>
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="rememberMe">
                                <label class="form-check-label" for="rememberMe">Remember me</label>
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">Sign In</button>
                            </div>
                            <div class="text-center mt-3">
                                <p>Don't have an account? <a href="./register.html">Sign up</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
    $('form').on('submit', function(e) {
        e.preventDefault();
        alert('Demo login - redirecting to home page');
        window.location.href = './';
    });
    </script>
</body>
</html>`;

// Create Register page
const registerHtml = `<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign Up - Mentorship</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inknut+Antiqua:wght@300&family=Inter:wght@300;400;500&family=Montserrat:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@latest/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./style.css">
</head>
<body class="register-page">
    <div class="container-fluid vh-100 d-flex align-items-center justify-content-center">
        <div class="row w-100 justify-content-center">
            <div class="col-md-6 col-lg-4">
                <div class="card shadow">
                    <div class="card-body p-5">
                        <div class="text-center mb-4">
                            <a href="./" class="navbar-brand fw-bold h3">Mentorship.</a>
                            <h4 class="mt-3">Create Account</h4>
                            <p class="text-muted">Join our mentorship community</p>
                        </div>
                        <form>
                            <div class="mb-3">
                                <input type="text" class="form-control" placeholder="Full Name" required>
                            </div>
                            <div class="mb-3">
                                <input type="email" class="form-control" placeholder="Email Address" required>
                            </div>
                            <div class="mb-3">
                                <input type="password" class="form-control" placeholder="Password" required>
                            </div>
                            <div class="mb-3">
                                <input type="password" class="form-control" placeholder="Confirm Password" required>
                            </div>
                            <div class="mb-3">
                                <select class="form-select" required>
                                    <option value="">I want to be a...</option>
                                    <option value="mentee">Mentee - Looking for guidance</option>
                                    <option value="mentor">Mentor - Ready to guide others</option>
                                </select>
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="agreeTerms" required>
                                <label class="form-check-label" for="agreeTerms">I agree to the Terms and Conditions</label>
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">Create Account</button>
                            </div>
                            <div class="text-center mt-3">
                                <p>Already have an account? <a href="./login.html">Sign in</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
    $('form').on('submit', function(e) {
        e.preventDefault();
        alert('Demo registration - redirecting to home page');
        window.location.href = './';
    });
    </script>
</body>
</html>`;

// Write all pages
fs.writeFileSync("./build/resources.html", resourcesHtml);
fs.writeFileSync("./build/mentors.html", mentorsHtml);
fs.writeFileSync("./build/contact-us.html", contactHtml);
fs.writeFileSync("./build/login.html", loginHtml);
fs.writeFileSync("./build/register.html", registerHtml);

// Create a simple 404 page
const notFoundHtml = `<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Not Found - Mentorship</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <div class="container text-center py-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h1 class="display-1 fw-bold text-primary">404</h1>
                <h2 class="mb-4">Page Not Found</h2>
                <p class="lead mb-4">The page you're looking for doesn't exist.</p>
                <a href="./" class="btn btn-primary">Go Home</a>
            </div>
        </div>
    </div>
</body>
</html>`;

fs.writeFileSync("./build/404.html", notFoundHtml);

console.log("✅ Static site built successfully!");
console.log("📁 Files created in ./build directory");
console.log("🚀 Ready for Netlify deployment");
