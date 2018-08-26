<?php
class Funcionario {
    private $nome;
    private $cargo;
    private $idade;
    private $tel;
    
    function __construct($nome, $cargo, $idade, $tel) {
        $this->nome = $nome;
        $this->cargo = $cargo;
        $this->idade = $idade;
        $this->tel = $tel;
    }

    function getNome() {
        return $this->nome;
    }

    function getCargo() {
        return $this->cargo;
    }

    function getIdade() {
        return $this->idade;
    }

    function getTel() {
        return $this->tel;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setCargo($cargo) {
        $this->cargo = $cargo;
    }

    function setIdade($idade) {
        $this->idade = $idade;
    }

    function setTel($tel) {
        $this->tel = $tel;
    }


}
