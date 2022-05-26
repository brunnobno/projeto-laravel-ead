@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-12 col-md-10">
        <h4 class="text-dark"></h4>
    </div>
    @role('admin')
        <div class="col-12 col-md-2">
            <div class="row justify-content-end m-0">
                <a href="{{ route('class-edit') }}" class="btn btn-primary btn-sm text-right">Editar</a>
            </div>
        </div>
    @endrole
</div>

<div class="col-12-col-md-10 border bg-white shadow mt-3 mb-5 bg-body rounded p-0">
    <div class="row justify-content-center m-0" >

        <div class="col-12 col-md-6 p-3">
            <h4 class="text-primary">{Title Course_Class}</h4><br>

            <span>Data/Horário: {data e horario da turma}</span><br>
            <span>Professor: {Name Instructor}</span><br>
            <span>participantes: {avatar dos participantes da turma}</span><br><br>
            <p><a href="#" class="btn btn-warning btn-sm text-right">Entrar na aula</a></p>
            <p></p><a href="#" class="btn btn-success btn-sm text-right">Grupo de WhatsApp</a></p>

            <div class="alert alert-success" role="alert">
                <h4 class="alert-heading">Recado importante</h4>
                <p>Aêêê! Você conseguiu ler essa mensagem de alerta. Esse texto vai ter quer se extender um pouquinho pra você conseguir ver como o espaçamento dentro de um alerta funciona.</p>
                <hr>
                <p class="mb-0">Sempre que precisar, use utilitários de margem para manter as coisas perfeitas.</p>
              </div>

        </div>

        <div class="col-12 col-md-6 p-3">
            <h4 class="text-primary">Aulas</h4>

            <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Módulo: Title do módulo</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Title da aula da aula</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Title da aula da aula</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>Title da aula da aula</td>
                  </tr>
                </tbody>

                <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Módulo: Title do módulo</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>Title da aula da aula</td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>Title da aula da aula</td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td>Title da aula da aula</td>
                    </tr>
                  </tbody>
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Módulo: Title do módulo</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>Title da aula da aula</td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>Title da aula da aula</td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td>Title da aula da aula</td>
                    </tr>
                  </tbody>
            </table>


        </div>

    </div>
</div>

@endsection
