<?php
/**
 * Template Name: Life Coach Program
 * The template for displaying the Life Coach Program page
 *
 * @package Mentorship
 */

get_header(); ?>

<div class="program-page life-coach-program">
    <!-- Hero Section -->
    <section class="program-hero bg-success text-white py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="program-icon-large mb-4">
                        <i class="fa fa-heart" style="font-size: 4rem; color: rgba(255,255,255,0.9);"></i>
                    </div>
                    <h1 class="program-title display-4 fw-bold mb-4">Life Coach Program</h1>
                    <p class="program-subtitle lead mb-4">
                        Transform your life with personalized guidance to achieve balance, fulfillment, and authentic success in all areas of your life.
                    </p>
                    <div class="program-stats d-flex flex-wrap gap-4 mb-4">
                        <div class="stat-item">
                            <div class="stat-number h4 mb-0">16 Weeks</div>
                            <div class="stat-label">Duration</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number h4 mb-0">1-on-1</div>
                            <div class="stat-label">Coaching</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number h4 mb-0">Holistic</div>
                            <div class="stat-label">Approach</div>
                        </div>
                    </div>
                    <div class="cta-buttons">
                        <a href="/register" class="btn btn-light btn-lg me-3">Transform Your Life</a>
                        <a href="/mentors" class="btn btn-outline-light btn-lg">Meet Your Coach</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hero-img.png"
                         alt="Life Coaching" class="img-fluid rounded shadow-lg">
                </div>
            </div>
        </div>
    </section>

    <!-- Program Overview -->
    <section class="program-overview py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center mb-5">
                    <h2 class="section-title">Discover Your True Potential</h2>
                    <p class="section-subtitle">Our Life Coach Program empowers you to create meaningful change and live a life aligned with your values and dreams.</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="feature-card text-center h-100">
                        <div class="feature-icon bg-success text-white rounded-circle mx-auto mb-3">
                            <i class="fa fa-compass"></i>
                        </div>
                        <h4 class="feature-title">Find Your Purpose</h4>
                        <p class="feature-description">Discover your core values, passions, and life purpose to create a meaningful direction for your future.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card text-center h-100">
                        <div class="feature-icon bg-success text-white rounded-circle mx-auto mb-3">
                            <i class="fa fa-balance-scale"></i>
                        </div>
                        <h4 class="feature-title">Achieve Balance</h4>
                        <p class="feature-description">Create harmony between work, relationships, health, and personal growth for a well-rounded life.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card text-center h-100">
                        <div class="feature-icon bg-success text-white rounded-circle mx-auto mb-3">
                            <i class="fa fa-seedling"></i>
                        </div>
                        <h4 class="feature-title">Personal Growth</h4>
                        <p class="feature-description">Overcome limiting beliefs and develop the mindset and habits needed for continuous personal development.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Areas of Focus -->
    <section class="focus-areas py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center mb-5">
                    <h2 class="section-title">Areas We'll Transform Together</h2>
                    <p class="section-subtitle">Comprehensive life coaching covering all aspects of your personal and professional life</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="focus-item d-flex">
                        <div class="focus-icon">
                            <i class="fa fa-heart text-success"></i>
                        </div>
                        <div class="focus-content">
                            <h5 class="focus-title">Relationships & Communication</h5>
                            <p class="focus-description">Build stronger, more meaningful relationships through improved communication and emotional intelligence.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="focus-item d-flex">
                        <div class="focus-icon">
                            <i class="fa fa-briefcase text-success"></i>
                        </div>
                        <div class="focus-content">
                            <h5 class="focus-title">Career & Life Purpose</h5>
                            <p class="focus-description">Align your career with your values and find work that brings fulfillment and meaning to your life.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="focus-item d-flex">
                        <div class="focus-icon">
                            <i class="fa fa-leaf text-success"></i>
                        </div>
                        <div class="focus-content">
                            <h5 class="focus-title">Health & Wellness</h5>
                            <p class="focus-description">Develop sustainable habits for physical health, mental well-being, and emotional resilience.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="focus-item d-flex">
                        <div class="focus-icon">
                            <i class="fa fa-dollar-sign text-success"></i>
                        </div>
                        <div class="focus-content">
                            <h5 class="focus-title">Financial Wellness</h5>
                            <p class="focus-description">Create a healthy relationship with money and develop strategies for financial freedom and security.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="focus-item d-flex">
                        <div class="focus-icon">
                            <i class="fa fa-clock text-success"></i>
                        </div>
                        <div class="focus-content">
                            <h5 class="focus-title">Time & Productivity</h5>
                            <p class="focus-description">Master time management and productivity to create space for what truly matters in your life.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="focus-item d-flex">
                        <div class="focus-icon">
                            <i class="fa fa-brain text-success"></i>
                        </div>
                        <div class="focus-content">
                            <h5 class="focus-title">Mindset & Confidence</h5>
                            <p class="focus-description">Overcome self-doubt and limiting beliefs to build unshakeable confidence and resilience.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Program Journey -->
    <section class="program-journey py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center mb-5">
                    <h2 class="section-title">Your Transformation Journey</h2>
                    <p class="section-subtitle">A structured 16-week program designed to create lasting change in your life</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="journey-timeline">
                        <div class="journey-phase">
                            <div class="phase-number bg-success text-white">1</div>
                            <div class="phase-content">
                                <h5 class="phase-title">Discovery & Assessment (Weeks 1-2)</h5>
                                <p class="phase-description">Deep dive into your current life situation, values, goals, and challenges to create your personalized transformation roadmap.</p>
                            </div>
                        </div>
                        <div class="journey-phase">
                            <div class="phase-number bg-success text-white">2</div>
                            <div class="phase-content">
                                <h5 class="phase-title">Vision & Goal Setting (Weeks 3-4)</h5>
                                <p class="phase-description">Create a compelling vision for your future and set SMART goals across all life areas with actionable steps.</p>
                            </div>
                        </div>
                        <div class="journey-phase">
                            <div class="phase-number bg-success text-white">3</div>
                            <div class="phase-content">
                                <h5 class="phase-title">Mindset Transformation (Weeks 5-8)</h5>
                                <p class="phase-description">Identify and overcome limiting beliefs, develop empowering thought patterns, and build mental resilience.</p>
                            </div>
                        </div>
                        <div class="journey-phase">
                            <div class="phase-number bg-success text-white">4</div>
                            <div class="phase-content">
                                <h5 class="phase-title">Habit Formation (Weeks 9-12)</h5>
                                <p class="phase-description">Implement daily habits and routines that support your goals and create sustainable positive changes.</p>
                            </div>
                        </div>
                        <div class="journey-phase">
                            <div class="phase-number bg-success text-white">5</div>
                            <div class="phase-content">
                                <h5 class="phase-title">Integration & Mastery (Weeks 13-16)</h5>
                                <p class="phase-description">Integrate all learnings, refine your approach, and create systems for continued growth and success.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="program-tools">
                        <h4 class="mb-4">Coaching Tools & Methods:</h4>
                        <div class="tool-item mb-3">
                            <i class="fa fa-check-circle text-success me-3"></i>
                            <div>
                                <strong>Values Clarification:</strong> Identify your core values and align your life choices with what matters most to you.
                            </div>
                        </div>
                        <div class="tool-item mb-3">
                            <i class="fa fa-check-circle text-success me-3"></i>
                            <div>
                                <strong>Wheel of Life Assessment:</strong> Evaluate satisfaction across all life areas and prioritize areas for improvement.
                            </div>
                        </div>
                        <div class="tool-item mb-3">
                            <i class="fa fa-check-circle text-success me-3"></i>
                            <div>
                                <strong>NLP Techniques:</strong> Powerful neuro-linguistic programming methods for rapid mindset shifts and behavioral change.
                            </div>
                        </div>
                        <div class="tool-item mb-3">
                            <i class="fa fa-check-circle text-success me-3"></i>
                            <div>
                                <strong>Cognitive Behavioral Coaching:</strong> Identify and transform limiting thought patterns that hold you back.
                            </div>
                        </div>
                        <div class="tool-item mb-3">
                            <i class="fa fa-check-circle text-success me-3"></i>
                            <div>
                                <strong>Mindfulness & Meditation:</strong> Develop present-moment awareness and emotional regulation skills.
                            </div>
                        </div>
                        <div class="tool-item mb-3">
                            <i class="fa fa-check-circle text-success me-3"></i>
                            <div>
                                <strong>Action Planning:</strong> Create specific, measurable action plans with accountability systems.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Success Stories -->
    <section class="success-stories py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center mb-5">
                    <h2 class="section-title">Life Transformation Stories</h2>
                    <p class="section-subtitle">Real people, real transformations through our Life Coach Program</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-4">
                    <div class="testimonial-card text-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/avatar.png"
                             alt="Jennifer Adams" class="testimonial-avatar mb-3">
                        <h5 class="testimonial-name">Jennifer Adams</h5>
                        <p class="testimonial-role text-muted">Marketing Executive & Mother</p>
                        <p class="testimonial-text">"I finally found balance between my demanding career and family life. The program taught me to prioritize what truly matters and set healthy boundaries."</p>
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
                             alt="David Thompson" class="testimonial-avatar mb-3">
                        <h5 class="testimonial-name">David Thompson</h5>
                        <p class="testimonial-role text-muted">Entrepreneur</p>
                        <p class="testimonial-text">"After years of burnout, I discovered my true purpose and built a business aligned with my values. I'm happier and more successful than ever."</p>
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
                             alt="Lisa Park" class="testimonial-avatar mb-3">
                        <h5 class="testimonial-name">Lisa Park</h5>
                        <p class="testimonial-role text-muted">Teacher & Wellness Advocate</p>
                        <p class="testimonial-text">"I overcame anxiety and self-doubt to pursue my dreams. The confidence and clarity I gained have transformed every aspect of my life."</p>
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

    <!-- Program Features -->
    <section class="program-features py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center mb-5">
                    <h2 class="section-title">Program Features</h2>
                    <p class="section-subtitle">Comprehensive life coaching for your personal transformation</p>
                </div>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-6 mx-auto">
                    <div class="feature-card text-center p-4 bg-white rounded shadow-sm">
                        <h4 class="feature-title mb-3 text-success">Essential Track</h4>
                        <ul class="feature-list text-start">
                            <li><i class="fa fa-check text-success me-2"></i>16 weeks of life coaching</li>
                            <li><i class="fa fa-check text-success me-2"></i>Bi-weekly 1-on-1 sessions</li>
                            <li><i class="fa fa-check text-success me-2"></i>Personalized action plans</li>
                            <li><i class="fa fa-check text-success me-2"></i>Email support</li>
                            <li><i class="fa fa-check text-success me-2"></i>Goal tracking tools</li>
                        </ul>
                        <div class="mt-4">
                            <a href="/register" class="btn btn-success btn-lg">Start Your Journey</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="program-cta py-5 bg-success text-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h3 class="cta-title mb-2">Ready to Transform Your Life?</h3>
                    <p class="cta-subtitle mb-0">Take the first step towards the life you've always dreamed of living. Your transformation starts today.</p>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a href="/register" class="btn btn-light btn-lg">Begin Your Transformation</a>
                </div>
            </div>
        </div>
    </section>
</div>

<style>
/* Life Coach Program Specific Styles */
.life-coach-program .program-hero {
    background: linear-gradient(135deg, var(--bs-success) 0%, #1e6b3e 100%);
}

.life-coach-program .feature-icon {
    width: 80px;
    height: 80px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 2rem;
}

.life-coach-program .focus-item {
    margin-bottom: 2rem;
}

.life-coach-program .focus-icon {
    width: 60px;
    min-width: 60px;
    height: 60px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: rgba(45, 166, 71, 0.1);
    border-radius: 50%;
    margin-right: 1.5rem;
    font-size: 1.5rem;
}

.life-coach-program .journey-timeline {
    position: relative;
}

.life-coach-program .journey-phase {
    display: flex;
    margin-bottom: 2rem;
    align-items: flex-start;
}

.life-coach-program .phase-number {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: bold;
    font-size: 1.2rem;
    margin-right: 1.5rem;
    flex-shrink: 0;
}

.life-coach-program .tool-item {
    display: flex;
    align-items: flex-start;
}

.life-coach-program .testimonial-avatar {
    width: 80px;
    height: 80px;
    border-radius: 50%;
    object-fit: cover;
    border: 3px solid var(--bs-light);
}

/* Feature Styles */
.life-coach-program .feature-card {
    transition: transform 0.3s ease;
}

.life-coach-program .feature-card:hover {
    transform: translateY(-5px);
}



.life-coach-program .feature-list {
    list-style: none;
    padding: 0;
}

.life-coach-program .feature-list li {
    padding: 8px 0;
    border-bottom: 1px solid #eee;
}

.life-coach-program .feature-list li:last-child {
    border-bottom: none;
}

@media (max-width: 768px) {
    .life-coach-program .focus-item {
        text-align: center;
        flex-direction: column;
        align-items: center;
    }

    .life-coach-program .focus-icon {
        margin-right: 0;
        margin-bottom: 1rem;
    }
}
</style>

<?php get_footer(); ?>
