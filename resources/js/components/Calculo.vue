<template>
     <input type="hidden" name="alunoId" id="alunoId" value="" />
        <div class="topo alert alert-info" role="alert">
    
            <span style="float:right;"><a href="" style="color:white;text-decoration:none;font-size:15px;font-weight:bold">Voltar</a></span>
        </div>
        <div class="panel panel-info" id="dados_aluno" style="margin-bottom:20px">
            <div class="panel-body">
                <div style="width:100%;position:relative;float:left">
    
                    <div class="form-group" style="width:640px;float:left;margin-right:20px">
                        <label for="Nome">Nome</label>
                    <input class="form-control" type="text" name="Nome" id="nome" value="{{$aluno->nome}}" disabled />
                    </div>
                </div>
    
                <div style="width:100%;position:relative;float:left">
    
                    <div class="form-group" style="width:200px;float:left;margin-right:20px">
                        <label for="DataPrimeira">Data primeira</label>
                        <input class="form-control" type="text" name="data_primeira" id="DataPrimeiraAula" value="{{$aluno->DataPrimeiraAula}}" disabled />
                    </div>
    
                    <div class="form-group" style="width:200px;float:left;margin-right:20px">
                        <label for="Turma">Turma</label>
                        <input class="form-control" type="text" name="Turma" id="Turma" value="{{$turmaAlu->tnome}}" disabled />
                    </div>
    
                    <div class="form-group" style="width:200px;float:left;margin-right:20px">
                        <label for="PesoInicial">Peso Inicial (kg)</label>
                        <input class="form-control" type="text" name="peso_inicial" id="peso_inicial" value="{{$aluno->Peso}}" disabled />
                    </div>
                </div>
                <div style="width:100%;position:relative;float:left">
    
                    <div class="form-group" style="width:200px;float:left;margin-right:20px">
                        <label for="PesoIdeal">Peso Ideal (kg)</label>
                        <input class="form-control" type="text" name="peso_ideal" id="peso_ideal" value="{{$aluno->PesoIdeal}}" disabled />
                    </div>
    
                    <div class="form-group" style="width:200px;float:left;margin-right:20px">
                        <label for="Coxas">Coxas (cm)</label>
                        <input class="form-control" type="text" name="coxa" id="Coxa" value="{{$aluno->Coxa}}" disabled />
                    </div>
    
                    <div class="form-group" style="width:200px;float:left;margin-right:20px">
                        <label for="Altura">Altura (m)</label>
                        <input class="form-control" type="text" name="Altura" id="Altura" value="{{$aluno->Altura}}" disabled />
                    </div>
                </div>
    
                <div style="width:100%;position:relative;float:left;text-align:text">
                    <div style="margin:0 auto">
    
                        <div class="form-group" style="width:200px;float:left;margin-right:20px">
                            <label for="A2">Quadril (cm)</label>
                            <input class="form-control" type="text" value="{{$aluno->Quadril}}" disabled />
                        </div>
    
                        <div class="form-group" style="width:200px;float:left;margin-right:20px">
                            <label for="A2">Cintura</label>
                            <input class="form-control" type="text" value="{{$aluno->Cintura}}" disabled />
                        </div>
    
                        <div class="form-group" style="width:200px;float:left;margin-right:20px">
                            <label for="A2">A²</label>
                            <input class="form-control" type="text" name="A2" id="A2" value="" disabled />
                        </div>
                    </div>    
                </div>
    
                <div style="width:100%;position:relative;float:left">
    
                    <div class="form-group" style="width:200px;float:left;margin-right:20px">
                        <label for="PesoIdeal">Facebook</label>
                        <input class="form-control" type="text" name="facebook" id="facebook" value="{{$aluno->userfacebook}}" disabled />
                    </div>
    
                    <div class="form-group" style="width:200px;float:left;margin-right:20px">
                        <label for="Horario">Horario</label>
                        <input class="form-control" type="text" name="horario" id="horario" value="{{$turmaAlu->Horario}}" disabled />
                    </div>
    
    
                    <div class="form-group" style="width:200px;float:left;margin-right:20px">
                        <label for="DataNascimento">Data de Nascimento</label>
                        <input class="form-control" type="text" name="DataNascimento" id="DataNascimento" value="{{$aluno->DataNascimento}}" disabled />
                    </div>
                </div>
    
            </div>           
        </div>
    
        <div class="panel panel-info" style="margin-bottom:20px">
            <div class="panel-body">
    
                <div style="width:100%;position:relative;float:left">
    
                    <div class="form-group" style="width:140px;float:left;margin-right:20px">
                        <label for="Peso">Data</label>
                        <input class="form-control" type="text" name="data" id="data" value="" />
                    </div>
    
                    <div class="form-group" style="width:140px;float:left;margin-right:20px">
                        <label for="Peso">Peso</label>
                        <input class="form-control" type="text" name="Peso" id="Peso" value="" />
                    </div>
    
                    <div class="form-group" style="width:140px;float:left;margin-right:20px">
                        <label for="Peso">+/-</label>
                        <input class="form-control" type="text" name="diff" id="diff" value="" readonly="readonly" />
                    </div>
    
                    <div class="form-group" style="width:140px;float:left;margin-right:20px">
                        <label for="Peso">Total</label>
                        <input class="form-control" type="text" name="total" id="total" value="" readonly="readonly" />
                    </div>
                </div>
    
                <div style="width:100%;position:relative;float:left">
                    <div class="form-group" style="width:140px;float:left;margin-right:20px">
                        <label for="Coxa">Coxas</label>
                        <input class="form-control" type="text" name="Coxa" id="Coxa" value="" />
                    </div>  
    
                    <div class="form-group" style="width:300px;float:left;margin-right:20px">
                        <label for="Peso">+/-</label>
                        <input class="form-control" type="text" name="diffCoxa" id="diffCoxa" value="" readonly="readonly" />
                    </div>
    
                    <div class="form-group" style="width:140px;float:left;margin-right:20px">
                        <label for="Peso">Total</label>
                        <input class="form-control" type="text" name="totalCoxa" id="totalCoxa" value="" readonly="readonly" />
                    </div>      
                </div>
    
                <div style="width:100%;position:relative;float:left">
    
                    <div class="form-group" style="width:140px;float:left;margin-right:20px">
                        <label for="Qudril">Quadril</label>
                        <input class="form-control" type="text" name="Quadril" id="Quadril" value="" />
                    </div>
    
                    <div class="form-group" style="width:300px;float:left;margin-right:20px">
                        <label for="Peso">+/-</label>
                        <input class="form-control" type="text" name="diffQuadril" id="diffQuadril" value="" readonly="readonly" />
                    </div>
    
                    <div class="form-group" style="width:140px;float:left;margin-right:20px">
                        <label for="Peso">Total</label>
                        <input class="form-control" type="text" name="totalQuadril" id="totalQuadril" value="" readonly="readonly" />
                    </div>
    
    
                </div>
    
                <div style="width:100%;position:relative;float:left">
    
                    <div class="form-group" style="width:140px;float:left;margin-right:20px">
                        <label for="Peso">Cintura</label>
                        <input class="form-control" type="text" name="cintura" id="Cintura" value="" />
                    </div>
    
                    <div class="form-group" style="width:300px;float:left;margin-right:20px">
                        <label for="Peso">+/-</label>
                        <input class="form-control" type="text" name="diffCintura" id="diffCintura" value="" readonly="readonly" />
                    </div>
    
                    <div class="form-group" style="width:140px;float:left;margin-right:20px">
                        <label for="Peso">Total</label>
                        <input class="form-control" type="text" name="totalCintura" id="totalCintura" value="" readonly="readonly" />
                    </div>
    
                </div>
    
                <div style="width:100%;position:relative;float:left">
    
                    <div class="form-group" style="width:300px;float:left;margin-right:20px">
                        <label for="geb">GEB</label>
                        <input class="form-control" type="text" name="geb" id="inputGEB"  value="" disabled/>
                    </div>
    
                    <div class="form-group" style="width:300px;float:left;margin-right:20px">
                        <label for="get">GET</label>
                        <input class="form-control" type="text" name="get" id="inputGET"  value="" disabled/>
                    </div>
    
                </div>
    
                            <div style="width:100%;position:relative;float:left">
    
                                <div class="form-group" style="width:620px;float:left">
                                    <label for="imc">IMC</label>
                                    <input class="form-control" type="text" name="imc" id="inputIMC"  value="" disabled/>
                                </div>
                            </div>
    
                              <span id="mensIMC"></span>
    
                            <div class="form-group" >
                              <a href="javascript:void(0);" onclick="javascript:addAcompanhamento()" class="btn btn-success"><span class="glyphicon glyphicon-ok"></span>&nbsp;Adicionar</a>
                              <a href="javascript:history.back();" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span>&nbsp;Voltar</a>
                            </div>
    
            </div>
        </div>
         </form>
</template>

<script>
       import axios from 'axios'
    export default{
      data(){
          return{
              dados_aluno:[],
          }

    },      
    created:function(){
        this.getAluno();
    },
    methods: {
        getAluno:function () {
            var urlAluno= 'aluno';
            axios.get(urlAluno).then(response =>{
                this.dados_aluno = response.data
            });
        }
      } 
   } 
    
</script>
