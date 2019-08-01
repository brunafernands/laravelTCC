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
    <link href="{{{url('/css/artigos.css')}}}" rel="stylesheet">
    <link href="{{{url('/css/dropdown.css')}}}">


    <link rel="stylesheet" href="{{url('/css/font-awesome.min.css')}}" >

    <link href="dist/css/bootstrap.css" rel="stylesheet">
    <link href="{{url('/css/artigoPageInicial.css')}}" rel="stylesheet">

    <link href="{{url('/css/blog.css')}}" rel="stylesheet">
    <link href="{{url('/css/produto.css')}}" rel="stylesheet">

    <link href="{{url('/css/pageInicial.css')}}" rel="stylesheet">
    <link href="{{url('/css/shopping.css')}}" rel="stylesheet">
    <link href="{{url('/css/textoLocalizacao.css')}}" rel="stylesheet">
    <link href="{{url('/css/carousel.css')}}" rel="stylesheet">


    
  </head>

  <body>

<div class="container">
  <header class="blog-header py-3">
    <div class="row flex-nowrap justify-content-between align-items-center">
     
      <div class="col-4 text-center">
        <a class="blog-header-logo text-dark" href="{{ url('/pageInicial') }}">Atelier Lá Na LáLáLá - Karine Fernandes</a>
      </div>
    </div>
  </header>

  <div class="nav-scroller py-1 mb-2">
    <nav class="nav d-flex justify-content-between">
	<div class="row">
        <div class="btn-group show-on-hover">
          <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
            Adicionar <span class="caret"></span>
          </button>
          <ul class="dropdown-menu" role="menu">
            <li><a href="{{ url('/criarProduto') }}">Produto</a></li>
            <li><a href="{{ url('/criarArtigo') }}">Artigo</a></li>
            <li><a href="{{ url('/pageAdicionarFuncionario') }}">Funcionário</a></li>
            <li><a href="{{ url('/') }}">Foto na galeria</a></li>
          </ul>
        </div>
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
