<?php
    class ControleCaixa{
        private $operadores;
        private $entrada;
        private $saida;
        //metodo automatico
        public function __construct(){
            echo "Mercadinho do Zé das Couves<br>";
            echo "Data: ".date('d/m/Y')."<br>";
            $this->teste();
        }
        public function teste(){
            echo "<h1>IF - Guarulhos</h1>";
        }
        public function setNome($nm){
            $this->operadores = $nm;
        }
        public function setEntrada($en){
            $this->entrada = $en;
        }
        public function setSaida($sa){
            $this->saida = $sa;
        }
        public function getNome(){
            return $this->operadores;
        }
        public function getEntrada(){
            return $this->entrada;
        }
        public function getSaida(){
            return $this->saida;
        }
        public function caixas($nm,$en,$sa){
            $this->setNome($nm);
            $this->setEntrada($en);
            $this->setSaida($sa);
            $total = $this->getEntrada()-$this->getSaida();
            echo "Operador: ".$this->getNome()."; Total: " .$total;
        }
    }
?>