<?php
    session_start();
    include "config.php";

    $diskusi_id = $_POST["diskusi_id"];
    $judul = $_POST["judul"];
    $isidiskusi = $_POST["isi"];
    $tempat = $_POST["tempat"];
    $sesi = $_POST["sesi"];
    $tgl_upload = $_POST["tanggal"];
    $instansi = $_POST["instansi"];
    $usernama = $_POST["admin_nama"];

    $lokasifile = $_FILES['gambar']['tmp_name'];
    //nama file temporary yang akan disimpan di server
    $namafile = $_FILES['gambar']['name'];
    //membaca nama file yang akan diupload
    $uploaddir = "uploads/"; 
    //folder penyimpanan berkas/file
    $uploadfile = $uploaddir.$namafile;
    //menggabungkan nama folder dan nama file
    if(!empty($lokasifile)){
        $sql = "UPDATE diskusi SET diskusi_judul='$judul', diskusi_isi='$isidiskusi', diskusi_tempat='$tempat', diskusi_sesi='$sesi', diskusi_instansi='$instansi', diskusi_tanggal='$tgl_upload', diskusi_gambar='$uploadfile', admin_nama='$usernama' WHERE diskusi_id='$diskusi_id'";
        $hasil = mysqli_query($config, $sql);
        if($hasil){
            move_uploaded_file($lokasifile, $uploadfile);
            echo "Nama File : <b>$namafile</b> sukses diupload<br/>";
            echo "<script>alert('Data berhasil disimpan');window.location='halamandiskusi.php'</script>";
        } 
        else {
            echo "<script> alert('Data gagal disimpan');window.location='diskusi_ubah.php'</script>";
        }
    }
    else {
        $sql = "UPDATE diskusi SET diskusi_judul='$judul', diskusi_isi='$isidiskusi', diskusi_tempat='$tempat', diskusi_sesi='$sesi', diskusi_instansi='$instansi', diskusi_tanggal='$tgl_upload', diskusi_gambar='$uploadfile', admin_nama='$usernama' WHERE diskusi_id='$diskusi_id'";
        $hasil = mysqli_query($config, $sql);
        echo "<script> alert('Data gagal disimpan');window.location='diskusi_ubah.php'</script>";
    } 
?>