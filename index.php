<?php
    function sec_session_start() {
        $secure = true;
        $httponly = true;

        ini_set('session.use_only_cookies', 1);
        $cookieParams = session_get_cookie_params();
        session_set_cookie_params($cookieParams["lifetime"], $cookieParams["path"], $cookieParams["domain"], $secure, $httponly);
        session_name('Website_Dinamico');
        session_start();
    }

?>
        <?php include_once(__DIR__.'/static/main/head.php');?>

        <title> Website dinâmico com formulário para Whatsapp </title>
        <meta name="description" content="Website dinâmico com formulário para Whatsapp">
        <meta name="keywords" content="Website, Dinamico, Whatsapp">
        <meta name="google" content="notranslate">
    </head>

    <body>
        <header>
            <?php include_once(__DIR__.'/static/main/navbar.php');?>			
		</header>
        <main>
            <!-- Carousel -->		
            <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-bs-target="#myCarousel" data-bs-slide-to="0" class=""></li>
                    <li data-bs-target="#myCarousel" data-bs-slide-to="1" class="active"></li>
                    <li data-bs-target="#myCarousel" data-bs-slide-to="2" class=""></li>
                </ol>

                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#777"></rect></svg>
                        <div class="container">
                        <div class="carousel-caption text-left">
                            <h1>Informação em destaque 1</h1>
                            <p>Resumo da informação em destaque 1</p>
                            <p>
                            <a class="btn btn-success" onclick="contato_whatsapp(1)">
                                Contate agora pelo Whatsapp 1
                            </a>
                            </p>
                        </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#777"></rect></svg>
                        <div class="container">
                        <div class="carousel-caption">
                            <h1 class="fw-light">Informação em destaque 2</h1>
                            <p>Resumo da informação em destaque 2</p>
                            <p>Contato 
                            <a href="tel:+55-91-99999-9999">(91) 9.9999-9999 </a>
                            </p>
                            <p>
                            <a class="btn btn-success" onclick="contato_whatsapp(2)">
                                Contate agora pelo Whatsapp 2
                                <!--<svg width="16" height="16">
                                <image class="change-my-color" xlink:href="img/whatsapp.svg" width="16" height="16"/>
                                </svg> -->
                            </a>
                            </p>
                        </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#777"></rect></svg>
                        <div class="container">
                        <div class="carousel-caption text-right">
                            <h1>Informação em destaque 3</h1>
                            <p>Resumo da informação em destaque 3</p>
                            <p>
                            <a class="btn btn-success" onclick="contato_whatsapp(3)">
                                Contate agora pelo Whatsapp 3
                                <!--<svg width="16" height="16">
                                <image class="change-my-color" xlink:href="img/whatsapp.svg" width="16" height="16"/>
                                </svg> -->
                            </a>
                            </p>
                        </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                </button>

            </div>
            <!-- // Carousel -->

            <!-- Formulário de contato -->
            <div id="contato" class="form-signin w-100 m-auto d-print-none">
                <hr class="featurette-divider">
                <div class="container marketing my-1 p-3 bg-white rounded shadow-sm">
                    <form class="text-center" id="frmContato">
                        <h1 class="h3 mb-3 font-weight-normal">Entre em contato</h1>
                        <div class="text-start">
                            <label for="validarNome">Nome</label>
                            <input  type="text" name="nome" class="form-control" placeholder="Nome e sobrenome" maxlength="50" id="validarNome">
                            <div class="invalid-feedback text-right" id="nomeInvalido"> </div>
                            <div class="valid-feedback text-right" id="nomeValido"> </div>
                        </div>
                        
                        <div class="text-start">
                            <label for="validarTelefone">Telefone</label>
                            <input  type="tel" name="telefone" class="form-control" placeholder="(91) 9.9999-9999" maxlength="16"  id="validarTelefone">
                            <div class="invalid-feedback text-right" id="telefoneInvalido"> </div>
                            <div class="valid-feedback text-right" id="telefoneValido"> </div>
                        </div>

                        <div class="text-start">
                            <label for="validarEmail">Email</label>
                            <input  type="text" name="email" class="form-control" placeholder="exemplo@gmail.com" maxlength="100" id="validarEmail">
                            <div class="invalid-feedback text-right" id="emailInvalido"> </div>
                            <div class="valid-feedback text-right" id="emailValido"> </div>
                        </div>

                        <div class="text-start">
                            <label for="validarAreaTexto">Mensagem</label>
                            <textarea  name="mensagem" class="form-control" placeholder="Escreva sua mensagem aqui!" maxlength="200" id="validarAreaTexto"></textarea>
                            <div class="invalid-feedback text-right" id="areaTextoInvalido"> </div>
                            <div class="valid-feedback text-right" id="areaTextoValido"> </div>
                        </div>

                        </br>
                        <div class="btn-group">
                            <button type="button" class="btn btn-lg btn btn-success" onclick="envio_contato()">Enviar whatsapp</button>
                        </div>
                    </form>
                </div>
            </div>
        </main>
        <!-- // Main -->
        
        <!-- Footer -->
        <div class="text-left" id="footer">
            <?php include(__DIR__.'/static/main/footer.php'); ?>
        </div>
        <!-- // Footer -->

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
        <script>
            function contato_whatsapp(n){
                switch (n) {
                case 1:
                    location.href = "https://wa.me/5591999999999?text=Contato%20pelo%20site%20Contato1";
                    break;
                case 2:
                    location.href = "https://wa.me/5591999999999?text=Contato%20pelo%20site%20Contato2";
                    break;
                case 3:
                    location.href = "https://wa.me/5591999999999?text=Contato%20pelo%20site%20Contato3";
                    break;   
                }
            }
		</script>
	</body>
</html>