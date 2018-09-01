<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblStuSubTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_stu_sub', function (Blueprint $table) {
            $table->increments('sub_id');
            $table->string('stu_id');
            $table->tinyInteger('semester');
            $table->string('sub_ban_one');
            $table->string('sub_ban_two');
            $table->string('sub_eng_one');
            $table->string('sub_eng_two');
            $table->string('sub_mat');
            $table->string('sub_rel');
            $table->string('sub_com');
            $table->string('sub_phy')->nullable();
            $table->string('sub_bio')->nullable();
            $table->string('sub_hig_mat')->nullable();
            $table->string('sub_che')->nullable();
            $table->string('sub_eco')->nullable();
            $table->string('sub_geo')->nullable();
            $table->string('sub_sci')->nullable();
            $table->string('sub_his')->nullable();
            $table->string('sub_all_num')->nullable();
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
        Schema::dropIfExists('tbl_stu_sub');
    }
}
