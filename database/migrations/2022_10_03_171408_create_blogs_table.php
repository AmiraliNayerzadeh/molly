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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id') ;
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade') ;
            $table->string('title');
            $table->text('description') ;
            $table->text('image');
            $table->string('meta_title')->nullable() ;
            $table->string('meta_keyword')->nullable() ;
            $table->text('meta_description')->nullable();
            $table->boolean('status')->default(0) ;
            $table->string('slug'); // Field name same as your `saveSlugsTo`


//            English Language
            $table->string('english_title')->nullable() ;
            $table->text('english_description')->nullable() ;
            $table->string('english_meta_title')->nullable() ;
            $table->string('english_meta_keyword')->nullable() ;
            $table->text('english_meta_description')->nullable();

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
        Schema::dropIfExists('blogs');
    }
};
