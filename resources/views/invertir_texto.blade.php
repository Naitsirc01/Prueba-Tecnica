@extends('layout')
@section('content')
    <div class="px-2 py-1 my-3 boton_atras">
        <a href='/'>
            <button class="btn btn-primary">
                <i class="fa-solid fa-left-long"></i>
                Atrás
            </button>
        </a>
        
    </div>
    <div class="px-2 py-2 my-5 text-center">
        <h3>Invertir texto</h3>
    </div>
    @if(isset($texto))
        <div class="container py-4 mb-3 contenedor resultado">
            Resultado: {{$texto}}
        </div>
    @endif
    <div class="container py-4 contenedor">
        <form action='/invertir' method='POST'>
            @csrf
            <div class="mb-3">
                <label for="input_texto" class="form-label">Ingrese el texto</label>
                <input type="text" class="form-control" id="input_texto" name="texto" placeholder="Ingrese el texto" required>
            </div>
            <button class="btn btn-primary">Invertir</button>
        </form>
    </div>
@endsection