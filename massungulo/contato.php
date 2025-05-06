<?php include 'includes/header.php'; ?>

<section class="banner bg-brown pt-4 pb-2">
    <div class="container d-flex align-items-center">
        <p class="text-white"><a class="link-light" href="index.php">Início</a> | Contacto</p>
    </div>
</section>

<!-- Seção de Contactos -->
<section class="contact-section mt-5">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-6 mx-auto text-center">
                <h2 class="section-title fw-bold fs-1">Como podemos ajudar?</h2>
                <p>Entre em contacto connosco através dos canais abaixo ou preencha o formulário e retornaremos o mais breve possível.</p>
            </div>
        </div>

        <div class="row g-4 mb-5">
            <!-- Telefone -->
            <div class="col-md-4">
                <div class="contact-card text-center">
                    <div class="contact-icon">
                        <i class="fas fa-phone-alt"></i>
                    </div>
                    <h3>Telefone</h3>
                    <p>Disponível durante o horário comercial</p>
                    <div class="contact-info-item justify-content-center">
                        <div class="contact-info-icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div>
                            <h5 class="mb-0">+258 84 000 0000</h5>
                            <small>Principal</small>
                        </div>
                    </div>
                    <div class="contact-info-item justify-content-center">
                        <div class="contact-info-icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div>
                            <h5 class="mb-0">+258 84 000 0000</h5>
                            <small>Alternativo</small>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Email -->
            <div class="col-md-4">
                <div class="contact-card text-center">
                    <div class="contact-icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <h3>Email</h3>
                    <p>Respondemos em até 24 horas</p>
                    <div class="contact-info-item justify-content-center">
                        <div class="contact-info-icon">
                            <i class="fas fa-at"></i>
                        </div>
                        <div>
                            <h5 class="mb-0">massungulolda@gmail.com</h5>
                            <small>Informações gerais</small>
                        </div>
                    </div>
                    <div class="contact-info-item justify-content-center">
                        <div class="contact-info-icon">
                            <i class="fas fa-at"></i>
                        </div>
                        <div>
                            <h5 class="mb-0">suporte@empresa.co.mz</h5>
                            <small>Suporte técnico</small>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Localização -->
            <div class="col-md-4">
                <div class="contact-card text-center">
                    <div class="contact-icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <h3>Localização</h3>
                    <p>Visite nossas instalações</p>
                    <div class="contact-info-item justify-content-center">
                        <div class="contact-info-icon">
                            <i class="fas fa-building"></i>
                        </div>
                        <div>
                            <h5 class="mb-0">Av. 25 de Setembro, 1234</h5>
                            <small>Mozambique, Chibuto</small>
                        </div>
                    </div>
                    <div class="contact-info-item justify-content-center">
                        <div class="contact-info-icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <div>
                            <h5 class="mb-0">Seg-Sex: 8h00-17h00</h5>
                            <small>Horário comercial</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Formulário e Mapa -->
        <div class="row g-4 mb-5">
            <div class="col-lg-6">
                <div class="contact-card">
                    <h3 class="section-title">Envie-nos uma mensagem</h3>
                    <form action="https://formsubmit.co/hemelaly02@gmail.com" method="POST">
                        <input type="hidden" name="_autoresponse" value="your custom message">
                        <input type="hidden" name="_captcha" value="false">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="name" class="form-label">Nome completo</label>
                                <input type="text" class="form-control" name="Nome" id="name" required>
                            </div>
                            <div class="col-md-6">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" name="Email" id="email" required>
                            </div>
                            <div class="col-12">
                                <label for="subject" class="form-label">Assunto</label>
                                <input type="text" class="form-control" name="Assunto" id="subject" required>
                            </div>
                            <div class="col-12">
                                <label for="message" class="form-label">Mensagem</label>
                                <textarea class="form-control" name="Mensagem" id="message" rows="5" required></textarea>
                            </div>
                            <input type="hidden" name="_next" value="https://d006-197-249-55-232.ngrok-free.app/">
                            <div class="alert alert-warning">
                                NOTA IMPORTANTE!: Depois de preencher todos os campos devidamente, ao clicar no botão de enviar, será levado de volta a página principal, mas o email será encaminhado com sucesso. 
                            </div>
                            <div class="col-12">
                                <input type="submit" class="btn bg-brown text-white px-5 py-3" value="Enviar mensagem">
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="contact-card">
                    <h3 class="section-title">Onde estamos</h3>
                    <div class="map-container">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3587.847074152034!2d32.58221531502914!3d-25.96898398353981!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjXCsDU4JzA4LjQiUyAzMsKwMzUnMDMuOSJF!5e0!3m2!1spt-PT!2smz!4v1620000000000!5m2!1spt-PT!2smz"
                            width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                    <div class="mt-4">
                        <h5>Redes Sociais</h5>
                        <div class="d-flex mt-3">
                            <a href="#" class="social-link " style="text-decoration: none;"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="social-link " style="text-decoration: none;"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="social-link " style="text-decoration: none;"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#" class="social-link " style="text-decoration: none;"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="social-link " style="text-decoration: none;"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<?php include 'includes/cta.php'; ?>

<?php include 'includes/footer.php'; ?>