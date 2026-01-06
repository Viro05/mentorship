<?php
/**
 * Template Name: Business Coach Program
 * The template for displaying the Business Coach Program page
 *
 * @package Mentorship
 */

get_header(); ?>

<div class="program-page business-coach-program">
    <!-- Hero Section -->
    <section class="program-hero text-white py-5" style="background: linear-gradient(135deg, #ff8a00 0%, #cc6d00 100%);">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="program-icon-large mb-4">
                        <i class="fa fa-briefcase" style="font-size: 4rem; color: rgba(255,255,255,0.9);"></i>
                    </div>
                    <h1 class="program-title display-4 fw-bold mb-4">Business Coach Program</h1>
                    <p class="program-subtitle lead mb-4">
                        Unlock your business potential with expert coaching that drives performance, profitability, and sustainable success.
                    </p>
                    <div class="program-stats d-flex flex-wrap gap-4 mb-4">
                        <div class="stat-item">
                            <div class="stat-number h4 mb-0">12 Weeks</div>
                            <div class="stat-label">Intensive</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number h4 mb-0">Results</div>
                            <div class="stat-label">Focused</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number h4 mb-0">Action</div>
                            <div class="stat-label">Oriented</div>
                        </div>
                    </div>
                    <div class="cta-buttons">
                        <a href="/register" class="btn btn-light btn-lg me-3">Boost Performance</a>
                        <a href="/mentors" class="btn btn-outline-light btn-lg">Meet Your Coach</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hero-img.png"
                         alt="Business Coaching" class="img-fluid rounded shadow-lg">
                </div>
            </div>
        </div>
    </section>

    <!-- Program Overview -->
    <section class="program-overview py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center mb-5">
                    <h2 class="section-title">Maximize Your Business Performance</h2>
                    <p class="section-subtitle">Our Business Coach Program delivers rapid results through focused coaching that addresses your most critical business challenges.</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="feature-card text-center h-100">
                        <div class="feature-icon text-white rounded-circle mx-auto mb-3" style="background-color: #ff8a00;">
                            <i class="fa fa-tachometer-alt"></i>
                        </div>
                        <h4 class="feature-title">Performance Optimization</h4>
                        <p class="feature-description">Identify bottlenecks and optimize every aspect of your business for peak performance and efficiency.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card text-center h-100">
                        <div class="feature-icon text-white rounded-circle mx-auto mb-3" style="background-color: #ff8a00;">
                            <i class="fa fa-bullhorn"></i>
                        </div>
                        <h4 class="feature-title">Strategic Execution</h4>
                        <p class="feature-description">Turn strategies into actionable plans with clear milestones and measurable outcomes.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card text-center h-100">
                        <div class="feature-icon text-white rounded-circle mx-auto mb-3" style="background-color: #ff8a00;">
                            <i class="fa fa-trophy"></i>
                        </div>
                        <h4 class="feature-title">Results Achievement</h4>
                        <p class="feature-description">Focus on delivering tangible results that impact your bottom line and business growth.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Coaching Approach -->
    <section class="coaching-approach py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center mb-5">
                    <h2 class="section-title">Our Proven Coaching Methodology</h2>
                    <p class="section-subtitle">A systematic approach that delivers consistent results for businesses of all sizes</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="approach-item d-flex">
                        <div class="approach-icon">
                            <i class="fa fa-search" style="color: #ff8a00;"></i>
                        </div>
                        <div class="approach-content">
                            <h5 class="approach-title">Assessment & Analysis</h5>
                            <p class="approach-description">Deep dive into your business to identify strengths, weaknesses, and untapped opportunities.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="approach-item d-flex">
                        <div class="approach-icon">
                            <i class="fa fa-map" style="color: #ff8a00;"></i>
                        </div>
                        <div class="approach-content">
                            <h5 class="approach-title">Strategic Planning</h5>
                            <p class="approach-description">Develop clear, actionable strategies aligned with your business goals and market conditions.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="approach-item d-flex">
                        <div class="approach-icon">
                            <i class="fa fa-rocket" style="color: #ff8a00;"></i>
                        </div>
                        <div class="approach-content">
                            <h5 class="approach-title">Implementation Support</h5>
                            <p class="approach-description">Hands-on guidance to execute strategies effectively and overcome implementation challenges.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="approach-item d-flex">
                        <div class="approach-icon">
                            <i class="fa fa-chart-line" style="color: #ff8a00;"></i>
                        </div>
                        <div class="approach-content">
                            <h5 class="approach-title">Performance Monitoring</h5>
                            <p class="approach-description">Track progress, measure results, and make data-driven adjustments to ensure success.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="approach-item d-flex">
                        <div class="approach-icon">
                            <i class="fa fa-users-cog" style="color: #ff8a00;"></i>
                        </div>
                        <div class="approach-content">
                            <h5 class="approach-title">Team Development</h5>
                            <p class="approach-description">Build high-performing teams with improved communication, collaboration, and productivity.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="approach-item d-flex">
                        <div class="approach-icon">
                            <i class="fa fa-sync-alt" style="color: #ff8a00;"></i>
                        </div>
                        <div class="approach-content">
                            <h5 class="approach-title">Continuous Improvement</h5>
                            <p class="approach-description">Establish systems for ongoing optimization and sustainable business growth.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Program Structure -->
    <section class="program-structure py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center mb-5">
                    <h2 class="section-title">12-Week Intensive Coaching Program</h2>
                    <p class="section-subtitle">Accelerated business transformation through focused, results-driven coaching</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="coaching-timeline">
                        <div class="coaching-phase">
                            <div class="phase-number text-white" style="background-color: #ff8a00;">1</div>
                            <div class="phase-content">
                                <h5 class="phase-title">Discovery & Goal Setting (Week 1)</h5>
                                <p class="phase-description">Comprehensive business assessment and clear goal definition with success metrics.</p>
                            </div>
                        </div>
                        <div class="coaching-phase">
                            <div class="phase-number text-white" style="background-color: #ff8a00;">2</div>
                            <div class="phase-content">
                                <h5 class="phase-title">Strategy Development (Weeks 2-3)</h5>
                                <p class="phase-description">Create customized strategies and action plans for immediate and long-term results.</p>
                            </div>
                        </div>
                        <div class="coaching-phase">
                            <div class="phase-number text-white" style="background-color: #ff8a00;">3</div>
                            <div class="phase-content">
                                <h5 class="phase-title">Implementation Phase (Weeks 4-9)</h5>
                                <p class="phase-description">Execute strategies with weekly coaching support, troubleshooting, and optimization.</p>
                            </div>
                        </div>
                        <div class="coaching-phase">
                            <div class="phase-number text-white" style="background-color: #ff8a00;">4</div>
                            <div class="phase-content">
                                <h5 class="phase-title">Optimization & Scale (Weeks 10-12)</h5>
                                <p class="phase-description">Refine processes, scale successful initiatives, and establish systems for continued growth.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="coaching-benefits">
                        <h4 class="mb-4">What You'll Achieve:</h4>
                        <div class="benefit-item mb-3">
                            <i class="fa fa-check-circle me-3" style="color: #ff8a00;"></i>
                            <div>
                                <strong>Increased Revenue:</strong> Implement strategies that directly impact your bottom line and drive growth.
                            </div>
                        </div>
                        <div class="benefit-item mb-3">
                            <i class="fa fa-check-circle me-3" style="color: #ff8a00;"></i>
                            <div>
                                <strong>Improved Efficiency:</strong> Streamline operations and eliminate waste to boost productivity.
                            </div>
                        </div>
                        <div class="benefit-item mb-3">
                            <i class="fa fa-check-circle me-3" style="color: #ff8a00;"></i>
                            <div>
                                <strong>Better Leadership:</strong> Develop leadership skills that inspire and motivate your team.
                            </div>
                        </div>
                        <div class="benefit-item mb-3">
                            <i class="fa fa-check-circle me-3" style="color: #ff8a00;"></i>
                            <div>
                                <strong>Market Advantage:</strong> Gain competitive edge through strategic positioning and differentiation.
                            </div>
                        </div>
                        <div class="benefit-item mb-3">
                            <i class="fa fa-check-circle me-3" style="color: #ff8a00;"></i>
                            <div>
                                <strong>Sustainable Systems:</strong> Build processes that continue delivering results long after coaching ends.
                            </div>
                        </div>
                        <div class="benefit-item mb-3">
                            <i class="fa fa-check-circle me-3" style="color: #ff8a00;"></i>
                            <div>
                                <strong>Clear Direction:</strong> Eliminate confusion and focus on activities that drive real results.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Success Results -->
    <section class="success-results py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center mb-5">
                    <h2 class="section-title">Proven Results from Our Coaching</h2>
                    <p class="section-subtitle">Real businesses achieving measurable improvements through our coaching program</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-4">
                    <div class="result-card text-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/avatar.png"
                             alt="Alex Johnson" class="result-avatar mb-3">
                        <h5 class="result-name">Alex Johnson</h5>
                        <p class="result-role text-muted">CEO, Digital Solutions Inc.</p>
                        <div class="result-stats mb-3">
                            <div class="stat-box" style="background-color: rgba(255,138,0,0.1);">
                                <div class="stat-number" style="color: #ff8a00;">45%</div>
                                <div class="stat-label">Revenue Increase</div>
                            </div>
                        </div>
                        <p class="result-text">"Our revenue increased by 45% in just 12 weeks. The coach helped us identify and eliminate inefficiencies while focusing on high-impact activities."</p>
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
                    <div class="result-card text-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/avatar.png"
                             alt="Sandra Martinez" class="result-avatar mb-3">
                        <h5 class="result-name">Sandra Martinez</h5>
                        <p class="result-role text-muted">Owner, Martinez Consulting</p>
                        <div class="result-stats mb-3">
                            <div class="stat-box" style="background-color: rgba(255,138,0,0.1);">
                                <div class="stat-number" style="color: #ff8a00;">60%</div>
                                <div class="stat-label">Time Savings</div>
                            </div>
                        </div>
                        <p class="result-text">"I now work 60% more efficiently and have time for strategic thinking. The productivity improvements have been life-changing for me and my business."</p>
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
                    <div class="result-card text-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/avatar.png"
                             alt="Mike Stevens" class="result-avatar mb-3">
                        <h5 class="result-name">Mike Stevens</h5>
                        <p class="result-role text-muted">Founder, Stevens & Co.</p>
                        <div class="result-stats mb-3">
                            <div class="stat-box" style="background-color: rgba(255,138,0,0.1);">
                                <div class="stat-number" style="color: #ff8a00;">30%</div>
                                <div class="stat-label">Profit Margin Boost</div>
                            </div>
                        </div>
                        <p class="result-text">"We improved our profit margins by 30% through better pricing strategies and cost optimization. The coaching investment paid for itself in the first month."</p>
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
                    <p class="section-subtitle">Comprehensive coaching for peak business performance</p>
                </div>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-6 mx-auto">
                    <div class="feature-card text-center p-4 bg-white rounded shadow-sm">
                        <h4 class="feature-title mb-3" style="color: #ff8a00;">Performance Track</h4>
                        <ul class="feature-list text-start">
                            <li><i class="fa fa-check me-2" style="color: #ff8a00;"></i>12 weeks of business coaching</li>
                            <li><i class="fa fa-check me-2" style="color: #ff8a00;"></i>Weekly 1-on-1 sessions</li>
                            <li><i class="fa fa-check me-2" style="color: #ff8a00;"></i>Performance action plan</li>
                            <li><i class="fa fa-check me-2" style="color: #ff8a00;"></i>Email support</li>
                            <li><i class="fa fa-check me-2" style="color: #ff8a00;"></i>Progress tracking tools</li>
                        </ul>
                        <div class="mt-4">
                            <a href="/register" class="btn btn-lg" style="background-color: #ff8a00; color: white; border-color: #ff8a00;">Boost Performance</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="program-cta py-5 text-white" style="background: linear-gradient(135deg, #ff8a00 0%, #cc6d00 100%);">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h3 class="cta-title mb-2">Ready to Maximize Your Business Performance?</h3>
                    <p class="cta-subtitle mb-0">Join business owners who've achieved breakthrough results through focused, results-driven coaching.</p>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a href="/register" class="btn btn-light btn-lg">Start Performing</a>
                </div>
            </div>
        </div>
    </section>
</div>

<style>
/* Business Coach Program Specific Styles */
.business-coach-program .feature-icon {
    width: 80px;
    height: 80px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 2rem;
}

.business-coach-program .approach-item {
    margin-bottom: 2rem;
}

.business-coach-program .approach-icon {
    width: 60px;
    min-width: 60px;
    height: 60px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: rgba(255, 138, 0, 0.1);
    border-radius: 50%;
    margin-right: 1.5rem;
    font-size: 1.5rem;
}

.business-coach-program .coaching-timeline {
    position: relative;
}

.business-coach-program .coaching-phase {
    display: flex;
    margin-bottom: 2rem;
    align-items: flex-start;
}

.business-coach-program .phase-number {
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

.business-coach-program .benefit-item {
    display: flex;
    align-items: flex-start;
}

.business-coach-program .result-avatar {
    width: 80px;
    height: 80px;
    border-radius: 50%;
    object-fit: cover;
    border: 3px solid var(--bs-light);
}

.business-coach-program .stat-box {
    padding: 1rem;
    border-radius: 10px;
    margin: 0 auto 1rem;
    max-width: 150px;
}

.business-coach-program .stat-number {
    font-size: 2rem;
    font-weight: bold;
    margin-bottom: 0.25rem;
}

.business-coach-program .stat-label {
    font-size: 0.9rem;
    font-weight: 500;
    color: #666;
}

.business-coach-program .pricing-card {
    background: white;
    border-radius: 10px;
    box-shadow: 0 5px 20px rgba(0,0,0,0.1);
    overflow: hidden;
    transition: transform 0.3s ease;
    position: relative;
}

.business-coach-program .pricing-card:hover {
    transform: translateY(-5px);
}



/* Feature Styles */
.business-coach-program .feature-card {
    transition: transform 0.3s ease;
}

.business-coach-program .feature-card:hover {
    transform: translateY(-5px);
}



.business-coach-program .feature-list {
    list-style: none;
    padding: 0;
}

.business-coach-program .feature-list li {
    padding: 8px 0;
    border-bottom: 1px solid #eee;
}

.business-coach-program .feature-list li:last-child {
    border-bottom: none;
}

.business-coach-program .pricing-features {
    list-style: none;
    padding: 0;
}

.business-coach-program .pricing-features li {
    margin-bottom: 0.75rem;
    text-align: left;
}

@media (max-width: 768px) {


    .business-coach-program .approach-item {
        text-align: center;
        flex-direction: column;
        align-items: center;
    }

    .business-coach-program .approach-icon {
        margin-right: 0;
        margin-bottom: 1rem;
    }
}
</style>

<?php get_footer(); ?>
