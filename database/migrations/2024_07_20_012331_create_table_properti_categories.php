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
        Schema::create('properti_categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('slug');

            $table->integer('id_category')->unsigned();
            // $table->integer('id_loaihinh')->unsigned();

            $table->foreign('id_category')->references('id')->on('categories');
            // $table->foreign('id_loaihinh')->references('id')->on('tbl_loaihinhhoatdong');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properti_categories');
    }
};
