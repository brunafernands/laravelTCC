@extends('base')

@section('conteudo')
<div class="container">
         <div class="row">
         </div>
         <div class="portfolio-menu mt-4 mb-4 text-center">
            <ul>
               <li class="btn btn-outline-warning active" data-filter="*">Todos</li>
               <li class="btn btn-outline-warning" data-filter=".gts">Aniversários</li>
               <li class="btn btn-outline-warning" data-filter=".lap">15 Anos</li>
               <li class="btn btn-outline-warning text" data-filter=".selfie">Chá de Panela/Bebê</li>
               <li class="btn btn-outline-warning text" data-filter=".selfie">Casamento</li>
               <li class="btn btn-outline-warning text" data-filter=".selfie">Cadernos/Canetas Personalizadas</li>
            </ul>
         </div>

         <div class="portfolio-item row text-center">
            <div class="item selfie col-lg-3 col-md-4 col-6 col-sm sm-4">
               <a href="https://image.freepik.com/free-photo/stylish-young-woman-with-bags-taking-selfie_23-2147962203.jpg" class="fancylight popup-btn" data-fancybox-group="light"> 
               <img class="img-fluid" src="https://image.freepik.com/free-photo/stylish-young-woman-with-bags-taking-selfie_23-2147962203.jpg" alt="">
               </a>
            </div>
            <div class="item gts col-lg-3 col-md-4 col-6 col-sm">
               <a href="https://image.freepik.com/free-photo/pretty-girl-near-car_1157-16962.jpg" class="fancylight popup-btn" data-fancybox-group="light"> 
               <img class="img-fluid" src="https://image.freepik.com/free-photo/pretty-girl-near-car_1157-16962.jpg" alt="">
               </a>
            </div>
            <div class="item selfie col-lg-3 col-md-4 col-6 col-sm">
               <a href="https://image.freepik.com/free-photo/blonde-tourist-taking-selfie_23-2147978899.jpg" class="fancylight popup-btn" data-fancybox-group="light">
               <img class="img-fluid" src="https://image.freepik.com/free-photo/blonde-tourist-taking-selfie_23-2147978899.jpg" alt="">
               </a>
            </div>

         
</div>

<div class="mt-5">
                <p><p>
            </div>
@endsection