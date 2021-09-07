<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('firstname',255);
            $table->string('lastname',255);
            $table->string('address',600);
            $table->string('zip',10);
            $table->string('state',255);
            $table->string('city',255);
            $table->string('phone',11)->unique();
            $table->string('phone_verified_at',255)->nullable();
            $table->string('password',255);
            $table->string('user_mode')->default('standard');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
