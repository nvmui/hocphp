<?php
    if(isset($_GET['content'])=="add"){
        $idsp = $_GET['id'];
        $tensp = $_POST['tensp'];
        $giasp = $_POST['giasp'];
        $sl = $_POST['sl'];
        if(isset($_SESSION['card'][$idsp])){
            $_SESSION['card'][$idsp]['sl'] = $_SESSION['card'][$idsp]['sl'] + $sl;
            header('location: index.php');
        }else{
            $_SESSION['card'][$idsp]=array(
                'tensp' => $tensp,
                'giasp' => $giasp,
                'sl' => $sl
            );
            header('location: index.php');           
        }
    }
?>