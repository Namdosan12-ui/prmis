<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaboratoryServicesTable extends Migration
{
    public function up()
    {
        Schema::create('laboratory_services', function (Blueprint $table) {
            $table->id();
            $table->string('service_name');
            $table->decimal('fee', 10, 2);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('laboratory_services');
    }
}
