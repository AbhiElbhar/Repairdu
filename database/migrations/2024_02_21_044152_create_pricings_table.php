<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pricings', function (Blueprint $table) {
            $table->id();
            $table->string('package');
            $table->string('price');
            $table->string('staff_accounts');
            $table->string('contacts_limit');
            $table->string('invoice_limit');
            $table->string('quotation_limit');
            $table->string('project_management');
            $table->string('recurring_transaction');
            $table->string('inventory_module');
            $table->string('live_chat');
            $table->string('file_manager');
            $table->string('online_payment');
            $table->unsignedBigInteger('time_id');
            $table->foreign('time_id')->references('id')->on('times')->cascadeOnUpdate()->OnDelete('set null');
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
        Schema::dropIfExists('pricings');
    }
};
