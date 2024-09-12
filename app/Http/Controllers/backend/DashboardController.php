<?php

namespace App\Http\Controllers\backend;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    function dashboard(){
        return view('backend.pages.dashboard');
    }
}