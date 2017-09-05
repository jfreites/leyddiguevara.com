<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cms extends Model
{
	public function scopeLatest($query)
	{
		return $query->orderBy('created_at', 'DESC');
	}

	public function scopeActive($query)
	{
		return $query->where('active', 1);
	}

	public function category()
	{
		return $this->hasOne('App\CmsCategory', 'id', 'category_id');
	}
}