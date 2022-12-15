<?php 
    require '../../_classes/DbConnection.php';
    require '../../_classes/AdminCrud.php';

    $connection = new DbConnection();
    $connect = $connection->connection();

    $info  = [];
    if(count($_POST) > 0){
        $info['data_type'] = $_POST['data_type'];
        if($info['data_type'] == 'edit-doctor'){
            $id = $_POST['id'];
            
            $admin = new AdminCrud();
            $data = $admin->editDoctor($id);
            
            $info['data'] = $data;
        }
    }
    echo json_encode($info);
?>