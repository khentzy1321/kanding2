<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dengue_info_applications', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('lName');
            $table->string('deaths');
            $table->string('recovered')->nullable();
            $table->string('month');
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
        Schema::dropIfExists('dengue_info_applications');
    }
};
