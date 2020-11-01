<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExperiencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('experiences', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id')->comment('ユーザID');
            $table->string('college_name')->comment('大学名');
            $table->string('undergraduate')->comment('学部学科');//
            $table->unsignedInteger('remittance')->comment('仕送り額');
            $table->unsignedInteger('rent')->comment('家賃');
            $table->string('where_live')->comment('住んでいる場所');
            $table->string('sex')->comment('性別');
            $table->string('part')->comment('バイトやインターン');
            $table->string('troble')->comment('隣人トラブル');
            $table->string('frend')->comment('友人関係');
            $table->string('from')->comment('出身地');
            $table->string('accident')->comment('一人暮らしで困ったこと');
            $table->string('image')->nullable()->comment('画像');

            $table->timestamps();



            $table->foreign('user_id')
                ->references('id')
                ->on('users')
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
        Schema::dropIfExists('experiences');
    }
}
