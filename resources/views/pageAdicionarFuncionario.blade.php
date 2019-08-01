@extends('baseAdministrador')

@section('conteudo')
<div class="card w-50 container mt-5">
            <img src="{{url('/img/logo.jpg')}}" class="align-center mt-4">
        <div class="card-body">
            <form>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="nome">Nome Completo do Funcionário</label>
                        <input type="text" class="form-control" id="nome" placeholder="Nome Completo">
                </div>

                <div class="form-group col-md-6">
                    <label for="cpf">CPF</label>
                    <input type="numer" class="form-control" id="cpf" placeholder="000.000.000-00">
                </div>

                <div class="form-group col-md-6">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Email">
                </div>

                <div class="form-group col-md-6">
                    <label for="confirmEmail">Telefone</label>
                    <input type="email" class="form-control" id="confirmEmail" placeholder="Confirme seu Email">
                </div>
                </div>

                <div class="form-group">
                    <label for="endereco">Senha</label>
                    <input type="password" class="form-control" id="endereco" placeholder="Rua e Bairro">
                </div>
              
                </div>
                    <button onClick= type="submit" class="btn btn-success w-100">Registrar Novo Funcionário</button>
            </form>
                              
                </div>
            </div>
    
@endsection