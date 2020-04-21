<?php 
    include('config.php');
    $name = $_POST['name'];
    $email=$_POST['email'];
    $username=$_POST['username'];
    $password = md5($_POST['password']);
    $alamat = $_POST['alamat'];

    $sql = "INSERT INTO user (nama_lengkap,email,username,password,alamat) VALUE ('$name','$email','$username','$password','$alamat')";
    $query = mysqli_query($mysqli,$sql) or die('tidak ada database');

    if($query){
        echo "<script>alert('Daftar User Sukses!')</script>";
        echo "<script>top.location='index.php'</script>";
    }else{
        echo "<script>alert('Daftar User Gagal!')</script>";
        echo "<script>top.location='index.php'</script>";
    }
?>