<?php
include 'classePessoa.php';
$maria = new Pessoa;
$maria->Altura = 1.71;
$maria->Idade = 28;
$maria->SetNome('Maria da Silva');
$maria->Crescer(0.1);
$maria->Envelhecer(1);


?>