<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeGenderToEnum extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('user', function (Blueprint $table) {
            $table->dropColumn('gender');
        });

        Schema::table('user', function (Blueprint $table) {
            $table->enum('gender', ['male', 'female', 'none'])->default('male');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user', function (Blueprint $table) {
            $table->dropColumn('gender');
        });

        Schema::table('user', function (Blueprint $table) {
            $table->boolean('gender')->default(false);
        });
    }
}
