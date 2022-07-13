<?php

    class Controlador {

        public function Model($model){

            require "../App/Models/" .$model. ".php";

            return new $model;
        }

        public function Views ($views, $dados = []){

            $arquivo = ("../App/Views/" .$views. ".php");
            
            if(file_exists($arquivo)){

                require_once $arquivo;
               
            }else {

                $mensagem = "arquivo inexistente";

                die($mensagem);
            }
        }
        
    }