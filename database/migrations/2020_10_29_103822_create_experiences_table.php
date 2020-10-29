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
            $table->string('undergraduate')->comment('大学名');
            $table->unsignedInteger('remittance')->comment('仕送り額');
            $table->unsignedInteger('rent')->comment('仕送り額');
            $table->string('where_live')->comment('住んでいる場所');
            $table->string('part')->comment('');
            $table->string('troble')->comment('隣人トラブル');
            $table->string('frend')->comment('');
            $table->string('from')->comment('');
            $table->string('accident')->comment('一人暮らしで困ったこと');
            $table->string('image')->nullable()->comment('');

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
