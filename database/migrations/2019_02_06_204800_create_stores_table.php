<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    protected $fillable=['name','user_id','slug','owner_name','description','logo','address','phone_number','banner'];
    public function up()
    {
        Schema::create('stores', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('owner_name')->nullable();
            $table->string('slug')->nullable();
            $table->string('logo')->nullable();
            $table->text('address')->nullable();
            $table->text('description')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('banner')->nullable();
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
        Schema::dropIfExists('stores');
    }
}
