<?php  
        require "./templates/header.php" ;
        require "./services/test.php" ;

        if(isset($_GET['action']) && $_GET['action'] === 'fetch'){
            $data = fetchdata() ;
            // throwData($data) ;
        }

?>    
 <div class="container bg-muted text-white">
    <ul class="list-group">
    <?php foreach($data[0] as $key => $value) :   ?>
        <li class="list-group-item"><?= $key ?> <strong><?= $value ?></strong></li>
    <?php endforeach ; ?>
    </ul>
</div>
<button class="btn btn-muted fw-bold text-white">
   <a href="index.php?&action=fetch">Fetch</a>
</button> 
<?php require "./templates/welcome.php" ; ?>

<?php  require "./templates/footer.php" ; ?>
    


