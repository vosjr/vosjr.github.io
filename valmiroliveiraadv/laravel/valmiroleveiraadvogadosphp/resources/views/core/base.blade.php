<!DOCTYPE html>
<html lang="pt-br">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Valmir Oliveira Advogados</title>
      <!-- Favicon -->

      <!-- Bootstrap CSS -->
      <link href="static/assets/css/bootstrap.min.css" rel="stylesheet">

      <!-- Animate CSS -->
      <link href="static/assets/vendors/animate/animate.css" rel="stylesheet">

      <!-- Icon CSS-->
      <link href="static/assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">

      <!-- Owlcarousel CSS-->
      <link href="static/assets/vendors/owl_carousel/owl.carousel.css" media="all" rel="stylesheet" type="text/css">

      <!--Template Styles CSS-->
      <link href="static/assets/css/style.css" media="all" rel="stylesheet" type="text/css" />
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
   
   </head>

    <style>
    .navbar-collapse.in {
      overflow-y: visible; 
      margin-top: 40px;
    }
        
    
    </style>


   <body>

      <div class="bg-banner-img clip-ellipse" id="main-navigation ">
         <div class="ovrllay">
            <!-- Header_Area -->
            <nav class="navbar navbar-default header_aera affix-top">
               <div class="container m-s">
                  <!-- Brand and toggle get grouped for better mobile display -->
                  <div class="col-md-4 p0">
                     <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#min_navbar" style="margin-bottom:-55px;">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand logo-biss" href="/" style="text-shadow: 2px 2px #000000; color:#DCDCDC;">Valmir Oliveira Advogados </a>
                     </div>
                  </div>
                  <!-- Collect the nav links, forms, and other content for toggling -->
                  <div class="col-md-8 p0">
                     <div class="collapse navbar-collapse" id="min_navbar" style="">
                        <ul class="nav navbar-nav navbar-right">
                           <li class="dropdown submenu">
                              <a href="/" class="">Início</a>
                           </li>
                           <li class="dropdown submenu">
                              <a href="escritorio" class="">Escritório</a>
                           </li>
                           <li class="dropdown submenu">
                              <a href="atuacao" class="">Atuação</a>
                           </li>
                           <li class="dropdown submenu">
                              <a href="advogados" class="">Advogados</a>
                           </li>
                           <li class="dropdown submenu">
                              <a href="cliente" class="">Área de Cliente</a>
                           </li>
                           <li class="dropdown submenu">
                              <a href="contato" class="">Contato</a>
                           </li>
                           
                        </ul>
                     </div>
                     <!-- /.navbar-collapse -->
                  </div>
               </div>
               <!-- /.container -->
            </nav>
            <!-- End Header_Area -->

<br>
            @yield('content')



      <!--#start Our footer Area -->
      <div class="our_footer_area">
         <div class="book_now_aera ">
            <div class="container wow fadeInUp">
               <div class="row book_now">

                  <div class="col-md-4">
                    <!--
                     <div class="">
                        <a class=" logo-biss" href="/"> Valmir </a>
                     </div>

                     <p class="footer-h">It is a long established fact that a <br>reader will be distracted by the <br> readable content.</p>
                     -->

                     <!--<div class="bigpixi-footer-social">
                        <a href="" target="_blank"><i id="social-fb" class="fa fa-facebook fa-2x social"></i></a>
                        <a href="" target="_blank"><i id="social-tw" class="fa fa-twitter fa-2x social"></i></a>
                        <a href="" target="_blank"><i id="social-em" class="fa fa-instagram fa-2x social"></i></a>
                     </div> -->
                     @guest
                     <p style="color:white;">Área administrativa</p>

                     <br><button class="btn btn-secondary" style="opacity:0.7;"><a href="login">Login</a></button>
                     @endguest
                     
                     @auth
                          <p style="color:white;">Notícias</p>

                     <br><button class="btn btn-secondary" style="opacity:0.7;"><a href="login">Publicar</a></button>
                           @endauth
                  </div>
<!--
                  <br><br>

                  <div class="col-md-4">
                    <div class="card" style= "background-color:#DCDCDC; width:60%;opacity:0.6;" >
                        <img height="200" width="200" src="https://raw.githubusercontent.com/vosjr/vosjr.github.io/master/logo2.png"></img>
                    </div>
                  </div>
-->
                <div class="col-md-4">
                  <br>
                  <p><img src="https://png.pngtree.com/svg/20170727/place_316551.png" height="30" width="30"></p><br>
                  <p style="color:white;">Rua Professor José Brand, 389 - Sala 303</p><br>
                  <p style="color:white;">Boa Viagem - Recife-PE - CEP: 51020-180</p><br>
                  <p style="color:white;"><img src="https://png.pngtree.com/svg/20170602/mail_123182.png" height="30" width="30"><br> contato@valmiroliveirajr.adv.br</p><br>
                </div>

                  <div class="col-md-3">
                     <h2 class="footer-top">Links Ágeis</h2>
                     <ul class="footer-menu">
                        <li><a href="/">           Início              </a></li>
                        <li><a href="escritorio">  Escritório          </a> </li>
                        <li><a href="cliente">  Área do cliente     </a> </li>
                        <li><a href="contato">  Contato             </a> </li>
                     </ul>
                  </div>

                  <div class="col-md-6">
<br><p style="font-size:5;">Copyright @ Valmir Oliveira Jr</p>
                  </div>




<!--

                  <div class="col-md-4">
                     <ul class="location">
                        <h2 class="footer-top">Informaï¿½ï¿½es de contato </h2>
                        <li class="footer-left-h">Rua Professor Josï¿½ Brandï¿½o, 389<br> Sala 303 - Boa Viagem - Recife-PE <br><br> CEP: 51020-180</li>
                        <li class="footer-left-h"><span class="c_yellow">Email :</span>
                           <a href=""> contato@valmiroliveirajr.adv.br </a>
                        </li>
                        <li class="footer-left-h"><span class="c_yellow">Ligue para:  </span> (81) 9 9611-1195
                        </li>
                     </ul>
                  </div>
-->


                  <!--<div class="col-md-12">
                     <p class="color-gray" style="font-size:8px;"> Designed by <a href="https://www.navthemes.com">NavThemes </a> and distributed by <a href="https://themewagon.com">ThemeWagon</a></p>
                  </div> -->
               </div>
            </div>
         </div>
      </div>

      <!--#End Our footer Area -->


      <!-- jQuery JS -->
      <script src="static/assets/js/jquery-1.12.0.min.js"></script>

      <!-- Bootstrap JS -->
      <script src="static/assets/js/bootstrap.min.js"></script>

      <!-- Animate JS -->
      <script src="static/assets/vendors/animate/wow.min.js"></script>

      <!-- Owlcarousel JS -->
      <script src="static/assets/vendors/owl_carousel/owl.carousel.min.js"></script>

      <!-- Stellar JS -->
      <!-- Theme JS -->
      <script src="static/assets/js/theme.min.js"></script>


   </body>
</html>
