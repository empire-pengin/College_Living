<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('admin_id')->comment('管理者ID');
            $table->string('item_image1')->nullable()->comment('画像1');
            $table->string('item_image2')->nullable()->comment('画像2');
            $table->string('item_image3')->nullable()->comment('画像3');
            $table->string('name')->nullable()->comment('物件名');
            $table->string('station')->nullable()->comment('最寄り駅');
            $table->string('rent')->nullable()->comment('賃料');
            $table->string('adress')->nullable()->comment('住所');
            $table->string('age')->nullable()->comment('築年数');
            $table->string('floor')->nullable()->comment('何階');
            $table->string('construction')->nullable()->comment('間取り');
            $table->string('first_cost')->nullable()->comment('初期費用');
            $table->string('insurance')->nullable()->comment('損保');
            $table->string('transaction')->nullable()->comment('取引形態');
            $table->string('else_first')->nullable()->comment('ほか初期費用');
            $table->string('remarks')->nullable()->comment('備考');
            $table->string('status')->nullable()->comment('建物種別');

            $table->timestamps();

            $table->index('id');
            $table->index('admin_id');



            $table->foreign('admin_id')
                ->references('id')
                ->on('admins')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items');
    }
}
