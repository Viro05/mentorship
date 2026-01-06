<?php
/**
 * Template Name: Contact Us Page
 * The template for displaying the contact us page
 *
 * @package Mentorship
 */

get_header(); ?>

<div class="contact-page">
    <!-- Page Header -->
    <section class="page-header bg-secondary py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <h1 class="page-title">Contact Us</h1>
                    <p class="page-description lead">
                        We'd love to hear from you. Get in touch with our team for any questions or support.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Information -->
    <section class="contact-info py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <div class="contact-item text-center">
                        <div class="contact-icon mb-3">
                            <i class="fa fa-envelope fa-2x text-primary"></i>
                        </div>
                        <h4>Email Us</h4>
                        <p class="text-muted">Send us an email and we'll get back to you within 24 hours.</p>
                        <a href="mailto:email@mail.com" class="btn btn-outline-primary">
                            email@mail.com
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 mb-4">
                    <div class="contact-item text-center">
                        <div class="contact-icon mb-3">
                            <i class="fa fa-phone fa-2x text-primary"></i>
                        </div>
                        <h4>Call Us</h4>
                        <p class="text-muted">Speak with our support team during business hours.</p>
                        <a href="tel:+2626200000" class="btn btn-outline-primary">
                            +2626200000.0.0.
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 mb-4">
                    <div class="contact-item text-center">
                        <div class="contact-icon mb-3">
                            <i class="fa fa-map-marker-alt fa-2x text-primary"></i>
                        </div>
                        <h4>Visit Us</h4>
                        <p class="text-muted">Come visit our office for in-person consultations.</p>
                        <address class="mb-0">
                            123 Business Street<br>
                            Suite 100<br>
                            City, State 12345
                        </address>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Form -->
    <section class="contact-form-section py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="contact-form-container bg-white p-5 rounded shadow">
                        <h2 class="text-center mb-4">Send Us a Message</h2>

                        <form class="contact-form" method="post" action="#" id="contactForm">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="firstName" class="form-label">First Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="firstName" name="firstName" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="lastName" class="form-label">Last Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="lastName" name="lastName" required>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="email" class="form-label">Email Address <span class="text-danger">*</span></label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="phone" class="form-label">Phone Number</label>
                                    <input type="tel" class="form-control" id="phone" name="phone">
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="subject" class="form-label">Subject <span class="text-danger">*</span></label>
                                <select class="form-select" id="subject" name="subject" required>
                                    <option value="">Select a subject</option>
                                    <option value="general">General Inquiry</option>
                                    <option value="mentorship">Mentorship Questions</option>
                                    <option value="technical">Technical Support</option>
                                    <option value="account">Account Support</option>
                                    <option value="partnership">Partnership Opportunities</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="message" class="form-label">Message <span class="text-danger">*</span></label>
                                <textarea class="form-control" id="message" name="message" rows="6" required placeholder="Please describe your inquiry in detail..."></textarea>
                            </div>

                            <div class="mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="newsletter" name="newsletter">
                                    <label class="form-check-label" for="newsletter">
                                        Subscribe to our newsletter for updates and tips
                                    </label>
                                </div>
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-primary btn-lg px-5">
                                    <i class="fa fa-paper-plane me-2"></i>
                                    Send Message
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq-section py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h2 class="text-center mb-5">Frequently Asked Questions</h2>

                    <div class="accordion" id="faqAccordion">
                        <div class="accordion-item mb-3">
                            <h2 class="accordion-header" id="faq1">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                    How do I find the right mentor for my needs?
                                </button>
                            </h2>
                            <div id="collapse1" class="accordion-collapse collapse show" aria-labelledby="faq1" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    You can search for mentors based on their expertise, industry, experience level, and availability. Use our advanced filters to narrow down your search and find mentors who align with your goals and learning objectives.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item mb-3">
                            <h2 class="accordion-header" id="faq2">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                    How do I connect with a mentor?
                                </button>
                            </h2>
                            <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="faq2" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Once you register as a mentee, you can browse our verified mentor profiles, view their expertise areas, and send connection requests. Our platform facilitates secure communication and scheduling between mentors and mentees.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item mb-3">
                            <h2 class="accordion-header" id="faq3">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                    How do mentorship sessions work?
                                </button>
                            </h2>
                            <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="faq3" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Mentorship sessions are conducted online via video calls. You can schedule sessions at your convenience, and each session typically lasts 60 minutes. Sessions can be one-time consultations or part of an ongoing mentorship program.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item mb-3">
                            <h2 class="accordion-header" id="faq4">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                    Can I become a mentor on the platform?
                                </button>
                            </h2>
                            <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="faq4" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Yes! If you have professional experience and want to share your knowledge, you can apply to become a mentor. Our team reviews all applications to ensure quality and expertise standards are met.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faq5">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                                    What if I'm not satisfied with a mentorship session?
                                </button>
                            </h2>
                            <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="faq5" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    We offer a satisfaction guarantee. If you're not completely satisfied with your session, contact our support team within 24 hours and we'll work to resolve the issue or provide a refund.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact CTA -->
    <section class="contact-cta py-5 bg-primary text-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <h2 class="mb-3">Still Have Questions?</h2>
                    <p class="lead mb-4">
                        Our support team is here to help you every step of the way.
                    </p>
                    <div class="cta-buttons">
                        <a href="mailto:email@mail.com" class="btn btn-light btn-lg me-3 mb-2">
                            <i class="fa fa-envelope me-2"></i>
                            Email Support
                        </a>
                        <a href="#" class="btn btn-outline-light btn-lg mb-2">
                            <i class="fa fa-comments me-2"></i>
                            Live Chat
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<style>
.contact-page .contact-item {
    padding: 2rem;
    background: white;
    border-radius: 10px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    transition: transform 0.3s ease;
    height: 100%;
}

.contact-page .contact-item:hover {
    transform: translateY(-5px);
}

.contact-page .contact-icon {
    width: 80px;
    height: 80px;
    background: var(--bs-primary-light);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto;
}

.contact-page .form-control,
.contact-page .form-select {
    border: 2px solid #e9ecef;
    padding: 12px 15px;
    border-radius: 8px;
    transition: border-color 0.3s ease;
}

.contact-page .form-control:focus,
.contact-page .form-select:focus {
    border-color: var(--bs-primary);
    box-shadow: 0 0 0 0.2rem rgba(41, 103, 148, 0.25);
}

.contact-page .form-label {
    font-weight: 600;
    color: var(--bs-dark);
    margin-bottom: 8px;
}

.contact-page .accordion-button {
    font-weight: 600;
    padding: 1.25rem;
}

.contact-page .accordion-button:not(.collapsed) {
    background-color: var(--bs-primary-light);
    color: var(--bs-primary);
}

.contact-page .accordion-item {
    border: none;
    border-radius: 8px !important;
    overflow: hidden;
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
}

.contact-page .page-header {
    background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
}

@media (max-width: 768px) {
    .contact-page .contact-item {
        margin-bottom: 2rem;
    }

    .contact-page .cta-buttons .btn {
        display: block;
        width: 100%;
        margin-bottom: 10px;
    }
}
</style>

<script>
jQuery(document).ready(function($) {
    // Form validation and submission
    $('#contactForm').on('submit', function(e) {
        e.preventDefault();

        var form = $(this);
        var submitBtn = form.find('button[type="submit"]');
        var originalText = submitBtn.html();

        // Basic validation
        var isValid = true;
        form.find('[required]').each(function() {
            if (!$(this).val().trim()) {
                $(this).addClass('is-invalid');
                isValid = false;
            } else {
                $(this).removeClass('is-invalid');
            }
        });

        if (!isValid) {
            alert('Please fill in all required fields.');
            return;
        }

        // Show loading state
        submitBtn.html('<i class="fa fa-spinner fa-spin me-2"></i>Sending...');
        submitBtn.prop('disabled', true);

        // Simulate form submission
        setTimeout(function() {
            submitBtn.html('<i class="fa fa-check me-2"></i>Message Sent!');
            submitBtn.removeClass('btn-primary').addClass('btn-success');

            // Show success message
            form.prepend('<div class="alert alert-success alert-dismissible fade show" role="alert">' +
                '<strong>Thank you!</strong> Your message has been sent successfully. We\'ll get back to you within 24 hours.' +
                '<button type="button" class="btn-close" data-bs-dismiss="alert"></button>' +
                '</div>');

            // Reset form
            form[0].reset();

            // Reset button after 3 seconds
            setTimeout(function() {
                submitBtn.html(originalText);
                submitBtn.prop('disabled', false);
                submitBtn.removeClass('btn-success').addClass('btn-primary');
            }, 3000);

        }, 2000);
    });

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
        } else if (email) {
            $(this).removeClass('is-invalid').addClass('is-valid');
        }
    });
});
</script>

<?php get_footer(); ?>
