<?php
    class database
    {
        function __construct($pdo)
        {
            $this->pdo = $pdo;
        }

        function getData($table) //Get all data and recive parameter
        {   
            switch ($table) {
                case 'users':
                    $query = $this->pdo->prepare('SELECT * FROM users');
                    break;
                case 'teams' :
                    $query = $this->pdo->prepare('SELECT * FROM teams');

                default:
                    # code...
                    break;
            }
            
            $query->execute();
            return $query->fetchAll(PDO::FETCH_ASSOC);

        }
/*
        function updateStations($x,$y,$tiled){

            switch (variable) {
                case 'value':
                    $query = $this->pdo->prepare('INSERT INTO stations (posX,posY,tiled) VALUES ($x,$y,$tiled) ');
                    break;
                
                default:
                    # code...
                    break;
            }

            $query->execute();
            return $query->fetchAll();

        }
*/
    }
?>