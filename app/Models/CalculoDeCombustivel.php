<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CalculoDeCombustivel extends Model
{
    use HasFactory;
    public function Calcular() {

        $distancia = $_GET['distancia'];
        $autonomia = $_GET['autonimia'];

        $valorGasolina = 4.99;

        $consumoGasolina = ($distancia / $autonomia) * $valorGasolina;

        return $consumoGasolina;
    }
}
