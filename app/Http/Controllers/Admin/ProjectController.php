<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProject;
use App\Models\Project;
use App\Models\Service;
use App\Traits\PhotoTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Yajra\DataTables\DataTables;

class ProjectController extends Controller
{
    use PhotoTrait;
    public function index(request $request)
    {
        if($request->ajax()) {
            $project = Project::latest()->get();
            return Datatables::of($project)
                ->addColumn('action', function ($project) {
                    return '
                            <button class="btn btn-pill btn-danger-light" data-toggle="modal" data-target="#delete_modal"
                                    data-id="' . $project->id . '">
                                    <i class="fas fa-trash"></i>
                            </button>
                       ';
                })
                ->editColumn('image', function ($project) {
                    if ($project->type == 'image')
                        return '<img alt="image" onclick="window.open(this.src)" class="avatar avatar-md rounded-circle" src="'.$project->image.'">';
                    elseif ($project->type == 'video')
                        return '<a class="btn btn-primary" target="_blank" href="'.$project->image.'">تشغيل الفيديو <i class="fa fa-play"></i> </a>';
                })
                ->editColumn('service_id', function ($project) {
                    return ($project->service->title) ?? '';
                })
                ->escapeColumns([])
                ->make(true);
        }else{
            return view('Admin/projects/index');
        }
    }

    public function create()
    {
        $services = Service::select('id','title')->get();
        return view('Admin/projects.parts.create',compact('services'));
    }

    public function store(StoreProject $request){
        $data = $request->all();
        $type = mime_content_type(''.$request->image);
        if(strstr($type, "video/")){
            // this code for video
            $data['image'] = $this->saveImage($request->image,'assets/uploads/projects','video');
            $data['type']  = 'video';
        }else if(strstr($type, "image/")){
            // this code for image
            $data['image'] = $this->saveImage($request->image,'assets/uploads/projects');
            $data['type']  = 'image';
        }
        if(Project::create($data))
            return response()->json(['status'=>200]);
        else
            return response()->json(['status'=>405]);
    }


    public function delete(request $request)
    {
        $project = Project::findOrFail($request->id);
        if (file_exists($project->getAttributes()['image'])) {
            unlink($project->getAttributes()['image']);
        }
        $project->delete();
        return response(['message'=>'تم الحذف بنجاح','status'=>200],200);
    }


}
