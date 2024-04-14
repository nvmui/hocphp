<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" type="text/css" href="../style/index.css">
    <title>Quản trị hệ thống</title>
</head>
<body>
    <div class="container bg-light">
        <div class="row bg">
            <img src="../image/banner-quan-tri-2.jpg" height="200px" alt="">
        </div>
        <div class="row mt-2">
            <div class="col-md-3 menu_left">
                <h3>Danh mục</h3>
                <ul>
                    <li><a href="index.php?admin=sanpham">Danh mục sản phẩm</a></li>
                    <li><a href="#">Danh mục loại</a></li>
                    <li><a href="#">Danh mục nhà sản xuất</a></li>
                    <li><a href="#">Quản lý đơn hàng</a></li>
                    <li><a href="#">Quản lý hệ thống</a></li>
                </ul>
            </div>
            <div class="col-md-9">
                <p style="background-color: #09F; color: white; font-weight: bold; text-align: center; line-height: 40px;">HIỂN THỊ CHỨC NĂNG</p>
                <?php
                    include('../ketnoi/ketnoicsdl.php');
                    if(isset($_GET['admin'])){
                        switch($_GET['admin']){
                            case 'addsanpham':{
                                include('./frmsanpham.php');
                                break;
                            }
                            case 'sanpham':
                                include('./dmsanpham.php');
                                break;
                            default:
                            break;
                        }
                    }else{
                        include('./dmsanpham.php');
                    }
                ?>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>