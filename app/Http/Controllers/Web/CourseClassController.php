<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\CourseClass;
use Illuminate\Http\Request;

class CourseClassController extends Controller
{
    public function index()
    {
        $courses = CourseClass::where('id', 1)->orderBy('id', 'DESC')->Paginate(10);
              return view('course_classes.index', ['courses' => $courses, ]);

    }

    public function create()
    {
        return view('course_classes.create');
    }

    public function store()
    {
        //
    }

    public function show()
    {
        return view('course_classes.show');
    }

    public function edit()
    {
        return view('course_classes.edit');
    }


    public function update()
    {
        //
    }

}
