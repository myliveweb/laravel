<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hosts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('HTTP_REFERER');
            $table->string('HTTP_USER_AGENT')->index();
            $table->string('REMOTE_ADDR');
            $table->string('REQUEST_URI');
            $table->string('GEOIP_CONTINENT_CODE');
            $table->string('GEOIP_COUNTRY_CODE');
            $table->string('GEOIP_COUNTRY_NAME');
            $table->integer('GEOIP_REGION')->default(0);
            $table->string('GEOIP_REGION_NAME');
            $table->string('GEOIP_CITY');
            $table->float('GEOIP_LATITUDE', 9, 6)->default(0);
            $table->float('GEOIP_LONGITUDE', 9, 6)->default(0);
            $table->integer('GEOIP_POSTAL_CODE')->default(0);
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
        Schema::dropIfExists('hosts');
    }
}
