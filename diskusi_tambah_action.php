<?php
    include "config.php";

    // print_r($_FILES['gambar']);
    // die();

    $judul = $_POST["judul"];
    $isidiskusi = $_POST["isi"];
    $tempat = $_POST["tempat"];
    $sesi = $_POST["sesi"];
    $tgl_upload = $_POST["tanggal"];
    $instansi = $_POST["instansi"];
    $usernama = $_POST["admin_nama"];
 
    $namafile = $_FILES['gambar']['name'];
    $tmp_name = $_FILES['gambar']['tmp_name'];

    //folder penyimpanan berkas/file
    $uploaddir = "uploads/";
    //menggabungkan nama folder dan nama file
    $uploadfile = move_uploaded_file($tmp_name, $uploaddir.$namafile);

    //Jika file berhasil di upload 
    // if(move_uploaded_file($lokasifile, $uploadfile)){
    //     echo "Nama File : <b>$namafile</b> sukses di upload";
    //     //masukkan informasi file ke dalam database
    //     $sql = "INSERT INTO diskusi (diskusi_judul, diskusi_isi, diskusi_tempat, diskusi_sesi, diskusi_tanggal, diskusi_instansi, diskusi_gambar, admin_nama) VALUES('$judul','$isidiskusi','$tempat','$sesi','$tgl_upload','$instansi','$uploadfile','$usernama')";
    //     $hasil = mysqli_query($config, $sql);  
    //     echo "<script>alert('Data berhasil disimpan');window.location='halamandiskusi.php'</script>";
    // } else {
        //     echo "<script> alert('Data gagal disimpan');window.location='diskusi_tambah.php'</script>";
        // }
        
        $sql = "INSERT INTO diskusi (diskusi_judul, diskusi_isi, diskusi_tempat, diskusi_sesi, diskusi_tanggal, diskusi_instansi, diskusi_gambar, admin_nama) VALUES('$judul','$isidiskusi','$tempat','$sesi','$tgl_upload','$instansi','$namafile','$usernama')";
        
        $hasil = mysqli_query($config, $sql);  

        if ($hasil) {

            // move_uploaded_file(string $lokasifile, string $uploaddir);
            echo "<script>alert('Data berhasil disimpan');window.location='halamanadmin.php'</script>";

        } else {
            echo "<script> alert('Data gagal disimpan');window.location='tambah_admin.php'</script>";
        }
    ?>