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
        <h3>Multiplicar</h3>
    </div>
    @if(isset($resultado))
        <div class="container py-4 mb-3 contenedor resultado">
            La multiplicación entre {{$numero_1}} x {{$numero_2}} tiene como<br>
            Resultado: {{$resultado}}
        </div>
    @endif
    <div class="container py-4 contenedor">
        <form action='/multiplicar' method='POST'>
            @csrf
            <div class="mb-3">
                <label for="input_numero_1" class="form-label">Ingrese el los números que desea multiplicar</label>
                <div class="row">
                    <div class="col">
                        <input type="number" class="form-control" id="input_numero_1" name="numero1" placeholder="Ingrese un numero" required>
                    </div>
                    <div class="col-1">
                        <i class="fa-solid fa-xmark"></i>
                    </div>
                    <div class="col">
                        <input type="number" class="form-control" id="input_numero_2" name="numero2" placeholder="Ingrese un numero" required>
                    </div>
                </div>
            </div>
            <button class="btn btn-primary">Multiplicar</button>
        </form>
    </div>
    
@endsection
