<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('category_id')->nullable();
            $table->string('title', '255');
            $table->string('detail', '255');
            $table->string('product_link', '255');
            $table->string('product_link_text', '255');
            $table->string('comment', '255')->nullable();
            $table->timestamps();
        });

        // Add comment
        DB::statement("ALTER TABLE ".DB::getTablePrefix()."posts COMMENT '商品テーブル'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
