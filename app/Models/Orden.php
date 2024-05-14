<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orden extends Model
{
    use HasFactory;

    public function mesa(){
        // $user = Mesa::find($this->mesa_id);
        return $this->belongsTo(Mesa::class);
    }
    public function ordenDetalle(){
        return $this->hasOne(OrdenDetalle::class);

    }

}
