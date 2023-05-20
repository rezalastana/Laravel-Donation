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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('owner_name');
            $table->string('email')->unique();
            $table->string('phone');
            $table->string('about')->nullable();
            $table->string('address')->nullable();
            $table->char('postal_code')->nullable();
            $table->string('city')->nullable();
            $table->string('province')->nullable();
            $table->string('path_image')->nullable();
            $table->string('path_image_header')->nullable();
            $table->string('path_image_footer')->nullable();
            $table->string('company_name')->nullable();
            $table->string('short_description')->nullable();
            $table->string('keyword')->nullable();
            $table->string('phone_hours')->nullable();
            $table->string('instagram_link')->nullable();
            $table->string('twitter_link')->nullable();
            $table->string('fanpage_link')->nullable();
            $table->string('google_plus_link')->nullable();
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
        Schema::dropIfExists('settings');
    }
};
