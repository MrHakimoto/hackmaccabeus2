<?php
$n1 = $_POST['n1'];


  print "Número de digitos: ".strlen($n1)."<br>"."Primeiro digito: ".substr($n1, 0, 1);


  $dia = $_POST['dia'];

  function dia($valor) {
    if ($valor == 1) {
      print "Domingo";
    }
    elseif ($valor == 2) {
      print "Segunda-Feira";
    }
    elseif ($valor == 3) {
      print "Terça-Feira";
    }
    elseif ($valor == 4) {
      print "Quarta-Feira";
    }
    elseif ($valor == 5) {
      print "Quinta-Feira";
    }
    elseif ($valor == 6) {
      print "Sexta-Feira";
    }
    elseif ($valor == 7) {
      print "Sábado";
    }
    else {
      print "Número inválido.";
    }
  }

  dia($dia);

  ?>