<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca Altea</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --voltron-blue: #1a237e;
            --voltron-red: #b71c1c;
            --voltron-yellow: #ffd600;
            --voltron-green: #1b5e20;
            --voltron-black: #000000;
            --galaxy-bg: linear-gradient(135deg, #0a0a2a 0%, #1a237e 50%, #4a148c 100%);
        }
        
        body {
            background-color: #0a0a2a;
            color: #e0e0e0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        .navbar {
            background: var(--galaxy-bg) !important;
            border-bottom: 2px solid var(--voltron-yellow);
        }
        
        .navbar-brand {
            font-weight: bold;
            color: var(--voltron-yellow) !important;
            font-size: 1.5rem;
            text-transform: uppercase;
            letter-spacing: 2px;
        }
        
        .nav-link {
            color: #e0e0e0 !important;
            font-weight: 500;
            transition: color 0.3s ease;
        }
        
        .nav-link:hover {
            color: var(--voltron-yellow) !important;
        }
        
        .hero-section {
            background: var(--galaxy-bg);
            color: white;
            padding: 120px 0;
            margin-bottom: 50px;
            position: relative;
            overflow: hidden;
        }
        
        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><circle cx="20" cy="20" r="1" fill="white" opacity="0.7"/><circle cx="80" cy="40" r="0.8" fill="white" opacity="0.5"/><circle cx="40" cy="80" r="1.2" fill="white" opacity="0.6"/><circle cx="60" cy="60" r="0.9" fill="white" opacity="0.4"/></svg>');
            animation: twinkle 3s infinite alternate;
        }
        
        @keyframes twinkle {
            from { opacity: 0.3; }
            to { opacity: 0.8; }
        }
        
        .book-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border: none;
            background: linear-gradient(145deg, #1a1a3a, #2a2a4a);
            color: #e0e0e0;
            border: 1px solid #3a3a5a;
            box-shadow: 0 4px 15px rgba(0,0,0,0.3);
        }
        
        .book-card:hover {
            transform: translateY(-8px) scale(1.02);
            box-shadow: 0 8px 25px rgba(255, 214, 0, 0.2);
            border-color: var(--voltron-yellow);
        }
        
        .card-img-top {
            height: 250px;
            object-fit: cover;
            background: linear-gradient(45deg, #1a237e, #4a148c);
        }
        
        .btn-voltron {
            background: linear-gradient(45deg, var(--voltron-blue), var(--voltron-red));
            color: white;
            border: none;
            font-weight: bold;
            transition: all 0.3s ease;
        }
        
        .btn-voltron:hover {
            background: linear-gradient(45deg, var(--voltron-red), var(--voltron-yellow));
            transform: scale(1.05);
            color: white;
        }
        
        .section-title {
            color: var(--voltron-yellow);
            text-align: center;
            margin-bottom: 3rem;
            position: relative;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 3px;
        }
        
        .section-title::after {
            content: '';
            display: block;
            width: 100px;
            height: 3px;
            background: linear-gradient(90deg, var(--voltron-blue), var(--voltron-yellow), var(--voltron-red));
            margin: 10px auto;
            border-radius: 2px;
        }
        
        .lion-badge {
            background: linear-gradient(45deg, var(--voltron-blue), var(--voltron-green));
            color: white;
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: bold;
        }
        
        .stats-section {
            background: var(--galaxy-bg);
            padding: 60px 0;
            border-top: 2px solid var(--voltron-yellow);
            border-bottom: 2px solid var(--voltron-yellow);
        }
        
        .stat-number {
            font-size: 3rem;
            font-weight: bold;
            background: linear-gradient(45deg, var(--voltron-yellow), var(--voltron-red));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            display: block;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <i class="fas fa-lion"></i> Biblioteca Altea
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php"><i class="fas fa-home"></i> Comando Central</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="sobre.php"><i class="fas fa-paladin"></i> Sobre o Voltron</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-search"></i> Scanner Galáctico</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-user-astronaut"></i> Meu Perfil</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>