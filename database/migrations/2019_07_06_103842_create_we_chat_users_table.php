<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWeChatUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('we_chat_users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->index()->nullable();
            $table->string('app_id', 64)->nullable();
            $table->string('open_id', 64)->nullable()->index();
            $table->string('union_id', 64)->nullable()->index();
            $table->string('avatar', 400)->nullable();
            $table->string('nickname', 100)->nullable();
            $table->string('phone', 15)->nullable()->index();
            $table->unsignedTinyInteger('gender')->default(0);
            $table->string('country', 50)->nullable();
            $table->string('province', 50)->nullable();
            $table->string('city', 50)->nullable();
            $table->unsignedTinyInteger('status')->default(0);
            $table->json('extra')->nullable();
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
        Schema::dropIfExists('we_chat_users');
    }
}
