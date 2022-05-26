@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-12 col-md-10">
        <h4 class="text-dark"><i class="fas fa-user-graduate"></i> MINHAS TURMAS</h4>
    </div>
    @role('admin')
        <div class="col-12 col-md-2">
            <div class="row justify-content-end m-0">
                <a href="{{ route('class-create') }}" class="btn btn-primary btn-sm text-right">+ Criar turma</a>
            </div>
        </div>
    @endrole
</div>


    <div class="row mt-3">

        @foreach ( $courses as $course )
            <div class="col-12 col-md-3">
                <div class="card mb-3 shadow-sm bg-body rounded" style="width: 100%;">
                        <img class="thumbnail-course" src="{{ $course->course->banner_src ? asset('storage/'.$course->course->banner_src) : asset('images/curso-sem-imagem.png') }}"
                            class="card-img-top" style="height: 150px" alt="{{ $course->title }} - Image">
                    <div class="card-body">
                        <h6 class="card-title">{{ $course->name }}</h6>
                        <p class="card-text small text-muted">{!! Str::limit(strip_tags($course->long_description), 40, '...') !!}</p>
                        <a href="{{ route('class-show', $course->slug) }}" class="btn btn-primary btn-sm">Entrar</a>
                        @role('admin')
                            <a href="{{ route('class-edit', $course->slug) }}" class="btn btn-warning btn-sm"><ion-icon name="create-outline"></ion-icon></a>
                        @endrole
                    </div>
                </div>
            </div>
        @endforeach
        @if(count($courses) == 0)
        <p>Você não está inscrito em nenhuma turma!</p>
        @endif

    </div>

</div>


@endsection
