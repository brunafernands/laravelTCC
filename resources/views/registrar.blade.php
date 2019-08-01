@extends('baseLogineLogar')

@section('conteudo')
<div class="card w-50 container mt-5">
            <img src="{{url('/img/logo.jpg')}}" class="align-center mt-4">
        <div class="card-body">
            <form>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="nome">Nome Completo</label>
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
                    <label for="confirmEmail">Confirme seu Email</label>
                    <input type="email" class="form-control" id="confirmEmail" placeholder="Confirme seu Email">
                </div>
                </div>

                <div class="form-group">
                    <label for="endereco">Endereço</label>
                    <input type="text" class="form-control" id="endereco" placeholder="Rua e Bairro">
                </div>
                <div class="form-group">
                    <label for="Complemento">Complemento e número</label>
                    <input type="text" class="form-control" id="complemento" placeholder="Apartamento, estúdio ou casa">
                </div>

                <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="inputState">Estado</label>
                        <select id="inputState" class="form-control">
                                <option value="acre" selected> Acre</option>
                                <option value="alagoas"> Alagoas</option>
                                <option value="amapa"> Amapá</option>
                                <option value="amazonas"> Amazonas</option>
                                <option value="bahia"> Bahia</option>
                                <option value="ceara"> Ceará</option>
                                <option value="df"> Distrito Federal</option>
                                <option value="es"> Espírito Santo</option>
                                <option value="goias"> Goiás</option>
                                <option value="maranhao"> Maranhão</option>
                                <option value="matogrosso"> Mato Grosso</option>
                                <option value="matogrossodosul"> Mato Grosso do Sul</option>
                                <option value="minasgerais"> Minas Gerais</option>
                                <option value="para"> Pará</option>
                                <option value="paraiba"> Paraíba</option>
                                <option value="parana"> Paraná</option>
                                <option value="pernambuco"> Pernambuco</option>
                                <option value="piaui"> Piauí</option>
                                <option value="rj"> Rio de Janeiro</option>
                                <option value="rn"> Rio Grande do Norte</option>
                                <option value="rs"> Rio Grande do Sul</option>
                                <option value="rondonia"> Rondônia</option>
                                <option value="roraima"> Roraima</option>
                                <option value="sc"> Sanata Catarina</option>
                                <option value="sp"> São Paulo</option>
                                <option value="sergipe"> Sergipe</option>
                                <option value="tocantins"> Tocantins</option>
                        </select>
                    </div>
                
                <div class="form-group col-md-6">
                    <label for="Cidade">Cidade</label>
                    <input type="text" class="form-control" id="cidade" placeholder="Digite sua cidade">
                </div>

                <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="senha">Senha</label>
                    <input type="password" class="form-control" id="senha" placeholder="Digite sua senha">
                </div>

                <div class="form-group col-md-6">
                        <label for="confirmSenha">Confirme sua Senha</label>
                        <input type="password" class="form-control" id="confirmSenha" placeholder="Confirme sua Senha">
                    </div>
              
                </div>
                    <button onClick= type="submit" class="btn btn-success w-100">Cadastrar-se</button>
            </form>
                              
                </div>
            </div>
    
    
@endsection