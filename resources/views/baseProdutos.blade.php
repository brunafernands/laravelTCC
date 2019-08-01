<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{url('/img/logo.jpg')}}">

    <title>Atelier Lá na LáLáLá</title>

    <link href="{{url('/css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{url('/css/bootstrap.min.css')}}" rel="stylesheet" id="bootstrap-css">
    <script src="{{url('/js/bootstrap.min.js')}}"></script>


    <link rel="stylesheet" href="{{url('/css/font-awesome.min.css')}}" >

    <link href="dist/css/bootstrap.css" rel="stylesheet">
    <link href="{{url('/css/artigoPageInicial.css')}}" rel="stylesheet">

    <link href="{{url('/css/blog.css')}}" rel="stylesheet">
    <link href="{{url('/css/produto.css')}}" rel="stylesheet">

    <link href="{{url('/css/pageInicial.css')}}" rel="stylesheet">
    <link href="{{url('/css/shopping.css')}}" rel="stylesheet">
    <link href="{{url('/css/searchViewProduto.css')}}" rel="stylesheet">


    
  </head>

  <body>

<div class="container">
  <header class="blog-header py-3">
    <div class="row flex-nowrap justify-content-between align-items-center">
     
      <div class="col-4 text-center">
        <a class="blog-header-logo text-dark" href="{{ url('/pageInicial') }}">Atelier Lá Na LáLáLá - Karine Fernandes</a>
      </div>
      <div class="col-4 d-flex justify-content-end align-items-center">
        <a class="text-muted" href="#">
         
        </a>

        
        <a class="btn btn-sm btn-outline-secondary" href="{{ url('/login') }}">Login</a>
      </div>
    </div>
  </header>

  <div class="nav-scroller py-1 mb-2">
    <nav class="nav d-flex justify-content-between">
      <a class="p-2 text-muted" href="{{ url('/') }}">Sobre Nós</a>
      <a class="p-2 text-muted" href="{{ url('/') }}">Artigos</a>
      <a class="p-2 text-muted" href="{{ url('/galeria') }}">Galeria</a>
      <a class="p-2 text-muted" href="{{ url('/produtos') }}">Produtos</a>
      <a class="p-2 text-muted" href="{{ url('/avaliacoes') }}">Avaliações</a>
      <a class="p-2 text-muted" href="{{ url('/') }}">Espaço do Cliente</a>
      <a class="p-2 text-muted" href="{{ url('/localizacao') }}">Conheça nosso Atelier</a>
      <a class="p-2 text-muted" href="{{ url('/faleConosco') }}">Fale Conosco</a>

    </nav>
  </div>


<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 
@yield('cabecalho')

@yield('conteudo')

@yield('extra')

<div class="mt-5">
                <p><p>
            </div>

<footer class="blog-footer">
  <p>Atelier Lá na LáLáLá - 2019 | Todos os direitos reservados. Desenvolvido por <a href="https://twitter.com/mdo">Bruna Fernandes</a>.</p>
  <p>
    <a href="#">Voltar ao topo da página.</a>
  </p>
</footer>

  </body>
</html>
