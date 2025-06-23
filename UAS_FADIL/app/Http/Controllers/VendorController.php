<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vendor;
use Illuminate\View\View; 

class VendorController extends Controller
{
    public function list(): View 
    { 
        $data = Vendor::all(); 
        return view('Vendor.list', [ 'data' => $data ]); 
    } 

}