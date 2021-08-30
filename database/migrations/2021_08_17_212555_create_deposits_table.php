<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepositsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deposits', function (Blueprint $table) {
            $table->id()->from(901032);
            $table->foreignId('checkout_id')->constrained();
            $table->foreignId('user_id')->constrained();
            $table->string('bank_name');
            $table->string('account_no');
            $table->string('date')->nullable();
            $table->string('time')->nullable();
            $table->string('deposit_code')->nullable();
            $table->decimal('amount', 10,2)->default(0.00);
            $table->boolean('status')->default(false);
            $table->string('approved_by')->nullable();
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
        Schema::dropIfExists('deposits');
    }
}
