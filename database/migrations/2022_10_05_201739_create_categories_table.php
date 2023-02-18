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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name') ;
            $table->unsignedBigInteger('parent')->default(0) ;
            $table->text('description')->nullable();
            $table->text('image')->default('/categories/default.jpg');
            $table->string('meta_title')->nullable();
            $table->string('meta_keyword')->nullable();
            $table->string('meta_description')->nullable();
            $table->string('slug'); // Field name same as your `saveSlugsTo`
            $table->timestamps();
        });

        Schema::create('blog_category', function (Blueprint $table) {
            $table->unsignedBigInteger('blog_id') ;
            $table->foreign('blog_id')->on('blogs')->references('id')->onDelete('cascade');

            $table->unsignedBigInteger('category_id') ;
            $table->foreign('category_id')->on('categories')->references('id')->onDelete('cascade');

            $table->primary('category_id' , 'blog_id') ;

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blog_category');
        Schema::dropIfExists('categories');
    }
};
