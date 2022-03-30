<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpecialistRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('specialist_roles', function (Blueprint $table) {
            $table->id();
            $table->string('user_specialistid')->nullable();
            $table->string('specialistid')->nullable();
            $table->integer('deleted')->default(0);
            $table->timestamp('deletedat');
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
        Schema::dropIfExists('specialist_roles');
    }
}
