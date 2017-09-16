<?php

namespace App\Http\Controllers;

use App\Cms;
use App\CmsCategory;
use Illuminate\Http\Request;

class CmsController extends Controller
{
    /**
     * Show requested page or 404.
     *
     * @param string $category
     * @param bool   $slug
     *
     * @return \Illuminate\Http\Response
     */
    public function show($category, $slug = false)
    {
        if ($slug) {
            if ($slug === 'recientes') {
                $cat = CmsCategory::whereSlug($category)->first();
                $content = Cms::whereCategoryId($cat->id)->latest()->active()->get();
                // if a empty object, render 404 page
                if (!$content) {
                    return view('site.pages.404');
                }
                // render list
                $heading = $cat->name;
                $caption = $cat->description;
                return view('site.cms.list', compact('content', 'heading', 'caption'));
            } else {
                $content = Cms::whereSlug($slug)->first();
                // if a empty object, render 404 page
                if (!$content) {
                    return view('site.pages.404');
                }
                // render single
                return view('site.cms.single', compact('content'));
            }
        }
        // render 404
        return view('site.pages.404');
    }

    public function home()
    {
        return view('site.pages.home');
    }
}
