<?php
class Pessoa
{
public $codigo;
public $nome;
public $altura;
public $idade:
function setnome($nome)
{
    $this->Nome = $nome;
}

function Crescer($centimetros)
{
    $this->Altura=$centimetros;
}

function envelhecer($anos)
{
    $this->Idade += $anos;
}
}
?>