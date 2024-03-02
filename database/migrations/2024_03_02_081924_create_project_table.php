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
        Schema::create('project', function (Blueprint $table) {
            $table->id()->from(startingValue:100);
            $table->string('name')->unique();
            $table->string('slug')->unique();
            $table->text('description')->comment(comment: 'Brief explanation of Project');
            $table->boolean('is_active')->default(false);
            $table->date('updated_date');
            $table->integer('amount_visited')->nullable();


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('project');
    }
};
