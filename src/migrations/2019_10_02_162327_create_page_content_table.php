<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePageContentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('page_content', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('page_id');
            $table->unsignedInteger('page_field_id');
            $table->text('content')->nullable();
            $table->timestamps();

            $table->foreign('page_id')
                ->references('id')->on('pages')
                ->onDelete('cascade');

            $table->foreign('page_field_id')
                ->references('id')->on('page_fields')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('page_content');
    }
}
