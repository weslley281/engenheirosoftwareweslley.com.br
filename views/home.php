<?php
session_start();
include_once "menu.php";
include_once "../controllers/busca_repositorio_git.php";
?>
<!-- Masthead-->
<header class="masthead bg-primary text-white text-center">
    <div class="container d-flex align-items-center flex-column">
        <!-- Masthead Avatar Image-->
        <img class="masthead-avatar mb-5" src="../assets/img/avataaars.svg" alt="..." />
        <!-- Masthead Heading-->
        <h1 class="masthead-heading text-uppercase mb-0">Engenheiro de Software Weslley Ferraz</h1>
        <!-- Icon Divider-->
        <div class="divider-custom divider-light">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <!-- Masthead Subheading-->
        <div class="bg-light rounded py-2 px-2"><img src="../files/estacio-logo.png" class="img-fluid" height="50" width="100" /></div>
        <p class="masthead-subheading font-weight-light mb-0">Bacharel em Engenharia de Software 2022 - 2025</p>
    </div>
</header>
<!-- Portfolio Section-->
<section class="page-section portfolio" id="portfolio">
    <div class="container">
        <?php
        $repos = busca_repositorios();
    foreach ($repos as $repo) {
        echo "<p><strong>Nome:</strong> " . $repo['name'] . "<br>";
        echo "<strong>Descrição:</strong> " . $repo['description'] . "<br>";
        echo "<strong>URL:</strong> <a href='" . $repo['html_url'] . "' target='_blank'>" . $repo['html_url'] . "</a></p><hr>";
    }
?>
    </div>
</section>
<!-- About Section-->
<section class="page-section bg-primary text-white mb-0" id="about">
    <div class="container">
        <!-- About Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-white">Sobre</h2>
        <!-- Icon Divider-->
        <div class="divider-custom divider-light">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <!-- About Section Content-->
        <div class="row">
            <div class="col-lg-4 ms-auto"><h2><strong>Bootcamps Concluídos: </strong></h2>
                <ul>
                    <li><strong><a class="link-light" href="../files/NodeJS.pdf" target="_blank">NodeJS - Ignite - Rocketseat 🚀</a></strong></li>
                    <li><strong><a class="link-light" href="../files/ReactJS.pdf" target="_blank">ReactJS - Ignite - Rocketseat 🚀</a></strong></li>
                    <li><strong><a class="link-light" href="../files/React Native.pdf" target="_blank">React Native - Ignite - Rocketseat 🚀</a></strong></li>
                    <li><strong><a class="link-light" href="../files/Figma.pdf" target="_blank">Figma - Ignite - Rocketseat 🚀</a></strong></li>
                    <li><strong><a class="link-light" href="../files/Apps desktop com Electron.pdf" target="_blank">Apps desktop com Electron - Ignite - Rocketseat 🚀</a></strong></li>
                    <li><strong><a class="link-light" href="../files/Code Update TQI - Backend com Kotlin e Java.pdf" target="_blank">Code Update TQI - Backend com Kotlin e Java - Digital Innovation One ☕</a></strong></li>
                    <li><strong><a class="link-light" href="../files/Santander Bootcamp 2023 - Backend Java" target="_blank">Santander Bootcamp 2023 - Backend Java - Digital Innovation One 🌟</a></strong></li>
                    <!--
                    <li><strong><a class="link-light" href="../files/" target="_blank"></a></strong></li>
                    <li><strong><a class="link-light" href="../files/" target="_blank"></a></strong></li>
                    <li><strong><a class="link-light" href="../files/" target="_blank"></a></strong></li>
                    <li><strong><a class="link-light" href="../files/" target="_blank"></a></strong></li>
                    <li><strong><a class="link-light" href="../files/" target="_blank"></a></strong></li>
                    <li><strong><a class="link-light" href="../files/" target="_blank"></a></strong></li>
                    <li><strong><a class="link-light" href="../files/" target="_blank"></a></strong></li>
                -->
            </ul>
        </div>
        <div class="col-lg-4 ms-auto"><h2><strong>Cursos Proficionalizantes: </strong></h2>
            <ul>
                <li><strong><a class="link-light" href="../files/Certificado Informatica.pdf" target="_blank">INFORMÁTICA BÁSICA - SENAC</a></strong></li>
                <li><strong><a class="link-light" href="../files/certificado cebrac.jpg" target="_blank">Montagem e Manutenção de Computadores - CEBRAC</a></strong></li>
                <li><strong><a class="link-light" href="../files/Redes de Computadores Estacio.pdf" target="_blank">Redes de Computadores - Estácio</a></strong></li>
                <li><strong><a class="link-light" href="../files/Configs de Rede em Linux Windows.pdf" target="_blank">Configs de Rede em Linux Windows - DlteC do Brasil </a></strong></li>
                <li><strong><a class="link-light" href="../files/CERTIFICADO-INTRA-REDE-EP20-WESLLEY-HENRIQUE-VIEIRA-FERRAZ-71532-233250.pdf" target="_blank">Intra Rede - Nic.br</a></strong></li>
                <li><strong><a class="link-light" href="../files/lgpd.pdf" target="_blank"></a>Implementação de LGPD via Metodologia Ágil</strong></li>
                <li><strong><a class="link-light" href="../files/12 - Pós-Intermediário.pdf" target="_blank">EF Level 12 Upper Intermediate CEFR Level B2 - EF English Live</a></strong></li>
            </ul>
        </div>
    </div>
    <!-- About Section Button-->
    <!--
    <div class="text-center mt-4">
        <a class="btn btn-xl btn-outline-light" href="https://startbootstrap.com/theme/freelancer/">
            <i class="fas fa-download me-2"></i>
            Free Download!
        </a>
    </div>
    -->
</div>
</section>
<!-- Contact Section-->
<section class="page-section" id="contact">
    <div class="container">
        <!-- Contact Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Contact Me</h2>
        <!-- Icon Divider-->
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <!-- Contact Section Form-->
        <div class="row justify-content-center">
            <div class="col-lg-8 col-xl-7">
                <!-- * * * * * * * * * * * * * * *-->
                <!-- * * SB Forms Contact Form * *-->
                <!-- * * * * * * * * * * * * * * *-->
                <!-- This form is pre-integrated with SB Forms.-->
                <!-- To make this form functional, sign up at-->
                <!-- https://startbootstrap.com/solution/contact-forms-->
                <!-- to get an API token!-->
                <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                    <!-- Name input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="name" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                        <label for="name">Full name</label>
                        <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                    </div>
                    <!-- Email address input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="email" type="email" placeholder="name@example.com" data-sb-validations="required,email" />
                        <label for="email">Email address</label>
                        <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                        <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                    </div>
                    <!-- Phone number input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="phone" type="tel" placeholder="(123) 456-7890" data-sb-validations="required" />
                        <label for="phone">Phone number</label>
                        <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                    </div>
                    <!-- Message input-->
                    <div class="form-floating mb-3">
                        <textarea class="form-control" id="message" type="text" placeholder="Enter your message here..." style="height: 10rem" data-sb-validations="required"></textarea>
                        <label for="message">Message</label>
                        <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                    </div>
                    <!-- Submit success message-->
                    <!---->
                    <!-- This is what your users will see when the form-->
                    <!-- has successfully submitted-->
                    <div class="d-none" id="submitSuccessMessage">
                        <div class="text-center mb-3">
                            <div class="fw-bolder">Form submission successful!</div>
                            To activate this form, sign up at
                            <br />
                            <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                        </div>
                    </div>
                    <!-- Submit error message-->
                    <!---->
                    <!-- This is what your users will see when there is-->
                    <!-- an error submitting the form-->
                    <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                    <!-- Submit Button-->
                    <button class="btn btn-primary btn-xl disabled" id="submitButton" type="submit">Send</button>
                </form>
            </div>
        </div>
    </div>
</section>        
<?php
include_once "footer.php"
?>