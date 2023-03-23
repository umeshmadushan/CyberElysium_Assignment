<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use domain\Facades\StudentFacade;

class HomeController extends Controller
{
    public function index()
    {
        $response ['students'] = StudentFacade::allActive();
        return view('pages.home.index')->with($response);
    }
}
