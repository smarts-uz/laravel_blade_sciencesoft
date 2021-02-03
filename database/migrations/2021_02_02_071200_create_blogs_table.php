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
            $table->string('user_id');
            $table->json('tag')->nullable()->default(null);;
            $table->string('image')->nullable()->default(null);;
            $table->string('title')->nullable()->default(null);;
            $table->string('description')->nullable()->default(null);;
            $table->string('description_text')->nullable()->default(null);;
            $table->softDeletes();
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
