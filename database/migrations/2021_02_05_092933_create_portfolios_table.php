<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePortfoliosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('portfolios', function (Blueprint $table) {
            $table->id();
            $table->json('technology')->nullable()->default(null);
            $table->json('industry')->nullable()->default(null);
            $table->string('name')->nullable()->default(null);
            $table->string('title')->nullable()->default(null);
            $table->string('sub_title')->nullable()->default(null);
            $table->string('image')->nullable()->default(null);
            $table->string('blade_link')->nullable()->default(null);
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
        Schema::dropIfExists('portfolios');
    }
}
