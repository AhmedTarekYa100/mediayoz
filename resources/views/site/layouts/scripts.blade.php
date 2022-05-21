
<!-- Jquery Js -->
<script src="{{asset('assets/site')}}/js/vendor/jquery-3.6.0.min.js"></script>
<script src="https://cdn.rtlcss.com/bootstrap/v4.2.1/js/bootstrap.min.js"></script>
<script src="{{asset('assets/site')}}/js/vendor/isotope.pkgd.min.js"></script>
<script src="{{asset('assets/site')}}/js/vendor/imagesloaded.pkgd.min.js"></script>
<script src="{{asset('assets/site')}}/js/vendor/waypoints.min.js"></script>
<script src="{{asset('assets/site')}}/js/vendor/counterup.js"></script>
<script src="{{asset('assets/site')}}/js/vendor/slick.min.js"></script>
<script src="{{asset('assets/site')}}/js/vendor/sal.js"></script>
<script src="{{asset('assets/site')}}/js/vendor/jquery.magnific-popup.min.js"></script>
<script src="{{asset('assets/site')}}/js/vendor/js.cookie.js"></script>
<script src="{{asset('assets/site')}}/js/vendor/jquery.style.switcher.js"></script>
<script src="{{asset('assets/site')}}/js/vendor/jquery.countdown.min.js"></script>
<script src="{{asset('assets/site')}}/js/vendor/tilt.js"></script>
<script src="{{asset('assets/site')}}/js/vendor/green-audio-player.min.js"></script>
<script src="{{asset('assets/site')}}/js/vendor/jquery.nav.js"></script>

<!-- Site Scripts -->
<script src="{{asset('assets/site')}}/js/app.js"></script>
<script src="{{asset('assets/site')}}/js/sheets.js"></script>

<script>

    $('body .accordion-header button').click(function () {
        clean();
        var target = $(this).attr('data-bs-target');
        $(this).removeClass('collapsed');
        $(target).addClass('show');
    });

    function clean() {
        $('body .accordion-header button').each(function () {
            var target = $(this).attr('data-bs-target');
            $(this).addClass('collapsed');
            $(target).removeClass('show');
        });
    }


    function checkform() {
        var rem = true;
        $('.step1 input').each(function () {
            if (!$(this).val()) {
                rem = false;
            }
        });

        return rem;
    }

    $('#go_next').click(function () {

        if (checkform()) {
            $('.step1').hide();
            $('.step2').show();
        }

    });

</script>
<script>
    $(document).ready(function () {
        // Swiper: Slider
        new Swiper('.swiper-container', {
            loop: true,
            nextButton: '.swiper-button-next',
            prevButton: '.swiper-button-prev',
            slidesPerView: 3,
            paginationClickable: true,
            spaceBetween: 20,
            breakpoints: {
                1920: {
                    slidesPerView: 4,
                    spaceBetween: 50
                },
                1028: {
                    slidesPerView: 2,
                    spaceBetween: 30
                },
                480: {
                    slidesPerView: 1,
                    spaceBetween: 10
                }
            }
        });
    });
</script>
@toastr_js
@toastr_render
@yield('site_js')
