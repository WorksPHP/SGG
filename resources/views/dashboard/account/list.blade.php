
@extends('dashboard.master')

@section('title', 'Dashboard - Contas')

@section('assetsCss')
    @parent

@endsection

@section('content')

    <div class="row">
        @foreach($user->accounts as $conta)
            <div class="col-sm-6 col-md-3 product-grid">
            <div class="thumbnail">
                <div class="caption">
                    <small>Cassificação</small>
                    <small class="pull-right">
                        <span class="rate fa-star fa"></span>
                        <span class="rate fa-star fa"></span>
                        <span class="rate fa-star fa"></span>
                    </small>
                    <h4>{!! $conta->name !!}</h4>
                    <p>{!! $conta->created_at !!}</p>
                    <p><a role="button" class="btn btn-primary" href="{!! route('conta_edit', ['id' =>$conta->id]) !!}">Editar</a></p>
                </div>
            </div>
        </div>
        @endforeach
    </div>

@endsection

@section('assetsJs')
    @parent
@endsection