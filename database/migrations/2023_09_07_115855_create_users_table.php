<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
<<<<<<< HEAD
    
     
// Run the migrations.*/
  public function up(): void{Schema::create('users', function (Blueprint $table) {$table->id();
    $table->string('Fname');
    $table->string('Lname');
    $table->string('password');
    $table->string('email');
    $table->integer('phone');
    $table->string('payment_status');
    $table->string('photo');
    $table->tinyInteger('is_admin')->default(0);
    $table->timestamps();});}
=======
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
        });
    }
>>>>>>> 8a3dc702717dea3e8faebe487cc2178605edb4a1


     
// Reverse the migrations.*/
  public function down(): void{Schema::dropIfExists('users');}
};
