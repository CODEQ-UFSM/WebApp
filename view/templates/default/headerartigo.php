<?php

    $cor = $data;

?>

<!DOCTYPE html>

<html lang="pt-br">



<head>



    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">



    <meta property="og:locale" content="pt_BR">



    <meta property="og:url" content="">



    <meta property="og:title" content="Projeto">

    <meta property="og:site_name" content="Projeto">



    <meta property="og:description" content="Plataforma online de ensino de programação que busca desafiar estudantes através de modelagens e simulações de problemas matemáticos e aplicados à engenharia.">



    <meta property="og:image" content="img/circulo.png">

    <meta property="og:image:type" content="image/png">

    <meta property="og:image:width" content="775">

    <meta property="og:image:height" content="776">



    <title>CodeQ</title>



    <!-- Bootstrap core CSS -->

    <link href="<?php echo $this->asset; ?>vendor/bootstrap/css/bootstrap.css" rel="stylesheet">

    <link href="<?php echo $this->asset; ?>css/notion.css" rel="stylesheet">

    <!-- Custom fonts for this template -->

    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



    <link href="<?php echo $this->asset; ?>css/one-page-wonder.css" rel="stylesheet">

    <link rel="shortcut icon" href="<?php echo $this->asset; ?>img/circle.png">

    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>

    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <script src="<?php echo $this->asset; ?>js/jquery.ui.touch-punch.min.js"></script>

    <!--<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/10.1.2/styles/lightfair.min.css">-->

    <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/10.1.2/highlight.min.js"></script>

    <script charset="UTF-8" src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/10.1.2/languages/python.min.js"></script>

    <script>hljs.initHighlightingOnLoad();</script>

    <style>

        

        .page-title{

            font-family: "Computer Modern" !important;

            background: linear-gradient(45deg, rgba(<?php echo $cor; ?>, 1) 0%, rgba(<?php $x = explode(',', $cor); echo ($x[0]-80).",".($x[1]-80).",".($x[2]-80); ?>, 0.8) 100%);

            text-align: center;

			-webkit-background-clip: text;

			-webkit-text-fill-color: transparent;

			

        }

		.highlight-purple{

			background: linear-gradient(45deg, rgba(<?php echo $cor; ?>, 1) 0%, rgba(<?php $x = explode(',', $cor); echo ($x[0]-80).",".($x[1]-80).",".($x[2]-80); ?>, 0.8) 100%);

			-webkit-background-clip: text;

			-webkit-text-fill-color: transparent;

		}

		.goog-te-banner-frame{

			background-color:white;

			text-decoration:none !important;

		}

		.goog-logo-link{

			pointer-events: none;

		  cursor: default;

		  text-decoration: none;

		  color: black;

		}

		 .blinking-red{

			animation:blinkingred 2s infinite;

		}

		@keyframes blinkingred{

			0%{

				-webkit-box-shadow: 0px 0px 10px 0px rgba(230,25,42,1);

				-moz-box-shadow: 0px 0px 10px 0px rgba(230,25,42,1);

				box-shadow: 0px 0px 10px 0px rgba(230,25,42,1);

			}

			50%{

				-webkit-box-shadow: 0px 0px 10px 0px rgba(230,25,42,0);

				-moz-box-shadow: 0px 0px 10px 0px rgba(230,25,42,0);

				box-shadow: 0px 0px 10px 0px rgba(230,25,42,0);

			}

			100%{

				-webkit-box-shadow: 0px 0px 10px 0px rgba(230,25,42,1);

				-moz-box-shadow: 0px 0px 10px 0px rgba(230,25,42,1);

				box-shadow: 0px 0px 10px 0px rgba(230,25,42,1);

			}

		}

		 .blinking-yellow{

			animation:blinkingyellow 2s infinite;

		}

		@keyframes blinkingyellow{

			0%{

				-webkit-box-shadow: 0px 0px 10px 0px rgba(244,208,63,1);

				-moz-box-shadow: 0px 0px 10px 0px rgba(244,208,63,1);

				box-shadow: 0px 0px 10px 0px rgba(244,208,63,1);

			}

			50%{

				-webkit-box-shadow: 0px 0px 10px 0px rgba(244,208,63,0);

				-moz-box-shadow: 0px 0px 10px 0px rgba(244,208,63,0);

				box-shadow: 0px 0px 10px 0px rgba(244,208,63,0);

			}

			100%{

				-webkit-box-shadow: 0px 0px 10px 0px rgba(244,208,63,1);

				-moz-box-shadow: 0px 0px 10px 0px rgba(244,208,63,1);

				box-shadow: 0px 0px 10px 0px rgba(244,208,63,1);

			}

		}

		

		.blurry{

			color: transparent;

			text-shadow: 0 0 15px #000;

			transition: 0.8s;

		}

		.blurry:hover{

			text-shadow: 0 0 0px #000;

		}

                

                .sidebar-wrapper{

                    float:right

                }

				

		#menu-toggle{

			outline: none !important;

			box-shadow: none;

		}

        

        .hljs-name {

            color:#01a3a3 !important;

        }

        

        .hljs-tag,.hljs-meta {

            color:#778899 !important;

        }

        

        .hljs,

        .hljs-subst {

            color: #444 !important

        }

        

        .hljs-comment {

            color: #888888 !important

        }

        

        .hljs-keyword,

        .hljs-attribute,

        .hljs-selector-tag,

        .hljs-meta-keyword,

        .hljs-doctag,

        .hljs-name {

            color: #3867d6 !important;

        }

        

        .hljs-params{

            color: #3867d6 !important;

            font-style: italic !important

        }

        

        .hljs-type,

        .hljs-number,

        .hljs-selector-id,

        .hljs-selector-class,

        .hljs-quote,

        .hljs-template-tag,

        .hljs-deletion {

            color: #20bf6b !important

        }

        

        .hljs-string{

            color: #b33939 !important

        }

        

        .hljs-title,

        .hljs-section {

            color: #a318c9 !important;

        }

        

        .hljs-regexp,

        .hljs-symbol,

        .hljs-variable,

        .hljs-template-variable,

        .hljs-link,

        .hljs-selector-attr,

        .hljs-selector-pseudo {

            color: #BC6060 !important

        }

        

        .hljs-literal {

            color: #62bcbc !important

        }

        

        .hljs-built_in,

        .hljs-bullet,

        .hljs-code,

        .hljs-addition {

            color: #25c6c6 !important

        }

        

        .hljs-meta-string { !important

            color: #4d99bf

        }

        

        .hljs-emphasis {

            font-style: italic !important

        }

        

        .hljs-strong {

            font-weight: bold !important

        }



		 

    </style>

	<script>

        $(function(){

            $("#sortable").sortable({

     		 connectWith: ".connectedSortable"

            }).disableSelection();

            $('#sortable').css('cursor', 'grab');

            $(".injectionDiv").addClass("shadow");

            $("code").addClass("python");

            $("#sidebar-wrapper").addClass("shadow");

			//$(".callout").addClass("shadow-sm");

			$(".code").addClass("shadow-sm");

			$("iframe").addClass('shadow');

			var newNode = document.createElement('div');

			newNode.setAttribute("id", "google_translate_element")

			newNode.setAttribute("style", "text-align:right")

			// Get the reference node

			var referenceNode = document.querySelector('.page-title');

			// Insert the new node before the reference node

			referenceNode.parentNode.insertBefore(newNode, referenceNode.nextSibling);

        });

		

		function googleTranslateElementInit() {

		  new google.translate.TranslateElement({pageLanguage: 'pt-br'}, 'google_translate_element');

		  $(".goog-te-combo").addClass('form-control');

		  $(".goog-te-combo").addClass('shadow-sm');

		}

	</script>	

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

</head>



<body>
