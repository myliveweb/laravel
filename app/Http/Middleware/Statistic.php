<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\DB;

class Statistic
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
        if(!$request->ajax() && !$request->session()->has('user_info')){

            $info = array();

            $info['HTTP_REFERER']         = $request->server('HTTP_REFERER');
            $info['HTTP_USER_AGENT']      = $request->server('HTTP_USER_AGENT');
            $info['REMOTE_ADDR']          = $request->server('REMOTE_ADDR');
            $info['REQUEST_URI']          = $request->server('REQUEST_URI');
            $info['GEOIP_CONTINENT_CODE'] = $request->server('GEOIP_CONTINENT_CODE');
            $info['GEOIP_COUNTRY_CODE']   = $request->server('GEOIP_COUNTRY_CODE');
            $info['GEOIP_COUNTRY_NAME']   = $request->server('GEOIP_COUNTRY_NAME');
            $info['GEOIP_REGION']         = $request->server('GEOIP_REGION');
            $info['GEOIP_REGION_NAME']    = $request->server('GEOIP_REGION_NAME');
            $info['GEOIP_CITY']           = $request->server('GEOIP_CITY');
            $info['GEOIP_LATITUDE']       = $request->server('GEOIP_LATITUDE');
            $info['GEOIP_LONGITUDE']      = $request->server('GEOIP_LONGITUDE');
            $info['GEOIP_POSTAL_CODE']    = $request->server('GEOIP_POSTAL_CODE');

            $request->session()->put('user_info', $info);

            DB::insert('insert into hosts (HTTP_REFERER, HTTP_USER_AGENT, REMOTE_ADDR, REQUEST_URI, GEOIP_CONTINENT_CODE, GEOIP_COUNTRY_CODE, GEOIP_COUNTRY_NAME, GEOIP_REGION, GEOIP_REGION_NAME, GEOIP_CITY, GEOIP_LATITUDE, GEOIP_LONGITUDE, GEOIP_POSTAL_CODE, created_at, updated_at) values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, NOW(), NOW())',
                [$info['HTTP_REFERER'], $info['HTTP_USER_AGENT'], $info['REMOTE_ADDR'], $info['REQUEST_URI'], $info['GEOIP_CONTINENT_CODE'], $info['GEOIP_COUNTRY_CODE'], $info['GEOIP_COUNTRY_NAME'], $info['GEOIP_REGION'], $info['GEOIP_REGION_NAME'], $info['GEOIP_CITY'], $info['GEOIP_LATITUDE'], $info['GEOIP_LONGITUDE'], $info['GEOIP_POSTAL_CODE']]);
        }
        return $next($request);
    }
}
