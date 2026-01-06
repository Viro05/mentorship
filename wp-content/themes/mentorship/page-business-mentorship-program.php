<?php
/**
 * Template Name: Business Mentorship Program
 * The template for displaying the Business Mentorship Program page
 *
 * @package Mentorship
 */

get_header(); ?>

<div class="program-page business-mentorship-program">
    <!-- Hero Section -->
    <section class="program-hero text-white py-5" style="background: linear-gradient(135deg, #ff00f5 0%, #b300b8 100%);">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="program-icon-large mb-4">
                        <i class="fa fa-gift" style="font-size: 4rem; color: rgba(255,255,255,0.9);"></i>
                    </div>
                    <h1 class="program-title display-4 fw-bold mb-4">Business Mentorship Program</h1>
                    <p class="program-subtitle lead mb-4">
                        Scale your business with strategic guidance from successful entrepreneurs who've built and sold companies worth millions.
                    </p>
                    <div class="program-stats d-flex flex-wrap gap-4 mb-4">
                        <div class="stat-item">
                            <div class="stat-number h4 mb-0">20 Weeks</div>
                            <div class="stat-label">Duration</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number h4 mb-0">Strategic</div>
                            <div class="stat-label">Focus</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number h4 mb-0">Growth</div>
                            <div class="stat-label">Driven</div>
                        </div>
                    </div>
                    <div class="cta-buttons">
                        <a href="/register" class="btn btn-light btn-lg me-3">Scale Your Business</a>
                        <a href="/mentors" class="btn btn-outline-light btn-lg">Find Your Mentor</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hero-img.png"
                         alt="Business Mentorship" class="img-fluid rounded shadow-lg">
                </div>
            </div>
        </div>
    </section>

    <!-- Program Overview -->
    <section class="program-overview py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center mb-5">
                    <h2 class="section-title">Accelerate Your Business Growth</h2>
                    <p class="section-subtitle">Our Business Mentorship Program provides the strategic guidance and expertise needed to scale your business successfully.</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="feature-card text-center h-100">
                        <div class="feature-icon text-white rounded-circle mx-auto mb-3" style="background-color: #ff00f5;">
                            <i class="fa fa-rocket"></i>
                        </div>
                        <h4 class="feature-title">Strategic Growth</h4>
                        <p class="feature-description">Develop comprehensive growth strategies that align with your vision and market opportunities.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card text-center h-100">
                        <div class="feature-icon text-white rounded-circle mx-auto mb-3" style="background-color: #ff00f5;">
                            <i class="fa fa-network-wired"></i>
                        </div>
                        <h4 class="feature-title">Network Access</h4>
                        <p class="feature-description">Connect with investors, partners, and industry leaders through exclusive networking opportunities.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card text-center h-100">
                        <div class="feature-icon text-white rounded-circle mx-auto mb-3" style="background-color: #ff00f5;">
                            <i class="fa fa-chart-line"></i>
                        </div>
                        <h4 class="feature-title">Proven Systems</h4>
                        <p class="feature-description">Implement battle-tested systems and processes that successful businesses use to scale efficiently.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Business Areas -->
    <section class="business-areas py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center mb-5">
                    <h2 class="section-title">Key Business Areas We'll Optimize</h2>
                    <p class="section-subtitle">Comprehensive business mentorship covering all critical aspects of scaling your company</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="business-item d-flex">
                        <div class="business-icon">
                            <i class="fa fa-bullseye" style="color: #ff00f5;"></i>
                        </div>
                        <div class="business-content">
                            <h5 class="business-title">Strategy & Vision</h5>
                            <p class="business-description">Refine your business strategy, clarify your vision, and create a roadmap for sustainable growth.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="business-item d-flex">
                        <div class="business-icon">
                            <i class="fa fa-dollar-sign" style="color: #ff00f5;"></i>
                        </div>
                        <div class="business-content">
                            <h5 class="business-title">Revenue & Pricing</h5>
                            <p class="business-description">Optimize pricing strategies, diversify revenue streams, and maximize profitability.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="business-item d-flex">
                        <div class="business-icon">
                            <i class="fa fa-users" style="color: #ff00f5;"></i>
                        </div>
                        <div class="business-content">
                            <h5 class="business-title">Team & Leadership</h5>
                            <p class="business-description">Build high-performing teams, develop leadership skills, and create a winning company culture.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="business-item d-flex">
                        <div class="business-icon">
                            <i class="fa fa-chart-bar" style="color: #ff00f5;"></i>
                        </div>
                        <div class="business-content">
                            <h5 class="business-title">Marketing & Sales</h5>
                            <p class="business-description">Develop effective marketing strategies and sales systems that drive consistent growth.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="business-item d-flex">
                        <div class="business-icon">
                            <i class="fa fa-cogs" style="color: #ff00f5;"></i>
                        </div>
                        <div class="business-content">
                            <h5 class="business-title">Operations & Systems</h5>
                            <p class="business-description">Streamline operations, implement scalable systems, and improve operational efficiency.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="business-item d-flex">
                        <div class="business-icon">
                            <i class="fa fa-handshake" style="color: #ff00f5;"></i>
                        </div>
                        <div class="business-content">
                            <h5 class="business-title">Funding & Investment</h5>
                            <p class="business-description">Navigate funding options, prepare for investors, and structure deals that fuel growth.</p>
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
                    <h2 class="section-title">20-Week Business Transformation</h2>
                    <p class="section-subtitle">A comprehensive program designed to scale your business systematically</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="program-timeline">
                        <div class="timeline-phase">
                            <div class="phase-number text-white" style="background-color: #ff00f5;">1</div>
                            <div class="phase-content">
                                <h5 class="phase-title">Business Assessment (Weeks 1-3)</h5>
                                <p class="phase-description">Comprehensive analysis of your current business model, market position, and growth potential.</p>
                            </div>
                        </div>
                        <div class="timeline-phase">
                            <div class="phase-number text-white" style="background-color: #ff00f5;">2</div>
                            <div class="phase-content">
                                <h5 class="phase-title">Strategic Planning (Weeks 4-7)</h5>
                                <p class="phase-description">Develop strategic roadmap, define key objectives, and create actionable growth plans.</p>
                            </div>
                        </div>
                        <div class="timeline-phase">
                            <div class="phase-number text-white" style="background-color: #ff00f5;">3</div>
                            <div class="phase-content">
                                <h5 class="phase-title">System Implementation (Weeks 8-13)</h5>
                                <p class="phase-description">Build and implement scalable systems for operations, sales, marketing, and finance.</p>
                            </div>
                        </div>
                        <div class="timeline-phase">
                            <div class="phase-number text-white" style="background-color: #ff00f5;">4</div>
                            <div class="phase-content">
                                <h5 class="phase-title">Growth Execution (Weeks 14-17)</h5>
                                <p class="phase-description">Execute growth strategies, optimize performance, and scale operations effectively.</p>
                            </div>
                        </div>
                        <div class="timeline-phase">
                            <div class="phase-number text-white" style="background-color: #ff00f5;">5</div>
                            <div class="phase-content">
                                <h5 class="phase-title">Optimization & Scale (Weeks 18-20)</h5>
                                <p class="phase-description">Fine-tune operations, prepare for next growth phase, and establish long-term success framework.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="program-deliverables">
                        <h4 class="mb-4">Program Deliverables:</h4>
                        <div class="deliverable-item mb-3">
                            <i class="fa fa-check-circle me-3" style="color: #ff00f5;"></i>
                            <div>
                                <strong>Business Growth Strategy:</strong> Comprehensive plan tailored to your industry and goals.
                            </div>
                        </div>
                        <div class="deliverable-item mb-3">
                            <i class="fa fa-check-circle me-3" style="color: #ff00f5;"></i>
                            <div>
                                <strong>Financial Modeling:</strong> Revenue projections, budgeting, and financial planning tools.
                            </div>
                        </div>
                        <div class="deliverable-item mb-3">
                            <i class="fa fa-check-circle me-3" style="color: #ff00f5;"></i>
                            <div>
                                <strong>Marketing Playbook:</strong> Proven marketing strategies and campaign templates.
                            </div>
                        </div>
                        <div class="deliverable-item mb-3">
                            <i class="fa fa-check-circle me-3" style="color: #ff00f5;"></i>
                            <div>
                                <strong>Operations Manual:</strong> Standard operating procedures and process documentation.
                            </div>
                        </div>
                        <div class="deliverable-item mb-3">
                            <i class="fa fa-check-circle me-3" style="color: #ff00f5;"></i>
                            <div>
                                <strong>Team Structure:</strong> Organizational chart and hiring roadmap for growth.
                            </div>
                        </div>
                        <div class="deliverable-item mb-3">
                            <i class="fa fa-check-circle me-3" style="color: #ff00f5;"></i>
                            <div>
                                <strong>Investor Deck:</strong> Professional presentation for funding opportunities.
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
                    <h2 class="section-title">Business Success Stories</h2>
                    <p class="section-subtitle">Real businesses that achieved remarkable growth through our mentorship program</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-4">
                    <div class="testimonial-card text-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/avatar.png"
                             alt="Robert Kim" class="testimonial-avatar mb-3">
                        <h5 class="testimonial-name">Robert Kim</h5>
                        <p class="testimonial-role text-muted">CEO, TechStart Solutions</p>
                        <p class="testimonial-text">"We grew from $500K to $5M in revenue in 18 months. The strategic guidance and network access were invaluable for our success."</p>
                        <div class="growth-stats mt-3">
                            <span class="badge" style="background-color: #ff00f5; color: white;">1000% Revenue Growth</span>
                        </div>
                        <div class="testimonial-rating text-warning mt-2">
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
                             alt="Maria Gonzalez" class="testimonial-avatar mb-3">
                        <h5 class="testimonial-name">Maria Gonzalez</h5>
                        <p class="testimonial-role text-muted">Founder, EcoFood Co.</p>
                        <p class="testimonial-text">"The program helped us secure $2M in Series A funding and scale to 15 cities. The mentor's network opened doors we couldn't access alone."</p>
                        <div class="growth-stats mt-3">
                            <span class="badge" style="background-color: #ff00f5; color: white;">$2M Funding Raised</span>
                        </div>
                        <div class="testimonial-rating text-warning mt-2">
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
                             alt="James Wright" class="testimonial-avatar mb-3">
                        <h5 class="testimonial-name">James Wright</h5>
                        <p class="testimonial-role text-muted">Owner, Wright Manufacturing</p>
                        <p class="testimonial-text">"We improved our profit margins by 40% and successfully expanded internationally. The operational improvements transformed our business."</p>
                        <div class="growth-stats mt-3">
                            <span class="badge" style="background-color: #ff00f5; color: white;">40% Margin Increase</span>
                        </div>
                        <div class="testimonial-rating text-warning mt-2">
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
                    <p class="section-subtitle">Comprehensive support for your business growth journey</p>
                </div>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-6 mx-auto">
                    <div class="feature-card text-center p-4 bg-white rounded shadow-sm">
                        <h4 class="feature-title mb-3" style="color: #ff00f5;">Growth Track</h4>
                        <ul class="feature-list text-start">
                            <li><i class="fa fa-check me-2" style="color: #ff00f5;"></i>20 weeks of mentorship</li>
                            <li><i class="fa fa-check me-2" style="color: #ff00f5;"></i>Bi-weekly strategy sessions</li>
                            <li><i class="fa fa-check me-2" style="color: #ff00f5;"></i>Business growth plan</li>
                            <li><i class="fa fa-check me-2" style="color: #ff00f5;"></i>Email & phone support</li>
                            <li><i class="fa fa-check me-2" style="color: #ff00f5;"></i>Resource library access</li>
                        </ul>
                        <div class="mt-4">
                            <a href="/register" class="btn btn-lg" style="background-color: #ff00f5; color: white; border-color: #ff00f5;">Start Growing</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="program-cta py-5 text-white" style="background: linear-gradient(135deg, #ff00f5 0%, #b300b8 100%);">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h3 class="cta-title mb-2">Ready to Scale Your Business?</h3>
                    <p class="cta-subtitle mb-0">Join successful entrepreneurs who've transformed their businesses through strategic mentorship.</p>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a href="/register" class="btn btn-light btn-lg">Start Scaling Today</a>
                </div>
            </div>
        </div>
    </section>
</div>

<style>
/* Business Mentorship Program Specific Styles */
.business-mentorship-program .feature-icon {
    width: 80px;
    height: 80px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 2rem;
}

.business-mentorship-program .business-item {
    margin-bottom: 2rem;
}

.business-mentorship-program .business-icon {
    width: 60px;
    min-width: 60px;
    height: 60px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: rgba(255, 0, 245, 0.1);
    border-radius: 50%;
    margin-right: 1.5rem;
    font-size: 1.5rem;
}

.business-mentorship-program .program-timeline {
    position: relative;
}

.business-mentorship-program .timeline-phase {
    display: flex;
    margin-bottom: 2rem;
    align-items: flex-start;
}

.business-mentorship-program .phase-number {
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

.business-mentorship-program .deliverable-item {
    display: flex;
    align-items: flex-start;
}

.business-mentorship-program .testimonial-avatar {
    width: 80px;
    height: 80px;
    border-radius: 50%;
    object-fit: cover;
    border: 3px solid var(--bs-light);
}

/* Feature Styles */
.business-mentorship-program .feature-card {
    transition: transform 0.3s ease;
}

.business-mentorship-program .feature-card:hover {
    transform: translateY(-5px);
}



.business-mentorship-program .feature-list {
    list-style: none;
    padding: 0;
}

.business-mentorship-program .feature-list li {
    padding: 8px 0;
    border-bottom: 1px solid #eee;
}

.business-mentorship-program .feature-list li:last-child {
    border-bottom: none;
}

.business-mentorship-program .growth-stats .badge {
    font-size: 0.8rem;
    padding: 0.5rem 1rem;
}

@media (max-width: 768px) {
    .business-mentorship-program .business-item {
        text-align: center;
        flex-direction: column;
        align-items: center;
    }

    .business-mentorship-program .business-item .business-icon {
        margin-bottom: 1rem;
    }
}
</style>

<?php get_footer(); ?>
