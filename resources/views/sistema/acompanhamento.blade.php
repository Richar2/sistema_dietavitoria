

@extends('templates.template')

@section('content')

<h1>Acompanhamento</h1>


<form action="" method="post" onsubmit=" false">
   <div id="app">
                        <acompanhamento></acompanhamento>
   </div>

    <!-- INICIO DO HISTORICO DA FICHA DE ACOMPANHAMENTO-->
    
        <div class="topo alert alert-info" role="alert">Histórico</div>
    
    <span id="hist">
       
        <div class="panel panel-info" style="margin-bottom:20px" id="hist_">
            <div class="panel-body">

                <div style="width:100%;position:relative;float:left">
        
                    <div class="form-group" style="width:140px;float:left;margin-right:20px">
                        <label for="Peso">Data</label>
                        <input class="form-control" type="text" name="dataHistorico" class="dataHistorico" value="" disabled/>
                    </div>

                    <div class="form-group" style="width:140px;float:left;margin-right:20px">
                        <label for="Peso">Peso (kg)</label>
                        <input class="form-control" type="text" name="PesoHistorico" class="Peso" value="" disabled/>
                    </div>

                    <div class="form-group" style="width:140px;float:left;margin-right:20px">
                        <label for="Peso">+/-</label>
                        <input class="form-control" type="text" name="diffHistorico" class="diff" value="" disabled/>
                    </div>

                    <div class="form-group" style="width:140px;float:left;margin-right:20px">
                        <label for="Peso">Total</label>
                        <input class="form-control" type="text" name="totalHistorico" class="total" value="" disabled />
                    </div>
                </div>
                
                <!-- -->

                <div style="width:100%;position:relative;float:left">
                    <div class="form-group" style="width:140px;float:left;margin-right:20px">
                        <label for="Coxa">Coxas</label>
                        <input class="form-control" type="text" name="CoxaHistorico" class="Coxa" value= "" disabled/>
                    </div>

                    <div class="form-group" style="width:300px;float:left;margin-right:20px">
                        <label for="Peso">+/-</label>
                        <input class="form-control" type="text" name="diffCoxaHistorico" class="diffCoxa" value=""disabled/>
                    </div>

                    <div class="form-group" style="width:140px;float:left;margin-right:20px">
                        <label for="Peso">Total</label>
                        <input class="form-control" type="text" name="totalCoxaHistorico" class="totalCoxa" value="" disabled />
                    </div>
                    
                </div>

                <div style="width:100%;position:relative;float:left">

                    <div class="form-group" style="width:140px;float:left;margin-right:20px">
                        <label for="Qudril">Quadril</label>
                        <input class="form-control" type="text" name="QuadrilHistorico" class="Quadril" value="" disabled/>
                    </div>

                    <div class="form-group" style="width:300px;float:left;margin-right:20px">
                        <label for="Peso">+/-</label>
                        <input class="form-control" type="text" name="diffQuadrilHistorico" class="diffQuadril" value="" disabled/>
                    </div>

                    <div class="form-group" style="width:140px;float:left;margin-right:20px">
                        <label for="Peso">Total</label>
                        <input class="form-control" type="text" name="totalQuadrilHistorico" class="total" value="" disabled />
                    </div>
                   
                </div>

                <div style="width:100%;position:relative;float:left">
DiffCintura
                    <div class="form-group" style="width:140px;float:left;margin-right:20px">
                        <label for="Peso">Cintura</label>
                        <input class="form-control" type="text" name="cinturaHistorico" class="cintura" value="" disabled/>
                    </div>

                    <div class="form-group" style="width:300px;float:left;margin-right:20px">
                        <label for="Peso">+/-</label>
                        <input class="form-control" type="text" name="diffCinturaHistorico" class="diffCintura" value="" disabled/>
                    </div>

                    <div class="form-group" style="width:140px;float:left;margin-right:20px">
                        <label for="Peso">Total</label>
                        <input class="form-control" type="text" name="totalCinturaHistorico" class="totalCintura" value="" disabled />
                    </div>

                </div>

                <div style="width:100%;position:relative;float:left">

                    <div class="form-group" style="width:300px;float:left;margin-right:20px">
                        <label for="geb">GEB</label>
                        <input class="form-control" type="text" name="geb" id="inputGEB" class="geb" value="" disabled/>
                    </div>

                    <div class="form-group" style="width:300px;float:left;margin-right:20px">
                        <label for="get">GET</label>
                        <input class="form-control" type="text" name="get" id="inputGET" class="get" value="" disabled/>
                    </div>

                </div>

                <div style="width:100%;position:relative;float:left">

                    <div class="form-group" style="width:620px;float:left">
                        <label for="imc">IMC</label>
                        <input class="form-control" type="text" name="imc" class="imc" value="" disabled/>
                    </div>
                </div>

                <!-- -->
                                
              
                    $classIMC = classificacaoRiscoIMC(calculoIMC($historico->peso,@$aluno->altura));
               
                <div style="width:620px;float:left;position:relative;font-size:12px">
                    <div class="bs-example" data-example-id="glyphicons-accessibility">
                       
                      
                        <div class="alert alert-" role="alert">
                          ($historico->peso > 0 && @$aluno->altura > 0):  
                              "<b>Classificação:</b> ".$classIMC["class"]."<br>"
                              "<b>Risco de doenças crônicas:</b> ".$classIMC["risco"]."<br>"
                          
                          <div style="clear:both;height:10px"></div>  
                   
                        </div>
                      </div>
                </div>

                <div style="width:100%;height:10px;float:left;position:relative;font-size:12px">
                    <span class="glyphicon glyphicon-trash" style="float:right;cursor:pointer" onclick="deleteAcompanhamento('registro','action/delete_acompanhamento_action.php?id=')"></span>
                </div>
            </div>

        </div>
     
    </span>

    <!-- FIM DO HISTORICO DA FICHA DE ACOMPANHAMENTO-->
</form>