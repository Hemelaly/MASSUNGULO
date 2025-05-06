<?php include 'includes/header.php'; ?>

<section class="banner bg-brown pt-4 pb-2">
    <div class="container d-flex align-items-center">
        <p class="text-white"><a class="link-light" href="index.php">Início</a> | Plantas</p>
    </div>
</section>

<section class="plant-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center mb-5">
                <h2 class="display-5 fw-bold mb-3">Catálogo de Plantas Botânicas</h2>
                <p class="lead">Explore nossa coleção de espécies vegetais</p>
            </div>
        </div>

        <div class="row">
            <!-- Planta 1 -->
            <div class="col-lg-4 col-md-6 my-3">
                <div class="plant-card" data-bs-toggle="modal" data-bs-target="#plantModal" data-plant-id="1">
                    <div class="position-relative">
                        <img src="img/OIP.jpeg" class="plant-card-img w-100" alt="Costela-de-Adão">
                        <span class="plant-card-badge">Popular</span>
                    </div>
                    <div class="plant-card-body">
                        <h5 class="plant-card-title">Costela-de-Adão</h5>
                        <p class="plant-card-scientific">Monstera deliciosa</p>
                        <p class="text-muted">Planta tropical com folhas grandes e recortadas característicos.</p>
                    </div>
                </div>
            </div>

            <!-- Planta 2 -->
            <div class="col-lg-4 col-md-6 my-3">
                <div class="plant-card" data-bs-toggle="modal" data-bs-target="#plantModal" data-plant-id="2">
                    <img src="img/OIP.jpeg" class="plant-card-img w-100" alt="Suculenta">
                    <div class="plant-card-body">
                        <h5 class="plant-card-title">Suculenta</h5>
                        <p class="plant-card-scientific">Echeveria elegans</p>
                        <p class="text-muted">Planta resistente que armazena água em suas folhas carnudas.</p>
                    </div>
                </div>
            </div>

            <!-- Planta 3 -->
            <div class="col-lg-4 col-md-6 my-3">
                <div class="plant-card" data-bs-toggle="modal" data-bs-target="#plantModal" data-plant-id="3">
                    <div class="position-relative">
                        <img src="img/OIP.jpeg" class="plant-card-img w-100" alt="Orquídea">
                        <span class="plant-card-badge">Rara</span>
                    </div>
                    <div class="plant-card-body">
                        <h5 class="plant-card-title">Orquídea</h5>
                        <p class="plant-card-scientific">Phalaenopsis spp.</p>
                        <p class="text-muted">Flor exótica com variedade de cores e padrões.</p>
                    </div>
                </div>
            </div>

            <!-- Planta 4 -->
            <div class="col-lg-4 col-md-6 my-3">
                <div class="plant-card" data-bs-toggle="modal" data-bs-target="#plantModal" data-plant-id="4">
                    <img src="img/OIP.jpeg" class="plant-card-img w-100" alt="Samambaia">
                    <div class="plant-card-body">
                        <h5 class="plant-card-title">Samambaia</h5>
                        <p class="plant-card-scientific">Nephrolepis exaltata</p>
                        <p class="text-muted">Planta pendente com folhagem densa e verde brilhante.</p>
                    </div>
                </div>
            </div>

            <!-- Planta 5 -->
            <div class="col-lg-4 col-md-6 my-3">
                <div class="plant-card" data-bs-toggle="modal" data-bs-target="#plantModal" data-plant-id="5">
                    <img src="img/OIP.jpeg" class="plant-card-img w-100" alt="Palmeira">
                    <div class="plant-card-body">
                        <h5 class="plant-card-title">Palmeira</h5>
                        <p class="plant-card-scientific">Dypsis lutescens</p>
                        <p class="text-muted">Planta de interior que traz um toque tropical ao ambiente.</p>
                    </div>
                </div>
            </div>

            <!-- Planta 6 -->
            <div class="col-lg-4 col-md-6 my-3">
                <div class="plant-card" data-bs-toggle="modal" data-bs-target="#plantModal" data-plant-id="6">
                    <div class="position-relative">
                        <img src="img/OIP.jpeg" class="plant-card-img w-100" alt="Cacto">
                        <span class="plant-card-badge">Resistente</span>
                    </div>
                    <div class="plant-card-body">
                        <h5 class="plant-card-title">Cacto</h5>
                        <p class="plant-card-scientific">Cactaceae</p>
                        <p class="text-muted">Plantas adaptadas a ambientes áridos com formas variadas.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Modal -->
<div class="modal fade" id="plantModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="plantModalTitle">Costela-de-Adão</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-6">
                        <img src="" class="img-fluid modal-plant-img" alt="Planta">
                        <div class="plant-characteristics">
                            <h6>Características Principais</h6>
                            <div class="characteristic-item">
                                <div class="characteristic-icon">
                                    <i class="fas fa-leaf"></i>
                                </div>
                                <div>
                                    <strong>Nome Científico:</strong> <span id="scientificName">Monstera deliciosa</span>
                                </div>
                            </div>
                            <div class="characteristic-item">
                                <div class="characteristic-icon">
                                    <i class="fas fa-sun"></i>
                                </div>
                                <div>
                                    <strong>Luminosidade:</strong> <span id="lightRequirement">Meia-sombra</span>
                                </div>
                            </div>
                            <div class="characteristic-item">
                                <div class="characteristic-icon">
                                    <i class="fas fa-tint"></i>
                                </div>
                                <div>
                                    <strong>Rega:</strong> <span id="waterRequirement">Moderada</span>
                                </div>
                            </div>
                            <div class="characteristic-item">
                                <div class="characteristic-icon">
                                    <i class="fas fa-ruler-combined"></i>
                                </div>
                                <div>
                                    <strong>Porte:</strong> <span id="plantSize">Grande (até 3m)</span>
                                </div>
                            </div>
                            <div class="characteristic-item">
                                <div class="characteristic-icon">
                                    <i class="fas fa-thermometer-half"></i>
                                </div>
                                <div>
                                    <strong>Clima:</strong> <span id="climate">Tropical</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <h6>Descrição</h6>
                        <p id="plantDescription">A Costela-de-Adão é uma planta tropical conhecida por suas folhas grandes, brilhantes e recortadas naturalmente. Originária das florestas tropicais da América Central, é perfeita para trazer um toque de selva para ambientes internos. Suas folhas jovens são inteiras e vão desenvolvendo os característicos recortes conforme amadurecem.</p>

                        <h6 class="mt-4">Cuidados Especiais</h6>
                        <ul class="list-group list-group-flush" id="plantCare">
                            <li class="list-group-item">Prefere locais com luz indireta brilhante</li>
                            <li class="list-group-item">Regar quando o solo estiver seco ao toque</li>
                            <li class="list-group-item">Aprecia alta umidade ambiental</li>
                            <li class="list-group-item">Beneficia-se de suporte para trepar</li>
                            <li class="list-group-item">Limpar as folhas regularmente</li>
                        </ul>

                        <h6 class="mt-4">Curiosidades</h6>
                        <div class="alert alert-secondary" id="plantFacts">
                            <i class="fas fa-seedling me-2"></i> Na natureza, produz um fruto comestível que lembra o sabor do abacaxi.
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                <button type="button" class="btn btn-success">Solicitar Orçamento</button>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/cta.php'; ?>

<?php include 'includes/footer.php'; ?>