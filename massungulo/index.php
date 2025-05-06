<?php

include 'includes/header.php';

?>

<!-- Hero Section -->
<!-- Slider Principal -->
<div class="swiper">
    <div class="swiper-wrapper">
        <!-- Slide 1 -->
        <div class="swiper-slide" style="background-image: url('img/29.jpg')">
            <div class="slide-overlay"></div>
            <div class="slide-content">
                <h1 class="display-4 fw-bold mb-4">Viveiros Hortalícios</h1>
                <p class="lead mb-4">Estruturas ideais para a produção de mudas de hortaliças, folhosas <br> e legumes com máxima proteção e produtividade.</p>
                <a href="servicos.php" class="btn btn-primary px-5 py-2">Saiba Mais</a>
            </div>
        </div>

        <!-- Slide 2 -->
        <div class="swiper-slide" style="background-image: url('img/30.jpg')">
            <div class="slide-overlay"></div>
            <div class="slide-content">
                <h1 class="display-4 fw-bold mb-4">Viveiros Hortalícios</h1>
                <p class="lead mb-4">Estruturas ideais para a produção de mudas de hortaliças, folhosas <br> e legumes com máxima proteção e produtividade.</p>
                <a href="servicos.php" class="btn btn-danger px-5 py-2">Compre Agora</a>
            </div>
        </div>

        <!-- Slide 3 -->
        <div class="swiper-slide" style="background-image: url('img/33.jpg')">
            <div class="slide-overlay"></div>
            <div class="slide-content">
                <h1 class="display-4 fw-bold mb-4">Viveiros Hortalícios</h1>
                <p class="lead mb-4">Estruturas ideais para a produção de mudas de hortaliças, folhosas <br> e legumes com máxima proteção e produtividade.</p>
                <a href="servicos.php" class="btn btn-success px-5 py-2">Explore</a>
            </div>
        </div>
    </div>

    <!-- Botões de Navegação -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>

    <!-- Paginação (bolinhas) -->
    <div class="swiper-pagination"></div>
</div>

<!-- Numeros -->
<div class="numeros text-white py-2" style="background: #42a43d;">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-3 d-flex align-items-center">
                <p class="fw-bold me-3" style="font-size: 55px; font-family: 'poly';">25</p>
                <p class="text-uppercase">Anos <br> de experiência</p>
            </div>
            <div class="col-12 col-lg-3 d-flex align-items-center">
                <p class="fw-bold me-3" style="font-size: 55px; font-family: 'poly';">25</p>
                <p class="text-uppercase">Anos <br> de experiência</p>
            </div>
            <div class="col-12 col-lg-3 d-flex align-items-center">
                <p class="fw-bold me-3" style="font-size: 55px; font-family: 'poly';">25</p>
                <p class="text-uppercase">Anos <br> de experiência</p>
            </div>
            <div class="col-12 col-lg-3 d-flex align-items-center">
                <p class="fw-bold me-3" style="font-size: 55px; font-family: 'poly';">25</p>
                <p class="text-uppercase">Anos <br> de experiência</p>
            </div>
        </div>
    </div>
</div>

<!-- Sobre-nos -->
<section class="py-5">
    <div class="container py-5">
        <div class="row g-4">
            <div class="col-lg-6" style="width: 500px;">
                <img class="img-fluid" src="img/logo.png" width="300px" alt="">
            </div>
            <div class="col-lg-6">
                <h2 class="section-title fw-bold">Sobre Nós</h2>
                <h3 class="">Oferecer Estruturas Seguras, Eficientes e Personalizadas</h3>
                <p class="text-muted">Na MASSUNGULO, dedicamo-nos à criação de viveiros hortícolas de alta performance, combinando tecnologia, durabilidade e know-how agrícola para garantir o melhor ambiente ao cultivo de mudas e hortaliças.</p>
                <a href="sobre.php" class="btn bg-brown text-white px-5 py-2">Saber mais</a>
            </div>
        </div>
    </div>
</section>

<!-- Plantas -->
<div class="container pb-5">
    <div class="row pb-5">
        <!-- Card 1 -->
        <div class="col-md-4">
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front" style="background-image: url('img/GiantWhiteBirdOfParadise-StrelitziaNicolai-IndoorPlant_Ceramic_Pot.webp');">
                        <p class="card-title-front">Natureza</p>
                    </div>
                    <div class="flip-card-back">
                        <h3>Exploração Natural</h3>
                        <p>Descubra as maravilhas da natureza com nossos guias especializados em ecoturismo.</p>
                        <a href="plantas.php" class="btn btn-light mt-3">Saber Mais</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="col-md-4">
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front" style="background-image: url('img/OIP.jpeg');">
                        <p class="card-title-front">Cidade</p>
                    </div>
                    <div class="flip-card-back">
                        <h3>Vida Urbana</h3>
                        <p>Experimente a energia das metrópoles com roteiros personalizados para amantes de arquitetura e cultura.</p>
                        <a href="plantas.php" class="btn btn-light mt-3">Saber Mais</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="col-md-4">
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front" style="background-image: url('img/GiantWhiteBirdOfParadise-StrelitziaNicolai-IndoorPlant_Ceramic_Pot.webp');">
                        <p class="card-title-front">Tecnologia</p>
                    </div>
                    <div class="flip-card-back">
                        <h3>Inovação</h3>
                        <p>Workshops e cursos sobre as tecnologias mais disruptivas do mercado atual.</p>
                        <a href="plantas.php" class="btn btn-light mt-3">Saber Mais</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Projectos -->
<section class="split-section py-5">
    <!-- Parte Esquerda (Imagem) -->
    <div class="split-left"></div>

    <!-- Parte Direita (Cor) -->
    <div class="split-right"></div>

    <!-- Overlay para Mobile -->
    <div class="mobile-overlay"></div>

    <!-- Conteúdo -->
    <div class="container split-content">
        <div class="row">
            <!-- Espaço vazio para alinhar com a imagem no desktop -->
            <div class="col-md-6"></div>

            <!-- Conteúdo da direita -->
            <div class="col-md-6 right-content text-white">
                <h2 class="display-6 fw-bold mb-4">Nossos Projectos</h2>
                <p class="lead mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <ul class="list-unstyled">
                    <li class="mb-3"><i class="fas fa-check-circle me-2"></i> Soluções personalizadas</li>
                    <li class="mb-3"><i class="fas fa-check-circle me-2"></i> Materiais de alta qualidade</li>
                    <li class="mb-3"><i class="fas fa-check-circle me-2"></i> Equipe especializada</li>
                </ul>
                <a href="obras.php" class="btn btn-white bg-white px-5 py-2 mt-3">Saiba Mais</a>
            </div>
        </div>
    </div>
</section>

<!-- Serviços -->
<section class="py-5 bg-light">
    <div class="container py-5">
        <h2 class="section-title fw-bold">Serviços</h2>
        <h3 class="mb-5">Soluções Práticas e 100% Funcionais Para a sua Horta</h3>
        <div class="row">
            <div class="col-md-3">
                <div class="card border-0 service-card h-100">
                    <div class="card-body">
                        <img src="img/24.jpg" class="rounded mb-3" alt="" width="100%">
                        <p class="card-title fs-5 fw-bold">Criação de Viveiros</p>
                        <p class="card-text">Desenvolvemos viveiros sob medida, desde estruturas simples até...</p>
                        <a href="servicos.php" class="btn bg-brown px-4 py-2 text-white d-block">Ver mais</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card border-0 service-card h-100">
                    <div class="card-body">
                        <img src="img/24.jpg" class="rounded mb-3" alt="" width="100%">
                        <p class="card-title fs-5 fw-bold">Criação de Viveiros</p>
                        <p class="card-text">Desenvolvemos viveiros sob medida, desde estruturas simples até...</p>
                        <a href="servicos.php" class="btn bg-brown px-4 py-2 text-white d-block">Ver mais</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card border-0 service-card h-100">
                    <div class="card-body">
                        <img src="img/24.jpg" class="rounded mb-3" alt="" width="100%">
                        <p class="card-title fs-5 fw-bold">Criação de Viveiros</p>
                        <p class="card-text">Desenvolvemos viveiros sob medida, desde estruturas simples até...</p>
                        <a href="servicos.php" class="btn bg-brown px-4 py-2 text-white d-block">Ver mais</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card border-0 service-card h-100">
                    <div class="card-body">
                        <img src="img/24.jpg" class="rounded mb-3" alt="" width="100%">
                        <p class="card-title fs-5 fw-bold">Criação de Viveiros</p>
                        <p class="card-text">Desenvolvemos viveiros sob medida, desde estruturas simples até...</p>
                        <a href="servicos.php" class="btn bg-brown px-4 py-2 text-white d-block">Ver mais</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/cta.php'; ?>

<!-- Notícias -->
<section class="py-5">
    <div class="container">
        <p class="section-title fs-2 fw-bold">Notícias</p>
        <h3 class="mb-5">Fique Sempre Actualizado Acerca dos Nossos Trabalhos e Colaborações</h3>
        <div class="row">
            <div class="col-md-4">
                <div class="card news-card h-100">
                    <div class="card-body">
                        <img src="img/14.jpg" class="rounded mb-3" alt="" width="100%">
                        <span class="badge bg-secondary mb-2">FACIM</span>
                        <h5 class="card-title">Viveiros em Moçambique: Políticas, Projetos e Destaques Regionais</h5>
                        <p class="text-muted">Jan 04/2025</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card news-card h-100">
                    <div class="card-body">
                        <img src="img/14.jpg" class="rounded mb-3" alt="" width="100%">
                        <span class="badge bg-secondary mb-2">FACIM</span>
                        <h5 class="card-title">Viveiros em Moçambique: Políticas, Projetos e Destaques Regionais</h5>
                        <p class="text-muted">Jan 04/2025</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card news-card h-100">
                    <div class="card-body">
                        <img src="img/14.jpg" class="rounded mb-3" alt="" width="100%">
                        <span class="badge bg-secondary mb-2">FACIM</span>
                        <h5 class="card-title">Viveiros em Moçambique: Políticas, Projetos e Destaques Regionais</h5>
                        <p class="text-muted">Jan 04/2025</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>