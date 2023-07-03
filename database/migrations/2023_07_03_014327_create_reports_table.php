<?php
 
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
 
return new class extends Migration
{
    public function up(): void
    {
        Schema::create('report', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('route_length');
            $table->string('initial_height');
            $table->string('final_height');
            $table->string('maps');
            $table->string('photo');
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('report');
    }
};