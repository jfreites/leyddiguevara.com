<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CmsCategory extends Model
{
	protected $table = 'cms_categories';

	public function cms()
	{
		return $this->belongsTo('App\Cms');
	}
}