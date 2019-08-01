@extends('baseLogineLogar')

@section('conteudo')



<div class="card w-25 container mt-5">
        <img src="{{url('/img/logo.jpg')}}" class="align-center mt-4">
            <div class="card-body">
                <form>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input id="email" type="email" class="form-control" id="email" aria-describedby="email" placeholder="Email">
                        <small id="email" class="form-text text-muted">Nós nunca vamos compartilhar seu e-mail com alguém.</small>
                    </div>
                    <div class="form-group">
                    <label for="senha">Senha</label>
                    <input id = "senha" type="password" class="form-control" id="senha" placeholder="Senha">
                    </div>
                    <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label mt-2" for="exampleCheck1">Lembrar de mim?</label>
                    </div>
                    <button onClick="verificarLogin()" type="submit" class="btn btn-success mt-2 align-center w-100">Logar</button>
                </form>
            </div>
        </div>

        <div class="card w-25 container mt-5">
         <div class="card-body">
             <p class="mt-2 align-center w-100">Novo por aqui? <a href="{{ url('/registrar') }}">Criar uma conta</a></p>

        </div>
    </div>

    @endsection