<?php
    require ("pessoa.php");
    require ("retangulo.php";)
    class Fruta{
        // atributos 
            public $nome;
            public $cor;
        
        // metodos 
        function __construct($nome, $cor){
            $this->nome = $nome;
            $this->cor = $cor;
        }
        function get_name(){
            return $this->nome;
        }

        function set_cor($cor){
            $this->cor = $cor;
        }
        function get_cor(){
            return $this->cor;
        }
    }

    $maca = new Fruta("maca_ifsp_turmab", "vermelho");
    $nabana = new Fruta("nabana_ifsp_turmab", "amarelo");

    echo  $maca->get_name();
    echo "<br>".$maca->get_cor();
    echo "<br>". $nabana->get_name();
    echo "<br>".$nabana->get_cor();

    $aluno1 = new Pessoa("Renato", 18, "Professor"); 
    $aluno2 = new Pessoa("Renatinho", 8, "Aluno");

    echo $aluno1->apresentar();
    echo $aluno2->apresentar();

    $retangulo = new Retangulo(2,6);

    echo $retangulo->calcular_area();
    echo $retangulo->calcular_perimetro();
    
?>
