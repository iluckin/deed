<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->string('avatar', 400)->nullable();
            $table->string('phone', 11)->index()->nullable()->comment();
            $table->string('email', 120)->unique()->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->unsignedTinyInteger('gender')->default(0);
            $table->date('birthday')->nullable();
            $table->string('password')->nullable();
            $table->string('intro')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
