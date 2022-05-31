<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminCourseClassController extends Controller
{
    /**
     * function index
     *
     * @param Request $request
     * @return
     */
    public function index()
    {
        return view('admin.dashboard.config');
    }
}
