@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-12 col-md-10 mt-3">
        <h4 class="text-dark"><ion-icon name="newspaper-outline"></ion-icon> Formulários de inscrição</h4>
    </div>
    <div class="col-12 col-md-2 mt-3">
        <a href="{{ route('form-create') }}" class="btn btn-primary btn-sm">+ Criar formulário</a>
    </div>
        <hr>
</div>

    <div class="row">
        <div class="col-12 col-md-3">
            <div class="card p-0 m-2" style="width: 100%;">
                    <img src="https://befasterenglish.com.br/wp-content/uploads/2021/02/bg-3.jpg" class="card-img-top" style="height: 150px" alt="...">
                <div class="card-body">
                    <h5 class="card-title small">Intensivo Básico</h5>
                    <p class="card-text small text-muted">Curso de Inglês nível básico com duração de 30 dias.</p>
                    <a href="{{ route('form-show') }}" class="btn btn-success btn-sm">Visualizar</a>
                    <a href="#" class="btn btn-primary btn-sm">Copiar link</a>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-3">
            <div class="card p-0 m-2" style="width: 100%;">
                    <img src="https://befasterenglish.com.br/wp-content/uploads/2021/02/bg-3.jpg" class="card-img-top" style="height: 150px" alt="...">
                <div class="card-body">
                    <h5 class="card-title small">Intensivo Básico</h5>
                    <p class="card-text small text-muted">Curso de Inglês nível básico com duração de 30 dias.</p>
                    <a href="{{ route('form-show') }}" class="btn btn-success btn-sm">Visualizar</a>
                    <a href="#" class="btn btn-primary btn-sm">Copiar link</a>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-3">
            <div class="card p-0 m-2" style="width: 100%;">
                    <img src="https://befasterenglish.com.br/wp-content/uploads/2021/02/bg-3.jpg" class="card-img-top" style="height: 150px" alt="...">
                <div class="card-body">
                    <h5 class="card-title small">Intensivo Básico</h5>
                    <p class="card-text small text-muted">Curso de Inglês nível básico com duração de 30 dias.</p>
                    <a href="{{ route('form-show') }}" class="btn btn-success btn-sm">Visualizar</a>
                    <a href="#" class="btn btn-primary btn-sm">Copiar link</a>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-3">
            <div class="card p-0 m-2" style="width: 100%;">
                    <img src="https://befasterenglish.com.br/wp-content/uploads/2021/02/bg-3.jpg" class="card-img-top" style="height: 150px" alt="...">
                <div class="card-body">
                    <h5 class="card-title small">Intensivo Básico</h5>
                    <p class="card-text small text-muted">Curso de Inglês nível básico com duração de 30 dias.</p>
                    <a href="{{ route('form-show') }}" class="btn btn-success btn-sm">Visualizar</a>
                    <a href="#" class="btn btn-primary btn-sm">Copiar link</a>
                </div>
            </div>
        </div>
    </div>


@endsection
