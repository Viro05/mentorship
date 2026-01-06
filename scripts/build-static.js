const fs = require('fs');
const path = require('path');

// Create build directory
const buildDir = path.join(__dirname, '../build');
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
        fs.readdirSync(src).forEach(childItemName => {
            copyRecursiveSync(path.join(src, childItemName), path.join(dest, childItemName));
        });
    } else {
        fs.copyFileSync(src, dest);
    }
};

// Copy theme assets
console.log('📦 Building static site for Netlify...');

// Copy compiled CSS and JS
copyRecursiveSync('./wp-content/themes/mentorship/assets', './build/assets');
fs.copyFileSync('./wp-content/themes/mentorship/style.css', './build/style.css');

// Copy images
copyRecursiveSync('./wp-content/themes/mentorship/assets/images', './build/assets/images');
copyRecursiveSync('./wp-content/themes/mentorship/assets/illustrations', './build/assets/illustrations');

// Create main index.html
const indexHtml = `<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mentorship - Professional Development Platform</title>
    <meta name="description" content="Connect with industry experts and accelerate your career growth through personalized mentorship programs.">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inknut+Antiqua:wght@300&family=Inter:wght@300;400;500&family=Montserrat:wght@100&display=swap" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Navigation -->
    <header id="masthead" class="site-header">
        <div class="sticky-top">
            <nav class="navbar main-navbar navbar-expand-lg bg-navbar py-4">
                <div class="container">
                    <a href="#" class="navbar-brand fw-bold">Mentorship.</a>

                    <button type="button" data-bs-toggle="collapse" data-bs-target="#main-navbar" class="navbar-toggler">
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
                                <a href="#" data-bs-toggle="dropdown" class="nav-link dropdown-toggle">Programs</a>
                                <ul class="dropdown-menu shadow border-0 rounded">
                                    <li><a class="dropdown-item" href="programs/career-mentorship-program.html">Career Mentorship Program</a></li>
                                    <li><a class="dropdown-item" href="programs/life-coach-program.html">Life Coach Program</a></li>
                                    <li><a class="dropdown-item" href="programs/business-mentorship-program.html">Business Mentorship Program</a></li>
                                    <li><a class="dropdown-item" href="programs/business-coach-program.html">Business Coach Program</a></li>
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
            <div class="row align-items-center py-5">
                <div class="col-sm-4 col-lg-7 order-2 order-sm-1">
                    <h1 class="hero-title display-4 fw-bold lh-1 mb-3">
                        Find your perfect <span class="text-marked idol me-3">
                            IDOL
                            <img src="assets/illustrations/iii.png" alt="" class="iii">
                        </span>
                        Mentorship
                    </h1>
                    <p class="lead mb-4">Connect with experienced mentors who will guide your career, unlock new opportunities, and help you achieve your professional goals.</p>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                        <a href="#register" class="btn btn-outline-primary">Become mentor</a>
                        <a href="#mentors" class="btn btn-primary">Find mentor</a>
                    </div>
                </div>
                <div class="mx-auto col-sm-8 col-lg-5">
                    <img src="assets/images/hero-img.png" width="700" height="500" loading="lazy" class="d-block mx-lg-auto img-fluid" alt="Hero Image">
                </div>
            </div>
        </div>
    </section>

    <!-- Programs Section -->
    <section class="programs-section py-5 bg-light">
        <div class="container">
            <div class="row text-center mb-5">
                <div class="col">
                    <h2 class="section-title display-5 fw-bold">Our Programs</h2>
                    <p class="section-subtitle lead">Choose from our comprehensive mentorship and coaching programs</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="card program-card h-100 text-center p-4">
                        <div class="program-icon mb-3">
                            <i class="fa fa-user fa-3x text-primary"></i>
                        </div>
                        <h5 class="card-title">Career Mentorship</h5>
                        <p class="card-text">Accelerate your career growth with personalized guidance from industry experts.</p>
                        <a href="programs/career-mentorship-program.html" class="btn btn-outline-primary mt-auto">Learn More</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card program-card h-100 text-center p-4">
                        <div class="program-icon mb-3">
                            <i class="fa fa-gift fa-3x text-success"></i>
                        </div>
                        <h5 class="card-title">Business Mentorship</h5>
                        <p class="card-text">Scale your business with strategic guidance from successful entrepreneurs.</p>
                        <a href="programs/business-mentorship-program.html" class="btn btn-outline-success mt-auto">Learn More</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card program-card h-100 text-center p-4">
                        <div class="program-icon mb-3">
                            <i class="fa fa-heart fa-3x text-info"></i>
                        </div>
                        <h5 class="card-title">Life Coaching</h5>
                        <p class="card-text">Transform your personal and professional life with expert life coaching.</p>
                        <a href="programs/life-coach-program.html" class="btn btn-outline-info mt-auto">Learn More</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card program-card h-100 text-center p-4">
                        <div class="program-icon mb-3">
                            <i class="fa fa-rocket fa-3x text-warning"></i>
                        </div>
                        <h5 class="card-title">Business Coaching</h5>
                        <p class="card-text">Optimize your business performance with results-driven coaching strategies.</p>
                        <a href="programs/business-coach-program.html" class="btn btn-outline-warning mt-auto">Learn More</a>
                    </div>
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
                            <img alt="Mentor Avatar" class="img-fluid rounded-circle" width="80" height="80" src="assets/images/avatar.png">
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
                            <img alt="Mentor Avatar" class="img-fluid rounded-circle" width="80" height="80" src="assets/images/avatar.png">
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
                            <img alt="Mentor Avatar" class="img-fluid rounded-circle" width="80" height="80" src="assets/images/avatar.png">
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
        </div>
    </section>

    <!-- Call to Action -->
    <section id="contact" class="cta-section py-5 bg-primary text-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h3 class="display-6 fw-bold mb-3">Ready to Start Your Mentorship Journey?</h3>
                    <p class="lead mb-0">Join thousands of professionals who have transformed their careers through our platform.</p>
                </div>
                <div class="col-lg-4 text-lg-end mt-3 mt-lg-0">
                    <a href="#register" class="btn btn-light btn-lg px-4">Get Started Today</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="site-footer bg-dark text-light py-5">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-3">
                    <h3 class="footer-brand mb-3">Mentorship</h3>
                    <p>
                        E-mail: <a href="mailto:contact@mentorship.com" class="text-light">contact@mentorship.com</a>
                    </p>
                    <p>
                        Phone: <a href="tel:+1234567890" class="text-light">+1 (234) 567-890</a>
                    </p>
                </div>
                <div class="col-sm-6 col-md-3">
                    <h4 class="mb-3">Programs</h4>
                    <ul class="list-unstyled">
                        <li><a href="programs/career-mentorship-program.html" class="text-light">Career Mentorship</a></li>
                        <li><a href="programs/business-mentorship-program.html" class="text-light">Business Mentorship</a></li>
                        <li><a href="programs/life-coach-program.html" class="text-light">Life Coaching</a></li>
                        <li><a href="programs/business-coach-program.html" class="text-light">Business Coaching</a></li>
                    </ul>
                </div>
                <div class="col-sm-6 col-md-3">
                    <h4 class="mb-3">Company</h4>
                    <ul class="list-unstyled">
                        <li><a href="#about" class="text-light">About Us</a></li>
                        <li><a href="#contact" class="text-light">Contact</a></li>
                        <li><a href="#privacy" class="text-light">Privacy Policy</a></li>
                        <li><a href="#terms" class="text-light">Terms of Service</a></li>
                    </ul>
                </div>
                <div class="col-sm-6 col-md-3">
                    <h4 class="mb-3">Follow Us</h4>
                    <div class="d-flex gap-3">
                        <a href="#" class="text-light"><i class="fab fa-facebook-f fa-lg"></i></a>
                        <a href="#" class="text-light"><i class="fab fa-twitter fa-lg"></i></a>
                        <a href="#" class="text-light"><i class="fab fa-linkedin-in fa-lg"></i></a>
                        <a href="#" class="text-light"><i class="fab fa-instagram fa-lg"></i></a>
                    </div>
                </div>
            </div>
            <hr class="my-4">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <p class="mb-0">&copy; 2024 Mentorship. All rights reserved.</p>
                </div>
                <div class="col-md-6 text-md-end">
                    <p class="mb-0">Built with ❤️ for professional growth</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scroll to Top Button -->
    <button class="scroll-to-top btn btn-primary" style="display: none;">
        <i class="fa fa-arrow-up"></i>
    </button>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Custom JS -->
    <script src="assets/js/main.js"></script>

    <script>
        // Simple scroll to top functionality
        window.addEventListener('scroll', function() {
            const scrollBtn = document.querySelector('.scroll-to-top');
            if (window.pageYOffset > 300) {
                scrollBtn.style.display = 'block';
            } else {
                scrollBtn.style.display = 'none';
            }
        });

        document.querySelector('.scroll-to-top').addEventListener('click', function() {
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
    </script>
</body>
</html>`;

fs.writeFileSync('./build/index.html', indexHtml);

// Create a simple 404 page
const notFoundHtml = `<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Not Found - Mentorship</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/style.css">
</head>
<body>
    <div class="container text-center py-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h1 class="display-1 fw-bold text-primary">404</h1>
                <h2 class="mb-4">Page Not Found</h2>
                <p class="lead mb-4">The page you're looking for doesn't exist.</p>
                <a href="/" class="btn btn-primary">Go Home</a>
            </div>
        </div>
    </div>
</body>
</html>`;

fs.writeFileSync('./build/404.html', notFoundHtml);

console.log('✅ Static site built successfully!');
console.log('📁 Files created in ./build directory');
console.log('🚀 Ready for Netlify deployment');
