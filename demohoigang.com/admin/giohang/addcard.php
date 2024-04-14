<?php
    if(isset($_GET['content'])){
        if($_GET["content"]=="add"){
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
        }
        if($_GET["content"]=="delete"){
            $id = $_GET['id'];
            unset($_SESSION['card'][$id]);
            echo "AAAA ".$id;
            //echo '<script>window.location.href="index.php?content=viewcard"</script>'; 
            header('location: index.php?content=viewcard');
        }
    }else{

    }
?>