@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="col-12 col-md-8 mt-3">
        <h4 class="text-dark"><i class="fas fa-plus-circle"></i>Editar turma: {{ $courseClass->name }}</h4>
    </div>
    <div class="col-12 col-md-8 border rounded p-3 bg-white">
        <form action="{{ route('class-update', $courseClass->slug) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-sm-12 col-md-6 mb-3">
                    <label class="form-label">
                        Nome da turma:<span class="text-danger"> *</span>
                    </label>
                    <input type="text" name="name" value="{{ $courseClass->name }}" id="name" class="form-control"
                        minlength="15"
                        placeholder="{{ __('Title') }}" autofocus required />

                    @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-sm-12 col-md-6 mb-3">
                    <label class="form-label">
                        Slug:<span class="text-danger"> *</span>
                        <small class="text-muted text-small">(Este campo não pode ser alterado depois.)</small>
                    </label>
                    <input type="text" name="slug" value="{{ $courseClass->slug }}" id="slug" class="form-control" placeholder="" required disabled/>

                    @error('slug')
                        <div class="alert alert-danger p-1 ps-3">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-sm-12 col-md-12 mb-3">
                    <label class="form-label">Descrição da turma:<span class="text-danger"> *</span> </label>
                    <textarea type="text" name="long_description" id="long_description" class="form-control"
                        placeholder="" >{{ $courseClass->long_description }}</textarea>

                    @error('long_description')
                        <div class="alert alert-danger p-1 ps-3"> {{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12 col-md-4 mb-3">
                    <label class="form-label">Data de início:</label>
                    <input type="date" name="start_date" value="{{ $courseClass->start_date ? $courseClass->start_date->format('Y-m-d') : '' }}" id="start_date" class="form-control" placeholder="" />

                    @error('start_date')
                        <div class="alert alert-danger p-1 ps-3">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-sm-12 col-md-4 mb-3">
                    <label class="form-label">Data de encerramento:</label>
                    <input type="date" name="end_date" value="{{ $courseClass->end_date ? $courseClass->end_date->format('Y-m-d') : '' }}" id="end_date" class="form-control" placeholder="" />

                    @error('end_date')
                        <div class="alert alert-danger p-1 ps-3">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12 col-md-4 mb-3">
                    <label class="form-label">Horário de início:</label>
                    <input type="time" name="start_time" value="{{ $courseClass->start_time }}" id="start_time" class="form-control" placeholder="" />

                    @error('start_time')
                        <div class="alert alert-danger p-1 ps-3">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-sm-12 col-md-4 mb-3">
                    <label class="form-label">Horário de encerramento:</label>
                    <input type="time" name="end_time" value="{{ $courseClass->end_time }}" id="end_time" class="form-control" placeholder="" />

                    @error('end_time')
                        <div class="alert alert-danger p-1 ps-3">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-md-6 mb-3">
                    <label class="form-label">Valor: <small class="text-muted text-small">(Gratuito: deixar em branco.)</small></label>
                    <input type="text" name="price" value="{{ $courseClass->price }}" id="price" class="form-control" placeholder="Gratuito"/>

                    @error('price')
                        <div class="alert alert-danger p-1 ps-3">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-md-6 mb-3">
                    <label class="form-label">Professor: <small class="text-muted text-small">(Responsável pelo curso) {Criar table no BD}</small></label>
                    <input type="text" name="teacher" value="" id="teacher" class="form-control" placeholder="Localizar professor"/>

                    @error('teacher')
                        <div class="alert alert-danger p-1 ps-3">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-12 col-md-6 mb-3">
                    <label class="form-label">Local: <small class="text-muted text-small">{???}</small></label>
                    <input type="text" name="location" value="{{ $courseClass->location }}" id="location" class="form-control" placeholder=""/>

                    @error('location')
                        <div class="alert alert-danger p-1 ps-3">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-md-6 mb-3">


                    <label class="form-label">Curso:<span class="text-danger"> * </span><small class="text-muted text-small">(Vincular turma ao curso)</small></label>
                    <select class="form-select" name="course_id" aria-label="Default select example">
                        <option value="{{ $courseClass->course->title }}">{{ $courseClass->course->title }}</option>
                    </select>
                    @error('course_id')
                        <div class="alert alert-danger p-1 ps-3">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-md-8 mb-3">
                    <label class="form-label">Imagem da Turma:</label>
                    <small class="text-muted text-small">(tamanho da imagem 500x500px)</small>
                    <input type="file" name="cover_image" value="{{ $courseClass->conver_image }}" id="conver_image" class="form-control" placeholder="" />

                    @error('conver_image')
                    <div class="alert alert-danger p-1 ps-3">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-4 col-md-4 mb-3">
                    <img src="{{ $courseClass->cover_image ? asset('storage/'.$courseClass->cover_image) : asset('images/curso-sem-imagem.png') }}"
                        class="card-img-top" style="height: 150px" alt="{{ $courseClass->name }} - Image">
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-md-6 mb-3">
                    <div class="form-check form-switch">
                        {{ $courseClass->status }}<input class="form-check-input" type="checkbox" id="status">
                        <label class="form-check-label" for="flexSwitchCheckChecked">Status. <small class="text-muted text-small">{ vincular com o banco de dados }</small></label>
                    </div>

                    @error('status')
                    <div class="alert alert-danger p-1 ps-3">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-md-6 mb-3">
                    <div class="form-check form-switch">
                        {{ $courseClass->active }} <input class="form-check-input" type="checkbox" id="active">
                        <label class="form-check-label" for="flexSwitchCheckChecked">Ativo. <small class="text-muted text-small">{ vincular com o banco de dados }</small></label>
                    </div>

                    @error('active')
                    <div class="alert alert-danger p-1 ps-3">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-md-6 mb-3">
                    <div class="form-check form-switch">
                        {{ $courseClass->online }} <input class="form-check-input" type="checkbox" id="online">
                        <label class="form-check-label" for="flexSwitchCheckChecked">Online. <small class="text-muted text-small">{ vincular com o banco de dados }</small></label>
                    </div>

                    @error('online')
                    <div class="alert alert-danger p-1 ps-3">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-md-4 mb-3">
                    <button class="btn btn-primary" type="submit">Atualizar</button>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection
