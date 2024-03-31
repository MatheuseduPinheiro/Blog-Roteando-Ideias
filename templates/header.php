<?php
include_once("./healpers/url.php");
include_once("./data/posts.php");
include_once("./data/categories.php")
?>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
    <link rel="stylesheet" href="<?=$BASE_URL ?>/css/style.css">
   
    <title>Blog Roteando Ideias</title>
</head>

<body>
    <div class="container-header">
        <header>
            <a href="<?= $BASE_URL ?>" id="logo">
                <img src="<?=$BASE_URL?>/img/logo.png" alt="Blog Roteando Ideias">
            </a>
            <nav>
                <ul id="navbar">
                    <li><a href="<?=$BASE_URL?>" class="nav-link">HOME</a></li>
                    <li><a href="#" class="nav-link">Categorias</a></li>
                    <li><a href="#" class="nav-link">Sobre</a></li>
                    <li><a href="<?=$BASE_URL?>contato.php" class="nav-link">Contato</a></li>
                </ul>
            </nav>
        </header>
    </div>