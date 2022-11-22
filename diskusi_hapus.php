<?php
    include "config.php";
    $id_diskusi = $_GET['diskusi_id'];

    $sql = "DELETE FROM diskusi WHERE diskusi_id='$id_diskusi'";
    $hasil = mysqli_query($config, $sql);

    echo "<script>alert('Data berhasil dihapus');window.location='halamandiskusi.php'</script>";
?>