<form id="addForm" class="addForm" method="POST" enctype="multipart/form-data" action="{{route('services.store')}}">
    @csrf

    <div class="form-group">
        <label for="name" class="form-control-label">الصورة</label>
        <input type="file" class="dropify" name="image" data-default-file="{{asset('assets/uploads/empty.png')}}"
               accept="image/png,image/svg,image/webp, image/gif, image/jpeg,image/jpg"/>
        <span class="form-text text-danger text-center">مسموح فقط بالصيغ التالية : png, gif, jpeg, jpg,webp</span>
    </div>
    <div class="row">
        <div class="col-6">
            <div class="form-group">
                <label for="title" class="form-control-label">العنوان</label>
                <input type="text" class="form-control" name="title">
            </div>
        </div>
        <div class="col-6">
            <div class="form-group">
                <label for="sub_title" class="form-control-label">العنوان الفرعي</label>
                <input type="text" class="form-control" name="sub_title">
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <label for="desc" class="form-control-label">وصف الخدمة</label>
                <textarea rows="3" class="form-control" name="desc" placeholder="شرح ووصف ما يتم توفيره في الخدمة"></textarea>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
        <button type="submit" class="btn btn-primary" id="addButton">اضافة</button>
    </div>
</form>
<script>
    $('.dropify').dropify()
</script>
