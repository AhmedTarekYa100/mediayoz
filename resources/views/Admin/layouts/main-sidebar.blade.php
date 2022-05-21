<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar">
    <div class="side-header">
        <a class="header-brand1" href="{{route('adminHome')}}">
            <img src="{{(asset($setting->logo)) ?? asset('assets/site/media/favicon.png')}}" class="header-brand-img light-logo1" alt="logo">
        </a>
        <!-- LOGO -->
    </div>
    <ul class="side-menu">
        <li><h3>العناصر</h3></li>
        <li class="slide">
            <a class="side-menu__item" href="{{route('adminHome')}}">
                <i class="icon icon-home side-menu__icon"></i>
                <span class="side-menu__label">الرئيسية</span>
            </a>
        </li>
        <li class="slide">
            <a class="side-menu__item" href="{{route('admins.index')}}">
                <i class="fe fe-users side-menu__icon"></i>
                <span class="side-menu__label">المشرفين</span>
            </a>
        </li>

        <li class="slide">
            <a class="side-menu__item" href="{{route('services.index')}}">
                <i class="fe fe-shopping-cart side-menu__icon"></i>
                <span class="side-menu__label">الخدمات</span>
            </a>
        </li>

        <li class="slide">
            <a class="side-menu__item" href="{{route('projects.index')}}">
                <i class="fe fe-camera side-menu__icon"></i>
                <span class="side-menu__label">المشاريع</span>
            </a>
        </li>

        <li class="slide">
            <a class="side-menu__item" href="{{route('clients.index')}}">
                <i class="fe fe-user-plus side-menu__icon"></i>
                <span class="side-menu__label">عملائنا</span>
            </a>
        </li>

        <li class="slide">
            <a class="side-menu__item" href="{{route('admin.setting')}}">
                <i class="fe fe-info side-menu__icon"></i>
                <span class="side-menu__label">بيانات الشركة</span>
            </a>
        </li>

        <li class="slide">
            <a class="side-menu__item" href="{{route('admin.privacy')}}">
                <i class="fe fe-edit-3 side-menu__icon"></i>
                <span class="side-menu__label">شروط وسياسات</span>
            </a>
        </li>

        <li class="slide">
            <a class="side-menu__item" href="{{route('contact.index')}}">
                <i class="fe fe-mail side-menu__icon"></i>
                <span class="side-menu__label">طلبات الخدمات</span>
            </a>
        </li>

        <li class="slide">
            <a class="side-menu__item" href="{{route('admin.logout')}}">
                <i class="icon icon-lock side-menu__icon"></i>
                <span class="side-menu__label">تسجيل الخروج</span>
            </a>
        </li>

    </ul>
</aside>
