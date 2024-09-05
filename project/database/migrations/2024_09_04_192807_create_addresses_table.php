<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->string('address');
            $table->string('city');
            $table->string('country');
            $table->string('postal_code');
            $table->foreignId('person_id')->constrained;
            $table->timestamps();
        });

        Schema::table('addresses', function (Blueprint $table) {
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('addresses');

        Schema::table('addresses', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });
    }
}
