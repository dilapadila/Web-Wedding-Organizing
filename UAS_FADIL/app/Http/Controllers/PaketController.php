<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vendor;
use App\Models\Paket;
use Illuminate\View\View;

class PaketController extends Controller
{

    public function list(): View
    {
        $data = Paket::all();
        return view('Paket.list', ['data' => $data]);
    }

    public function list_Vendor($id): View
    {
        $data = Paket::where('id_vendor', $id)->get();
        $dataVendor = Vendor::find($id);
        return view('Paket.Vendor', ['data' => $data, 'Vendor' => $dataVendor]);
    }

    public function detail($id)
{
    $data = Paket::find($id);

    if (!$data) {
        abort(404);
    }

    return view('Paket.detail', ['data' => $data]);
}


}
