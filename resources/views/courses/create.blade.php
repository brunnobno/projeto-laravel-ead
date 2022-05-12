@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="col-12 col-md-8 mt-3">
     <h4 class="text-dark"><i class="fas fa-plus-circle"></i> Criar curso</h4>
    </div>
    <div class="col-12 col-md-8 border rounded p-3 bg-white">

        <form action="{{ route('course-create-post') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-sm-12 col-md-6 mb-3">
                    <label class="form-label">
                        Nome do curso:<span class="text-danger"> *</span>
                    </label>
                    <input type="text" name="title" value="{{ old('title') ?? null }}" id="title" class="form-control"
                        minlength="15"
                        placeholder="{{ __('Title') }}" autofocus required />

                    @error('title')
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
                    <label class="form-label">Descrição do curso:<span class="text-danger"> *</span> </label>
                    <textarea type="text" name="long_description" id="long_description" class="form-control"
                        placeholder="" >{{ old('long_description') ?? null }}</textarea>

                    @error('long_description')
                        <div class="alert alert-danger p-1 ps-3"> {{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12 col-md-4 mb-3">
                    <label class="form-label">Data de início:</label>
                    <input type="date" name="will_start_in" value="{{ old('will_start_in') ?? null }}" id="will_start_in" class="form-control" placeholder="" />

                    @error('will_start_in')
                        <div class="alert alert-danger p-1 ps-3">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-sm-12 col-md-4 mb-3">
                    <label class="form-label">Data de encerramento:</label>
                    <input type="date" name="will_end_in" value="{{ old('will_end_in') ?? null }}" id="will_end_in" class="form-control" placeholder="" />

                    @error('will_end_in')
                        <div class="alert alert-danger p-1 ps-3">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-md-12 mb-3">
                    <label class="form-label">Dia/horário:</label>
                    <input type="text" name="day_and_time" value="{{ old('day_and_time') ?? null }}" id="day_and_time" class="form-control" placeholder="Ex. Segunda, Quarta e Sexta-feira às 21h"/>

                    @error('day_and_time')
                        <div class="alert alert-danger p-1 ps-3">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-md-6 mb-3">
                    <label class="form-label">Valor do curso: <small class="text-muted text-small">(à vista)</small></label>
                    <input type="text" name="price" value="{{ old('price') ?? null }}" id="price" class="form-control" placeholder="000,00"/>

                    @error('price')
                        <div class="alert alert-danger p-1 ps-3">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-12 col-md-6 mb-3">
                    <label class="form-label">Valor do curso: <small class="text-muted text-small">(Cartão de crédito)</small></label>
                    <input type="text" name="price_card" value="{{ old('price_card') ?? null }}" id="price_card" class="form-control" placeholder="000,00"/>

                    @error('price_card')
                        <div class="alert alert-danger p-1 ps-3">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-md-6 mb-3">
                    <label class="form-label">Professor: <small class="text-muted text-small">(responsável pelo curso)</small></label>
                    <input type="text" name="teacher" value="{{ old('teacher') ?? null }}" id="teacher" class="form-control" placeholder="Localizar professor"/>

                    @error('teacher')
                        <div class="alert alert-danger p-1 ps-3">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-12 col-md-6 mb-3">
                    <label class="form-label">Turma:<span class="text-danger"> * </span><small class="text-muted text-small">(Turma correspondente a este curso)</small></label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected disabled> --- </option>
                        <option value="1">Turma Agosto de 2021</option>
                        <option value="2">Turma Maio de 2022</option>
                        <option value="3">Turma Agosto de 2022</option>
                      </select>
                    @error('teacher')
                        <div class="alert alert-danger p-1 ps-3">{{ $message }}</div>
                    @enderror
                </div>
            </div>



            <div class="row">
                <div class="col-12 col-md-6 mb-3">
                    <label class="form-label">Banner do curso:</label>
                    <small class="text-muted text-small">(tamanho da imagem 500x500px)</small>
                    <input type="file" name="banner_src" value="{{ old('banner_src') ?? null }}" id="banner_src" class="form-control" placeholder="" />

                    @error('banner_src')
                    <div class="alert alert-danger p-1 ps-3">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-md-6 mb-3">
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="status_course">
                        <label class="form-check-label" for="flexSwitchCheckChecked">Desativar. <small class="text-muted text-small">(Curso não recebe novas inscrições)</small></label>
                      </div>

                    @error('status_course')
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
        let titleInput = document.querySelector('[name=title]');

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
