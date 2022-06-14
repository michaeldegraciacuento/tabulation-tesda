<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGuidelinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guidelines', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('crit_id');
            $table->unsignedBigInteger('quali_id');
            $table->string('gd_name');
            $table->string('gd_score');
            $table->timestamps();

            $table->foreign('crit_id')
            ->references('id')
            ->on('criterias')
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
        Schema::dropIfExists('guidelines');
    }
}
