<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHousesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('houses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('community_id')->index();
            $table->string('floor')->nullable()->comment('楼宇');
            $table->string('unit')->nullable()->comment('单元');
            $table->string('room')->nullable()->comment('房间');
            $table->unsignedSmallInteger('status')->default(0)->comment('办理状态 0 新录入 1 售出');
            $table->unsignedSmallInteger('sub_status')->default(0)->comment('子状态， 预留字段');
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
        Schema::dropIfExists('houses');
    }
}
