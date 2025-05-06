<?php

// include 'includes/url.php';

// Definir os itens do menu
$menuItems = [
    'index.php' => 'Início',
    'sobre.php' => 'Sobre Nós',
    'servicos.php' => 'Serviços',
    'plantas.php' => 'Plantas',
    'obras.php' => 'Nossas Obras',
    'contato.php' => 'Contato'
];

// Obter a página atual
$currentPage = explode(".", basename($_SERVER['PHP_SELF']));
unset($currentPage[1]);

$url = $_GET['url'] ?? '';
   
?>

<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php foreach($currentPage as $url => $title): ?>
    <title>Massungulo - <?php echo $title; ?></title>
    <?php endforeach ?>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Swiper JS CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <!-- Font Awesome para ícones -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="shortcut icon" href="../img/logo.png" type="image/x-icon">
</head>

<body>
    <!-- TopBar -->
    <div class="topbar pt-2">
        <div class="container">
            <div class="rowed text-white d-flex justify-content-between">
                <div class="d-flex ">
                    <p class="pe-2"><img src="../img/icons/phone-call.png" width="20px" alt=""></p>
                    <p class="pt-1 pe-4">+258 84 000 0000</p>
                    <p class="pe-2"><img src="../img/icons/email.png" width="20px" alt=""></p>
                    <p class="pt-1">massungulolda@gmail.com</p>
                </div>
                <div class="d-flex">
                    <p class="pe-2"><img src="../img/icons/phone-call.png" width="20px" alt=""></p>
                    <p class="pt-1 pe-4">+258 84 000 0000</p>
                    <p class="pe-2"><img src="../img/icons/email.png" width="20px" alt=""></p>
                    <p class="pt-1">massungulolda@gmail.com</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top shadow">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="../img/logo.png" alt="" width="100px">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <?php foreach ($menuItems as $url => $title): ?>
                        <li class="nav-item">
                            <a class="nav-link ms-2 <?= ($currentPage === $url) ? 'active' : '' ?>"
                                href="<?= $url ?>">
                                <?= $title ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </nav>