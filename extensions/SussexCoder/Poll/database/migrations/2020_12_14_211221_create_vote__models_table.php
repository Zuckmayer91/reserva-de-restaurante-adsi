<?php

namespace SussexCoder\Poll\Database\Migrations;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVoteModelsTable extends Migration
{
    public function up()
    {
        Schema::create('sussexcoder_poll_vote__models', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('poll_name', 36);
            $table->integer('menu_item_id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('sussexcoder_poll_vote__models');
    }
}
