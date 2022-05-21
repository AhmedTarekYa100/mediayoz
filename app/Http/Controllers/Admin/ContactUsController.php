<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\SendNotification;
use App\Models\ContactUs;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Yajra\DataTables\DataTables;

class ContactUsController extends Controller
{
    public function index(request $request)
    {
        if($request->ajax()) {
            $contact = ContactUs::orderBy('id','DESC')->get();
            return Datatables::of($contact)
                ->addColumn('action', function ($contact) {
                    return '
                            <button type="button" data-id="' . $contact->id . '" class="btn btn-pill btn-info-light statusBtn"><i class="fas fa-edit"></i> تعديل</button>
                            <button class="btn btn-pill btn-danger-light" data-toggle="modal" data-target="#delete_modal"
                                    data-id="' . $contact->id . '" data-title="' . $contact->name . '"><i class="fas fa-trash"></i> حذف</button>
                       ';
                })
                ->editColumn('created_at', function ($contact) {
                    return $contact->created_at->diffForHumans();
                })
                ->editColumn('service_id', function ($contact) {
                    return ($contact->service->title) ?? 'تم حذف الخدمة';
                })
                ->editColumn('phone', function ($contact) {
                    return '<a href="tel:'.$contact->phone.'">'.$contact->phone.'</a>';
                })
                ->editColumn('email', function ($contact) {
                    return '<a href="mailto:'.$contact->email.'">'.$contact->email.'</a>';
                })
                ->editColumn('status', function ($contact) {
                    $text = null;
                    if ($contact->status == 'new')
                        $text = '<span class="badge badge-success">جديد</span>';
                    elseif($contact->status == 'accepted')
                        $text = '<span class="badge badge-primary">مقبول</span>';
                    elseif($contact->status == 'refused')
                        $text = '<span class="badge badge-danger">مرفوض</span>';
                    elseif($contact->status == 'ended')
                        $text = '<span class="badge badge-secondary">تم انهاءه</span>';

                    return $text;
                })
                ->escapeColumns([])
                ->make(true);
        }else{
            return view('Admin/contact/index');
        }
    }

    public function delete(request $request)
    {
        ContactUs::find($request->id)->delete();
        return response(['message'=>'تمت عملية الحذف بنجاح','status'=>200],200);
    }

    public function changeStatus($id){
        $contact = ContactUs::find($id);
        return view('Admin.contact.edit',compact('contact'));
    }

    public function contactUpdate(request $request,$id){
        $contact = ContactUs::find($id);
        if ($contact->update($request->only('status'))){
            Mail::to($contact->email)->send(new SendNotification($contact));
            return response()->json(['status' => 200]);
        }
        else
            return response()->json(['status' => 405]);
    }
}
