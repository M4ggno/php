<?php
class Pessoa{
    public $codigo;
    public $nome;

    function _construct($codigo,$nome){
        $this->Codigo = $codigo;
        $this->Nome = $nome;
    }
    function _destruct(){
        echo "desalocando {$this->Nome}\n";
    }
}
$maria = new Pessoa(27,'Maria da Silva');
$joana = new Pessoa(28, 'Joana Maranhão');
var_dump($maria, $joana);
unset($maria);
unset($joana);
?>