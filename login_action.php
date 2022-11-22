<?php
    session_start();
    include("config.php");

    $username = $_POST['txtUsername'];
    $password = $_POST['txtPassword'];

    $sql = "SELECT admin_nama FROM admin
            WHERE admin_nama = '$username'
            AND admin_password = '$password'";

    $hasil = mysqli_query($config,$sql) or exit("Error query : <b>".$sql."</b>.");

    if(mysqli_num_rows($hasil)>0){
        $data = mysqli_fetch_array($hasil);
        $_SESSION['username'] = $data['admin_nama'];
        echo "<script> alert ('Berhasil Login');window.location = 'welcome.php'</script>";
        exit();
    } 
    else { 
        ?>
        <script>
            alert('Gagal Login');
            window.location = 'login.php'
        </script>
        <?php
    }
?>