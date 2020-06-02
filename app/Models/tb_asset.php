<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class tb_asset extends Model
{
    //tb_asset
	
	 protected $fillable = [
        'trans_date', 'asset_code_temp','asset_description','id_region','id_depo','id_jenis_asset','plant',
		'cost_center','capitalized_on','asset_main_no_text','serial_number','room','license_plate_number','vendor',
		'sd_employee_id','start_rent',
    ];
}
