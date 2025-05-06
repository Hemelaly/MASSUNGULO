<?php include 'includes/header.php'; ?>

<section class="banner bg-brown pt-4 pb-2">
    <div class="container d-flex align-items-center">
        <p class="text-white"><a class="link-light" href="index.php">Início</a> | Nossas Obras</p>
    </div>
</section>

<section class="projects-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center mb-5">
                <h2 class="display-5 fw-bold mb-3">Nossos Projetos</h2>
                <p class="lead">Explore nossas obras realizadas por ano</p>
            </div>
        </div>

        <!-- Filtro por Ano -->
        <div class="filter-container">
            <div class="btn-group flex-wrap" role="group">
                <button type="button" class="year-btn active" data-filter="all">Todos</button>
                <button type="button" class="year-btn" data-filter="2023">2023</button>
                <button type="button" class="year-btn" data-filter="2022">2022</button>
                <button type="button" class="year-btn" data-filter="2021">2021</button>
                <button type="button" class="year-btn" data-filter="2020">2020</button>
            </div>
        </div>

        <!-- Mensagem quando não há projetos -->
        <div class="no-projects" id="noProjects">
            <i class="fas fa-folder-open fa-3x mb-3" style="color: #ddd;"></i>
            <h4>Nenhum projeto encontrado</h4>
            <p>Não temos registros para o ano selecionado</p>
        </div>

        <!-- Galeria de Projetos -->
        <div class="row" id="projectsContainer">
            <!-- Projeto 1 -->
            <div class="col-lg-4 col-md-6 project-item" data-year="2023">
                <img src="img/1.jpg" class="project-img" alt="Projeto Residencial">
                <div class="project-overlay">
                    <h5 class="project-title">Residencial Green Valley</h5>
                    <p class="project-year">2023</p>
                    <p class="small mb-0">10 casas sustentáveis com área verde preservada</p>
                </div>
            </div>

            <!-- Projeto 2 -->
            <div class="col-lg-4 col-md-6 project-item" data-year="2023">
                <img src="img/8.jpg" class="project-img" alt="Edifício Comercial">
                <div class="project-overlay">
                    <h5 class="project-title">Edifício Corporate</h5>
                    <p class="project-year">2023</p>
                    <p class="small mb-0">15 andares com certificação LEED</p>
                </div>
            </div>

            <!-- Projeto 3 -->
            <div class="col-lg-4 col-md-6 project-item" data-year="2022">
                <img src="img/10.jpg" class="project-img" alt="Reforma Hospitalar">
                <div class="project-overlay">
                    <h5 class="project-title">Ampliação Hospital Municipal</h5>
                    <p class="project-year">2022</p>
                    <p class="small mb-0">Nova ala pediátrica com 50 leitos</p>
                </div>
            </div>

            <!-- Projeto 4 -->
            <div class="col-lg-4 col-md-6 project-item" data-year="2022">
                <img src="img/11.jpg" class="project-img" alt="Parque Urbano">
                <div class="project-overlay">
                    <h5 class="project-title">Parque Linear</h5>
                    <p class="project-year">2022</p>
                    <p class="small mb-0">3km de área verde com ciclovia</p>
                </div>
            </div>

            <!-- Projeto 5 -->
            <div class="col-lg-4 col-md-6 project-item" data-year="2021">
                <img src="img/13.jpg" class="project-img" alt="Escola Pública">
                <div class="project-overlay">
                    <h5 class="project-title">Escola Modelo</h5>
                    <p class="project-year">2021</p>
                    <p class="small mb-0">Infraestrutura para 500 alunos</p>
                </div>
            </div>

            <!-- Projeto 6 -->
            <div class="col-lg-4 col-md-6 project-item" data-year="2020">
                <img src="img/15.jpg" class="project-img" alt="Ponte">
                <div class="project-overlay">
                    <h5 class="project-title">Ponte Rio Verde</h5>
                    <p class="project-year">2020</p>
                    <p class="small mb-0">150m de extensão sobre o rio</p>
                </div>
            </div>

            <!-- Projeto 7 -->
            <div class="col-lg-4 col-md-6 project-item" data-year="2020">
                <img src="img/1.jpg" class="project-img" alt="Shopping Center">
                <div class="project-overlay">
                    <h5 class="project-title">Shopping Center Norte</h5>
                    <p class="project-year">2020</p>
                    <p class="small mb-0">25.000m² de área construída</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/cta.php'; ?>

<?php include 'includes/footer.php'; ?>