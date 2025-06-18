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
       Schema::create('sites', function (Blueprint $table) {
    $table->id();
    $table->string('slug')->unique(); // e.g. rs1, rs2
    $table->string('name');           // Unique site name
    $table->string('logo')->nullable();
    $table->string('header_image')->nullable();
    $table->text('footer_text')->nullable();
    $table->timestamps();
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sites');
    }
};
