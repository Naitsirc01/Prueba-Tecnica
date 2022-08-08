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
                Atrás
            </button>
        </a>
        
    </div>
    <div class="px-2 py-2 my-5 text-center">
        <h3>Sumar elementos de un arreglo</h3>
    </div>
    @if(isset($resultado))
        <div class="container py-4 mb-3 contenedor resultado">
            Resultado: {{$resultado}}
        </div>
    @endif
    <div class="container py-4 contenedor">
        <form action='/sum_array' method='POST'>
            @csrf
            <div class="mb-3">
                <label class="form-label">Ingrese el tamaño del arreglo</label>
                <p>Según el número ingresado se creara un arreglo que empieza desde el número 1 hasta el numero ingresado<br>
                    Ejemplo: si el número ingresado es 100 el arreglo resultante será: arreglo=[1, 2, 3, ..., 98, 99, 100]<br>
                </p>
                @if(isset($numero))
                    <input type="number" min="1" class="form-control" id="input_numero" name="numero" placeholder="Ingrese un numero" value="{{$numero}}" required>
                @else
                    <input type="number" min="1" class="form-control" id="input_numero" name="numero" placeholder="Ingrese un numero" value="100" required>
                @endif
            </div>
            <button class="btn btn-primary">Calcular</button>
        </form>
    </div>
    
@endsection
