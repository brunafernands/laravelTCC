@extends('base')

@section('conteudo')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel-group" id="accordion">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><span class="glyphicon glyphicon-file">
                            </span>Criar um novo artigo</a>
                        </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse in">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Titulo" required />
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control" placeholder="Conteúdo" rows="12" required></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="category">
                                            Categoria</label>
                                        <select class="form-control" id="categoria">
                                            <option>Tutorial</option>
                                            <option>Dica</option>
                                            <option>Inspiração</option>
                                            <option>Qualidade</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="tags">
                                            #Hastags</label>
                                        <input type="text" class="form-control" id="tags" placeholder="Exemplo: #sonhodecriança" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="well well-sm well-primary">
                                        <div class="input-group image-preview">
                <input type="text" class="form-control image-preview-filename" disabled="disabled"> <!-- don't give a name === doesn't send on POST/GET -->
                <span class="input-group-btn">
                    <!-- image-preview-clear button -->
                    <button type="button" class="btn btn-default image-preview-clear" style="display:none;">
                        <span class="glyphicon glyphicon-remove"></span> Limpar dados
                    </button>
                    <!-- image-preview-input -->
                    <div class="btn btn-default image-preview-input">
                        <span class="glyphicon glyphicon-folder-open"></span>
                        <span class="image-preview-input-title">Pesquisar</span>
                        <input type="file" accept="image/png, image/jpeg, image/gif" name="input-file-preview"/> <!-- rename it -->
                    </div>
                </span>
            </div><!-- /input-group image-preview [TO HERE]--> 
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="well well-sm well-primary">
                                        <form class="form form-inline " role="form">
                                       
                                    
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-success btn-sm">
                                                <span class="glyphicon glyphicon-floppy-disk"></span>Save</button>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"><span class="glyphicon glyphicon-th-list">
                            </span>META DATA</a>
                        </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Title" required />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Description" required />
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control" placeholder="Keywords" required></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="well well-sm well-primary">
                                        <form class="form form-inline " role="form">
                                        <div class="form-group">
                                            <a href="http://www.jquery2dotnet.com" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-floppy-disk">
                                            </span>Salvar</a>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection