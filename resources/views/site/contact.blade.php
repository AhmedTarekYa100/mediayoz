@extends('site.layouts.master')
@section('title')
    {{($setting->title) ?? 'Company'}} | تواصل معنا
@endsection
@section('content')
   <!--=====================================-->
   <!--=       Breadcrumb Area Start       =-->
   <!--=====================================-->
   <div class="breadcrum-area" dir='rtl'>
      <div class="container">
         <div class="breadcrumb">
            <ul class="list-unstyled">
               <li><a href="/">الرئيسية</a></li>
               <li class="active">تواصل معنا</li>
            </ul>
            <h1 class="title h2">تواصل معنا</h1>
         </div>
      </div>
      <ul class="shape-group-8 list-unstyled">
         <li class="shape shape-1" data-sal="slide-right" data-sal-duration="500" data-sal-delay="100">
            <img src="{{asset('assets/site')}}/media/others/bubble-9.png" alt="Bubble">
         </li>
         <li class="shape shape-2" data-sal="slide-left" data-sal-duration="500" data-sal-delay="200">
            <img src="{{asset('assets/site')}}/media/others/bubble-17.png" alt="Bubble">
         </li>
         <li class="shape shape-3" data-sal="slide-up" data-sal-duration="500" data-sal-delay="300">
            <img src="{{asset('assets/site')}}/media/others/line-4.png" alt="Line">
         </li>
      </ul>
   </div>
   <!--=====================================-->
   <!--=       Contact  Area Start        =-->
   <!--=====================================-->
   <section class="section section-padding" dir='rtl'>
      <div class="container">
         <div class="row">
            <div class="col-xl-5 col-lg-6">
               <div class="contact-form-box shadow-box mb--30">
                  <h3 class="title">سنكون سعداء بتواصلك معنا</h3>
                  <form id="contactForm" action="{{route('postContact')}}" method="POST">
                      @csrf
                     <div class="form-group">
                        <label>الاسم</label>
                        <input type="text" class="form-control" id="fullname" name="name" placeholder="الإسم الكامل">
                     </div>
                     <div class="form-group">
                        <label> رقم الهاتف </label>
                        <input type="number" class="form-control" id="phone" name="phone" placeholder="رقم الهاتف" >
                     </div>
                      <div class="form-group">
                        <label> البريد الالكتروني </label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="بريد تواصل" >
                     </div>
                      @if(count($services))
                     <div class="form-group row">
                        <label for="text2" class="col-4 col-form-label">  نوع الخدمة </label>
                        <div class="col-12">
                           <select name="service_id" id="service_type" class="form-control" >
                               @foreach($services as $service)
                              <option value="{{$service->id}}" class=""> {{$service->title}} </option>
                               @endforeach
                           </select>
                        </div>
                     </div>
                      @endif
                     <div class="form-group mb--40">
                        <label>كيف يمكننا مساعدتك؟</label>
                        <textarea name="message" id="contact-message" class="form-control textarea"
                           cols="30" rows="4"></textarea>
                     </div>
                     <div class="form-group">
                        <button type="submit" id="sendBtn" class="axil-btn btn-fill-primary btn-fluid btn-primary" name="submit-btn">  أرسل رسالتك الآن  </button>
                     </div>
                  </form>
                  <p style="margin: 0; margin-bottom: 15px;text-align:center;">
                     أو
                  </p>
                  <a href="https://wa.me/+212669420404" class="axil-btn btn-fill-primary btn-fluid btn-primary" style="border: 0;background:#25d366;">
                  تواصل معنا عبر الواتساب
                  </a>
               </div>
            </div>
            <div class="col-xl-5 col-lg-6 offset-xl-1">
               <div class="contact-info mb--100 mb_md--30 mt_md--0 mt--150">
                  <h4 class="title">عبر الهاتف</h4>
                  <p>{{($setting->open_at) ?? ''}}</p>
                  <h4 class="phone-number" ><a href="tel:{{($setting->phone1) ?? ''}}" >{{($setting->phone1) ?? ''}}</a></h4>
                  <h4 class="phone-number" ><a href="tel:{{($setting->phone2) ?? ''}}" >{{($setting->phone2) ?? ''}}</a></h4>
               </div>
               <div class="contact-info mb--30">
                  <h4 class="title">البريد الإلكتروني</h4>
                  <p>سيتم الرد على البريد الإلكتروني في اقل من 24 ساعة.</p>
                  <h4 class="phone-number"><a href="mailto:{{($setting->email) ?? '#'}}"><span class="__cf_email__">اضغط هنا</span></a></h4>
               </div>
            </div>
         </div>
      </div>
      <ul class="list-unstyled shape-group-12">
         <li class="shape shape-1"><img src="{{asset('assets/site')}}/media/others/bubble-2.png" alt="Bubble"></li>
         <li class="shape shape-2"><img src="{{asset('assets/site')}}/media/others/bubble-1.png" alt="Bubble"></li>
         <li class="shape shape-3"><img src="{{asset('assets/site')}}/media/others/circle-3.png" alt="Circle"></li>
      </ul>
   </section>

<style>

input, .form-control {
    padding: 15px;
    line-height: 18px !important;
    height: initial;
}

.col-form-label {
    margin-bottom: 1px !important;
}

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

.info-call h5 {
    margin: 0;
    margin-bottom: 7px;
}

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

@endsection
@section('site_js')
<script>
    $("form#contactForm").submit(function(e) {
        e.preventDefault();
        var formData = new FormData(this);
        var url = $('#contactForm').attr('action');
        $.ajax({
            url:url,
            type: 'POST',
            data: formData,
            beforeSend: function(){
                $('#sendBtn').html(' <span style="margin-left: 4px;color: white"> ... لحظة </span><span class="spinner-border spinner-border-sm text-light" ' + ' ></span>');
            },
            complete: function(){


            },
            success: function (data) {
                if (data.status == 200){
                    toastr.success('شكرا لتواصلك سنقوم بالرد عليك في اقرب وقت');
                    $('#contactForm')[0].reset();
                    $('#sendBtn').html('أرسل رسالتك الآن');
                }else {
                    toastr.warning('Error');
                }
            },
            error: function (data) {
                if (data.status == 500) {
                    $('#sendBtn').html('أرسل رسالتك الآن');
                    toastr.error('خطأ غير متوقع يرجي اعادة المحاولة');
                }
                else if (data.status == 422) {
                    $('#sendBtn').html('أرسل رسالتك الآن');
                    var errors = $.parseJSON(data.responseText);
                    $.each(errors, function (key, value) {
                        if ($.isPlainObject(value)) {
                            $.each(value, function (key, value) {
                                toastr.error(value,'خطأ');
                            });
                        }
                    });
                }
            },//end error method

            cache: false,
            contentType: false,
            processData: false
        });
    });
</script>

@endsection
