<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AssociateHistoriesWithUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('histories', function (Blueprint $table) {
            //
            $table->integer('reciever_id')->unsigned()->index();
            $table->integer('dispatcher_id')->unsigned()->index();
            $table->foreign('reciever_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('dispatcher_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('histories', function (Blueprint $table) {
            //
            $table->dropForeign('histories_dispatcher_id_foreign');
            $table->dropForeign('histories_reciever_id_foreign');
            $table->dropColumn('reciever_id');
            $table->dropColumn('dispatcher_id');
        });
    }
}
