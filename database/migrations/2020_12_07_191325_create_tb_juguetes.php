<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbJuguetes extends Migration
{
    /**
     * Run the migrations.ñ
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_juguetes', function (Blueprint $table) {
                        $table->bigIncrements('id_juguete');
                        $table->text('img')->nulltable();
                        $table->string('nombre',30);
                        $table->string('des',200);
                        $table->float('pre',10,2);
                        $table->string('tipo',30);
                        $table->string('marca',30);
                        $table->string('categoria',30);
                        $table->timestamps();
                    });
            }
    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_juguetes');
    }
}
