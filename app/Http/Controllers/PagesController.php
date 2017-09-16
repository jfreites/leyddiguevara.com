<?php

namespace App\Http\Controllers;

use App\Page;
use App\Catalog;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    private $static_pages = [
        'contacto',
    ];
    /**
     * Show requested page or 404.
     *
     * @param bool $slug
     *
     * @return \Illuminate\Http\Response
     */
    public function show($slug = false)
    {
        if ($slug) {
            // find page
            $page = Page::whereSlug($slug)->first();
            // if a empty object, render 404 page
            if (!$page) {
                return view('site.pages.404');
            }
            // otherwise check type of page, if cms look for the content
            if ($page->page_type == 'cms') {
                // render page
                $content = $page->content;
                return view('site.pages.single', compact('content'));
            }
            // if is a static page show the corresponding view...
            if ($page->page_type == 'static') {
                return view('site.pages.'.strtolower($slug));
            }

            if ($page->page_type == 'listing') {
                // get listing name
                $name = request('name');
                // fetch data from listing name
                $catalog = Catalog::whereSlug($name)->first();
                // render view with products
                return view('site.listing.index', compact('catalog'));
            }
        }
        // render 404
        return view('site.pages.404');
    }

    public function home()
    {
        $promotions = \App\Cms::featured()->promotions()->limit(3)->get();
        $posts = \App\Cms::featured()->news()->limit(3)->get();

        return view('site.pages.home', compact('promotions', 'posts'));
    }
}
