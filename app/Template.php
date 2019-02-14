<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Str;

class Template extends Model
{
	// Mass Assigned
    protected $fillable = ['name', 'url', 'img_local', 'view'];

    // Mutators
    public function setUrlAttribute($value) {
    	$this->attributes['url'] = Str::slug(mb_substr($this->name, 0, 100), '-');
    }
}
