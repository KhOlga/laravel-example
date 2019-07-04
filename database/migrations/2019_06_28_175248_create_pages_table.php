<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('slug');
            $table->longText('content');
            $table->timestamps();
            $table->engine = 'InnoDB'; #$table->engine = 'InnoDB';
            $table->charset = 'utf8';	#Specify a default character set for the table (MySQL).
            $table->collation = 'utf8_general_ci';	#Specify a default collation for the table (MySQL).
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pages');
    }
}
