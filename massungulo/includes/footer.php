<?php
// Definir os itens do menu
$menuItems = [
    'index.php' => 'Início',
    'sobre.php' => 'Sobre Nós',
    'servicos.php' => 'Serviços',
    'plantas.php' => 'Plantas',
    'obras.php' => 'Nossas Obras',
    'contato.php' => 'Contato'
];

// Obter a página atual
$currentPage = basename($_SERVER['PHP_SELF']);
?>


<!-- Parceiros -->
<section class="py-5 bg-light">
    <div class="container py-5">
        <h2 class="section-title fs-2 fw-bold">Nossos Parceiros</h2>
        <!-- Aqui iriam os logos dos parceiros -->
        <div class="d-flex justify-content-center align-items-center flex-wrap">
            <div class="m-3 p-3 bg-white rounded" style="width: 250px; height: 200px;">
                <img src="img/R.png" alt="" width="100%">
            </div>
            <div class="m-3 p-3 bg-white rounded d-flex justify-content-center align-items-center" style="width: 250px; height: 200px;">
                <img src="img/IIAM-scaled.webp" alt="" width="100%">
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="footer text-white">
    <div class="container">
        <!-- Logo Section -->

        <div class="row">
            <!-- Quick Links -->
            <div class="col-lg-3 col-md-6 mb-5 mb-lg-0 footer-logo">
                <a class="bg-white px-2 py-4" href="#">
                    <img src="img/logo.png" alt="Massungulo Logo" class="img-fluid rounded" width="300px">
                </a>
                <p>Soluções agrícolas inovadoras para Moçambique</p>
            </div>

            <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
                <h5>Navegação</h5>
                <ul class="list-unstyled">
                    <?php foreach ($menuItems as $url => $title): ?>
                        <li>
                            <a href="<?= $url ?>">
                                <i class="fas fa-chevron-right <?= ($currentPage === $url) ? 'active' : '' ?>"></i>
                                <?= $title ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>

            <!-- Contact Information -->
            <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
                <h5>Contactos</h5>
                <ul class="list-unstyled">
                    <li><i class="fas fa-map-marker-alt"></i> Chibuto, Gaza, Moçambique</li>
                    <li><i class="fas fa-phone"></i> +258 84 000 0000</li>
                    <li><i class="fas fa-phone"></i> +258 87 000 0000</li>
                    <li><i class="fas fa-envelope"></i> massungulolda@gmail.com</li>
                    <li><i class="fas fa-clock"></i> Seg-Sex: 8h00-17h00</li>
                </ul>
            </div>

            <!-- Social Media -->
            <div class="col-lg-3 col-md-6">
                <h5>Redes Sociais</h5>
                <p>Siga-nos nas nossas redes sociais.</p>
                <div class="social-links d-flex">
                    <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                    <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                    <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>

        <!-- Copyright -->
        <div class="copyright text-center">
            <div class="rowed">
                <div class="text-center">
                    &copy; 2025 Massungulo. Todos os direitos reservados. Desenvolvido do jeito certo pela <a href="https://www.mechanical.co.mz" class="text-white" target="_blank" style="">Mechanical Tecnologia</a>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Bootstrap 5 JS Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="js/scripts.js"></script>
</body>

</html>