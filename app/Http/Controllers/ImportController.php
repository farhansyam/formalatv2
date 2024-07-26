<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\EquipmentImport;
use Maatwebsite\Excel\Facades\Excel;

class ImportController extends Controller
{
    public function import(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:xls,xlsx',
        ]);

        Excel::import(new EquipmentImport, $request->file('file'));

        return back()->with('success', 'All good!');
    }

    public function showForm()
    {
        return view('equipment.import');
    }

}
