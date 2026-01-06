<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo("charset"); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php
    wp_title("|", true, "right");
    bloginfo("name");
    ?></title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inknut+Antiqua:wght@300&family=Inter:wght@300;400;500&family=Montserrat:wght@100&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@latest/font/bootstrap-icons.css">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div id="page" class="site">
    <header id="masthead" class="site-header">
        <div class="sticky-top">
            <nav class="navbar main-navbar navbar-expand-lg bg-navbar py-4">
                <div class="container">
                    <a href="<?php echo esc_url(
                        home_url("/"),
                    ); ?>" class="navbar-brand fw-bold">
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
                                <a href="<?php echo esc_url(home_url("/")); ?>"
                                   class="nav-link <?php echo is_home() ||
                                   is_front_page()
                                       ? "active"
                                       : ""; ?>">
                                    Home
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo esc_url(
                                    home_url("/resources"),
                                ); ?>"
                                   class="nav-link <?php echo is_page(
                                       "resources",
                                   )
                                       ? "active"
                                       : ""; ?>">
                                    Resources
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo esc_url(
                                    home_url("/mentors"),
                                ); ?>"
                                   class="nav-link <?php echo is_page("mentors")
                                       ? "active"
                                       : ""; ?>">
                                    Find a mentor
                                </a>
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
                                        <a class="dropdown-item" href="<?php echo esc_url(
                                            home_url(
                                                "/programs/career-mentorship-program",
                                            ),
                                        ); ?>">
                                            Career Mentorship Program
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="<?php echo esc_url(
                                            home_url(
                                                "/programs/life-coach-program",
                                            ),
                                        ); ?>">
                                            Life Coach Program
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="<?php echo esc_url(
                                            home_url(
                                                "/programs/business-mentorship-program",
                                            ),
                                        ); ?>">
                                            Business Mentorship Program
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="<?php echo esc_url(
                                            home_url(
                                                "/programs/business-coach-program",
                                            ),
                                        ); ?>">
                                            Business Coach Program
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo esc_url(
                                    home_url("/contact-us"),
                                ); ?>"
                                   class="nav-link <?php echo is_page(
                                       "contact-us",
                                   )
                                       ? "active"
                                       : ""; ?>">
                                    Contact Us
                                </a>
                            </li>
                        </ul>

                        <div class="d-flex">
                            <div>
                                <a href="<?php echo esc_url(
                                    home_url("/login"),
                                ); ?>"
                                   class="btn me-1 fw-bold border-0">
                                    Login
                                </a>
                                <a href="<?php echo esc_url(
                                    home_url("/register"),
                                ); ?>"
                                   class="btn btn-primary">
                                    Signup
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>

    <main id="primary" class="site-main">
