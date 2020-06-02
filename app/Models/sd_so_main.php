<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class sd_so_main extends Model
{
    //
	 protected $fillable = [
        'id_region', 'name','type','address','contact','coordinate','status_id','level','latitude','longitude',
    ];
}
