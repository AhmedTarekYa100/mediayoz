    <form id="updateForm" method="POST" enctype="multipart/form-data" action="{{route('sliders.update',$slider->id)}}" >
    @csrf
        @method('PUT')
        <input type="hidden" name="id" value="{{$slider->id}}">
        <div class="form-group">
            <label for="photo" class="form-control-label">الصورة</label>
            <input type="file" class="dropify" name="photo" accept="image/png, image/gif, image/jpeg,image/jpg" data-default-file="{{getFile($slider->photo)}}"/>
            <span class="form-text text-danger text-center">مسموح بالصيغ الاتية  png, gif, jpeg, jpg</span>
        </div>

        <div class="form-group">
            <label for="title" class="form-control-label">العنوان الرئيسي</label>
            <input type="text" class="form-control" name="title" value="{{$slider->title}}">
        </div>

        <div class="form-group">
            <label for="sub_title" class="form-control-label">العنوان الفرعي</label>
            <input type="text" class="form-control" name="sub_title" value="{{$slider->sub_title}}">
        </div>

        <div class="form-group">
            <label for="button_text" class="form-control-label">نص الزر</label>
            <input type="text" class="form-control" name="button_text" value="{{$slider->button_text}}">
        </div>

        <div class="form-group">
            <label for="button_link" class="form-control-label">لينك الزر</label>
            <input type="text" class="form-control" name="button_link" value="{{$slider->button_link}}">
        </div>

        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
            <button type="submit" class="btn btn-success" id="updateButton">تعديل</button>
        </div>
    </form>
<script>
    $('.dropify').dropify()
</script>
