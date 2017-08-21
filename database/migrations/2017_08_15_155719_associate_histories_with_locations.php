<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AssociateHistoriesWithLocations extends Migration
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
            $table->integer('to')->unsigned()->index();
            $table->integer('from')->unsigned()->index();
            $table->foreign('to')->references('id')->on('locations')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('from')->references('id')->on('locations')->onDelete('cascade')->onUpdate('cascade');
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
            $table->dropForeign('histories_to_foreign');
            $table->dropForeign('histories_from_foreign');
            $table->dropColumn('to');
            $table->dropColumn('from');
        });
    }
}
