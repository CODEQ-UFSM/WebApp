<!DOCTYPE html>

<html lang="en">



<head>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-NJLNHTG');</script>
<!-- End Google Tag Manager -->


  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">



    <meta property="og:locale" content="pt_BR">



    <meta property="og:url" content="">



    <meta property="og:title" content="Projeto">

    <meta property="og:site_name" content="Projeto">



    <meta property="og:description" content="Plataforma online de ensino de programação que busca desafiar estudantes através de modelagens e simulações de problemas matemáticos e aplicados à engenharia.">



    <meta property="og:image" content="img/circle.png">

    <meta property="og:image:type" content="image/png">

    <meta property="og:image:width" content="775">

    <meta property="og:image:height" content="776">



  <title>CodeQ</title>



  <!-- Bootstrap core CSS -->

  <link href="<?php echo $this->asset; ?>vendor/bootstrap/css/bootstrap.css" rel="stylesheet">



  <!-- Custom fonts for this template -->

  <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



  <!-- Custom styles for this template -->

  <link href="<?php echo $this->asset; ?>css/one-page-wonder.css" rel="stylesheet">

  <link rel="shortcut icon" href="<?php echo $this->asset ?>img/circle.png">

  

  <style>

    #img-background-secao{

      position: relative;

      overflow: hidden;

      background-image: url('<?php echo $data->getImagem(); ?>');

      background-repeat: no-repeat;

      background-position: center center;

      background-attachment: fixed;

      background-size: cover;

  }

    header.masthead .bg-circle {

        background: -webkit-gradient(linear, left bottom, left top, from(rgb(<?php echo $data->getCor(); ?>)), to(<?php $x = explode(',', $data->getCor()); echo "rgb(".($x[0]-100).",".($x[1]-100).",".($x[2]-100).")"; ?> )) !important;

        background: linear-gradient( 45deg, rgb(<?php echo $data->getCor(); ?>) 0%, <?php $x = explode(',', $data->getCor()); echo "rgb(".($x[0]-100).",".($x[1]-100).",".($x[2]-100).")"; ?> 100%) !important;

    }

    .masthead-heading{

        text-shadow: 5px 5px rgba(1,1,1, 0.3);

    }

    header.masthead {

        background: -webkit-gradient(linear, left bottom, left top, from(rgba(<?php echo $data->getCor(); ?>,0.1)), to(transparent));

        background: linear-gradient(0deg, rgba(<?php echo $data->getCor(); ?>,0.5) 0%, transparent 100%);

        -ms-filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);

    }

    .fancy_card{

        transition: 0.5s;

    }

    .fancy_card:hover {

        transform: translate3D(0,-1px,0) scale(1.08);

    }

    

    

  </style>

  
</head>



<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NJLNHTG"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

  <!-- Navigation -->

  <!--<nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">

    <div class="container" class="title">

      <a class="navbar-brand masthead-heading" href="#">CodeQ</a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">

        <span class="navbar-toggler-icon"></span>

      </button>

      <div class="collapse navbar-collapse" id="navbarResponsive">

        <ul class="navbar-nav ml-auto">

          <li class="nav-item">

            <a class="nav-link" href="index.html">Home</a>

          </li>

          <li class="nav-item">

            <a class="nav-link" href="#">Iniciante</a>

          </li>

          <li class="nav-item">

            <a class="nav-link" href="#">EQ</a>

          </li>

        </ul>

      </div>

    </div>

  </nav>-->

<div id="img-background-secao">

  <header class="masthead text-center text-white">

      <div class="masthead-content">

        <div class="container">

          <h1 class="masthead-heading mb-0 fancy"><?php echo $data->getNome(); ?></h1>

          <h5 class="" style="font-size: 25px;"><a href="<?php echo $this->base_url; ?>">Home</a> / <a href="<?php echo $this->base_url; ?>Explorar">Explore</a> / <a href=""><?php echo $data->getNome(); ?></a></h5>

        </div>

      </div>

      <div class="bg-rotate">

        <div class="bg-circle-1 bg-circle"></div>

        <div class="bg-circle-2 bg-circle"></div>

        <div class="bg-circle-3 bg-circle"></div>

        <div class="bg-circle-4 bg-circle"></div>

      </div>

  </header>

</div>

