@extends('layouts.app')

@section('content')

<div class="col-12 col-md-12 mt-3">
    <div class="row">
        <h4 class="text-dark"><ion-icon name="people-outline"></ion-icon> Visualizar Inscrições</h4>
        <hr>
            <div class="row">
                <div class="col-12 col-md-12">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Formulário</th>
                            <th scope="col">Status</th>
                            <th scope="col">Ação</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>Confirmado</td>
                            <td><a class="text-decoration-none" href="#"><small>Visualizar</small></a> | <a class="text-decoration-none" href="#"><small>Editar</small></a> | <a class="text-decoration-none" href="#"><small>Excluir</small></a></td>
                            </tr>
                            <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>Confirmado</td>
                            <td><a class="text-decoration-none" href="#"><small>Visualizar</small></a> | <a class="text-decoration-none" href="#"><small>Editar</small></a> | <a class="text-decoration-none" href="#"><small>Excluir</small></a></td>                        </tr>
                            <tr>
                            <th scope="row">3</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>Pendente</td>
                            <td><a class="text-decoration-none" href="#"><small>Visualizar</small></a> | <a class="text-decoration-none" href="#"><small>Editar</small></a> | <a class="text-decoration-none" href="#"><small>Excluir</small></a></td>                        </tr>
                            <tr>
                            <th scope="row">4</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>Pendente</td>
                            <td><a class="text-decoration-none" href="#"><small>Visualizar</small></a> | <a class="text-decoration-none" href="#"><small>Editar</small></a> | <a class="text-decoration-none" href="#"><small>Excluir</small></a></td>                        </tr>
                            <tr>
                            <th scope="row">5</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>Confirmado</td>
                            <td><a class="text-decoration-none" href="#"><small>Visualizar</small></a> | <a class="text-decoration-none" href="#"><small>Editar</small></a> | <a class="text-decoration-none" href="#"><small>Excluir</small></a></td>                        </tr>
                            <tr>
                            <th scope="row">6</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>Confirmado</td>
                            <td><a class="text-decoration-none" href="#"><small>Visualizar</small></a> | <a class="text-decoration-none" href="#"><small>Editar</small></a> | <a class="text-decoration-none" href="#"><small>Excluir</small></a></td>                        </tr>
                            <tr>
                            <th scope="row">7</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>Confirmado</td>
                            <td><a class="text-decoration-none" href="#"><small>Visualizar</small></a> | <a class="text-decoration-none" href="#"><small>Editar</small></a> | <a class="text-decoration-none" href="#"><small>Excluir</small></a></td>                        </tr>
                            <tr>
                            <th scope="row">8</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>Confirmado</td>
                            <td><a class="text-decoration-none" href="#"><small>Visualizar</small></a> | <a class="text-decoration-none" href="#"><small>Editar</small></a> | <a class="text-decoration-none" href="#"><small>Excluir</small></a></td>                        </tr>
                            <tr>
                            <th scope="row">9</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>Confirmado</td>
                            <td><a class="text-decoration-none" href="#"><small>Visualizar</small></a> | <a class="text-decoration-none" href="#"><small>Editar</small></a> | <a class="text-decoration-none" href="#"><small>Excluir</small></a></td>                        </tr>
                            <tr>
                            <th scope="row">10</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>Confirmado</td>
                            <td><a class="text-decoration-none" href="#"><small>Visualizar</small></a> | <a class="text-decoration-none" href="#"><small>Editar</small></a> | <a class="text-decoration-none" href="#"><small>Excluir</small></a></td>                        </tr>

                        </tbody>
                        </table>

                </div>
            <div class="row justify-content-center">
                <div class="col-12 col-md-12">
                    <nav aria-label="Navegação de página exemplo">
                        <ul class="pagination justify-content-center">
                          <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1">Anterior</a>
                          </li>
                          <li class="page-item"><a class="page-link" href="#">1</a></li>
                          <li class="page-item"><a class="page-link" href="#">2</a></li>
                          <li class="page-item"><a class="page-link" href="#">3</a></li>
                          <li class="page-item">
                            <a class="page-link" href="#">Próximo</a>
                          </li>
                        </ul>
                      </nav>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>


@endsection
