<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->uuid('id')->unique();
            $table->string('name');
            $table->string('desc');
            $table->uuid('provider_id');
            $table->uuid('event_id')->nullable();
            $table->uuid('elegibility_id')->nullable();
            $table->uuid('costoption_id')->nullable();
            $table->datetime('created');
            $table->datetime('updated');
            $table->boolean('flagged');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('services');
    }
}
