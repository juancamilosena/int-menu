<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrdenDetalle extends Model
{
    use HasFactory;
    public function orden(){
        return $this->belongsTo(Orden::class);
    }

    public function productos(){
        return $this->hasMany(Producto::class);
    }
    }

