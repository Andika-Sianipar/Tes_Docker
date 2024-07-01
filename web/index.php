<?php
$name = "Andika Kurniawan Sianipar";
$nim = "2215101011";
$hobby = "Ngulik game dan teknologi";
$study_program = "Ilmu Komputer";
$department = "Teknik Informatika";
$faculty = "Teknik dan Kejuruan";
$university = "Universitas Pendidikan Ganesha";
?>

<!DOCTYPE html>
<html>

<head>
    <title>Biodata Saya</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }

        h1 {
            color: #333;
            text-align: center;
            padding-top: 30px;
        }

        h2 {
            color: #666;
            margin-top: 30px;
        }

        p {
            color: #777;
            line-height: 1.5;
        }

        ul {
            list-style-type: disc;
            margin-left: 20px;
            color: #777;
        }

        li {
            margin-bottom: 10px;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        /* Warna-warna tambahan */
        .bg-blue {
            background-color: #3498db;
            color: #fff;
            padding: 10px;
            margin-bottom: 20px;
        }

        .bg-green {
            background-color: #2ecc71;
            color: #fff;
            padding: 10px;
            margin-bottom: 20px;
        }

        .bg-orange {
            background-color: #e67e22;
            color: #fff;
            padding: 10px;
            margin-bottom: 20px;
        }

        .bg-purple {
            background-color: #9b59b6;
            color: #fff;
            padding: 10px;
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1 class="bg-blue">Biodata Saya</h1>

        <h2 class="bg-green">Informasi Pribadi</h2>
        <p>Nama: <?php echo $name; ?></p>
        <p>NIM: <?php echo $nim; ?></p>
        <p>Alamat: Jl. Bisma</p>
        <p>Tanggal Lahir: 29 september 2004</p>

        <h2 class="bg-orange">Status Pendidikan Sekarang</h2>
        <ul>
            <li>Program Studi <?php echo $study_program; ?></li>
            <li>Jurusan <?php echo $department; ?></li>
            <li>Fakultas <?php echo $faculty; ?></li>
            <li><?php echo $university; ?></li>
        </ul>

        <h2 class="bg-purple">Pengalaman Kerja</h2>
        <ul>
            <li>Belum Ada</li>
        </ul>

        <h2 class="bg-blue">Minat dan Hobi</h2>
        <ul>
            <li><?php echo $hobby; ?></li>
        </ul>
    </div>
</body>
</html>