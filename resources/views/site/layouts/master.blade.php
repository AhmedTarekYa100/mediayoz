<!DOCTYPE html>
<html class="no-js" lang="ar">

<head>
    @include('site.layouts.head')
</head>
<body data-rsssl=1 id="home-page"
      class="envato_tk_templates-template-default single single-envato_tk_templates postid-35 elementor-default elementor-template-full-width elementor-kit-5 elementor-page elementor-page-35 sticky-header"
      dir="rtl">
<div id="main-wrapper" class="main-wrapper">
    @include('site.layouts.header')
    @yield('content')
</div>
@include('site.layouts.footer')
@include('site.layouts.scripts')

</body>

</html>




