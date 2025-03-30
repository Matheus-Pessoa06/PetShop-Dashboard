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
        if(!Schema::hasTable('consults_and_services')){
            Schema::create('consults_and_services', function (Blueprint $table) {
                $table->id();
                $table->string('type');
                $table->float('price');
                $table->dateTime('date');
                $table->string('description');
                $table->foreignId('pet_id')->constrained('pets')->onDelete('cascade');
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('consults_and_services');
    }
};
