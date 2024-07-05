<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProcessPageController extends Controller
{
    public function process()
    {
        return view('TimeProcess.index');
    }
}
