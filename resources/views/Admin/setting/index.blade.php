@extends('Admin/layouts/master')
@section('title') {{$setting->title}} | بيانات الشركة @endsection
@section('page_name') بيانات الشركة @endsection
@section('content')
    @if(count($errors) > 0 )
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <ul class="p-0 m-0" style="list-style: none;">
                @foreach($errors->all() as $error)
                    <li><i class="fa fa-times-circle"></i> {{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="row">
        <div class="col-md-12">
            <form action="{{route('settingUpdate')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-header">
                        <h3 class="mb-0 card-title"> بيانات {{($setting->title) ?? ''}}</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">واتساب</label>
                                    <input type="text" class="form-control" name="whatsapp"
                                           placeholder="هاتف واتساب" value="{{($setting->whatsapp) ?? ''}}">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">رابط يويتوب</label>
                                    <input type="text" class="form-control" name="youtube"
                                           placeholder="https://www.youtube.com/youtube_id" value="{{($setting->youtube) ?? ''}}">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">بريد الكتروني</label>
                                    <input type="text" class="form-control" name="email"
                                           placeholder="email@email.com" value="{{($setting->email) ?? ''}}">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">هاتف تواصل اول</label>
                                    <input type="text" class="form-control" name="phone1"
                                           placeholder="ادخل رقم هاتف" value="{{($setting->phone1) ?? ''}}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">رابط فيسبوك</label>
                                    <input type="text" class="form-control" name="facebook"
                                           placeholder="https://www.facebook.com/your_id"
                                           value="{{($setting->facebook) ?? ''}}">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">رابط انستجرام</label>
                                    <input type="text" class="form-control" name="insta"
                                           placeholder="https://www.instagram.com/your_id"
                                           value="{{($setting->insta) ?? ''}}">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">رابط لينكدان</label>
                                    <input type="text" class="form-control" name="linkedin"
                                           placeholder="https://www.linkedin.com/your_id" value="{{($setting->linkedin) ?? ''}}">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">هاتف تواصل ثاني</label>
                                    <input type="text" class="form-control" name="phone2"
                                           placeholder="رقم هاتف اخر" value="{{($setting->phone2) ?? ''}}">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label">اسم الشركة</label>
                                    <input type="text" class="form-control" name="title"
                                           placeholder="اسم المؤسسة او الشركة" value="{{($setting->title) ?? ''}}">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label">مواعيد العمل</label>
                                    <input type="text" class="form-control" name="open_at"
                                           placeholder="مثال : يوميا من 10 ص الي 8 م ما عدا الجمعة" value="{{($setting->open_at) ?? ''}}">
                                </div>
                            </div>
                            <div class="col-md-12 ">
                                <div class="form-group">
                                    <label class="form-label">اللوجو</label>
                                    <input type="file" class="dropify" name="logo" data-default-file="{{asset($setting->logo)}}" accept="image/png, image/gif, image/jpeg,image/jpg"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-left">
                        <button type="submit" class="btn btn-primary">تحديث</button>
                    </div>
                </div>
            </form>
        </div>
    </div>




@endsection
