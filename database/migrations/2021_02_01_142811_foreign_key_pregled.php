<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ForeignKeyPregled extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pregled', function (Blueprint $table) {
            $table->unsignedBigInteger('idpacijenta');
            $table->unsignedBigInteger('iddoktora');
            $table->foreign('idpacijenta')->references('id')->on('pacijent');
            $table->foreign('iddoktora')->references('id')->on('doktor');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pregled', function (Blueprint $table) {
            $table->dropForeign('pregled_idpacijenta_foreign');
            $table->dropForeign('pregled_iddoktora_foreign');

        });
    }
}
