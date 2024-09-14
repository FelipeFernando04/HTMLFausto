<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!-- Define o tipo de codificação de caracteres como UTF-8 -->
    <meta charset="UTF-8">
    <!-- Define a viewport para responsividade em dispositivos móveis -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link para o arquivo de estilo CSS externo -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Título da página -->
    <title><?php echo $title; ?></title>
    
   
</head>
<body>
    <!-- Cabeçalho do site com logo e menu de navegação -->
    <header>
        <img src="assets/img/image-removebg-preview (6).png" alt="" id="logo">
        <!-- Botão para abrir o menu de navegação em dispositivos móveis -->
        <button id="openMenu">&#9776;</button>
        <!-- Menu de navegação, inicialmente oculto para dispositivos móveis -->
        <?php include 'includes/menu.php'; ?>
    </header>
