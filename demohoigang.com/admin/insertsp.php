<?php
    if(isset($_GET['admin'])){
        if($_GET['admin']=='insertsp'){
            $ten_sp = $_POST['sp_ten'];
            $mota_sp = $_POST['sp_mota'];
            $ma_loai = $_POST['ma_loai'];
            $ma_hang = $_POST['ma_hang'];
            $giasp = $_POST['giasp'];
            $soluong = $_POST['soluong'];
            $gaynhap = $_POST['gaynhap'];
            $ghichu = $_POST['ghichu'];
            $hinh_sp = $_FILES['sp_hinh']['name'];
            if($hinh_sp!=''){
                $file_path = '../upload/'.$hinh_sp;
                move_uploaded_file($_FILES['sp_hinh']['tmp_name'],$file_path);
            }
            if($ten_sp!=''){
                $sql = "insert into sanpham(TenSP, Chitiet, Hinhanh, GiaSP, GhiChu, iddm, SoLuong, NgayNhap, idhang) 
                values('$ten_sp','$mota_sp','$hinh_sp', $giasp, '$ghichu', $ma_loai, $soluong,'$gaynhap', $ma_hang)";
                if(mysqli_query($con, $sql)===true){
                    echo "
                        <script language = 'javascript'>
                            alert('Bạn đã thêm mới thành công!')
                            window.open('index.php?admin=sanpham')
                        </script>
                    ";
                }else{
                    echo "
                        <script language = 'javascript'>
                            alert('Thêm mới không thành công!')
                            window.open('index.php?admin=sanpham')
                        </script>
                    ";
                }
            }else{
                echo "
                    <script language = 'javascript'>
                        alert('Bạn phải nhập đầy đủ thông tin trước khi bấm lưu.')
                    </script>
                ";
            }
        }
    }

?>