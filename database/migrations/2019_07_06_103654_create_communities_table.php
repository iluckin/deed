<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommunitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('communities', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('admin_id')->index()->nullable();
            $table->string('name')->index()->nullable();
            $table->unsignedInteger('province_id')->index()->nullable();
            $table->unsignedInteger('city_id')->index()->nullable();
            $table->unsignedInteger('town_id')->index()->nullable();
            $table->string('address', 300)->nullable();
            $table->decimal('longitude', 10, 6)->nullable();
            $table->decimal('latitude', 10, 6)->nullable();
            $table->string('contact_name', 80)->nullable();
            $table->string('contact_phone', 15)->nullable();
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
        Schema::dropIfExists('communities');
    }
}
