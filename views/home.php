<!-- Hero Section -->
<section class="hero-section">
    <div class="container">
        <!-- display-4: classe do Bootstrap para texto grande e impactante -->
        <h1 class="display-4 fw-bold mb-4">Bem-vindo à DataCore</h1>
        <!-- lead: classe que cria texto introdutório destacado -->
        <p class="lead mb-4">Transformando dados em soluções inovadoras para o seu negócio</p>
    </div>
</section>

<!-- Seção Carrossel de Serviços -->
<section class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-5 text-primary">Nossos Serviços</h2>
        
        <!-- Carrossel do Bootstrap -->
        <div id="servicosCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="7000">
            <!-- Indicadores -->
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#servicosCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#servicosCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#servicosCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>

            <!-- Slides do Carrossel -->
            <div class="carousel-inner">
                <!-- Slide 1: Inteligência de Dados & Analytics -->
                <div class="carousel-item active">
                    <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?q=80&w=1280&auto=format&fit=crop" class="d-block w-100" alt="Inteligência de Dados & Analytics" style="max-height: 500px; object-fit: cover;">
                    <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-75 rounded p-3">
                        <h5><i class="bi bi-bar-chart-line me-2"></i>Inteligência de Dados & Analytics</h5>
                        <p>Extraia insights valiosos de seus dados com dashboards interativos e análises preditivas.</p>
                    </div>
                </div>

                <!-- Slide 2: Cloud Computing & Infraestrutura -->
                <div class="carousel-item">
                    <img src="https://images.unsplash.com/photo-1544197150-b99a580bb7a8?q=80&w=1280&auto=format&fit=crop" class="d-block w-100" alt="Cloud Computing & Infraestrutura" style="max-height: 500px; object-fit: cover;">
                    <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-75 rounded p-3">
                        <h5><i class="bi bi-cloud me-2"></i>Cloud Computing & Infraestrutura</h5>
                        <p>Otimize custos e ganhe escalabilidade com soluções de nuvem seguras e de alta performance.</p>
                    </div>
                </div>

                <!-- Slide 3: Segurança Digital Avançada -->
                <div class="carousel-item">
                    <img src="https://images.unsplash.com/photo-1542831371-29b0f74f9713?q=80&w=1280&auto=format&fit=crop" class="d-block w-100" alt="Segurança Digital Avançada" style="max-height: 500px; object-fit: cover;">
                    <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-75 rounded p-3">
                        <h5><i class="bi bi-shield-lock me-2"></i>Segurança Digital Avançada</h5>
                        <p>Proteja seus dados e sistemas contra ameaças com nossas soluções de cibersegurança.</p>
                    </div>
                </div>
            </div>

            <!-- Controles Anterior/Próximo -->
            <button class="carousel-control-prev" type="button" data-bs-target="#servicosCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Anterior</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#servicosCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Próximo</span>
            </button>
        </div>
        
        <!-- Botão para ver mais serviços -->
        <div class="text-center mt-4">
            <a href="?page=servicos" class="btn btn-custom btn-lg">
                Conheça nossos serviços
            </a>
        </div>
    </div>
</section>

<!-- Seção de Destaques -->
<!-- py-5: padding vertical de 5 unidades (top e bottom) -->
<section class="py-5">
    <div class="container">
        <h2 class="text-center mb-5 text-primary">Por que escolher a DataCore?</h2>

        <!-- Sistema de Grid do Bootstrap -->
        <!-- row: cria uma linha no grid -->
        <!-- g-4: gap de 4 unidades entre as colunas -->
        <div class="row g-4">
            <!-- col-md-4: ocupa 4 de 12 colunas em telas médias (≥768px) -->
            <!-- Em telas menores, cada coluna ocupa 100% da largura -->
            <div class="col-md-4">
                <!-- text-center: centraliza o texto -->
                <div class="text-center">
                    <i class="bi bi-lightning-charge service-icon"></i>
                    <h4 class="text-primary">Velocidade</h4>
                    <p>Soluções rápidas e eficientes para o seu negócio crescer</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="text-center">
                    <i class="bi bi-shield-check service-icon"></i>
                    <h4 class="text-primary">Segurança</h4>
                    <p>Proteção de dados com as melhores práticas do mercado</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="text-center">
                    <i class="bi bi-graph-up-arrow service-icon"></i>
                    <h4 class="text-primary">Escalabilidade</h4>
                    <p>Infraestrutura que cresce junto com sua empresa</p>
                </div>
            </div>
        </div>
    </div>
</section>