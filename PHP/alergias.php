<html>

<head>
    <meta charset="utf-8">
    <title>Alergias </title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="css/estilo.css" />

</head>

<body>

    <!--    <body style="background-color: #8A0808">  -->

    <body>
        <div class="container">
            <div class="col-12" style="margin-top: 50px; margin-left: 10px">
                <fieldset style="border: 3px dashed #000; padding: 30px; border-style:double; text-align:justify">
                    <legend> &nbsp; &nbsp; &nbsp;Alergias</legend>
                    <form name="frmcadastrar" method="post" action="">
                        <p><strong>Por favor preencha os dados abaixo:</strong></p>

                        <div class="row">
                            <div class="col-4">
                                <label> Medicamentos: </label>
                                <input type="submit" class="botao" style="display: line; float: right; padding: 10px" name="voltar" value="+" />
                                <input type="text" class="form-control" name="celular" size=12 id="celular" placeholder=" Medicamentos" />

                            </div>
                        </div>

                        <div class="row">
                            <div class="col-4">
                                <label> Alimentos: </label>
                                <input type="submit" class="botao" style="display: line; float: right; padding: 10px" name="voltar" value="+" />
                                <input type="text" class="form-control" name="celular" size=12 id="celular" placeholder=" Alimentos" />
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-4">
                                <label> Outras: </label>
                                <input type="submit" class="botao" style="display: line; float: right; padding: 10px" name="voltar" value="+" />
                                <input type="text" class="form-control" name="celular" size=12 id="celular" placeholder=" Outras" />
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