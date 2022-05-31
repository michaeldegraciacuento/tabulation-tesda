<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContestantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contestants', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('tti_id');
            $table->unsignedBigInteger('quali_id');
            $table->string('con_name');
            $table->string('con_age');
            $table->string('con_gender');
            $table->string('con_image');
            $table->timestamps();

            $table->foreign('tti_id')
            ->references('id')
            ->on('institutions')
            ->onDelete('cascade');

            $table->foreign('quali_id')
            ->references('id')
            ->on('qualifications')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contestants');
    }
}
