<?php

namespace App\Http\Controllers\Admin;

use App\Catalog;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CatalogsController extends Controller
{
    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $catalogs = Catalog::orderBy('created_at', 'desc')->get();

        return view('admin.catalog.index', compact('catalogs'));
    }
}
