<?php
    include('fonction.php');
    $data=null;

    if(isset($_POST['user'])){
        if($_POST['user']=="admin"){
            $data=getLogin(1);
        }else{
            $data=getLogin(0);
        }
    }
    echo json_encode($data);
?>