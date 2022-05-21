    <form id="addForm" class="addForm" method="POST" enctype="multipart/form-data" action="{{route('sliders.store')}}">
        @csrf
        <div class="form-group">
            <label for="photo" class="form-control-label">الصورة</label>
            <input type="file" class="dropify" name="photo" accept="image/png, image/gif, image/jpeg,image/jpg"/>
            <span class="form-text text-danger text-center">مسموح بالصيغ الاتية png, gif, jpeg, jpg</span>
        </div>

        <div class="form-group">
            <label for="title" class="form-control-label">العنوان الرئيسي</label>
            <input type="text" class="form-control" name="title">
        </div>

        <div class="form-group">
            <label for="sub_title" class="form-control-label">العنوان الفرعي</label>
            <input type="text" class="form-control" name="sub_title">
        </div>

        <div class="form-group">
            <label for="button_text" class="form-control-label">نص الزر</label>
            <input type="text" class="form-control" name="button_text">
        </div>

        <div class="form-group">
            <label for="button_link" class="form-control-label">لينك الزر</label>
            <input type="text" class="form-control" name="button_link">
        </div>

        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
            <button type="submit" class="btn btn-primary" id="addButton">اضافة</button>
        </div>
    </form>
<script>
    $('.dropify').dropify()
</script>
