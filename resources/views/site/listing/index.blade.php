@extends('site.layout')

@section('content')
    <div class="gdlr-content">
        <!-- Above Sidebar Section-->
        <!-- Sidebar With Content Section-->
        <div class="with-sidebar-wrapper">
            <section id="content-section-1">
                <!--<div class="gdlr-parallax-wrapper gdlr-background-image gdlr-show-all gdlr-skin-dark" id="gdlr-parallax-wrapper-1" data-bgspeed="0.1" style="background-image: url('http://cdn-second.goodlayers.com/skinbeauty/wp-content/uploads/2015/05/title-bg-2.jpg'); padding-top: 245px; padding-bottom: 80px; ">-->
                @if($catalog->id == 2)
                <div class="gdlr-parallax-wrapper gdlr-background-image gdlr-show-all gdlr-skin-dark" id="gdlr-parallax-wrapper-1" data-bgspeed="0.1" style="background-image: url('/images/banner_products.jpg'); padding-top: 245px; padding-bottom: 80px; ">
                @elseif($catalog->id == 1)
                <div class="gdlr-parallax-wrapper gdlr-background-image gdlr-show-all gdlr-skin-dark" id="gdlr-parallax-wrapper-1" data-bgspeed="0.1" style="background-image: url('/images/banner_inno.jpg'); padding-top: 245px; padding-bottom: 80px; ">
                @endif
                    <div class="container">
                        <div class="gdlr-title-item">
                            <div class="gdlr-item-title-container container ">
                                <div class="gdlr-item-title-wrapper gdlr-item pos-center ">
                                    <div class="gdlr-item-title-head">
                                        <h3 class="gdlr-item-title gdlr-skin-title gdlr-skin-border">Catálogo de productos {{ $catalog->name or '' }}</h3>
                                        <div class="clear"></div>
                                    </div>
                                    <div class="gdlr-item-title-caption gdlr-skin-info">Nuestros productos destacados</div>
                                </div>
                            </div>
                        </div>
                        <div class="clear"></div>
                        <div class="clear"></div>
                    </div>
                </div>
                <div class="clear"></div>
            </section>
            <section id="content-section-2">
                <div class="gdlr-color-wrapper  gdlr-show-all no-skin" style="background-color: #f7f7f7; padding-bottom: 0px; ">
                    <div class="container">
                        <div class="portfolio-item-wrapper type-classic2-portfolio" data-ajax="http://demo.goodlayers.com/skinbeauty/wp-admin/admin-ajax.php">
                            <div class="portfolio-item-holder  gdlr-portfolio-column-3">
                                <div class="gdlr-isotope" data-type="portfolio" data-layout="fitRows">
                                    <div class="clear"></div>
                                    <!-- listing products -->
                                    @if($catalog)
                                        @foreach(array_chunk($catalog->products->all(), 3) as $chunk)
                                            @foreach($chunk as $product)
                                                <div class="four columns">
                                                    <div class="gdlr-item gdlr-portfolio-item gdlr-classic2-portfolio">
                                                        <div class="gdlr-ux gdlr-classic-portfolio-ux">
                                                            <div class="portfolio-thumbnail gdlr-image">
                                                                @if ($product->feature_image && file_exists(public_path('uploads/products/'.$product->feature_image)))
                                                                    <img src="{{ asset('uploads/products').'/'.$product->feature_image }}" alt="{{ $product->name }}" width="700" height="400" />
                                                                @else
                                                                    <img src="{{ asset('uploads/products/empty-img.png') }}" alt="{{ $product->name }}" width="700" height="400" />
                                                                @endif
                                                                <div class="product-overlay-wrapper">
                                                                    <div class="product-overlay"></div>
                                                                    <div class="product-overlay-content">
                                                                        <a class="product-overlay-link" href="/p/{{ $product->slug }}">
                                                                            <i class="icon-link fa fa-link" ></i>
                                                                            <span class="gdlr-title-font">Leer Más</span>
                                                                        </a>
                                                                        <div class="clear"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <h3 class="portfolio-title with-price">
                                                                <a href="/p/{{ $product->slug }}">{{ $product->name }}</a>
                                                                    {{--<span class="gdlr-port-price">
                                                                        <span class="woocommerce-Price-amount amount">
                                                                            <span class="woocommerce-Price-currencySymbol">&#36;</span>99.00</span>
                                                                    </span>--}}
                                                            </h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                            <div class="clear"></div>
                                        @endforeach
                                    @else
                                        <p>No existen productos para este catálogo...</p>
                                    @endif
                                    <!-- ./listing products -->
                                </div>
                                <div class="clear"></div>
                            </div>
                            {{--
                            <div class="gdlr-pagination"><span class='page-numbers current'>1</span>
                                <a class='page-numbers' href='#'>2</a>
                                <a class="next page-numbers" href="#">Siguiente &rsaquo;</a></div>
                                --}}
                        </div>
                        <div class="clear"></div>
                        <div class="clear"></div>
                    </div>
                </div>
                <div class="clear"></div>
            </section>
        </div>
        <!-- Below Sidebar Section-->
    </div>
@endsection
