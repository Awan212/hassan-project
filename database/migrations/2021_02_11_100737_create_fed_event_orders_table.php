<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFedEventOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fed_event_orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('event_id')->constrained('federation_events')->onDelete('Cascade');
            $table->foreignId('user_id')->constrained('users')->onDelete('Cascade');
            $table->double('price');
            $table->string('payment_id');
            $table->string('date');
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
        Schema::dropIfExists('fed_event_orders');
    }
}
