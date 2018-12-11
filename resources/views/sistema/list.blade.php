@extends('templates.template')

@section('css-view')
@endsection

    
@section('js-view')
@endsection        

@section('conteudo-view')


<h1 class="titul-pg">List</h1>

<table class="table table-striped">
    <tr>
        
        <th>Nome</th>
        <th>Pagamento</th>
        <th>Vencimento</th>
        <th>Medalhas</th>
        <th>Status</th>
        <th>Ações</th>
    </tr>
    @foreach($alunos as $aluno)
    <tr>
        
        <td>{{$aluno->nome}}</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td>
           <a href="{{route('aluno.acompanhamento',$aluno->id)}}" ><span class="fas fa-calculator"></span></a>
           <a href="" ><span class="fas fa-user-edit" ></span></a>
           <a href="" ><span class="fas fa-money-bill-alt"></span></a>
           <a href="" ><span  class="fas fa-calendar-alt"></span></a> 
           <a href="" ><span class="fas fa-minus-circle"></span></a>
           
        </td>
        
        
        
    </tr>
    @endforeach
    
    
    
    
</table>
           
           <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Pagamento</h4>
                  </div>

                  <div class="modal-body">
                    <div class="row row-top">

                        <div class="col-md-4">
                            <label>Data</label>
                            <input type="hidden" name="aluno_id" id="aluno_id" value="" />
                            <input type="text" class="form-control" name="data" id="data" value="data atual" />
                        </div>

                        <div class="col-md-4">
                            <label>Periodo</label>                
                            <select name="tipo_pagamento" id="tipo_pagamento" class="form-control">
                                <option value="1">1 mÃªs</option>
                                <option value="2">2 meses</option>
                                <option value="3">3 meses</option>
                                <option value="4">4 meses</option>
                                <option value="5">5 meses</option>
                                <option value="6">6 meses</option>
                            </select>    
                        </div>

                        <div class="col-md-4">
                            <label>Valor</label> 
                            <div class="input-group">
                                <span class="input-group-addon" id="basic-addon1">R$</span>               
                                <input type="text" name="valor" class="form-control" aria-describedby="basic-addon1" id="valor" /> 
                            </div>
                        </div>

                    </div> 
                    <div class="row row-top" style="margin-top:10px">  
                        <div class="col-md-12">
                            <textarea name="obs" id="obs" class="form-control" style="resize:none"></textarea>
                        </div>
                    </div>  
                  </div>

                  <div class="modal-footer">
                    <input type="button" class="btn btn-default" value="Enviar" id="procPayment" />&nbsp;
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                  </div>
                </div>
              </div>
            </div>

            <div class="modal fade" id="payment_success" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Pagamento</h4>
                  </div>

                  <div class="modal-body">
                    <div class="row row-top">

                        <div class="col-md-6">
                            <label>Pagamento efetuado com sucesso!</label>                
                        </div>

                    </div>   
                  </div>

                  <div class="modal-footer">        
                    <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                  </div>
                </div>
              </div>
            </div>
  {!!$alunos->links()!!}
  @endsection