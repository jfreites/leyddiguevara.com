<?php

namespace App\Http\Controllers;

use App\Catalog;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function detail($slug = false)
    {
        echo $slug;
    }

}
