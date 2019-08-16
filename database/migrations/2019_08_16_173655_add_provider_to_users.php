<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddProviderToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            if (!Schema::hasColumns('users', ['provider','provider_id'])) {
                $table->string('provider');
                $table->string('provider_id');
                $table->string('password')->nullable()->change();
            }
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
            if (Schema::hasColumns('users', ['provider','provider_id'])) {
                $table->dropColumn(['provider', 'provider_id']);
                $table->string('password');
            }
        });
    }
}