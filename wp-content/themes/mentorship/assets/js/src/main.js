/**
 * Mentorship Theme Main JavaScript Source
 *
 * @package Mentorship
 * @since 1.0.0
 */

// SCSS is handled separately by the build process
// import '../scss/style.scss';

(function ($) {
  "use strict";

  // Theme configuration
  const MentorshipTheme = {
    config: {
      breakpoints: {
        mobile: 768,
        tablet: 1024,
        desktop: 1200,
      },
      selectors: {
        header: ".site-header",
        mobileMenu: ".mobile-menu",
        mobileToggle: ".mobile-menu-toggle",
        searchInput: ".search-input",
        scrollToTop: ".scroll-to-top",
        modal: ".modal",
        loadingOverlay: ".loading-overlay",
      },
      classes: {
        active: "active",
        scrolled: "scrolled",
        visible: "visible",
        loading: "loading",
        menuOpen: "menu-open",
        modalOpen: "modal-open",
      },
    },

    // Initialize theme
    init() {
      this.bindEvents();
      this.initComponents();
    },

    // Bind all event listeners
    bindEvents() {
      $(document).ready(() => this.onDocumentReady());
      $(window).on("load", () => this.onWindowLoad());
      $(window).on("scroll", () => this.onWindowScroll());
      $(window).on("resize", () => this.onWindowResize());
    },

    // Document ready handler
    onDocumentReady() {
      this.initMobileMenu();
      this.initDropdownMenu();
      this.initScrollToTop();
      this.initSmoothScroll();
    },

    // Window load handler
    onWindowLoad() {
      this.hideLoadingSpinner();
    },

    // Window scroll handler
    onWindowScroll() {
      this.handleHeaderScroll();
      this.handleScrollToTop();
    },

    // Window resize handler
    onWindowResize() {
      this.handleMobileMenuResize();
    },

    // Initialize all components
    initComponents() {
      // No additional components needed
    },

    // Mobile menu functionality
    initMobileMenu() {
      const { mobileToggle, mobileMenu } = this.config.selectors;
      const { active, menuOpen } = this.config.classes;

      $(mobileToggle).on("click", (e) => {
        e.preventDefault();
        this.toggleMobileMenu();
      });

      // Close menu when clicking outside
      $(document).on("click", (e) => {
        if (!$(e.target).closest(`${mobileMenu}, ${mobileToggle}`).length) {
          this.closeMobileMenu();
        }
      });

      // Close menu on escape key
      $(document).on("keydown", (e) => {
        if (e.keyCode === 27) {
          this.closeMobileMenu();
        }
      });
    },

    toggleMobileMenu() {
      const { mobileMenu } = this.config.selectors;
      const { active, menuOpen } = this.config.classes;

      $(mobileMenu).toggleClass(active);
      $("body").toggleClass(menuOpen);
    },

    closeMobileMenu() {
      const { mobileMenu } = this.config.selectors;
      const { active, menuOpen } = this.config.classes;

      $(mobileMenu).removeClass(active);
      $("body").removeClass(menuOpen);
    },

    handleMobileMenuResize() {
      if ($(window).width() > this.config.breakpoints.mobile) {
        this.closeMobileMenu();
      }
    },

    // Initialize dropdown menu with hover functionality
    initDropdownMenu() {
      const $dropdown = $(".dropdown");
      const $dropdownToggle = $(".dropdown-toggle");
      const $dropdownMenu = $(".dropdown-menu");

      // Handle hover events for desktop
      $dropdown.on("mouseenter", function () {
        if ($(window).width() > 768) {
          // Only on desktop
          const $menu = $(this).find(".dropdown-menu");
          $menu.addClass("show");
        }
      });

      $dropdown.on("mouseleave", function () {
        if ($(window).width() > 768) {
          // Only on desktop
          const $menu = $(this).find(".dropdown-menu");
          $menu.removeClass("show");
        }
      });

      // Keep click functionality for mobile
      $dropdownToggle.on("click", function (e) {
        if ($(window).width() <= 768) {
          // Only on mobile
          e.preventDefault();
          const $menu = $(this).next(".dropdown-menu");
          $(".dropdown-menu").not($menu).removeClass("show");
          $menu.toggleClass("show");
        }
      });

      // Close dropdown when clicking outside
      $(document).on("click", function (e) {
        if (!$(e.target).closest(".dropdown").length) {
          $(".dropdown-menu").removeClass("show");
        }
      });

      // Close dropdown on escape key
      $(document).on("keydown", function (e) {
        if (e.keyCode === 27) {
          $(".dropdown-menu").removeClass("show");
        }
      });
    },

    // Header scroll effect
    handleHeaderScroll() {
      const { header } = this.config.selectors;
      const { scrolled } = this.config.classes;
      const scrollTop = $(window).scrollTop();

      if (scrollTop > 100) {
        $(header).addClass(scrolled);
      } else {
        $(header).removeClass(scrolled);
      }
    },

    // Scroll to top functionality
    initScrollToTop() {
      const { scrollToTop } = this.config.selectors;

      if (!$(scrollToTop).length) {
        $("body").append(
          '<button class="scroll-to-top" aria-label="Scroll to top"><i class="icon-arrow-up">↑</i></button>',
        );
      }

      $(scrollToTop).on("click", (e) => {
        e.preventDefault();
        $("html, body").animate({ scrollTop: 0 }, 800);
      });
    },

    handleScrollToTop() {
      const { scrollToTop } = this.config.selectors;
      const { visible } = this.config.classes;
      const scrollTop = $(window).scrollTop();

      if (scrollTop > 300) {
        $(scrollToTop).addClass(visible);
      } else {
        $(scrollToTop).removeClass(visible);
      }
    },

    // Smooth scroll
    initSmoothScroll() {
      $('a[href*="#"]')
        .not('[href="#"]')
        .not('[href="#0"]')
        .on("click", (e) => {
          const href = e.currentTarget.getAttribute("href");
          const target = $(href);

          if (
            target.length &&
            location.pathname.replace(/^\//, "") ===
              e.currentTarget.pathname.replace(/^\//, "") &&
            location.hostname === e.currentTarget.hostname
          ) {
            e.preventDefault();
            $("html, body").animate(
              {
                scrollTop: target.offset().top - 100,
              },
              800,
            );
          }
        });
    },

    hideLoadingSpinner() {
      $(".loading-spinner").fadeOut();
    },
  };

  // Additional component classes

  // Initialize theme when document is ready
  $(document).ready(() => {
    MentorshipTheme.init();
  });

  // Expose theme object globally
  window.MentorshipTheme = MentorshipTheme;
})(jQuery);
