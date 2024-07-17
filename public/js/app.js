$("#coverflow").flipster({
    style: 'flat',
    scrollwheel: false,
    spacing: -0.2,
    loop: true,
    buttons: true,
    click: false,
});

$(document).ready(function () {
    $('#heroCarousel').carousel({
        interval: 7000 // Change the interval to 6 seconds
    });

    const $phoneInput = $("input[name='phone']");
    const prefix = '+380 ';

    $phoneInput.on('focus', function() {
        if (!$(this).val().startsWith(prefix)) {
            $(this).val(prefix);
        }
    });

    $phoneInput.on('input', function() {
        if (!$(this).val().startsWith(prefix)) {
            $(this).val(prefix + $(this).val().slice(prefix.length));
        }
    });

    // Ensure the prefix is not removed by keyboard actions
    $phoneInput.on('keydown', function(e) {
        const val = $(this).val();
        if (val.length < prefix.length) {
            $(this).val(prefix);
        } else if (val.slice(0, prefix.length) !== prefix) {
            $(this).val(prefix + val.slice(prefix.length));
        }
    });

    $("#contactForm, #modalForm").on("submit", function (e) {
        e.preventDefault();

        const $errorName = $(this).find(".error-name").prop("id") === "modal-error-name"
            ? $("#modal-error-name")
            : $("#error-name");
        const $errorPhone = $(this).find(".error-phone").prop("id") === "modal-error-phone"
            ? $("#modal-error-phone")
            : $("#error-phone");

        const $inputName = $(this).find("input[name='name']");
        const $inputPhone = $(this).find("input[name='phone']");

        const $alertSuccess = $(".alert-success");
        const $alertDanger = $(".alert-danger");
        const $alertWarning = $(".alert-warning");

        $errorName.text('');
        $errorPhone.text('');
        $inputName.removeClass("is-invalid");
        $inputPhone.removeClass("is-invalid");

        $.ajax({
            type: 'POST',
            url: $(this).attr('action'),
            data: $(this).serialize(),
            success: function() {
                $alertSuccess.addClass("show").css("z-index", 1031);
                setTimeout(function() {
                    $alertSuccess.removeClass("show").css("z-index", 0);
                }, 4000);
                $("input").val("");
                $("#contactFormModal").modal("hide");
            },
            error: function(response) {
                if(response.status === 422) {
                    let errors = response.responseJSON.errors;
                    if(errors.name) {
                        $errorName.text(errors.name[0]);
                        $inputName.addClass("is-invalid");
                    }
                    if(errors.phone) {
                        $errorPhone.text(errors.phone[0]);
                        $inputPhone.addClass("is-invalid");
                    }
                } else if (response.status === 429) {
                    $alertWarning.addClass("show").css("z-index", 1031);
                    setTimeout(function() {
                        $alertWarning.removeClass("show").css("z-index", 0);
                    }, 5000);
                    $("#contactFormModal").modal("hide");
                } else {
                    $alertDanger.addClass("show").css("z-index", 1031);
                    setTimeout(function() {
                        $alertDanger.removeClass("show").css("z-index", 0);
                    }, 5000);
                    $("#contactFormModal").modal("hide");
                }
                console.log(response)
            }
        });
    });

    const $navbar = $('.navbar');
    const $navbarCollapse = $('.navbar-collapse');

    const changeOpacityOnScroll = function() {
        if ($(window).scrollTop() > 0) {
            $navbar.addClass('scrolled').removeClass('not-scrolled');
        } else {
            $navbar.removeClass('scrolled').addClass('not-scrolled');
        }
    };

    const checkNavbarExpanded = function() {
        if ($navbarCollapse.hasClass('show')) {
            $navbar.addClass('expanded');
        } else {
            $navbar.removeClass('expanded');
        }
    };

    // Initialize the state
    changeOpacityOnScroll();

    // Listen for scroll events
    $(window).on('scroll', changeOpacityOnScroll);

    // Listen for navbar expand/collapse events
    $navbarCollapse.on('shown.bs.collapse', checkNavbarExpanded);
    $navbarCollapse.on('hidden.bs.collapse', checkNavbarExpanded);

    let target
    function smoothScroll(target) {
        $('html, body').animate({
            scrollTop: target.offset().top - 120
        }, 500, 'linear');
    }

    $('a.nav-link[href*="#"]').on('click', function(e) {
        if (this.pathname === window.location.pathname) {
            e.preventDefault();
            target = $(this.hash);
            smoothScroll(target);
        } else {
            localStorage.setItem('scrollToHash', this.hash);
        }
    });

    // Scroll to the anchor if it exists in the URL on page load
    if (window.location.hash) {
        target = $(window.location.hash);
        if (target.length) {
            smoothScroll(target);
        }
    }

    // Handling external links with anchors
    if (localStorage.getItem('scrollToHash')) {
        const hash = localStorage.getItem('scrollToHash');
        localStorage.removeItem('scrollToHash');
        if (hash) {
            target = $(hash);
            if (target.length) {
                smoothScroll(target);
            }
        }
    }

    // Function to collapse the navbar
    function collapseNavbar() {
        $('.navbar-collapse').collapse('hide');
    }

    // Ensure that the navbar collapses when a link is clicked
    $('a.nav-link').on('click', function() {
        collapseNavbar();
    });
});
