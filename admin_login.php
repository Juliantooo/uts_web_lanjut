<?php
    include('config.php');

    $email=$_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT id_admin,username,is_admin FROM admin WHERE email='$email' AND password='$password'";
    $query= mysqli_query($mysqli,$sql) or die('tidak ada database');
    $data = mysqli_fetch_array($query);
    $row = mysqli_num_rows($query);
    session_start();
    $_SESSION['id_admin']=$data['id_admin'];
    $_SESSION['username']=$data['username'];

    if($row==1){
        echo "<script>alert('Login admin suksess!')</script>";
        echo ($data['is_admin']==1) ? "<script>top.location='admin/'</script>" : "<script>top.location='user/'</script>" ;
    }else{
        echo "<script>alert('Login admin gagal!')</script>";
        echo "<script>top.location='login.php'</script>";
    }
?>