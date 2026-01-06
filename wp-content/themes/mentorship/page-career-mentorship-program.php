<?php
/**
 * Template Name: Career Mentorship Program
 * The template for displaying the Career Mentorship Program page
 *
 * @package Mentorship
 */

get_header(); ?>

<div class="program-page career-mentorship-program">
    <!-- Hero Section -->
    <section class="program-hero bg-primary text-white py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="program-icon-large mb-4">
                        <i class="fa fa-user" style="font-size: 4rem; color: rgba(255,255,255,0.9);"></i>
                    </div>
                    <h1 class="program-title display-4 fw-bold mb-4">Career Mentorship Program</h1>
                    <p class="program-subtitle lead mb-4">
                        Accelerate your career growth with personalized guidance from industry experts who have walked the path you want to take.
                    </p>
                    <div class="program-stats d-flex flex-wrap gap-4 mb-4">
                        <div class="stat-item">
                            <div class="stat-number h4 mb-0">12 Weeks</div>
                            <div class="stat-label">Duration</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number h4 mb-0">1-on-1</div>
                            <div class="stat-label">Sessions</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number h4 mb-0">24/7</div>
                            <div class="stat-label">Support</div>
                        </div>
                    </div>
                    <div class="cta-buttons">
                        <a href="/register" class="btn btn-light btn-lg me-3">Get Started</a>
                        <a href="/mentors" class="btn btn-outline-light btn-lg">Find Your Mentor</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hero-img.png"
                         alt="Career Mentorship" class="img-fluid rounded shadow-lg">
                </div>
            </div>
        </div>
    </section>

    <!-- Program Overview -->
    <section class="program-overview py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center mb-5">
                    <h2 class="section-title">What You'll Achieve</h2>
                    <p class="section-subtitle">Our Career Mentorship Program is designed to fast-track your professional growth through structured guidance and actionable insights.</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="feature-card text-center h-100">
                        <div class="feature-icon bg-primary text-white rounded-circle mx-auto mb-3">
                            <i class="fa fa-target"></i>
                        </div>
                        <h4 class="feature-title">Clear Career Path</h4>
                        <p class="feature-description">Define your career goals and create a strategic roadmap to achieve them with expert guidance.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card text-center h-100">
                        <div class="feature-icon bg-primary text-white rounded-circle mx-auto mb-3">
                            <i class="fa fa-users"></i>
                        </div>
                        <h4 class="feature-title">Professional Network</h4>
                        <p class="feature-description">Expand your network with industry connections and build relationships that accelerate your career.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card text-center h-100">
                        <div class="feature-icon bg-primary text-white rounded-circle mx-auto mb-3">
                            <i class="fa fa-chart-line"></i>
                        </div>
                        <h4 class="feature-title">Skill Development</h4>
                        <p class="feature-description">Identify skill gaps and develop competencies that make you stand out in your field.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Program Structure -->
    <section class="program-structure py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center mb-5">
                    <h2 class="section-title">Program Structure</h2>
                    <p class="section-subtitle">A comprehensive 12-week journey designed to transform your career trajectory</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="timeline">
                        <div class="timeline-item">
                            <div class="timeline-marker bg-primary"></div>
                            <div class="timeline-content">
                                <h5 class="timeline-title">Weeks 1-2: Assessment & Goal Setting</h5>
                                <p class="timeline-description">Comprehensive career assessment, goal definition, and personalized roadmap creation.</p>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-marker bg-primary"></div>
                            <div class="timeline-content">
                                <h5 class="timeline-title">Weeks 3-6: Skill Development</h5>
                                <p class="timeline-description">Targeted skill building, resume optimization, and interview preparation.</p>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-marker bg-primary"></div>
                            <div class="timeline-content">
                                <h5 class="timeline-title">Weeks 7-10: Networking & Opportunities</h5>
                                <p class="timeline-description">Strategic networking, opportunity identification, and application strategies.</p>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-marker bg-primary"></div>
                            <div class="timeline-content">
                                <h5 class="timeline-title">Weeks 11-12: Launch & Follow-up</h5>
                                <p class="timeline-description">Career transition execution and ongoing support framework establishment.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="program-benefits">
                        <h4 class="mb-4">What's Included:</h4>
                        <ul class="benefits-list">
                            <li><i class="fa fa-check text-primary me-2"></i>Weekly 1-on-1 mentoring sessions</li>
                            <li><i class="fa fa-check text-primary me-2"></i>Personalized career development plan</li>
                            <li><i class="fa fa-check text-primary me-2"></i>Resume and LinkedIn profile optimization</li>
                            <li><i class="fa fa-check text-primary me-2"></i>Interview preparation and mock sessions</li>
                            <li><i class="fa fa-check text-primary me-2"></i>Access to exclusive job opportunities</li>
                            <li><i class="fa fa-check text-primary me-2"></i>Networking events and workshops</li>
                            <li><i class="fa fa-check text-primary me-2"></i>24/7 email support</li>
                            <li><i class="fa fa-check text-primary me-2"></i>Career assessment tools</li>
                            <li><i class="fa fa-check text-primary me-2"></i>Resource library access</li>
                            <li><i class="fa fa-check text-primary me-2"></i>3-month follow-up support</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Success Stories -->
    <section class="success-stories py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center mb-5">
                    <h2 class="section-title">Success Stories</h2>
                    <p class="section-subtitle">See how our Career Mentorship Program has transformed careers</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-4">
                    <div class="testimonial-card text-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/avatar.png"
                             alt="Sarah Johnson" class="testimonial-avatar mb-3">
                        <h5 class="testimonial-name">Sarah Johnson</h5>
                        <p class="testimonial-role text-muted">Software Engineer → Senior Product Manager</p>
                        <p class="testimonial-text">"The program helped me transition from engineering to product management. My mentor's guidance was invaluable in navigating this career change."</p>
                        <div class="testimonial-rating text-warning">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="testimonial-card text-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/avatar.png"
                             alt="Michael Chen" class="testimonial-avatar mb-3">
                        <h5 class="testimonial-name">Michael Chen</h5>
                        <p class="testimonial-role text-muted">Marketing Coordinator → Marketing Director</p>
                        <p class="testimonial-text">"I got promoted twice during the program! The strategic career planning and skill development were game-changers for me."</p>
                        <div class="testimonial-rating text-warning">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="testimonial-card text-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/avatar.png"
                             alt="Emily Rodriguez" class="testimonial-avatar mb-3">
                        <h5 class="testimonial-name">Emily Rodriguez</h5>
                        <p class="testimonial-role text-muted">Junior Analyst → Data Science Manager</p>
                        <p class="testimonial-text">"The networking opportunities alone were worth the investment. I connected with leaders who opened doors I never knew existed."</p>
                        <div class="testimonial-rating text-warning">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing -->
    <!-- Program Features Section -->
    <section class="program-features py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center mb-5">
                    <h2 class="section-title">Program Features</h2>
                    <p class="section-subtitle">Everything you need to advance your career</p>
                </div>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-6 mx-auto">
                    <div class="feature-card text-center p-4 bg-white rounded shadow-sm">
                        <h4 class="feature-title mb-3 text-primary">Standard Features</h4>
                        <ul class="feature-list text-start">
                            <li><i class="fa fa-check text-primary me-2"></i>12 weeks of mentorship</li>
                            <li><i class="fa fa-check text-primary me-2"></i>Weekly 1-on-1 sessions</li>
                            <li><i class="fa fa-check text-primary me-2"></i>Career development plan</li>
                            <li><i class="fa fa-check text-primary me-2"></i>Email support</li>
                        </ul>
                        <div class="mt-4">
                            <a href="/register" class="btn btn-primary btn-lg">Get Started</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="program-cta py-5 bg-primary text-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h3 class="cta-title mb-2">Ready to Accelerate Your Career?</h3>
                    <p class="cta-subtitle mb-0">Join thousands of professionals who have transformed their careers through our mentorship program.</p>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a href="/register" class="btn btn-light btn-lg">Start Your Journey</a>
                </div>
            </div>
        </div>
    </section>
</div>

<style>
/* Career Mentorship Program Specific Styles */
.career-mentorship-program .program-hero {
    background: linear-gradient(135deg, var(--bs-primary) 0%, #1e4d6b 100%);
}

.career-mentorship-program .stat-item {
    text-align: center;
}

.career-mentorship-program .stat-number {
    font-weight: 700;
    color: rgba(255,255,255,0.95);
}

.career-mentorship-program .stat-label {
    font-size: 0.9rem;
    color: rgba(255,255,255,0.8);
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.career-mentorship-program .feature-icon {
    width: 80px;
    height: 80px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 2rem;
}

.career-mentorship-program .timeline {
    position: relative;
}

.career-mentorship-program .timeline::before {
    content: '';
    position: absolute;
    left: 15px;
    top: 0;
    bottom: 0;
    width: 2px;
    background: var(--bs-primary);
}

.career-mentorship-program .timeline-item {
    position: relative;
    margin-bottom: 2rem;
    padding-left: 3rem;
}

.career-mentorship-program .timeline-marker {
    position: absolute;
    left: 8px;
    top: 5px;
    width: 16px;
    height: 16px;
    border-radius: 50%;
    border: 3px solid white;
    box-shadow: 0 0 0 3px var(--bs-light);
}

.career-mentorship-program .benefits-list {
    list-style: none;
    padding: 0;
}

.career-mentorship-program .benefits-list li {
    margin-bottom: 0.75rem;
    display: flex;
    align-items: center;
}

.career-mentorship-program .testimonial-avatar {
    width: 80px;
    height: 80px;
    border-radius: 50%;
    object-fit: cover;
    border: 3px solid var(--bs-light);
}

.career-mentorship-program .pricing-card {
    background: white;
    border-radius: 10px;
    box-shadow: 0 5px 20px rgba(0,0,0,0.1);
    overflow: hidden;
    transition: transform 0.3s ease;
    position: relative;
}

.career-mentorship-program .pricing-card:hover {
    transform: translateY(-5px);
}



.career-mentorship-program .feature-card {
    transition: transform 0.3s ease;
}

.career-mentorship-program .feature-card:hover {
    transform: translateY(-5px);
}

.career-mentorship-program .feature-list {
    list-style: none;
    padding: 0;
}

.career-mentorship-program .feature-list li {
    padding: 8px 0;
    border-bottom: 1px solid #eee;
}

.career-mentorship-program .feature-list li:last-child {
    border-bottom: none;
}



.career-mentorship-program .price-period {
    font-size: 1rem;
    opacity: 0.8;
}

.career-mentorship-program .pricing-features {
    list-style: none;
    padding: 0;
}

.career-mentorship-program .pricing-features li {
    margin-bottom: 0.75rem;
    text-align: left;
}

@media (max-width: 768px) {

    .career-mentorship-program .timeline::before {
        left: 10px;
    }

    .career-mentorship-program .timeline-item {
        padding-left: 2.5rem;
    }

    .career-mentorship-program .timeline-marker {
        left: 3px;
    }
}
</style>

<?php get_footer(); ?>
