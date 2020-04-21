<?php 
    include('../config.php');
    $id_user=$_POST['id_user'];
    $id_cucian=$_POST['id_cucian'];
    $jenis_paket = $_POST['jenis_paket'];
    $berat = $_POST['berat'];
    $setrika = $_POST['setrika'];
    switch ($jenis_paket) {
        case 'reguler':
            ($setrika) ? $harga=(10000*$berat)+6000 : $harga=(10000*$berat);
            break;
        case 'cepat':
            ($setrika) ? $harga=(15000*$berat)+6000 : $harga=(15000*$berat);
            break;
        case 'express':
            ($setrika) ? $harga=(20000*$berat)+6000 : $harga=(20000*$berat);
            break;  
        default:
            echo 'Salah memasukan keterangan';
            break;
    }
    $keterangan = $_POST['keterangan_kain'];
    $status = $_POST['status'];

    $sql = "UPDATE cucian SET berat='$berat',harga='$harga',keterangan_kain='$keterangan',jenis_paket='$jenis_paket',status='$status',setrika='$setrika' WHERE id_user='$id_user' AND id_cucian='$id_cucian'";
    $query = mysqli_query($mysqli,$sql) or die ("Tidak ada database");

    if($query){
        echo "<script>alert('Edit data cucian sukses!')</script>";
        echo "<script>top.location='/uts_web_lanjut/admin/tables.php'</script>";
    }else{
        echo "<script>alert('Edit data cucian gagsl!')</script>";
        echo "<script>top.location='/uts_web_lanjut/admin/tables.php'</script>";
    }
?>