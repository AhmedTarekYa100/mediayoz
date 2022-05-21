<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Http\Requests\StoreClient;
use App\Traits\PhotoTrait;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class ClientController extends Controller
{
    use PhotoTrait;
    public function index(request $request)
    {
        if($request->ajax()) {
            $clients = Client::latest()->get();
            return Datatables::of($clients)
                ->addColumn('action', function ($clients) {
                    return '
                            <button class="btn btn-pill btn-danger-light" data-toggle="modal" data-target="#delete_modal"
                                    data-id="' . $clients->id . '">
                                    <i class="fas fa-trash"></i>
                            </button>
                       ';
                })
                ->editColumn('image', function ($clients) {
                        return '<img alt="image" onclick="window.open(this.src)" class="avatar avatar-lg" src="'.$clients->image.'">';
                })
                ->escapeColumns([])
                ->make(true);
        }else{
            return view('Admin/clients/index');
        }
    }

    public function create()
    {
        return view('Admin/clients.parts.create');
    }

    public function store(StoreClient $request){
        $data = $request->all();
        $data['image'] = $this->saveImage($request->image,'assets/uploads/clients');
        if(Client::create($data))
            return response()->json(['status'=>200]);
        else
            return response()->json(['status'=>405]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function delete(request $request)
    {
        $client = Client::findOrFail($request->id);
        if (file_exists($client->getAttributes()['image'])){
            unlink($client->getAttributes()['image']);
        }
        $client->delete();
        return response(['message'=>'تم الحذف بنجاح','status'=>200],200);
    }
}
