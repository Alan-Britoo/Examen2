<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detalles_Ventas extends Model
{
    protected $fillable = [ 'cantida', 'precio_venta', 'descuento'];
}