<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('corralunos', function (Blueprint $table) {
            $table->id();
            $table->text('Trabajos',30);
            $table-> text ('Empresas',30);
            $table-> string('Productos',30);
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
        Schema::dropIfExists('corralunos');
    }
};
