<?php

namespace App\Http\Controllers\Admin;

use App\Product;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductsController extends Controller
{
    const CATALOG_INNO = 1;
    const CATALOG_TEOSYAL = 2;
    /**
     * Create a new controller instance.
     *
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $products = Product::orderBy('created_at', 'desc')->get();

        return view('admin.products.index', compact('products'));
    }

    public function create()
    {
        $catInno = Category::with('children')->catalog(1)->get();
        $catTeosyal = Category::with('children')->catalog(2)->get();

        return view('admin.products.create', compact('catInno', 'catTeosyal'));
    }

    public function store(Request $request)
    {
        $data = $request->all();

        if (!is_numeric($data['catalog_id'])) {
            return back()->with('message', 'Debes seleccionar un catálogo');
        }

        // check catalog
        $catalogId = $data['catalog_id'];

        // fields
        $extraContent = [];
        $categoryId = 0;

        if ($catalogId == 1) {
            // INNO
            // validate extra content
            if (!empty($data['extra_1'])) {
                $extraContent['activos'] = $data['extra_1'];
            }
            if (!empty($data['extra_2'])) {
                $extraContent['indicaciones'] = $data['extra_2'];
            }
            if (!empty($data['extra_3'])) {
                $extraContent['protocolo'] = $data['extra_3'];
            }
        }

        if ($catalogId == 2) {
            // TEOSYAL
            // product category...
            $categoryId = $data['children_cat_teosyal'];
        }

        // Create slug url
        $slug = 'producto-' . str_slug($data['name'], '-');
        // Process image
        $imageName = '';
        if ($request->file('feature_image')) {
            $imageName = $slug . '.' . $request->file('feature_image')->getClientOriginalExtension();
            $request->file('feature_image')->move(base_path() . '/public/uploads/products/', $imageName);
        }

        $product = new Product();
        $product->name = $data['name'];
        $product->slug = $slug;
        $product->content = $data['content'];
        $product->feature_image = $imageName;
        $product->additional_images = '';
        $product->category_id = $categoryId;
        $product->catalog_id = $data['catalog_id'];
        $product->featured = isset($data['featured']) ? $data['featured'] : 0;
        $product->active = $data['active'];
        $product->extra_fields = empty($extraContent) ? '' : json_encode($extraContent);
        $product->save();

        return redirect(route('admin.products.index'))->with('message', 'Creado nuevo producto!');
    }

    public function edit($id)
    {
        $product = Product::find($id);

        if (!$product) {
            return redirect(route('admin.products.index'))->with('message', 'El producto no existe.');
        }

        $categories = Category::with('children')->catalog($product->catalog_id)->get();

        $extra_1 = $extra_2 = $extra_3 = '';

        // Depends on the catalog prepare the view
        if ($product->catalog_id == self::CATALOG_TEOSYAL) {

            //

        } elseif ($product->catalog_id == self::CATALOG_INNO) {

            if (!empty($product->extra_fields)) {
                $extraFields = json_decode($product->extra_fields);
                if (!empty($extraFields->activos)) {
                    $extra_1 = $extraFields->activos;
                }
                if (!empty($extraFields->indicaciones)) {
                    $extra_2 = $extraFields->indicaciones;
                }
                if (!empty($extraFields->protocolo)) {
                    $extra_3 = $extraFields->protocolo;
                }
            }
        }

        return view('admin.products.edit', compact('product', 'categories', 'extra_1', 'extra_2', 'extra_3'));
    }

    public function update(Request $request, $id)
    {
        $product = Product::find($id);

        if (!$product) {
            return redirect(route('admin.products.index'))->with('message', 'El producto no existe.');
        }
        // Form content
        $data = $request->all();

        $extraContent = [];
        if (!empty($data['extra_1'])) {
            $extraContent['activos'] = $data['extra_1'];
        }
        if (!empty($data['extra_2'])) {
            $extraContent['indicaciones'] = $data['extra_2'];
        }
        if (!empty($data['extra_3'])) {
            $extraContent['protocolo'] = $data['extra_3'];
        }
        // Create slug url
        $slug = 'producto-' . str_slug($data['name'], '-');

        // Process image
        if ($request->file('feature_image')) {
            $imageName = $slug . '.' . $request->file('feature_image')->getClientOriginalExtension();
            // remove if exists...
            if (file_exists(public_path() . '/public/uploads/products/' . $imageName)) {
                \File::delete(public_path() . '/public/uploads/products/' . $imageName);
            }
            // upload the new one...
            $request->file('feature_image')->move(base_path() . '/public/uploads/products/', $imageName);
            $product->feature_image = $imageName;
        }
        // Update model
        $product->name = $data['name'];
        $product->slug = $slug;
        $product->content = $data['content'];
        //$product->catalog_id = $data['catalog_id'];
        $product->featured = isset($data['featured']) ? $data['featured'] : 0;
        $product->active = $data['active'];
        if (!empty($extraContent)) {
            $product->extra_fields = json_encode($extraContent);
        }
        $product->save();

        return redirect(route('admin.products.index'))->with('message', 'Producto actualizado!');
    }

    public function delete($id)
    {
        //
    }

}

