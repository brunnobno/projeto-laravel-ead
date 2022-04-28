<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="author" content="" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="generator" content="" />

    <title>{Formúlario de inscrição}</title>

    <!-- CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<style>

body {
    background: rgba(0, 0, 0, 0.7) url('https://befasterenglish.com.br/wp-content/uploads/2021/02/bg-3.jpg');
    height: 100%;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    background-blend-mode: darken;
        }

</style>

</head>



<body class="container-fluid">

    <div class="row justify-content-center mt-3 mb-3">
        <div class="col-12 col-md-8 border rounded bg-light bg-gradient p-3">

            <span class="h1">{Nome do Formulário de Matrícula}</span><br><br>
            <span class=""><strong>Descrição do curso:</strong> {descrição do curso} </span><br><br>
            <span class=""><strong>Data do curso:</strong> {01/01/2023 até 01/02/2023} </span><br>
            <span class=""><strong>Dia/Horário:</strong> {Segunda, Quarta e Sexta-feira às 20h} </span><br><br>
            <span class=""><strong>Forma de pagamento:</strong></span><br>
            <span class="">R$ 200,00 - à Vista (Pix) </span><br>

            <span class="">R$ 250,00 - Em até 10x (Cartão de Crédito) </span><br><br>

            <span class="">Para concluir sua inscrição preencha o formulário abaixo:</span>

            <form method="POST" action="#" enctype="multipart/form-data" class="needs-validation" novalidate>
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

</body>

<!-- JS Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- Ion Icons -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"> </script>
    <script nomodule src="https://unpkg .com/ionicons@5.5.2/dist/ionicons/ionicons.js"> </script>

</html>
