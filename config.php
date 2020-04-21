<?php 
    $host="localhost";
    $user='root';
    $pass='';
    $db='cuciin';
    $mysqli= mysqli_connect($host,$user,$pass,$db) or die('tidak terkoneksi dengan db');
    // echo ($mysqli) ? 'terkoneksi dengan db' : ' tidak terkoneksi dengan db';  
?>