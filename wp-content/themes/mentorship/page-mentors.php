<?php
/**
 * Template Name: Mentors Page
 * The template for displaying the mentors listing page
 *
 * @package Mentorship
 */

get_header(); ?>

<div class="mentors-page">
    <!-- Page Header -->
    <section class="page-header bg-secondary py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <h1 class="page-title">Find Your Perfect Mentor</h1>
                    <p class="page-description lead">
                        Connect with experienced professionals who can guide your career journey and help you achieve your goals.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Search and Filters -->
    <section class="mentors-search py-4 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <form class="search-form" method="get">
                        <div class="input-group input-group-lg">
                            <input type="search"
                                   name="mentor_search"
                                   class="form-control"
                                   placeholder="Search mentors by name, expertise, or industry..."
                                   value="<?php echo esc_attr(
                                       get_query_var("mentor_search"),
                                   ); ?>">
                            <button class="btn btn-primary" type="submit">
                                <i class="fa fa-search"></i> Search
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Filter Options -->
            <div class="row mt-4">
                <div class="col-lg-10 mx-auto">
                    <div class="filter-options d-flex flex-wrap justify-content-center gap-3">
                        <div class="filter-group">
                            <label class="filter-label">Industry:</label>
                            <select name="industry" class="form-select" onchange="this.form.submit()">
                                <option value="">All Industries</option>
                                <option value="technology">Technology</option>
                                <option value="business">Business</option>
                                <option value="marketing">Marketing</option>
                                <option value="design">Design</option>
                                <option value="finance">Finance</option>
                            </select>
                        </div>
                        <div class="filter-group">
                            <label class="filter-label">Experience:</label>
                            <select name="experience" class="form-select" onchange="this.form.submit()">
                                <option value="">Any Experience</option>
                                <option value="5-10">5-10 years</option>
                                <option value="10-15">10-15 years</option>
                                <option value="15+">15+ years</option>
                            </select>
                        </div>
                        <div class="filter-group">
                            <label class="filter-label">Experience Level:</label>
                            <select name="experience_level" class="form-select" onchange="this.form.submit()">
                                <option value="">Any Level</option>
                                <option value="entry">Entry Level (1-3 years)</option>
                                <option value="mid">Mid Level (4-7 years)</option>
                                <option value="senior">Senior Level (8-15 years)</option>
                                <option value="expert">Expert Level (15+ years)</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Mentors Grid -->
    <section class="mentors-grid py-5">
        <div class="container">
            <?php // Create sample mentors data (in a real implementation, this would come from a database)

$mentors = [
                [
                    "name" => "Mael Joe",
                    "title" => "Personal Service Worker",
                    "avatar" =>
                        get_template_directory_uri() .
                        "/assets/images/avatar.png",
                    "rating" => 4.0,
                    "mentees" => 1,
                    "rate" => 8,
                    "skills" => ["Leadership", "Career Development"],
                    "experience" => "8 years",
                ],
                [
                    "name" => "Bharat Sharma",
                    "title" => "Senior Developer",
                    "avatar" =>
                        get_template_directory_uri() .
                        "/assets/images/avatar.png",
                    "rating" => 4.0,
                    "mentees" => 0,
                    "rate" => 8,
                    "skills" => ["Programming", "Web Development"],
                    "experience" => "10 years",
                ],
                [
                    "name" => "Ashish Shakya",
                    "title" => "Business Consultant",
                    "avatar" =>
                        get_template_directory_uri() .
                        "/assets/images/avatar.png",
                    "rating" => 4.0,
                    "mentees" => 0,
                    "rate" => 8,
                    "skills" => ["Business Strategy", "Consulting"],
                    "experience" => "12 years",
                ],
                [
                    "name" => "Sarah Johnson",
                    "title" => "Marketing Director",
                    "avatar" =>
                        get_template_directory_uri() .
                        "/assets/images/avatar.png",
                    "rating" => 4.5,
                    "mentees" => 3,
                    "rate" => 12,
                    "skills" => ["Digital Marketing", "Brand Strategy"],
                    "experience" => "15 years",
                ],
                [
                    "name" => "Michael Chen",
                    "title" => "UX Design Lead",
                    "avatar" =>
                        get_template_directory_uri() .
                        "/assets/images/avatar.png",
                    "rating" => 4.8,
                    "mentees" => 5,
                    "rate" => 15,
                    "skills" => ["UX Design", "Product Design"],
                    "experience" => "12 years",
                ],
                [
                    "name" => "Emily Rodriguez",
                    "title" => "Data Science Manager",
                    "avatar" =>
                        get_template_directory_uri() .
                        "/assets/images/avatar.png",
                    "rating" => 4.6,
                    "mentees" => 2,
                    "rate" => 18,
                    "skills" => ["Data Science", "Machine Learning"],
                    "experience" => "14 years",
                ],
                [
                    "name" => "David Thompson",
                    "title" => "Financial Advisor",
                    "avatar" =>
                        get_template_directory_uri() .
                        "/assets/images/avatar.png",
                    "rating" => 4.3,
                    "mentees" => 4,
                    "rate" => 10,
                    "skills" => ["Financial Planning", "Investment"],
                    "experience" => "20 years",
                ],
                [
                    "name" => "Lisa Wang",
                    "title" => "Product Manager",
                    "avatar" =>
                        get_template_directory_uri() .
                        "/assets/images/avatar.png",
                    "rating" => 4.7,
                    "mentees" => 6,
                    "rate" => 14,
                    "skills" => ["Product Management", "Agile"],
                    "experience" => "11 years",
                ],
                [
                    "name" => "James Miller",
                    "title" => "Sales Director",
                    "avatar" =>
                        get_template_directory_uri() .
                        "/assets/images/avatar.png",
                    "rating" => 4.4,
                    "mentees" => 3,
                    "rate" => 11,
                    "skills" => ["Sales Strategy", "Team Leadership"],
                    "experience" => "16 years",
                ],
            ]; ?>

            <div class="row mb-4">
                <div class="col-12">
                    <div class="d-flex justify-content-between align-items-center">
                        <h2 class="section-title">Available Mentors (<?php echo count(
                            $mentors,
                        ); ?>)</h2>
                        <div class="view-options">
                            <button class="btn btn-outline-secondary btn-sm active" data-view="grid">
                                <i class="fa fa-th"></i> Grid
                            </button>
                            <button class="btn btn-outline-secondary btn-sm" data-view="list">
                                <i class="fa fa-list"></i> List
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mentors-container">
                <div class="row" id="mentors-grid">
                    <?php foreach ($mentors as $mentor): ?>
                        <div class="col-md-6 col-lg-4 mb-4 mentor-item">
                            <div class="card mentor-card p-3 h-100">
                                <div class="mentor-card-img text-center">
                                    <img alt="<?php echo esc_attr(
                                        $mentor["name"],
                                    ); ?>"
                                         class="img-fluid mentor-avatar"
                                         src="<?php echo esc_url(
                                             $mentor["avatar"],
                                         ); ?>">
                                </div>

                                <div class="mentor-card-info mt-3 border-bottom pb-3">
                                    <div class="row align-items-center">
                                        <div class="col-7">
                                            <h5 class="mentor-name mb-1">
                                                <a href="#" class="text-info text-decoration-none">
                                                    <?php echo esc_html(
                                                        $mentor["name"],
                                                    ); ?>
                                                </a>
                                            </h5>
                                            <p class="mentor-title text-small text-muted mb-0">
                                                <?php echo esc_html(
                                                    $mentor["title"],
                                                ); ?>
                                            </p>
                                        </div>
                                        <div class="col-5 text-end">
                                            <span class="text-info star-stat small">
                                                (<?php echo number_format(
                                                    $mentor["rating"],
                                                    1,
                                                ); ?>)
                                            </span>
                                            <div class="text-star">
                                                <?php
                                                $rating = $mentor["rating"];
                                                for ($i = 1; $i <= 5; $i++) {
                                                    if ($i <= $rating) {
                                                        echo '<i class="fa fa-star" aria-hidden="true"></i>';
                                                    } else {
                                                        echo '<i class="fa-regular fa-star text-star-half" aria-hidden="true"></i>';
                                                    }
                                                }
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="mentor-card-details mt-3 mb-3">
                                    <div class="mentor-skills mb-2">
                                        <?php foreach (
                                            $mentor["skills"]
                                            as $skill
                                        ): ?>
                                            <span class="badge bg-light text-dark me-1 mb-1">
                                                <?php echo esc_html($skill); ?>
                                            </span>
                                        <?php endforeach; ?>
                                    </div>
                                    <p class="text-small text-muted mb-2">
                                        <i class="fa fa-briefcase me-1"></i>
                                        <?php echo esc_html(
                                            $mentor["experience"],
                                        ); ?> of experience
                                    </p>
                                </div>

                                <div class="mentor-card-stat mt-2">
                                    <div class="row align-items-center">
                                        <div class="col-12">
                                            <span class="text-info">
                                                <i class="fa fa-users me-1"></i>
                                                <?php echo esc_html(
                                                    $mentor["mentees"],
                                                ); ?> mentees
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="mentor-card-actions mt-3 pt-3 border-top">
                                    <div class="row g-2">
                                        <div class="col-6">
                                            <button class="btn btn-outline-primary btn-sm w-100">
                                                <i class="fa fa-eye"></i> View Profile
                                            </button>
                                        </div>
                                        <div class="col-6">
                                            <button class="btn btn-primary btn-sm w-100">
                                                <i class="fa fa-calendar"></i> Book Session
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <!-- Load More Button -->
            <div class="row">
                <div class="col-12 text-center">
                    <button class="btn btn-info rounded fw-semibold py-3 px-4" id="load-more-mentors">
                        Load More Mentors
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="cta-section py-5 bg-primary text-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <h2 class="mb-3">Ready to Start Your Mentorship Journey?</h2>
                    <p class="lead mb-4">
                        Join thousands of professionals who have accelerated their careers through mentorship.
                    </p>
                    <div class="cta-buttons">
                        <a href="<?php echo esc_url(home_url("/register")); ?>"
                           class="btn btn-light btn-lg me-3 mb-2">
                            <i class="fa fa-user-plus"></i> Become a Mentor
                        </a>
                        <a href="#mentors-grid"
                           class="btn btn-outline-light btn-lg mb-2">
                            <i class="fa fa-search"></i> Find Your Mentor
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<style>
.mentors-page .mentor-avatar {
    width: 80px;
    height: 80px;
    border-radius: 50%;
    object-fit: cover;
}

.mentors-page .mentor-card {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    border: none;
    box-shadow: 0 2px 15px rgba(0,0,0,0.1);
}

.mentors-page .mentor-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 30px rgba(0,0,0,0.15);
}

.mentors-page .filter-options {
    background: white;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
}

.mentors-page .filter-label {
    font-weight: 600;
    margin-bottom: 5px;
    font-size: 14px;
}

.mentors-page .form-select {
    border: 1px solid #e0e0e0;
    padding: 8px 12px;
    font-size: 14px;
}

.mentors-page .view-options .btn {
    border: 1px solid #ddd;
}

.mentors-page .view-options .btn.active {
    background: var(--bs-primary);
    color: white;
    border-color: var(--bs-primary);
}

.mentors-page .page-header {
    background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
}

.mentors-page .badge {
    font-size: 11px;
    padding: 4px 8px;
}

@media (max-width: 768px) {
    .mentors-page .filter-options {
        flex-direction: column;
    }

    .mentors-page .filter-group {
        margin-bottom: 15px;
    }

    .mentors-page .cta-buttons .btn {
        display: block;
        width: 100%;
        margin-bottom: 10px;
    }
}
</style>

<script>
jQuery(document).ready(function($) {
    // View toggle functionality
    $('.view-options .btn').on('click', function() {
        $('.view-options .btn').removeClass('active');
        $(this).addClass('active');

        var view = $(this).data('view');
        if (view === 'list') {
            $('#mentors-grid').removeClass('row').addClass('mentor-list-view');
            $('.mentor-item').removeClass('col-md-6 col-lg-4').addClass('col-12');
        } else {
            $('#mentors-grid').addClass('row').removeClass('mentor-list-view');
            $('.mentor-item').addClass('col-md-6 col-lg-4').removeClass('col-12');
        }
    });

    // Load more functionality
    $('#load-more-mentors').on('click', function() {
        $(this).text('Loading...').prop('disabled', true);

        // Simulate loading more mentors
        setTimeout(function() {
            $('#load-more-mentors').text('Load More Mentors').prop('disabled', false);
            alert('This would load more mentors in a real implementation');
        }, 1500);
    });
});
</script>

<?php get_footer(); ?>
