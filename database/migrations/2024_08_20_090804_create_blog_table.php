<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('title_ar');
            $table->text('excerpt');
            $table->text('excerpt_ar');
            $table->text('description');
            $table->text('description_ar');
            $table->date('date');
            $table->string('image');
            $table->string('image_ar');
            $table->string('writer')->nullable();
            $table->string('writer_ar')->nullable();
            $table->boolean('visibility')->default(true); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blog');
    }
};
