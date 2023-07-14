<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $title="Pets Care - Bảng điều khiển";
        return view('pages.admin.dashboard', compact('title'));
    }
}
