<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    
    
    <style>
        
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
            color: #fff; 
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        nav {
            background-color: #333;
            color: #fff;
            padding: 10px 0;
        }

        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        nav ul li {
            display: inline;
            margin-right: 10px;
        }

        nav ul li a {
            color: #fff;
            text-decoration: none;
            padding: 5px 10px;
        }

        .content {
            padding: 20px;
        }

        h1 {
            color: #fff; 
            animation: moveWelcome 2s ease-in-out infinite alternate; 
        }

        @keyframes moveWelcome {
            0% {
                transform: translateX(0); 
            }
            100% {
                transform: translateX(200px); 
            }
        }
    </style>

    
    <link rel="stylesheet" href="style.css">

    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>
<body>
    
    <nav>
        <ul>
            <li><a href="biodata.php">Home</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </nav>

    
    <div class="container">
        <div class="content">
            <h1>Welcome!!</h1>
            <p>INI ADALAH HALAMAN BIODATA SAYA</p>
            <p>Nama: Raga Winata</p>
            <p>NPM: 1911060040</p>
            <p>Tgl Lahir: 22 April 2000</p>
            <p>Pekerjaan: Mahasiswa</p>
            <p>Agama: Islam</p>
            <p>Jurusan: Sistem Komputer</p>
            <p>Fakultas: Ilmu Komputer</p>
            <p>Kampus: IIB DARMAJAYA</p>
        </div>
    </div>
</body>
</html>
