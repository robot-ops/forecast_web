<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class UserListController extends Controller
{
    //
    public function index()
    {
        // Logic to retrieve and return co-firing data
        $list = Admin::all();
        return view('admin.userlist', compact('list'));
    }
}
