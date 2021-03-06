<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Str;

class Category extends Model
{
	// Mass Assigned
    protected $fillable = ['name', 'url', 'count', 'view'];

    // Mutators
    public function setUrlAttribute($value) {
    	$this->attributes['url'] = Str::slug(mb_substr($this->name, 0, 100), '-');
    }
}
