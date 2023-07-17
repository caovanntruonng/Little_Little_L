<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
public function up()
{
    Schema::create('tickets', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->string('type');
        $table->unsignedBigInteger('price');
        $table->string('location');
        $table->text('description');
        $table->integer('quantity');
        $table->date('start_date');
        $table->date('end_date')->nullable();
        $table->string('image');
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tickets');
    }
};
