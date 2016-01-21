@extends('dashboard.master')

@section('title', 'Dashboard')

@section('assetsCss')
    @parent

@endsection

@section('content')
  <div class="col-md-8 padding-0">
    <div class="col-md-12 padding-0">
        <div class="col-md-6">
            <div class="panel box-v1">
              <div class="panel-heading bg-white border-none">
                <div class="col-md-6 col-sm-6 col-xs-6 text-left padding-0">
                  <h4 class="text-left">Contas</h4>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-6 text-right">
                   <h4>
                   <span class="icons icon-credit-card icon text-right"></span>
                   </h4>
                </div>
              </div>
              <div class="panel-body text-center">
                <h1>{!! $contas->count() !!}</h1>
                <p>Contas Cadastradas</p>
                <hr/>
              </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="panel box-v1">
              <div class="panel-heading bg-white border-none">
                <div class="col-md-6 col-sm-6 col-xs-6 text-left padding-0">
                  <h4 class="text-left">Despesas</h4>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-6 text-right">
                   <h4>
                   <span class="icon-basket-loaded icons icon text-right"></span>
                   </h4>
                </div>
              </div>
              <div class="panel-body text-center">
                <h1>$ 51181,320</h1>
                <p>{!! date('m/Y') !!}</p>
                <hr/>
              </div>
            </div>
        </div>
    </div>
</div>
<div class="col-md-4">
    
    <div class="col-md-12 padding-0">
      <div class="panel bg-light-blue">
        <div class="panel-body text-white">
           <p class="animated fadeInUp quote">Tenha o controle do seu dinheiro..."</p>
            <div class="col-md-12 padding-0">
              
            </div>
        </div>
      </div>
    </div>
</div>
@endsection

@section('assetsJs')
   @parent
@endsection