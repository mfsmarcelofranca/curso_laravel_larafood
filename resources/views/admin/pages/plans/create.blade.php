@extends('adminlte::page')

@section('title', 'Cadastrar Novo Plano')

@section('content_header')
<h1>Cadastrar Novo Plano</h1>
@stop

@section('content')
<div clas="card">
    <div class="card-body">
        <form action="{{ route('plans.store') }}" class="form" method="post">
            @include('admin.pages.plans._partials.form')
            <div class="form-group">
                <button type="submit" class="btn btn-dark">Cadastrar</button>
            </div>
        </form>
    </div>
</div>
@endsection
