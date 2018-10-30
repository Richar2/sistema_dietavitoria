@extends('templates.template')

@section('content')

<h1>Cadastro</h1>

<div class="topo alert alert-info" role="alert">
    
    <span style="float:right;"><a href="javascript:history.back()" style="color:white;text-decoration:none;font-size:15px;font-weight:bold">Voltar</a></span>
</div>

<form  method="post" action={{url('/cadastro/savecad')}}>
  {{ csrf_field() }}

    <div class="panel panel-info">
        <div class="panel-body">
            <div class="form-group">
                <label>Nome:</label>
                <input type="text" name="nome" id="Nome" class="form-control" value="" />
            </div>

            <div class="form-group">
                <label>Sobrenome:</label>
                <input type="text" id="Sobrenome" name="Sobrenome" class="form-control" value="" />             
            </div>

            <div class="form-group">
                <label>Sexo:</label>
                <select id="Sexo" name="Sexo" class="form-control">             
                    <option value="" > -- </option>
                    <option value="f" >Feminino</option>
                    <option value="m" >Masculino</option>                    
                </select>    
            </div>

            <div class="form-group">
                <label>Profissao:</label>
                <input type="text" id="Profissao" name="Profissao" class="form-control" value="" />             
            </div>

            <div class="form-group">
                <label>Cpf:</label>
                <input type="text" id="Cpf" name="Cpf" class="form-control" value="" /> 
            </div>

            <div class="form-group">
                <label>Data de Nascimento:</label>
                <input type="text" id="DataNascimento" name="DataNascimento" class="form-control" value="" /> 
            </div>

            <div class="form-group">
                <label>Email:</label>
                <input type="text" id="Email" name="Email" class="form-control" value="" /> 
            </div>

            <div class="form-group">
                <label>Endereço:</label>
                <input type="text" id="Endereco" name="Endereco" class="form-control" value="" /> 
            </div>

            <div class="form-group">
                <label>Número:</label>
                <input type="text" id="Numero" name="Numero" class="form-control" value="" /> 
            </div>

            <div class="form-group">
                <label>Complemento:</label>
                <input type="text" id="Complemento" name="Complemento" class="form-control" value="" /> 
            </div>

            <div class="form-group">
                <label>Cep:</label>
                <input type="text" id="Cep" name="Cep" class="form-control" value="" /> 
            </div>

            <div class="form-group">
                <label>Bairro:</label>
                <input type="text" id="Bairro" name="Bairro" class="form-control" value="" /> 
            </div>

            <div class="form-group">
                <label>Cidade:</label>
                <input type="text" id="Cidade" name="Cidade" class="form-control" value="" /> 
            </div>

            <div class="form-group">
                <label>Telefone:</label>
                <input type="text" id="Telefone" name="Telefone" class="form-control" value="" /> 
            </div>

            <div class="form-group">
                <label>Celular:</label>
                <input type="text" id="Celular" name="Celular" class="form-control" value="" /> 
            </div>

            <div class="form-group">
                <label>Quantidade de filhos:</label>
                <input type="text" id="QuantidadeFilhos" name="QuantidadeFilhos" class="form-control" value="" /> 
            </div>

            <div class="form-group">
                <label>Altura:</label>
                <input type="text" id="Altura" name="Altura" class="form-control" value="" /> 
            </div>
            
            <div class="form-group">
                <label>Peso Inicial:</label>
                <input type="text" id="Peso" name="Peso" class="form-control" value="" /> 
            </div>

            <div class="form-group">
                <label>Peso Ideal:</label>
                <input type="text" id="PesoIdeal" name="PesoIdeal" class="form-control" value="" /> 
            </div>

            <div class="form-group">
                <label>Cintura(cm):</label>
                <input type="text" id="Cintura" name="Cintura" class="form-control" value="" /> 
            </div>

            <div class="form-group">
                <label>Quadril(cm):</label>
                <input type="text" id="Quadril" name="Quadril" class="form-control" value="" /> 
            </div>

             <div class="form-group">
                <label>Coxas(cm):</label>
                <input type="text" id="Coxa" name="Coxa" class="form-control" value="" /> 
            </div>

            <div class="form-group">
                <label>Usuário Facebook:</label>
                <input type="text" id="UserFacebook" name="UserFacebook" class="form-control" value="" /> 
            </div>

            <div class="form-group">
                <label>Turma:</label>
              
            <select name="TurmaId" id="TurmaId" class="form-control">
            
            </select>

            </div>

            <div class="form-group">
                <label>Data da Primeira Aula:</label>
                <input type="text" id="DataPrimeiraAula" name="DataPrimeiraAula" class="form-control" value="" /> 
            </div>

            <div class="form-group">
                <label>Ativo:</label>
                
            <select name="Ativo" id="Ativo" class="form-control">
                <option value="0" >Inativo</option>
                <option value="1" >Ativo</option>
                
            </select>

            </div>

        </div>
    </div>
    <div style="clear: both; width: 100%; height: 40px"></div>
    <div class="panel panel-info">
        <div class="panel-heading">
            <h3 class="panel-title">Em caso positivo, por favor, assinale:
            </h3>
        </div>
        <div class="panel-body">
            <div class="form-group" style="text-align: center;">
                <div class="checkbox-inline">
                    <label>
                        <input type="checkbox" name="hasAnsiedade" id="hasAnsiedade" value="1" />&nbsp;Ansiedade
                    </label>
                </div>
                <div class="checkbox-inline">
                    <label>
                        <input type="checkbox" name="hasInsonia" id="hasInsonia" value="1"  />&nbsp;Insonia
                    </label>
                </div>
                <div class="checkbox-inline">
                    <label>
                        <input type="checkbox" name="hasHipertensao" id="hasHipertensao" value="1" />&nbsp;Hipertensão
                    </label>
                </div>
                <div class="checkbox-inline">
                    <label>
                        <input type="checkbox" name="hasDiabetes" id="hasDiabetes" value="1"  />&nbsp;Diabetes
                    </label>
                </div>
                <div class="checkbox-inline">
                    <label>
                        <input type="checkbox" name="hasAlergias" id="hasAlergias" value="1" />&nbsp;Alergias
                    </label>
                </div>
            </div>
            <div class="form-group" style="text-align: center;">
                <div class="checkbox-inline">
                    <label>
                        <input type="checkbox" name="hasDisturbiosOncologicos" id="hasDisturbiosOncologicos" value="1"  />&nbsp;Disturbios Oncologicos
                    </label>
                </div>
                <div class="checkbox-inline">
                    <label>
                        <input type="checkbox" name="hasProblemasRenais" id="hasProblemasRenais" value="1" />&nbsp;Problemas Renais
                    </label>
                </div>
                <div class="checkbox-inline">
                    <label>
                        <input type="checkbox" name="hasMenopausa" id="hasMenopausa" value="1" />&nbsp;Menopausa
                    </label>
                </div>
                <div class="checkbox-inline">
                    <label>
                        <input type="checkbox" name="hasOutros" id="hasOutros" value="1"  />&nbsp;Outros
                    </label>
                </div>

            </div>
            <div class="form-group" style="text-align: center;">
                <div class="checkbox-inline">
                    <label>
                        <input type="checkbox" name="hasHipotiroidismo" id="hasHipotiroidismo" value="1"  />&nbsp;Hipotiroidismo
                    </label>
                </div>
                <div class="checkbox-inline">
                    <label>
                        <input type="checkbox" name="hasColesterol" id="hasColesterol" value="1"  />&nbsp;Colesterol
                    </label>
                </div>
                <div class="checkbox-inline">
                    <label>
                        <input type="checkbox" name="hasFigado" id="hasFigado" value="1"  />&nbsp;Fígado
                    </label>
                </div>
            </div>
        </div>
    </div>
    <div style="clear: both; width: 100%; height: 40px"></div>
    <div class="panel panel-info">
        <div class="panel-heading">
            <h3 class="panel-title">Consistência das fezes
            </h3>
        </div>
        <div class="panel-body">

            <div class="form-group" style="text-align: center;">
                <label>
                    <input type="radio" name="ConsistenciaFecalId" id="ConsistenciaFecalId_1" value="1"  />&nbsp;Normal/Pastoso&nbsp;<input type="radio" name="ConsistenciaFecalId" id="ConsistenciaFecalId_2" value="2"  />&nbsp;Ressecado&nbsp;<input type="radio" name="ConsistenciaFecalId" id="ConsistenciaFecalId_3" value="3"  />&nbsp;Líquido
                </label>
            </div>
        </div>
    </div>
    <div style="clear: both; width: 100%; height: 40px"></div>
    <div class="panel panel-default">
        <div class="panel-body">

            <div class="form-group">
                <label>Nível de atividade:</label>
                
                <!--<input type="text" id="NivelDeAtividade" name="NivelDeAtividade" class="form-control" value="" /> -->
                <select id="NivelDeAtividade" name="NivelDeAtividade" class="form-control"> 
                    <option value="0"  > -- Selecione nível de atividade -- </option>
                    <option value="1" >Muito leve</option>
                    <option value="2" >Leve</option>
                    <option value="3" >Moderado</option>
                    <option value="4" >Pesado</option>
                    <option value="5" >Muito pesado</option>
                </select>    
                
            </div>

            <div class="form-group">
                <label>Descreva:</label>
                <input type="text" id="Obs" name="Obs" class="form-control" value="" />
            </div>
        </div>
    </div>
    <div style="clear: both; width: 100%; height: 40px"></div>
    <div class="panel panel-info">
        <div class="panel-heading">
            <h3 class="panel-title">Assinale sim ou não:
            </h3>
        </div>
        <div class="panel-body">
            <div class="inner-title">Na sua família há tendência ou antecedentes de:</div>
            <div class="form-group">
                <ul class="familia">
                    <li>
                        <b>Obesidade:</b>&nbsp;<input type="radio" name="familiaHasObesidade" id="familiaHasObesidade_true" value="1"  />&nbsp;Sim&nbsp;<input type="radio" name="familiaHasObesidade" id="familiaHasObesidade_false" value="0"/>&nbsp;Não
                    </li>
                    <li>
                        <b>Doenças renais:</b>&nbsp;<input type="radio" name="familiaHasDoencaRenal" id="familiaHasDoencaRenal_true" value="1"  />&nbsp;Sim&nbsp;<input type="radio" name="familiaHasDoencaRenal" id="familiaHasDoencaRenal_false" value="0"  />&nbsp;Não
                    </li>
                    <li>
                        <b>Hipertensão:</b>&nbsp;<input type="radio" name="familiaHasHipertensao" id="familiaHasHipertensao_true" value="1"  />&nbsp;Sim&nbsp;<input type="radio" name="familiaHasHipertensao" id="familiaHasHipertensao_false" value="0"  />&nbsp;Não
                    </li>
                </ul>
                <ul class="familia">
                    <li>
                        <b>Colesterol? Doenças no fígado:</b>&nbsp;<input type="radio" name="familiaHasColesterolGorduraFigado" id="familiaHasColesterolGorduraFigado_true" value="1"  />&nbsp;Sim&nbsp;<input type="radio" name="familiaHasColesterolGorduraFigado" id="familiaHasColesterolGorduraFigado_false" value="0" />&nbsp;Não
                    </li>
                    <li>
                        <b>Hipotiroidismo:</b>&nbsp;<input type="radio" name="familiaHasHipotiroidismo" id="familiaHasHipotiroidismo_true" value="1" />&nbsp;Sim&nbsp;<input type="radio" name="familiaHasHipotiroidismo" id="familiaHasHipotiroidismo_false" value="0" />&nbsp;Não
                    </li>
                </ul>
                <ul class="familia">
                    <li>
                        <b>Alteração de triglicérides:</b>&nbsp;<input type="radio" name="familiaHasAlteracaoGlicerides" id="familiaHasAlteracaoGlicerides_true" value="1"  />&nbsp;Sim&nbsp;<input type="radio" name="familiaHasAlteracaoGlicerides" id="familiaHasAlteracaoGlicerides_false" value="0"  />&nbsp;Não
                    </li>
                </ul>
            </div>
            <div class="form-group section2">
                <ul class="familia">
                    <li>
                        <b>Já sofreu bulimia?</b>&nbsp;<input type="radio" name="familiaHasBulimia" id="familiaHasBulimia_true" value="1"  />&nbsp;Sim&nbsp;<input type="radio" name="familiaHasBulimia" id="familiaHasBulimia_false" value="0" />&nbsp;Não
                    </li>
                </ul>
                <ul class="familia">
                    <li>
                        <b>Compulsão alimentar:</b>&nbsp;<input type="radio" name="familiaHasCompulsaoAlimentar" id="familiaHasCompulsaoAlimentar_true" value="1" />&nbsp;Sim&nbsp;<input type="radio" name="familiaHasCompulsaoAlimentar" id="familiaHasCompulsaoAlimentar_false" value="0" />&nbsp;Não
                    </li>
                    <li><span class="doceSalgado" style="display: none">&nbsp;<input type="checkbox" name="hasCompulsaoDoce" id="hasCompulsaoDoce" value="1"  /> &nbsp;Doce&nbsp;<input type="checkbox" name="hasCompulsaoSalgado" id="hasCompulsaoSalgado" value="1"  />&nbsp;Salgado</span>
                    </li>
                </ul>
                <ul class="familia">
                    <li>
                        <b>Vícios:</b>&nbsp;<input type="radio" name="hasVicio" id="hasVicio_true" value="1"  />&nbsp;Sim&nbsp;<input type="radio" name="hasVicio" id="hasVicio_false" value="0"  />&nbsp;Não
                    </li>
                    <li><span class="tipoVicio" style="display: none">&nbsp;<input type="checkbox" name="hasAlcool" id="hasAlcool" value="1" />&nbsp;Álcool&nbsp;<input type="checkbox" name="hasTabagismo" id="hasTabagismo" value="1"  />&nbsp;Tabagismo&nbsp;<input type="checkbox" name="hasOutros" id="hasOutros" value="1" />&nbsp;Outros</span>
                    </li>
                </ul>
                <ul class="familia">
                    <li>
                        <b>Intolerancia á lactose:</b>&nbsp;<input type="radio" name="hasIntoleranciaLactose" id="hasIntoleranciaLactose_true" value="1"  />&nbsp;Sim&nbsp;<input type="radio" name="hasIntoleranciaLactose" id="hasIntoleranciaLactose_false" value="0" />&nbsp;Não
                    </li>
                    <li>
                        <b>Intolerancia ao glúten:</b>&nbsp;<input type="radio" name="hasIntoleranciaGluten" id="hasIntoleranciaGluten_true" value="1" />&nbsp;Sim&nbsp;<input type="radio" name="hasIntoleranciaGluten" id="hasIntoleranciaGluten_false" value="0"  />&nbsp;Não
                    </li>
                </ul>
                <div class="form-group section2">
                    <label>Por favor, descreva:</label>
                    <input type="text" name="FamiliaObs" id="FamiliaObs" class="form-control" value="" />
                </div>
            </div>
        </div>
    </div>
    <div style="clear: both; width: 100%; height: 40px"></div>

    <div class="panel">
        <div class="form-group">
            <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-ok"></span>&nbsp;Salvar</button>
            <a href="javascript:history.back();" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span>&nbsp;Cancelar</a>
        </div>
    </div>
</form>    
@endsection