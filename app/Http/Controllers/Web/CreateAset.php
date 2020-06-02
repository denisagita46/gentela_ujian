<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Requests\RoleRequest;
use App\Http\Requests\UserCreateRequest;
use App\Models\Permission;
use App\Models\User;
use App\Models\tb_asset;
use App\Models\sd_so_main;
use App\Services\User\UserService;
use App\Services\aset\asetservis;
use Illuminate\Http\Request;
use Nahid\Permit\Facades\Permit;
use PDF;


class CreateAset extends Controller
{
    public function index(Request $request) 
	{
        
		 $tb_asset = tb_asset::all();
         return view('aset.list_aset', compact('tb_asset'));
		 
    }
	
    public function create_aset(Request $request) 
	{
	
		$sd_so_main = sd_so_main::whereIn('parent_id', [13, 13,13])->get();
		$sd = sd_so_main::whereIn('parent_id', [14,15,16])->get();
		$tb_asset = tb_asset::all();
        return view('aset.add_aset', compact('tb_asset','sd_so_main','sd'));
    }
	
	public function cetak_pdf()
	{
	
		$tb_asset = tb_asset::all();
		$pdf = PDF::loadview('aset.aset_pdf',['tb_asset'=>$tb_asset]);
		return $pdf->download('laporan-aset-pdf');
	}
	
	public function save(UserCreateRequest $request) 
	{

        $user = $this->userService->addNewUser($request->toArray());
        if(!$user) {
            return $this->respond("Unable to create user", 'error', 422);
        }
        return redirect(route('admin.users'))->with(['success' => "User created successfully!"]);
    }
}
