<?php
    if(isset($_GET['content'])=='add'){
        $idsp = $_GET['id'];
        $tensp = $_POST['tensp'];
        $giasp = $_POST['giasp'];
        $sl = $_POST['sl'];
        //khi đã có sản phẩm trong giỏ
        if(isset($_SESSION['card'][$idsp])!=null){
            $_SESSION['card'][$idsp]['sl'] = $_SESSION['card'][$idsp]['sl'] + $sl;
            header('location: index.php');
        }else{
        //khi giỏ đang rỗng
            $_SESSION['card'][$idsp] = array(
                'id' =>$idsp,
                'tensp' =>$tensp,
                'giasp' =>$giasp,
                'sl' =>$sl
            );
            header('location: index.php');
        }
    }else{

    }
?>