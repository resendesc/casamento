<!DOCTYPE html>
<html lang="en">



<?php
$imagem = array(); // Criamos um array com o nome das imagens.
$imagem[1] = "header_1_.jpg";// Recheamos este array
$imagem[2] = "header_2_.jpg";
$imagem[3] = "header_3_.jpg";
$imagem[4] = "header_4_.jpg";
$imagem[5] = "header_5_.jpg";
$imagem[5] = "header_6_.jpg";
$contador = count($imagem); // Criamos uma variavel para contar (count();) os dados que est�o dentro do array.
$aleatorio = rand(1,$contador); // Esta vari�vel ir� gerar um n�mero aleat�rio (rand();), partindo do 1 at� o n�mero de dados que est�o dentro do array..
?>


<head>

<style type="text/css">

.imagem_home {
background-image:url(<?php echo $imagem[$aleatorio]; ?>);
opacity: 0.8;
filter: alpha(opacity=80); /* For IE8 and earlier */




}



</style> 


    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
	<script type="text/javascript" src="js/lightbox.min.js"></script>
	
	
	
	
    <title>Tratamento de Imagens</title>



    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">

    <!-- Custom Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" type="text/css">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="css/animate.min.css" type="text/css">
	
	<!-- Plugin Lightbox -->
	<link rel="stylesheet" href="bootstrap-lightbox.css" type="text/css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/creative.css" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top">
<link rel="stylesheet" type="text/css" href="css/lightbox.css">
<nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">Tratamento de Imagens</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="#about">Home</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#services">Servi&ccedil;os</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#portfolio">Portfolio</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contato</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
    <!-- /.container-fluid -->
</nav>

    <header class="imagem_home" >
        <div class="header-content">
				<div class="header-content-inner">
					<h1>Casamentos 5 <br />Foto Montagens    Tratamento de Imagens </h1>
					<hr>
					<p></p>
					<a href="#about" class="btn btn-primary btn-xl page-scroll page-scroll">Saiba mais +
					</a>
				</div>
			</div>
        
    </header>

    <section class="bg-primary" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Trabalhando com Imagens!</h2>
                    <hr class="light">
                    <p class="text-faded">Profissional com mais de 15 anos de esperi&ecirc;ncia na area de imagens, resposav&eacute;l pela digitaliza&ccedil;&atilde;o e tratamento de imagens em fotolitos em ag&ecirc;ncias de publicidade de Campinas - SP. Atualmente trabalha com digitaliza&ccedil;&atilde;o de fotos, tratamento de imagens, restaura&ccedil;&atilde;o de fotos antigas, coloriza&ccedil;&atilde;o de imagens. </p>
                    <a href="#services" class="btn btn-default btn-xl page-scroll">Nosso Servi&ccedil;os!</a>
                </div>
            </div>
        </div>
    </section>

    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Servi&ccedil;os</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-camera-retro  wow bounceIn text-primary"></i>
                        <h3>Foto Montagens</h3>
                        <p class="text-muted">Quanto maior a qualidade das imagens melhor o resultado.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-5x fa-adjust wow bounceIn text-primary" data-wow-delay=".1s"></i>
                        <h3>Restaura&ccedil;&atilde;o de Fotos</h3>
                        <p class="text-muted">Fazemos restaura&ccedil;&atilde;o de fotos rasgadas, amassadas, etc!</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-crop  wow bounceIn text-primary" data-wow-delay=".2s"></i>
                        <h3>Tratamento de Imagens</h3>
                        <p class="text-muted">Mesmo uma imagem ruim pode ser melhorada.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-heart wow bounceIn text-primary" data-wow-delay=".3s"></i>
                        <h3>Modelagem 3D</h3>
                        <p class="text-muted">Trabalhamos tamb&eacute;m com Modelos em 3D!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>





    <section class="no-padding" id="portfolio">
        <div class="container-fluid">
            <div class="row no-gutter">
                <div class="col-lg-4 col-sm-6" >
                    <a href="img/Restauracao/foto_1.jpg" data-lightbox="Foto Restaurada"  class="portfolio-box" >
                        <img src="img/Restauracao/Foto-01-restaurada.jpg"  class="img-responsive" alt="" >
                        <div class="portfolio-box-caption" >
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Restaura&ccedil;&atilde;o
                                </div>
                                <div class="project-name">
                                    Foto pessoal
                                </div>
                            </div>
                        </div>  
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="img/Restauracao/bebe.jpg" data-lightbox="Foto Restaurada" class="portfolio-box">
                        <img src="img/portfolio/7.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                     Restaura&ccedil;&atilde;o
                                </div>
                                <div class="project-name">
                                    Bebe
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="img/Restauracao/foto_3.jpg" data-lightbox="Foto Restaurada" class="portfolio-box" >
                        <img src="img/Restauracao/Foto-03-restaurada.jpg" class="img-responsive" alt="" >
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Restaura&ccedil;&atilde;o
                                </div>
                                <div class="project-name">
                                    Foto de Familia
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="img/Restauracao/Oba.jpg" data-lightbox="Foto Restaurada" class="portfolio-box">
                        <img src="img/portfolio/8.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                     Restaura&ccedil;&atilde;o
                                </div>
                                <div class="project-name">
                                    Varej&atilde;o Oba
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="img/Restauracao/Cartaz.jpg" data-lightbox="Foto Restaurada" class="portfolio-box">
                        <img src="img/Restauracao/cartaz_peq.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                     Restaura&ccedil;&atilde;o
                                </div>
                                <div class="project-name">
                                   Capa de Livro
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="img/Restauracao/Bisavo.jpg" data-lightbox="Foto Restaurada" class="portfolio-box">
                        <img src="img/portfolio/10.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                     Restaura&ccedil;&atilde;o
                                </div>
                                <div class="project-name">
                                    Bisavo
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <aside class="bg-dark">
        <div class="container text-center">
            <div class="call-to-action">
                <h2>Veja Tamb&eacute;m!</h2>
                <a href="http://www.tratamento-imagens.com.br/passeio_virtual/ima-predio/WebPlayer.html" class="btn btn-default btn-xl wow tada">Passeios Virtuais!</a>
            </div>
        </div>
    </aside>

    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Nossos Contatos!</h2>
                    <hr class="primary">
                    <p>Pronto para come&ccedil;ar seu pr&oacute;ximo projeto com a gente? Isso &eacute; &oacute;timo! D&aacute;-nos um al&ocirc; ou envia-n&oacute;s um e-mail e entraremos em contato com voc&ecirc; o mais breve poss&iacute;vel!</p>
                </div>
                <div class="col-lg-4 col-lg-offset-2 text-center">
                    <i class="fa fa-phone fa-3x wow bounceIn"></i>
                    <p>(19) 99112-5990</p>
                </div>
                <div class="col-lg-4 text-center">
                    <i class="fa fa-envelope-o fa-3x wow bounceIn" data-wow-delay=".1s"></i>
                    <p><a href="mailto:tratamento.de.imagens@gmail.com" title="Clique para podermos fazer contato">tratamento.de.imagens@gmail.com</a></p>
                </div>
          </div>
        </div>
    </section>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/jquery.fittext.js"></script>
    <script src="js/wow.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/creative.js"></script>

</body>

</html>

