<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Contacts extends Migration{
    public function up(){
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('website')->nullable();
            $table->string('image')->nullable();
            $table->text('address')->nullable();
            $table->string('p_name')->nullable();
            $table->string('p_email')->nullable();
            $table->string('p_phone')->nullable();
            $table->timestamps();
        });
    }

    public function down(){
        Schema::dropIfExists('contacts');   
    }
}
