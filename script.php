<?php
echo "nome: " . $_POST["name"];
echo "<br>cpf: " . $_POST["cpf"];
echo "<br>Contato: " . $_POST["mobile-number"];
echo "<br>endereco: " . $_POST["adress"];
echo "<br>email: " . $_POST["email"];
if(empty($_POST["cpf"])) { echo "<br>o campo CPF e obrigatorio!";}
if(empty($_POST["email"])) { echo "<br>o campo email e obrigatorio!";}
?>
