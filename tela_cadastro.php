<?php 
  include "i_connectionDb.inc";
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Show do Milhão - Tela inicial</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <style>
    body {
      background-image: url("images/background\ -\ rankingmaior.png");
      background-size: cover;
      background-position: sticky;
      background-repeat: repeat;
    }

    .card {
      background-color: rgba(169, 164, 179, 1);
    }

    img#logo {
      display: block;
      margin-left: auto;
      margin-right: auto;
      margin-top: 70px;
    }

    .form-control {
      background-color: rgba(169, 164, 179, 1);
    }

    input[type=text],
    input[type=password],
    input[type=email],
    textarea {
      border: 2px solid #4d4d4d;
      /* Cor da borda */
      border-radius: 10px;
      background-color: rgba(169, 164, 179, 1);
      /* Cor de fundo */
      transition: background-color 0.5s ease-in-out;
    }

    input[type=text]:focus,
    input[type=password]:focus,
    input[type=email]:focus textarea:focus {
      outline: none;
      border-color: #6c757d;
      /* Cor da borda ao clicar */
    }

    label {
      color: rgba(38, 13, 51, 1);
      font-size: large;
    }

    .btn-primary {
      text-align: center;
      border-radius: 15px;
      background-color: rgba(21, 122, 140, 1);
      color: rgba(38, 13, 51, 1);
    }

    .btn-primary:hover {
      background-color: rgba(38, 13, 51, 1);
      color: rgba(21, 122, 140, 1);
    }
  </style>
</head>

<body>
  <img id="logo" src="images/Show do Milhãobranco.png" alt="" width="300" height="90">
  <div class="card" style="width: 600px; height: 620px; margin: 100px auto; border-radius: 25px;">
    <div class="card-body">
      <!-- conteúdo a partir daqui -->
      <form action="script.php" method="post">
        <div class="form-group">
          <label class="text-left" for="nome">Nome</label>
          <input name = f_name type="text" class="form-control" id="nome" placeholder="Digite seu nome completo">
        </div>

        <div class="form-group mb-4">
          <label for="Nickname">Nickname</label>
          <input name = f_nickName type="text" class="form-control" id="Nickname" placeholder="Digite seu Nickname">
        </div>

        <form action="script.php" >
          <div class="form-group">
            <label for="exampleFormControlFile1">Escolha uma bela foto sua :</label>
            <input type="file" class="form-control-file" id="exampleFormControlFile1">
          </div>
        </form>

        <div class="form-group">
          <label class="text-left" for="email">Endereço de email</label>
          <input name = f_cadEmail type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Seu email">
        </div>

        <div class="form-group">
          <label class="text-left" for="Senha">Senha</label>
          <input name ="f_senha_cadastro" type="password" class="form-control" id="Senha" placeholder="Senha">
        </div>

        <div class="form-group">
          <label class="text-left" for="ConfirmarSenha">Confirmar Senha</label>
          <input name = "f_Confirma_senha_cadastro" type="password" class="form-control" id="ConfirmarSenha" placeholder="Confirmar Senha">
        </div>

        <!-- Botão de confirmação, retirar para usar
              <div class="form-group form-check">
                  <input type="checkbox" class="form-check-input" id="checkin">
              <label class="form-check-label" for="checkin">Clique aqui</label>
            </div>-->
            
            <script>
             /* let senha;
              function validateForm() {
                var password = document.getElementById("Senha");
                var confirmPassword = document.getElementById("ConfirmarSenha");

                if (password.value != confirmPassword.value) {
                  confirmPassword.setCustomValidity("As senhas não coincidem");
                } else {
                  confirmPassword.setCustomValidity("");
                  senha = confirmPassword;
                }
              }*/
               
              <?php 
                $f_senha = "<script>document.write(senha)</script>";
              ?> 
          </script>

        <div class="text-center">
          <button name="submit" type="submit" class="btn btn-primary font-weight-bold" onclick="validateForm()">Enviar</button>
        </div>
      </form>
    </div>
  </div>
  
</body>

</html>
<!--Código de botão para Nick com atentucação

<div class="col-md-4 mb-3">
      <label for="validationServerUsername">Usuário</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroupPrepend3">@</span>
        </div>
        <input type="text" class="form-control is-invalid" id="validationServerUsername" placeholder="Usuário" aria-describedby="inputGroupPrepend3" required>
        <div class="invalid-feedback">
          Por favor, escolha um nome de usuário.
        </div>
      </div>
    </div>

-->

<?php 
 mysqli_close($con);//fechando conexãp com o banco
?>