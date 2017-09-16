<?php

namespace App\Http\Controllers\Admin;

use App\Banner;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BannersController extends Controller
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
        $banners = Banner::orderBy('created_at', 'desc')->get();

        return view('admin.banners.index', compact('banners'));
    }

    public function create()
    {
        die('new');
    }
}
