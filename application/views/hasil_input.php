<!DOCTYPE html>
<html>

<head>
    <title>Hasil Input Data Siswa</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/style.css'); ?>">
</head>

<body>
    <div id="wrapper">
        <header>
            <h2>Data Siswa</h2>
            <p>Nama: <?php echo $nama; ?></p>
            <p>NIS: <?php echo $nis; ?></p>
            <p>Kelas: <?php echo $kelas; ?></p>
            <p>Tanggal Lahir: <?php echo $tanggal_lahir; ?></p>
            <p>Tempat Lahir: <?php echo $tempat_lahir; ?></p>
            <p>Alamat: <?php echo $alamat; ?></p>
            <p>Jenis Kelamin: <?php echo $jenis_kelamin; ?></p>
            <p>Agama: <?php echo $agama; ?></p>
            <nav>
                <ul>
                    <li><a href="<?php echo base_url() . 'index.php/siswa' ?>">Kembali ke Form Input Data Siswa</a></li>
                </ul>
            </nav>
            <div class="clear"></div>
    <header>