<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArriveesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('arrivees', function (Blueprint $table) {
            $table->id();
            $table->integer('nordre')->unique();
            $table->date('datea');
			$table->string('textmsg');
			$table->string('source');
            $table->string('typemsg');
            $table->date('datemsg');
            $table->string('objet',255);
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
        Schema::dropIfExists('arrivees');
    }
}
