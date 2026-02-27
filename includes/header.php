<?php
// Inicia a sessão para mensagens
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barbearia Moderna - Seu estilo começa aqui</title>
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- CSS Personalizado -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header class="header" id="header">
        <a href="index.php" class="logo">BARBEARIA <span>MODERNA</span></a>
        
        <nav class="nav-menu" id="navMenu">
            <a href="index.php">Início</a>
            <a href="index.php#sobre">Sobre</a>
            <a href="index.php#servicos">Serviços</a>
            <a href="agendamento.php">Agendamento</a>
            <a href="cadastro.php">Cadastro</a>
            <a href="index.php#contato">Contato</a>
        </nav>
        
        <div class="hamburger" id="hamburger">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </header>
    
    <main>