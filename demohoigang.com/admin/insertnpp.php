<?php
    if(isset($_GET['admin'])){
        if($_GET['admin']=='insertnpp'){
            $tennpp = $_POST['tennpp'];
            $diachi = $_POST['diachi'];
            $sodthoai = $_POST['sodthoai'];
            $email = $_POST['email'];
            if($tennpp!=''){
                $sql = "insert into nhacungcap(TenNhaCC, DiaChi, SDT, Email) 
                values('$tennpp','$diachi','$sodthoai', '$email')";
                if(mysqli_query($con, $sql)===true){
                    echo "
                        <script language = 'javascript'>
                            alert('Bạn đã thêm mới thành công!')
                            window.open('index.php?admin=dmnhacc')
                        </script>
                    ";
                }else{
                    echo "
                        <script language = 'javascript'>
                            alert('Thêm mới không thành công!')
                            window.open('index.php?admin=dmnhacc')
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
        }else
        if($_GET['admin']=='deletenpp'){
            $id = $_GET['id'];
            $sql_d = "DELETE FROM nhacungcap WHERE IDNhaCungCap = $id";
            if(mysqli_query($con, $sql_d)===true){
                echo "
                    <script language = 'javascript'>
                        alert('Bạn đã thêm mới thành công!')
                        window.open('index.php?admin=dmnhacc')
                    </script>
                ";
            }else{
                echo "
                    <script language = 'javascript'>
                        alert('Thêm mới không thành công!')
                        window.open('index.php?admin=dmnhacc')
                    </script>
                ";
            }
        }
    }

?>