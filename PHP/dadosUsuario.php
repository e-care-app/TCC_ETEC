<html>
<head>
    <meta charset="utf-8">
    <title>Dados Pessoais </title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="css/estilo.css" />

</head>

<body style="background-color: rgb(255,0,0,0.7)">
        
    <body>
    <div class="container">
        <div class="col-12" style="margin-top: 50px; margin-left: 10px"> 
        <fieldset style="border: 3px dashed #000; padding: 30px; border-style:double; text-align:justify"> <legend> &nbsp;  &nbsp;  &nbsp;DADOS PESSOAIS</legend>
        <form name="frmcadastrar" method="post" action=""> 
            <p><strong>Por favor preencha os dados abaixo:</strong></p>
            <div class="row">
                 <div class="col-lg-4 col-md-4 col-sm-12">
                    <label>CPF:</label>  
                    <input type="text" class="form-control" size="15" max="15" name="cpf3" id="cpf3" placeholder="&nbsp;Somente n&uacute;meros"/>
                </div>       
                <div class="col-lg-8 col-md-8 col-sm-12">
                    <label>Nome:</label> <br>
                    <input type="text" class="form-control" size="70" max="150" name="nome" id="nome" placeholder="&nbsp;Nome completo sem abreviar"/>  
                </div> 
               
            </div>    
            
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <label>Senha <i style="font-size: 14px">(at&eacute; 10 caracteres, n&uacute;meros e/ou letras)</i>:</label>
                    <input type="password" class="form-control" name="senha1" id="senha1" placeholder="&nbsp;Digite a senha"/>
                </div>    
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <label>Confirme sua senha:</label>
                    <input type="password" class="form-control" name="senha2" id="senha2" placeholder="&nbsp;Repita sua senha"/>  
                </div>    
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <label>E-mail: </label>
                    <input type="text" class="form-control" size="30" max="30" name="email1" id="email1" placeholder="&nbsp;E-mail"/>
                </div>    
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <label>Confirme seu e-mail: </label>
                    <input type="text" class="form-control" size="30" max="30" name="email2" id="email2" placeholder="&nbsp;Repita seu e-mail"/>
                </div>    
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <label> Contato: </label> 
                    <input type="text" class="form-control" name="celular" size=12 id="celular" placeholder=" DDD Contato"/> 
                </div>    
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <label> Whatsapp: </label> 
                    <input type="text" class="form-control" size=12 name="zap" id="zap" placeholder=" DDD Whatsapp"/>
                </div>    
            </div>
            
            <div class="row">
                <div class="col-lg-10 col-md-10 col-sm-12">
                    <label>Logradouro: </label> 
                    <input type="text" class="form-control" name="logradouro" size=12 id="logradouro" placeholder=" Logradouro"/> 
                </div>    
                <div class="col-lg-2 col-md-2 col-sm-12">
                    <label> N&#186; </label> 
                    <input type="text" class="form-control" size=12 name="numero" id="numero" placeholder=" N&uacute;mero"/>
                </div>    
            </div>
            
            
             <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-12">
                    <label>Bairro: </label> 
                    <input type="text" class="form-control" name="bairro" size=12 id="bairro" placeholder=" Bairro"/> 
                </div>    
                <div class="col-lg-6 col-md-6 col-sm-10">
                    <label>Cidade</label> 
                    <input type="text" class="form-control" size=12 name="cidade" id="cidade" placeholder=" Cidade"/>
                </div>     
                <div class="col-lg-1 col-md-1 col-sm-2">
                    <label>UF</label> 
                    <input type="text" class="form-control" size=12 name="uf" id="uf" placeholder=" UF"/>
                </div>    
            </div>

            <br>
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12">

                </div>    
                <div class="col-lg-4 col-md-8 col-sm-12">
                    <input type="submit" class="" style="float: right" name="inserir" value="Cadastrar"/> 
                </div>    
            </div>
        </form>
    </div>   
    </div>
     

    <script src="./jquery/jquery-3.3.1.js"> </script>
    <script src="./js/bootstrap.js"> </script>
    <script src="./js/meuestilo.js"> </script>
</body>
</html>