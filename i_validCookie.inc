<?php 
//verificando a exitesncia do cookie
if(isset($_COOKIE["numLogin"])){
    $n1=$_GET["num1"];
    $n2=$_COOKIE["numLogin"];

    if($n1 != $n2){
      echo ("login não efetuado");
      exit;
    }
  }else{
    echo ("login não efetuado");
    exit;
  }

?>