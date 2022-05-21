<!-- Meta Data -->
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>
@yield('title')
</title>
<meta name="description" content="mediayoz, mediayoz company, marketing, market company, Morocco marketing">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- Favicon -->
<link rel="shortcut icon" type="image/x-icon" href="{{(asset($setting->logo)) ?? ''}}">
<link rel="stylesheet" href="{{asset('assets/site')}}/css/vendor/bootstrap.min.css">
<link rel="stylesheet" href="{{asset('assets/site')}}/css/vendor/font-awesome.css">
<link rel="stylesheet" href="{{asset('assets/site')}}/css/vendor/slick.css">
<link rel="stylesheet" href="{{asset('assets/site')}}/css/vendor/slick-theme.css">
<link rel="stylesheet" href="{{asset('assets/site')}}/css/vendor/sal.css">
<link rel="stylesheet" href="{{asset('assets/site')}}/css/vendor/magnific-popup.css">
<link rel="stylesheet" href="{{asset('assets/site')}}/css/vendor/green-audio-player.min.css">

<!-- Site Stylesheet -->
<link rel="stylesheet" href="{{asset('assets/site')}}/css/app.css">
<link rel="stylesheet" href="{{asset('assets/site')}}/avenir/stylesheet.css">
<link rel="stylesheet" href="{{asset('assets/site')}}/css/custom.css?v=1.012345">
<link rel="stylesheet" href="{{asset('assets/site')}}/css/responsive.css?v=1.012345">

<!-- TOASTR CSS -->
@toastr_css

{{--    <script>--}}
{{--      window.dataLayer = window.dataLayer || [];--}}
{{--      function gtag(){dataLayer.push(arguments);}--}}
{{--      gtag('js', new Date());--}}

{{--      gtag('config', 'UA-129523657-3');--}}
{{--    </script>--}}

<style>
    .mainmenu > .menu-item-has-children > a::after {
        right: inherit;
        left: -20px;
    }

    .mainmenu > .menu-item-has-children > a {
        margin-left: 20px;
        margin-right: initial;
    }

    .mainmenu > .menu-item-has-children .axil-submenu {
        right: 0;
        left: initial;
    }
</style>


<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/7.3.0/swiper-bundle.min.js"
        integrity="sha512-5Zo75sFi47jEROGHPhhx+IUh77BJ3W8gweIYENZGMtfbey8rJ0MzYNRponea9NMM62mwaz+Ze8TE1T4iyuKShQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@yield('site_css')
