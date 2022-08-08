@extends('layout')
@section('content')
    <div class="px-4 py-5 my-5 text-center">
        <h1>Prueba Técnica</h1>
    </div>

    <div class="container px-4 py-5" id="hanging-icons">
        <h2 class="pb-2 border-bottom">Funciones</h2>
        <div class="row g-4 py-5 row-cols-1 row-cols-lg-2">
            <div class="col d-flex align-items-start">
                <div class="icon-square bg-light text-dark flex-shrink-0 me-3">
                    <i class="fa-brands fa-mixer"></i>
                </div>
                <div>
                    <h2>Fibonacci</h2>
                    <p>Obtener la seria de Fibonacci de un número</p>
                    <a href="/fibonacci" class="btn btn-primary">
                        Fibonacci
                    </a>
                </div>
            </div>
            <div class="col d-flex align-items-start">
                <div class="icon-square bg-light text-dark flex-shrink-0 me-3">
                    <i class="fa-brands fa-mixer"></i>
                </div>
                <div>
                    <h2>Invertir texto</h2>
                    <p>Invertir el orden de los caracteres de un texto ingresado</p>
                    <a href="/invertir" class="btn btn-primary">
                        Invertir texto
                    </a>
                </div>
            </div>
        </div>
        <div class="row g-4 py-5 row-cols-1 row-cols-lg-2">
            <div class="col d-flex align-items-start">
                <div class="icon-square bg-light text-dark flex-shrink-0 me-3">
                    <i class="fa-brands fa-mixer"></i>
                </div>
                <div>
                    <h2>Multiplicar</h2>
                    <p>Obtener la multiplicación de dos números</p>
                    <a href="/multiplicar" class="btn btn-primary">
                        Multiplicar
                    </a>
                </div>
            </div>
            <div class="col d-flex align-items-start">
                <div class="icon-square bg-light text-dark flex-shrink-0 me-3">
                    <i class="fa-brands fa-mixer"></i>
                </div>
                <div>
                    <h2>Suma de números primos</h2>
                    <p>Obtener la suma de los números primos de un arreglo</p>
                    <a href="/sum_array" class="btn btn-primary">
                        Sumar arreglo
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
