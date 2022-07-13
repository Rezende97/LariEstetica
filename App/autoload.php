<?php

    spl_autoload_register(function($class){

        $diretorios = [
            'Libraries'
        ];

        foreach($diretorios as $diretorio){
            $direcao = (__DIR__.DIRECTORY_SEPARATOR.$diretorio.DIRECTORY_SEPARATOR.$class.".php");

            if(file_exists($direcao)){
                require_once $direcao;
            }
        }
    });