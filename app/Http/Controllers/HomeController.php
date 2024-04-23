<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Report\Xml\Project;

class HomeController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function create()
    {
        return view('tables.index');
    }

    public function indexAbout()
    {
        return view('tables.index');
    }
}
