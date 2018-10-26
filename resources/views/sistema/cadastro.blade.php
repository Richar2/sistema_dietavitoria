@extends(template.template.blade.php)

@section('content')
<div class="topo alert alert-info" role="alert">
    <?=$tituloAcao?>
    <span style="float:right;"><a href="javascript:history.back()" style="color:white;text-decoration:none;font-size:15px;font-weight:bold">Voltar</a></span>
</div>

<form action="action/alunos_action.php" method="post">
<input type="hidden" name="AlunoId" id="AlunoId" value="<?=@$AlunoId;?>" />    
<input type="hidden" name="familiaId" id="familiaId" value="<?=@$aluno->familiaid;?>" />    
<input type="hidden" name="tipoCompulsaoId" id="tipoCompulsaoId" value="<?=@$aluno->tipocompulsaoid;?>" />    
<input type="hidden" name="vicioId" id="vicioId" value="<?=@$aluno->vicioid;?>" />    
<input type="hidden" name="clinicoId" id="clinicoId" value="<?=@$aluno->clinicoid;?>" />    

    <div class="panel panel-info">
        <div class="panel-body">
            <div class="form-group">
                <label>Nome:</label>
                <input type="text" name="Nome" id="Nome" class="form-control" value="<?=@$aluno->nome;?>" />
            </div>

            <div class="form-group">
                <label>Sobrenome:</label>
                <input type="text" id="Sobrenome" name="Sobrenome" class="form-control" value="<?=@$aluno->sobrenome;?>" />             
            </div>

            <div class="form-group">
                <label>Sexo:</label>
                <select id="Sexo" name="Sexo" class="form-control">             
                    <option value="" <?=strlen(@$aluno->sexo) == 0 ? 'selected' : '' ?>> -- </option>
                    <option value="f" <?=@$aluno->sexo == 'f' ? 'selected' : '' ?>>Feminino</option>
                    <option value="m" <?=@$aluno->sexo == 'm' ? 'selected' : '' ?>>Masculino</option>                    
                </select>    
            </div>

            <div class="form-group">
                <label>Profissao:</label>
                <input type="text" id="Profissao" name="Profissao" class="form-control" value="<?=@$aluno->profissao;?>" />             
            </div>

            <div class="form-group">
                <label>Cpf:</label>
                <input type="text" id="Cpf" name="Cpf" class="form-control" value="<?=@$aluno->cpf;?>" /> 
            </div>

            <div class="form-group">
                <label>Data de Nascimento:</label>
                <input type="text" id="DataNascimento" name="DataNascimento" class="form-control" value="<?=formataData(@$aluno->datanascimento);?>" /> 
            </div>

            <div class="form-group">
                <label>Email:</label>
                <input type="text" id="Email" name="Email" class="form-control" value="<?=@$aluno->email;?>" /> 
            </div>

            <div class="form-group">
                <label>Endereço:</label>
                <input type="text" id="Endereco" name="Endereco" class="form-control" value="<?=@$aluno->endereco;?>" /> 
            </div>

            <div class="form-group">
                <label>Número:</label>
                <input type="text" id="Numero" name="Numero" class="form-control" value="<?=@$aluno->numero;?>" /> 
            </div>

            <div class="form-group">
                <label>Complemento:</label>
                <input type="text" id="Complemento" name="Complemento" class="form-control" value="<?=@$aluno->complemento;?>" /> 
            </div>

            <div class="form-group">
                <label>Cep:</label>
                <input type="text" id="Cep" name="Cep" class="form-control" value="<?=@$aluno->cep;?>" /> 
            </div>

            <div class="form-group">
                <label>Bairro:</label>
                <input type="text" id="Bairro" name="Bairro" class="form-control" value="<?=@$aluno->bairro;?>" /> 
            </div>

            <div class="form-group">
                <label>Cidade:</label>
                <input type="text" id="Cidade" name="Cidade" class="form-control" value="<?=@$aluno->cidade;?>" /> 
            </div>

            <div class="form-group">
                <label>Telefone:</label>
                <input type="text" id="Telefone" name="Telefone" class="form-control" value="<?=@$aluno->telefone;?>" /> 
            </div>

            <div class="form-group">
                <label>Celular:</label>
                <input type="text" id="Celular" name="Celular" class="form-control" value="<?=@$aluno->celular;?>" /> 
            </div>

            <div class="form-group">
                <label>Quantidade de filhos:</label>
                <input type="text" id="QuantidadeFilhos" name="QuantidadeFilhos" class="form-control" value="<?=@$aluno->quantidadefilhos;?>" /> 
            </div>

            <div class="form-group">
                <label>Altura:</label>
                <input type="text" id="Altura" name="Altura" class="form-control" value="<?=formataDecimal(@$aluno->altura);?>" /> 
            </div>
            
            <div class="form-group">
                <label>Peso Inicial:</label>
                <input type="text" id="Peso" name="Peso" class="form-control" value="<?=formataDecimal(@$aluno->peso);?>" /> 
            </div>

            <div class="form-group">
                <label>Peso Ideal:</label>
                <input type="text" id="PesoIdeal" name="PesoIdeal" class="form-control" value="<?=formataDecimal(@$aluno->pesoideal);?>" /> 
            </div>

            <div class="form-group">
                <label>Cintura(cm):</label>
                <input type="text" id="Cintura" name="Cintura" class="form-control" value="<?=formataDecimal(@$aluno->cintura);?>" /> 
            </div>

            <div class="form-group">
                <label>Quadril(cm):</label>
                <input type="text" id="Quadril" name="Quadril" class="form-control" value="<?=formataDecimal(@$aluno->quadril);?>" /> 
            </div>

             <div class="form-group">
                <label>Coxas(cm):</label>
                <input type="text" id="Coxa" name="Coxa" class="form-control" value="<?=formataDecimal(@$aluno->coxa);?>" /> 
            </div>

            <div class="form-group">
                <label>Usuário Facebook:</label>
                <input type="text" id="UserFacebook" name="UserFacebook" class="form-control" value="<?=@$aluno->userfacebook;?>" /> 
            </div>

            <div class="form-group">
                <label>Turma:</label>
              
            <select name="TurmaId" id="TurmaId" class="form-control">
            <?php 
                $selected = "";
                foreach ($turmaBo->getActiveTurmasDropDown() as $turma): 
                    if($turma->id == @$aluno->turmaid){
                        $selected = "selected";
                    }        
            ?>
                <option value="<?=$turma->id;?>" <?=$selected?>><?=$turma->nome;?></option>
            <?php 
            $selected = "";
            endforeach;
            ?>
            </select>

            </div>

            <div class="form-group">
                <label>Data da Primeira Aula:</label>
                <input type="text" id="DataPrimeiraAula" name="DataPrimeiraAula" class="form-control" value="<?=formataData(@$aluno->dataprimeiraaula);?>" /> 
            </div>

            <div class="form-group">
                <label>Ativo:</label>
                
            <select name="Ativo" id="Ativo" class="form-control">
                <option value="0" <?=@$aluno->ativoid == 0 ? "selected" : "" ?>>Inativo</option>
                <option value="1" <?=@$aluno->ativoid == 1 || strlen(@$aluno->ativoid) == 0 ? "selected" : "" ?>>Ativo</option>
                
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
                        <input type="checkbox" name="hasAnsiedade" id="hasAnsiedade" value="1" <?=@$clinico->hasAnsiedade == 1 ? "checked" : "" ?> />&nbsp;Ansiedade
                    </label>
                </div>
                <div class="checkbox-inline">
                    <label>
                        <input type="checkbox" name="hasInsonia" id="hasInsonia" value="1" <?=@$clinico->hasInsonia == 1 ? "checked" : "" ?> />&nbsp;Insonia
                    </label>
                </div>
                <div class="checkbox-inline">
                    <label>
                        <input type="checkbox" name="hasHipertensao" id="hasHipertensao" value="1" <?=@$clinico->hasHipertensao == 1 ? "checked" : "" ?> />&nbsp;Hipertensão
                    </label>
                </div>
                <div class="checkbox-inline">
                    <label>
                        <input type="checkbox" name="hasDiabetes" id="hasDiabetes" value="1" <?=@$clinico->hasDiabetes == 1 ? "checked" : "" ?> />&nbsp;Diabetes
                    </label>
                </div>
                <div class="checkbox-inline">
                    <label>
                        <input type="checkbox" name="hasAlergias" id="hasAlergias" value="1" <?=@$clinico->hasAlergias == 1 ? "checked" : "" ?> />&nbsp;Alergias
                    </label>
                </div>
            </div>
            <div class="form-group" style="text-align: center;">
                <div class="checkbox-inline">
                    <label>
                        <input type="checkbox" name="hasDisturbiosOncologicos" id="hasDisturbiosOncologicos" value="1" <?=@$clinico->hasDisturbiosOncologicos == 1 ? "checked" : "" ?> />&nbsp;Disturbios Oncologicos
                    </label>
                </div>
                <div class="checkbox-inline">
                    <label>
                        <input type="checkbox" name="hasProblemasRenais" id="hasProblemasRenais" value="1" <?=@$clinico->hasProblemasRenais == 1 ? "checked" : "" ?> />&nbsp;Problemas Renais
                    </label>
                </div>
                <div class="checkbox-inline">
                    <label>
                        <input type="checkbox" name="hasMenopausa" id="hasMenopausa" value="1" <?=@$clinico->hasMenopausa == 1 ? "checked" : "" ?> />&nbsp;Menopausa
                    </label>
                </div>
                <div class="checkbox-inline">
                    <label>
                        <input type="checkbox" name="hasOutros" id="hasOutros" value="1" <?=@$clinico->hasOutros == 1 ? "checked" : "" ?> />&nbsp;Outros
                    </label>
                </div>

            </div>
            <div class="form-group" style="text-align: center;">
                <div class="checkbox-inline">
                    <label>
                        <input type="checkbox" name="hasHipotiroidismo" id="hasHipotiroidismo" value="1" <?=@$clinico->hasHipotiroidismo == 1 ? "checked" : "" ?> />&nbsp;Hipotiroidismo
                    </label>
                </div>
                <div class="checkbox-inline">
                    <label>
                        <input type="checkbox" name="hasColesterol" id="hasColesterol" value="1" <?=@$clinico->hasColesterol == 1 ? "checked" : "" ?> />&nbsp;Colesterol
                    </label>
                </div>
                <div class="checkbox-inline">
                    <label>
                        <input type="checkbox" name="hasFigado" id="hasFigado" value="1" <?=@$clinico->hasFigado == 1 ? "checked" : "" ?> />&nbsp;Fígado
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
                    <input type="radio" name="ConsistenciaFecalId" id="ConsistenciaFecalId_1" value="1" <?=@$aluno->consistenciafecalid == 1 ? "checked" : "" ?> />&nbsp;Normal/Pastoso&nbsp;<input type="radio" name="ConsistenciaFecalId" id="ConsistenciaFecalId_2" value="2" <?=@$aluno->consistenciafecalid == 2 ? "checked" : "" ?> />&nbsp;Ressecado&nbsp;<input type="radio" name="ConsistenciaFecalId" id="ConsistenciaFecalId_3" value="3" <?=@$aluno->consistenciafecalid == 3 ? "checked" : "" ?> />&nbsp;Líquido
                </label>
            </div>
        </div>
    </div>
    <div style="clear: both; width: 100%; height: 40px"></div>
    <div class="panel panel-default">
        <div class="panel-body">

            <div class="form-group">
                <label>Nível de atividade:</label>
                
                <!--<input type="text" id="NivelDeAtividade" name="NivelDeAtividade" class="form-control" value="<?=@$aluno->niveldeatividade; ?>" /> -->
                <select id="NivelDeAtividade" name="NivelDeAtividade" class="form-control"> 
                    <option value="0" <?=strlen(@$aluno->cdniveldeatividade) == 0 || @$aluno->cdniveldeatividade == 0 ? "selected" : ""?> > -- Selecione nível de atividade -- </option>
                    <option value="1" <?=@$aluno->niveldeatividade == 1 ? "selected" : ""?>>Muito leve</option>
                    <option value="2" <?=@$aluno->niveldeatividade == 2 ? "selected" : ""?>>Leve</option>
                    <option value="3" <?=@$aluno->niveldeatividade == 3 ? "selected" : ""?>>Moderado</option>
                    <option value="4" <?=@$aluno->niveldeatividade == 4 ? "selected" : ""?>>Pesado</option>
                    <option value="5" <?=@$aluno->niveldeatividade == 5 ? "selected" : ""?>>Muito pesado</option>
                </select>    
                
            </div>

            <div class="form-group">
                <label>Descreva:</label>
                <input type="text" id="Obs" name="Obs" class="form-control" value="<?=@$aluno->obs ;?>" />
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
                        <b>Obesidade:</b>&nbsp;<input type="radio" name="familiaHasObesidade" id="familiaHasObesidade_true" value="1" <?=@$familia->hasobesidade == 1 ? "checked" : "" ?> />&nbsp;Sim&nbsp;<input type="radio" name="familiaHasObesidade" id="familiaHasObesidade_false" value="0" <?=@$familia->hasobesidade == 0 ? "checked" : "" ?> />&nbsp;Não
                    </li>
                    <li>
                        <b>Doenças renais:</b>&nbsp;<input type="radio" name="familiaHasDoencaRenal" id="familiaHasDoencaRenal_true" value="1" <?=@$familia->hasdoencarenal == 1 ? "checked" : "" ?> />&nbsp;Sim&nbsp;<input type="radio" name="familiaHasDoencaRenal" id="familiaHasDoencaRenal_false" value="0" <?=@$familia->hasdoencarenal == 0 ? "checked" : "" ?> />&nbsp;Não
                    </li>
                    <li>
                        <b>Hipertensão:</b>&nbsp;<input type="radio" name="familiaHasHipertensao" id="familiaHasHipertensao_true" value="1" <?=@$familia->hashipertensao == 1 ? "checked" : "" ?> />&nbsp;Sim&nbsp;<input type="radio" name="familiaHasHipertensao" id="familiaHasHipertensao_false" value="0" <?=@$familia->hashipertensao == 0 ? "checked" : "" ?> />&nbsp;Não
                    </li>
                </ul>
                <ul class="familia">
                    <li>
                        <b>Colesterol? Doenças no fígado:</b>&nbsp;<input type="radio" name="familiaHasColesterolGorduraFigado" id="familiaHasColesterolGorduraFigado_true" value="1" <?=@$familia->hascolesterolgordurafigado == 1 ? "checked" : "" ?> />&nbsp;Sim&nbsp;<input type="radio" name="familiaHasColesterolGorduraFigado" id="familiaHasColesterolGorduraFigado_false" value="0" <?=@$familia->hascolesterolgordurafigado == 0 ? "checked" : "" ?> />&nbsp;Não
                    </li>
                    <li>
                        <b>Hipotiroidismo:</b>&nbsp;<input type="radio" name="familiaHasHipotiroidismo" id="familiaHasHipotiroidismo_true" value="1" <?=@$familia->hashipotiroidismo == 1 ? "checked" : "" ?> />&nbsp;Sim&nbsp;<input type="radio" name="familiaHasHipotiroidismo" id="familiaHasHipotiroidismo_false" value="0" <?=@$familia->hashipotiroidismo == 0 ? "checked" : "" ?> />&nbsp;Não
                    </li>
                </ul>
                <ul class="familia">
                    <li>
                        <b>Alteração de triglicérides:</b>&nbsp;<input type="radio" name="familiaHasAlteracaoGlicerides" id="familiaHasAlteracaoGlicerides_true" value="1" <?=@$familia->hasalteracaoglicerides == 1 ? "checked" : "" ?> />&nbsp;Sim&nbsp;<input type="radio" name="familiaHasAlteracaoGlicerides" id="familiaHasAlteracaoGlicerides_false" value="0" <?=@$familia->hasalteracaoglicerides == 0 ? "checked" : "" ?> />&nbsp;Não
                    </li>
                </ul>
            </div>
            <div class="form-group section2">
                <ul class="familia">
                    <li>
                        <b>Já sofreu bulimia?</b>&nbsp;<input type="radio" name="familiaHasBulimia" id="familiaHasBulimia_true" value="1" <?=@$familia->hasbulimia == 1 ? "checked" : "" ?> />&nbsp;Sim&nbsp;<input type="radio" name="familiaHasBulimia" id="familiaHasBulimia_false" value="0" <?=@$familia->hasbulimia == 0 ? "checked" : "" ?> />&nbsp;Não
                    </li>
                </ul>
                <ul class="familia">
                    <li>
                        <b>Compulsão alimentar:</b>&nbsp;<input type="radio" name="familiaHasCompulsaoAlimentar" id="familiaHasCompulsaoAlimentar_true" value="1" <?=@$familia->hascompulsaoalimentar == 1 ? "checked" : "" ?> />&nbsp;Sim&nbsp;<input type="radio" name="familiaHasCompulsaoAlimentar" id="familiaHasCompulsaoAlimentar_false" value="0" <?=@$familia->hascompulsaoalimentar == 0 ? "checked" : "" ?> />&nbsp;Não
                    </li>
                    <li><span class="doceSalgado" style="display: none">&nbsp;<input type="checkbox" name="hasCompulsaoDoce" id="hasCompulsaoDoce" value="1" <?=@$tipocompulsao->hascompulsaodoce == 1 ? "checked" : "" ?> /> &nbsp;Doce&nbsp;<input type="checkbox" name="hasCompulsaoSalgado" id="hasCompulsaoSalgado" value="1" <?=@$tipocompulsao->hascompulsaosalgado == 1 ? "checked" : "" ?> />&nbsp;Salgado</span>
                    </li>
                </ul>
                <ul class="familia">
                    <li>
                        <b>Vícios:</b>&nbsp;<input type="radio" name="hasVicio" id="hasVicio_true" value="1" <?=@$aluno->hasvicio == 1 ? "checked" : "" ?> />&nbsp;Sim&nbsp;<input type="radio" name="hasVicio" id="hasVicio_false" value="0" <?=@$aluno->hasvicio == 0 ? "checked" : "" ?> />&nbsp;Não
                    </li>
                    <li><span class="tipoVicio" style="display: none">&nbsp;<input type="checkbox" name="hasAlcool" id="hasAlcool" value="1" <?=@$tipovicio->hasalcool == 1 ? "checked" : "" ?> />&nbsp;Álcool&nbsp;<input type="checkbox" name="hasTabagismo" id="hasTabagismo" value="1" <?=@$tipovicio->hastabagismo == 1 ? "checked" : "" ?> />&nbsp;Tabagismo&nbsp;<input type="checkbox" name="hasOutros" id="hasOutros" value="1" <?=@$tipovicio->hasoutros == 1 ? "checked" : "" ?> />&nbsp;Outros</span>
                    </li>
                </ul>
                <ul class="familia">
                    <li>
                        <b>Intolerancia á lactose:</b>&nbsp;<input type="radio" name="hasIntoleranciaLactose" id="hasIntoleranciaLactose_true" value="1" <?=@$familia->hasintolerancialactose == 1 ? "checked" : "" ?> />&nbsp;Sim&nbsp;<input type="radio" name="hasIntoleranciaLactose" id="hasIntoleranciaLactose_false" value="0" <?=@$familia->hasintolerancialactose == 0 ? "checked" : "" ?> />&nbsp;Não
                    </li>
                    <li>
                        <b>Intolerancia ao glúten:</b>&nbsp;<input type="radio" name="hasIntoleranciaGluten" id="hasIntoleranciaGluten_true" value="1" <?=@$familia->hasintoleranciagluten == 1 ? "checked" : "" ?> />&nbsp;Sim&nbsp;<input type="radio" name="hasIntoleranciaGluten" id="hasIntoleranciaGluten_false" value="0" <?=@$familia->hasintoleranciagluten == 0 ? "checked" : "" ?> />&nbsp;Não
                    </li>
                </ul>
                <div class="form-group section2">
                    <label>Por favor, descreva:</label>
                    <input type="text" name="FamiliaObs" id="FamiliaObs" class="form-control" value="<?=@$familia->obs;?>" />
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