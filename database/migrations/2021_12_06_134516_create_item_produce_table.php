<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemProduceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_produces', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();;
            $table->string('item_name');
            $table->string('item_description');
            $table->double('item_price',9,3);
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
        Schema::table('item_produces', function(Blueprint $table){
            $table->dropForeign(['user_id']);
        });
        
        Schema::dropIfExists('item_produce');
    }
}
