<?php
    require "./includes/autoloader.php" ;
    require "./includes/functions.php" ;
    $connection = new DbConnection() ;
    $connect = $connection->connection() ;

    function fetchdata(){
        global $connect ;
        $query = "SELECT * FROM dummy" ;
        $stmt = $connect->query($query) ;
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC) ;
        return $data ;
    } 
    throwData($data[0]) ;
