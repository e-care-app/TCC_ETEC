<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exames</title>
</head>

<body>
    <div class="container">
        <div class="col-12" style="margin-top: 50px; margin-left: 10px">
            <fieldset style="border: 3px dashed #000; padding: 30px; border-style:double; text-align:justify">
                <legend> &nbsp; &nbsp; &nbsp;Exames</legend>
                <form name="frmcadastrar" method="post" action="">
                    <p><strong>Por favor preencha os dados abaixo:</strong></p>

                    <div class="row">
                        <div class="col-4">
                            <label> Nome do exame: </label>
                            <input type="text" class="form-control" name="celular" size=12 id="celular" placeholder=" Medicamentos" />

                        </div>
                    </div>
                    <div class="col-lg-5 col-md-5 col-sm-12">
                        <select class="form-control" name="capa">
                            <option>M&eacute;dico que prescreveu:</option><br>
                            <option value="Opos">Dr.</option><br>
                            <option value="Oneg">Dra.</option><br>
                        </select>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <label> Data do exame: </label>
                            <input type="date" class="form-control" name="celular" size=12 id="celular" placeholder=" Outras" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <label> Data do resultado:  </label>
                            <input type="date" class="form-control" name="celular" size=12 id="celular" placeholder=" Outras" />
                        </div>
                    </div>
                    <p>
                        <label>Lembrar de fazer o exame? (E-mail)</label>
                        <input type="radio" name="sim" value="sim">Sim</input>
                        <input type="radio" name="nao" value="nao">N&atilde;o</input>
                    </p>
                    <p>
                        <label>Lembrar a data do resultado? (E-mail)</label>
                        <input type="radio" name="sim" value="sim">Sim</input>
                        <input type="radio" name="nao" value="nao">N&atilde;o</input>
                    </p>

                    <p>
                        <label>Carregar a foto do resultado do exame</label>
                        <input type="file" id="arquivo" name="arquivo"> </input> <br><br>
                    </p>

                    <div class="card" style="width: 25rem">
                        <tr>
                            <label for="mensagem"><strong> Observa&ccedil;&atilde;o:</strong></label>
                            <textarea name="p3" type="text" id="p3" cols="55" rows="5" placeholder="Mensagem"></textarea>
                    </div>
                    </tr>


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