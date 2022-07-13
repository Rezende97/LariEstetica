<?php

    class Conexao {

        private $conn = '';

        private $host = "localhost";

        private $user = "root";

        private $pass = "";

        private $dbname = "lariestetica";

        public function conn() {
           
           return $this->db();
            
        }

        private function db(){

            try {
                
                $this->conn = new PDO("mysql: host=" .$this->host. ";dbname=" .$this->dbname. ";", $this->user, $this->pass);
                $this->conn->exec('SET CHARACTER UTF-8');     
                $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $erro) {
                
                $erro = 'Falha na Conexão';
                die($erro);
            }

            return $this->conn;
        }
    }