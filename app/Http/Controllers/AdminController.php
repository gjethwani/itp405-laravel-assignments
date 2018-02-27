<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Auth;
use DB;

class AdminController extends Controller
{

    public function index()
    {
        return view('admin/profile', [
            'user' => Auth::user()
        ]);
    }

    public function settings()
    {
        $maintenanceModeRow = DB::table('settings')
          ->where('id','=','maintenance_mode')
          ->get();
        $maintenanceMode = $maintenanceModeRow[0]->value;
        return view('settings', [
          "maintenanceMode" => $maintenanceMode
        ]);
    }

    public function toggle()
    {
        $maintenanceModeRow = DB::table('settings')
          ->where('id','=','maintenance_mode')
          ->get();
        $maintenanceMode = $maintenanceModeRow[0]->value;
        $newValue = 0;
        if ($maintenanceMode == 0) {
          $newValue = 1;
        }
        DB::table('settings')
          ->where('id', 'maintenance_mode')
          ->update(['value' => $newValue]);
        return view('settings', [
          "maintenanceMode" => $newValue
        ]);
    }
}
