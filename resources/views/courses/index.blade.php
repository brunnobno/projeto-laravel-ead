@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-12 col-sm-8 col-md-10">
        <h4 class="text-dark"><i class="fas fa-user-graduate"></i> CURSOS</h4>
    </div>
    @role('admin')
        <div class="col-12 col-sm-4 col-md-2">
            <div class="row justify-content-end m-0">
                <a href="{{ route('course-create') }}" class="btn btn-primary btn-sm text-right">+ Criar curso</a>
            </div>
        </div>
    @endrole
</div>

<div class="row mt-3">
    @foreach ($courseClasses as $courseClass)
    <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-3">
            <a href="{{ route('course-show', $courseClass->course->slug) }}" class="text-decoration-none">
            <div class="card mb-3 shadow-sm bg-body rounded zoom" style="width: auto; height: 300px;">
                    <img class="thumbnail-course card-img-top object-fit-cover" src="{{ $courseClass->course->banner_src ? asset('storage/'.$courseClass->course->banner_src) : asset('images/curso-sem-imagem.png') }}"
                        style="height: 150px" alt="{{ $courseClass->course->title }} - Image">
                <div class="card-body">
                    <h6 class="card-title">{!! Str::limit(strip_tags($courseClass->course->title), 45, '...') !!}</h6>
                    <p class="card-text small text-muted fst-italic">{{ $courseClass->name}}</p>
                    {{--  <p class="card-text small text-muted">{!! Str::limit(strip_tags($courseClass->course->long_description), 40, '...') !!}</p>  --}}
                    <a href="{{ route('course-show', $courseClass->course->slug) }}"
                        class="btn btn-primary btn-sm mt-3" title="@lang('Entry')"> Saiba mais
                    </a>
                    @role('admin')
                        <a href="{{ route('course-edit', $courseClass->course->slug) }}"
                            class="btn btn-warning btn-sm mt-3" title="@lang('Edit')">
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

@role('admin')
<div class="row mt-3">
    <hr>
    <h6 class="text-dark"><i class="fas fa-cog"></i> CURSOS ATIVOS <small class="text-muted text-small"> (Visualização somente para administradores.)</small></h6>
    <span class="text-muted text-small mt-0 mb-3">* O CURSO PRECISA SER VINCULADO A TURMA PARA</span>
    @foreach ($allCoursesActive as $courseActive)
    <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-3">
        <div class="card mb-3 shadow-sm bg-body rounded" style="width: auto; height: 300px;">
                <img class="thumbnail-course card-img-top object-fit-cover image-inactive" src="{{ $courseActive->banner_src ? asset('storage/'.$courseActive->banner_src) : asset('images/curso-sem-imagem.png') }}"
                    style="height: 150px" alt="{{ $courseActive->title }} - Image">
            <div class="card-body">
                <h6 class="card-title">{!! Str::limit(strip_tags($courseActive->title), 45, '...') !!}</h6>
                <p class="card-text small text-success"><strong>Curso Ativo</strong></p>
                {{--  <p class="card-text small text-muted">{!! Str::limit(strip_tags($courseActive->course->long_description), 40, '...') !!}</p>  --}}
                <a href="{{ route('course-show', $courseActive->slug) }}" class="btn btn-secondary btn-sm" title="@lang('Entry')">Visualizar </a>
                @role('admin')
                    <a href="{{ route('course-edit', $courseActive->slug) }}"
                        class="btn btn-warning btn-sm" title="@lang('Edit')">
                        <ion-icon name="create-outline"></ion-icon>
                    </a>
                @endrole
            </div>
        </div>
    </div>
    @endforeach
    @if(count($allCoursesActive) == null)
        <p>Nenhum curso está ativo!</p>
    @endif
</div>
<div class="row mt-3">
    <hr>
    <h6 class="text-dark"><i class="fas fa-cog"></i> CURSOS INATIVOS <small class="text-muted text-small"> (Visualização somente para administradores.)</small></h6>
    @foreach ($allCoursesInactive as $courseInactive)
    <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-3">
        <div class="card mb-3 shadow-sm bg-body rounded" style="width: auto; height: 300px;">
                <img class="thumbnail-course card-img-top object-fit-cover image-inactive" src="{{ $courseInactive->banner_src ? asset('storage/'.$courseInactive->banner_src) : asset('images/curso-sem-imagem.png') }}"
                    style="height: 150px" alt="{{ $courseInactive->title }} - Image">
            <div class="card-body">
                <h6 class="card-title">{!! Str::limit(strip_tags($courseInactive->title), 45, '...') !!}</h6>
                <p class="card-text small text-muted fst-italic">Curso inativo</p>
                {{--  <p class="card-text small text-muted">{!! Str::limit(strip_tags($courseInactive->course->long_description), 40, '...') !!}</p>  --}}
                <a href="{{ route('course-show', $courseInactive->slug) }}" class="btn btn-secondary btn-sm" title="@lang('Entry')">Visualizar </a>
                @role('admin')
                    <a href="{{ route('course-edit', $courseInactive->slug) }}"
                        class="btn btn-warning btn-sm" title="@lang('Edit')">
                        <ion-icon name="create-outline"></ion-icon>
                    </a>
                @endrole
            </div>
        </div>
    </div>
    @endforeach
    @if(count($allCoursesInactive) == null)
        <p>Nenhum curso está inativo!</p>
    @endif
</div>
@endrole

@endsection
