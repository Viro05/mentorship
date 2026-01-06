    </main><!-- #primary -->

    <footer id="colophon" class="site-footer">
        <div class="mt-5 bg-footer py-4 text-light">
            <div class="container">
                <div class="row py-5 justify-content-center">
                    <div class="col-sm-8 col-md-6 text-center">
                        <h3 class="footer-brand text-white fw-bold mb-4" style="font-size: 2rem; text-shadow: 2px 2px 4px rgba(0,0,0,0.5);">Mentorship</h3>
                        <p>
                            E-mail: <a href="mailto:email@mail.com" class="text-light">email@mail.com</a>
                        </p>
                        <p>
                            Phone: <a href="tel:+2626200000" class="text-light">+2626200000.0.0.</a>
                        </p>
                        <div class="d-flex">
                            <a href="#" class="social-link">
                                <i class="fa-brands fa-facebook-f"></i>
                            </a>
                            <a href="#" class="social-link">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                            <a href="#" class="social-link">
                                <i class="fa-brands fa-twitter"></i>
                            </a>
                            <a href="#" class="social-link">
                                <i class="fa-brands fa-linkedin-in"></i>
                            </a>
                        </div>
                    </div>


                </div>

                <p class="text-center">
                    © Copyright 2022 Mentorship. All Rights Reserved | Site-Map
                </p>
            </div>
        </div>
    </footer><!-- #colophon -->

</div><!-- #page -->

<script>
jQuery(document).ready(function($) {
    // Simple dropdown toggle handler
    $('.dropdown-toggle').on('click', function(e) {
        e.preventDefault();
        e.stopPropagation();

        // Close other dropdowns
        $('.dropdown-menu').not($(this).next()).removeClass('show').hide();
        $('.dropdown-toggle').not(this).attr('aria-expanded', 'false');

        // Toggle current dropdown
        var dropdownMenu = $(this).next('.dropdown-menu');
        var isShown = dropdownMenu.hasClass('show');

        if (isShown) {
            dropdownMenu.removeClass('show').fadeOut(200);
            $(this).attr('aria-expanded', 'false');
        } else {
            dropdownMenu.addClass('show').fadeIn(200);
            $(this).attr('aria-expanded', 'true');
        }
    });

    // Close dropdown when clicking outside
    $(document).on('click', function(e) {
        if (!$(e.target).closest('.dropdown').length) {
            $('.dropdown-menu.show').removeClass('show').fadeOut(200);
            $('.dropdown-toggle').attr('aria-expanded', 'false');
        }
    });

    // Close dropdown on escape key
    $(document).on('keydown', function(e) {
        if (e.keyCode === 27) { // Escape key
            $('.dropdown-menu.show').removeClass('show').fadeOut(200);
            $('.dropdown-toggle').attr('aria-expanded', 'false');
        }
    });

    // Prevent dropdown from closing when clicking inside the menu
    $('.dropdown-menu').on('click', function(e) {
        e.stopPropagation();
    });
});
</script>

<?php wp_footer(); ?>

</body>
</html>
