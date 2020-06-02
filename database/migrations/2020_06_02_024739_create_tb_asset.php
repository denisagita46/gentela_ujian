<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbAsset extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_asset', function (Blueprint $table) {
            $table->increments('id');
			$table->date('trans_date');
			$table->integer('asset_code_temp');
			$table->string('asset_description');
			$table->integer('id_region');
			$table->integer('id_depo');
			$table->integer('id_jenis_asset');
			$table->integer('plant');
			$table->integer('cost_center');
			$table->integer('capitalized_on');
			$table->string('asset_main_no_text');
			$table->integer('serial_number');
			$table->integer('room');
			$table->integer('license_plate_number');
			$table->integer('vendor');
			$table->integer('sd_employee_id');
			$table->date('start_rent');
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
        Schema::dropIfExists('tb_asset');
    }
}
