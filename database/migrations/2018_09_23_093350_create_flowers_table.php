<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFlowersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flowers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('admin_id');
            $table->integer('category_id')->nullable();
            $table->string('slug')->nullable();
            $table->enum('integer', [1,2,3,4,5])->nullable();
            $table->boolean('show')->default(false);
            $table->string('name');
            $table->text('message')->nullable();
            $table->float('saleoff');
            $table->string('price');
            $table->string('image')->nullable();
            $table->string('quantity');
            $table->softDeletes();
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
        Schema::dropIfExists('flowers');
    }
}
