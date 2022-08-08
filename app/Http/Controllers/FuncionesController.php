<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FuncionesController extends Controller
{
    public function get_fibonacci(){
        return view('fibonacci');
    }

    public function get_invertir(){
        return view('invertir_texto');
    }

    public function get_multiplicar(){
        return view('multiplicar');
    }

    public function get_sum_array(){
        return view('sum_array');
    }

    /**
     * Calcula la serie fibonacci segun el numero ingresado
     */
    public function calcular_fibonacci(Request $request){
        $serie=$this->sumador($request->numero,1,null);
        return view('fibonacci',compact('serie'));
    }

    /**
     * Invierte la cadena de texto ingresado
     */
    public function invertir_texto(Request $request){
        $texto=$this->sumador(strlen($request->texto),2,$request->texto);
        return view('invertir_texto',compact('texto'));
    }

    /**
     * Multiplica los numeros ingresados
     */
    public function multiplicar(Request $request){
        $numero_1=$request->numero1;
        $numero_2=$request->numero2;
        $resultado=$this->sumador($numero_2,3,$numero_1);
        return view('multiplicar',compact('resultado','numero_1','numero_2'));
    }

    /**
     * Suma el arreglo generado con el numero ingresado
     */
    public function sum_array(Request $request){
        $numero=$request->numero;
        $array=$this->sumador($numero,0,null);
        $resultado=$this->sumador(count($array),4,$array);
        return view('sum_array',compact('resultado','numero'));
    }

    /**
     * Realiza sumas de 4 formas diferentes segun los parametros ingresados, ademas de poder generar un array.
     * @param  [int]                    $largo        [Indica la cantidad de veces que realizara la iteracion]
     * @param  [int]                    $tipo         [Indica el tipo de suma a realizar]
     * @param  [array/int/string/null]  $valores      [Input adicional que es requerido para los tipos 2, 3 y 4]
     * @return [array/int/string]       $resultado    [Resultado obtenido de la operacion, este puede ser un array, numero o un texto]
     */
    public function sumador($largo,$tipo,$valores){
        $resultado=0;
        if($tipo==0){
            $resultado=[];
        }
        if($tipo==1){
            $num1 = 0;
            $num2 = 1;
            $resultado=[];
        }
        if($tipo==2){
            $resultado="";
        }
        for ($x = 0; $x < $largo; $x++) {
            switch($tipo){
                case 0://Crear array
                    array_push($resultado,$x+1);
                    break;
                case 1://Operacion fibonacci
                    array_push($resultado,$num1);
                    $num3 = $num2 + $num1;
                    $num1 = $num2;
                    $num2 = $num3;
                    break;
                case 2://Invertir array
                    $char=$valores[$x];
                    $resultado=$char.$resultado;
                    break;
                case 3://Multiplicacion
                    $resultado+=$valores;
                    break;
                case 4://Sumatoria de numeros en arreglo
                    if($this->check_prime($valores[$x])){
                        $resultado+=$valores[$x];
                    }
                    break;
            }
        }
        return $resultado;
    }

    /**
     * Chequea si el numero ingresado es primo
     */
    public function check_prime($num){
        if ($num == 1)
        return false;
        for ($i = 2; $i <= $num/2; $i++)
        {
           if ($num % $i == 0)
           return false;
        }
        return true;
     }
}
