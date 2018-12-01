@extends('core.base')
@section('content')

<div class="container">
   <div class="card" style="padding-left: 0.5%; padding-right: 0.5%; margin-top: -50px;">
       <div class="card-body transparencia col-sl-6" style="background-color:#08001B";>
            <blockquote class="blockquote mb-0">
              <h1 class="title" style="color:white;"> Contato </h1>
            </blockquote>

            <div class="formulario-contato">
              <form>
                <h4 style="color:white;">Envie aqui sua pergunta, Dúvidas Frequêntes</h4><br>
                <input type="text" placeholder="Digite seu nome" style="width:80%;"><br>
                <input type="email" placeholder="Digite seu email" style="width:80%;"><br>
                <textarea placeholder="Descrição" style="width:80%;"></textarea>
                <br><button type="submit" class="btn btn-secondary">Enviar</button>
                <br><br><br>
              </form>
            </div>
        </div>

        <div class="card-body transparencia col-sl-6" style="background-color:#08001B";>

          <blockquote class="blockquote mb-0">
            <h1 class="title" style="color:white;"> Localização </h1>
          </blockquote>

        <div style="width:90%; margin-left:15px;">
          <div style="width: 100%; "><iframe src="https://maps.google.com/maps?width=100%&amp;height=200&amp;hl=en&amp;q=Rua%20Professor%20Jos%C3%A9%20Brand%C3%A3o%2C%20389%20-%20303%20-%20Boa%20Viagem%2C%20Recife%20-%20PE+(Valmir%20Oliveira%20Jr.%20Advogados)&amp;ie=UTF8&amp;t=&amp;z=16&amp;iwloc=A&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe></div><br>
        </div>
      </div>

   </div>
</div>
</div>
</div>

@stop
