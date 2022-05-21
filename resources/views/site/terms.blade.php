@extends('site.layouts.master')
@section('title')
    {{($setting->title) ?? 'Company'}} | شروط الاستخدام
@endsection
@section('content')


    <!--=====================================-->
    <!--=       Breadcrumb Area Start       =-->
    <!--=====================================-->
    <div class="breadcrum-area" dir="rtl">
        <div class="container">
            <div class="breadcrumb">
                <ul class="list-unstyled">

                    <li><a href="/">الرئيسية</a></li>
                    <li class="active">
                        شروط الاستخدام
                    </li>
                </ul>
                <h1 class="title h2">
                    شروط الاستخدام
                </h1>
            </div>
        </div>
        <ul class="shape-group-8 list-unstyled">
            <li class="shape shape-1" data-sal="slide-right" data-sal-duration="500" data-sal-delay="100">
                <img src="{{asset('assets/site')}}/media/others/bubble-9.png" alt="Bubble">
            </li>
            <li class="shape shape-2" data-sal="slide-left" data-sal-duration="500" data-sal-delay="200">
                <img src="{{asset('assets/site')}}/media/others/bubble-11.png" alt="Bubble">
            </li>
            <li class="shape shape-3" data-sal="slide-up" data-sal-duration="500" data-sal-delay="300">
                <img src="{{asset('assets/site')}}/media/others/line-4.png" alt="Line">
            </li>
        </ul>
    </div>
    <!--=====================================-->
    <!--=    Privacy Policy Area Start      =-->
    <!--=====================================-->
    <section class="section-padding privacy-policy-area" dir="rtl">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="privacy-policy-content">

                       {!! ($setting->terms) ?? '' !!}
                    </div>
                </div>
            </div>
        </div>
    </section>




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






    <style>
        .step2 {
            text-align: center;
            line-height: 35px;
            margin-bottom: 45px;
            font-size: 18px;
        }
        p.orrr {
            margin: 0;
            text-align: center;
            margin: 15px 0;
        }

        a.btn.btn-primary.btn-block.via_whats {
            background: #25d366;
            border: #25d366;
        }

    </style>


    <style>
        .info-call h5 {
            margin: 0;
            margin-bottom: 7px;
        }

        .info-call h6 {
            direction: ltr;
            color: red;
        }

        .whts {
            color: #25d366 !important;
        }

        #callusModal button.close {
            border: 0;
            border-radius: 13px;
        }


    </style>




    <style>
        .btn-block {
            width: 100%;
            margin-top: 10px;
            padding: 12px;
        }
        center#headigoox h6 {
            text-align: center;
            margin-top: 13px;
            font-size: 25px;
        }

        center#headigoox {
            margin-top: 30px;
            margin-bottom: 43px;
        }

        center#headigoox .fas {
            color: #FFBD0C;
            font-size: 33px;
        }

        button.btn.btn-primary.btn-block {
            background: #ffbd0c;
            border: 0;
        }

        div#StartNow .close {
            border: 0;
            height: 28px;
            display: inline-block;
            overflow: hidden;
            padding: 0 !important;
            width: 28px !important;
            position: relative;
        }

        div#StartNow .close span {
            display: inline-block;
            height: 5px !important;
            line-height: 10px;
            position: relative;
            margin: 0 !important;
            position: absolute;
            margin-right: auto;
            left: 9px;
            top: 9px;
        }

    </style>

    <style>
        .faq-accordion .accordion-button:after {
            margin-right: auto;
            margin-left: 0;
        }
        center#headigoox h6 {
            margin-bottom: 10px;
        }
        div#StartNow .close {
            margin-top: 10px;
            margin-right: 10px;
        }
        a.btn.btn-primary.btn-block.via_whats {
            margin-top: 0;
        }
        center#headigoox {
            margin: 10px 0;
        }
        button.close {
            background: transparent;
        }

        div#StartNow .close span {
            font-size: 30px;
            top: 5px;
            right: 0;
            height: initial !important;
            width: initial !important;
        }
        input, .form-control {
            padding: 15px;
            line-height: 18px !important;
            height: initial;
        }

        .col-form-label {
            margin-bottom: 1px !important;
        }
    </style>




@endsection
