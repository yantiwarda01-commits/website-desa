
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Desa Digital</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f3f7f4;
            color: #26352b;
        }
        header, footer {
            background: #176b45;
            color: white;
            text-align: center;
            padding: 25px;
        }
        nav {
            background: #105536;
            padding: 15px;
            text-align: center;
        }
        nav a {
            color: white;
            margin: 10px;
            text-decoration: none;
        }
        main {
            max-width: 900px;
            margin: 25px auto;
            padding: 15px;
        }
        section {
            background: white;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <header>
        <h1>Website Desa Digital</h1>
        <p>Membangun Desa yang Maju dan Sejahtera</p>
    </header>

    <nav>
        <a href="#profil">Profil Desa</a>
        <a href="#layanan">Layanan</a>
        <a href="#informasi">Informasi</a>
    </nav>

    <main>
        <section id="profil">
            <h2>Profil Desa</h2>
            <p>Selamat datang di website resmi Desa Digital.</p>
            <p>Website ini menyediakan informasi desa dan layanan masyarakat.</p>
            <p><strong>Kecamatan:</strong> Kecamatan Sejahtera</p>
            <p><strong>Kabupaten:</strong> Kabupaten Indonesia</p>
        </section>

        <section id="layanan">
            <h2>Layanan Masyarakat</h2>
            <ul>
                <li>Informasi surat pengantar</li>
                <li>Informasi administrasi penduduk</li>
                <li>Layanan pengaduan masyarakat</li>
            </ul>
        </section>

     <section id="informasi">
    <h2>Informasi Desa</h2>

    <?php
    try {
        $pdo = new PDO(
            "mysql:host=" . getenv('DB_HOST') .
            ";dbname=" . getenv('DB_NAME') .
            ";charset=utf8mb4",
            getenv('DB_USER'),
            getenv('DB_PASSWORD')
        );

        $stmt = $pdo->query(
            "SELECT judul, isi, tanggal_dibuat
             FROM informasi_desa
             ORDER BY id DESC"
        );

        foreach ($stmt as $row) {
            echo "<article>";
            echo "<h3>" .
                htmlspecialchars($row['judul']) .
                "</h3>";
            echo "<p>" .
                nl2br(htmlspecialchars($row['isi'])) .
                "</p>";
            echo "<small>" .
                htmlspecialchars($row['tanggal_dibuat']) .
                "</small>";
            echo "</article>";
        }
    } catch (PDOException $e) {
        echo "<p>Informasi desa belum dapat dimuat.</p>";
    }
    ?>
</section>

