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

<div class="row mt-3">
    @foreach ($courseClasses as $courseClass)
    <div class="col-12 col-md-3">
            <a href="{{ route('course-show', $courseClass->course->slug) }}" class="text-decoration-none">
            <div class="card mb-3 shadow-sm bg-body rounded zoom" style="width: auto; height: 300px;">
                    <img class="thumbnail-course card-img-top object-fit-cover" src="{{ $courseClass->course->banner_src ? asset('storage/'.$courseClass->course->banner_src) : asset('images/curso-sem-imagem.png') }}"
                        style="height: 150px" alt="{{ $courseClass->course->title }} - Image">
                <div class="card-body">
                    <h6 class="card-title">{!! Str::limit(strip_tags($courseClass->course->title), 45, '...') !!}</h6>
                    <p class="card-text small text-muted fst-italic">{{ $courseClass->name}}</p>
                    {{--  <p class="card-text small text-muted">{!! Str::limit(strip_tags($courseClass->course->long_description), 40, '...') !!}</p>  --}}
                    @role('admin')
                        <a href="{{ route('course-edit', $courseClass->course->slug) }}"
                            class="btn btn-warning btn-sm" title="@lang('Edit')">
                            <ion-icon name="create-outline"></ion-icon>
                        </a>
                    @endrole
                </div>
            </div>
        </a>
    </div>
    @endforeach
    @if(count($courseClasses) == 0)
        <p>Nenhum curso disponível!</p>
    @endif
</div>

<div class="d-flex flex-column align-items-center">
    {{ $courseClasses->links() }}
</div>

@endsection
