<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\CourseClass;
use Illuminate\Http\Request;

class CourseClassController extends Controller
{
    public function __construct()
    {
        $this->middleware(['role:admin'])->except([
            'index',
            'show',
        ]);
    }

    public function index()
    {
        $myCoursesClass = CourseClass::where('id', 1)->orderBy('id', 'DESC')->Paginate(4);

        $allCoursesClass = CourseClass::orderBy('created_at', 'DESC')->get();
        return view('course_classes.index', [
            'allCoursesClass'   => $allCoursesClass,
            'myCoursesClass'    => $myCoursesClass,
        ]);
    }

    public function create()
    {
        $coursesId = Course::get();

        return view('course_classes.create', [
            'coursesId'         =>  $coursesId,
        ]);
    }

    public function store(Request $request)
    {
        try{
        // Upload Image
        if($request->hasFile('cover_image')) {
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            $imageNameStore = date('Y-m-d_H-i-s').'_'.rand().'.'.$extension;
            $imagePath = $request->file('cover_image')
                                    ->storeAs('images/class', $imageNameStore, 'public');
        }

        $dataToInsert = $request->only([
            'name',
            'small_description',
            'long_description',
            'slug',
            'cover_image',
            'status',
            'price',
            'start_date',
            'end_date',
            'start_time',
            'end_time',
            'location',
            'online',
            'active',
            'course_id',
        ]);

        if($request->hasFile('cover_image')) {
            $dataToInsert['cover_image'] = $imagePath ?? null;
        }

            $insert = CourseClass::create($dataToInsert);

            if(!$insert) {
                return redirect()->route('class-create')->with('error', 'Erro ao criar turma. Tente novamente!');
            }

            return redirect()->route('class-index')->with('success', 'Turma criada com sucesso!');

        } catch (\Throwable $th) {
            $error = config('app.env') === 'production' ? 'Erro ao criar turma!' : $th->getMessage();

            return redirect()->route('class-create')->with('error', $error);
        }
    }

    public function show()
    {
        return view('course_classes.show');
    }

    public function edit(string $slug)
    {
        $courseClass = CourseClass::where('slug', $slug)->first();

        if(!$courseClass) {
            return redirect()->route('class-index')->with('error', 'Curso não encontrado!');
        }

        return view('course_classes.edit', [
            'courseClass' => $courseClass,
        ]);
    }


    public function update(Request $request, $slug)
    {
        $courseClass = CourseClass::where('slug', $slug)->first();
        if(!$courseClass) {
            return redirect()->route('courses-index')->with('error', 'Curso não encontrado!');
        }

        // Upload Image
        if($request->hasFile('conver_image')) {
            $extension = $request->file('conver_image')->getClientOriginalExtension();
            $imageNameStore = date('Y-m-d_H-i-s').'_'.rand().'.'.$extension;
            $imagePath = $request->file('conver_image')
                                    ->storeAs('images/courses', $imageNameStore, 'public');
        }


        $dataToInsert = $request->only([
            'name',
            'small_description',
            'long_description',
            'slug',
            'cover_image',
            'status',
            'price',
            'start_date',
            'end_date',
            'start_time',
            'end_time',
            'location',
            'online',
            'active',
            'course_id',
        ]);

        if($request->hasFile('conver_image')) {
            $dataToInsert['conver_image'] = $imagePath ?? null;
        }

        try{
            $update = $courseClass->update($dataToInsert);

            if(!$update) {
                return redirect()->route('class-edit', $request->slug)->with('error', 'Erro ao atualizar turma. Tente novamente!');
            }
                return redirect()->route('class-index')->with('success', 'Turma atualizado com sucesso!');

            } catch (\Throwable $th) {
                $error = config('app.env') === 'production' ? 'Erro ao atualizar turma!' : $th->getMessage();

                return redirect()->route('class-edit', $request->slug)->with('error', $error);
            }
    }

}
