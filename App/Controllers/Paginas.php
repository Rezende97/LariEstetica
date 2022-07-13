<?php

    
    class Paginas extends Controlador {

        public function index(){

            $index = [
                "frase" => "estrutura"
            ];
           
            $this->Views('Paginas/Home', $index);
        }


    }