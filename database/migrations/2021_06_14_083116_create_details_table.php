<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('details', function (Blueprint $table) {
            
            $table->string('nserie');
            $table->Date('dtefin');

            $table->unsignedBigInteger('mvt_id'); 
            $table->foreign('mvt_id')
                    ->references('mvt_id')->on('mvts')
                    ->onDelete('cascade');

            $table->unsignedBigInteger('materiel_id'); 
            $table->foreign('materiel_id')
                    ->references('materiel_id')->on('materiels')
                    ->onDelete('cascade');

            
            $table->primary(array('nserie','materiel_id' , 'mvt_id'));
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
        Schema::dropIfExists('details');
    }
}
