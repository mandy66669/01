<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();  // auto-incrementing id
            $table->string('name');  // Name of the category
            $table->timestamps();  // created_at and updated_at timestamps
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('categories');
    }
};
