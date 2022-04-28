@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-12 col-md-12 mt-3">
        <h4 class="text-dark"><ion-icon name="newspaper-outline"></ion-icon> Criar Curso</h4>
    </div>
        <hr>
</div>

    <div class="row">
        <div class="col-12 col-md-6">
            <label class="form-label">Nome do curso:<span class="text-danger"> *</span> </label>
            <input type="text" name="nome_curso" id="nomeCurso" class="form-control" placeholder="" autofocus required />
        </div>
        <div class="col-12 col-md-8 mt-3">
            <label class="form-label">Descrição do curso:<span class="text-danger"> *</span> </label>
            <textarea type="text" name="desc_curso" id="descCurso" class="form-control" placeholder="" required></textarea>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-md-4 mt-3">
            <label class="form-label">Data de início:<span class="text-danger"> *</span> </label>
            <input type="date" name="dataInicio_curso" id="dataInicioCurso" class="form-control" placeholder="" required/>
        </div>
        <div class="col-12 col-md-4 mt-3">
            <label class="form-label">Data de encerramento:<span class="text-danger"> *</span> </label>
            <input type="date" name="dataEncerramento_curso" id="dataEncerramentoCurso" class="form-control" placeholder="" required/>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-md-4 mt-3">
            <label class="form-label">Valor do curso (à vista):<span class="text-danger"> *</span> </label>
            <input type="text" name="valor_curso" id="valorCurso" class="form-control" placeholder="" required/>
        </div>
        <div class="col-12 col-md-4 mt-3">
            <label class="form-label">Valor do curso (parcelado):<span class="text-danger"> *</span> </label>
            <input type="text" name="valor2_curso" id="valor2Curso" class="form-control" placeholder="" required/>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-md-3 mt-3">
            <label class="form-label">Data limite para inscrição:<span class="text-danger"> *</span> </label>
            <input type="date" name="dataLimite_curso" id="dataLimiteCurso" class="form-control" placeholder="" required/>
        </div>
        <div class="col-12 col-md-4 mt-3">
            <label class="form-label">E-mail que recebe cópia da inscrição:<span class="text-danger"> *</span> </label>
            <input type="mail" name="email_curso" id="emailCurso" class="form-control" placeholder="" required/>
        </div>
        <div class="col-12 col-md-1 mt-3">
            <label class="form-label">Cor:<span class="text-danger"> *</span> </label>
            <input type="color" name="bg_curso" id="BgCurso" class="form-control form-control-color" placeholder="" required/>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-md-4 mt-3">
            <button class="btn btn-primary" type="submit">Criar</button></a>
        </div>
    </div>



@endsection
