<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- LINKS CSS --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@300;400;500&family=Montserrat:wght@300;400;500&family=Rubik:wght@300;400;500&display=swap" rel="stylesheet">
    <title>Marketing</title>
</head>
<body>
    <header>
        <div class="nav-mobile">
            <ul>
                <li>
                    <a href="#informacao">Oque é o MMI ?</a>
                </li>
                <li>
                    <a href="#vantagens">Vantagens</a>
                </li>
                <li>
                    <a href="#resultados">Resultados</a>
                </li>
                <li>
                    <a href="#perguntas">Perguntas frequentes</a>
                </li>
            </ul>
        </div>
        <nav>
            <div class="logo">
                <img src="{{ asset('img/logo02.png') }}">
            </div>
            <button>
                <span></span>
                <span></span>
                <span></span>
            </button>
            <ul>
                <li>
                    <a href="#informacao">Oque é o MMI ?</a>
                </li>
                <li>
                    <a href="#vantagens">Vantagens</a>
                </li>
                <li>
                    <a href="#resultados">Resultados</a>
                </li>
                <li>
                    <a href="#perguntas">Perguntas frequentes</a>
                </li>
            </ul>
        </nav> 
    </header>
    <div class="main">
        <section class="banner">
            <div class="descricao-banner">
                <div class="logo">
                    <img src="{{ asset('img/logo02.png') }}">
                </div>
                <div class="texto">
                    Ajudamos você a conquistar sua <strong>renda extra</strong> no conforto de sua casa
                </div>
            </div>
        </section>
        <section class="tag informacao" id="informacao">
            <img src="{{ asset('img/img01.png') }}">
            <div class="descricao-informacao">
                <div class="title">MÉTODO MARKETING INFALÍVEL</div>
                <div class="linha-titulo">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <span>Método Marketing Infalível, é uma metodologia que foi trazida dos Estados Unidos para o Brasil, que vai te ensinar do zero como montar uma estrutura online para você trabalhar através da Internet e ter resultados Extraordinários.</span>
            </div>
        </section>
        <section class="tag vantagens" id="vantagens">
            <div class="titulo-vantagens">
                VANTAGENS
                <div class="linha-titulo">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
            <div class="bloco-vantagens">

                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="item-vantagem">
                                <div class="header-vantagem">
                                    <i class="fas fa-book"></i>
                                </div>
                                <div class="body-vantagem">
                                    <div class="title-body-vantagem">
                                        <strong>+50</strong> Vídeo Aulas <strong>+12</strong> Módulos(Atualizações MENSAIS)
                                    </div>
                                    <div class="desc-body-vantagem">
                                        Acesso ao conteúdo dentro da plataforma da Eduzz com acesso vitalício, para você ver e rever <strong>QUANTAS VEZES QUISER</strong>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="item-vantagem">
                                <div class="header-vantagem">
                                    <i class="fab fa-whatsapp"></i>
                                </div>
                                <div class="body-vantagem">
                                    <div class="title-body-vantagem">
                                        Grupo <strong>Vip</strong> no WhatsApp
                                    </div>
                                    <div class="desc-body-vantagem">
                                        Acesso ao nosso grupo do WhatsApp, Networking com quem está de fato no mercado. Quando você busca conhecimento, fica muito mais difícil estando sozinho, então esse é grupo para você conviver com quem está no mesmo caminho que você e para acabar com suas dúvidas de vez
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="item-vantagem">
                                <div class="header-vantagem">
                                    <i class="fas fa-users"></i>
                                </div>
                                <div class="body-vantagem">
                                    <div class="title-body-vantagem">
                                        <strong>Afiliados</strong> e marketing
                                    </div>
                                    <div class="desc-body-vantagem">
                                        Conteúdo voltado para Afiliados, e todos aqueles que desejam ter uma nova fonte de renda, ou até mesmo uma renda principal, através da internet
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="carousel-item">
                            <div class="item-vantagem">
                                <div class="header-vantagem">
                                    <i class="fas fa-graduation-cap"></i>
                                </div>
                                <div class="body-vantagem">
                                    <div class="title-body-vantagem">
                                        Mentorias Semanais com o <strong>PRODUTOR</strong>
                                    </div>
                                    <div class="desc-body-vantagem">
                                        Você vai ter direito a ter acesso as nossas <strong>MENTORIAS VIPS</strong>, que são realizadas toda semana em um horário específico, para tirar todas dúvidas e receber atualizações das estratégias que estão dando certo                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev2" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon2" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next2" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                      <span class="carousel-control-next-icon2" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>
            </div>
        </section>
        <section class="tag referencias" id="resultados">
            <div class="legenda">
                <span><strong>RESULTADOS</strong> DE ALUNOS</span>
                <div class="linha-titulo">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <i class="fas fa-arrow-right"></i>
            </div>
            <div class="content-ref">
                <div class="template-referencia">
                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ asset('img/tela01.jpg') }}" alt="" srcset="">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('img/tela02.jpg') }}" alt="" srcset="">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('img/tela03.jpg') }}" alt="" srcset="">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </section>
        <section class="tag produtos" id="perguntas">
            <div class="titulo-produtos">
                PERGUNTAS FREQUENTES
                <div class="linha-titulo">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
            <div class="bloco-produtos">
                <div class="perguntas">
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-heading1">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse1" aria-expanded="false" aria-controls="flush-collapse1">
                                    Como vou conseguir receber o Curso e os Bônus?
                                </button>
                            </h2>
                            <div id="flush-collapse1" class="accordion-collapse collapse" aria-labelledby="flush-heading1" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">– Você receberá um e-mail com o acesso ao treinamento logo após a confirmação do pagamento. Para compras no cartão de crédito o acesso é liberado quase que imediatamente após a compra. Para compras via boleto bancário, o acesso é liberado 1 a 3 dias úteis após o pagamento.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-heading2">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse2" aria-expanded="false" aria-controls="flush-collapse2">
                                    Posso assistir as Aulas quantas vezes quiser?
                                </button>
                            </h2>
                            <div id="flush-collapse2" class="accordion-collapse collapse" aria-labelledby="flush-heading2" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">– Sim! O Acesso ao conteúdo é vitalício, então você pode assistir quando quiser e quantas vezes quiser. Basta ter um aparelho compatível que acesse à internet (Um celular, computador, Smart TV, Tablet ou qualquer outro dispositivo que acesse a Internet e tenha um navegador). Você não precisa de um dispositivo super potente e moderno. Até mesmo com um celular simples você consegue acessar.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-heading3">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse3" aria-expanded="false" aria-controls="flush-collapse3">
                                    Em quanto tempo eu vou ter resultado com o Método Marketing Infalível?
                                </button>
                            </h2>
                            <div id="flush-collapse3" class="accordion-collapse collapse" aria-labelledby="flush-heading3" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">– Os resultados dependem de pessoa pra pessoa. Não existe promessa de dinheiro fácil. O Seu sucesso dependerá de você aplicar todo o conteúdo proposto nas aulas e da sua total dedicação e comprometimento.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-heading4">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse4" aria-expanded="false" aria-controls="flush-collapse4">
                                    Preciso ter um Computador ou Notebook para iniciar?
                                </button>
                            </h2>
                            <div id="flush-collapse4" class="accordion-collapse collapse" aria-labelledby="flush-heading4" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">– Não. Você consegue realizar 80% do conteúdo do treinamento usando apenas o celular.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-heading5">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse5" aria-expanded="false" aria-controls="flush-collapse5">
                                    Como que vai funcionar o Suporte?
                                </button>
                            </h2>
                            <div id="flush-collapse5" class="accordion-collapse collapse" aria-labelledby="flush-heading5" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">– Todo o suporte ao treinamento acontece via WhatsApp. Você receberá acesso aos grupos VIP assim que receber o acesso ao treinamento. Poderá tirar todas as dúvidas com nossa equipe de suporte em tempo real e também fazer networking (trocar idéias e compartilhar estratégias) com nossos alunos mais experientes. Tudo isso sem pagar nada a mais, e por tempo ilimitado. Mesmo após terminar o treinamento você continua tendo acesso ao suporte.</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item-produto">
                    <div class="header-item">
                        <div class="bg-item"></div>
                    </div>
                    <div class="body-item">
                        <div class="title-item">
                            Método Marketing Infalível
                        </div>
                        <div class="desc-item">
                            Método Marketing Infalível, é uma metodologia que foi trazida dos Estados Unidos para o Brasil, que vai te ensinar do zero como montar uma estrutura online para você trabalhar através da Internet e ter resultados Extraordinários.
                        </div>
                    </div>
                    <div class="footer-item">
                        <a href="https://sun.eduzz.com/438314?a=74045750" target="_blank">
                            QUERO ME INSCREVER AGORA
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <footer>
        <div class="bloco-contato">
            <div class="bloco-footer">
                <div class="title-contato">
                    Me siga nas <strong>redes sociais</strong> para ficar por dentro das <strong>novidades</strong>
                </div>
                <div class="bloco-contatos">
                    <span>
                        <a href="https://www.instagram.com/michaelh.o/" target="_blank">
                            <i class="fab fa-instagram"></i>
                            <label>instagram/michaelh.o</label>
                        </a>
                    </span>
                    <span>
                        <a href="ttps://www.facebook.com/agenciaheming" target="_blank">
                            <i class="fab fa-facebook-f"></i>
                            <label>facebook/agenciaheming</label>
                        </a>
                    </span>
                </div>
            </div>
            <div class="bloco-footer">
                <div class="title-contato">
                    Contato
                </div>
                <div class="bloco-contatos">
                    <span>
                        <a href="https://api.whatsapp.com/send?phone=((55)66997177126)&amp;text=Olá, gostaria de conhecer mais sobre este mercado">
                            <i class="fab fa-whatsapp"></i>
                            <label>Fale conosco via whatsapp</label>
                        </a>
                    </span>
                    <span>
                        <a href="mailto:michael-heming@hotmail.com">
                            <i class="far fa-envelope"></i>
                            <label>Michael-heming@hotmail.com</label>
                        </a>
                    </span>
                    <span>
                        <a href="tel:5566997177126">
                            <i class="fas fa-phone-volume"></i>
                            <label>(66) 99717-7126</label>
                        </a>
                    </span>
                </div>
            </div>
            <div class="bloco-footer">
                <div class="bloco-sessoes">
                    <span>
                        <a href="#informacao">
                            Oque é o MMI ?
                        </a>
                    </span>
                    <span>
                        <a href="#vantagens">
                            Vantagens
                        </a>
                    </span>
                    <span>
                        <a href="#resultados">
                            Resultados
                        </a>
                    </span>
                    <span>
                        <a href="#perguntas">
                            Perguntas frequentes
                        </a>
                    </span>
                </div>
            </div>
        </div>

    </footer>

    <a href="#" class="voltar-ao-topo"><i class="fas fa-arrow-up"></i></a>
    
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.js') }}"></script>
    <script>
        $(document).ready(function(){
            $(window).scroll(function(){
                if(this.scrollY > 60) {
                    $("header").addClass("sticky");
                    $(".pag-active").css("background", "#1a6ca2a8");
                    $('.voltar-ao-topo').fadeIn(200);
                } else {
                    $("header").removeClass("sticky");
                    $(".pag-active").css("background", "transparent");
                    $('.voltar-ao-topo').fadeOut(200);
                };
            });

            $('.voltar-ao-topo').click(function(event) {
                event.preventDefault();
                $('html, body').animate({scrollTop: 0}, 300);
            })

            $('nav button').click(function (){
                $(this).toggleClass("active")
                $(".nav-mobile").toggleClass("active")
            });

        });

        $('header nav ul li > a').click(function() {
            $('header nav ul li > a').removeClass('active');
            $(this).addClass('active'); 
        }); 

        $(".bloco-produtos a").mouseover(function(){
            $(this).find(".video").addClass("video-active");
            $(this).find(".fa-play-circle").addClass("icon-active");
        });
        $(".bloco-produtos a").mouseout(function(){
            $(this).find(".video").removeClass("video-active");
            $(this).find(".fa-play-circle").removeClass("icon-active");
        });

        $(document).on("scroll", function() {
            var pageTop = $(document).scrollTop();
            var pageBottom = pageTop + $(window).height();
            var tags = $(".tag");

            for (var i = 0; i < tags.length; i++) {
                var tag = tags[i];

                if ($(tag).position().top < pageBottom) {
                    $(tag).addClass("visible");
                } else {
                    $(tag).removeClass("visible");
                }
            }
        });
 
    </script>
</body>
</html>