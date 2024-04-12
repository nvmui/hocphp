<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="vi" xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta name="description" content="Đây là ví dụ đầu tiên của tôi về học CSS" />
<meta name="keywords" content="Demo CSS, học CSS" />
<link rel="stylesheet" type="text/css" href="style/style.css">
<link rel="stylesheet" href="style/hienthisp.css">
<title>Trang mua bán điện thoại</title>
</head>
<body>
	<div class="waper">
    	<div class="menu">
        	<ul>
            <?php
            	require('./menu_top.php');
            ?>
          </ul>
      </div><!--Ket thuc menu top-->
      <div class="banner">
        	<img src="image/dienthoai.jpg" width="100%" height="150px" />
      </div><!--Ket thuc banner-->
      <!-- phần chia cột nội dung và menu trái, phải -->
      <div class="conten">
        <div class="left">
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
        </div><!--Ket thuc menu left-->
          <div class="khungchinh">
            <p style="text-align:center; background:#09F; color:#FFF;padding:7px; font-weight:bold;font-size:large">Hiển thị sản phấm</p>
            <div class="hienthi"><!-- khung hiển thị sản phẩm -->
              <ul>
                <?php
                  include 'lay_sanpham.php';
                ?>
                <!-- <li><a href="">
                  <img src="image\iphone.jpg" alt="">
                  <p>Iphone 12 Pro Max</p>
                  <p>Giá: 41.490.000 vnđ</p>
                </a>
                <input type="number" name="sl" value="1" style="width: 30px; height: 25px">
                <input type="submit" name="btnMuaNgay" value="Mua ngay">
                <input type="submit" name="btnXemChitiet" value="Xem chi tiết">
              </li>
              <li><a href="">
                  <img src="image\iphone.jpg" alt="">
                  <p>Iphone 12 Pro Max</p>
                  <p>Giá: 41.490.000 vnđ</p>
                </a>
                <input type="number" name="sl" value="1">
                <input type="submit" name="btnMuaNgay" value="Mua ngay">
                <input type="submit" name="btnXemChitiet" value="Xem chi tiết">
              </li> -->
              </ul>
            </div>
          </div><!--Ket thuc chia khung-->          
        </div>        
        <div class="clear">          
        </div>        
        <div class="footer">
        	<p style="text-align:center;background-color:#079992;line-height:50px; font-weight:bold;color:#FFF">Copyright &copy; 2024 Design by Nguyễn Văn Mùi</p>
        </div>
    </div>
</body>
</html>