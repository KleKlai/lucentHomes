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
            $table->id()->from(903052);
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->foreignId('current_team_id')->nullable();
            $table->string('profile_photo_path', 2048)->nullable();
            $table->string('contact_no')->nullable();
            $table->string('gender');
            $table->date('date_of_birth');
            $table->string('tin')->nullable();
            $table->string('nationality');
            $table->string('civil_status');
            $table->string('permanent_address_1');
            $table->string('permanent_address_2');
            $table->string('permanent_city');
            $table->string('permanent_state');
            $table->string('permanent_postal_code');
            $table->string('permanent_country_code');
            $table->string('present_address_1');
            $table->string('present_address_2');
            $table->string('present_city');
            $table->string('present_state');
            $table->string('present_postal_code');
            $table->string('present_country_code');
            $table->string('status')->default('Being Processed');
            $table->softDeletes();
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
