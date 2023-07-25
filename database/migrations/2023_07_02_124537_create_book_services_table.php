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
            $table->unique('book_service_hash_id', 50);
            $table->unsignedBigInteger('service_id');
            $table->string('pet_name', 50);
            $table->date('book_date');
            $table->time('book_time');
            $table->text('description')->nullable();
            $table->text('admin_note')->nullable();
            $table->bigInteger('total_price');
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
