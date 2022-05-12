@extends('layouts.app')

@section('content')



<div class="row justify-content-center ">
    <div class="col-12 col-md-8 mt-3">

    </div>
    <div class="col-12 col-md-8 border p-3 bg-white shadow p-3 mb-5 bg-body rounded">

            <h2 class="text-primary"> {{ $course->title }}</h2>
            <p class="text-secondary">{{ $course->long_description }}</p>
            <span class="text-dark"><i class="fas fa-calendar-alt text-primary"></i> Data:</strong> {{ $course->will_start_in }} até {{ $course->will_end_in }} </span><br>
            <span class="text-dark"><i class="fas fa-clock text-primary"></i><strong> Dia/Horário:</strong></span><br><br>
            @empty(!$course->price)
            <span class="text-dark"><i class="fas fa-shopping-cart text-primary"></i> <strong>Valor:</strong></span><br>
            <span class="text-dark">R$ {{ $course->price }} - à vista</span><br><br>
            @endempty
            <span class="">Para concluir sua inscrição preencha o formulário abaixo:</span>

            <form method="POST" action="#" class="needs-validation" novalidate>
                <div class="row">
                    <div class="col-12 mt-3">
                        <label class="form-label" for="nomeCompleto">
                            Nome <span class="text-danger">*</span>
                        </label>
                        <input type="text" name="nome_completo" id="nomeCompleto" class="form-control" placeholder="Seu nome completo" autofocus required />
                    </div>

                    <div class="col-12 col-md-4 mt-3">
                        <label class="form-label" for="cpf">
                            CPF <span class="text-danger">*</span>
                        </label>
                        <input type="text" name="cpf" id="cpf" class="form-control" placeholder="CPF" required  />
                    </div>

                    <div class="col-12 col-md-4 mt-3">
                        <label class="form-label" for="rg">
                            RG <span class="text-danger">*</span>
                        </label>
                        <input type="text" name="rg" id="rg" class="form-control" placeholder="RG" required />
                    </div>

                    <div class="col-12 col-md-4 mt-3">
                        <label class="form-label" for="nascimento">
                            Nascimento <span class="text-danger">*</span>
                        </label>
                        <input type="date" name="nascimento" id="nascimento" class="form-control" placeholder="dd/mm/aaaa" required />
                    </div>

                    <div class="col-12 col-md-6 mt-3">
                        <label class="form-label" for="email">
                            E-mail <span class="text-danger">*</span>
                        </label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="Seu melhor e-mail" required />
                    </div>

                    <div class="col-12 col-md-6 mt-3">
                        <label class="form-label" for="whatsapp">
                            WhatsApp <span class="text-danger">*</span>
                        </label>
                        <input type="text" name="whatsapp" id="whatsapp" class="form-control" placeholder="(DDD) + WhatsApp" required />
                    </div>

                    <div class="col-md-2 mt-3">
                        <label class="form-label" for="cep">
                            CEP <span class="text-danger">*</span>
                        </label>
                        <input type="text" name="cep" id="cep" class="form-control" placeholder="00000-000" required />
                    </div>

                    <div class="col-md-8 mt-3">
                        <label class="form-label" for="endereco">
                            Endereço <span class="text-danger">*</span>
                        </label>
                        <input type="text" name="endereco" id="endereco" class="form-control" placeholder="" required />
                    </div>

                    <div class="col-md-2 mt-3">
                        <label class="form-label" for="numero">
                            Número <span class="text-danger">*</span>
                        </label>
                        <input type="text" name="numero" id="numero" class="form-control" placeholder="" required />
                    </div>

                    <div class="col-md-3 mt-3">
                        <label class="form-label" for="complemento">
                            Complemento</label>
                        <input type="text" name="complemento" id="complemento" class="form-control" placeholder="" />
                    </div>

                    <div class="col-md-3 mt-3">
                        <label class="form-label" for="bairro">
                            Bairro <span class="text-danger">*</span>
                        </label>
                        <input type="text" name="bairro" id="bairro" class="form-control" placeholder="" required />
                    </div>

                    <div class="col-md-3 mt-3">
                        <label class="form-label" for="cidade">
                            Cidade <span class="text-danger">*</span>
                        </label>
                        <input type="text" name="cidade" id="cidade" class="form-control" placeholder="" required />
                    </div>

                    <div class="col-md-3 mt-3">
                        <label class="form-label" for="uf">
                            UF <span class="text-danger">*</span>
                        </label>
                        <select type="text" name="uf" id="uf" class="form-select" aria-label="Default select example" required>
                            <option value="Selecione seu estado" selected disabled>Selecione seu estado</option>
                            <option value="Acre (AC)">Acre (AC)</option>
                            <option value="Alagoas (AL)">Alagoas (AL)</option>
                            <option value="Amapá (AP)">Amapá (AP)</option>
                            <option value="Amazonas (AM)">Amazonas (AM)</option>
                            <option value="Bahia (BA)">Bahia (BA)</option>
                            <option value="Ceará (CE)">Ceará (CE)</option>
                            <option value="Distrito Federal (DF)">Distrito Federal (DF)</option>
                            <option value="Espírito Santo (ES)">Espírito Santo (ES)</option>
                            <option value="Goiás (GO)">Goiás (GO)</option>
                            <option value="Maranhão (MA)">Maranhão (MA)</option>
                            <option value="Mato Grosso (MT)">Mato Grosso (MT)</option>
                            <option value="Mato Grosso do Sul (MS)">Mato Grosso do Sul (MS)</option>
                            <option value="Minas Gerais (MG)">Minas Gerais (MG)</option>
                            <option value="Pará (PA)">Pará (PA)</option>
                            <option value="Paraíba (PB)">Paraíba (PB)</option>
                            <option value="Paraná (PR)">Paraná (PR)</option>
                            <option value="Pernambuco (PE)">Pernambuco (PE)</option>
                            <option value="Piauí (PI)">Piauí (PI)</option>
                            <option value="Rio de Janeiro (RJ)">Rio de Janeiro (RJ)</option>
                            <option value="Rio Grande do Norte (RN)">Rio Grande do Norte (RN)</option>
                            <option value="Rio Grande do Sul (RS)">Rio Grande do Sul (RS)</option>
                            <option value="Rondônia (RO)">Rondônia (RO)</option>
                            <option value="Roraima (RR)">Roraima (RR)</option>
                            <option value="Santa Catarina (SC)">Santa Catarina (SC)</option>
                            <option value="São Paulo (SP)">São Paulo (SP)</option>
                            <option value="Sergipe (SE)">Sergipe (SE)</option>
                            <option value="Tocantins (TO)">Tocantins (TO)</option>
                        </select>
                    </div>

                    <div class="col-12">
                        <hr class="line mt-3" />
                    </div>


                    <div class="col-md-8 mt-3">
                        <label class="form-label" for="formaPgto">
                            Forma de pagamento <span class="text-danger">*</span>
                        </label>
                        <select type="text" name="formapgto" id="formaPgto" class="form-select" required>
                            <option value="Selecione a forma de pagamento" selected disabled>Selecione a forma de pagamento</option>
                            <option value="Boleto">Boleto em até 3x</option>
                            <option value="Cartão de crédito">Cartão de crédito em até 10x + juros</option>
                            <option value="Pagamento à vista">Pagamento à vista / PIX</option>
                        </select>
                    </div>

                    <div class="col-md-12 mt-3">
                        <label class="form-label" for="informacao">
                            Alguma informação importante </label>
                            <textarea type="text" name="informacaoimportante" id="InformacaoImportante" class="form-control" rows="4"></textarea>
                    </div>

                    <div class="form check col-md-12 mt-3">
                            <input type="checkbox" name="deacordo" value="1" id="deAcordo" class="form-check-input" placeholder="de acordo" required />
                            <label class="form-check-label">Eu concordo com as <a class="link" href="#">condições de matrícula</a> após enviar este formulário <span class="text-danger">*</span></label>
                    </div>

                    <div class="col-12 mt-3">
                        <button type="submit" class="btn btn-lg btn-success" style="float: right;">Enviar</button>
                    </div>



                </div>
            </form>

        </div>
    </div>

</div>

@endsection
