<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\storeContact;
use App\Models\Client;
use App\Models\ContactUs;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class HomeController extends Controller
{
    public function index(){
        $services = Service::inRandomOrder()->select('id','title','desc')->paginate(3);
        $clients  = Client::all();
        return view('site/index',compact('services','clients'));
    }

    public function privacy(){
        return view('site/privacy');
    }

    public function terms(){
        return view('site/terms');
    }

    public function services(){
        $services = Service::whereHas('projects')->get();
        return view('site/services',compact('services'));
    }

    public function service($id){
        $service = Service::findOrFail(Crypt::decrypt($id));
        return view('site/service',compact('service'));
    }

    public function contact(){
        $services = Service::latest()->select('id','title')->get();
        return view('site/contact',compact('services'));
    }

    public function postContact(storeContact $request){
        $data = $request->all();
        $data['status'] = 'new';
        ContactUs::create($data);
        return response()->json(['status' => 200]);
    }
}
