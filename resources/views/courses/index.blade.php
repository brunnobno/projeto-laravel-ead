@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-12 col-md-10">
        <h4 class="text-dark"><i class="fas fa-user-graduate"></i> CURSOS</h4>
    </div>
    @role('admin')
        <div class="col-12 col-md-2">
            <div class="row justify-content-end m-0">
                <a href="{{ route('course-create') }}" class="btn btn-primary btn-sm text-right">+ Criar curso</a>
            </div>
        </div>
    @endrole
</div>

<div class="row">
    @foreach ($courses as $course)
    <div class="col-12 col-md-4">
        <div class="card mb-3 shadow-sm bg-body rounded" style="width: 100%;">
                <img class="thumbnail-course" src="{{ $course->banner_src ? asset('storage/'.$course->banner_src) : asset('images/curso-sem-imagem.png') }}"
                    class="card-img-top" style="height: 150px" alt="{{ $course->title }} - Image">
            <div class="card-body">
                <h6 class="card-title">{{ $course->title }}</h6>
                <p class="card-text small text-muted">{!! Str::limit(strip_tags($course->long_description), 40, '...') !!}</p>
                <a href="{{ route('course-show', $course->slug) }}" class="btn btn-primary btn-sm">Saiba mais</a>
                @role('admin')
                    <a href="{{ route('course-edit', $course->slug) }}" class="btn btn-warning btn-sm"><ion-icon name="create-outline"></ion-icon></a>
                @endrole
            </div>
        </div>
    </div>
    @endforeach
</div>

<div class="d-flex justify-content-center">
    {{ $courses->links() }}
</div>

@endsection
