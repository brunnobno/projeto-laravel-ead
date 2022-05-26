<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\CourseClass;
use Illuminate\Http\Request;
use Ramsey\Uuid\Type\Integer;

class CoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courseClasses = CourseClass::active()->orderBy('id', 'DESC')
            ->with('course')
            ->whereHas('course', function ($query) {
                $query->where('status', Course::STATUS_ACTIVE);
            })
            ->Paginate(8);

        return view('courses.index', [
            'courseClasses' => $courseClasses,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('courses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data = $request->validate([
            'title'                 => 'required|string|min:10|max:255',
            'slug'                  => 'required|string|min:5|max:255',
            'long_description'      => 'nullable|string|min:10|max:2000',
            // 'banner_source_type'    => 'nullable|string',
            'banner_src'            => 'nullable',
            'price'                 => 'nullable|numeric',
            // 'discount'              => 'nullable|integer',
            // 'discount_type'         => 'nullable|string',
            'will_start_in'         => 'nullable|date:Y-m-d',
            'will_end_in'           => 'nullable|date:Y-m-d',
            'price_card'            => 'nullable|string',
            'day_and_time'          => 'nullable|string',
            'teacher'               => 'nullable|string',
            'status_course'         => 'nullable|string'
        ]);

        try{
        // Upload Image
        if($request->hasFile('banner_src')) {
            $extension = $request->file('banner_src')->getClientOriginalExtension();
            $imageNameStore = date('Y-m-d_H-i-s').'_'.rand().'.'.$extension;
            $imagePath = $request->file('banner_src')
                                    ->storeAs('images/courses', $imageNameStore, 'public');
        }

        $dataToInsert = $request->only([
            'title',
            'slug',
            'long_description',
            // 'banner_source_type,
            'banner_src',
            'price',
            // 'discount,
            // 'discount_type,
            'will_start_in',
            'will_end_in',
            'price_card',
            'day_and_time',
            'teacher',
            'status_course',
        ]);

        if($request->hasFile('banner_src')) {
            $dataToInsert['banner_src'] = $imagePath ?? null;
        }

            $insert = Course::create($dataToInsert);

            if(!$insert) {
                return redirect()->route('course-create')->with('error', 'Erro ao criar curso. Tente novamente!');
            }

            return redirect()->route('courses-index')->with('success', 'Curso criado com sucesso!');

        } catch (\Throwable $th) {
            $error = config('app.env') === 'production' ? 'Erro ao criar curso!' : $th->getMessage();

            return redirect()->route('course-create')->with('error', $error);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function show(string $slug)
    {
        $course = Course::where('slug', $slug)->with('classes')->first();

        if(!$course) {
            return redirect()->route('courses-index')->with('error', 'Curso não encontrado!');
        }

        return view('courses.show', [
            'course' => $course,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit(string $slug)
    {
        $course = Course::where('slug', $slug)->first();

        if(!$course) {
            return redirect()->route('courses-index')->with('error', 'Curso não encontrado!');
        }

        return view('courses.edit', [
            'course' => $course,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        $course = Course::where('slug', $slug)->first();
        if(!$course) {
            return redirect()->route('courses-index')->with('error', 'Curso não encontrado!');
        }

        // Upload Image
        if($request->hasFile('banner_src')) {
            $extension = $request->file('banner_src')->getClientOriginalExtension();
            $imageNameStore = date('Y-m-d_H-i-s').'_'.rand().'.'.$extension;
            $imagePath = $request->file('banner_src')
                                    ->storeAs('images/courses', $imageNameStore, 'public');
        }

        $request->validate([
            'title'                 => 'required|string|min:5|max:255',
            // 'slug'                  => 'required|string|min:5|max:255',
            'long_description'      => 'nullable|string|min:10|max:2000',
            'banner_source_type'    => 'nullable|string',
            'banner_src'            => 'nullable',
            'price'                 => 'nullable|numeric',
            'discount'              => 'nullable|integer',
            'discount_type'         => 'nullable|string',
            'will_start_in'         => 'nullable|date:Y-m-d',
            'will_end_in'           => 'nullable|date:Y-m-d',
        ]);

        $dataToInsert = $request->only([
            'title',
            'long_description',
            'banner_source_type',
            'price',
            'discount',
            'discount_type',
            'will_start_in',
            'will_end_in',
        ]);

        if($request->hasFile('banner_src')) {
            $dataToInsert['banner_src'] = $imagePath ?? null;
        }

        try{
            $update = $course->update($dataToInsert);

            if(!$update) {
                return redirect()->route('course-edit', $request->slug)->with('error', 'Erro ao atualizar curso. Tente novamente!');
            }
                return redirect()->route('courses-index')->with('success', 'Curso atualizado com sucesso!');

            } catch (\Throwable $th) {
                $error = config('app.env') === 'production' ? 'Erro ao atualizar curso!' : $th->getMessage();

                return redirect()->route('course-edit', $request->slug)->with('error', $error);
            }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {
        //
    }
}
