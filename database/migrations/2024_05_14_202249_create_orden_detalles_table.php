<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orden__detalles', function (Blueprint $table) {
            $table->id();
            $table->integer("cantidad");
            $table->float("precio_unitario");
            $table->timestamps();

            // foraneas
            $table->unsignedBigInteger('orden_id')->nullable();
            $table->unsignedBigInteger('producto_id')->nullable();

            $table->foreign('orden_id')
            ->references('id')
            ->on('ordens')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->foreign('producto_id')
            ->references('id')
            ->on('productos')
            ->onDelete('cascade')
            ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orden_detalles');
    }
};
