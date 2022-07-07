@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="col-12 col-md-8 mt-3">
        <h4 class="text-dark"><i class="fas fa-plus-circle"></i> Criar curso</h4>
    </div>
    <div class="col-12 col-md-8 border rounded p-3 bg-white">
        <form action="{{ route('course-store') }}" method="POST" enctype="multipart/form-data">
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
                        <input
                            class="form-check-input"
                            name="active"
                            type="checkbox"
                            id="active" checked>

                        <label class="form-check-label" for="active">
                            Ativo/Inativo <small class="text-muted text-small">(Não receberá novas inscrições)</small>
                        </label>
                    </div>

                    @error('active')
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
