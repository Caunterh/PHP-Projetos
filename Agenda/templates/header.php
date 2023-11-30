<?php

include_once("../config/url.php");
include_once("../config/processamento.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda de professores</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.3/css/bootstrap.min.css" 
integrity="sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==" crossorigin="anonymous" 
referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" 
integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" 
referrerpolicy="no-referrer" />

<link rel="preconnect" href="https://fonts.googleapis.com%22%3E/">
<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,500;0,600;1,500;1,600&display=swap" rel="stylesheet">

<link rel="stylesheet" href="<?=$BASE_URL?>/../css/style.css">
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #5f5858">
        <a class="navbar-brand" href="<?= $BASE_URL?>/index.php">
            <img src="<?= $BASE_URL?>/../img/logo.png" alt="Agenda" style="width: 50px;">
        </a>
        <div>
            <div class="navbar-nav">
                <a class="nav-link active" href="<?= $BASE_URL ?>/index.php">Professores Cadastratos</a>
                <a class="nav-link active" href= "<?= $BASE_URL?>/create.php">Adicionar Professores</a>
            </div>
        </div>
    </nav>
</header>