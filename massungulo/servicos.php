<?php include 'includes/header.php'; ?>

<section class="banner bg-brown pt-4 pb-2">
    <div class="container d-flex align-items-center">
        <p class="text-white"><a class="link-light" href="index.php">Início</a> | Serviços</p>
    </div>
</section>

<section class="service-section bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center mb-5">
                <h2 class="display-5 fw-bold mb-3">Nossos Serviços Detalhados</h2>
                <p class="lead">Toda a informação que você precisa sobre cada serviço</p>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <!-- Navegação por abas -->
                <ul class="nav nav-tabs" id="serviceTabs" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="design-tab" data-bs-toggle="tab" data-bs-target="#design" type="button" role="tab">
                            <i class="fas fa-paint-brush me-2"></i>Lorem Ipsum
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="dev-tab" data-bs-toggle="tab" data-bs-target="#dev" type="button" role="tab">
                            <i class="fas fa-code me-2"></i>Lorem Ipsum
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="marketing-tab" data-bs-toggle="tab" data-bs-target="#marketing" type="button" role="tab">
                            <i class="fas fa-bullhorn me-2"></i>Lorem Ipsum
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="consultoria-tab" data-bs-toggle="tab" data-bs-target="#consultoria" type="button" role="tab">
                            <i class="fas fa-chart-line me-2"></i>Lorem Ipsum
                        </button>
                    </li>
                </ul>

                <!-- Conteúdo das abas -->
                <div class="tab-content" id="serviceTabsContent">
                    <!-- Aba Design -->
                    <div class="tab-pane fade show active" id="design" role="tabpanel">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="service-header">
                                    <div class="service-icon">
                                        <i class="fas fa-paint-brush"></i>
                                    </div>
                                    <h3>Lorem Ipsum</h3>
                                    <p class="text-muted">Criação de interfaces modernas e funcionais</p>
                                </div>

                                <p>Nosso serviço de Design Web combina estética e funcionalidade para criar experiências digitais memoráveis. Trabalhamos com os princípios mais recentes de UI/UX para garantir que seu site não apenas pareça incrível, mas também ofereça uma jornada intuitiva para seus usuários.</p>

                                <div class="service-features">
                                    <h5 class="mb-4">O que incluímos:</h5>
                                    <div class="feature-item">
                                        <div class="feature-icon">
                                            <i class="fas fa-check-circle"></i>
                                        </div>
                                        <div>
                                            <h6>Design Responsivo</h6>
                                            <p class="text-muted mb-0">Layouts que se adaptam perfeitamente a todos os dispositivos</p>
                                        </div>
                                    </div>
                                    <div class="feature-item">
                                        <div class="feature-icon">
                                            <i class="fas fa-check-circle"></i>
                                        </div>
                                        <div>
                                            <h6>Prototipação Interativa</h6>
                                            <p class="text-muted mb-0">Visualize e teste o design antes da implementação</p>
                                        </div>
                                    </div>
                                    <div class="feature-item">
                                        <div class="feature-icon">
                                            <i class="fas fa-check-circle"></i>
                                        </div>
                                        <div>
                                            <h6>Identidade Visual</h6>
                                            <p class="text-muted mb-0">Criação de logotipo, paleta de cores e elementos gráficos</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="service-image">
                                    <img src="img/25.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="mt-4">
                                    <h5>Processo de Trabalho</h5>
                                    <ol class="list-group list-group-numbered">
                                        <li class="list-group-item border-0 ps-0">Briefing e pesquisa</li>
                                        <li class="list-group-item border-0 ps-0">Wireframes e estrutura</li>
                                        <li class="list-group-item border-0 ps-0">Design de interface</li>
                                        <li class="list-group-item border-0 ps-0">Revisões e ajustes</li>
                                        <li class="list-group-item border-0 ps-0">Entrega dos assets</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Aba Desenvolvimento -->
                    <div class="tab-pane fade" id="dev" role="tabpanel">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="service-header">
                                    <div class="service-icon">
                                        <i class="fas fa-code"></i>
                                    </div>
                                    <h3>Lorem Ipsum</h3>
                                    <p class="text-muted">Soluções técnicas robustas e escaláveis</p>
                                </div>

                                <p>Transformamos designs em realidade com código limpo e eficiente. Nossa equipe de desenvolvimento utiliza as tecnologias mais modernas para criar sites e aplicações web que são rápidos, seguros e fáceis de manter.</p>

                                <div class="service-features">
                                    <h5 class="mb-4">Lorem Ipsum:</h5>
                                    <div class="feature-item">
                                        <div class="feature-icon">
                                            <i class="fab fa-html5"></i>
                                        </div>
                                        <div>
                                            <h6>Front-end Moderno</h6>
                                            <p class="text-muted mb-0">HTML5, CSS3, JavaScript, React e Vue.js</p>
                                        </div>
                                    </div>
                                    <div class="feature-item">
                                        <div class="feature-icon">
                                            <i class="fab fa-node-js"></i>
                                        </div>
                                        <div>
                                            <h6>Back-end Robusto</h6>
                                            <p class="text-muted mb-0">Node.js, PHP, Python e bancos de dados SQL/NoSQL</p>
                                        </div>
                                    </div>
                                    <div class="feature-item">
                                        <div class="feature-icon">
                                            <i class="fas fa-mobile-alt"></i>
                                        </div>
                                        <div>
                                            <h6>Aplicativos Web Progressivos</h6>
                                            <p class="text-muted mb-0">Experiência similar a apps nativos diretamente no navegador</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="service-image">
                                    <img src="https://source.unsplash.com/random/800x600/?coding" alt="Desenvolvimento Web" class="img-fluid">
                                </div>
                                <div class="mt-4">
                                    <h5>Nossa Abordagem</h5>
                                    <ul class="list-group">
                                        <li class="list-group-item border-0 ps-0">
                                            <i class="fas fa-check text-success me-2"></i>
                                            Código documentado e bem estruturado
                                        </li>
                                        <li class="list-group-item border-0 ps-0">
                                            <i class="fas fa-check text-success me-2"></i>
                                            Testes automatizados para qualidade
                                        </li>
                                        <li class="list-group-item border-0 ps-0">
                                            <i class="fas fa-check text-success me-2"></i>
                                            Integração contínua e deploy automatizado
                                        </li>
                                        <li class="list-group-item border-0 ps-0">
                                            <i class="fas fa-check text-success me-2"></i>
                                            Segurança como prioridade
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Aba Marketing -->
                    <div class="tab-pane fade" id="marketing" role="tabpanel">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="service-header">
                                    <div class="service-icon">
                                        <i class="fas fa-bullhorn"></i>
                                    </div>
                                    <h3>Lorem Ipsum</h3>
                                    <p class="text-muted">Aumente sua presença online e gere resultados</p>
                                </div>

                                <p>Estratégias de marketing digital personalizadas para alavancar seu negócio. Desde gestão de redes sociais até campanhas de publicidade online, ajudamos você a alcançar o público certo com a mensagem certa.</p>

                                <div class="service-features">
                                    <h5 class="mb-4">Nossas Especialidades:</h5>
                                    <div class="feature-item">
                                        <div class="feature-icon">
                                            <i class="fab fa-google"></i>
                                        </div>
                                        <div>
                                            <h6>SEO e Google Ads</h6>
                                            <p class="text-muted mb-0">Melhore seu posicionamento e visibilidade</p>
                                        </div>
                                    </div>
                                    <div class="feature-item">
                                        <div class="feature-icon">
                                            <i class="fab fa-facebook"></i>
                                        </div>
                                        <div>
                                            <h6>Mídias Sociais</h6>
                                            <p class="text-muted mb-0">Gestão profissional de redes sociais</p>
                                        </div>
                                    </div>
                                    <div class="feature-item">
                                        <div class="feature-icon">
                                            <i class="fas fa-envelope"></i>
                                        </div>
                                        <div>
                                            <h6>Email Marketing</h6>
                                            <p class="text-muted mb-0">Campanhas eficientes de comunicação</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="service-image">
                                    <img src="https://source.unsplash.com/random/800x600/?marketing" alt="Marketing Digital" class="img-fluid">
                                </div>
                                <div class="mt-4">
                                    <h5>Métricas que Monitoramos</h5>
                                    <div class="row text-center">
                                        <div class="col-4">
                                            <div class="p-3 bg-light rounded">
                                                <h4 class="text-primary">+85%</h4>
                                                <small>Visibilidade</small>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="p-3 bg-light rounded">
                                                <h4 class="text-primary">3x</h4>
                                                <small>Conversões</small>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="p-3 bg-light rounded">
                                                <h4 class="text-primary">-40%</h4>
                                                <small>Custo por lead</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Aba Consultoria -->
                    <div class="tab-pane fade" id="consultoria" role="tabpanel">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="service-header">
                                    <div class="service-icon">
                                        <i class="fas fa-chart-line"></i>
                                    </div>
                                    <h3>Lorem Ipsum</h3>
                                    <p class="text-muted">Otimize sua infraestrutura e processos</p>
                                </div>

                                <p>Nossos especialistas avaliam sua infraestrutura tecnológica e processos para identificar oportunidades de melhoria, redução de custos e aumento de eficiência. Oferecemos planos de ação claros e implementação assistida.</p>

                                <div class="service-features">
                                    <h5 class="mb-4">Áreas de Atuação:</h5>
                                    <div class="feature-item">
                                        <div class="feature-icon">
                                            <i class="fas fa-server"></i>
                                        </div>
                                        <div>
                                            <h6>Infraestrutura de TI</h6>
                                            <p class="text-muted mb-0">Otimização de redes, servidores e cloud</p>
                                        </div>
                                    </div>
                                    <div class="feature-item">
                                        <div class="feature-icon">
                                            <i class="fas fa-shield-alt"></i>
                                        </div>
                                        <div>
                                            <h6>Segurança da Informação</h6>
                                            <p class="text-muted mb-0">Proteção de dados e sistemas</p>
                                        </div>
                                    </div>
                                    <div class="feature-item">
                                        <div class="feature-icon">
                                            <i class="fas fa-project-diagram"></i>
                                        </div>
                                        <div>
                                            <h6>Transformação Digital</h6>
                                            <p class="text-muted mb-0">Modernização de processos e sistemas</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="service-image">
                                    <img src="https://source.unsplash.com/random/800x600/?consulting" alt="Consultoria em TI" class="img-fluid">
                                </div>
                                <div class="mt-4">
                                    <h5>Metodologia</h5>
                                    <div class="accordion" id="consultoriaAccordion">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#diagnostico">
                                                    Fase 1: Diagnóstico
                                                </button>
                                            </h2>
                                            <div id="diagnostico" class="accordion-collapse collapse show" data-bs-parent="#consultoriaAccordion">
                                                <div class="accordion-body">
                                                    Análise detalhada da infraestrutura atual, processos e desafios.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#planejamento">
                                                    Fase 2: Planejamento
                                                </button>
                                            </h2>
                                            <div id="planejamento" class="accordion-collapse collapse" data-bs-parent="#consultoriaAccordion">
                                                <div class="accordion-body">
                                                    Desenvolvimento de roadmap com prioridades e cronograma.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#implementacao">
                                                    Fase 3: Implementação
                                                </button>
                                            </h2>
                                            <div id="implementacao" class="accordion-collapse collapse" data-bs-parent="#consultoriaAccordion">
                                                <div class="accordion-body">
                                                    Acompanhamento na execução das melhorias recomendadas.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/cta.php'; ?>

<?php include 'includes/footer.php'; ?>