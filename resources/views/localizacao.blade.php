@extends('base')

@section('conteudo')
<link href="{{url('/css/textoLocalizacao.css')}}" rel="stylesheet">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<div id="myCarousel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
          <img class="first-slide" src="{{url('/img/capa.jpg')}}" alt="Facebook">
          <div class="container">
            <div class="carousel-caption d-none d-md-block text-left">
                <p><a class="btn btn-success" href="https://www.google.com.br/maps/place/Atelier+L%C3%A1+na+L%C3%A1L%C3%A1L%C3%A1/@-25.5430808,-48.5316913,17z/data=!3m1!4b1!4m5!3m4!1s0x94db9a9b3ae04139:0x474913d777e4e152!8m2!3d-25.5430857!4d-48.5295026" role="button">Como Chegar</a></p>
            </div>
          </div>
        </div>
 
    </div>

    <div class="container marketing mt-4">

    <div class="container">
    
    <div class="row mt-4">
            <h2>O Atelier se situa na Rua Eropina Campos Cominese, 11 - Asa Branca. </h2>
            
    </div>

    </div>


      <!-- Three columns of text below the carousel -->
      <div class="row mt-4">
        <div class="col-lg-4">
          <img class="rounded-circle" src="{{url('/img/gpspresentes.jpg')}}" alt="GPS Presentes" title="GPS Presentes" width="140" height="140">
          <h2>GPS Presentes</h2>
          <p>Loja de brinquedos, situada na rua Barigui, 95 - Santos Dumont, Paranaguá - PR, 83209-590</p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="rounded-circle" src="{{url('/img/apae.jpeg')}}" alt="Educação de Crianças Especiais - APAE" title="Educação de Crianças Especiais - APAE" width="140" height="140">
          <h2>Apae</h2>
          <p>Escola de educação especial APAE, situada na Rua Bento Oliveira, 25-89 - Vila São Vicente, Paranaguá - PR, 83206-440</p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="rounded-circle" src="{{url('/img/asabranca.jpg')}}" alt="Supermercado Asa Branca" title="Supermercado Asa Branca" width="140" height="140">
          <h2>Asa Branca</h2>
          <p>Super mercado Asa Branca situado na Rua Barigui - Santos Dumont, Paranaguá - PR, 83209-590.</p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->

  </div>
</div>


@endsection