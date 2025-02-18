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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('Fname');
            $table->string('Lname');
            $table->string('password');
            $table->string('email');
            $table->string('phone');
            $table->string('payment_status')->nullable();
            $table->tinyInteger('is_admin')->default(0);            
            $table->timestamps();
            $table->string('photo')->default('myimg/me.jpg');
        });
    }


     
// Reverse the migrations.*/
  public function down(): void{Schema::dropIfExists('users');}
};
