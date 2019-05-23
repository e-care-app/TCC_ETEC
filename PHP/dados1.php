<html>

<head>
    <meta charset="utf-8">
    <title>Dados Pessoais </title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="css/estilo.css" />

</head>

<body>

    <!--    <body style="background-color: #8A0808">  -->

    <body>
        <div class="container">
            <div class="col-12" style="margin-top: 50px; margin-left: 10px">
                <fieldset style="border: 3px dashed #000; padding: 30px; border-style:double; text-align:justify">
                    <legend> &nbsp; &nbsp; &nbsp;DADOS PESSOAIS</legend>
                    <form name="frmcadastrar" method="post" action="">
                        <p><strong>Por favor preencha os dados abaixo:</strong></p>
                        <div class="row">
                            <div class="col-lg-2 col-md-2 col-sm-12">
                                <label>CPF:</label>
                                <input type="text" class="form-control" size="15" max="15" name="cpf3" id="cpf3" placeholder="&nbsp;S&oacute; n&uacute;meros" />
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-12">
                                <label>Nome:</label> <br>
                                <input type="text" class="form-control" size="20" max="40" name="nome" id="nome" placeholder="&nbsp;Nome sem abreviar" />
                            </div>
                            <div class="col-lg-7 col-md-7 col-sm-12">
                                <label>Sobrenome:</label> <br>
                                <input type="text" class="form-control" size="50" max="110" name="nome" id="nome" placeholder="&nbsp;Sobrenome completo sem abreviar" />
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-12">
                                <label>Senha <i style="font-size: 10px">(at&eacute; 10 caracteres, n&uacute;meros e/ou letras)</i>:</label>
                                <input type="password" class="form-control" name="senha1" id="senha1" placeholder="&nbsp;Digite a senha" />
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-12">
                                <label>Confirme sua senha:</label>
                                <input type="password" class="form-control" name="senha2" id="senha2" placeholder="&nbsp;Repita sua senha" />
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-12">
                                <label> Contato: </label>
                                <input type="text" class="form-control" name="celular" size=12 id="celular" placeholder=" DDD Contato" />
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-12">
                                <label> Whatsapp: </label>
                                <input type="text" class="form-control" size=12 name="zap" id="zap" placeholder=" DDD Whatsapp" />
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <label>E-mail: </label>
                                <input type="text" class="form-control" size="30" max="30" name="email1" id="email1" placeholder="&nbsp;E-mail" />
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <label>Confirme seu e-mail: </label>
                                <input type="text" class="form-control" size="30" max="30" name="email2" id="email2" placeholder="&nbsp;Repita seu e-mail" />
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-5 col-md-5 col-sm-12">
                                <label>Logradouro: </label>
                                <input type="text" class="form-control" name="logradouro" size=12 id="logradouro" placeholder=" Logradouro" />
                            </div>
                            <div class="col-lg-1 col-md-1 col-sm-12">
                                <label> n&#186; </label>
                                <input type="text" class="form-control" size=12 name="numero" id="numero" placeholder=" n&#186;" />
                            </div>
                            <div class="col-lg-2 col-md-5 col-sm-12">
                                <label>Bairro: </label>
                                <input type="text" class="form-control" name="bairro" size=12 id="bairro" placeholder=" Bairro" />
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-10">
                                <label>Cidade</label>
                                <input type="text" class="form-control" size=12 name="cidade" id="cidade" placeholder=" Cidade" />
                            </div>
                            <div class="col-lg-1 col-md-1 col-sm-2">
                                <label>UF</label>
                                <input type="text" class="form-control" size=12 name="uf" id="uf" placeholder=" UF" />
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <label>Nome do pai: </label>
                                <input type="text" class="form-control" name="bairro" size=12 id="bairro" placeholder=" Bairro" />
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-10">
                                <label>Nome da m&atilde;e</label>
                                <input type="text" class="form-control" size=12 name="cidade" id="cidade" placeholder=" Cidade" />
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <p>
                                    <label>Possui cart&atilde;o do SUS? </label>
                                    <input type="radio" name="sim" value="sim">Sim</input>
                                    <input type="radio" name="nao" value="nao">N&atilde;o</input>
                                </p>
                                <p>
                                    <label>Carregar a foto cart&atilde;o do SUS FRENTE</label>
                                    <input type="file" id="arquivo" name="arquivo"> </input> <br><br>
                                </p>
                                <p>
                                    <label>Carregar a foto cart&atilde;o do SUS VERSO</label>
                                    <input type="file" id="arquivo" name="arquivo"> </input> <br><br>
                                </p>
                            </div>
                            <div class="col-lg-5 col-md-5 col-sm-12">
                                <p>
                                    <label>Possui seguro de sa&uacute;de? </label>
                                    <input type="radio" name="sim" value="sim">Sim</input>
                                    <input type="radio" name="nao" value="nao">N&atilde;o</input>
                                </p>
                                <p>
                                    <label>Carregar a foto seguro de sa&uacute;de FRENTE</label>
                                    <input type="file" id="arquivo" name="arquivo"> </input> <br><br>
                                </p>
                                <p>
                                    <label>Carregar a foto seguro de sa&uacute;de VERSO</label>
                                    <input type="file" id="arquivo" name="arquivo"> </input> <br><br>
                                </p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-6">
                                <p>
                                <label>&Eacute; doador de &oacute;rg&atilde;os? </label>
                                <input type="radio" name="sim" value="sim">Sim</input>
                                <input type="radio" name="nao" value="nao">N&atilde;o</input>
                            </p>
                            </div>
                            <div class="col-6">
                                <select class="form-control" name="capa">
                                    <option>Tipo sangu&iacute;neo:</option><br>
                                    <option value="Opos">O +  (O positivo)</option><br>
                                    <option value="Oneg">O - (O negativo)</option><br>
                                    <option value="Apos">A + (A positivo)</option>
                                    <option value="Aneg">A - (A negativo)</option>
                                    <option value="Bpos">B + (B positivo)</option><br>
                                    <option value="Bneg">B - (B negativo)</option><br>
                                    <option value="ABpos">AB + (AB positivo)</option>
                                    <option value="ABneg">AB - (AB negativo)</option>
                                </select>
                            </div>
                        </div>
                       <br>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                    <input type="submit" class="botao" style="display: line; float: right; padding: 10px" name="voltar" value="Voltar" />
                                    <input type="submit" class="botao" style="display: line; float: right; padding: 10px" name="consultar" value="Consultar" />
                                    <input type="submit" class="botao" style="display: line; float: right; padding: 10px" name="alterar" value="Alterar" />
                                    <input type="submit" class="botao" style="display: line; float: right; padding: 10px" name="salvar" value="Salvar" />
                                </div>
                        </div>
                    </form>
            </div>
        </div>


        <script src="./jquery/jquery-3.3.1.js">
        </script>
        <script src="./js/bootstrap.js">
        </script>
        <script src="./js/meuestilo.js">
        </script>
    </body>

</html>