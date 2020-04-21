<?php 
    include('../config.php');
    session_start();
    $id_user=$_POST['id_user'];
    $berat = $_POST['berat'];
    $keterangan_kain = $_POST['keterangan_kain'];
    $jenis_paket = $_POST['jenis_paket'];
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
    $sql = "INSERT INTO cucian (id_user,berat,keterangan_kain,jenis_paket,harga,setrika) VALUE ('$id_user','$berat','$keterangan_kain','$jenis_paket','$harga','$setrika')";
    $query = mysqli_query($mysqli,$sql) or die('Tidak ada database');

    if($query){
        echo "<script>alert('Tambah cuciaan sukses!')</script>";
        echo "<script>top.location='/uts_web_lanjut/admin/tables.php'</script>";
    }else{
        echo "<script>alert('Tambah cuciaan gagal!')</script>";
        echo "<script>top.location='/uts_web_lanjut/admin/tables.php'</script>";
    }

?>