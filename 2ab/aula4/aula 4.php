<?php
  //$salario = $dia * $valordia;

  $nome = "Pedro";
  $sobrenome = "Assis";
  $idade = 16;
  $numero = 2024;
  $dia = 22;
  $valordia = 90.35;
  $salario = "";
  $salario = $dia * $valordia;

  
  echo ("Nome: ".$nome."<br>");
  echo ("Sobrenome: ".$sobrenome."<br>");
  echo ("Nome Completo: ".$nome . " " .$sobrenome."<br>");
  echo ("Idade: ".$idade."<br>");
  echo ("Número: ".$numero."<br>");
  echo ("Dia: ".$dia."<br>");
  echo ("Valor dia: ".$valordia."<br>");
  echo ("Salário: R$: ".$salario."<br>");

  print ("####################################################". "<br>" );

  //calculadora 
  $a = 10;
  $b = 20;
  $soma = $a + $b;
  $subtracao = $a - $b;
  $multiplicacao = $a * $b;
  $divisao = $a / $b;

  echo ("".$soma."<br>");
  echo ("".$subtracao."<br>");
  echo ("".$multiplicacao."<br>");
  echo ("".$divisao."<br>");

  print ("####################################################". "<br>" );

  var_dump(5);
  var_dump("Pedro"); 
  var_dump(3.14); 
  var_dump(true); 
  var_dump([2, 3, 56]);
  var_dump(null);

  print ("<br>". "####################################################". "<br>" );
  ?>
