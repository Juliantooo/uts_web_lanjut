<?php 
    include('../config.php');
    session_start();
    $id_cucian=$_GET['id_cucian'];

    $sql = "DELETE FROM cucian WHERE id_cucian = '$id_cucian'";
    $query=mysqli_query($mysqli,$sql);
    if($query){
        echo "<script>alert('Hapus cucian sukses!')</script>";
        echo "<script>top.location='/uts_web_lanjut/admin/tables.php'</script>";
    }else{
        echo "<script>alert('Hapus cucian gagal!')</script>";
        echo "<script>top.location='/uts_web_lanjut/admin/tables.php'</script>";
    }
?>