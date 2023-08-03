<?php
    class Pessoa{
        // atributos da class pessoa
        public $nome;
        public $idade;
        public $profissao;
    }

    //metodos de classe
    function __construct($nome, $idade, $profissao){
        $this->nome = $nome;
        $this->idade = $idade;
        $this->profissao = $profissao;
    }
   
    function get_nome(){
        return $this->nome;
    }

    function get_idade(){
        return $this->idade;
    }

    function get_profissao(){
        return $this->profissao;
    }

    function apresentar(){
        return "<br>". "Olá, meu nome é " . $this->get_nome().
        "Tenho " . $this->get_idade().
        "Trabalho como" . $this->get_profissao();
    }
?>
