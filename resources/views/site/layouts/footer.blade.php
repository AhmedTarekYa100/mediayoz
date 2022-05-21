<?php
$services = \App\Models\Service::select('id','title')->get();
?>
<footer class="footer-area">
    <div class="container">
        <div class="footer-top">
            <div class="footer-social-link">
                <ul class="list-unstyled">
                    <li><a href="{{($setting->facebook) ?? ''}}" data-sal="slide-up" data-sal-duration="500"
                           data-sal-delay="100"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="{{($setting->insta) ?? ''}}" data-sal="slide-up" data-sal-duration="500"
                           data-sal-delay="500"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="{{($setting->youtube) ?? ''}}" data-sal="slide-up"
                           data-sal-duration="500" data-sal-delay="600"><i
                                class="fab fa-youtube"></i></a></li>


                    <li>
                        <a href="{{($setting->linkedin) ?? ''}}" data-sal="slide-up"
                           data-sal-duration="500"
                           data-sal-delay="800"><i class="fab fa-linkedin"></i></a></li>


                </ul>
            </div>
        </div>
        <div class="footer-main">
            <div class="row">

                <div class="col-xl-6 col-lg-7 " data-sal="slide-left" data-sal-duration="800" data-sal-delay="100">
                    <div class="row">
                        <div class="col-sm-6 text-end">
                            <div class="footer-widget">
                                <h6 class="widget-title">خدماتنا</h6>
                                <div class="footer-menu-link">
                                    <ul class="list-unstyled">
                                        @foreach($services as $service)
                                            <li><a href="#">{{$service->title}}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 text-end ">
                            <div class="footer-widget">
                                <h6 class="widget-title"> تواصل معنا </h6>
                                <div class="footer-menu-link">
                                    <ul class="list-unstyled">
                                        <li><a href="{{route('contact')}}">تواصل معنا</a></li>
                                        <li><a href="{{route('terms')}}">شروط الاستخدام</a></li>
                                        <li><a href="{{route('privacy')}}">سياسة الخصوصية</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6 col-lg-5 footer-mediaman" data-sal="slide-bottom" data-sal-duration="800"
                     data-sal-delay="100">
                    <div class="footer-widget ">
                        <div class="footer-newsletter">
                            <h2 class="title">
                                <img class="light-version-logo" src="{{(asset($setting->logo)) ?? ''}}" style="max-width: 232px;max-height: 38px"
                                     alt="logo">
                            </h2>
                            <p style="direction: rtl;">
                                إن سمعتنا وجودة عملنا هما رأسمالنا الأهم، بل الوحيد. لذلك كن على ثقة تامة
                                <br> نأمل أن نتعاون في أقرب وقت . أنت في أيد أمينة.
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom" data-sal="slide-up" data-sal-duration="500" data-sal-delay="100">
            <div class="row">
                <div class="col-md-12">
                    <div class="footer-copyright text-center">
                        <span class="copyright-text">© 2022. جميع الحقوق محفوظة <a
                                href="https://rynprogramming.com/">RYN.tech</a> للبرمجيات </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
