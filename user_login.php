<?php
    include('config.php');

    $email=$_POST['email'];
    $password = md5($_POST['password']);

    $sql = "SELECT id_user,username FROM user WHERE email='$email' AND password='$password'";
    $query= mysqli_query($mysqli,$sql) or die('tidak ada database');
    $data = mysqli_fetch_array($query);
    $row = mysqli_num_rows($query);
    session_start();
    $_SESSION['id_user']=$data['id_user'];
    $_SESSION['username']=$data['username'];

    if($row==1){
        echo "<script>alert('Login user suksess!')</script>";
        echo "<script>top.location='user/'</script>" ;
    }else{
        echo "<script>alert('Login user gagal!')</script>";
        echo "<script>top.location='index.php'</script>";
    }
?>