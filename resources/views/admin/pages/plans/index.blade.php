@extends('adminlte::page')

@section('title', 'Planos')

@section('content_header')
<h1>Planos <a href="{{ route('plans.create')}}" class="btn btn-dark">Novo</a></h1>

<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Dashboard</a></li>
    <li class="breadcrumb-item active"><a href="{{route('plans.index')}}">Planos</a></li>
</ol>
@stop

@section('content')
<div class="card">
    <div class="card-hearder">
        <form action="{{ route('plans.search')}}" method="post" class="form form-inline">
            @csrf
            <input type="text" name="filter" placeholder="Nome" class="form-control" value="{{ $filters["filter"] ?? '' }}">
            <button type="submit" class="btn btn-dark">filtrar</button>
        </form>
    </div>
    <div class="card-body">
        <table class="table table-condensed">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Preço</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($plans as $plan)
                <tr>
                    <td>{{ $plan->name }}</td>
                    <td>{{ $plan->price }}</td>
                    <td>
                        <a href="{{route('plans.show', $plan->url)}}" class="btn btn-primary">(+)</a>
                        <a href="{{route('plans.edit', $plan->url)}}" class="btn btn-warning">(u)</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="card-footer">
        @if(isset($filters))
        {{ $plans->appends($filters)->links()}}
        @else
        {{ $plans->links() }}
        @endif

    </div>
</div>
@stop
