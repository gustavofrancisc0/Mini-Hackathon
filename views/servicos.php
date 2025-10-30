<?php
// demo-servicos.php (DataCore)
?>
<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Serviços (DataCore)</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
</head>

<body class="bg-body-tertiary">

    <?php
    // Variáveis atualizadas para corresponder aos novos serviços da DataCore
    // (os nomes devem ser os mesmos que usamos no 'servicos.php' anterior)

    // Imagem para "Inteligência de Dados & Analytics"
    $data_analytics_img = "https://images.unsplash.com/photo-1551288049-bebda4e38f71?q=80&w=1280&auto=format&fit=crop";

    // Imagem para "Cloud Computing & Infraestrutura"
    $cloud_infra_img  = "https://images.unsplash.com/photo-1544197150-b99a580bb7a8?q=80&w=1280&auto=format&fit=crop";

    // Imagem para "Segurança Digital Avançada"
    $security_img     = "https://images.unsplash.com/photo-1542831371-29b0f74f9713?q=80&w=1280&auto=format&fit=crop";

    // Inclui o arquivo de componente (que já modificamos antes)
    include __DIR__ . '/components/servicos.php';
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>