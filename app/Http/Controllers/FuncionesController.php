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

    public function calcular_fibonacci(Request $request){
        $serie=$this->sumador($request->numero,1,null);
        /* $serie=[];
        $num1 = 0;
        $num2 = 1;
        $counter = 0;
        while ($counter < $request->numero){
            array_push($serie,$num1);
            $num3 = $num2 + $num1;
            $num1 = $num2;
            $num2 = $num3;
            $counter = $counter + 1;
        } */
        return view('fibonacci',compact('serie'));
    }

    public function invertir_texto(Request $request){
        $texto=$this->sumador(strlen($request->texto),2,$request->texto);
        /* for ($x = 0; $x < strlen($request->texto); $x++) {
            $char=$request->texto[$x];
            $texto=$char.$texto;
        } */
        return view('invertir_texto',compact('texto'));
    }

    public function multiplicar(Request $request){
        $numero_1=$request->numero1;
        $numero_2=$request->numero2;
        $resultado=$this->sumador($numero_2,3,$numero_1);
        /* $n = $numero_1;
        for ($x = 0; $x < $numero_2; $x++) {
            $resultado+= $n;
        } */
        return view('multiplicar',compact('resultado','numero_1','numero_2'));
    }

    public function sum_array(Request $request){
        $numero=$request->numero;
        /* $array=[];
        for ($x = 1; $x <= $request->numero; $x++) {
            array_push($array,$x);
        } */
        $array=$this->sumador($numero,0,null);
        $resultado=$this->sumador(count($array),4,$array);
        /* foreach($array as $a){
            if($this->check_prime($a)){
                $resultado+=$a;
            }
        } */
        return view('sum_array',compact('resultado','numero'));
    }

    public function sumador($largo,$tipo,$numeros){
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
                    $char=$numeros[$x];
                    $resultado=$char.$resultado;
                    break;
                case 3://Multiplicacion
                    $resultado+=$numeros;
                    break;
                case 4://Suma arreglos
                    if($this->check_prime($numeros[$x])){
                        $resultado+=$numeros[$x];
                    }
                    break;
            }
        }
        return $resultado;
    }

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
