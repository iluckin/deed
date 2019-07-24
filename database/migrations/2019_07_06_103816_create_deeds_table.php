<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDeedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deeds', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->boolean('type')->default(0)->comment('0 住宅产权 1 车位产权');
            $table->bigInteger('community_id')->nullable()->index()->comment('小区');
            $table->integer('batch')->nullable()->default(1)->comment('期号');
            $table->string('floor')->nullable()->comment('楼宇');
            $table->string('unit')->nullable()->comment('单元');
            $table->string('room')->nullable()->comment('房间');
            $table->string('address')->nullable()->comment('房屋地址全路径');
            $table->string('client_name')->nullable()->comment('客户姓名');
            $table->string('owner_name')->nullable()->comment('产权人姓名');
            $table->string('identity_no', 20)->nullable()->index()->comment('身份证号码');
            $table->string('contract_no')->nullable()->index()->comment('合同号');
            $table->double('acreage', 10, 2)->nullable()->comment('实测面积');
            $table->integer('contract_price')->nullable()->comment('签约单价');
            $table->date('contract_date')->nullable()->comment('签约日期');
            $table->integer('actual_price')->nullable()->comment('实际房款');
            $table->date('deliver_date')->nullable()->comment('交件日期');
            $table->string('mobile')->nullable()->comment('客户电话');
            $table->string('change_owner')->nullable()->comment('是否更名');
            $table->string('dispute', 400)->nullable()->comment('纠纷');
            $table->json('extra')->nullable();
            $table->text('remark')->nullable()->comment('备注');
            $table->unsignedSmallInteger('status')->default(0)->comment('办理状态 0 新录入 1 资料审核 2 税务审核 3 不动产审核 4 办理完成 5 取消办理');
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
        Schema::dropIfExists('deeds');
    }
}
