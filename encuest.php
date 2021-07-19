<?php 
  if(isset($_POST["btnRegister"])){
    $genero = $_POST["genero"]; 

    if($genero == "femenino"){
      $activado = true;
      if($activado){
        setcookie("contfemenino","0",time() + 84600);
        $activado = false;
      }  
      $valuecontfemenino =  $_COOKIE["contfemenino"];
      $result = intval($valuecontfemenino);
      $result += 1;
      $stringresult = strval($result);
      setcookie("contfemenino",$stringresult,time() +84600);      
      header("Location:main.php");

    }else if($genero == "masculino"){
      $activado = true;
      if($activado){
        setcookie("contmasculino","0",time() + 84600);
        $activado = false;
      }
      $valuecontmasculino =  $_COOKIE["contmasculino"];
      $result = intval($valuecontmasculino);
      $result += 1;
      $stringresult = strval($result);
      setcookie("contmasculino",$stringresult,time() +84600);      
      header("Location:main.php");
    }
  }

?>