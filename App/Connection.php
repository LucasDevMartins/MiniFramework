<?php

    namespace App;

    class Connection {

        public static function getDb() {

            try {
                $conn = new \PDO(
                    "mysql:host=localhost;dbname=mvc;charset=utf8",
                    // usuário e senha do banco de dados
                    "root",
                    ""
                );

                return $conn;

            } catch (\PDOException $e) {
                // Tratar erro da minha forma
            }
        }
    }

?>