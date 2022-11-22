<?php
    include "config.php";
    $admin = $_GET['admin_nama'];

    $sql = "DELETE FROM admin WHERE admin_nama='$admin'";
    $hasil = mysqli_query($config, $sql);

    echo "<script>alert('Data berhasil dihapus');window.location='halamanadmin.php'</script>";
?>