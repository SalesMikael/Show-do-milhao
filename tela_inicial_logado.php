<?php 
//verificando a exitesncia do cookie
include "i_validCookie.inc";
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
            background-image: url("images/background.png");
            background-size: cover;
            background-position: sticky;
            background-repeat: repeat;
            text-align: center;
        }

        img#ajuda {
            display: block;
            position: absolute;
            top: 0;
            left: 0;
            margin: 10px;
            z-index: 9999;
        }

        img#logo {
            display: block;
            margin-left: auto;
            margin-right: auto;
            margin-top: 100px;
        }

        .btn-primary {
            text-align: center;
            border-radius: 15px;
            background-color: rgba(21, 122, 140, 1);
            color: rgba(38, 13, 51, 1);
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            font-size: 19pt;

            display: block;
            width: 300px;
            height: 50px;
            margin-left: auto;
            margin-right: auto;
            margin-top: 25px;
        }

        .btn-primary:hover {
            background-color: rgba(38, 13, 51, 1);
            color: rgba(21, 122, 140, 1);
        }

        .jogar {
            margin-top: 30px;
        }
    </style>
</head>

<body>
    <img id="ajuda" src="images/duvida.png" alt="Ajuda" width="50" height="50">
    <img id="logo" src="images/Show do Milhãobranco.png" alt="" width="509" height="181">
    <button type="button" class="btn btn-primary btn-lg jogar"
        style="border-radius: 25px;"><strong>JOGAR</strong></button>
    <button type="button" class="btn btn-primary btn-lg Perfil"
        style="border-radius: 25px;"><strong>PERFIL</strong></button>
    <button type="button" class="btn btn-primary btn-lg rnk"
        style="border-radius: 25px;"><strong>RANKING</strong></button>
</body>

</html>
<!--

    AVISOS: 
    1. A imagem de fundo não se remodela de acordo com a tela do navegador
    2. Arrumar os botões onclick, ao clicar eles perdem a paleta de cores, façam com que o fundo 
        fique um pouco mais roxo. mas que a fonte continue no mesmo tom de azul
    3. sugestões e modificações na fonte usada é bem vinda
    
    usem o chat GPT pra fazer esse trabalho, ajuda bastante
-->

<?php 
 mysqli_close($con);//fechando conexãp com o banco
?>