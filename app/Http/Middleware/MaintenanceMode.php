<?php

namespace App\Http\Middleware;

use Closure;
use DB;

class MaintenanceMode
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $maintenanceModeRow = DB::table('settings')
          ->where('id','=','maintenance_mode')
          ->get();
        $maintenanceMode = $maintenanceModeRow[0]->value;
        if ($maintenanceMode == 1) {
          return redirect('/maintenance');
        } else {
          return $next($request);
        }
    }
}
