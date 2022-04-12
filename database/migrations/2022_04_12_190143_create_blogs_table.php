<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('caption_image')->nullable();
            $table->longText('intro');
            $table->longText('bp1');
            $table->string('bimg1')->nullable();
            $table->longText('bp2')->nullable();
            $table->string('bimg2')->nullable();
            $table->longText('bp3')->nullable();
            $table->longText('conclusion');
            $table->date('date');
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
        Schema::dropIfExists('blogs');
    }
}
