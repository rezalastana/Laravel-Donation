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
        Schema::create('campaigns', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('short_description');
            $table->longText('body');
            $table->integer('view_count');
            $table->enum('status',['public','pending','archived'])
                  ->default('pending');
            $table->integer('nominal');
            $table->integer('goal');
            $table->dateTime('end_date');
            $table->text('note');
            $table->string('receiver');
            $table->string('path_image');
            $table->integer('publish_date');
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
        Schema::dropIfExists('campaigns');
    }
};
