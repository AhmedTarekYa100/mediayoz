<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAdmin;
use App\Models\Admin;
use App\Traits\PhotoTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\DataTables;

class AdminController extends Controller
{
    use PhotoTrait;
    public function index(request $request)
    {
        if($request->ajax()) {
            $admins = Admin::latest()->get();
            return Datatables::of($admins)
                ->addColumn('action', function ($admins) {
                    return '
                            <button type="button" data-id="' . $admins->id . '" class="btn btn-pill btn-info-light editBtn"><i class="fa fa-edit"></i></button>
                            <button class="btn btn-pill btn-danger-light" data-toggle="modal" data-target="#delete_modal"
                                    data-id="' . $admins->id . '" data-title="' . $admins->name . '">
                                    <i class="fas fa-trash"></i>
                            </button>
                       ';
                })
                ->editColumn('image', function ($admins) {
                    return '
                    <img alt="image" onclick="window.open(this.src)" class="avatar avatar-md rounded-circle" src="'.get_user_file($admins->image).'">
                    ';
                })
                ->escapeColumns([])
                ->make(true);
        }else{
            return view('Admin/admin/index');
        }
    }


    public function delete(Request $request)
    {
        $admin = Admin::where('id', $request->id)->first();
        if ($admin == auth()->guard('admin')->user()) {
            return response(['message'=>"لا يمكن حذف المشرف المسجل به !",'status'=>501],200);
        } else {
            if (file_exists($admin->image)) {
                unlink($admin->image);
            }
            $admin->delete();
            return response(['message'=>'تم الحذف بنجاح','status'=>200],200);
        }
    }

    public function myProfile()
    {
        $admin = auth()->guard('admin')->user();
        return view('Admin/admin/profile',compact('admin'));
    }//end fun



    public function create(){
        return view('Admin/admin.parts.create');
    }

    public function store(StoreAdmin $request)
    {
            $inputs = $request->all();
            if($request->has('image')){
                $inputs['image'] = $this->saveImage($request->image,'assets/uploads/admins');
            }
            $inputs['password'] = Hash::make($request->password);
            if(Admin::create($inputs))
                return response()->json(['status'=>200]);
            else
                return response()->json(['status'=>405]);
    }

    public function edit(Admin $admin){
        return view('Admin/admin.parts.edit',compact('admin'));
    }

    public function update(StoreAdmin $request,$id)
    {
        $inputs = $request->except('id');

        $admin = Admin::findOrFail($id);

        if ($request->has('image')) {
            if (file_exists($admin->image)) {
                unlink($admin->image);
            }
            $inputs['image'] = $this->saveImage($request->image, 'assets/uploads/admins');
        }
        if ($request->has('password') && $request->password != null)
            $inputs['password'] = Hash::make($request->password);
        else
            unset($inputs['password']);

        if ($admin->update($inputs))
            return response()->json(['status' => 200]);
        else
            return response()->json(['status' => 405]);
    }
}//end class
