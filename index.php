<?php

  $t1 = $_POST['t1'];

  function trocarcaracteres($valor) {
    print str_replace("a","4",$valor);
  }

  trocarcaracteres($t1);


  $t1 = $_POST['t1'];

  function numtotal($valor) {
    $a = strlen($valor);
    for($i=0;$i<$a;$i++){
      print $i." ";
    }
  }
  print strlen($t1)."<br><hr>";
  numtotal($t1);




?>