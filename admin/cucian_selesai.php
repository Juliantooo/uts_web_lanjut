<?php 
    include('../config.php');
    session_start();
    $id_cucian=$_POST['id_cucian'];
    $status='Selesai';

    $sql = "UPDATE cucian SET status='$status' WHERE id_cucian = '$id_cucian'";
    $query=mysqli_query($mysqli,$sql);
    if($query){
        echo "<script>alert('Cucian telah selesai!')</script>";
        echo "<script>top.location='/uts_web_lanjut/admin/tables.php'</script>";
    }else{
        echo "<script>alert('Gagal melakukan aksi!')</script>";
        echo "<script>top.location='/uts_web_lanjut/admin/tables.php'</script>";
    }
?>