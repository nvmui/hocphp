<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" type="text/css" href="style/index.css">
    <title>Hội giảng</title>
</head>
<?php
    session_start();//bắt đầu một phiên giao dịch
    ob_start();// lưu trữ dữ liệu vào bộ nhớ tạm
?>
<body>
    <div class="container-fluid bg-light">        
        <div class="row">
            <nav class="navbar navbar-expand-lg menu_top">
                <div class="container-fluid">
                    <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse " id="navbarText">
                        <ul class="navbar-nav  me-auto mb-2 mb-lg-0 ">
                            <li><a href="./index.php">Trang chủ</a></li>
                            <?php
                                require('./menu_top.php');
                            ?>                                                         
                        </ul>
                        <span class="navbar-text text-right">
                            <?php
                                if(isset($_SESSION['card'])!=null){
                                    $count = count($_SESSION['card']);
                                }else{
                                    $count = 0;
                                }
                                echo "<a href='./index.php?content=viewcard'><p class='lbl_gio'>Giỏ hàng có " .$count." sản phẩm</p> </a>";
                            ?>
                            
                        </span>
                        <span class="navbar-text text-right">
                            <?php
                                // if(isset($_SESSION['card'])!=null){
                                //     $count = count($_SESSION['card']);
                                // }else{
                                //     $count = 0;
                                // }
                                // echo "<a href='./index.php?content=viewcard'><p class='lbl_gio'><i class='bi bi-cart'></i> Giỏ hàng có ". $count ." sản phẩm</p></a>";
                            ?>
                        </span>
                    </div>
                </div>
            </nav>            
        </div>
        <div class="row">
            <img src="./image/dienthoai.jpg" height="150px" alt="">
        </div>
        <div class="row mt-2">
            <div class="col-md-3 menu_left">
                <div class="danhsach">
                    <p style="text-align:center; background:#09F; color:#F00;padding:7px; font-weight:bold; font-size:18px">Theo hãng</p>
                    <ul>
                        <?php
                        require('./menu_thuonghieu.php');
                        ?>
                    </ul>
                    <p style="text-align:center; background:#09F; color:#F00;padding:7px; font-weight:bold; font-size:18px">Hỗ trợ</p>
                    <img src="image/images.jpg" height="130px" width="200px">
                </div>   
            </div>
            <div class="col-md-9">
                <p style="text-align:center; background:#09F; color:#FFF;padding:7px; font-weight:bold;font-size:large">Hiển thị sản phấm</p>
                <div class="row">
                    <?php                        
                        if(isset($_GET['content'])){
                            switch($_GET['content']){
                                case 'add':{
                                    include('./admin/giohang/addcard.php');
                                    break;
                                }
                                case 'viewcard':{
                                    include('./admin/giohang/viewcard.php');
                                    break;
                                }
                                default:
                                break;
                            }
                        }else{
                            include('./laysanpham.php');
                        }
                    ?>                    
                </div>               
            </div>
        </div>
        <div class="row">
        	<p style="text-align:center;background-color:#079992;line-height:50px; font-weight:bold;color:#FFF">Copyright &copy; 2024 Design by Nguyễn Văn Mùi</p>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <?php
      ob_end_flush();
    ?>
</body>
</html>