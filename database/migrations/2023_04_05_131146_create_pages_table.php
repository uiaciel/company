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
        Schema::create('pages', function (Blueprint $table) {

            $table->id();
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('title');
            $table->string('slug');
            $table->string('lang')->default('en');
            $table->bigInteger('post_id')->unsigned()->nullable();
            $table->foreign('post_id')->references('id')->on('posts')->onDelete('cascade');
            $table->integer('id_menu')->nullable();
            $table->date('date')->nullable();
            $table->text('content')->nullable();
            // $table->text('excerpt')->nullable();
            $table->string('status')->default('Publish');
            // $table->string('type'); //blogs, pages, announs, reports,
            // $table->string('layout'); //full, sidebar, artikel,
            $table->integer('count')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pages');
    }
};
