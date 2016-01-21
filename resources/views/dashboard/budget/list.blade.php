@extends('dashboard.master')

@section('title', 'Dashboard - Contas')

@section('assetsCss')
    @parent

@endsection

@section('content')
    <div class="row">
        @foreach($orcamentos as $orcamento)
            <?php $i = 0; ?>
            <div class="col-sm-6 col-md-3 product-grid">
                <div class="thumbnail">
                    <div class="caption">

                        <h4>{!! $orcamento->name !!}</h4>
                        @foreach($orcamento->items as $item)
                            <?php $i = $item->value + $i; ?>
                        @endforeach
                        <p><strong>R$ {!! $i !!}</strong></p>
                        <p>{!! $orcamento->created_at !!}</p>
                        <p><a role="button" class="btn btn-primary" href="{!! route('orcamento_edit', ['id' =>$orcamento->id]) !!}">Editar</a></p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

@endsection

@section('assetsJs')
    @parent
@endsection