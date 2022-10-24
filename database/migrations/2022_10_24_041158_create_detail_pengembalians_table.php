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
        Schema::create('detail_pengembalians', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pengembalians_id');
            $table->foreign('pengembalians_id')->references('id')->on('pengembalians');
            $table->enum('status',['ada','hilang']);
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
        Schema::dropIfExists('detail_pengembalians');
    }
};
