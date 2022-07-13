<?php

    class Rota {

        private $controlador = "Paginas";

        private $metodo = "index";

        private $parametro = [];

        public function __construct() {
            
            $url = $this->url() ? $this->url() : [0];

            if(file_exists("../App/Controllers/" .ucwords($url[0]). ".php" )){

                $this->controlador = ucwords($url[0]);
                unset($url[0]);
            }

            require "../App/Controllers/" .$this->controlador. ".php";
            $this->controlador = new $this->controlador;

            if(isset($url[1])){

                if (method_exists($this->controlador, $url[1])){
                    $this->metodo = $url[1];
                    unset($url[1]);
                }
            }

            $this->parametro = $url ? array_values($url) : [0];
            call_user_func_array([$this->controlador, $this->metodo], $this->parametro);
        }

        private function url (){

            $url = filter_input(INPUT_GET, 'url', FILTER_SANITIZE_URL);

            if(isset($url)){

                $rota = trim(rtrim($url, "/"));

                $rota = explode("/", $url);

                return $rota;
            }

        }


    }