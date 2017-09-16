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

    public function scopeFeatured($query)
    {
        return $query->where('featured', 1);
    }

    public function scopePromotions($query)
    {
        return $query->where('category_id', 2);
    }

    public function scopeNews($query)
    {
        return $query->where('category_id', 1);
    }

	public function category()
	{
		return $this->hasOne('App\CmsCategory', 'id', 'category_id');
	}
}
