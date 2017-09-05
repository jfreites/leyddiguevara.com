<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CmsCategory extends Model
{
	protected $table = 'Cms_Categories';

	public function cms()
	{
		return $this->belongsTo('App\Cms');
	}
}