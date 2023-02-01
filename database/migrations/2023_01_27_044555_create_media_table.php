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
        Schema::create('media', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onUpdate('cascade')->onDelete('cascade');         
            $table->string('name');
            $table->string('file_name')->nullable(); ;
            $table->string('mime_type')->nullable(); ;
            $table->string('path')->nullable(); ;
            $table->string('disk')->default('local');
            $table->string('collection')->nullable();         
            $table->unsignedBigInteger('size')->nullable();         
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
        Schema::dropIfExists('media');
    }
};
