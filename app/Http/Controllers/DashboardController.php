<?php

namespace App\Http\Controllers;

use index;
use Carbon\Carbon;
use App\Models\History;
use App\Models\Customer;
use App\Models\Equipment;
use Illuminate\Http\Request;
use App\Models\FormBeritaAcara;
use App\Models\ServiceReport;

class DashboardController extends Controller
{
    function index(){
        $customer = Customer::all();
        $troubleshoot = ServiceReport::count();
        $equipment = Equipment::count();
        $survey = FormBeritaAcara::count();
        $survey = FormBeritaAcara::count();
        $now = Carbon::now();
        $month = $now->month;

        $history = History::whereMonth('created_at', $month)->get();
        return view('index',compact('customer','equipment','survey','history','troubleshoot'));
    }
}
