<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Auth;

class AdminController extends Controller
{
    public function index(){
        return Inertia::render('Admin');
    }
}
