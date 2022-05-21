<form id="updateForm" method="POST" enctype="multipart/form-data" action="{{route('contact.update',$contact->id)}}">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-6">
            <div class="form-group">
                <label for="title" class="form-control-label">الاسم</label>
                <input type="text" disabled class="form-control" value="{{$contact->name}}">
            </div>
        </div>
        <div class="col-6">
            <div class="form-group">
                <label for="title" class="form-control-label">الهاتف</label>
                <input type="text" disabled class="form-control" value="{{$contact->phone}}">
            </div>
        </div>
        <div class="col-6">
            <div class="form-group">
                <label for="title" class="form-control-label">الايميل</label>
                <input type="text" disabled class="form-control" value="{{$contact->email}}">
            </div>
        </div>
        <div class="col-6">
            <div class="form-group">
                <label for="title" class="form-control-label">الخدمة</label>
                <input type="text" disabled class="form-control" value="{{$contact->service->title}}">
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <label for="desc" class="form-control-label">تفاصيل الطلب</label>
                <textarea rows="3" class="form-control" readonly>{{$contact->message}}</textarea>
            </div>
        </div>
    </div>
    @if($contact->status != 'ended')
        <div class="row mb-5 mt-5 text-center">

            @if($contact->status != 'accepted')
            <div class="col-4">
                    <label class="custom-control custom-radio">
                        <input type="radio" class="custom-control-input"
                               name="status"
                               value="accepted">
                        <span class="custom-control-label">قبول</span>
                    </label>
                </div>
            @endif

                @if($contact->status != 'refused')
                <div class="col-4">
                    <label class="custom-control custom-radio">
                        <input type="radio" class="custom-control-input"
                               name="status"
                               value="refused">
                        <span class="custom-control-label">رفض</span>
                    </label>
                </div>
                @endif
                @if($contact->status != 'refused')
                <div class="col-4">
                    <label class="custom-control custom-radio">
                        <input type="radio" class="custom-control-input"
                               name="status"
                               value="ended">
                        <span class="custom-control-label">انهاء</span>
                    </label>
                </div>
                @endif
            </div>
    @endif

    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
        @if($contact->status != 'ended')
        <button type="submit" class="btn btn-success" id="updateButton">تأكيد</button>
        @endif
    </div>
</form>

