<?php
/**
 * Template Name: Login Page
 * The template for displaying the login page
 *
 * @package Mentorship
 */

get_header(); ?>

<div class="login-page">
    <!-- Page Header -->
    <section class="page-header bg-secondary py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <h1 class="page-title">Welcome Back</h1>
                    <p class="page-description lead">
                        Sign in to your account to continue your mentorship journey.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Login Form -->
    <section class="login-form-section py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 mx-auto">
                    <div class="login-form-container bg-white p-5 rounded shadow">
                        <div class="text-center mb-4">
                            <h2>Sign In</h2>
                            <p class="text-muted">Enter your credentials to access your account</p>
                        </div>

                        <form class="login-form" id="loginForm" method="post" action="#">
                            <div class="mb-3">
                                <label for="email" class="form-label">Email Address <span class="text-danger">*</span></label>
                                <input type="email"
                                       class="form-control"
                                       id="email"
                                       name="email"
                                       required
                                       placeholder="Enter your email address">
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label">Password <span class="text-danger">*</span></label>
                                <div class="password-input-group">
                                    <input type="password"
                                           class="form-control"
                                           id="password"
                                           name="password"
                                           required
                                           placeholder="Enter your password">
                                    <button type="button" class="password-toggle-btn" id="togglePassword">
                                        <i class="fa fa-eye" id="passwordToggleIcon"></i>
                                    </button>
                                </div>
                            </div>

                            <div class="mb-3">
                                <div class="form-check d-flex justify-content-between align-items-center">
                                    <div>
                                        <input class="form-check-input" type="checkbox" id="rememberMe" name="remember_me">
                                        <label class="form-check-label" for="rememberMe">
                                            Remember me
                                        </label>
                                    </div>
                                    <a href="#" class="text-primary text-decoration-none" data-bs-toggle="modal" data-bs-target="#forgotPasswordModal">
                                        Forgot password?
                                    </a>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary btn-lg w-100 mb-3">
                                <i class="fa fa-sign-in-alt me-2"></i>
                                Sign In
                            </button>

                            <div class="text-center">
                                <p class="mb-0">
                                    Don't have an account?
                                    <a href="<?php echo esc_url(home_url('/register')); ?>" class="text-primary fw-semibold">
                                        Sign up here
                                    </a>
                                </p>
                            </div>
                        </form>

                        <!-- Social Login Options -->
                        <div class="social-login mt-4">
                            <div class="text-center mb-3">
                                <span class="text-muted">Or sign in with</span>
                            </div>
                            <div class="row g-2">
                                <div class="col-6">
                                    <button class="btn btn-outline-dark w-100" type="button">
                                        <i class="fa-brands fa-google me-2"></i>
                                        Google
                                    </button>
                                </div>
                                <div class="col-6">
                                    <button class="btn btn-outline-primary w-100" type="button">
                                        <i class="fa-brands fa-linkedin me-2"></i>
                                        LinkedIn
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features-section py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <h3 class="mb-5">Why Choose Our Platform?</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <div class="feature-item text-center">
                        <div class="feature-icon mb-3">
                            <i class="fa fa-video fa-2x text-primary"></i>
                        </div>
                        <h5>Video Sessions</h5>
                        <p class="text-muted">Connect face-to-face with mentors through secure video calls</p>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="feature-item text-center">
                        <div class="feature-icon mb-3">
                            <i class="fa fa-calendar-check fa-2x text-primary"></i>
                        </div>
                        <h5>Easy Scheduling</h5>
                        <p class="text-muted">Book sessions at your convenience with our smart scheduling system</p>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="feature-item text-center">
                        <div class="feature-icon mb-3">
                            <i class="fa fa-star fa-2x text-primary"></i>
                        </div>
                        <h5>Verified Mentors</h5>
                        <p class="text-muted">All mentors are verified professionals with proven expertise</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- Forgot Password Modal -->
<div class="modal fade" id="forgotPasswordModal" tabindex="-1" aria-labelledby="forgotPasswordModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="forgotPasswordModalLabel">Reset Your Password</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p class="text-muted mb-4">
                    Enter your email address and we'll send you a link to reset your password.
                </p>
                <form id="forgotPasswordForm">
                    <div class="mb-3">
                        <label for="resetEmail" class="form-label">Email Address</label>
                        <input type="email" class="form-control" id="resetEmail" name="reset_email" required>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">
                        <i class="fa fa-paper-plane me-2"></i>
                        Send Reset Link
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<style>
.login-page .login-form-container {
    border: 1px solid var(--bs-gray-200);
    background: white;
}

.login-page .form-control {
    border: 2px solid #e9ecef;
    padding: 12px 15px;
    border-radius: 8px;
    transition: border-color 0.3s ease;
}

.login-page .form-control:focus {
    border-color: var(--bs-primary);
    box-shadow: 0 0 0 0.2rem rgba(41, 103, 148, 0.25);
}

.login-page .password-input-group {
    position: relative;
}

.login-page .password-toggle-btn {
    position: absolute;
    right: 12px;
    top: 50%;
    transform: translateY(-50%);
    background: none;
    border: none;
    color: var(--bs-gray-600);
    cursor: pointer;
    padding: 0;
    width: 20px;
    height: 20px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.login-page .password-toggle-btn:hover {
    color: var(--bs-primary);
}

.login-page .form-label {
    font-weight: 600;
    color: var(--bs-dark);
    margin-bottom: 8px;
}

.login-page .feature-item {
    padding: 1.5rem;
    background: white;
    border-radius: 10px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    transition: transform 0.3s ease;
    height: 100%;
}

.login-page .feature-item:hover {
    transform: translateY(-3px);
}

.login-page .social-login .btn {
    padding: 12px;
    font-size: 14px;
    font-weight: 600;
}

.login-page .page-header {
    background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
}

.login-page .modal-content {
    border-radius: 12px;
    border: none;
    box-shadow: 0 10px 40px rgba(0,0,0,0.15);
}

.login-page .modal-header {
    border-bottom: 1px solid #f0f0f0;
    padding: 1.5rem;
}

.login-page .modal-body {
    padding: 1.5rem;
}

@media (max-width: 768px) {
    .login-page .login-form-container {
        padding: 2rem !important;
    }

    .login-page .social-login .btn {
        font-size: 12px;
        padding: 10px;
    }
}
</style>

<script>
jQuery(document).ready(function($) {
    // Password toggle functionality
    $('#togglePassword').on('click', function() {
        var passwordField = $('#password');
        var passwordIcon = $('#passwordToggleIcon');
        var type = passwordField.attr('type');

        if (type === 'password') {
            passwordField.attr('type', 'text');
            passwordIcon.removeClass('fa-eye').addClass('fa-eye-slash');
        } else {
            passwordField.attr('type', 'password');
            passwordIcon.removeClass('fa-eye-slash').addClass('fa-eye');
        }
    });

    // Login form submission
    $('#loginForm').on('submit', function(e) {
        e.preventDefault();

        var form = $(this);
        var submitBtn = form.find('button[type="submit"]');
        var originalText = submitBtn.html();
        var email = $('#email').val().trim();
        var password = $('#password').val().trim();

        // Basic validation
        if (!email || !password) {
            alert('Please fill in all required fields.');
            return;
        }

        // Email validation
        var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailPattern.test(email)) {
            alert('Please enter a valid email address.');
            $('#email').focus();
            return;
        }

        // Show loading state
        submitBtn.html('<i class="fa fa-spinner fa-spin me-2"></i>Signing In...');
        submitBtn.prop('disabled', true);

        // Simulate login process
        setTimeout(function() {
            // Simulate successful login
            submitBtn.html('<i class="fa fa-check me-2"></i>Welcome Back!');
            submitBtn.removeClass('btn-primary').addClass('btn-success');

            // Show success message
            form.prepend('<div class="alert alert-success alert-dismissible fade show" role="alert">' +
                '<strong>Login successful!</strong> Welcome back to Mentorship.' +
                '<button type="button" class="btn-close" data-bs-dismiss="alert"></button>' +
                '</div>');

            // Redirect after success
            setTimeout(function() {
                // In a real application, this would redirect to dashboard or intended page
                window.location.href = '<?php echo esc_url(home_url('/')); ?>';
            }, 2000);

        }, 1500);
    });

    // Forgot password form submission
    $('#forgotPasswordForm').on('submit', function(e) {
        e.preventDefault();

        var form = $(this);
        var submitBtn = form.find('button[type="submit"]');
        var originalText = submitBtn.html();
        var email = $('#resetEmail').val().trim();

        // Email validation
        var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!email || !emailPattern.test(email)) {
            alert('Please enter a valid email address.');
            $('#resetEmail').focus();
            return;
        }

        // Show loading state
        submitBtn.html('<i class="fa fa-spinner fa-spin me-2"></i>Sending...');
        submitBtn.prop('disabled', true);

        // Simulate email sending
        setTimeout(function() {
            submitBtn.html('<i class="fa fa-check me-2"></i>Email Sent!');
            submitBtn.removeClass('btn-primary').addClass('btn-success');

            // Show success message
            form.html('<div class="text-center">' +
                '<i class="fa fa-envelope fa-3x text-success mb-3"></i>' +
                '<h5>Check Your Email</h5>' +
                '<p class="text-muted">We\'ve sent a password reset link to <strong>' + email + '</strong></p>' +
                '<p class="text-muted">If you don\'t see the email, check your spam folder.</p>' +
                '</div>');

            // Auto close modal after 3 seconds
            setTimeout(function() {
                $('#forgotPasswordModal').modal('hide');

                // Reset form when modal is hidden
                $('#forgotPasswordModal').on('hidden.bs.modal', function() {
                    form.html('<div class="mb-3">' +
                        '<label for="resetEmail" class="form-label">Email Address</label>' +
                        '<input type="email" class="form-control" id="resetEmail" name="reset_email" required>' +
                        '</div>' +
                        '<button type="submit" class="btn btn-primary w-100">' +
                        '<i class="fa fa-paper-plane me-2"></i>Send Reset Link' +
                        '</button>');
                });
            }, 3000);

        }, 1500);
    });

    // Real-time form validation
    $('.form-control').on('input', function() {
        if ($(this).val().trim()) {
            $(this).removeClass('is-invalid').addClass('is-valid');
        } else {
            $(this).removeClass('is-valid');
        }
    });

    // Email validation on blur
    $('input[type="email"]').on('blur', function() {
        var email = $(this).val().trim();
        var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

        if (email && !emailPattern.test(email)) {
            $(this).removeClass('is-valid').addClass('is-invalid');
        } else if (email) {
            $(this).removeClass('is-invalid').addClass('is-valid');
        }
    });

    // Social login handlers
    $('.social-login .btn').on('click', function() {
        var provider = $(this).find('i').hasClass('fa-google') ? 'Google' : 'LinkedIn';

        $(this).html('<i class="fa fa-spinner fa-spin me-2"></i>Connecting...');

        setTimeout(function() {
            alert('Social login with ' + provider + ' would be implemented here.');
            location.reload();
        }, 1500);
    });

    // Auto-focus first input
    $('#email').focus();

    // Enter key navigation
    $('#email').on('keypress', function(e) {
        if (e.which === 13) {
            $('#password').focus();
        }
    });

    $('#password').on('keypress', function(e) {
        if (e.which === 13) {
            $('#loginForm').submit();
        }
    });
});
</script>

<?php get_footer(); ?>
