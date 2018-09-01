<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblStuInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_stu_info', function (Blueprint $table) {
            $table->increments('stu_id');
            $table->string('stu_name');
            $table->string('stu_fa_name');
            $table->string('stu_fath_numb');
            $table->string('stu_mo_name');
            $table->string('stu_roll');
            $table->string('stu_reg');
            $table->string('stu_add');
            $table->string('stu_birthday');
            $table->string('stu_add_year');
            $table->tinyInteger('stu_gro');
            $table->tinyInteger('status');
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
        Schema::dropIfExists('tbl_stu_info');
    }
}
