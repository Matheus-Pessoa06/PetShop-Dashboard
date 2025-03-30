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
        if (!Schema::hasTable('servicestype')) {
            Schema::create('servicestype', function (Blueprint $table) {
                $table->id();
                $table->string('typeService');
                $table->string('name');
                $table->foreignId('service_id')->constrained('consults_and_services')->onDelete('cascade');
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('servicestype');
    }
};