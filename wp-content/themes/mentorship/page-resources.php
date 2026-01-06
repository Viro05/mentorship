<?php
/**
 * Template Name: Resources Page
 * The template for displaying the resources page
 *
 * @package Mentorship
 */

get_header(); ?>

<div class="resources-page">
    <!-- Page Header -->
    <section class="page-header bg-light py-4">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo home_url(); ?>">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Resources</li>
                        </ol>
                    </nav>
                    <h1 class="page-title h2 mb-0">Resources</h1>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <!-- Left Sidebar -->
                <div class="col-lg-3 col-md-4 mb-4 mb-md-0">
                    <div class="resources-sidebar">
                        <div class="sidebar-widget">
                            <h5 class="widget-title">Categories</h5>
                            <ul class="list-unstyled resource-categories">
                                <li><a href="#" class="category-link active" data-category="all">All Resources</a></li>
                                <li><a href="#" class="category-link" data-category="career-guides">Career Guides</a></li>
                                <li><a href="#" class="category-link" data-category="business-tools">Business Tools</a></li>
                                <li><a href="#" class="category-link" data-category="personal-development">Personal Development</a></li>
                                <li><a href="#" class="category-link" data-category="coaching-resources">Coaching Resources</a></li>
                                <li><a href="#" class="category-link" data-category="webinars">Webinars</a></li>
                                <li><a href="#" class="category-link" data-category="ebooks">E-books</a></li>
                                <li><a href="#" class="category-link" data-category="templates">Templates</a></li>
                            </ul>
                        </div>

                        <div class="sidebar-widget">
                            <h5 class="widget-title">Resource Types</h5>
                            <ul class="list-unstyled resource-types">
                                <li><a href="#" class="type-link" data-type="pdf">PDF Documents</a></li>
                                <li><a href="#" class="type-link" data-type="video">Video Content</a></li>
                                <li><a href="#" class="type-link" data-type="article">Articles</a></li>
                                <li><a href="#" class="type-link" data-type="tool">Tools</a></li>
                                <li><a href="#" class="type-link" data-type="worksheet">Worksheets</a></li>
                            </ul>
                        </div>

                        <div class="sidebar-widget">
                            <h5 class="widget-title">Popular Resources</h5>
                            <div class="popular-resource">
                                <h6><a href="#" class="text-decoration-none">Career Planning Guide</a></h6>
                                <small class="text-muted">Downloaded 1,234 times</small>
                            </div>
                            <div class="popular-resource">
                                <h6><a href="#" class="text-decoration-none">Leadership Skills Assessment</a></h6>
                                <small class="text-muted">Downloaded 987 times</small>
                            </div>
                            <div class="popular-resource">
                                <h6><a href="#" class="text-decoration-none">Interview Preparation Checklist</a></h6>
                                <small class="text-muted">Downloaded 856 times</small>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Main Content Area -->
                <div class="col-lg-9 col-md-8">
                    <!-- Search and Filter Bar -->
                    <div class="resources-toolbar mb-4">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <div class="search-box">
                                    <form class="d-flex" role="search">
                                        <input class="form-control me-2" type="search" placeholder="Search resources..." aria-label="Search">
                                        <button class="btn btn-primary" type="submit">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                            <div class="col-md-6 text-md-end">
                                <div class="d-flex align-items-center justify-content-md-end">
                                    <label for="sortBy" class="form-label me-2 mb-0">Sort by:</label>
                                    <select class="form-select form-select-sm" id="sortBy" style="width: auto;">
                                        <option value="newest">Newest First</option>
                                        <option value="oldest">Oldest First</option>
                                        <option value="popular">Most Popular</option>
                                        <option value="name">Name A-Z</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Resources Grid -->
                    <div class="resources-grid">
                        <div class="row" id="resources-container">

                            <!-- Resource Item 1 -->
                            <div class="col-lg-6 col-xl-4 mb-4 resource-item" data-category="career-guides" data-type="pdf">
                                <div class="card resource-card h-100">
                                    <div class="resource-image">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/benefik-mentorship.png" alt="Career Development Guide" class="card-img-top">
                                        <div class="resource-overlay">
                                            <span class="resource-type-badge badge bg-primary">Guide</span>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <h5 class="resource-title">Career Development Guide</h5>
                                        <p class="resource-description">Comprehensive guide to planning and advancing your career with practical tips and strategies.</p>
                                        <div class="resource-meta">
                                            <small class="text-muted">
                                                <i class="fa fa-download me-1"></i> 1,234 downloads
                                            </small>
                                            <small class="text-muted ms-3">
                                                <i class="fa fa-calendar me-1"></i> Jan 2026
                                            </small>
                                        </div>
                                    </div>
                                    <div class="card-footer bg-transparent">
                                        <div class="resource-actions">
                                            <a href="#" class="btn btn-primary btn-sm">
                                                <i class="fa fa-download me-1"></i> Download
                                            </a>
                                            <a href="#" class="btn btn-outline-secondary btn-sm">
                                                <i class="fa fa-eye me-1"></i> Preview
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Resource Item 2 -->
                            <div class="col-lg-6 col-xl-4 mb-4 resource-item" data-category="business-tools" data-type="tool">
                                <div class="card resource-card h-100">
                                    <div class="resource-image">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/benefik-mentorship-2.png" alt="Business Planning Tool" class="card-img-top">
                                        <div class="resource-overlay">
                                            <span class="resource-type-badge badge bg-success">Tool</span>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <h5 class="resource-title">Business Planning Template</h5>
                                        <p class="resource-description">Interactive template to help you create a comprehensive business plan for your startup or expansion.</p>
                                        <div class="resource-meta">
                                            <small class="text-muted">
                                                <i class="fa fa-download me-1"></i> 987 downloads
                                            </small>
                                            <small class="text-muted ms-3">
                                                <i class="fa fa-calendar me-1"></i> Dec 2025
                                            </small>
                                        </div>
                                    </div>
                                    <div class="card-footer bg-transparent">
                                        <div class="resource-actions">
                                            <a href="#" class="btn btn-primary btn-sm">
                                                <i class="fa fa-download me-1"></i> Download
                                            </a>
                                            <a href="#" class="btn btn-outline-secondary btn-sm">
                                                <i class="fa fa-eye me-1"></i> Preview
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Resource Item 3 -->
                            <div class="col-lg-6 col-xl-4 mb-4 resource-item" data-category="personal-development" data-type="video">
                                <div class="card resource-card h-100">
                                    <div class="resource-image">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/community-group.png" alt="Leadership Webinar" class="card-img-top">
                                        <div class="resource-overlay">
                                            <span class="resource-type-badge badge bg-info">Video</span>
                                            <div class="play-button">
                                                <i class="fa fa-play"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <h5 class="resource-title">Leadership Skills Webinar</h5>
                                        <p class="resource-description">Learn essential leadership skills to inspire and motivate your team effectively.</p>
                                        <div class="resource-meta">
                                            <small class="text-muted">
                                                <i class="fa fa-clock me-1"></i> 45 minutes
                                            </small>
                                            <small class="text-muted ms-3">
                                                <i class="fa fa-calendar me-1"></i> Nov 2025
                                            </small>
                                        </div>
                                    </div>
                                    <div class="card-footer bg-transparent">
                                        <div class="resource-actions">
                                            <a href="#" class="btn btn-primary btn-sm">
                                                <i class="fa fa-play me-1"></i> Watch Now
                                            </a>
                                            <a href="#" class="btn btn-outline-secondary btn-sm">
                                                <i class="fa fa-bookmark me-1"></i> Save
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Resource Item 4 -->
                            <div class="col-lg-6 col-xl-4 mb-4 resource-item" data-category="coaching-resources" data-type="worksheet">
                                <div class="card resource-card h-100">
                                    <div class="resource-image">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hero-img.png" alt="Goal Setting Worksheet" class="card-img-top">
                                        <div class="resource-overlay">
                                            <span class="resource-type-badge badge bg-warning">Worksheet</span>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <h5 class="resource-title">Goal Setting Worksheet</h5>
                                        <p class="resource-description">Structured worksheet to help you define, plan, and track your personal and professional goals.</p>
                                        <div class="resource-meta">
                                            <small class="text-muted">
                                                <i class="fa fa-download me-1"></i> 756 downloads
                                            </small>
                                            <small class="text-muted ms-3">
                                                <i class="fa fa-calendar me-1"></i> Oct 2025
                                            </small>
                                        </div>
                                    </div>
                                    <div class="card-footer bg-transparent">
                                        <div class="resource-actions">
                                            <a href="#" class="btn btn-primary btn-sm">
                                                <i class="fa fa-download me-1"></i> Download
                                            </a>
                                            <a href="#" class="btn btn-outline-secondary btn-sm">
                                                <i class="fa fa-eye me-1"></i> Preview
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Resource Item 5 -->
                            <div class="col-lg-6 col-xl-4 mb-4 resource-item" data-category="webinars" data-type="video">
                                <div class="card resource-card h-100">
                                    <div class="resource-image">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/benefik-mentorship.png" alt="Networking Strategies" class="card-img-top">
                                        <div class="resource-overlay">
                                            <span class="resource-type-badge badge bg-info">Webinar</span>
                                            <div class="play-button">
                                                <i class="fa fa-play"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <h5 class="resource-title">Networking Strategies</h5>
                                        <p class="resource-description">Master the art of professional networking to expand your career opportunities.</p>
                                        <div class="resource-meta">
                                            <small class="text-muted">
                                                <i class="fa fa-clock me-1"></i> 60 minutes
                                            </small>
                                            <small class="text-muted ms-3">
                                                <i class="fa fa-calendar me-1"></i> Sep 2025
                                            </small>
                                        </div>
                                    </div>
                                    <div class="card-footer bg-transparent">
                                        <div class="resource-actions">
                                            <a href="#" class="btn btn-primary btn-sm">
                                                <i class="fa fa-play me-1"></i> Watch Now
                                            </a>
                                            <a href="#" class="btn btn-outline-secondary btn-sm">
                                                <i class="fa fa-bookmark me-1"></i> Save
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Resource Item 6 -->
                            <div class="col-lg-6 col-xl-4 mb-4 resource-item" data-category="ebooks" data-type="pdf">
                                <div class="card resource-card h-100">
                                    <div class="resource-image">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/benefik-mentorship-2.png" alt="Productivity Guide" class="card-img-top">
                                        <div class="resource-overlay">
                                            <span class="resource-type-badge badge bg-secondary">E-book</span>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <h5 class="resource-title">Productivity Mastery E-book</h5>
                                        <p class="resource-description">Complete guide to maximizing productivity and managing time effectively in your professional life.</p>
                                        <div class="resource-meta">
                                            <small class="text-muted">
                                                <i class="fa fa-download me-1"></i> 2,100 downloads
                                            </small>
                                            <small class="text-muted ms-3">
                                                <i class="fa fa-calendar me-1"></i> Aug 2025
                                            </small>
                                        </div>
                                    </div>
                                    <div class="card-footer bg-transparent">
                                        <div class="resource-actions">
                                            <a href="#" class="btn btn-primary btn-sm">
                                                <i class="fa fa-download me-1"></i> Download
                                            </a>
                                            <a href="#" class="btn btn-outline-secondary btn-sm">
                                                <i class="fa fa-eye me-1"></i> Preview
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- Load More Button -->
                    <div class="text-center mt-4">
                        <button class="btn btn-outline-primary load-more-resources">
                            <i class="fa fa-plus me-1"></i> Load More Resources
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter Section -->
    <section class="newsletter-section bg-light py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <h3>Stay Updated</h3>
                    <p class="mb-4">Get notified when we add new resources to help you grow your career and skills.</p>
                    <form class="newsletter-form">
                        <div class="input-group">
                            <div class="input-group mb-3">
                                <div class="col-md-8 pe-md-2">
                                    <input type="email" class="form-control" placeholder="Enter your email address" required>
                                </div>
                                <div class="col-md-4">
                                    <button class="btn btn-primary w-100" type="submit">Subscribe</button>
                                </div>
                            </div>
                        </div>
                        <small class="text-muted">
                            We respect your privacy. Unsubscribe at any time.
                        </small>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>

<style>
/* Resources Page Styles */
.resources-page .resources-sidebar {
    background: #f8f9fa;
    padding: 2rem;
    border-radius: 8px;
    position: sticky;
    top: 2rem;
}

.resources-page .sidebar-widget {
    margin-bottom: 2rem;
}

.resources-page .sidebar-widget:last-child {
    margin-bottom: 0;
}

.resources-page .widget-title {
    font-size: 1.1rem;
    font-weight: 600;
    color: #296794;
    margin-bottom: 1rem;
    border-bottom: 2px solid #e9ecef;
    padding-bottom: 0.5rem;
}

.resources-page .resource-categories li,
.resources-page .resource-types li {
    margin-bottom: 0.5rem;
}

.resources-page .category-link,
.resources-page .type-link {
    color: #6c757d;
    text-decoration: none;
    padding: 0.25rem 0;
    display: block;
    transition: color 0.3s ease;
}

.resources-page .category-link:hover,
.resources-page .type-link:hover,
.resources-page .category-link.active {
    color: #296794;
}

.resources-page .popular-resource {
    padding: 1rem 0;
    border-bottom: 1px solid #e9ecef;
}

.resources-page .popular-resource:last-child {
    border-bottom: none;
}

.resources-page .resource-card {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    border: none;
    box-shadow: 0 2px 8px rgba(0,0,0,0.1);
}

.resources-page .resource-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 25px rgba(0,0,0,0.15);
}

.resources-page .resource-image {
    position: relative;
    overflow: hidden;
    height: 200px;
}

.resources-page .resource-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s ease;
}

.resources-page .resource-card:hover .resource-image img {
    transform: scale(1.05);
}

.resources-page .resource-overlay {
    position: absolute;
    top: 1rem;
    right: 1rem;
}

.resources-page .play-button {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background: rgba(255, 255, 255, 0.9);
    width: 60px;
    height: 60px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.5rem;
    color: #296794;
    transition: all 0.3s ease;
}

.resources-page .resource-card:hover .play-button {
    transform: translate(-50%, -50%) scale(1.1);
    background: #296794;
    color: white;
}

.resources-page .resource-title {
    font-size: 1.1rem;
    font-weight: 600;
    color: #212529;
    margin-bottom: 0.75rem;
}

.resources-page .resource-description {
    color: #6c757d;
    font-size: 0.9rem;
    margin-bottom: 1rem;
    line-height: 1.5;
}

.resources-page .resource-meta {
    display: flex;
    align-items: center;
    margin-bottom: 0;
}

.resources-page .resource-actions .btn {
    margin-right: 0.5rem;
    font-size: 0.875rem;
}

.resources-page .resource-actions .btn:last-child {
    margin-right: 0;
}

.resources-page .newsletter-form .form-control {
    border-radius: 6px 0 0 6px;
    border-right: none;
}

.resources-page .newsletter-form .form-control:focus {
    box-shadow: 0 0 0 0.2rem rgba(41, 103, 148, 0.25);
    border-color: #296794;
}

.resources-page .newsletter-form .form-control::placeholder {
    color: #adb5bd;
}

.resources-page .newsletter-form .btn {
    border-radius: 0 6px 6px 0;
}

.resources-page .page-header {
    border-bottom: 1px solid #e9ecef;
}

.resources-page .resource-item {
    transition: opacity 0.3s ease;
}

.resources-page .resource-item.hidden {
    opacity: 0;
}

@media (max-width: 768px) {
    .resources-page .resources-sidebar {
        position: relative;
        top: 0;
        margin-bottom: 2rem;
    }

    .resources-page .sidebar-widget {
        margin-bottom: 1.5rem;
    }

    .resources-page .newsletter-form .input-group {
        flex-direction: column;
    }

    .resources-page .newsletter-form .form-control,
    .resources-page .newsletter-form .btn {
        border-radius: 6px;
        margin-bottom: 0.5rem;
    }
}
</style>

<script>
jQuery(document).ready(function($) {
    // Category filtering
    $('.category-link').on('click', function(e) {
        e.preventDefault();

        // Update active state
        $('.category-link').removeClass('active');
        $(this).addClass('active');

        const category = $(this).data('category');
        filterResources(category, 'category');
    });

    // Type filtering
    $('.type-link').on('click', function(e) {
        e.preventDefault();

        const type = $(this).data('type');
        filterResources(type, 'type');
    });

    // Search functionality
    $('input[type="search"]').on('input', function() {
        const searchTerm = $(this).val().toLowerCase();
        filterResourcesBySearch(searchTerm);
    });

    // Sort functionality
    $('#sortBy').on('change', function() {
        const sortBy = $(this).val();
        sortResources(sortBy);
    });

    function filterResources(value, filterType) {
        $('.resource-item').each(function() {
            const $item = $(this);
            const itemValue = $item.data(filterType);

            if (value === 'all' || itemValue === value) {
                $item.removeClass('hidden').show();
            } else {
                $item.addClass('hidden').hide();
            }
        });
    }

    function filterResourcesBySearch(searchTerm) {
        $('.resource-item').each(function() {
            const $item = $(this);
            const title = $item.find('.resource-title').text().toLowerCase();
            const description = $item.find('.resource-description').text().toLowerCase();

            if (title.includes(searchTerm) || description.includes(searchTerm)) {
                $item.removeClass('hidden').show();
            } else {
                $item.addClass('hidden').hide();
            }
        });
    }

    function sortResources(sortBy) {
        const $container = $('#resources-container');
        const $items = $container.find('.resource-item').get();

        $items.sort(function(a, b) {
            const $a = $(a);
            const $b = $(b);

            switch (sortBy) {
                case 'name':
                    return $a.find('.resource-title').text().localeCompare($b.find('.resource-title').text());
                case 'popular':
                    // This would need actual download numbers
                    return Math.random() - 0.5; // Random for demo
                default:
                    return 0;
            }
        });

        $.each($items, function(index, item) {
            $container.append(item);
        });
    }
});
</script>

<?php get_footer(); ?>
