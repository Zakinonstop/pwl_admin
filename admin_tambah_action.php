<?php
    include "config.php";
    $instansi = $_POST['instansi'];
    $user = $_POST['username'];
    $pass = $_POST['password'];
    $nama = $_POST['namalengkap'];

    $sql = "INSERT INTO admin (admin_instansi, admin_nama, admin_password, admin_namalengkap)
            VALUES ('$instansi','$user','$pass','$nama');";

    $hasil = mysqli_query($config, $sql);

    if ($hasil) {
        echo "<script>alert('Data berhasil disimpan');window.location='halamanadmin.php'</script>";
    } else {
        echo "<script> alert('Data gagal disimpan');window.location='tambah_admin.php'</script>";
    }
    