<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('plan_expenses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); //who created
            $table->unsignedBigInteger('order_id');
            $table->unsignedBigInteger('plan_id');
            $table->integer('word_count')->default(0);
            $table->integer('current_word_count')->default(0); 
            $table->integer('document_count')->default(0);
            $table->integer('current_document_count')->default(0);
            $table->integer('image_count')->default(0);
            $table->integer('current_image_count')->default(0);
            $table->tinyInteger('type')->default(1);
            $table->dateTime('activated_at')->nullable();
            $table->dateTime('expire_at')->nullable();

        
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plan_expenses');
    }
};
