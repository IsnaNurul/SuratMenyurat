<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportController extends Controller
{
    //
    public function showSm() {
        return view('reportsm');
    }

    public function showSk() {
        return view('reportsk');
    }
}
