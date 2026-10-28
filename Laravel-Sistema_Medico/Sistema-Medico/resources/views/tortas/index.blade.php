@extends('layouts.base')

@section('content')
    <h1>Pasteleria La Espiga</h1>
    
    <p>Bienvenidos a Pasteleria La Espiga, donde preparamos las tortas más deliciosas y frescas de la ciudad.</p>

    <p>Hay {{ count($tortas) }} tortas en la vitrina.</p>

    <ul>
        @foreach($tortas as $torta)
            <li>Sabor: {{ $torta->sabor }} - Precio: {{ $torta->precio }} Bs</li>
        @endforeach
    </ul>

    <p>Vitrina atendida por Joel Huanca Laura</p>

    <p><a href="/tortas/nuevo">Registrar nueva torta</a></p>
@endsection