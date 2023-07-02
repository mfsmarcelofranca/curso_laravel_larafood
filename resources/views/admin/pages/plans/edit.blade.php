@extends('adminlte::page')

@section('title', 'Alterar Plano')

@section('content_header')
<h1>Alterar Plano</h1>
@stop

@section('content')
<div clas="card">
    <div class="card-body">
        <form action="{{ route('plans.update',$plan->url) }}" class="form" method="post">
            @method('put')
            @include('admin.pages.plans._partials.form')
            <div class="form-group">
                <button type="submit" class="btn btn-dark">Alterar</button>
            </div>
        </form>
    </div>
</div>
@endsection
