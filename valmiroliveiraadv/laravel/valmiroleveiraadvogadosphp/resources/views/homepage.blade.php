@extends('core.base')
@section('content')
<!-- #banner start -->
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<section id="banner" class="pb_0" >
    <div class="container">
        <!--start Why Choose Us Area -->
        <div class="container transparencia" style="background-color:#08001B;">
            <br><div class="row text-center  ">
            <div class="wow">
                <h1 style="color:white;">Atualizaçães</h1>
                <p  style="color:white;"> Notícias e Novidades em nossas Redes Sociais </p><br>
            </div>
            </div>

        <br />

            <!--Start Feed Field-->
            <div class="row">
                <div class="col-md-5 col-sm-10 col-xs-12 wow fadeInUp">
                <!--News I-->
                    <h1 class="title text-left" style="margin-left:4%;margin-bottom:7%;color:white;">Notícias</h1>
                        <div class="w3-container newsBody">
                            <a href="blog-single.html">      <img src="static/assets/images/poderoso_chefao.jpg"></a>
                            <div>
                                <h6 style="color:grey">
                                    Postado em 12 Agosto 2019
                                </h6>
                                <h1>
                                    <a href="blog-single.html">Teste</a>
                                </h1>
                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting<br> industry.
                                </p>
                                <div class="">
                                    <a href="blog-single.html" class="button-buttom"> Leia mais  </a>
                                </div>
                            </div>
                        </div>
                    <!--News II-->
                        <div class="w3-container newsBody">
                            <a href="blog-single.html">      <img src="static/assets/images/poderoso_chefao.jpg"></a>
                            <div>
                                <h6 style="color:grey">
                                    Postado em 12 Agosto 2019
                                </h6>
                                <h1>
                                    <a href="blog-single.html">Teste</a>
                                </h1>
                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting<br> industry.
                                </p>
                                <div class="">
                                    <a href="blog-single.html" class="button-buttom"> Leia mais  </a>
                                </div>
                            </div>
                        </div>

                        <!--News III-->
                        <div class="w3-container newsBody">
                                <a href="blog-single.html">      <img src="static/assets/images/poderoso_chefao1.jpg"></a>
                                <div>
                                        <h6 style="color:grey">
                                            Postado em 12 Agosto 2019
                                        </h6>
                                        <h1>
                                            <a href="blog-single.html">Teste</a>
                                        </h1>
                                        <p>
                                            Lorem Ipsum is simply dummy text of the printing and typesetting<br> industry.
                                        </p>
                                        <div class="">
                                            <a href="blog-single.html" class="button-buttom"> Leia mais  </a>
                                        </div>
                                    </div>
                        </div>
                    <br />
                        <!--Slide Controls-->
                        <div class="w3-center">
                            <div class="w3-section">
                            <button class="btn btn-secondary" onclick="plusDivsNews(-1)"><</button>
                                <button class="btn btn-secondary" onclick="plusDivsNews(1)">></button>
                            </div>
                        </div>
                </div>
                <!--End News-->
                <!--Two Columns of grid for margin -->
                <div class="col-xl-3 col-sm-1"></div>
                <div class="col-xl-3 col-sm-1"></div>


                <!--Begining of Feed Social Networks-->
                <div class="col-md-5 col-sm-10 col-xs-12 wow fadeInUp">
                <!--News I-->
                <h1 class="title text-left" style="margin-left:4%;margin-bottom:7%;color:white;">Rede Sociais</h1>
                        <div class="w3-container socialNetworkBody">
                            <a href="blog-single.html">      <img src="static/assets/images/poderoso_chefao.jpg"></a>
                            <div>
                                <h6 style="color:grey">
                                    Postado em 12 Agosto 2019
                                </h6>
                                <h1>
                                    <a href="blog-single.html">Teste</a>
                                </h1>
                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting<br> industry.
                                </p>
                                <div class="">
                                    <a href="blog-single.html" class="button-buttom"> Leia mais  </a>
                                </div>
                            </div>
                        </div>
                    <!--News II-->
                        <div class="w3-container socialNetworkBody">
                            <a href="blog-single.html">      <img src="static/assets/images/poderoso_chefao.jpg"></a>
                            <div>
                                <h6 style="color:grey">
                                    Postado em 12 Agosto 2019
                                </h6>
                                <h1>
                                    <a href="blog-single.html">Teste</a>
                                </h1>
                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting<br> industry.
                                </p>
                                <div class="">
                                    <a href="blog-single.html" class="button-buttom"> Leia mais  </a>
                                </div>
                            </div>
                        </div>

                        <!--News III-->
                        <div class="w3-container socialNetworkBody">
                                <a href="blog-single.html">      <img src="static/assets/images/poderoso_chefao1.jpg"></a>
                                <div>
                                        <h6 style="color:grey">
                                            Postado em 12 Agosto 2019
                                        </h6>
                                        <h1>
                                            <a href="blog-single.html">Teste</a>
                                        </h1>
                                        <p>
                                            Lorem Ipsum is simply dummy text of the printing and typesetting<br> industry.
                                        </p>
                                        <div class="">
                                            <a href="blog-single.html" class="button-buttom"> Leia mais  </a>
                                        </div>
                                    </div>
                        </div>
                    <br />

                        <!--Slide Controls-->
                        <div class="w3-center">
                            <div class="w3-section">
                            <button class="btn btn-secondary" onclick="plusDivsSN(-1)"> < </button>
                                <button class="btn btn-secondary" onclick="plusDivsSN(1)"> > </button>
                            </div>
                        </div>
                </div>
            </div>


                        <!--End News--><br />

                </div><br />
    </div><br />
</section><br /><br />

<script>
var slideIndexNews = 1;
showDivsNews(slideIndexNews);

function plusDivsNews(n) {
  showDivsNews(slideIndexNews += n);
}


function showDivsNews(n) {
  var i;
  var x = document.getElementsByClassName("newsBody");
  var dots = document.getElementsByClassName("demo");
  if (n > x.length) {slideIndexNews = 1}
  if (n < 1) {slideIndexNews = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  x[slideIndexNews-1].style.display = "block";
}

var slideIndexSN = 1;
showDivsSN(slideIndexSN);

function plusDivsSN(n) {
  showDivsSN(slideIndexSN += n);
}


function showDivsSN(n) {
  var i;
  var x = document.getElementsByClassName("socialNetworkBody");
  if (n > x.length) {slideIndexSN = 1}
  if (n < 1) {slideIndexSN = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  x[slideIndexSN-1].style.display = "block";
}
</script>
<!--End Why Choose Us Area -->


  <!-- jQuery JS -->
  <script src="assets/js/jquery-1.12.0.min.js"></script>

  <!-- Bootstrap JS -->
  <script src="assets/js/bootstrap.min.js"></script>
  <!-- Animate JS -->
  <script src="assets/vendors/animate/wow.min.js"></script>

  <script src="assets/vendors/owl_carousel/owl.carousel.min.js"></script>

  <!-- Theme JS -->
  <script src="assets/js/theme.min.js"></script>

@stop
