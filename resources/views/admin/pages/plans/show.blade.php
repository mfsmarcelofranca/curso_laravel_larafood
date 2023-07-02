@extends('adminlte::page')

@section('title',"Detalhes do plano {{$plan->name}}")

@section('content_header')
<h1>Detalhes do Plano <b>{{ $plan->name }}</b></h1>
@stop

@section('content')

<div class="card">
    <div class="card-body">
        <ul>
            <li>
                <strong>Nome:</strong>{{$plan->name}}
            </li>
            <li>
                <strong>Descrição:</strong>{{$plan->name}}
            </li>
            <li>
                <strong>Url:</strong>{{$plan->url}}
            </li>
            <li>
                <strong>Preço:</strong> R$ {{ number_format($plan->price, 2, ',','.')}}
            </li>
        </ul>
    </div>
</div>
<form action="{{ route('plans.destroy',$plan->url)}}" method="post">
    @csrf
    @method('delete')
    <button type="submit" class="btn btn-danger">Apagar <i class="fas fa-trash"></i></button>
</form>
@endsection
