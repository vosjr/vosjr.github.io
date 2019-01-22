@extends('core.base')
@section('content')

<!-- CSS AND LINK FOR ICONS FROM BOOTSTRAP-->
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
<style>
    .list-group-item {
    position: relative;
    display: block;
    padding: 10px 15px;
    margin-bottom: -1px;
    background-color: #08001B;
    border: 1px solid #404249;
    color:white;
    }
    .list-group-item-text{
    color:white;
    margin-top:-15%;
    }
    p {
    max-width: 60ch;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: pre-line;
    }

</style>

<!-- #banner start -->

    <div class="container">
   <div class="card" style="padding-left: 0.5%; padding-right: 0.5%; margin-top: -50px;">
       <div class="card-body transparencia" style="background-color:#08001B";>
            <blockquote class="blockquote mb-0">
                <div class="container">
                    <!--TÃ­tulo PÃ¡gina de Advogado-->
                      <h2 class="title pull-left" style="color:white;"> Lista de Advogados</h2><br /><br /><br />
                        <div class="list-group pull-left" style="margin-left:-1.5%;">
                            <div class="list-group-item pull-left" >
                                <!--Nome do Advogado-->
                              <h4 class="list-group-item-heading text-left">Fenando de Melo belo</h4><br /><br />
                                <!--ConteÃºdo e InformaÃ§Ãµes-->
                              <p class="list-group-item-text pull-left" style="margin-top:-12%;">Área: Trabalhista</p><br />
                              <p class="list-group-item-text pull-left" style="margin-top:-15%;">Tel: (81)99999-9999</p><br />
                              <p class="list-group-item-text pull-left" style="margin-top:-18%;">Email: FMB.@hotmail.com</p><br />
                              <p><h4 class="list-group-item-heading pull-left" style="margin-top:-19%;">Resumo</h4></p> <br />
                              <p class="list-group-item-text" align="left" style="margin-top:-20%;">
                                  Formado em Direito Pela rural o cara f Formado em Direito Pela rural o cara

                                <hr>
                              </p>

                                <h4 class="list-group-item-heading text-left">Fenando de Melo belo</h4><br /><br />
                              <p class="list-group-item-text pull-left" style="margin-top:-12%;">Área: Trabalhista</p><br />
                              <p class="list-group-item-text pull-left" style="margin-top:-15%;">Tel: (81)99999-9999</p><br />
                              <p class="list-group-item-text pull-left" style="margin-top:-18%;">Email: FMB.@hotmail.com</p><br />
                              <p><h4 class="list-group-item-heading pull-left" style="margin-top:-19%;">Resumo</h4></p> <br />
                              <p class="list-group-item-text" align="left" style="margin-top:-20%;">
                                  Formado em Direito Pela rural o cara  f Formado em Direito Pela rural o cara

                                <hr>
                              </p>

                            </div>

            </blockquote>
        </div>
   </div>
</div>
</div>
</div>

<!-- /#banner end -->

@stop
