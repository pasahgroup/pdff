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
        Schema::create('employees', function (Blueprint $table) {
               $table->bigIncrements('id');                     
             $table->string('first_name')->nullable();
              $table->string('last_name')->nullable();
               $table->string('photo')->nullable();
                $table->string('nationality')->nullable();
                 $table->string('language')->nullable();
               $table->string('phone')->nullable();
                $table->string('email')->nullable();
                 $table->string('pin')->nullable();
                 $table->decimal('commisioner_percent')->default(0.00);
                 $table->string('commisioner_desc')->nullable();
                   $table->string('status')->nullable();
                   $table->string('hear_about_us')->nullable();
                $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
