@extends('layouts.app')

@section('login')

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12 col-md-12 ">
            <div class="row vh-100";>
                <div class="col-12 col-md-6 bg-login">

                </div>
                <div class="col-12 col-md-6">
                    <div class="row justify-content-center d-flex align-items-center">
                        <div class="col-12 col-md-8">
                            <h3 class="mt-5 text-secondary fw-bold">{{ config('app.name') }}</h3>
                            <p class="text-muted lead mb-5 text-description-login">Forneça o e-mail e senha para acessar.</p>


                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group">
                                        {{--  <label for="email">Login:</label>  --}}
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="E-mail" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group mt-2">
                                        {{--  <label for="senha">Senha:</label>  --}}
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Senha" required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="row mb-3 ">
                                    <div class="col-12 col-md-6">
                                        <div class="form-check">
                                            <input class="form-check-input " type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                            <label class="form-check-label text-remember" for="remember">
                                                {{ __('Remember Me') }}
                                            </label>
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-6 d-flex justify-content-end">
                                        <div class="form-group">
                                        @if (Route::has('password.request'))
                                            <a class="btn-link text-password text-right" href="{{ route('password.request') }}">
                                                {{ __('Forgot Your Password?') }}
                                            </a>
                                        @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-0">
                                    <div class="col-12 col-md-6">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Login') }}
                                        </button>
                                    </div>


                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
