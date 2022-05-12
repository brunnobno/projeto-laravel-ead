@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="col-12 col-md-8 mt-3">
     <h4 class="text-dark"><i class="fas fa-edit"></i> Editar: {{ $course->title }}</h4>
    </div>
    <div class="col-12 col-md-8 border rounded p-3 bg-white">

        <form action="{{ route('course-update', $course->slug) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-sm-12 col-md-6 mb-3">
                    <label class="form-label">
                        Nome do curso:<span class="text-danger"> *</span>
                    </label>
                    <input type="text" name="title" value="{{ $course->title }}" id="title" class="form-control"
                        minlength="15"
                        placeholder="{{ __('Title') }}" autofocus required />

                    @error('title')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-sm-12 col-md-6 mb-3">
                    <label class="form-label">
                        Slug:<span class="text-danger"> *</span>
                        <small class="text-muted text-small">(Attention: This value cannot be changed later.)</small>
                    </label>
                    <input type="text" disabled="" name="slug" value="{{ $course->slug }}" id="slug" class="form-control" placeholder="" required />

                    @error('slug')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-sm-12 col-md-12 mb-3">
                    <label class="form-label">Descrição do curso:<span class="text-danger"> *</span> </label>
                    <textarea type="text" name="long_description" id="long_description" class="form-control"
                        placeholder="" >{{ $course->long_description }}</textarea>

                    @error('long_description')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12 col-md-4 mb-3">
                    <label class="form-label">Data de início:</label>
                    <input type="date" name="will_start_in"
                        value="{{ $course->will_start_in ? $course->will_start_in->format('Y-m-d') : '' }}"
                        id="will_start_in" class="form-control" placeholder="" />

                    @error('will_start_in')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-sm-12 col-md-4 mb-3">
                    <label class="form-label">Data de encerramento:</label>
                    <input type="date" name="will_end_in"
                        value="{{ $course->will_end_in ? $course->will_end_in->format('Y-m-d') : '' }}"
                        id="will_end_in" class="form-control" placeholder="" />

                    @error('will_end_in')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-md-4 mb-3">
                    <label class="form-label">Valor do curso (à vista):<span class="text-danger"> *</span> </label>
                    <input type="text" name="price" value="{{ $course->price }}" id="price" class="form-control" placeholder=""/>

                    @error('price')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-12 col-md-4 mb-3">
                    <label class="form-label">Desconto %<span class="text-danger"></span> </label>
                    <input type="text" name="discount" value="{{ $course->discount }}" id="discount" class="form-control" placeholder="" />

                    @error('discount')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="row">
                <div class="col-8 col-md-6 mb-3">
                    <label class="form-label">Banner do curso:</label>
                    <small class="text-muted text-small">(tamanho da imagem 500x500px)</small>
                    <input type="file" name="banner_src" value="{{ $course->banner_src }}" id="banner_src" class="form-control" placeholder="" />

                    @error('banner_src')
                        <div class="alert alert-danger p-1 ps-3">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-4 col-md-6 mb-3">
                    <img src="{{ $course->banner_src ? asset('storage/'.$course->banner_src) : asset('images/curso-sem-imagem.png') }}"
                        class="card-img-top" style="height: 150px" alt="{{ $course->title }} - Image">
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-md-4 mb-3">
                    <button
                        class="btn btn-primary"
                        type="submit">
                        Atualizar informações
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

{{--  <script>
    document.addEventListener('DOMContentLoaded', function() {
        let titleInput = document.querySelector('[name=title]');

        if (titleInput) {
            titleInput.addEventListener('keydown', event => {
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
</script>  --}}
@endsection
