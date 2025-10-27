<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-custom fixed-top">
    <div class="container">
        <!-- Marca/Logo da empresa -->
        <a class="navbar-brand text-white fw-bold fs-4" href="?page=home">
            <i class="bi bi-cpu"></i> DataCore
        </a>

        <!-- Botão hamburguer para dispositivos móveis -->
        <!-- data-bs-toggle: especifica que este botão controla um collapse -->
        <!-- data-bs-target: ID do elemento que será colapsado/expandido -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Conteúdo colapsável da navbar -->
        <!-- collapse navbar-collapse: classes que permitem o comportamento responsivo -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <!-- ms-auto: margin-start auto, empurra o menu para a direita -->
            <ul class="navbar-nav ms-auto">
                <!-- Cada nav-item representa um item do menu -->
                <!-- active: classe que destaca o item atual -->
                <li class="nav-item">
                    <a class="nav-link <?php echo $page == 'home' ? 'active' : ''; ?>" href="?page=home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo $page == 'servicos' ? 'active' : ''; ?>" href="?page=servicos">Serviços</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo $page == 'sobre' ? 'active' : ''; ?>" href="?page=sobre">Sobre</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo $page == 'contato' ? 'active' : ''; ?>" href="?page=contato">Contato</a>
                </li>
            </ul>
        </div>
    </div>
</nav>