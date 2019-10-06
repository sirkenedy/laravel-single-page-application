<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Service;

class ServiceController extends Controller
{
    protected $rules =
    [
        'service' => 'required|min:2|max:32|regex:/^[a-z ,.\'-]+$/i',
        'icon' => 'required|min:4|max:50|regex:/^[a-z ,.\'-]+$/i',
        'description' => 'required|min:2|max:128|regex:/^[a-z ,.\'-]+$/i'
    ];

    public function index() {
        $services = Service::all();
        return view('admin.manage_services',[
            'title' => 'Manage Company Service',
            'storeRoute' => 'admin.login',
            'updateRoute' => 'admin.password.request',
        ])->with('services', $services);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make(Input::all(), $this->rules);
        if ($validator->fails()) {
            return Response::json(array('errors' => $validator->getMessageBag()->toArray()));
        } else {
            $service = Service::findOrFail($id);
            $service->image = $request->icon;
            $service->category = $request->service;
            $service->description = $request->description;
            $service->save();
            return \response()->json($service);
        }
    }
    public function store(Request $request)
    {
        $validator = Validator::make(Input::all(), $this->rules);
        if ($validator->fails()) {
            return Response::json(array('errors' => $validator->getMessageBag()->toArray()));
            // $err = {'yse',123};
            return response()->json($err);
        } else {
            $service = new Service();
            $service->image = $request->icon;
            $service->category = $request->service;
            $service->description = $request->description;
            $service->save();
            return response()->json($service);
        }
    }

}
