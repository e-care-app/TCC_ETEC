<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contato</title>
</head>

<body>
    <div class="container">
        <div class="col-12" style="margin-top: 50px; margin-left: 10px">
            <fieldset style="border: 3px dashed #000; padding: 30px; border-style:double; text-align:justify">
                <legend> &nbsp; &nbsp; &nbsp;Contatos</legend>
                <form name="frmcadastrar" method="post" action="">
                    <p><strong>Em caso de emergência entrar em contato com:</strong></p>

                    <div class="row">
                        <div class="col-4">
                            <label> Nome: </label>
                            <input type="submit" class="botao" style="display: line; float: right; padding: 10px" name="voltar" value="+" />
                            <input type="text" class="form-control" name="contato" size=12 id="contato" placeholder=" Contato" />

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-4">
                            <label> Telefone: </label>
                            <input type="submit" class="botao" style="display: line; float: right; padding: 10px" name="voltar" value="+" />
                            <input type="text" class="form-control" name="telecontato" size=12 id="telecontato" placeholder=" Telecone" />
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-4">
                            <label> Parentesco: </label>
                            <input type="submit" class="botao" style="display: line; float: right; padding: 10px" name="voltar" value="+" />
                            <input type="text" class="form-control" name="parentesco" size=12 id="parentesco" placeholder=" parentesco" />
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