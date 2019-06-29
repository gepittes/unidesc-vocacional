<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardAdmController extends Controller
{
    public function index()
    {
        $title = 'Dashboard | Admin';

        return view('admin.dashboard', compact('title'));

    }
}
