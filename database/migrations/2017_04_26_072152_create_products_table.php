<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('slug');
            $table->integer('teacher_id')->nullable();
            $table->integer('category_id')->nullable();
            $table->string('image')->nullable();
            $table->mediumText('intro')->nullable();
            $table->string('content')->nullable()->comment('file pdf');
            $table->mediumText('about')->nullable();
            $table->mediumText('target_people')->nullable();
            $table->integer('rate')->default(0);
            $table->string('page_title')->nullable();
            $table->string('meta_keyword')->nullable();
            $table->string('meta_description')->nullable();
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
        Schema::dropIfExists('products');
    }
}
