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
        Schema::create('purchas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('drug_id')->constrained('drugs');
            $table->foreignId('category_id')->constrained('categories');
            $table->string('price');
            $table->string('quantity');
            $table->date('expire');
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
        Schema::dropIfExists('purchas');
    }
};
