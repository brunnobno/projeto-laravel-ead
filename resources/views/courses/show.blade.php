@extends('layouts.app')

@section('content')


<div class="col-12-col-md-10 border bg-white shadow mb-5 bg-body rounded p-0">
    <div class="row justify-content-center m-0" >

        <div class="col-12 col-md-6 p-3">
            <div class="card" style="width:100%">
                <img
                    class="show-course"
                    src="{{ $course->banner_src ? asset('storage/'.$course->banner_src) : asset('images/curso-sem-imagem.png') }}"
                    alt="{{ $course->title }}"
                    loading="lazy">
            </div>
        </div>

        <div class="col-12 col-md-6 p-3">
            <h2 class="text-primary"> {{ $course->title }}</h2>
            <p class="text-secondary">{{ $course->long_description }}</p>

            @empty(!$course->will_start_in)
            <span class="text-dark"><i class="fas fa-calendar-alt text-primary"></i> <strong>Data:</strong></strong> {{ $course->will_start_in->format('d/m/Y') }} até {{ $course->will_end_in->format('d/m/Y') }} </span><br>
            @endempty

            @empty(!$course->day_and_time)
            <span class="text-dark"><i class="fas fa-clock text-primary"></i><strong> Dia/Horário:</strong> {{ $course->day_and_time }}</span><br><br>
            @endempty

            @empty(!$course->teacher)
            <span class="text-dark"><i class="fas fa-chalkboard-teacher text-primary"></i><strong> Professor:</strong> {{ $course->teacher }}</span><br><br>
            @endempty

            @empty(!$course->price and !$course->price_card)
            <span class="text-dark"><i class="fas fa-shopping-cart text-primary"></i> <strong>Valor:</strong></span><br>
            @endempty

            @empty(!$course->price)
            <span class="text-dark">R$ {{ number_format($course->price, 2, ',') }} <small class="text-muted text-small">(À vista)</small></span><br>
            @endempty

            @empty(!$course->price_card)
            <span class="text-dark">R$ {{ number_format($course->price_card, 2, ',') }} <small class="text-muted text-small">(Cartão de Crédito)</small></span><br>
            @endempty

            <br>
            @php
                $linkPara = ($course->classes->count() == 1)
                    ? "incricao-no-curso-{$course->id}-classe-XYZ"
                    : "lista-de-classes-para-o-curso-{$course->id}";
            @endphp
            {{ $linkPara }}
            <a href="#{{ $linkPara }}" class="btn btn-primary">Eu quero participar!</a>
        </div>

    </div>
</div>
@endsection
