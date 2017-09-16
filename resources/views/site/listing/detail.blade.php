@extends('site.layout')

@section('content')
    <div class="gdlr-content" style="margin-top: 80px;">
        <div class="with-sidebar-wrapper">
            <div class="with-sidebar-container container">
                <div class="with-sidebar-left eight columns">
                    <div class="with-sidebar-content twelve columns gdlr-item-start-content">
                        <div class="gdlr-item woocommerce-content-item">
                            <div class="woocommerce-breadcrumbs">
                                <nav class="woocommerce-breadcrumb"><a href="/">Inicio</a>&nbsp;&#47;&nbsp;<a href="/catalogo/?name={{ $product->catalog->slug }}">{{ $product->catalog->name }}</a>&nbsp;&#47;&nbsp;{{ $product->name }}</nav>
                            </div>
                            <div class="woocommerce-content">
                                <div id="product-4764" class="post-4764 product type-product status-publish has-post-thumbnail product_cat-products product_tag-cleanser product_tag-facial first instock sale shipping-taxable purchasable product-type-simple">
                                    <!--<span class="onsale">Oferta!</span>-->
                                    <div class="gallery-product-images">
                                        <figure class="product-gallery__wrapper">
                                            <img width="571" height="400" src="/uploads/products/{{ $product->feature_image or 'empty-img.png' }}" />
                                        </figure>
                                    </div>
                                    <div class="summary entry-summary">
                                        <h1 class="product_title entry-title">{{ $product->name }}</h1>
                                        <!--<p class="price">
                                            <del><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&pound;</span>69.00</span>
                                            </del>
                                            <ins><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&pound;</span>59.00</span>
                                            </ins>
                                        </p>-->
                                        <div class="woocommerce-product-details__short-description">
                                            <p>{{ $product->content }}</p>
                                        </div>
                                        <!--<div class="product_meta">
                                            <span class="posted_in">Categoria: <a href="#" rel="tag">Faciales</a></span>
                                            <span class="tagged_as">Tags: <a href="#" rel="tag">Limpiador</a>, <a href="#" rel="tag">Facial</a></span>
                                        </div>-->
                                    </div>
                                    <!-- .summary -->
                                    <div class="woocommerce-tabs wc-tabs-wrapper">
                                        <!--<ul class="tabs wc-tabs" role="tablist">
                                            <li class="description_tab" id="tab-title-description" role="tab" aria-controls="tab-description">
                                                <a href="#">Tratamiento</a>
                                            </li>
                                            <li class="description_tab" id="tab-title-ingredientes" role="tab" aria-controls="tab-ingredientes">
                                                <a href="#">Ingredientes</a>
                                            </li>
                                        </ul>-->
                                        @if(!empty($product->extra_fields))
                                            @foreach(json_decode($product->extra_fields) as $extra => $value)
                                                <div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--description panel entry-content wc-tab" id="tab-description" role="tabpanel" aria-labelledby="tab-title-description">
                                                    <h2>{{ ucfirst($extra) }}</h2>
                                                    <p>{{ $value }}</p>
                                                </div>
                                            @endforeach
                                        @endif
                                    </div>
                                    <section class="related products">
                                        <h2>Productos relacionados</h2>
                                        <p>No hay productos relacionados</p>
                                        <!--<ul class="products">
                                            <li>Ninguno</li>
                                        </ul>-->
                                    </section>
                                </div>
                                <!-- end product detail -->
                            </div>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="gdlr-sidebar gdlr-right-sidebar four columns">
                    <div class="gdlr-item-start-content sidebar-right-item">
                        <div id="woocommerce_product_categories-2" class="widget woocommerce widget_product_categories gdlr-item gdlr-widget">
                            <h3 class="gdlr-widget-title">Productos por categoría</h3>
                            <div class="clear"></div>
                            <?php
                                $categories = \App\Category::whereCatalogId($product->catalog_id)->get();
                            ?>
                            <ul class="product-categories">
                                @if(count($categories) > 0)
                                    @foreach($categories as $category)
                                        @if($category->parent_id == 0)
                                        <li class="cat-item cat-item-{{ $category->id }}"><a href="#">{{ $category->name }}</a></li>
                                        @endif
                                    @endforeach
                                @else
                                    <p>No hay categorías en este momento</p>
                                @endif
                            </ul>
                        </div>
                        {{--<div id="woocommerce_top_rated_products-2" class="widget woocommerce widget_top_rated_products gdlr-item gdlr-widget">
                            <h3 class="gdlr-widget-title">Productos más comprados</h3>
                            <div class="clear"></div>
                            <ul class="product_list_widget">
                                <li>
                                    <a href="#">
                                        <img width="180" height="180" src="http://via.placeholder.com/180x180" sizes="(max-width: 180px) 100vw, 180px" />		<span class="product-title">Producto Demo 2</span>
                                    </a>
                                    <div class="star-rating"><span style="width:100%">Rateado <strong class="rating">5.00</strong> de 5</span></div>
                                </li>
                                <li>
                                    <a href="#">
                                        <img width="180" height="180" src="http://via.placeholder.com/180x180" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" />		<span class="product-title">Producto Demo 5</span>
                                    </a>
                                    <div class="star-rating"><span style="width:86.6%">Rateado <strong class="rating">4.33</strong> de 5</span></div>
                                </li>
                            </ul>
                        </div>--}}
                    </div>
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </div>
@endsection
