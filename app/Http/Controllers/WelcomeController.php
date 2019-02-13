<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WelcomeController extends Controller
{
    public function index() {
    	//$users = DB::select("SELECT * FROM hosts ORDER BY id ASC");
    	$info = session('user_info');
    	echo $info['HTTP_USER_AGENT'];
    	/*foreach ($users as $user) {
    		DB::insert('insert into hosts (HTTP_REFERER, HTTP_USER_AGENT, REMOTE_ADDR, REQUEST_URI, GEOIP_CONTINENT_CODE, GEOIP_COUNTRY_CODE, GEOIP_COUNTRY_NAME, GEOIP_REGION, GEOIP_REGION_NAME, GEOIP_CITY, GEOIP_LATITUDE, GEOIP_LONGITUDE, GEOIP_POSTAL_CODE, created_at, updated_at) values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, NOW(), NOW())',
    			[$user->HTTP_REFERER, $user->HTTP_USER_AGENT, $user->REMOTE_ADDR, $user->REQUEST_URI, $user->GEOIP_CONTINENT_CODE, $user->GEOIP_COUNTRY_CODE, $user->GEOIP_COUNTRY_NAME, $user->GEOIP_REGION, $user->GEOIP_REGION_NAME, $user->GEOIP_CITY, $user->GEOIP_LATITUDE, $user->GEOIP_LONGITUDE, $user->GEOIP_POSTAL_CODE]);
    		//echo $user->HTTP_USER_AGENT . '<br />';
		}*/
    	return view('welcome');
    }
}
