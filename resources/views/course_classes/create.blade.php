@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="col-12 col-md-8 mt-3">
        <h4 class="text-dark"><i class="fas fa-plus-circle"></i> Criar turma</h4>
    </div>
    <div class="col-12 col-md-8 border rounded p-3 bg-white">
        <form action="{{ route('class-store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-sm-12 col-md-6 mb-3">
                    <label class="form-label">
                        Nome da turma:<span class="text-danger"> *</span>
                    </label>
                    <input type="text" name="name" value="{{ old('name') ?? null }}" id="name" class="form-control"
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
                    <input type="text" name="slug" value="{{ old('slug') ?? null }}" id="slug" class="form-control" placeholder="" required />

                    @error('slug')
                        <div class="alert alert-danger p-1 ps-3">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-sm-12 col-md-12 mb-3">
                    <label class="form-label">Descrição da turma:<span class="text-danger"> *</span> </label>
                    <textarea type="text" name="long_description" id="long_description" class="form-control"
                        placeholder="" >{{ old('long_description') ?? null }}</textarea>

                    @error('long_description')
                        <div class="alert alert-danger p-1 ps-3"> {{ $message }}</div>
                    @enderror
                </div>

                <div class="col-sm-12 col-md-12 mb-3">
                    <label class="form-label">Descrição da turma:<span class="text-danger"> *</span> </label>
                    <textarea type="text" name="small_description" id="small_description" class="form-control"
                        placeholder="" >{{ old('small_description') ?? null }}</textarea>

                    @error('small_description')
                        <div class="alert alert-danger p-1 ps-3"> {{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12 col-md-4 mb-3">
                    <label class="form-label">Data de início:</label>
                    <input type="date" name="start_date" value="{{ old('start_date') ?? null }}" id="start_date" class="form-control" placeholder="" />

                    @error('start_date')
                        <div class="alert alert-danger p-1 ps-3">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-sm-12 col-md-4 mb-3">
                    <label class="form-label">Data de encerramento:</label>
                    <input type="date" name="end_date" value="{{ old('end_date') ?? null }}" id="end_date" class="form-control" placeholder="" />

                    @error('end_date')
                        <div class="alert alert-danger p-1 ps-3">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12 col-md-4 mb-3">
                    <label class="form-label">Horário de início:</label>
                    <input type="time" name="start_time" value="{{ old('start_time') ?? null }}" id="start_time" class="form-control" placeholder="" />

                    @error('start_time')
                        <div class="alert alert-danger p-1 ps-3">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-sm-12 col-md-4 mb-3">
                    <label class="form-label">Horário de encerramento:</label>
                    <input type="time" name="end_time" value="{{ old('end_time') ?? null }}" id="end_time" class="form-control" placeholder="" />

                    @error('end_time')
                        <div class="alert alert-danger p-1 ps-3">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-md-6 mb-3">
                    <label class="form-label">Valor: <small class="text-muted text-small">(Gratuito: deixar em branco.)</small></label>
                    <input type="text" name="price" value="{{ old('price') ?? null }}" id="price" class="form-control" placeholder="000,00"/>

                    @error('price')
                        <div class="alert alert-danger p-1 ps-3">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-md-6 mb-3">
                    <label class="form-label">Professor: <small class="text-muted text-small">(Responsável pelo curso) {Criar table no BD}</small></label>
                    <input type="text" name="teacher" value="{{ old('teacher') ?? null }}" id="teacher" class="form-control" placeholder="Localizar professor"/>

                    @error('teacher')
                        <div class="alert alert-danger p-1 ps-3">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-12 col-md-6 mb-3">
                    <label class="form-label">Local: <small class="text-muted text-small">{???}</small></label>
                    <input type="text" name="location" value="{{ old('location') ?? null }}" id="location" class="form-control" placeholder=""/>

                    @error('location')
                        <div class="alert alert-danger p-1 ps-3">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-md-6 mb-3">
                    <label class="form-label">Curso:<span class="text-danger"> * </span><small class="text-muted text-small">(Vincular turma ao curso)</small></label>
                    <select class="form-select" name="course_id" aria-label="Default select example">
                        <option selected disabled> --- </option>
                        @foreach ($coursesId as $courseId)
                        <option value="{{ $courseId->id }}">{{ $courseId->title }}</option>
                        @endforeach
                      </select>
                    @error('course_id')
                        <div class="alert alert-danger p-1 ps-3">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-md-6 mb-3">
                    <label class="form-label">Banner do curso:</label>
                    <small class="text-muted text-small">(tamanho da imagem 500x500px)</small>
                    <input type="file" name="cover_image" value="{{ old('conver_image') ?? null }}" id="conver_image" class="form-control" placeholder="" />

                    @error('conver_image')
                    <div class="alert alert-danger p-1 ps-3">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-md-4 mb-3">
                    <label class="form-label">Status:<span class="text-danger"> * </span><small class="text-muted text-small">(??)</small></label>
                    <select class="form-select" name="status" aria-label="Default select example">
                        <option value="1">Ativo 01</option>
                        <option value="0">Inativo 00</option>
                    </select>

                    @error('status')
                    <div class="alert alert-danger p-1 ps-3">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-12 col-md-4 mb-3">
                    <label class="form-label">Ativo:<span class="text-danger"> * </span><small class="text-muted text-small">(??)</small></label>
                    <select class="form-select" name="active" aria-label="Default select example">
                        <option selected disabled> --- </option>
                        <option value="1">Ativo 01</option>
                        <option value="0">Inativo 00</option>
                    </select>

                    @error('active')
                    <div class="alert alert-danger p-1 ps-3">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-12 col-md-4 mb-3">
                    <label class="form-label">Online:<span class="text-danger"> * </span><small class="text-muted text-small">(??)</small></label>
                    <select class="form-select" name="online" aria-label="Default select example">
                        <option selected disabled> --- </option>
                        <option value="1">Online 01</option>
                        <option value="0">Presencial 00</option>
                    </select>

                    @error('online')
                    <div class="alert alert-danger p-1 ps-3">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-md-4 mb-3">
                    <button class="btn btn-primary" type="submit">Criar</button>
                </div>
            </div>
        </form>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        let titleInput = document.querySelector('[name=name]');

        if (titleInput) {
            titleInput.addEventListener('keyup', event => {
                let value = event.target.value;
                let slug = slugFy(value);
                let slugInput = document.querySelector('[name=slug]');
                slugInput.value = slug;
            });
        }

        let slugInput = document.querySelector('[name=slug]');

        if (slugInput) {
            slugInput.addEventListener('change', event => {
                let value = event.target.value;
                let slug = slugFy(value);
                event.target.value = slug;
            });
        }

    });
</script>

@endsection
