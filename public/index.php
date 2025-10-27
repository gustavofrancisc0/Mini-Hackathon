<?php
$page = $_GET['page'] ?? 'home';
$file = "../views/{$page}.php";
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DataCore - Soluções em Tecnologia</title>
    <!-- Bootstrap CSS - Framework CSS para design responsivo e componentes prontos -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons - Biblioteca de ícones do Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./assets/css/style.css">

</head>

<body>
    <?php
    include '../views/components/header.php';
    include file_exists($file) ? $file : '../views/components/404.php';
    include '../views/components/footer.php';
    ?>
    <!-- Bootstrap JS Bundle - inclui Popper.js para funcionalidades interativas -->
    <!-- Necessário para: navbar collapse, dropdowns, modals, tooltips, etc -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>