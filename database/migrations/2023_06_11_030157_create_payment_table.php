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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->string('contact_info'); // Thông tin liên hệ
            $table->integer('quantity'); // Số lượng vé
            $table->unsignedBigInteger('amount'); // Số tiền thanh toán
            $table->longtext('ticket_code'); // Mã vé
            $table->date('usage_date'); // Ngày sử dụng
            $table->string('phone'); // Điện thoại
            $table->string('email'); // Email
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
