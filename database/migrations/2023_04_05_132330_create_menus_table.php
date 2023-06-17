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
        Schema::create('menus', function (Blueprint $table) {
            $table->id();
<<<<<<< HEAD
            $table->string('title');
            $table->string('position')->nullable();
=======
            $table->integer('parent')->default(0);
            $table->string('title');
            $table->string('link')->nullable();
            $table->string('order');
>>>>>>> 0449ca9798027f9ba838cc592c3885ce3657dc01
            $table->string('status')->default('Publish');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menus');
    }
};
