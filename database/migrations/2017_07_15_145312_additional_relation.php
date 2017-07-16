<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AdditionalRelation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('change_requests', function (Blueprint $table) {
            $table->unsignedInteger('manager_1')->nullable();
            $table->foreign('manager_1')->references('id')->on('managers')->onDelete('set null');

            $table->unsignedInteger('manager_2')->nullable();
            $table->foreign('manager_2')->references('id')->on('managers')->onDelete('set null');

            $table->unsignedInteger('manager_3')->nullable();
            $table->foreign('manager_3')->references('id')->on('managers')->onDelete('set null');

            $table->unsignedInteger('manager_4')->nullable();
            $table->foreign('manager_4')->references('id')->on('managers')->onDelete('set null');

            $table->unsignedInteger('manager_5')->nullable();
            $table->foreign('manager_5')->references('id')->on('managers')->onDelete('set null');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
}
