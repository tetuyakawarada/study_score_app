<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scores', function (Blueprint $table) {
            $table->increments('id');
            $table->string('event');
            $table->date('date');
            $table->text('body')->nullable();

            $table->integer('jap_sco')->nullable();
            $table->integer('soc_sco')->nullable();
            $table->integer('mat_sco')->nullable();
            $table->integer('sci_sco')->nullable();
            $table->integer('eng_sco')->nullable();
            $table->integer('mus_sco')->nullable();
            $table->integer('art_sco')->nullable();
            $table->integer('phy_sco')->nullable();
            $table->integer('hom_sco')->nullable();

            $table->float('jap_ave', 3, 1)->nullable();
            $table->float('soc_ave', 3, 1)->nullable();
            $table->float('mat_ave', 3, 1)->nullable();
            $table->float('sci_ave', 3, 1)->nullable();
            $table->float('eng_ave', 3, 1)->nullable();
            $table->float('mus_ave', 3, 1)->nullable();
            $table->float('art_ave', 3, 1)->nullable();
            $table->float('phy_ave', 3, 1)->nullable();
            $table->float('hom_ave', 3, 1)->nullable();

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
        Schema::dropIfExists('scores');
    }
}
