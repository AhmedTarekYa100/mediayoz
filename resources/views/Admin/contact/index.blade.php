@extends('Admin/layouts/master')
@section('title')
    {{($setting->title) ?? ''}} | طلبات الخدمات
@endsection
@section('page_name')
    طلبات الخدمات
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">طلبات الخدمات الواردة من صفحة تواصل معنا</h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <!--begin::Table-->
                        <table class="table table-striped table-bordered text-nowrap w-100" id="dataTable">
                            <thead>
                            <tr class="fw-bolder text-muted bg-light">
                                <th class="min-w-25px">#</th>
                                <th class="min-w-50px">الاسم</th>
                                <th class="min-w-125px">الهاتف</th>
                                <th class="min-w-125px">الايميل</th>
                                <th class="min-w-125px">الخدمة</th>
{{--                                <th class="min-w-125px">الرسالة</th>--}}
                                <th class="min-w-125px">الحالة</th>
                                <th class="min-w-125px">وقت الارسال</th>
                                <th class="min-w-50px rounded-end">العمليات</th>
                            </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- MODAL -->
        <div class="modal fade" id="delete_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">حذف بيانات</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <input id="delete_id" name="id" type="hidden">
                        <p>هل انت متأكد من حذف بيانات <span id="title" class="text-danger"></span>؟</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal" id="dismiss_delete_modal">تراجع</button>
                        <button type="button" class="btn btn-danger" id="delete_btn">احذف !</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- MODAL CLOSED -->

        <div class="modal fade" id="editOrCreate" data-backdrop="static" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="example-Modal3">تغيير حالة الطلب</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body" id="modal-body">

                    </div>
                </div>
            </div>
        </div>

    </div>
    @include('Admin/layouts/myAjaxHelper')
@endsection
@section('ajaxCalls')
    <script>
        var columns = [
            {data: 'id', name: 'id'},
            {data: 'name', name: 'name'},
            {data: 'phone', name: 'phone'},
            {data: 'email', name: 'email'},
            {data: 'service_id', name: 'service_id'},
            // {data: 'message', name: 'message'},
            {data: 'status', name: 'status'},
            {data: 'created_at', name: 'created_at'},
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ]
        showData('{{route('contact.index')}}',columns);
        deleteScript('{{route('delete_contact')}}');


            $(document).on('click', '.statusBtn', function () {
                var id = $(this).data('id')
                var url = "{{route('changeStatus',':id')}}";
                url = url.replace(':id', id)
                $('#modal-body').html(loader)
                $('#editOrCreate').modal('show')

                setTimeout(function () {
                    $('#modal-body').load(url)
                }, 500)
            });
        $(document).on('submit', 'Form#updateForm', function (e) {
            e.preventDefault();
            var formData = new FormData(this);
            var url = $('#updateForm').attr('action');
            if ($("input[name='status']:checked").val()) {
                $.ajax({
                    url: url,
                    type: 'POST',
                    data: formData,
                    beforeSend: function () {
                        $('#updateButton').html('<span class="spinner-border spinner-border-sm mr-2" ' +
                            ' ></span> <span style="margin-left: 4px;">انتظر ..</span>').attr('disabled', true);
                    },
                    success: function (data) {
                        $('#updateButton').html(`تعديل`).attr('disabled', false);
                        if (data.status == 200) {
                            $('#dataTable').DataTable().ajax.reload();
                            toastr.success('تم التعديل بنجاح');
                        } else
                            toastr.error('هناك خطأ ما ..');

                        $('#editOrCreate').modal('hide')
                    },
                    error: function (data) {
                        if (data.status === 500) {
                            toastr.error('هناك خطأ ما ..');
                        } else if (data.status === 422) {
                            var errors = $.parseJSON(data.responseText);
                            $.each(errors, function (key, value) {
                                if ($.isPlainObject(value)) {
                                    $.each(value, function (key, value) {
                                        toastr.error(value, 'خطأ');
                                    });
                                }
                            });
                        } else
                            toastr.error('هناك خطأ ما ..');
                        $('#updateButton').html(`تعديل`).attr('disabled', false);
                    },//end error method

                    cache: false,
                    contentType: false,
                    processData: false
                });
            }
            else
                toastr.error('يرجي اختيار حالة الطلب');

        });

    </script>
@endsection
