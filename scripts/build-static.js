const fs = require("fs");
const path = require("path");

// Create build directory
const buildDir = path.join(__dirname, "../build");
if (!fs.existsSync(buildDir)) {
  fs.mkdirSync(buildDir, { recursive: true });
}

// Copy assets
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

// Copy compiled CSS and JS assets
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

// Create main index.html
const indexHtml = `<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mentorship - Professional Development Platform</title>
    <meta name="description" content="Connect with industry experts and accelerate your career growth through personalized mentorship programs.">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inknut+Antiqua:wght@300&family=Inter:wght@300;400;500&family=Montserrat:wght@100&display=swap" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <!-- Navigation -->
    <header id="masthead" class="site-header">
        <div class="sticky-top">
            <nav class="navbar main-navbar navbar-expand-lg bg-navbar py-4">
                <div class="container">
                    <a href="./" class="navbar-brand fw-bold">Mentorship.</a>

                    <button type="button" data-bs-toggle="collapse" data-bs-target="#main-navbar" class="navbar-toggler" aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div id="main-navbar" class="collapse navbar-collapse">
                        <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a href="#home" class="nav-link active">Home</a>
                            </li>
                            <li class="nav-item">
                                <a href="#resources" class="nav-link">Resources</a>
                            </li>
                            <li class="nav-item">
                                <a href="#mentors" class="nav-link">Find a mentor</a>
                            </li>
                            <li class="dropdown nav-item">
                                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Programs</a>
                                <ul class="dropdown-menu shadow border-0 rounded">
                                    <li><a class="dropdown-item" href="./programs/career-mentorship-program.html">Career Mentorship Program</a></li>
                                    <li><a class="dropdown-item" href="./programs/life-coach-program.html">Life Coach Program</a></li>
                                    <li><a class="dropdown-item" href="./programs/business-mentorship-program.html">Business Mentorship Program</a></li>
                                    <li><a class="dropdown-item" href="./programs/business-coach-program.html">Business Coach Program</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="#contact" class="nav-link">Contact Us</a>
                            </li>
                        </ul>

                        <div class="d-flex">
                            <div>
                                <a href="#login" class="btn me-1 fw-bold border-0">Login</a>
                                <a href="#register" class="btn btn-primary">Signup</a>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section id="home" class="hero-section py-5">
        <div class="container">
            <div class="row align-items-center min-vh-100">
                <div class="col-lg-6">
                    <div class="hero-content">
                        <h1 class="hero-title display-4 fw-bold mb-4">
                            Find Your <span class="text-primary">Perfect Mentor</span> Today
                        </h1>
                        <p class="hero-subtitle lead mb-4">
                            Connect with industry experts and accelerate your career growth through personalized mentorship programs designed for your success.
                        </p>
                        <div class="hero-actions">
                            <a href="#programs" class="btn btn-primary btn-lg me-3">Explore Programs</a>
                            <a href="#mentors" class="btn btn-outline-primary btn-lg">Find Mentors</a>
                        </div>
                        <div class="hero-stats mt-5">
                            <div class="row">
                                <div class="col-4">
                                    <div class="stat-item text-center">
                                        <h3 class="stat-number">500+</h3>
                                        <p class="stat-label">Mentors</p>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="stat-item text-center">
                                        <h3 class="stat-number">1000+</h3>
                                        <p class="stat-label">Students</p>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="stat-item text-center">
                                        <h3 class="stat-number">95%</h3>
                                        <p class="stat-label">Success Rate</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="hero-image">
                        <img src="./assets/images/hero-img.png" alt="Mentorship Hero Image" class="img-fluid" onerror="this.style.display='none'">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Programs Section -->
    <section id="programs" class="programs-section py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-5">
                    <h2 class="section-title">Our Programs</h2>
                    <p class="section-subtitle">Choose the perfect mentorship program for your career goals</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6">
                    <div class="program-card card h-100 border-0 shadow-sm">
                        <div class="card-body p-4">
                            <div class="program-icon mb-3">
                                <i class="fas fa-briefcase fa-2x text-primary"></i>
                            </div>
                            <h5 class="card-title">Career Mentorship</h5>
                            <p class="card-text">Get guidance on career development, job search strategies, and professional growth.</p>
                            <a href="./programs/career-mentorship-program.html" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="program-card card h-100 border-0 shadow-sm">
                        <div class="card-body p-4">
                            <div class="program-icon mb-3">
                                <i class="fas fa-heart fa-2x text-primary"></i>
                            </div>
                            <h5 class="card-title">Life Coach</h5>
                            <p class="card-text">Personal development and life balance coaching for overall well-being.</p>
                            <a href="./programs/life-coach-program.html" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="program-card card h-100 border-0 shadow-sm">
                        <div class="card-body p-4">
                            <div class="program-icon mb-3">
                                <i class="fas fa-chart-line fa-2x text-primary"></i>
                            </div>
                            <h5 class="card-title">Business Mentorship</h5>
                            <p class="card-text">Entrepreneurship guidance and business development strategies.</p>
                            <a href="./programs/business-mentorship-program.html" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="program-card card h-100 border-0 shadow-sm">
                        <div class="card-body p-4">
                            <div class="program-icon mb-3">
                                <i class="fas fa-users fa-2x text-primary"></i>
                            </div>
                            <h5 class="card-title">Business Coach</h5>
                            <p class="card-text">Executive coaching and leadership development for business professionals.</p>
                            <a href="./programs/business-coach-program.html" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact-section py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-5">
                    <h2 class="section-title">Get In Touch</h2>
                    <p class="section-subtitle">Ready to start your mentorship journey? Contact us today!</p>
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
    </section>

    <!-- Footer -->
    <footer class="footer-section bg-dark text-light py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p>&copy; 2024 Mentorship. All rights reserved.</p>
                </div>
                <div class="col-md-6 text-end">
                    <a href="#" class="text-light me-3">Privacy Policy</a>
                    <a href="#" class="text-light">Terms of Service</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scroll to Top Button -->
    <button class="scroll-to-top btn btn-primary rounded-circle" style="display: none; position: fixed; bottom: 20px; right: 20px; width: 50px; height: 50px; z-index: 1000;">
        <i class="fas fa-arrow-up"></i>
    </button>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Custom JavaScript -->
    <script src="./main.js"></script>

    <!-- Additional JavaScript for functionality -->
    <script>
        // Mobile menu toggle functionality
        document.addEventListener('DOMContentLoaded', function() {
            // Dropdown hover functionality for desktop
            const dropdownElements = document.querySelectorAll('.dropdown');

            dropdownElements.forEach(dropdown => {
                const dropdownToggle = dropdown.querySelector('.dropdown-toggle');
                const dropdownMenu = dropdown.querySelector('.dropdown-menu');

                if (window.innerWidth > 992) { // Desktop only
                    dropdown.addEventListener('mouseenter', function() {
                        dropdownMenu.classList.add('show');
                        dropdownToggle.setAttribute('aria-expanded', 'true');
                    });

                    dropdown.addEventListener('mouseleave', function() {
                        dropdownMenu.classList.remove('show');
                        dropdownToggle.setAttribute('aria-expanded', 'false');
                    });
                }
            });

            // Scroll to top functionality
            const scrollBtn = document.querySelector('.scroll-to-top');

            window.addEventListener('scroll', function() {
                if (window.pageYOffset > 300) {
                    scrollBtn.style.display = 'block';
                } else {
                    scrollBtn.style.display = 'none';
                }
            });

            scrollBtn.addEventListener('click', function() {
                window.scrollTo({ top: 0, behavior: 'smooth' });
            });

            // Smooth scroll for navigation links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
                    const target = document.querySelector(this.getAttribute('href'));
                    if (target) {
                        target.scrollIntoView({ behavior: 'smooth', block: 'start' });
                    }
                });
            });

            // Form submission handling
            const contactForm = document.querySelector('.contact-form form');
            if (contactForm) {
                contactForm.addEventListener('submit', function(e) {
                    e.preventDefault();
                    alert('Thank you for your message! We will get back to you soon.');
                    this.reset();
                });
            }
        });
    </script>
</body>
</html>`;

// Create program pages
const programPages = [
  {
    filename: "career-mentorship-program.html",
    title: "Career Mentorship Program",
    description:
      "Accelerate your career with personalized guidance from industry experts",
    icon: "fas fa-briefcase",
  },
  {
    filename: "life-coach-program.html",
    title: "Life Coach Program",
    description:
      "Find balance and purpose in your personal and professional life",
    icon: "fas fa-heart",
  },
  {
    filename: "business-mentorship-program.html",
    title: "Business Mentorship Program",
    description:
      "Build and scale your business with expert entrepreneurial guidance",
    icon: "fas fa-chart-line",
  },
  {
    filename: "business-coach-program.html",
    title: "Business Coach Program",
    description: "Develop executive leadership skills and business strategy",
    icon: "fas fa-users",
  },
];

programPages.forEach((program) => {
  const programHtml = `<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>${program.title} - Mentorship</title>
    <meta name="description" content="${program.description}">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inknut+Antiqua:wght@300&family=Inter:wght@300;400;500&family=Montserrat:wght@100&display=swap" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <!-- Navigation -->
    <header id="masthead" class="site-header">
        <div class="sticky-top">
            <nav class="navbar main-navbar navbar-expand-lg bg-navbar py-4">
                <div class="container">
                    <a href="../" class="navbar-brand fw-bold">Mentorship.</a>

                    <button type="button" data-bs-toggle="collapse" data-bs-target="#main-navbar" class="navbar-toggler" aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div id="main-navbar" class="collapse navbar-collapse">
                        <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a href="../#home" class="nav-link">Home</a>
                            </li>
                            <li class="nav-item">
                                <a href="../#resources" class="nav-link">Resources</a>
                            </li>
                            <li class="nav-item">
                                <a href="../#mentors" class="nav-link">Find a mentor</a>
                            </li>
                            <li class="dropdown nav-item">
                                <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown" aria-expanded="false">Programs</a>
                                <ul class="dropdown-menu shadow border-0 rounded">
                                    <li><a class="dropdown-item" href="./career-mentorship-program.html">Career Mentorship Program</a></li>
                                    <li><a class="dropdown-item" href="./life-coach-program.html">Life Coach Program</a></li>
                                    <li><a class="dropdown-item" href="./business-mentorship-program.html">Business Mentorship Program</a></li>
                                    <li><a class="dropdown-item" href="./business-coach-program.html">Business Coach Program</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="../#contact" class="nav-link">Contact Us</a>
                            </li>
                        </ul>

                        <div class="d-flex">
                            <div>
                                <a href="#login" class="btn me-1 fw-bold border-0">Login</a>
                                <a href="#register" class="btn btn-primary">Signup</a>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero-section py-5 bg-primary text-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="hero-content">
                        <div class="program-icon mb-3">
                            <i class="${program.icon} fa-3x"></i>
                        </div>
                        <h1 class="hero-title display-4 fw-bold mb-4">${program.title}</h1>
                        <p class="hero-subtitle lead mb-4">${program.description}</p>
                        <div class="hero-actions">
                            <a href="#enroll" class="btn btn-light btn-lg me-3">Enroll Now</a>
                            <a href="#details" class="btn btn-outline-light btn-lg">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="hero-image text-center">
                        <img src="../assets/images/hero-img.png" alt="${program.title} Hero Image" class="img-fluid" onerror="this.style.display='none'">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Program Details -->
    <section id="details" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="program-details">
                        <h2 class="mb-4">Program Overview</h2>
                        <p class="lead mb-4">${program.description}</p>

                        <div class="row g-4 mb-5">
                            <div class="col-md-6">
                                <div class="feature-item">
                                    <div class="feature-icon mb-3">
                                        <i class="fas fa-clock fa-2x text-primary"></i>
                                    </div>
                                    <h5>Flexible Schedule</h5>
                                    <p>Sessions tailored to fit your availability and time zone.</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="feature-item">
                                    <div class="feature-icon mb-3">
                                        <i class="fas fa-user-tie fa-2x text-primary"></i>
                                    </div>
                                    <h5>Expert Mentors</h5>
                                    <p>Connect with industry professionals with proven track records.</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="feature-item">
                                    <div class="feature-icon mb-3">
                                        <i class="fas fa-certificate fa-2x text-primary"></i>
                                    </div>
                                    <h5>Certification</h5>
                                    <p>Receive a certificate upon successful completion of the program.</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="feature-item">
                                    <div class="feature-icon mb-3">
                                        <i class="fas fa-support fa-2x text-primary"></i>
                                    </div>
                                    <h5>Ongoing Support</h5>
                                    <p>Access to resources and community support throughout your journey.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Enrollment Section -->
                        <div id="enroll" class="enrollment-section bg-light p-5 rounded">
                            <div class="text-center mb-4">
                                <h3>Ready to Get Started?</h3>
                                <p class="lead">Join thousands of successful professionals who have transformed their careers through our mentorship programs.</p>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-md-6">
                                    <form class="enrollment-form">
                                        <div class="mb-3">
                                            <input type="text" class="form-control" placeholder="Full Name" required>
                                        </div>
                                        <div class="mb-3">
                                            <input type="email" class="form-control" placeholder="Email Address" required>
                                        </div>
                                        <div class="mb-3">
                                            <select class="form-select" required>
                                                <option value="">Select Experience Level</option>
                                                <option value="entry">Entry Level (0-2 years)</option>
                                                <option value="mid">Mid Level (3-7 years)</option>
                                                <option value="senior">Senior Level (8+ years)</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <textarea class="form-control" rows="3" placeholder="Tell us about your goals and what you hope to achieve through this program"></textarea>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary btn-lg">Apply Now</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer-section bg-dark text-light py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p>&copy; 2024 Mentorship. All rights reserved.</p>
                </div>
                <div class="col-md-6 text-end">
                    <a href="#" class="text-light me-3">Privacy Policy</a>
                    <a href="#" class="text-light">Terms of Service</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scroll to Top Button -->
    <button class="scroll-to-top btn btn-primary rounded-circle" style="display: none; position: fixed; bottom: 20px; right: 20px; width: 50px; height: 50px; z-index: 1000;">
        <i class="fas fa-arrow-up"></i>
    </button>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Custom JavaScript -->
    <script src="../main.js"></script>

    <!-- Additional JavaScript for functionality -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Dropdown hover functionality for desktop
            const dropdownElements = document.querySelectorAll('.dropdown');

            dropdownElements.forEach(dropdown => {
                const dropdownToggle = dropdown.querySelector('.dropdown-toggle');
                const dropdownMenu = dropdown.querySelector('.dropdown-menu');

                if (window.innerWidth > 992) { // Desktop only
                    dropdown.addEventListener('mouseenter', function() {
                        dropdownMenu.classList.add('show');
                        dropdownToggle.setAttribute('aria-expanded', 'true');
                    });

                    dropdown.addEventListener('mouseleave', function() {
                        dropdownMenu.classList.remove('show');
                        dropdownToggle.setAttribute('aria-expanded', 'false');
                    });
                }
            });

            // Scroll to top functionality
            const scrollBtn = document.querySelector('.scroll-to-top');

            window.addEventListener('scroll', function() {
                if (window.pageYOffset > 300) {
                    scrollBtn.style.display = 'block';
                } else {
                    scrollBtn.style.display = 'none';
                }
            });

            scrollBtn.addEventListener('click', function() {
                window.scrollTo({ top: 0, behavior: 'smooth' });
            });

            // Smooth scroll for navigation links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
                    const target = document.querySelector(this.getAttribute('href'));
                    if (target) {
                        target.scrollIntoView({ behavior: 'smooth', block: 'start' });
                    }
                });
            });

            // Enrollment form handling
            const enrollmentForm = document.querySelector('.enrollment-form');
            if (enrollmentForm) {
                enrollmentForm.addEventListener('submit', function(e) {
                    e.preventDefault();
                    alert('Thank you for your application! We will review it and get back to you within 24 hours.');
                    this.reset();
                });
            }
        });
    </script>
</body>
</html>`;

  fs.writeFileSync(`./build/programs/${program.filename}`, programHtml);
});

// Write main files
fs.writeFileSync("./build/index.html", indexHtml);

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
