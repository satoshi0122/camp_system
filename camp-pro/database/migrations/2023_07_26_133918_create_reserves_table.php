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
        Schema::create('reserves', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('site_id');
            $table->string('people_num', 10)->nullable(false);
            $table->dateTime('started')->nullable(false);
            $table->dateTime('finished')->nullable(false);
            $table->timestamps();
            $table->dateTime('canceled');
            $table->datetime('deleted_at')->nullable();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('site_id')->references('id')->on('mst_sites');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reserves');
    }
};
