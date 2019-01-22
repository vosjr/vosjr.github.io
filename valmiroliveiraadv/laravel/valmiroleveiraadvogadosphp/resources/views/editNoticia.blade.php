@extends('core.base')
@section('content')

<div class="container">
   <div class="card" style="padding-left: 0.5%; padding-right: 0.5%; margin-top: -50px;">
       <div class="card-body transparencia col-sl-6" style="background-color:#08001B";>
            <blockquote class="blockquote mb-0">
              <h1 class="title text-left" style="color:white;"> Edit Notícia </h1>
            </blockquote>

            <div class="formulario-contato">
              @if (count($errors) > 0)
                <div class="alert alert-danger">
                 Upload Validation Error<br><br>
                 <ul>
                  @foreach ($errors->all() as $error)
                   <li>{{ $error }}</li>
                  @endforeach
                 </ul>
                </div>
               @endif
              <form action="/noticia/update/{{$nots->id}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                  <label for="inputTitulo"><h3>Título</h3></label><br>
                  <input type="text" placeholder="Digite seu nome"
                   name="inputTitulo" value="{{$nots->titulo}}" style="width:80%;">
                </div>
                <div class="form-group">
                  <label for="inputImagem"><h3>imagem</h3></label><br>
                  <input type="file" placeholder="Selecione uma Imagem"
                   name="inputImagem" value="{{$nots->imagem}}" style="width:80%;">
                </div>
                <div class="form-group">
                  <label for="inputConteudo"><h3>Conteúdo</h3></label><br>
                  <textarea placeholder="Descrição" name="inputConteudo"
                   style="width:80%;">{{$nots->conteudo}}</textarea>
                </div>
                <br><button type="submit" class="btn btn-secondary">Enviar</button>
                <br><br><br>
              </form>
            </div>
        </div>

   </div>
</div>
</div>
</div>

@stop
