<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function index()
    {
        // Logic to retrieve and return admin profile data
        return view('admin.profile');
    }
}
