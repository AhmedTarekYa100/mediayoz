<?php
 $services = \App\Models\Service::select('id','title')->get();
?>
<header class="header axil-header header-style-1" dir='rtl'>
    <div id="axil-sticky-placeholder"></div>
    <div class="axil-mainmenu">
        <div class="container">
            <div class="header-navbar">
                <div class="header-logo">
                    <a href="/"><img class="light-version-logo" src="{{(asset($setting->logo)) ?? ''}}"
                                     alt="logo" style="max-height: 38px;max-width: 232px"></a>
                    <a href="/"><img class="dark-version-logo" src="{{(asset($setting->logo)) ?? ''}}"
                                     alt="logo" style="max-height: 38px;max-width: 232px"></a>
                    <a href="/"><img class="sticky-logo" src="{{(asset($setting->logo)) ?? ''}}"
                                     alt="logo" style="max-height: 38px;max-width: 232px"></a>
                </div>
                <div class="header-main-nav">
                    <!-- Start Mainmanu Nav -->
                    <nav class="mainmenu-nav" id="mobilemenu-popup" aria-modal="true" role="dialog">
                        <div class="d-block d-lg-none">
                            <div class="mobile-nav-header">
                                <div class="mobile-nav-logo">
                                    <a href="index-1.html">
                                        <img class="light-mode" src="{{(asset($setting->logo)) ?? ''}}"
                                             alt="Site Logo">
                                        <img class="dark-mode" src="{{(asset($setting->logo)) ?? ''}}"
                                             alt="Site Logo">
                                    </a>
                                </div>
                                <button class="mobile-menu-close" id="menu-mobile-close"
                                        data-bs-dismiss="offcanvas">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <ul class="mainmenu">
                            <li><a href="/"> الرئيسية </a></li>
                            <li><a href="about"> من نحن </a></li>
                            @if(count($services))
                            <li class="menu-item-has-children">
                                <a href="javascript:void(0);">خدماتنا</a>
                                <ul class="axil-submenu">
                                    <li><a href="services">خدماتنا</a></li>
                                    @foreach($services as $service)
                                    <li><a href="{{route('service',encrypt($service->id))}}">{{$service->title}}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                            @endif
                            <li><a href="{{route('contact')}}">تواصل معنا</a></li>
                        </ul>
                    </nav>
                    <!-- End Mainmanu Nav -->
                </div>
                <div class="header-action">
                    <ul class="list-unstyled">
                        <li class="mobile-menu-btn sidemenu-btn d-lg-none d-block">
                            <button class="btn-wrap" id="menu-mobile" data-bs-toggle="offcanvas"
                                    data-bs-target="#mobilemenu-popup">
                                <span></span>
                                <span></span>
                                <span></span>
                            </button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>
