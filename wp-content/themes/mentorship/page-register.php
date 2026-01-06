<?php
/**
 * Template Name: Register Page
 * The template for displaying the registration/signup page
 *
 * @package Mentorship
 */

get_header(); ?>

<div class="register-page">
    <!-- Page Header -->
    <section class="page-header bg-secondary py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <h1 class="page-title">Join Mentorship.</h1>
                    <p class="page-description lead">
                        Start your journey as a mentor or mentee and unlock your potential.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Registration Options -->
    <section class="registration-options py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="registration-tabs">
                        <ul class="nav nav-pills justify-content-center mb-5" id="registrationTabs" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="mentee-tab" data-bs-toggle="pill" data-bs-target="#mentee" type="button" role="tab" aria-controls="mentee" aria-selected="true">
                                    <i class="fa fa-graduation-cap me-2"></i>
                                    I want to find a mentor
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="mentor-tab" data-bs-toggle="pill" data-bs-target="#mentor" type="button" role="tab" aria-controls="mentor" aria-selected="false">
                                    <i class="fa fa-user-tie me-2"></i>
                                    I want to become a mentor
                                </button>
                            </li>
                        </ul>

                        <div class="tab-content" id="registrationTabsContent">
                            <!-- Mentee Registration -->
                            <div class="tab-pane fade show active" id="mentee" role="tabpanel" aria-labelledby="mentee-tab">
                                <div class="row">
                                    <div class="col-lg-6 mx-auto">
                                        <div class="registration-form-container bg-white p-5 rounded shadow">
                                            <h3 class="text-center mb-4">Sign Up as a Mentee</h3>
                                            <p class="text-center text-muted mb-4">
                                                Connect with experienced mentors and accelerate your growth
                                            </p>

                                            <form class="registration-form" id="menteeRegistrationForm" method="post">
                                                <input type="hidden" name="user_type" value="mentee">

                                                <div class="row">
                                                    <div class="col-md-6 mb-3">
                                                        <label for="mentee_first_name" class="form-label">First Name <span class="text-danger">*</span></label>
                                                        <input type="text" class="form-control" id="mentee_first_name" name="first_name" required>
                                                    </div>
                                                    <div class="col-md-6 mb-3">
                                                        <label for="mentee_last_name" class="form-label">Last Name <span class="text-danger">*</span></label>
                                                        <input type="text" class="form-control" id="mentee_last_name" name="last_name" required>
                                                    </div>
                                                </div>

                                                <div class="mb-3">
                                                    <label for="mentee_email" class="form-label">Email Address <span class="text-danger">*</span></label>
                                                    <input type="email" class="form-control" id="mentee_email" name="email" required>
                                                </div>

                                                <div class="mb-3">
                                                    <label for="mentee_password" class="form-label">Password <span class="text-danger">*</span></label>
                                                    <input type="password" class="form-control" id="mentee_password" name="password" required>
                                                    <div class="form-text">Password must be at least 8 characters long</div>
                                                </div>

                                                <div class="mb-3">
                                                    <label for="mentee_confirm_password" class="form-label">Confirm Password <span class="text-danger">*</span></label>
                                                    <input type="password" class="form-control" id="mentee_confirm_password" name="confirm_password" required>
                                                </div>

                                                <div class="mb-3">
                                                    <label for="mentee_career_stage" class="form-label">Career Stage <span class="text-danger">*</span></label>
                                                    <select class="form-select" id="mentee_career_stage" name="career_stage" required>
                                                        <option value="">Select your career stage</option>
                                                        <option value="student">Student</option>
                                                        <option value="entry_level">Entry Level (0-2 years)</option>
                                                        <option value="mid_level">Mid Level (3-7 years)</option>
                                                        <option value="senior_level">Senior Level (8+ years)</option>
                                                        <option value="career_change">Career Change</option>
                                                    </select>
                                                </div>

                                                <div class="mb-3">
                                                    <label for="mentee_goals" class="form-label">What are your goals? <span class="text-danger">*</span></label>
                                                    <textarea class="form-control" id="mentee_goals" name="goals" rows="3" required placeholder="Tell us about your career goals and what you hope to achieve through mentorship..."></textarea>
                                                </div>

                                                <div class="mb-3">
                                                    <label for="mentee_interests" class="form-label">Areas of Interest</label>
                                                    <div class="interests-grid">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" id="interest_tech" name="interests[]" value="technology">
                                                            <label class="form-check-label" for="interest_tech">Technology</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" id="interest_business" name="interests[]" value="business">
                                                            <label class="form-check-label" for="interest_business">Business</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" id="interest_marketing" name="interests[]" value="marketing">
                                                            <label class="form-check-label" for="interest_marketing">Marketing</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" id="interest_design" name="interests[]" value="design">
                                                            <label class="form-check-label" for="interest_design">Design</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" id="interest_finance" name="interests[]" value="finance">
                                                            <label class="form-check-label" for="interest_finance">Finance</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" id="interest_leadership" name="interests[]" value="leadership">
                                                            <label class="form-check-label" for="interest_leadership">Leadership</label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="mb-4">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="mentee_terms" name="terms" required>
                                                        <label class="form-check-label" for="mentee_terms">
                                                            I agree to the <a href="#" class="text-primary">Terms of Service</a> and <a href="#" class="text-primary">Privacy Policy</a> <span class="text-danger">*</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="mentee_newsletter" name="newsletter">
                                                        <label class="form-check-label" for="mentee_newsletter">
                                                            Subscribe to our newsletter for updates and tips
                                                        </label>
                                                    </div>
                                                </div>

                                                <button type="submit" class="btn btn-primary btn-lg w-100">
                                                    <i class="fa fa-user-plus me-2"></i>
                                                    Create Mentee Account
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Mentor Registration -->
                            <div class="tab-pane fade" id="mentor" role="tabpanel" aria-labelledby="mentor-tab">
                                <div class="row">
                                    <div class="col-lg-8 mx-auto">
                                        <div class="registration-form-container bg-white p-5 rounded shadow">
                                            <h3 class="text-center mb-4">Apply to Become a Mentor</h3>
                                            <p class="text-center text-muted mb-4">
                                                Share your expertise and help others grow in their careers
                                            </p>

                                            <form class="registration-form" id="mentorRegistrationForm" method="post">
                                                <input type="hidden" name="user_type" value="mentor">

                                                <h5 class="mb-3 text-primary">Personal Information</h5>
                                                <div class="row">
                                                    <div class="col-md-6 mb-3">
                                                        <label for="mentor_first_name" class="form-label">First Name <span class="text-danger">*</span></label>
                                                        <input type="text" class="form-control" id="mentor_first_name" name="first_name" required>
                                                    </div>
                                                    <div class="col-md-6 mb-3">
                                                        <label for="mentor_last_name" class="form-label">Last Name <span class="text-danger">*</span></label>
                                                        <input type="text" class="form-control" id="mentor_last_name" name="last_name" required>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6 mb-3">
                                                        <label for="mentor_email" class="form-label">Email Address <span class="text-danger">*</span></label>
                                                        <input type="email" class="form-control" id="mentor_email" name="email" required>
                                                    </div>
                                                    <div class="col-md-6 mb-3">
                                                        <label for="mentor_phone" class="form-label">Phone Number</label>
                                                        <input type="tel" class="form-control" id="mentor_phone" name="phone">
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6 mb-3">
                                                        <label for="mentor_password" class="form-label">Password <span class="text-danger">*</span></label>
                                                        <input type="password" class="form-control" id="mentor_password" name="password" required>
                                                    </div>
                                                    <div class="col-md-6 mb-3">
                                                        <label for="mentor_confirm_password" class="form-label">Confirm Password <span class="text-danger">*</span></label>
                                                        <input type="password" class="form-control" id="mentor_confirm_password" name="confirm_password" required>
                                                    </div>
                                                </div>

                                                <h5 class="mb-3 text-primary mt-4">Professional Background</h5>
                                                <div class="row">
                                                    <div class="col-md-6 mb-3">
                                                        <label for="mentor_title" class="form-label">Current Job Title <span class="text-danger">*</span></label>
                                                        <input type="text" class="form-control" id="mentor_title" name="job_title" required>
                                                    </div>
                                                    <div class="col-md-6 mb-3">
                                                        <label for="mentor_company" class="form-label">Company <span class="text-danger">*</span></label>
                                                        <input type="text" class="form-control" id="mentor_company" name="company" required>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6 mb-3">
                                                        <label for="mentor_industry" class="form-label">Industry <span class="text-danger">*</span></label>
                                                        <select class="form-select" id="mentor_industry" name="industry" required>
                                                            <option value="">Select your industry</option>
                                                            <option value="technology">Technology</option>
                                                            <option value="finance">Finance</option>
                                                            <option value="healthcare">Healthcare</option>
                                                            <option value="education">Education</option>
                                                            <option value="marketing">Marketing</option>
                                                            <option value="consulting">Consulting</option>
                                                            <option value="manufacturing">Manufacturing</option>
                                                            <option value="retail">Retail</option>
                                                            <option value="other">Other</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-6 mb-3">
                                                        <label for="mentor_experience" class="form-label">Years of Experience <span class="text-danger">*</span></label>
                                                        <select class="form-select" id="mentor_experience" name="experience" required>
                                                            <option value="">Select experience level</option>
                                                            <option value="5-10">5-10 years</option>
                                                            <option value="10-15">10-15 years</option>
                                                            <option value="15-20">15-20 years</option>
                                                            <option value="20+">20+ years</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="mb-3">
                                                    <label for="mentor_expertise" class="form-label">Areas of Expertise <span class="text-danger">*</span></label>
                                                    <textarea class="form-control" id="mentor_expertise" name="expertise" rows="3" required placeholder="Describe your key areas of expertise and specializations..."></textarea>
                                                </div>

                                                <div class="mb-3">
                                                    <label for="mentor_bio" class="form-label">Professional Bio <span class="text-danger">*</span></label>
                                                    <textarea class="form-control" id="mentor_bio" name="bio" rows="4" required placeholder="Tell us about your professional journey, achievements, and what you can offer as a mentor..."></textarea>
                                                </div>

                                                <h5 class="mb-3 text-primary mt-4">Mentorship Details</h5>
                                                <div class="mb-3">
                                                    <label for="mentor_availability" class="form-label">Availability <span class="text-danger">*</span></label>
                                                    <select class="form-select" id="mentor_availability" name="availability" required>
                                                        <option value="">Select availability</option>
                                                        <option value="weekdays">Weekdays only</option>
                                                        <option value="weekends">Weekends only</option>
                                                        <option value="flexible">Flexible schedule</option>
                                                    </select>
                                                </div>

                                                <div class="mb-3">
                                                    <label class="form-label">Languages Spoken</label>
                                                    <div class="languages-grid">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" id="lang_english" name="languages[]" value="english" checked>
                                                            <label class="form-check-label" for="lang_english">English</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" id="lang_spanish" name="languages[]" value="spanish">
                                                            <label class="form-check-label" for="lang_spanish">Spanish</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" id="lang_french" name="languages[]" value="french">
                                                            <label class="form-check-label" for="lang_french">French</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" id="lang_german" name="languages[]" value="german">
                                                            <label class="form-check-label" for="lang_german">German</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" id="lang_mandarin" name="languages[]" value="mandarin">
                                                            <label class="form-check-label" for="lang_mandarin">Mandarin</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" id="lang_other" name="languages[]" value="other">
                                                            <label class="form-check-label" for="lang_other">Other</label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="mb-4">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="mentor_terms" name="terms" required>
                                                        <label class="form-check-label" for="mentor_terms">
                                                            I agree to the <a href="#" class="text-primary">Terms of Service</a> and <a href="#" class="text-primary">Privacy Policy</a> <span class="text-danger">*</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="mentor_newsletter" name="newsletter">
                                                        <label class="form-check-label" for="mentor_newsletter">
                                                            Subscribe to our newsletter for updates and tips
                                                        </label>
                                                    </div>
                                                </div>

                                                <button type="submit" class="btn btn-primary btn-lg w-100">
                                                    <i class="fa fa-paper-plane me-2"></i>
                                                    Submit Mentor Application
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Login Link -->
    <section class="login-link py-4 bg-light text-center">
        <div class="container">
            <p class="mb-0">
                Already have an account?
                <a href="<?php echo esc_url(
                    home_url("/login"),
                ); ?>" class="text-primary fw-semibold">
                    <i class="fa fa-sign-in-alt me-1"></i>
                    Sign In
                </a>
            </p>
        </div>
    </section>

    <!-- Benefits Section -->
    <section class="benefits-section py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <h2 class="mb-5">Why Join Our Community?</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <div class="benefit-item text-center">
                        <div class="benefit-icon mb-3">
                            <i class="fa fa-users fa-3x text-primary"></i>
                        </div>
                        <h4>Expert Network</h4>
                        <p class="text-muted">Connect with industry professionals and experienced mentors across various fields.</p>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="benefit-item text-center">
                        <div class="benefit-icon mb-3">
                            <i class="fa fa-rocket fa-3x text-primary"></i>
                        </div>
                        <h4>Accelerate Growth</h4>
                        <p class="text-muted">Fast-track your career development with personalized guidance and mentorship.</p>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="benefit-item text-center">
                        <div class="benefit-icon mb-3">
                            <i class="fa fa-shield-alt fa-3x text-primary"></i>
                        </div>
                        <h4>Safe Platform</h4>
                        <p class="text-muted">Secure and verified mentor profiles with ratings and reviews from the community.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<style>
.register-page .nav-pills .nav-link {
    padding: 15px 30px;
    margin: 0 10px;
    border-radius: 50px;
    font-weight: 600;
    color: #6c757d;
    background: #f8f9fa;
    border: 2px solid #e9ecef;
    transition: all 0.3s ease;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
}

.register-page .nav-pills .nav-link:hover {
    background: #e9ecef;
    color: #495057;
    border-color: #ced4da;
    transform: translateY(-1px);
    box-shadow: 0 4px 8px rgba(0,0,0,0.15);
}

.register-page .nav-pills .nav-link.active {
    background: #296794 !important;
    color: white !important;
    border-color: #296794 !important;
    box-shadow: 0 4px 12px rgba(41, 103, 148, 0.3);
    transform: translateY(-2px);
}

.register-page .nav-pills .nav-link.active:hover {
    background: #215276 !important;
    border-color: #215276 !important;
}

.register-page .registration-form-container {
    border: 1px solid var(--bs-gray-200);
    max-width: none;
}

.register-page .form-control,
.register-page .form-select {
    border: 2px solid #e9ecef;
    padding: 12px 15px;
    border-radius: 8px;
    transition: border-color 0.3s ease;
}

.register-page .form-control:focus,
.register-page .form-select:focus {
    border-color: var(--bs-primary);
    box-shadow: 0 0 0 0.2rem rgba(41, 103, 148, 0.25);
}

.register-page .form-label {
    font-weight: 600;
    color: var(--bs-dark);
    margin-bottom: 8px;
}

.register-page .interests-grid,
.register-page .languages-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
    gap: 10px;
    margin-top: 10px;
}

.register-page .form-check {
    padding: 8px 12px;
    background: var(--bs-light);
    border-radius: 6px;
    border: 1px solid var(--bs-gray-300);
    transition: background-color 0.3s ease;
}

.register-page .form-check:hover {
    background: var(--bs-primary-light);
}

.register-page .form-check-input:checked {
    background-color: var(--bs-primary);
    border-color: var(--bs-primary);
}

.register-page .benefit-item {
    padding: 2rem;
    background: white;
    border-radius: 10px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    transition: transform 0.3s ease;
    height: 100%;
}

.register-page .benefit-item:hover {
    transform: translateY(-5px);
}

.register-page .page-header {
    background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
}

@media (max-width: 768px) {
    .register-page .nav-pills .nav-link {
        padding: 10px 20px;
        margin: 5px;
        font-size: 14px;
    }

    .register-page .interests-grid,
    .register-page .languages-grid {
        grid-template-columns: 1fr 1fr;
    }

    .register-page .registration-form-container {
        padding: 2rem !important;
    }
}
</style>

<script>
jQuery(document).ready(function($) {
    // Password strength indicator
    function checkPasswordStrength(password) {
        var strength = 0;
        if (password.length >= 8) strength++;
        if (password.match(/[a-z]/)) strength++;
        if (password.match(/[A-Z]/)) strength++;
        if (password.match(/[0-9]/)) strength++;
        if (password.match(/[^a-zA-Z0-9]/)) strength++;
        return strength;
    }

    // Password confirmation validation
    $('input[name="confirm_password"]').on('keyup', function() {
        var password = $(this).closest('form').find('input[name="password"]').val();
        var confirmPassword = $(this).val();

        if (confirmPassword && password !== confirmPassword) {
            $(this).addClass('is-invalid');
            if (!$(this).next('.invalid-feedback').length) {
                $(this).after('<div class="invalid-feedback">Passwords do not match</div>');
            }
        } else if (confirmPassword) {
            $(this).removeClass('is-invalid');
            $(this).next('.invalid-feedback').remove();
        }
    });

    // Form submission handlers
    $('#menteeRegistrationForm').on('submit', function(e) {
        e.preventDefault();
        handleFormSubmission($(this), 'mentee');
    });

    $('#mentorRegistrationForm').on('submit', function(e) {
        e.preventDefault();
        handleFormSubmission($(this), 'mentor');
    });

    function handleFormSubmission(form, userType) {
        var submitBtn = form.find('button[type="submit"]');
        var originalText = submitBtn.html();
        var isValid = true;

        // Validate required fields
        form.find('[required]').each(function() {
            if (!$(this).val().trim()) {
                $(this).addClass('is-invalid');
                isValid = false;
            } else {
                $(this).removeClass('is-invalid');
            }
        });

        // Validate password confirmation
        var password = form.find('input[name="password"]').val();
        var confirmPassword = form.find('input[name="confirm_password"]').val();
        if (password !== confirmPassword) {
            form.find('input[name="confirm_password"]').addClass('is-invalid');
            isValid = false;
        }

        // Validate terms acceptance
        if (!form.find('input[name="terms"]').is(':checked')) {
            alert('Please accept the Terms of Service and Privacy Policy to continue.');
            isValid = false;
        }

        if (!isValid) {
            alert('Please fill in all required fields correctly.');
            return;
        }

        // Show loading state
        submitBtn.html('<i class="fa fa-spinner fa-spin me-2"></i>Creating Account...');
        submitBtn.prop('disabled', true);

        // Simulate registration process
        setTimeout(function() {
            submitBtn.html('<i class="fa fa-check me-2"></i>Account Created!');
            submitBtn.removeClass('btn-primary').addClass('btn-success');

            // Show success message
            var successMessage = userType === 'mentor'
                ? 'Your mentor application has been submitted successfully! We\'ll review your application and get back to you within 2-3 business days.'
                : 'Your mentee account has been created successfully! You can now start exploring mentors and booking sessions.';

            form.prepend('<div class="alert alert-success alert-dismissible fade show" role="alert">' +
                '<strong>Welcome to Mentorship!</strong> ' + successMessage +
                '<button type="button" class="btn-close" data-bs-dismiss="alert"></button>' +
                '</div>');

            // Scroll to top of form
            $('html, body').animate({
                scrollTop: form.offset().top - 100
            }, 500);

            // Reset form after delay
            setTimeout(function() {
                if (userType === 'mentee') {
                    window.location.href = '<?php echo esc_url(
                        home_url("/mentors"),
                    ); ?>';
                } else {
                    window.location.href = '<?php echo esc_url(
                        home_url("/login"),
                    ); ?>';
                }
            }, 3000);

        }, 2500);
    }

    // Real-time form validation
    $('.form-control, .form-select').on('input change', function() {
        if ($(this).attr('required') && $(this).val().trim()) {
            $(this).removeClass('is-invalid').addClass('is-valid');
        }
    });

    // Email validation
    $('input[type="email"]').on('blur', function() {
        var email = $(this).val();
        var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

        if (email && !emailPattern.test(email)) {
            $(this).addClass('is-invalid');
            if (!$(this).next('.invalid-feedback').length) {
                $(this).after('<div class="invalid-feedback">Please enter a valid email address</div>');
            }
        } else if (email) {
            $(this).removeClass('is-invalid').addClass('is-valid');
            $(this).next('.invalid-feedback').remove();
        }
    });

    // Character counter for textareas
    $('textarea').each(function() {
        var maxLength = $(this).attr('maxlength');
        if (maxLength) {
            var counter = $('<small class="text-muted character-counter"></small>');
            $(this).after(counter);

            $(this).on('input', function() {
                var remaining = maxLength - $(this).val().length;
                counter.text(remaining + ' characters remaining');
            }).trigger('input');
        }
    });
});
</script>

<?php get_footer(); ?>
