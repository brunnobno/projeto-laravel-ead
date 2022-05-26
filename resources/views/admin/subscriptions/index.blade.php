@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-12 col-md-10">
        <h4 class="text-dark"><i class="fas fa-list"></i> INSCRIÇÕES</h4>
    </div>
        <div class="col-12 col-md-2">
            <div class="row justify-content-end m-0">
                <a href="{{ route('subscription-create') }}" class="btn btn-primary btn-sm text-right">+ Adicionar usúario</a>
            </div>
        </div>
</div>

<div class="row mt-3">
    <div class="col-12 col-md-12">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Formulário</th>
                    <th scope="col">Status</th>
                    <th class="d-flex justify-content-end" scope="col">Ação</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($subscriptions as $subscription )
                <tr>
                    <th scope="row">{{ $subscription->id }}</th>
                    <td>{{ $subscription->name }}</td>
                    <td>{{ $subscription->email }}</td>
                    <td>Confirmado</td>
                    <td class="d-flex justify-content-end">
                        <div class="btn-group " role="group" aria-label="Basic example">
                            <a href="{{ route('subscription-show', $subscription->name) }}"><button type="button" class="btn btn-primary btn-sm">Visualizar</button></a>
                            <a href="{{ route('subscription-show', $subscription->name) }}"><button type="button" class="btn btn-warning btn-sm">Editar</button></a>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="d-flex flex-column align-items-center">
        {{ $subscriptions->links() }}
    </div>

</div>


@endsection
