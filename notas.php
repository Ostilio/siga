<?php

      $nota1=0;
      $nota2=0;
      $nota3=0;
      $nota4=0;
      $soma=0;
      $media=0;
      
      $nota1 = $_POST['nota1'];
      $nota2 = $_POST['nota2'];
      $nota3 = $_POST['nota3'];
      $nota4 = $_POST['nota4'];

      $soma = ($nota1+$nota2+$nota3+$nota4);
      $media = ($soma/4);
      
      echo ("<b> Nota de Lingua Portuguesa </b><br>");
      echo ("Nota do 1� Bimestre: ") . $nota1 . "<br>";
      echo ("Nota do 2� Bimestre: ") . $nota2 . "<br>";
      echo ("Nota do 3� Bimestre: ") . $nota3 . "<br>";
      echo ("Nota do 4� Bimestre: ") . $nota4 . "<br>";
      
      echo ("A m�dia �: ") . $media,2 . "<br>";
      
      if ($media < 7){
          echo ("Reprovado <br>");
          }
      else{
          echo ("Aprovado <br>");
      }

?>
