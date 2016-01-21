@extends('dashboard.master')

@section('title', 'Dashboard - Adicionar Item')

@section('assetsCss')
    @parent

@endsection

@section('content')

<div class="col-md-12 panel">
    <div class="col-md-12 panel-heading">
        <h4>Adicionando Item no Orçamento</h4>
    </div>
    <div class="col-md-12 panel-body" style="padding-bottom:30px;">
        <div class="col-md-12">
            {!! Form::open(['route' => 'orcamento_store_item', 'method' => 'post', 'class' => 'cmxform', 'novalidate' => 'novalidate', 'id' => 'form_edit']) !!}
            <input type="hidden" name="budget" value="{!! $budget !!}">
            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                <input type="text" aria-required="true" class="form-text" id="name" name="name" value="" required="">
                <span class="bar"></span>
                <label>Nome</label>
            </div>

            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                <input type="text" aria-required="true" class="form-text" id="value" name="value" value="" required="">
                <span class="bar"></span>
                <label>Valor</label>
            </div>
            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                <select class="form-group col-sm-12" id="validate_category" name="category" required="">
                    <option selected>Categoria da despesa...</option>
                    @foreach($categories as $category)
                        <option value="{!! $category->id !!}">{!! $category->name !!}</option>
                    @endforeach
                </select>

            </div>
            <div class="col-md-12 text-right">
                <input type="submit" id="btn-save" class="submit btn btn-primary " value="Salvar" />
                <input type="reset" class="btn btn-info" value="Limpar" />
                <a href="{!! route('orcamento_edit', ['id' => $budget]) !!}" class="btn btn-danger" >Cancelar</a>
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