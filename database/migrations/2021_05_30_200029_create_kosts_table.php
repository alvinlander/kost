<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kosts', function (Blueprint $table) {
            $table->id();
            $table->foreignId("user_id")->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->string("kost_name");
            $table->longText("desc");
            $table->string("address");
            $table->integer("available_room");
            $table->integer("price");
            $table->string("kost_image");
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
        Schema::dropIfExists('kosts');
    }
}
