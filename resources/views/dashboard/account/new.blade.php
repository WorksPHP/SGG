@extends('dashboard.master')

@section('title', 'Dashboard - Adicionar Conta')

@section('assetsCss')
    @parent

@endsection

@section('content')

    <div class="col-md-12 panel">
        <div class="col-md-12 panel-heading">
            <h4>Adicionando novo Orçamento</h4>
        </div>
        <div class="col-md-12 panel-body" style="padding-bottom:30px;">
            <div class="col-md-12">
                {!! Form::open(['route' => 'conta_store', 'method' => 'post', 'class' => 'cmxform', 'novalidate' => 'novalidate', 'id' => 'form_edit']) !!}

                <div class="form-group form-animate-text" style="margin-top:40px !important;">
                    <input type="text" aria-required="true" class="form-text" id="name" name="name" value="" required="">
                    <span class="bar"></span>
                    <label>Nome</label>
                </div>
                <div class="col-md-12 text-right">
                    <input type="submit" id="btn-save" class="submit btn btn-primary " value="Salvar" />
                    <input type="reset" class="btn btn-info" value="Limpar" />
                    <span class="bar"></span>
                </div>
                {!! Form::close() !!}

            </div>
        </div>
    </div>

@endsection

@section('assetsJs')
    @parent

@endsection