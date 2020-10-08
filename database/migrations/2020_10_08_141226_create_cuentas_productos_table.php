<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCuentasProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cuentas_productos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cantidad', false, true);

            $table->integer('cuenta_id', false, true);
            $table->foreign('cuenta_id')
                ->references('id')
                ->on('cuentas')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->integer('producto_id', false, true);
            $table->foreign('producto_id')
                ->references('id')
                ->on('productos')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->timestamps();
            $table->softDeletes('deleted_at', 0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cuentas_productos');
    }
}
