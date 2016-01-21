@extends('dashboard.master')

@section('title', 'Dashboard - Editar Orçamento')

@section('assetsCss')
    @parent

@endsection

@section('content')


<div class="row">
    <div class="col-md-12 panel-heading">
        <h4>Editando Orçamento</h4>
        <a href="{!! route('orcamento_add_item', ['id' => $budget]) !!}" class="btn btn-success btn-sm" id="newItem" >+ Novo Item</a>
    </div>
    <div class="col-md-12 panel-body" style="padding-bottom:30px;">
        <div class="col-md-12">
            <table class="table table-striped">
                <thead>
                <th>Item</th>
                <th>Valor</th>
                <th>Categoria</th>
                <th>Ações</th>
                </thead>
                <tbody>
                @foreach($items as $item)
                    <tr>
                        <td>{!! $item->name !!}</td>
                        <td>{!! $item->value !!}</td>
                        <td>{!! $item->categories->name !!}</td>
                        <td><!-- Trigger the modal with a button-->
                            <button type="button" class="btn btn-danger btn-sm">Excluir</button>
                        </td>
                    </tr>
                @endforeach
                </tbody>

            </table>
        </div>
    <div/>
</div>

@endsection

@section('assetsJs')
        @parent

@endsection