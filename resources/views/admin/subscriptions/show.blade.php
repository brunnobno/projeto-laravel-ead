@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-12 col-md-10">
        <h4 class="text-dark"><i class="fas fa-user"></i> Visualizar: {{ $subscription->name }} </h4>
    </div>
    <div class="col-12 col-md-2">
        <div class="row justify-content-end m-0">
            <a href="{{ route('subscription-edit', $subscription->name) }}" class="btn btn-primary btn-sm text-right">Editar</a>
        </div>
    </div>
</div>

<div class="row mt-3">
    <div class="col-12 col-md-12">
        <p class="">{{ $subscription->name }}</p>
        <p class="">{{ $subscription->email }}</p>

    </div>
</div>


@endsection
