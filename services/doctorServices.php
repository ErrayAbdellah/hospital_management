<?php

    $connection = new DbConnection() ;
    $connect = $connection->connection() ;

    function selectAllOfDoctors(){
        global $connect ;
        $query = "SELECT * FROM doctor" ;
        $stmt = $connect->prepare($query) ;
        $stmt->execute() ;
        $result = $stmt->fetchAll() ;
        throwData($result) ;
    }
    echo "here" ;
    selectAllOfDoctors() ;
    echo "heloi^por" ;