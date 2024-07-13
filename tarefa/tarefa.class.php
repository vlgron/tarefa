<?php 

    class atividade {

        private $atividade;
        private $id;


        function __construct($atividade, $id){
            $this->atividade = $atividade;
            $this->id = $id;
        }

        public function getAtividade() {
            return $this->atividade; 
        }
        public function setAtividade($atividade) {
            $this->atividade = $atividade;
        }

        public function getId() {
            return $this->id;
        }
        public function setId($id) {
            $this->id = $id;
        }  
            
                
    }

?>