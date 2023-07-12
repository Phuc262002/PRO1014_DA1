<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_services', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('service_id');
            $table->string('pet_name', 50);
            $table->date('book_date');
            $table->time('book_time');
            $table->string('description', 200)->nullable();
            $table->string('admin_note', 200)->nullable();
            $table->integer('total_price');
            $table->enum('status', ['PENDING', 'HOLDING', 'ACCEPTED', 'COMPLETED', 'CANCELED'])->default('PENDING');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('service_id')->references('id')->on('services');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('book_services');
    }
}
