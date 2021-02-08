<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoktorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doktors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('ime_prezime');
            $table->string('jmbg');
            $table->enum('kategorija', ['neurolog', 'dermatolog', 'psiholog', 'pedijatar']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('doktors');
    }
}
