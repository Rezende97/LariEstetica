<?php

    class Insere extends Conexao {

        private $querys;

        public function query($query){
            
            $this->querys = parent::conn()->prepare($query);
        }

        public function bind($parametro, $valor, $tipo = null){

            if(is_null($tipo)){

                switch (true) {

                    case is_int($valor):
                        $tipo = PDO::PARAM_INT;
                    break;

                    case is_bool($valor):
                        $tipo = PDO::PARAM_BOOL;    
                    break;
                    
                    case is_null($valor):
                        $tipo = PDO::PARAM_NULL;
                    break;

                    default:
                        $tipo = PDO::PARAM_STR;
                   
                }

                $this->querys->bindValue($parametro, $valor, $tipo);
            }
        }

        public function executa(){

            return $this->querys->execute();
        }

        public function resultado(){

            $this->executa();
            return $this->querys->fetch(PDO::FETCH_OBJ);
            
      
        }

        public function resultados(){
            $this->executa();
            return $this->querys->fetchAll(PDO::FETCH_OBJ); 
        }

        public function totalResultado(){

           return $this->querys->rowCount();
        }

        public function ultimoId(){

            return $this->querys->lastInsertId();
        }
    }