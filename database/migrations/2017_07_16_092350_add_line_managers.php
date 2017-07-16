<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddLineManagers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('change_requests', function (Blueprint $table) {
            $table->unsignedInteger('line_manager_1')->nullable();
            $table->foreign('line_manager_1')->references('id')->on('line_managers')->onDelete('set null');

            $table->unsignedInteger('line_manager_2')->nullable();
            $table->foreign('line_manager_2')->references('id')->on('line_managers')->onDelete('set null');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('change_requests', function (Blueprint $table) {
            //
        });
    }
}
