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
        Schema::create('preferences', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')
            ->constrained()
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->string('intelligence')->nullable();
            $table->string('goodlooks')->nullable();
            $table->string('humor')->nullable();
            $table->string('bedroom_skills')->nullable();
            $table->string('boldness')->nullable();
            $table->string('money')->nullable();
            $table->string('power')->nullable();
            $table->string('flirtatiousness')->nullable();
            $table->string('wit')->nullable();
            $table->string('endowment')->nullable();
            $table->string('ass')->nullable();
            $table->string('petite')->nullable();
            $table->string('big_boobs')->nullable();
            $table->string('min-age')->nullable();
            $table->string('max-age')->nullable();
            $table->string('description')->nullable();
            $table->string('contact')->nullable();
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
        Schema::dropIfExists('preferences');
    }
};
