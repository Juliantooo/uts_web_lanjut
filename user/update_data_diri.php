<?php 
    include('../config.php');
    $id_user=$_POST['id_user'];
    $nama_lengkap=$_POST['nama_lengkap'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $alamat = $_POST['alamat'];

    $sql = "UPDATE user SET nama_lengkap='$nama_lengkap',email='$email',username='$username',password='$password',alamat='$alamat' WHERE id_user='$id_user'";
    $query = mysqli_query($mysqli,$sql) or die ("Tidak ada database");

    if($query){
        echo "<script>alert('Edit data diri sukses!')</script>";
        echo "<script>top.location='/uts_web_lanjut/user/data_diri.php'</script>";
    }else{
        echo "<script>alert('Edit data diri gagsl!')</script>";
        echo "<script>top.location='/uts_web_lanjut/user/data_diri.php'</script>";
    }
?>