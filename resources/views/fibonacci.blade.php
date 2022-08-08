@extends('layout')
@section('content')
    <style>
        .resultado{
            border: 1px solid;
        }
        .boton_atras{
            margin-left: 15%;
        }
    </style>
    <div class="px-2 py-1 my-3 boton_atras">
        <a href='/'>
            <button class="btn btn-primary">
                <i class="fa-solid fa-left-long"></i>
                Atras
            </button>
        </a>
        
    </div>
    <div class="px-2 py-2 my-5 text-center">
        <h3>Serie Fibonacci</h3>
    </div>
    @if(isset($serie))
        <div class="container py-4 mb-3 contenedor resultado">
            Resultado: 
            @foreach ($serie as $s)
                {{$s}} 
            @endforeach
        </div>
    @endif
    <div class="container py-4 contenedor">
        <form action='/fibonacci' method='POST'>
            @csrf
            <div class="mb-3">
                <label for="input_numero" class="form-label">Ingrese el numero para calcular la serie</label>
                <input type="number" min="0" class="form-control" id="input_numero" name="numero" placeholder="Ingrese un numero" required>
            </div>
            <button class="btn btn-primary">Calcular</button>
        </form>
    </div>
    
@endsection
