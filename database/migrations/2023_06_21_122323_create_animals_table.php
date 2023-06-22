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
        Schema::create('animal', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->boolean('gender');
            $table->string('breed');
            $table->date('age');
            $table->boolean('dogs');
            $table->boolean('cat');
            $table->boolean('sterilized');
            $table->boolean('pottyTrained');
            $table->date('shelter');
            $table->longText('description');
            $table->string('animal');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
