<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIssuedBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('issued_books', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('bookID')->unsigned();
            $table->foreign('bookID')->references('id')->on('books');
            $table->bigInteger('memberID')->unsigned();
            $table->foreign('memberID')->references('id')->on('members');
            $table->string('issueDate');
            $table->string('expReturnDate');
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
        Schema::dropIfExists('issued_books');
    }
}
