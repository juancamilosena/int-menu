<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    public function mesa(){
        $user = OrdenDetalle::find($this->ordendetalle_id);
        return $this->belongsTo("app/models/ordendetalle");
    }

    public function ordenDetalle(){
        return $this->belongsTo(OrdenDetalle::class);
    }

}
 