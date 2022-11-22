<?php
    include "config.php";
    $admin = $_POST['username'];
    $pass = $_POST['password'];
    $nama = $_POST['namalengkap'];
    $instansi = $_POST['instansi'];

    $sql = "UPDATE admin
            SET admin_password='$pass',
                admin_namalengkap='$nama',
                admin_instansi='$instansi'
            WHERE admin_nama='$admin'";

    $hasil = mysqli_query($config, $sql);

    if ($hasil) {
        echo "<script>alert('Data berhasil disimpan');window.location='halamanadmin.php'</script>";
    } else {
        echo "<script> alert('Data gagal disimpan');window.location='edit_admin.php'</script>";
    }
?>
