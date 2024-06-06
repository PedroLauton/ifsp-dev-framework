<?php 
    include_once "../herança/control/dadogeral.php";
    class cadProfessor extends DadoGeral{
        public $materia = "PHP - POO";
        
        public function exibirprofessor(){
            $nome = "Anselmo";
            $idade = 45;
            echo "Professor: ".$nome."; Idade: ".$idade; 
        }
        
    }
?>