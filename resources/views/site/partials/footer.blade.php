<footer class="footer-wrapper">
    <div class="footer-container container">
        <div class="footer-column three columns" id="footer-widget-1">
            <div id="text-5" class="widget widget_text gdlr-item gdlr-widget">
                <div class="textwidget">
                    <p><img src="/images/logo_logo.png" style="width: 160px;" alt="" /></p>
                    <p>Proveedora de los mejores productos estéticos, teniendo como objetivo brindarle una asesoría directa a Ud. como médico que merece un servicio exclusivo; para a su vez ofrecerle al paciente tecnología, calidad y eficiencia en belleza.</p>
                    <br>
                    <p>Para conocer más, visita <a href="https://www.webciruderm.com/" target="_blank">Ciruderm</a>.</p>
                </div>
            </div>
        </div>
        <div class="footer-column three columns" id="footer-widget-2">
            <div id="recent-posts-4" class="widget widget_recent_entries gdlr-item gdlr-widget">
                <h3 class="gdlr-widget-title">Articulos recientes</h3>
                <div class="clear"></div>
                <ul>
                    <li>
                        <a href="#">Sem Porta Mollis Parturient</a>
                    </li>
                    <li>
                        <a href="#">Nullam Lorem Mattis Purus</a>
                    </li>
                    <li>
                        <a href="#">Nibh Sem Sit Ullamcorper</a>
                    </li>
                    <li>
                        <a href="#">Donec luctus imperdiet</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="footer-column three columns" id="footer-widget-3">
            <div id="gdlr-recent-portfolio2-widget-5" class="widget widget_gdlr-recent-portfolio2-widget gdlr-item gdlr-widget">
                <h3 class="gdlr-widget-title">Últimos productos</h3>
                <div class="clear"></div>
                <div class="gdlr-recent-port2-widget">
                    @php
                        $products = \App\Product::orderBy('created_at')->limit(6)->get();
                    @endphp
                    @foreach($products as $prd)
                    <div class="recent-port-widget-thumbnail">
                        <a href="/{{ $prd->slug }}">
                            <img src="/uploads/products/{{ $prd->feature_image or 'empty-img.png' }}" alt="{{ $prd->name }}" width="150" height="150" />
                        </a>
                    </div>
                    @endforeach
                    <div class="clear"></div>
                </div>
            </div>
        </div>
        <div class="footer-column three columns" id="footer-widget-4">
            <div id="text-11" class="widget widget_text gdlr-item gdlr-widget">
                <h3 class="gdlr-widget-title">Información de contacto</h3>
                <div class="clear"></div>
                <p><i class="gdlr-icon fa fa-phone" style="color: #fff; font-size: 16px; "></i> +52 12-3456-7890</p>
                <p><i class="gdlr-icon fa fa-envelope" style="color: #fff; font-size: 16px; "></i> leyddiguevara@ciruderm.info</p>
            </div>
        </div>
    </div>
    <div class="clear"></div>
    </div>
    <div class="copyright-wrapper">
        <div class="copyright-container container">
            <div class="copyright-social-wrapper">
                <div class="social-icon">
                    <a href="#" target="_blank">
                        <img width="32" height="32" src="http://cdn-second.goodlayers.com/skinbeauty/wp-content/themes/skinbeauty/images/light/social-icon/facebook.png" alt="Facebook" />
                    </a>
                </div>
                <div class="social-icon">
                    <a href="#" target="_blank">
                        <img width="32" height="32" src="http://cdn-second.goodlayers.com/skinbeauty/wp-content/themes/skinbeauty/images/light/social-icon/twitter.png" alt="Twitter" />
                    </a>
                </div>
                <div class="clear"></div>
            </div>
            <div class="copyright-left">
                <a href="#" style="margin-right: 10px;">Inicio</a>|<a href="#" style="margin-right: 10px; margin-left: 10px;">Nosotros</a> | <a href="#" style="margin-right: 10px; margin-left: 10px;">Blog</a> | <a href="#" style="margin-left: 10px;">Contacto</a> </div>
            <div class="copyright-right">
                Todos los derechos reservados, 2017. Teosyal e Inno son marcas registradas.</div>
            <div class="clear"></div>
        </div>
    </div>
</footer>
