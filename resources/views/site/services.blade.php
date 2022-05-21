@extends('site.layouts.master')
@section('title')
    {{($setting->title) ?? 'Company'}} |  الخدمات
@endsection
@section('content')

    <div class="breadcrum-area breadcrumb-banner">
        <div class="container">
            <div class="section-heading heading-left" data-sal="slide-right" data-sal-duration="1000" data-sal-delay="300">
                <h1 class="title h2">خدماتنا </h1>
                <p>خدماتنا متكاملة و مسايرة مع العصر.</p>
            </div>
{{--            <div class="banner-thumbnail" data-sal="slide-up" data-sal-duration="1000" data-sal-delay="400">--}}
{{--                <img class="paralax-image" src="{{asset('assets/site')}}/media/banner/banner-thumb-4.png" alt="Illustration">--}}
{{--            </div>--}}
        </div>
        <ul class="shape-group-8 list-unstyled">
            <li class="shape shape-1" data-sal="slide-right" data-sal-duration="500" data-sal-delay="100">
                <img src="{{asset('assets/site')}}/media/others/bubble-9.png" alt="Bubble">
            </li>
            <li class="shape shape-2" data-sal="slide-left" data-sal-duration="500" data-sal-delay="200">
                <img src="{{asset('assets/site')}}/media/others/bubble-21.png" alt="Bubble">
            </li>
            <li class="shape shape-3" data-sal="slide-up" data-sal-duration="500" data-sal-delay="300">
                <img src="{{asset('assets/site')}}/media/others/line-4.png" alt="Line">
            </li>
        </ul>
    </div>
    <!--=====================================-->
    <!--=        Service Area Start         =-->
    <!--=====================================-->
    <div class="service-scroll-navigation-area">
        <!-- Service Nav -->
        <nav id="onepagenav" class="service-scroll-nav navbar onepagefixed">
            <div class="container">
                <ul class="nav nav-pills">
                    @foreach($services as $service)
                    <li class="nav-item">
                        <a class="nav-link" href="#section{{$service->id}}">{{$service->title}}</a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </nav>

        @foreach($services as $service)
        <div class="section section-padding" id="section{{$service->id}}" dir="rtl">
            <div class="container">
                <div class="section-heading heading-left">
                    <span class="subtitle">خدمات</span>
                    <h2 class="title"> {{$service->title}} </h2>
                    <a href="/social-media-managemet">
                        اكتشف المزيد
                    </a>
                </div>
                @if(count($service->projects))
                <div class="row">
                    @foreach($service->projects->take(3) as $project )
                    <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="200">
                        <div class="services-grid service-style-2">
                            <div class="thumbnail">
                                @if($project->type == 'image')
                                <img src="{{$project->image}}" alt="icon">
                                @else
                                    <img src="{{$setting->logo}}" alt="icon">
                                @endif
                            </div>
                            <div class="content">
                                <h5 class="title"> {{$project->title}}  </h5>
                                <p>{{$service->sub_title}}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                @endif
            </div>
        </div>
        @endforeach
    </div>


    <section class="section call-to-action-area call-to-action-footer" dir="lrt" id="call-us">
        <div class="container">
            <div class="call-to-action">
                <div class="section-heading heading-light">
                <span class="subtitle text-center">
                متشوّقون للعمل معًا!
                </span>
                    <h2 class="title text-center">
                        نود أن نسمع عن مشروعك!
                    </h2>



                    <a href="/contact" class="axil-btn btn-large btn-fill-white">   تواصل معنا </a>


                </div>
                <div class="thumbnail">
                    <div class="larg-thumb" data-sal="zoom-in" data-sal-duration="600" data-sal-delay="100">
                        <img class="paralax-image" src="{{asset('assets/site')}}/media/others/chat-group.png" alt="Chat">
                    </div>
                    <ul class="list-unstyled small-thumb">
                        <li class="shape shape-1" data-sal="slide-right" data-sal-duration="800"
                            data-sal-delay="400">
                            <img class="paralax-image" src="{{asset('assets/site')}}/media/others/laptop-poses.png" alt="Laptop">
                        </li>
                        <li class="shape shape-2" data-sal="slide-left" data-sal-duration="800"
                            data-sal-delay="300">
                            <img class="paralax-image" src="{{asset('assets/site')}}/media/others/bill-pay.png" alt="Bill">
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <ul class="list-unstyled shape-group-9">
            <li class="shape shape-1"><img src="{{asset('assets/site')}}/media/others/bubble-12.png" alt="Comments"></li>
            <li class="shape shape-2"><img src="{{asset('assets/site')}}/media/others/bubble-16.png" alt="Comments"></li>
            <li class="shape shape-3"><img src="{{asset('assets/site')}}/media/others/bubble-13.png" alt="Comments"></li>
            <li class="shape shape-4"><img src="{{asset('assets/site')}}/media/others/bubble-14.png" alt="Comments"></li>
            <li class="shape shape-5"><img src="{{asset('assets/site')}}/media/others/bubble-16.png" alt="Comments"></li>
            <li class="shape shape-6"><img src="{{asset('assets/site')}}/media/others/bubble-15.png" alt="Comments"></li>
            <li class="shape shape-7"><img src="{{asset('assets/site')}}/media/others/bubble-16.png" alt="Comments"></li>
        </ul>
    </section>




@endsection
