<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="utf-8" />
    <title>Steel4Web</title>
    <meta name="description" content="Here goes description" />
    <meta name="author" content="author name" />
    <link rel="shortcut icon" href="<?php echo bloginfo('stylesheet_directory'); ?>/images/favicon.png" type="image/png"/>
    <!-- ======================================================================
    Mobile Specific Meta
    ======================================================================= -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <!-- ======================================================================
    Style CSS + Google Fonts
    ======================================================================= -->
    <link href="<?php echo bloginfo('stylesheet_directory'); ?>/css/swipebox.css" rel="stylesheet" />
    <link href="<?php echo bloginfo('stylesheet_directory'); ?>/css/bootstrap.css" rel="stylesheet" />
    <link href="<?php echo bloginfo('stylesheet_directory'); ?>/css/style.css" rel="stylesheet" />
    <link href="<?php echo bloginfo('stylesheet_directory'); ?>/css/animate.css" rel="stylesheet" />
    <link href="<?php echo bloginfo('stylesheet_directory'); ?>/css/font-awesome.css" rel="stylesheet" />
    <link href="<?php echo bloginfo('stylesheet_directory'); ?>/css/ionicons.min.css" rel="stylesheet" />
    <link href="<?php echo bloginfo('stylesheet_directory'); ?>/css/jquery.fullpage.css" rel="stylesheet" />
    <link href="<?php echo bloginfo('stylesheet_directory'); ?>/color-box/color-style.css" rel="stylesheet" />
    <link href="<?php echo bloginfo('stylesheet_directory'); ?>/color-box/farbtastic/farbtastic.css" rel="stylesheet" />
</head>
<body class="home-page">
    <div class="load-complete">
        <div class="load-position">
            <div class="logo"><img src="<?php echo bloginfo('stylesheet_directory'); ?>/images/logo_dark.png" alt="logo"/></div>
            <h6>Carregando. Um minuto por favor...</h6>
            <div class="loading">
                <div class="loading-line"></div>
                <div class="loading-break loading-dot-1"></div>
                <div class="loading-break loading-dot-2"></div>
                <div class="loading-break loading-dot-3"></div>
            </div>
        </div>
    </div>
    <!-- === START COLOR BOX === -->
    <div class="settings-box">
        <div class="settings-box-icon"><i class="fa fa-spin d-text-c fa-cog"></i></div>
        <div class="settings-box-title">Settings Box</div>
        <p>Primary color</p>
        <ul id="site_color">
            <li><span class="color_1"></span></li>
            <li><span class="color_2"></span></li>
            <li><span class="color_3"></span></li>
            <li><span class="color_4"></span></li>
            <li><span class="color-select"></span></li>      
        </ul>
        <hr> 
        <p>Layout type</p>
        <select name="site_layout">
            <option value="wide">Wide</option>
            <option value="boxed">Boxed</option>
        </select>
        <hr> 
        <p>Background</p>
        <ul id="background_patterns">
            <li><img src="<?php echo bloginfo('stylesheet_directory'); ?>/color-box/background/square-1.png" alt="patterns"></li>
            <li><img src="<?php echo bloginfo('stylesheet_directory'); ?>/color-box/background/square-2.png" alt="patterns"></li>
            <li><img src="<?php echo bloginfo('stylesheet_directory'); ?>/color-box/background/square-3.png" alt="patterns"></li>
            <li><img src="<?php echo bloginfo('stylesheet_directory'); ?>/color-box/background/square-4.png" alt="patterns"></li> 
            <li><img src="<?php echo bloginfo('stylesheet_directory'); ?>/color-box/background/bg-image.jpg" alt="background"></li>       
        </ul>
    </div>
    <!-- === END COLOR BOX === -->
    <div class="box-wide">
        <!-- === START HEADER === -->
        <header class="header-black sticky-bar">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="logo"><a href="<?php echo bloginfo('url'); ?>"><img src="<?php echo bloginfo('stylesheet_directory'); ?>/images/logo.png" alt="logo"/></a></div>
                    </div>
                    <div class="col-md-9">
                        <nav class="menu">
                            <div class="responsive-menu d-text-c-h"><i class="fa fa-bars"></i></div>
                            <ul>
                                <li class="active"><a class="d-text-c-h" data-anchor="slider-section" href="#">Home</a></li>
                                <li><a class="d-text-c-h" data-anchor="offer-section" href="#">Recursos</a></li>
                                <li><a class="d-text-c-h" data-anchor="engenharia-section" href="#">Engenharia</a></li>
                                <li><a class="d-text-c-h" data-anchor="producao-section" href="#">Produção</a></li>
                                <li><a class="d-text-c-h" data-anchor="logistica-section" href="#">Logística</a></li>
                                <li><a class="d-text-c-h" data-anchor="montagem-section" href="#">Montagem</a></li>
                                <li><a class="d-text-c-h" data-anchor="blog-section" href="#">Blog</a></li>                                                                                      
                                <li><a class="d-text-c-h" data-anchor="contact-section" href="#">Contato</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
        <!-- === END HEADER === -->

        <!-- === START CONTENT === -->
        <div class="content" id="fullpage">

            <!-- === START VIDEO SECTION === -->
            <section class="video-section" id="video-section">

                <div class="bg-cover"></div>

                <div class="slide-text">
                    <h2 class="wow flip d-text-c-s animated" data-wow-delay="1s" style="visibility: visible; animation-delay: 1s;">
                        <span>4D</span> + <span>WEB</span>
                        <br/>
                    </h2>
                    <!-- <h3 class="wow pulse animated" data-wow-delay="1s" style="visibility: visible; animation-delay: 1s; animation-name: pulse;">A maneira mais simples e eficaz de gestão e acompanhamento da estrutura metálica</h3> -->

                    <h3 class="wow pulse animated" data-wow-delay="1s" style="visibility: visible; animation-delay: 1s; animation-name: pulse;">Gestão e apresentação de obras metálicas em 3D na web</h3>

                    <div class="text-center">                            
                        <a href="#" class="btn btn-primary btn-lg">Veja em ação</a>
                        &nbsp;                                                            
                        <a href="#" class="btn btn-primary btn-lg">Solicite demonstração</a>                            
                    </div>

                </div>

                <!-- TESTE #569 -->
    <!-- <video autoplay  poster="https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/polina.jpg" id="bgvid" loop>
        <source src="<?php echo bloginfo('stylesheet_directory'); ?>/videos/home_bg.mp4" type="video/mp4"/>
        <source src="<?php echo bloginfo('stylesheet_directory'); ?>/videos/home_bg.webm" type="video/webm"/>
        </video> -->
        <video class="bg" preload="auto" autoplay="true" loop="true" muted="true">
            <source src="<?php echo bloginfo('stylesheet_directory'); ?>/videos/home_bg.mp4" type="video/mp4">
            </video>

            <span class="intro-icon animated bounce">
                <a href="#" data-anchor="about-section" data-scroll-reveal-id="1" data-scroll-reveal-initialized="true" data-scroll-reveal-complete="true" class=""><i class="fa fa-angle-down"></i></a>
            </span>

            <style>
                .intro-icon {
                    animation-iteration-count: infinite;
                    -webkit-animation-iteration-count: infinite;
                }
            </style>

        </section>

        <!-- === END SLIDER SECTION === -->

        <!-- === START ABOUT === -->
        <div class="about-section dark-side" id="about-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="site-title-2">
                            <h1 class="d-text-c">Conheça o app</h1>
                            <h2>Steel4web</h2>
                            <h3><span class="d-bg-c"></span>O Steel4Web é uma aplicação nas nuvens desenvolvida para apresentar e gerenciar suas obras metálicas em 3D na web.<br/>
                                Foi planejado para lhe disponibilizar inúmeros recursos inovadores e de forma flexível para atender pequenas e grandes empresas do setor, veja as vantagens:</h3>

                            </div>
                        </div>
                        <div class="col-md-8 white-side">
                            <div class="about-box-2">
                                <div class="row">
                                    <div class="col-md-6">
                                        <!-- <img src="<?php echo bloginfo('stylesheet_directory'); ?>/images/about-1a.jpg" alt="about img" />             -->
                                        <img src="<?php echo bloginfo('stylesheet_directory'); ?>/images/features/Teste.gif" alt="about img" /> 
                                    </div>
                                    <div class="col-md-6">
                                        <div class="about-box-2-name">
                                            <img src="<?php echo bloginfo('stylesheet_directory'); ?>/images/about-i1.png" alt="icon" class="icon-a d-bg-c" />
                                            <h1>Gestão visual</h1>
                                            <h6>Interface simples e intuitiva. Possibilita o gerenciamento de forma 100% visual.</h6> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="about-box-2">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="about-box-2-name-2">
                                            <img src="<?php echo bloginfo('stylesheet_directory'); ?>/images/about-i2.png" alt="icon" class="icon-a d-bg-c" />
                                            <h1>Acompanhamento<br/>em tempo real</h1>
                                            <h6>Todos os estágios de produção atualizados contínuamente (?)</h6>

                                        </div>
                                    </div>
                                    <div class="col-md-6">                        
                                        <img src="http://placehold.it/370x260" alt="about img" /> 
                                    </div>
                                </div>
                            </div>
                            <div class="about-box-2">
                                <div class="row">
                                    <div class="col-md-6">
                                        <img src="http://placehold.it/370x260" alt="about img" />
                                    </div>
                                    <div class="col-md-6">
                                        <div class="about-box-2-name">
                                            <img src="<?php echo bloginfo('stylesheet_directory'); ?>/images/about-i3.png" alt="icon" class="icon-a d-bg-c" />
                                            <h1>Visualização 3D<br/>
                                                de projetos</h1>
                                                <h6>Veja os seus projetos em 3D através do próprio navegador.</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>                   
                    </div>                         
                </div>
            </div>
            <!-- === END ABOUT === -->


            <div class="offer-section" id="offer-section">
                <div class="container">
                    <h1>Recursos</h1>        
                    <div class="row">
                        <div class="col-md-4">
                            <div class="offer-box">
                                <img src="<?php echo bloginfo('stylesheet_directory'); ?>/images/offer-i1.png" alt="icon">
                                <span></span>                   
                                <h3 class=""><small>TECNOLOGIA E ACESSIBILIDADE</small><br>EXPORTE SUA OBRA EM 3D PARA WEB</h3>
                                <p>
                                    <ul>
                                        <li>Importe o modelo 3D e dados de forma simplificada</li>
                                        <li>Permita uma compreenção clara de todo o projeto</li>
                                        <li>Visualize e discuta detalhes construtivos utilizando apenas seu navegador preferido</li>
                                        <li>Potencialize seu setor comercial com o uso de apresentações 3D nas nuvens</li>
                                        <li>Permita demonstrar ao cliente recursos avançados de engenharia e controles</li>
                                        <li>Tenha controle total, gire, rotacione e dê zoom no navegador</li>
                                    </ul>
                                </p>
                            </div>

                            <div class="offer-box">
                                <img src="<?php echo bloginfo('stylesheet_directory'); ?>/images/offer-i3.png" alt="icon">
                                <span></span>
                                <h3><small>QUALIDADE</small><br>PADRONIZAÇÃO DE PROCESSOS E FLUXO DE TRABALHO</h3>
                                <p>
                                    <ul>
                                        <li>Trabalhe de forma ágil e padronizada, sem redigitações ou necessidade de conversões de dados</li>
                                        <li>Importe facilmente dados dos principais softwares de CAD do mercado</li>
                                        <li>Planeje e acompanhe a produção  em sistema, eliminando dados espalhados na rede </li>
                                        <li>Utilize ferramentas específicas para Planejamento, PCP, Apontamentos e Remaneios via sistema</li>                            
                                    </ul>
                                </p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="offer-box">
                                <img src="<?php echo bloginfo('stylesheet_directory'); ?>/images/offer-i2.png" alt="icon">
                                <span></span>
                                <h3><small>INFORMAÇÃO PRECISA</small><br>ENTIDADES 3D CLICÁVEIS ASSOCIADAS Á BANCO DE DADOS SQL</h3>
                                <p>
                                    <strong>Obtenha as propriedades de conjuntos e peças do 3D á partir de um clique:</strong>

                                    <ul>
                                        <li>Nome (marca) do conjunto selecionado</li>
                                        <li>Quantidade total na etapa</li>
                                        <li>Lote de produção ao qual pertence</li>
                                        <li>Status atual do conjunto na linha de produção (estágio/etapa de produção)</li>
                                        <li>Nome (marca) da peça selecionada</li>
                                        <li>Peso do conjunto</li>
                                        <li>Superfície de pintura</li>
                                        <li>Tipo de tratamento (pintura) do conjunto</li>
                                        <li>Medidas (comprimento x largura x altura)</li>
                                        <li>Projeto de fabricação associado ao conjunto selecionado</li>
                                        <li>Romaneio e nf em que o conjunto está contido</li>
                                        <li>Transportadora do romaneio</li>
                                        <li>Nome e telefones do motorista da carga</li>
                                        <li>Previsão de chegada na obra</li>                                        
                                    </ul>
                                </p>

                                <br>

                                <p>
                                    <strong>Utilize filtros de seleção pré-concebidos para as informações mais importantes:</strong>
                                    <ul>
                                        <li>Marcas dos conjuntos e das peças</li>
                                        <li>Especificação do tipo de tratamento (pintura)</li>
                                        <li>Tipos de perfis</li>
                                        <li>Pesos dos conjuntos e das peças</li>
                                        <li>Espessuras de chapas</li>
                                        <li>Tipos de aços á serem utilizados</li>
                                        <li>Quantidade de peças por conjunto soldado</li>
                                        <li>Distribuição dos conjuntos nos lotes de fabricação (gestão produção)</li>
                                        <li>Distribuição e controle dos conjuntos nas diferentes etapas de fabricação</li>
                                        <li>Seleção de conjuntos por romaneios de carga </li>
                                    </ul>
                                </p>
                                <p>
                                    <hr>
                                    <ul>
                                        <li>Exporte relatórios em formato Excel para as entidades selecionadas</li>
                                        <li>Analize múltiplos gráficos de status e propriedades dos conjuntos</li>
                                        <li>Acabe com múltiplas planilhas e informações desencontradas</li>
                                        <li>Trabalhe com informação centralizada á um clique do mouse</li>
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="offer-box">
                                    <img src="<?php echo bloginfo('stylesheet_directory'); ?>/images/offer-i3.png" alt="icon">
                                    <span></span>
                                    <h3><small>AGILIDADE</small><br>ACOMPANHAMENTO DOS ESTÁGIOS DE PRODUÇÃO EM TEMPO REAL</h3>
                                    <p>
                                        <ul>
                                            <li>Importe automaticamente dados da engenharia</li>
                                            <li>Separe os conjuntos em lotes de fabricação </li>
                                            <li>Planeje por quais estágios de fabricação os lotes devem passar</li>
                                            <li>Atribua datas previstas para os lotes e diferentes estágios</li>
                                            <li>Manipule e monitore as informações acompanhando as alterações no modelo 3d em tempo real</li>
                                            <li>Visualize o andamento nos estágios de produção com cores no modelo 3d</li>
                                            <li>Aponte dados de produção com o Apontador 2.0 - a ferramenta mais inovadora do mercado</li>
                                        </ul>
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="offer-box">
                                    <img src="<?php echo bloginfo('stylesheet_directory'); ?>/images/offer-i3.png" alt="icon">
                                    <span></span>
                                    <h3><small>ECONOMIA</small><br>AUMENTO DA PRODUTIVIDADE COM GESTÃO VISUAL E COMUNICAÇÃO FACILITADA</h3>
                                    <p>
                                        <ul>
                                            <li>Tenha a informação desejada, em 3D, no navegador de sua preferência</li>
                                            <li>Acabe com múltiplas planilhas e informações desatualizadas</li>
                                            <li>Elimine necessidade de ligações telefônicas e e-mails solicitando informações</li>
                                            <li>Foque seu pessoal em atividades mais técnicas e menos burocráticas</li>
                                            <li>Zere possibilidade de dúvidas analizando conjuntos e peças no modelo 3D</li>
                                            <li>Controle usuários e acessos, determinando permissões para acessar obras e etapas</li>
                                            <li>Receba notificações via sistema de acontecimentos pré-configurados</li>
                                            <li>Crie estações de trabalho e visualização necessitando somente de navegador</li>
                                            <li>Trabalhe com informação real, tomando decisões mais rápidas</li>
                                            <li>Utilize recursos existentes na engenharia, sem adaptações ou dores de cabeça</li>
                                            <li>Treine seu pessoal á utilizar um software simples e ágil</li>
                                        </ul>
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-4">

                            </div>
                        </div>
                    </div>
                </div>

<!-- <div id="recursos-carousel" class="carousel slide section" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#recursos-carousel" data-slide-to="0" class=""></li>
        <li data-target="#recursos-carousel" data-slide-to="1" class=""></li>
        <li data-target="#recursos-carousel" data-slide-to="2" class="active"></li>
    </ol>
    <div class="carousel-inner">
        <div class="item">            
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <h4 class="">TECNOLOGIA E ACESSIBILIDADE - EXPORTE SUA OBRA EM 3D PARA WEB</h4>
                    </div>
                    <div class="col-md-4">                                                                
                        <h3><span class="d-bg-c"></span>
                            <ul>
                                <li>Importe o modelo 3D e dados de forma simplificada</li>
                                <li>Permita uma compreenção clara de todo o projeto</li>
                                <li>Visualize e discuta detalhes construtivos utilizando apenas seu navegador preferido</li>
                                <li>Potencialize seu setor comercial com o uso de apresentações 3D nas nuvens</li>
                                <li>Permita demonstrar ao cliente recursos avançados de engenharia e controles</li>
                                <li>Tenha controle total, gire, rotacione e dê zoom no navegador</li>
                            </ul>
                        </h3>                                
                    </div>
                </div>
            </div>
        </div>
        <div class="item">            
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <h4 class="">INFORMAÇÃO PRECISA - ENTIDADES 3D CLICÁVEIS ASSOCIADAS Á BANCO DE DADOS SQL</h4>
                    </div>
                    <div class="col-md-4">
                        <h3>Obtenha as propriedades de conjuntos e peças do 3D á partir de um clique</h3>
                        <h3><span class="d-bg-c"></span>                        
                            <ul>
                                <li>nome (marca) do conjunto selecionado</li>
                                <li>quantidade total na etapa</li>
                                <li>lote de produção ao qual pertence</li>
                                <li>status atual do conjunto na linha de produção (estágio/etapa de produção)</li>
                                <li>nome (marca) da peça selecionada</li>
                                <li>peso do conjunto</li>
                                <li>superfície de pintura</li>
                                <li>tipo de tratamento (pintura) do conjunto</li>
                                <li>medidas (comprimento x largura x altura)</li>
                                <li>projeto de fabricação associado ao conjunto selecionado</li>
                                <li>romaneio e nf em que o conjunto está contido</li>
                                <li>transportadora do romaneio</li>
                                <li>nome e telefones do motorista da carga</li>
                                <li>previsão de chegada na obra</li>                                        
                            </ul>
                        </h3>
                        <h3>Utilize filtros de seleção pré-concebidos para as informações mais importantes:</h3>
                        <h3><span class="d-bg-c"></span>
                            <ul>
                                <li>Marcas dos conjuntos e das peças</li>
                                <li>Especificação do tipo de tratamento (pintura)</li>
                                <li>Tipos de perfis</li>
                                <li>Pesos dos conjuntos e das peças</li>
                                <li>Espessuras de chapas</li>
                                <li>Tipos de aços á serem utilizados</li>
                                <li>Quantidade de peças por conjunto soldado</li>
                                <li>Distribuição dos conjuntos nos lotes de fabricação (gestão produção)</li>
                                <li>Distribuição e controle dos conjuntos nas diferentes etapas de fabricação</li>
                                <li>Seleção de conjuntos por romaneios de carga </li>
                            </ul>
                        </h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="item active">
            
                <div class="carousel-caption">
                    <h1>One more for good measure.</h1>
                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
                </div>
            </div>
        </div>
    </div>
    <a class="left carousel-control" href="#recursos-carousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
    <a class="right carousel-control" href="#recursos-carousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
</div> -->


<!-- <section>
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-center">
                <p>
                    <button type="button" class="btn btn-primary btn-lg">Large button</button>
                    <button type="button" class="btn btn-default btn-lg">Large button</button>
                </p>
                <p>
                    <button type="button" class="btn btn-primary">Default button</button>
                    <button type="button" class="btn btn-default">Default button</button>
                </p>
                <p>
                    <button type="button" class="btn btn-primary btn-sm">Small button</button>
                    <button type="button" class="btn btn-default btn-sm">Small button</button>
                </p>
                <p>
                    <button type="button" class="btn btn-primary btn-xs">Extra small button</button>
                    <button type="button" class="btn btn-default btn-xs">Extra small button</button>
                </p>
            </div>
            <div class="col-md-6 text-center">
                <button type="button" class="btn btn-default">Default</button>
                <button type="button" class="btn btn-primary">Primary</button>
                <button type="button" class="btn btn-success">Success</button>
                <button type="button" class="btn btn-info">Info</button>
                <button type="button" class="btn btn-warning">Warning</button>
                <button type="button" class="btn btn-danger">Danger</button>
                <button type="button" class="btn btn-link">Link</button>
            </div>
        </div>
    </div>
</section> -->

<!-- === START STATISTICS === -->
<div class="statistics-section statistics-section-2">
    <div class="bg-cover">
        <div class="container text-center">
            <h1>Ferramentas para cada etapa do projeto e produção.</h1>
            <h2>Veja as vantagens:</h2>
        </div>
    </div>
</div>
<!-- === END STATISTICS === -->


<!-- === START PRODUCT === -->
<div class="product-section" id="engenharia-section">
    <section class="section-title">
        <div class="bg-color">
            <div class="container">
                <h1 class="d-text-c">ENGENHARIA E PLANEJAMENTO</h1>
                <!-- <h3>Recursos para os estágios de <strong>ENGENHARIA</strong> e <strong>PLANEJAMENTO</strong></h3> -->
                <h5>Desenvolvido por projetistas brasileiros com recursos inovadores, o Steel4Web traz consigo ferramentas de planejamento de obras e possui importadores para os principais softwares de detalhamento do mercado.</h5>
            </div>            
        </div>
    </section>
    <div class="container">
        <div class="col-md-6">
            <div class="features panel-group" id="engenharia-section-features">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#engenharia-section-features" href="#engenharia-section-collapse-1" class="collapsed">Módulo Planejamento</a>
                        </h4>
                    </div>
                    <div id="engenharia-section-collapse-1" class="panel-collapse collapse" style="height: 0px;">
                        <div class="panel-body">
                            <p>De uso simples e fácil, este módulo permite determinar datas previstas de início e fim para os macro-estágios da obra (projeto, fabricação, expedição e montagem), incluindo os pesos previstos para cada obra / etapa.</p>
                            <p>Permite consultar o cronograma de determinada obra e/ou etapa individualmente, ou de todas em carteira, visualizando os dados em gráfico de Gantt.</p>
                            <p>Obtem-se então a  distribuição da produção ao longo do tempo, permitindo análises e correções de rumo.</p>   
                            <p>A entrada de informações, reprogramações e replanejamentos são feitas por usuário específico, de forma fácil, aonde o sistema salva as alterações em banco de dados, permitindo analizar o histórico das alterações realizadas.</p>
                            <p>E o mais fácil:  você pode manipular os dados do Gantt diretamente nas barras do gráfico através do recurso "drag and drop", arrastando-as para o período desejado e corrigindo datas de início e fim. Após manipular e visualizar os dados como desejado, basta salvar e o cenário está definido.</p>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#engenharia-section-features" href="#engenharia-section-collapse-2">Módulo Importador</a>
                        </h4>
                    </div>
                    <div id="engenharia-section-collapse-2" class="panel-collapse collapse in" style="height: auto;">
                        <div class="panel-body">
                            <blockquote>"Dividir para consquistar..."</blockquote>
                            <p>O Steel4Web permite que você divida sua obra, organizando-a por prédios/eixos/etapas.</p>
                            <p>Assim, o usuário da engenharia pode importar os dados gerados pelos principais software de detalhamento do mercado de forma simples, selecionando a obra e etapa desejada.</p>
                            <p>Informações úteis como usuário logado, data de importação, pesos e matéria-prima necessária já são lidas dos arquivos de importação (.txt / .dbf / .ifc).</p>        
                            <p>O sistema permite múltiplas importações, facilitando a liberação sequencial (chumbadores > estrutura principal > estrutura secundária).</p>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#engenharia-section-features" href="#engenharia-section-collapse-3" class="collapsed">Módulo 3D Viewer</a>
                        </h4>
                    </div>
                    <div id="engenharia-section-collapse-3" class="panel-collapse collapse">
                        <div class="panel-body">
                            <p>Com a importação realizada, imediatamente a estrutura já está disponível no navegador web, em 3D para todos os usuários com permissão.</p>
                            <p>Desta forma, usuários da engenharia podem acompanhar o andamento da produção da etapa/obra em tempo real.</p>
                            <p>A informação em tempo real pode ser crucial em tomadas de decisão como solicitações de revisões, por exemplo.</p>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        <div class="col-md-6">

            <iframe width="100%" height="300" src="https://www.youtube.com/embed/ghA_gI0oe7M?list=PL1yyP-uh7GHDamwnD41RluCEJ0aNAk_Wl&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>

            <br>
            <br>

            <div class="site-title-2">
                <h2>Muitos recursos para você</h2>
                <h3><span class="d-bg-c"></span>Para cada lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum quod ratione cumque, molestiae minus.</h3>
            </div>

            <div class="text-center">                            
                <a href="#" class="btn btn-primary btn-lg btn-block">Veja em ação</a>
                <a href="#" class="btn btn-primary btn-lg btn-block">Solicite demonstração</a>                            
                ou <a href="#" class="btn btn-link btn-lg">Solicite uma ligação</a>                                            
            </div>

        </div>
    </div>
</div>
<!-- === END PRODUCT === -->


<!-- === START PRODUCT === -->
<div class="product-section" id="producao-section">

    <section class="section-title">
        <div class="bg-color">
            <div class="container">
                <h1 class="d-text-c">PCP - PLANEJAMENTO E CONTROLE DE PRODUÇÃO</h1>
                <h5>Conjuntos de ferramentas específicas para gestão da fabricação metálica</h5>
            </div>
        </div>
    </section>    


    <div class="container">
        <div class="col-md-6">
            <div class="features panel-group" id="producao-section-features">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#producao-section-features" href="#producao-section-collapse-1" class="collapsed">Módulo Gestor de Lotes</a>
                        </h4>
                    </div>
                    <div id="producao-section-collapse-1" class="panel-collapse collapse" style="height: 0px;">
                        <div class="panel-body">
                            <p>O módulo Gestor de Lotes permite que o usuário do PCP abra e tenha á sua disposição todos os dados  da obra/etapa importados pela engenharia.</p>
                            <p>O usuário então separa via sistema (e sem redigitações) os conjuntos e peças á serem produzidos por tipologias de produto, gerando lotes de produção.</p>
                            <p>O lote criado carrega consigo a informação de quais estágios de produção (preparação, gabarito, solda, jato, pintura, expedição) deverá passar e, as datas de termíno  previstas por estágio.</p>
                            <p>Estas informações são gravadas em banco e, ficam disponíveis no modelo 3D.</p>
                            <p>Recursos como gráficos e relatórios complementam neste módulo.</p>
                            <p>Tão logo o lote tenha sido criado, os conjuntos do mesmo já estarão associados á ele, no modelo 3D.</p>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#producao-section-features" href="#producao-section-collapse-2">Módulo Apontador de Produção</a>
                        </h4>
                    </div>
                    <div id="producao-section-collapse-2" class="panel-collapse collapse in" style="height: auto;">
                        <div class="panel-body">
                            <p>Após a criação dos lotes de produção, entra em cena o Apontador de Produção.</p>
                            <p>O apontamento é feito por conjuntos selecionados em lotes / obras / etapas de uma forma muito simples: com o uso da tecnologia "drag and drop".</p>
                            <p>Basta selecionar a data do apontamento e arrastar os conjuntos de um estágio para o próximo estágio, informando a quantidade produzida, caso maior que um.</p>
                            <p>Como trabalha integrado com o Gestor de Lotes, o sistema impede que determinada marca seja movido para um estágio que não foi previsto no Gestor de Lotes.</p>
                            <p>Exemplo:  se um conjunto pertencer á um lote que não passa pela pintura, por ser galvanizado, o sistema não permitirá ao usuário mover para o estágio Pintura.</p>
                            <p>As informações são registradas  em base de dados SQL.</p>
                            <p>Esta tecnologia permite integração com sistemas de apontamento existentes, como leitoras de código.</p>
                            <p>As informações do Apontador de Produção atualizam os conjuntos no modelo 3D, atualizando a cor correspondente ao estágio atual em tempo real.</p>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#producao-section-features" href="#producao-section-collapse-3" class="collapsed">Módulo Gerenciador de Produção</a>
                        </h4>
                    </div>
                    <div id="producao-section-collapse-3" class="panel-collapse collapse">
                        <div class="panel-body">
                            <p>O Gerenciador de Produção, além de trazer informação para a gestão de lotes em andamento e futuros, fornece consultas de lotes tais como: <br>
                                <ul>
                                    <li>Estágio atual de produção</li>
                                    <li>Tempo (dias) disponível para conclusão do mesmo</li>
                                    <li>Média diária (t) de produção por setor (estágio) prevista para atender lotes criados ou meta de produção mensal</li>
                                    <li>média diária (t) de produção por setor (estágio) realizada</li>
                                    <li>Estágios em atraso para conclusão</li>
                                    <li>Consultas por período, determinando os lotes á serem concluídos, com pesos por setor (estágio) de produção<br>
                                        <small>Exemplo: para a semana posterior, consultar a carga de trabalho para cada setor (preparação, gabarito, solda e pintura)</small></li>
                                        <li>Recursos como gráficos e relatórios complementam neste módulo.</li>
                                    </ul>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#producao-section-features" href="#producao-section-collapse-4" class="collapsed">Módulo 3D Viewer</a>
                            </h4>
                        </div>
                        <div id="producao-section-collapse-4" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>Fundamental e inovador na gestão da produção, o Módulo 3D permite visualizar os conjuntos trocando cores correspondentes á medida que avançam na produção, em tempo real.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <iframe width="100%" height="300" src="https://www.youtube.com/embed/ghA_gI0oe7M?list=PL1yyP-uh7GHDamwnD41RluCEJ0aNAk_Wl&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>

                <br>
                <br>

                <div class="site-title-2">
                    <h2>Muitos recursos para você</h2>
                    <h3><span class="d-bg-c"></span>Para cada lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum quod ratione cumque, molestiae minus.</h3>
                </div>
                
                <div class="text-center">                            
                    <a href="#" class="btn btn-primary btn-lg btn-block">Veja em ação</a>
                    <a href="#" class="btn btn-primary btn-lg btn-block">Solicite demonstração</a>                            
                    ou <a href="#" class="btn btn-link btn-lg">Solicite uma ligação</a>                                            
                </div>

            </div>
        </div>
    </div>
    <!-- === END PRODUCT === -->


    <!-- === START PRODUCT === -->
    <div class="product-section" id="logistica-section">
        <section class="section-title">
            <div class="bg-color">
                <div class="container">
                    <h1 class="d-text-c">LOGÍSTICA - EXPEDIÇÃO</h1>                
                    <h5>Informação do que foi carregado e de quando chegará de forma integrada</h5>
                </div>            
            </div>
        </section>
        <div class="container">
            <div class="col-md-6">

                <div class="site-title-2">
                    <!-- <h1 class="d-text-c">LOGÍSTICA</h1> -->
                    <!-- <h3>Recursos para os estágios de <strong>LOGÍSTICA</strong></h3> -->
                    <!-- <h3><span class="d-bg-c"></span>Para cada lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum quod ratione cumque, molestiae minus.</h3> -->
                </div>

                <br/>
                <div class="features panel-group" id="logistica-section-features">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#logistica-section-features" href="#logistica-section-collapse-1" class="collapsed">Módulo Romaneios</a>
                            </h4>
                        </div>
                        <div id="logistica-section-collapse-1" class="panel-collapse collapse" style="height: 0px;">
                            <div class="panel-body">
                                <p>O usuário da expedição possui módulo específico para criação e controle de romaneios de carga;<br>
                                    Uma gama de informações é disponibilizada para a criação do romaneio de cargas: <br>
                                    <ul>
                                        <li>Transportadora e contatos da mesma</li>
                                        <li>Nome motorista, telefones de contato</li>
                                        <li>Tipo de transporte e comprimento do mesmo</li>
                                        <li>Data de carga e previsão de chegada</li>
                                        <li>Código romaneio e NFs </li>
                                        <li>Peso total</li>
                                        <li>Marcas dos conjuntos e respectivas quantidades</li>
                                        <li>Observações gerais</li>
                                    </ul>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#logistica-section-features" href="#logistica-section-collapse-2">Módulo 3D Viewer</a>
                            </h4>
                        </div>
                        <div id="logistica-section-collapse-2" class="panel-collapse collapse in" style="height: auto;">
                            <div class="panel-body">
                                <p>Trabalhando de forma integrada, todas informações dos romaneios ficam á disposição no 3D Viewer.</p>
                                <p>Assim que criado, pode-se selecionar obra/etapa e ver todos romaneios criados, previsões de chegada e dados do motorista e transporte</p>
                                <p>No modelo 3D, ao se selecionar o romaneio, os conjuntos pertencentes ao mesmo são selecionados, permitindo relatórios em formato Excel e gráficos.</p>
                            </div>
                        </div>
                    </div>                    
                </div>
            </div>
            <div class="col-md-6">
                <h1 class="d-text-c">&nbsp;</h1>
                <h2>&nbsp;</h2>
                <iframe width="100%" height="300" src="https://www.youtube.com/embed/ghA_gI0oe7M?list=PL1yyP-uh7GHDamwnD41RluCEJ0aNAk_Wl&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>

                <br>
                <br>

                <div class="site-title-2">
                    <h2>Muitos recursos para você</h2>
                    <h3><span class="d-bg-c"></span>Para cada lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum quod ratione cumque, molestiae minus.</h3>
                </div>                
                <div class="text-center">                            
                    <a href="#" class="btn btn-primary btn-lg btn-block">Veja em ação</a>
                    <a href="#" class="btn btn-primary btn-lg btn-block">Solicite demonstração</a>                            
                    ou <a href="#" class="btn btn-link btn-lg">Solicite uma ligação</a>                                            
                </div>

            </div>
        </div>
    </div>
    <!-- === END PRODUCT === -->

    <!-- === START PRODUCT === -->
    <div class="product-section" id="montagem-section">
        <section class="section-title">
            <div class="bg-color">
                <div class="container">
                    <h1 class="d-text-c">MONTAGEM</h1>                
                    <h5>Informação para os desafios na obra</h5>
                </div>            
            </div>
        </section>
        <div class="container">
            <div class="col-md-6">

            <!-- <div class="site-title-2">
                <h1 class="d-text-c">MONTAGEM</h1>
                <h3>Recursos para os estágios de <strong>EXPEDIÇÃO</strong> e <strong>MONTAGEM</strong></h3>
            </div> -->

            <!-- <h3>One Day With Us</h3> -->
            <br/>
            <div class="features panel-group" id="montagem-section-features">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#montagem-section-features" href="#montagem-section-collapse-1" class="collapsed">Módulo 3D Viewer Montagem</a>
                        </h4>
                    </div>
                    <div id="montagem-section-collapse-1" class="panel-collapse collapse" style="height: 0px;">
                        <div class="panel-body">
                            <p>Os usuários da montagem contam com ferramentas adicionais no Módulo 3D Viewer.</p>
                            <p>Além de ter acesso á propriedades dos conjuntos 3D no navegador á partir de um clique: 
                                <ul>
                                    <li>Marcas dos conjuntos</li>   
                                    <li>Dimensões do conjunto</li>  
                                    <li>Pesos do conjunto</li>  
                                    <li>Romaneio associado</li> 
                                    <li>Data prevista de chegada na obra</li>   
                                    <li>Dados de contato do motorista e forma de transporte</li>    
                                </ul>
                            </p>

                            <p>Outros recursos incorporados:
                                <ul>
                                    <li>Seleção múltipla de conjuntos informando o peso (para planejamento de rigging)</li>
                                    <li>Controle de usuários, determinando qual usuário pode ter acesso ás informações 3D da obra/etapa específica</li>
                                    <li>Criação de medições, aonde o usuário da montagem aponta a produção diária diretamente no 3D Viewer.</li>
                                </ul>
                            </p>
                            <p>As informações apontadas dos conjuntos montados atualizam a base de dados SQL e, trocando a cor dos conjuntos, informando que os mesmos estão montados.
                                Este recurso é muito útil para acompanhar a produção da montagem na obra e, programar medições junto ao cliente final.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <h1 class="d-text-c">&nbsp;</h1>
                <h2>&nbsp;</h2>
                <iframe width="100%" height="300" src="https://www.youtube.com/embed/ghA_gI0oe7M?list=PL1yyP-uh7GHDamwnD41RluCEJ0aNAk_Wl&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>

                <br>
                <br>

                <div class="site-title-2">
                    <h2>Muitos recursos para você</h2>
                    <h3><span class="d-bg-c"></span>Para cada lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum quod ratione cumque, molestiae minus.</h3>                
                    <div class="text-center">                            
                        <a href="#" class="btn btn-primary btn-lg btn-block">Veja em ação</a>
                        <a href="#" class="btn btn-primary btn-lg btn-block">Solicite demonstração</a>                            
                        ou <a href="#" class="btn btn-link btn-lg">Solicite uma ligação</a>                                            
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- === END PRODUCT === -->


    <!-- === START WHYUS === -->
<!--  <div class="whyus-section" id="whyus-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
            <h3>Why Choose Us?</h3>
            <p>Sed mazim altera scriptorem te, vel habeo atomorum splendide at. Usu stet impetus ad. Ei errem adversarium vel, populo qualisque no vix.</p>
            <br/>
            <ul class="model-1">
                <li><span class="d-border-c"><i class="d-border-c"></i></span>Vis graeci elaboraret assueverit te.</li>
                <li><span class="d-border-c"><i class="d-border-c"></i></span>Eu euismod urbanitas quo, ut mel cibo dissentias persequeris.</li>
                <li><span class="d-border-c"><i class="d-border-c"></i></span>Cibo noluisse reformidans at sit.</li>
                <li><span class="d-border-c"><i class="d-border-c"></i></span>At est corpora commune appellantur.</li>
                <li><span class="d-border-c"><i class="d-border-c"></i></span>Ut tantas nonumy gubergren vis, erant dolorem est an.</li>
                <li><span class="d-border-c"><i class="d-border-c"></i></span>Eirmod accumsan cum te, mel eu essent putant.</li>
                <li><span class="d-border-c"><i class="d-border-c"></i></span>An sea iriure regione saperet, at eum liber paulo persequeris.</li>
                <li><span class="d-border-c"><i class="d-border-c"></i></span>Et nec aliquam fuisset atomorum.</li>
            </ul>
            </div>
            <div class="col-md-6">
                <div class="whyus-featured"><img src="<?php echo bloginfo('stylesheet_directory'); ?>/images/devices.png" alt="icon" /></div>
            </div>
        </div>
    </div>
</div> -->
<!-- === END WHYUS === -->

<!-- === START CLIENTS === -->
<div class="clients-section d-bg-c" id="clients-section">
    <div class="container">
        <!-- <h1 class="text-center">Utilizado por "grandes" empresas</h1> -->
        <h1 class="text-center">Conheça alguns clientes:</h1>
        <br>
        <br>
        <div class="row">            
            <div class="col-md-3">
                <a href="#"><img src="<?php echo bloginfo('stylesheet_directory'); ?>/images/clients/portoprata.png" alt="clientes" class="img-responsive"/></a>
            </div>
            <div class="col-md-3">
                <a href="#"><img src="<?php echo bloginfo('stylesheet_directory'); ?>/images/clients/metalfoort.png" alt="clientes" class="img-responsive"/></a>
            </div>
            <div class="col-md-3">
                <a href="#"><img src="<?php echo bloginfo('stylesheet_directory'); ?>/images/clients/demuth.png" alt="clientes" class="img-responsive"/></a>
            </div>
            <div class="col-md-3">
                <a href="#"><img src="<?php echo bloginfo('stylesheet_directory'); ?>/images/clients/dallemole.png" alt="clientes" class="img-responsive"/></a>
            </div>
            <!-- <div class="col-md-3">
                <a href="#"><img src="<?php echo bloginfo('stylesheet_directory'); ?>/images/clients/facebook.png" alt="clientes" class="img-responsive"/></a>
            </div>    -->        
        </div>
    </div>
</div>
<!-- === END CLIENTS === -->


<!-- === START BLOG SECTION === -->
<div class="blog-section" id="blog-section">
    <div class="container">
        <div class="site-title">
            <div class="row">
                <div class="col-md-7">
                    <h1 class="d-text-c">BLOG</h1>
                    <h2>Mantenha-se informado</h2>
                </div>
                <div class="col-md-5">
                    <h3 class="d-border-c">Acomapanhe nosso blog e obtenha informações úteis que podem lhe auxiliar com o crescimento da sua empresa.</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="blog-entry">
                    <div class="entry-image">
                        <div class="entry-hover"><a href="<?php echo bloginfo('stylesheet_directory'); ?>/post.html">
                            <img src="<?php echo bloginfo('stylesheet_directory'); ?>/images/post-hover.png" alt="hover image" /></a></div>
                            <img src="http://placehold.it/360x270" alt="image blog" class="img-responsive" />
                        </div>
                        <div class="entry-header">
                            <h3><a href="<?php echo bloginfo('stylesheet_directory'); ?>/post.html" class="d-text-c-h">5 Steps of web development</a></h3>
                            <h5>Octomber 15, 2014</h5>
                        </div>
                        <div class="entry-content">
                            <p>Quot lobortis reprehendunt te ius, id usu brute solet quodsi. Modo iusto ne sed, at tollit molestiae eum. Eu mel nisl liber mucius. In cum tale dolorem mandamus.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="blog-entry">
                        <div class="entry-image">
                            <div class="entry-hover">
                                <a href="<?php echo bloginfo('stylesheet_directory'); ?>/post.html">
                                    <img src="<?php echo bloginfo('stylesheet_directory'); ?>/images/post-hover.png" alt="hover image" />
                                </a>
                            </div>
                            <img src="http://placehold.it/360x270" alt="image blog" class="img-responsive" />
                        </div>
                        <div class="entry-header">
                            <h3><a href="<?php echo bloginfo('stylesheet_directory'); ?>/post.html" class="d-text-c-h">5 Steps of web development</a></h3>
                            <h5>Octomber 15, 2014</h5>
                        </div>
                        <div class="entry-content">
                            <p>Quot lobortis reprehendunt te ius, id usu brute solet quodsi. Modo iusto ne sed, at tollit molestiae eum. Eu mel nisl liber mucius. In cum tale dolorem mandamus.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="blog-entry">
                        <div class="entry-image">
                            <div class="entry-hover">
                                <a href="<?php echo bloginfo('stylesheet_directory'); ?>/post.html">
                                    <img src="<?php echo bloginfo('stylesheet_directory'); ?>/images/post-hover.png" alt="hover image" />
                                </a>
                            </div>
                            <img src="http://placehold.it/360x270" alt="image blog" class="img-responsive" />
                        </div>
                        <div class="entry-header">
                            <h3><a href="<?php echo bloginfo('stylesheet_directory'); ?>/post.html" class="d-text-c-h">5 Steps of web development</a></h3>
                            <h5>Octomber 15, 2014</h5>
                        </div>
                        <div class="entry-content">
                            <p>Quot lobortis reprehendunt te ius, id usu brute solet quodsi. Modo iusto ne sed, at tollit molestiae eum. Eu mel nisl liber mucius. In cum tale dolorem mandamus.</p>
                        </div>
                    </div>
                </div>
                <br>

                <div class="text-center">
                    <a href="#" class="btn btn-primary btn-lg">Veja todas</a>
                    ou
                    <a href="#news-section" data-anchor="news-section" class="btn btn-primary btn-lg" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="news-section">Assine nossa Newsletter</a>
                </div>

            </div>
        </div>
    </div>
    <!-- === END BLOG SECTION === -->

    <section class="news-section collapse" id="news-section">
        <div class="bg-cover">        
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <h3></h3>
                    </div>
                    <div class="col-md-8">
                        <form id="newsletter-form">
                            <div class="input-group">
                                <input class="form-control" type="email" placeholder="Digite seu e-mail">
                                <div class="input-group-btn">
                                    <button class="btn btn-default" type="submit">Assinar Newsletter</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>    
        </div>
    </section>

    <!-- START CONTACT SECTION -->
    <div class="contact-section" id="contact-section">
        <div class="bg-cover">
            <div class="container">                        
                <h1>Entre em contato</h1>
                <p>Estamos aqui para lhe ouvir. Fale diretamente conosco através do formulário abaixo.</p>
                <form class="contact-form">
                    <div class="row">
                        <div class="col-md-4">
                            <input type="text" name="contact-name" class="d-border-c-f contact-form-line" placeholder="Seu Nome">
                        </div>
                        <div class="col-md-4">
                            <input type="text" name="contact-email" class="d-border-c-f contact-form-line" placeholder="Seu E-mail">
                        </div>
                        <div class="col-md-4">
                            <input type="text" name="contact-website" class="d-border-c-f contact-form-line" placeholder="Telefone">
                        </div>
                        <div class="col-md-12">
                            <textarea name="contact-message" class="d-border-c-f contact-form-area" placeholder="Mensagem"></textarea>
                            <p class="align-center"><button type="submit" class="form-send d-border-c d-bg-c">Enviar</button></p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- END CONTACT SECTION -->

</div>
<!-- === END CONTENT === -->


<!-- === START FOOTER === -->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="logo"><a href="#" class="top"><img src="<?php echo bloginfo('stylesheet_directory'); ?>/images/logo.png" alt="logo"/></a></div>
            </div>
            <div class="col-md-6">
                <ul class="socials">
                    <li><a href="#" class="d-text-c-h d-border-c-h"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#" class="d-text-c-h d-border-c-h"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#" class="d-text-c-h d-border-c-h"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="#" class="d-text-c-h d-border-c-h"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#" class="d-text-c-h d-border-c-h"><i class="fa fa-rss"></i></a></li>
                </ul>  
            </div>              
        </div>  
    </div>
    <div class="bottom-side">
        <div class="container">
            <p class="copywrite">© Copyright <?php echo date('Y') ?> by <a herf="#">System3D</a>. Todos os direitos reservados.</p>
        </div>
    </div>
</footer>
<!-- === END FOOTER === -->
</div>
<!-- =========================== START SCRIPTS ========================== -->
<script src="<?php echo bloginfo('stylesheet_directory'); ?>/js/modernizr.custom.63321.js" type="text/javascript"></script>
<script src="<?php echo bloginfo('stylesheet_directory'); ?>/js/jquery-1.11.1.min.js" type="text/javascript"></script>
<script src="<?php echo bloginfo('stylesheet_directory'); ?>/js/jquery-ui.min.js" type="text/javascript"></script>
<script src="<?php echo bloginfo('stylesheet_directory'); ?>/js/waypoints.js" type="text/javascript"></script>
<script src="<?php echo bloginfo('stylesheet_directory'); ?>/js/bootstrap.js" type="text/javascript"></script>
<script src="<?php echo bloginfo('stylesheet_directory'); ?>/js/placeholder.js" type="text/javascript"></script>
<script src="<?php echo bloginfo('stylesheet_directory'); ?>/js/imagesloaded.pkgd.min.js" type="text/javascript"></script>
<script src="<?php echo bloginfo('stylesheet_directory'); ?>/js/masonry.pkgd.js" type="text/javascript"></script>
<script src="<?php echo bloginfo('stylesheet_directory'); ?>/js/jquery.swipebox.min.js" type="text/javascript"></script>
<script src="<?php echo bloginfo('stylesheet_directory'); ?>/js/wow.js" type="text/javascript"></script>
<script src="<?php echo bloginfo('stylesheet_directory'); ?>/js/knob.js" type="text/javascript"></script>
<script src="<?php echo bloginfo('stylesheet_directory'); ?>/js/jquery.counterup.js" type="text/javascript"></script>
<script src="<?php echo bloginfo('stylesheet_directory'); ?>/js/jquery.vide.js" type="text/javascript"></script>
<script src="<?php echo bloginfo('stylesheet_directory'); ?>/js/options.js" type="text/javascript"></script>
<script src="<?php echo bloginfo('stylesheet_directory'); ?>/js/plugins.js" type="text/javascript"></script>
<script src="<?php echo bloginfo('stylesheet_directory'); ?>/js/jquery.fullpage.js" type="text/javascript"></script>
<script src="<?php echo bloginfo('stylesheet_directory'); ?>/color-box/color-js.js" type="text/javascript"></script>
<script src="<?php echo bloginfo('stylesheet_directory'); ?>/color-box/farbtastic/farbtastic.js" type="text/javascript"></script>

<script src="<?php echo bloginfo('stylesheet_directory'); ?>/js/scripts.js" type="text/javascript"></script>

<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
<![endif]-->
<!-- =========================== END SCRIPTS ========================== -->
</body>

</html>