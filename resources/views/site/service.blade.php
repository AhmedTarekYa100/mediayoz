@extends('site.layouts.master')
@section('title')
    {{($setting->title) ?? 'Company'}} | {{$service->title}}
@endsection
@section('content')
    <div class="breadcrum-area breadcrumb-banner single-breadcrumb">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="section-heading heading-left text-right" data-sal="slide-right" data-sal-duration="1000" data-sal-delay="300">
                        <h1 class="title h2 text-right" style='    font-size: 55px;'> {{$service->title}} </h1>
                        <p>
                            {{$service->desc}}
                        </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="banner-thumbnail" data-sal="slide-up" data-sal-duration="1000" data-sal-delay="400">
                        <img class="paralax-image" style="max-height: 500px" src="{{$service->image}}" alt="Illustration">
                    </div>
                </div>
            </div>
        </div>
        <ul class="shape-group-8 list-unstyled">
            <li class="shape shape-1" data-sal="slide-right" data-sal-duration="500" data-sal-delay="100">
                <img src="{{asset('assets/site')}}/media/others/bubble-9.png" alt="Bubble">
            </li>
            <li class="shape shape-2" data-sal="slide-left" data-sal-duration="500" data-sal-delay="200">
                <img src="{{asset('assets/site')}}/media/others/bubble-20.png" alt="Bubble">
            </li>
            <li class="shape shape-3" data-sal="slide-up" data-sal-duration="500" data-sal-delay="300">
                <img src="{{asset('assets/site')}}/media/others/line-4.png" alt="Line">
            </li>
        </ul>
    </div>

    <section class="section section-padding-equal pt--100 pt_md--80 pt_sm--60 projects-gallery" dir="rtl">
        <div class="container">
            <div class="section-heading heading-left">
                <span class="subtitle text-center">{{$service->title}} | {{$service->sub_title}}</span>
                <h2 class="title text-center"> نماذج من أعمالنا </h2>
            </div>
            @if(count($service->projects))
            <div class="axil-isotope-wrapper">
                <div class="row isotope-list">
                    @foreach($service->projects as $project)
                    <div class="col-xl-4 col-md-6 project branding">
                        <div class="project-grid">
                            <div class="thumbnail">
                                @if($project->type == 'image')
                                <img src="{{$project->image}}" alt="project">
                                @else
                                    <video width="410" height="321" controls>
                                        <source src="{{$project->image}}" type="video/mp4">
                                        عفوا لا يدعم متصفحك الفيدوهات
                                    </video>
                                @endif
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <style>
                        .projects-gallery .thumbnail img {
                            min-height: 321px;
                            object-fit: cover;
                        }
                    </style>
                </div>
            </div>
            @else
            <p> عفوا لا يوجد مشاريع </p>
            @endif
        </div>
        <ul class="shape-group-7 list-unstyled">
            <li class="shape shape-1"><img src="{{asset('assets/site')}}/media/others/circle-2.png" alt="circle"></li>
            <li class="shape shape-2"><img src="{{asset('assets/site')}}/media/others/bubble-2.png" alt="Line"></li>
            <li class="shape shape-3"><img src="{{asset('assets/site')}}/media/others/bubble-1.png" alt="Line"></li>
        </ul>
    </section>

    <section class="whychooseus section-padding-equal">
        <div class="container">
            <div class="section-heading">
                <span class="subtitle text-center"> لهذه الأسباب، نعتبر أنفسنا مؤهلين في هذا المجال. </span>
                <h2 class="title text-center">لماذا نعمل معاً</h2>
            </div>
            <div class="row">
                <div class="col-md-5">
                    <div class="whys">
                        <h4>6 سنوات خبرة</h4>
                        <p>
                            خبرة أكثر من 6 سنوات في إنتاج الفيديوهات التسويقية لأصحاب التجارة الإلكترونية في العالم العربي.
                        </p>
                    </div>
                    <div class="whys">
                        <h4>أسعارنا</h4>
                        <p>
                            أسعار تنافسية وعروض إستثنائية تجعلنا رواد في الانتاج التسويقي في العالم العربي.
                        </p>
                    </div>
                    <div class="whys">
                        <h4>الإلتزام</h4>
                        <p>
                            نلتزم بالعمل و الوقت و نعمل جاهدين دائما للتطور.
                        </p>
                    </div>
                    <div class="whys">
                        <h4>فريق متخصص</h4>
                        <p> فريق من المحترفين و مسوقين عالميين خاضوا تجارب قوية و كبيرة في مجال التسويق الرقمي و التجارة الإلكترونية. </p>
                    </div>
                    <h4>
                    </h4>
                </div>
                <div class="col-md-1">
                </div>
                <div class="col-md-6 why-img-ph">
                    <img src="https://promo-theme.com/wixo/wp-content/uploads/2021/08/move5.png" class="move5">
                    <img src="https://promo-theme.com/wixo/wp-content/uploads/2021/08/move4.png" class="move4">
                    <img src="https://promo-theme.com/wixo/wp-content/uploads/2021/08/move6.png" class="move6">
                </div>
            </div>
            <div class="col-md-12">
                <a href="{{route('contact')}}" style="max-width: 230px;" class="axil-btn btn-fill-primary btn-large whychooseus-btn"> اطلب الآن </a>
            </div>
        </div>
    </section>

    <section class="section section-padding bg-color-dark" dir="rtl">
        <div class="container">
            <div class="section-heading heading-light">
                <span class="subtitle text-center"> شهادات </span>
                <h2 class="title text-center"> هل أنت جاهز الآن لتحقيق نتائج أفضل؟ </h2>
            </div>
            <div class="row">
                <div class="col-lg-3 col-6 sal-animate" data-sal="slide-up" data-sal-duration="800" data-sal-delay="100">
                    <div class="counterup-progress">

                        <div class="count-number h2">
                            <span class="number count">2</span>
                            <span class="symbol">+</span>
                        </div>
                        <h6 class="title text-center">سنوات الخبرة</h6>
                    </div>
                </div>
                <div class="col-lg-3 col-6 sal-animate" data-sal="slide-up" data-sal-duration="800" data-sal-delay="200">
                    <div class="counterup-progress">

                        <div class="count-number h2">
                            <span class="number count">170</span>
                            <span class="symbol">+</span>
                        </div>
                        <h6 class="title text-center">مشاريع مكتملة</h6>
                    </div>
                </div>
                <div class="col-lg-3 col-6 sal-animate" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                    <div class="counterup-progress">

                        <div class="count-number h2">
                            <span class="number count">144</span>
                            <span class="symbol">+</span>
                        </div>
                        <h6 class="title text-center">عميل سعيد</h6>
                    </div>
                </div>
                <div class="col-lg-3 col-6 sal-animate" data-sal="slide-up" data-sal-duration="800" data-sal-delay="400">
                    <div class="counterup-progress">

                        <div class="count-number h2">
                            <span class="number count">7</span>
                            <span class="symbol">+</span>
                        </div>
                        <h6 class="title text-center">موظف</h6>
                    </div>
                </div>
            </div>
        </div>
        <ul class="list-unstyled shape-group-10">
            <!-- <li class="shape shape-1"><img src="{{asset('assets/site')}}/media/others/line-9.png" alt="Circle"></li> -->
            <li class="shape shape-2"><img src="{{asset('assets/site')}}/media/others/bubble-42.png" alt="Circle"></li>
            <li class="shape shape-3"><img src="{{asset('assets/site')}}/media/others/bubble-43.png" alt="Circle"></li>
        </ul>
    </section>


@endsection
