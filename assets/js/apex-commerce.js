/**
 * ApexCommerce D2C Starter Kit Core JS
 */

(function ($) {
  'use strict';

  var ApexCommerce = {
    init: function () {
      this.bindCartDrawer();
      this.bindStickyBar();
    },

    bindCartDrawer: function () {
      // Open drawer
      $(document).on('click', '.apex-cart-trigger, .header-cart-link', function (e) {
        e.preventDefault();
        ApexCommerce.openDrawer();
      });

      // Close drawer
      $(document).on('click', '.apex-drawer-close, #apex-cart-drawer-overlay', function (e) {
        e.preventDefault();
        ApexCommerce.closeDrawer();
      });

      // Auto-open on successful AJAX Add to Cart
      $(document.body).on('added_to_cart', function () {
        ApexCommerce.openDrawer();
      });
    },

    openDrawer: function () {
      $('#apex-cart-drawer-overlay').addClass('is-active');
      $('#apex-cart-drawer').addClass('is-open');
      $('body').addClass('apex-drawer-locked');
    },

    closeDrawer: function () {
      $('#apex-cart-drawer-overlay').removeClass('is-active');
      $('#apex-cart-drawer').removeClass('is-open');
      $('body').removeClass('apex-drawer-locked');
    },

    bindStickyBar: function () {
      var $bar = $('#apex-sticky-atc-bar');
      if (!$bar.length) return;

      var $mainAtc = $('form.cart button.single_add_to_cart_button');
      if (!$mainAtc.length) return;

      $(window).on('scroll', function () {
        var atcTop = $mainAtc.offset().top;
        var scrollPos = $(window).scrollTop() + $(window).height();

        if (scrollPos > atcTop + 150) {
          $bar.addClass('is-visible');
        } else {
          $bar.removeClass('is-visible');
        }
      });

      // Sticky button trigger
      $(document).on('click', '.apex-sticky-submit-btn', function (e) {
        e.preventDefault();
        if ($mainAtc.length) {
          $mainAtc.trigger('click');
        }
      });
    }
  };

  $(document).ready(function () {
    ApexCommerce.init();
  });
})(jQuery);

