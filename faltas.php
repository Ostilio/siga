<?php

      $faltames=0;
      $faltabim=0;
      $faltaano=0;
      
      $bolsafamilia=0;

      $dialetivoano = $_POST['dletivoano'];
      $dialetivobim = $_POST['dletivobim'];
      $dialetivomes = $_POST['dletivomes'];

      $qtde_falta = $_POST['qtde_falta'];
      $bolsafamilia = ($dialetivomes - (($dialetivomes*85)/100));
      
      $faltaano = (($qtde_falta*100)/$dialetivoano);
      $faltabim = (($qtde_falta*100)/$dialetivobim);
      $faltames = (($qtde_falta*100)/$dialetivomes);
      
      if ($bolsafamilia < $qtde_falta){
          echo ("Falta acima do limite <br>");
          }
      
      echo ("Quantidade de Falta do bolsa familia �: ") . $bolsafamilia . "<br>";
      echo ("A porcentagem de faltas no Ano �: ") . $faltaano . " % <br>";
      echo ("A porcentagem de faltas no Bimestre �: ") . $faltabim . " % <br>";
      echo ("A porcentagem de faltas no M�s �: ") . $faltames . " % <br>";
?>
