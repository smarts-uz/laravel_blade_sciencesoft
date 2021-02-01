<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('parent_id')->nullable()->default(null);
            $table->string('name')->nullable()->default(null);
            $table->json('name_lang')->nullable()->default(null);
            $table->text('description')->nullable()->default(null);
            $table->json('description_lang')->nullable()->default(null);
            $table->string('icon')->nullable()->default(null);
            $table->string('image')->nullable()->default(null);
            $table->string('path_blade')->nullable()->default(null);
            $table->string('link')->nullable()->default(null);
            $table->boolean('active')->default(true);
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
        Schema::dropIfExists('categories');
    }
}
