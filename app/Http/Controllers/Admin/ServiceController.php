<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Service;

class ServiceController extends Controller
{
    public function index() {
        $services = Service::all();
        return view('admin.manage_services',[
            'title' => 'Manage Company Service',
            'storeRoute' => 'admin.login',
            'updateRoute' => 'admin.password.request',
        ])->with('services', $services);
    }
}
