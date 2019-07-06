<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBannersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banners', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('admin_id')->index()->nullable();
            $table->unsignedTinyInteger('type')->default(0)->comment('0 link 1 article');
            $table->string('position')->nullable();
            $table->string('title')->nullable();
            $table->char('short_title', 200)->nullable();
            $table->string('image', 4000)->nullable();
            $table->string('link', 500)->nullable();
            $table->boolean('top')->default(0);
            $table->mediumText('content')->nullable();
            $table->integer('hits')->default(0);
            $table->softDeletes();
            $table->timestamps();
            $table->timestamp('published_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('banners');
    }
}
