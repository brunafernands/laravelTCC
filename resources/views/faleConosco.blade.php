@extends('base')

@section('conteudo')


<div class="container">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header bg-success text-white text-uppercase"><i class="fa fa-envelope"></i> Fale Conosco
                </div>
                <div class="card-body">
                    <form id="form_contato">
                        <div class="form-group">
                            <label for="name">Nome Completo</label>
                            <input type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Digite seu nome" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Endereço de email</label>
                            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Digite seu email" required>
                            <small id="emailHelp" class="form-text text-muted">Nós nunca compartilharemos seus dados com ninguém.</small>
                        </div>
                        <div class="form-group">
                            <label for="subject">
                                Assunto:</label>
                            <select id="subject" name="subject" class="form-control" required="required">
                                <option value="orcamento">Orçamento</option>
                                <option value="duvida">Dúvidas</option>
                                <option value="reclamacao">Reclamações</option>
                                <option value="sugestao">Sugestões</option>
                                <option value="suporte">Suporte Técnico</option>
                            </select>
                            <input id="arquivo" name="arquivo" class="input-file" type="file">
                            <span class="help-block"></span><br>
                            <span>2MB por mensagem</span>
                        </div>
                        <div class="form-group">
                            <label for="message">Mensagem</label>
                            <textarea class="form-control" id="message" rows="6" required></textarea>
                        </div>
                        <div class="mx-auto">
                        <button type="submit" id="bt_mensagem" class="btn btn-success text-center w-100">Enviar</button></div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-4">
            <div class="card bg-light mb-3">
                <div class="card-header bg-success text-white"><i class="fa fa-home"></i> Localização</div>
                <div class="card-body">
                    <p>Atelier Lá Na LáLáLá</p>
                    <p>Paranaguá, Paraná</p>
                    <p>Rua Eropina Campos Cominese, </p>
                    <p>Asa Branca, 11</p>
                    <p>Email: karinelalala@hotmail.com</p>
                    <p>(41) 98706-9143</p>

                </div>

            </div>
        </div>
    </div>
</div>

  
</div>

@endsection