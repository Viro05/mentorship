<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Mentorship
 */

get_header(); ?>

<div>
    <!-- Hero Section -->
    <div class="container py-3 py-sm-5">
        <div class="row flex-lg-row-reverse justify-content-between align-items-center">
            <div class="mx-auto col-sm-8 col-lg-5">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hero-img.png"
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
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/illustrations/iii.png"
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
                    <a href="<?php echo esc_url(
                        home_url("/register"),
                    ); ?>" class="btn btn-outline-primary">Become mentor</a>
                    <a href="<?php echo esc_url(
                        home_url("/mentors"),
                    ); ?>" class="btn btn-primary">Find mentor</a>
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
                                <a class="text-info" href="<?php echo esc_url(
                                    home_url(
                                        "/programs/career-mentorship-program",
                                    ),
                                ); ?>">
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
                                <a class="text-info" href="<?php echo esc_url(
                                    home_url("/programs/life-coach-program"),
                                ); ?>">
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
                                <a class="text-info" href="<?php echo esc_url(
                                    home_url(
                                        "/programs/business-mentorship-program",
                                    ),
                                ); ?>">
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
                                <a class="text-info" href="<?php echo esc_url(
                                    home_url(
                                        "/programs/business-coach-program",
                                    ),
                                ); ?>">
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
    <section class="section-pad">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/benefik-mentorship.png"
                         alt="Benefits of Mentorship"
                         class="img-fluid">
                </div>
                <div class="col-sm-5">
                    <h3>Benefits of Mentorship</h3>
                    <p class="my-4 fs-6">
                        Our team of expert mentors provides guidance, support, advice, and a sounding board for personal and professional growth. The mentorship programs help in skill development, networking, career advancement, and understanding of the industry. A mentor can also provide valuable perspective and serve as a role model for the mentee.
                    </p>
                    <ul class="list-style-none icons-items">
                        <li class="row mb-3">
                            <div class="col-3 list-icon list-icon-md">
                                <i class="fa-solid fa-caret-right"></i>
                            </div>
                            <div class="col-9">
                                <h5 class="fw-semibold">Increase Self-Confidence</h5>
                                <p>
                                    Believe in yourself, set realistic goals, focus on strengths, take risks, learn from mistakes, surround yourself with positivity, take responsibility, and reward progress.
                                </p>
                            </div>
                        </li>
                        <li class="row mb-3">
                            <div class="col-3 list-icon list-icon-md">
                                <i class="fa-solid fa-caret-right"></i>
                            </div>
                            <div class="col-9">
                                <h5 class="fw-semibold">Increase Self-Awareness</h5>
                                <p>
                                    Observe your thoughts and actions, Reflect on your experiences, Analyze your behavior, Learn from your mistakes, Act on newfound understanding.
                                </p>
                            </div>
                        </li>
                        <li class="row mb-3">
                            <div class="col-3 list-icon list-icon-md">
                                <i class="fa-solid fa-caret-right"></i>
                            </div>
                            <div class="col-9">
                                <h5 class="fw-semibold">Learn from Other's Experiences</h5>
                                <p>
                                    Seek out diverse perspectives, listen actively, question respectfully, empathize, apply knowledge gained.
                                </p>
                            </div>
                        </li>
                        <li class="row mb-3">
                            <div class="col-3 list-icon list-icon-md">
                                <i class="fa-solid fa-caret-right"></i>
                            </div>
                            <div class="col-9">
                                <h5 class="fw-semibold">Learn to Self-Respect</h5>
                                <p>
                                    Set boundaries, practice self-care, honor commitments, value yourself, communicate effectively, be authentic, forgive yourself, accept imperfections, take responsibility, be kind to yourself.
                                </p>
                            </div>
                        </li>
                        <li class="row mb-3">
                            <div class="col-3 list-icon list-icon-md">
                                <i class="fa-solid fa-caret-right"></i>
                            </div>
                            <div class="col-9">
                                <h5 class="fw-semibold">Improve Communications Skills</h5>
                                <p>
                                    Listen actively, Speak clearly, Be concise, Show empathy, Be assertive, Avoid assumptions, Stay calm, Be open-minded, Seek feedback, Show gratitude.
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Benefits of Coaching Section -->
    <section class="section-pad">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-6 order-2">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/benefik-mentorship-2.png"
                         alt="Benefits of Coaching"
                         class="img-fluid">
                </div>
                <div class="col-sm-5">
                    <h3>Benefit of Coaching</h3>
                    <p class="my-4 fs-6">
                        Coaching enables personal and professional growth, goal setting and achievement, improved communication and leadership, self-awareness and accountability, positive change, fresh perspective, action planning, and feedback and support. It also provides a confidential, non-judgmental space to discuss challenges and opportunities and access to an experienced expert.
                    </p>
                    <ul class="list-style-none icons-items ms-0">
                        <li class="row mb-3">
                            <div class="col-3 list-icon list-icon-md">
                                <i class="fa-solid fa-caret-left"></i>
                            </div>
                            <div class="col-9">
                                <h5 class="fw-semibold">Self-awareness</h5>
                                <p>
                                    Coaching helps individuals to gain a deeper understanding of themselves, their strengths, weaknesses, values and beliefs, and how these impact their personal and professional life.
                                </p>
                            </div>
                        </li>
                        <li class="row mb-3">
                            <div class="col-3 list-icon list-icon-md">
                                <i class="fa-solid fa-caret-left"></i>
                            </div>
                            <div class="col-9">
                                <h5 class="fw-semibold">Goal setting</h5>
                                <p>
                                    Coaching helps individuals to set clear, achievable and measurable goals, create an action plan and stay accountable for progress.
                                </p>
                            </div>
                        </li>
                        <li class="row mb-3">
                            <div class="col-3 list-icon list-icon-md">
                                <i class="fa-solid fa-caret-left"></i>
                            </div>
                            <div class="col-9">
                                <h5 class="fw-semibold">Skill development</h5>
                                <p>
                                    Coaching helps individuals to develop new skills, strategies and techniques to enhance their personal and professional performance.
                                </p>
                            </div>
                        </li>
                        <li class="row mb-3">
                            <div class="col-3 list-icon list-icon-md">
                                <i class="fa-solid fa-caret-left"></i>
                            </div>
                            <div class="col-9">
                                <h5 class="fw-semibold">Overcoming limiting beliefs</h5>
                                <p>
                                    Coaching helps individuals to identify and challenge limiting beliefs that hold them back and replace them with empowering ones.
                                </p>
                            </div>
                        </li>
                        <li class="row mb-3">
                            <div class="col-3 list-icon list-icon-md">
                                <i class="fa-solid fa-caret-left"></i>
                            </div>
                            <div class="col-9">
                                <h5 class="fw-semibold">Performance enhancement</h5>
                                <p>
                                    Coaching helps individuals to improve their performance, increase their effectiveness, and achieve their desired outcomes.
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Community Forum Section -->
    <section class="section-pad bg-secondary section-community">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-sm-5">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/community-group.png"
                         alt="Community Forum"
                         class="img-fluid">
                </div>
                <div class="col-sm-7 text-primary text-joinus">
                    <h3 class="fw-semibold mb-4">Our Community forum</h3>
                    <p class="mb-4">
                        We aim at giving you the best lift to build your skill to the top standard in the industry
                    </p>
                    <a href="#" class="btn btn-info">Access Community forum</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Counter Section -->
    <section class="section-counter section-pad">
        <div class="py-5 my-5 bg-primary">
            <div class="container">
                <div class="row counter-block text-light justify-content-between">
                    <div class="col-6 col-md counter-item">
                        <div class="counter-number">0</div>
                        <span class="counter-text">Succes storie(s)</span>
                    </div>
                    <div class="col-6 col-md counter-item">
                        <div class="counter-number">3</div>
                        <span class="counter-text">Expert Mentor(s)</span>
                    </div>
                    <div class="col-6 col-md counter-item">
                        <div class="counter-number">0</div>
                        <span class="counter-text">Succes storie(s)</span>
                    </div>
                    <div class="col-6 col-md counter-item">
                        <div class="counter-number">1</div>
                        <span class="counter-text">Totals mentee(s)</span>
                    </div>
                    <div class="col-6 col-md counter-item border-0">
                        <div class="counter-number">0</div>
                        <span class="counter-text">Succes storie(s)</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Mentors Section -->
    <section class="features-mentor my-5 py-5">
        <div class="container">
            <h3 class="mb-3">Feature Mentors</h3>
            <div class="row mb-5">
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card mentor-card p-3 my-3">
                        <div class="mentor-card-img text-center">
                            <img alt="Mentor Avatar" class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/avatar.png">
                        </div>
                        <div class="mentor-card-info mt-3 border-bottom">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <a class="text-info h5" href="#">Mael Joe</a>
                                    <p class="text-small ms-1">Personal Service Worker</p>
                                </div>
                                <div class="col-6">
                                    <span class="text-info star-stat">(4.0)</span>
                                    <span class="text-star">
                                        <i aria-hidden="true" class="fa fa-star"></i>
                                        <i aria-hidden="true" class="fa fa-star"></i>
                                        <i aria-hidden="true" class="fa fa-star"></i>
                                        <i aria-hidden="true" class="fa fa-star"></i>
                                        <i class="fa-regular fa-star text-star-half"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="mentor-card-stat mt-2">
                            <div class="row align-items-center">
                                <div class="col-12">
                                    <span class="text-info">1 mentees</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card mentor-card p-3 my-3">
                        <div class="mentor-card-img text-center">
                            <img alt="Mentor Avatar" class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/avatar.png">
                        </div>
                        <div class="mentor-card-info mt-3 border-bottom">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <a class="text-info h5" href="#">Bharat Sharma</a>
                                    <p class="text-small ms-1"></p>
                                </div>
                                <div class="col-6">
                                    <span class="text-info star-stat">(4.0)</span>
                                    <span class="text-star">
                                        <i aria-hidden="true" class="fa fa-star"></i>
                                        <i aria-hidden="true" class="fa fa-star"></i>
                                        <i aria-hidden="true" class="fa fa-star"></i>
                                        <i aria-hidden="true" class="fa fa-star"></i>
                                        <i class="fa-regular fa-star text-star-half"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="mentor-card-stat mt-2">
                            <div class="row align-items-center">
                                <div class="col-12">
                                    <span class="text-info">0 mentees</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card mentor-card p-3 my-3">
                        <div class="mentor-card-img text-center">
                            <img alt="Mentor Avatar" class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/avatar.png">
                        </div>
                        <div class="mentor-card-info mt-3 border-bottom">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <a class="text-info h5" href="#">ashish shakya</a>
                                    <p class="text-small ms-1"></p>
                                </div>
                                <div class="col-6">
                                    <span class="text-info star-stat">(4.0)</span>
                                    <span class="text-star">
                                        <i aria-hidden="true" class="fa fa-star"></i>
                                        <i aria-hidden="true" class="fa fa-star"></i>
                                        <i aria-hidden="true" class="fa fa-star"></i>
                                        <i aria-hidden="true" class="fa fa-star"></i>
                                        <i class="fa-regular fa-star text-star-half"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="mentor-card-stat mt-2">
                            <div class="row align-items-center">
                                <div class="col-12">
                                    <span class="text-info">0 mentees</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <p class="mt-3 text-center">
                <a href="<?php echo esc_url(
                    home_url("/mentors"),
                ); ?>" class="btn btn-info rounded fw-semibold py-3">
                    View more
                </a>
            </p>
        </div>
    </section>
</div>

<?php get_footer();
