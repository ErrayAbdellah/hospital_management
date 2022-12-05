<?php  
        require "./templates/header.php" ;
        require "./includes/autoloader.php" ;
        require "./includes/functions.php" ;
        $connection = new DbConnection() ;
        $connect = $connection->connection() ;

    $query = "SELECT * FROM dummy" ;
    $stmt = $connect->query($query) ;
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC) ; 
    throwData($data[0]) ;
    // foreach($data[0] as $key => $value){
    //     echo "$key : $value"  ;
    //     echo "<hr>" ;
    // }
    // die() ;
    // throwData($data) ;
?>      
<div class="container bg-muted text-white">
    <ul class="list-group">
    <?php foreach($data[0] as $key => $value) :   ?>
        <li class="list-group-item"><?= $key ?> <strong><?= $value ?></strong></li>
    <?php endforeach ; ?>
    </ul>

</div>
<?php  require "./templates/footer.php" ; ?>
    


