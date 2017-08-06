@extends('site.layout')

@section('sub-header')
<div class="gdlr-page-title-wrapper">
    <div class="gdlr-page-title-overlay"></div>
    <div class="gdlr-page-title-container container">
        <h1 class="gdlr-page-title">Contáctanos</h1>
        <span class="gdlr-page-caption gdlr-title-font">Si quieres saber más de nuestros productos.</span>
    </div>
</div>
@endsection

@section('content')
<div class="gdlr-content">
    <div class="with-sidebar-wrapper">
        <div class="with-sidebar-container container">
            <div class="with-sidebar-left twelve columns">
                <div class="with-sidebar-content eight columns">
                    <section id="content-section-1">
                        <div class="section-container container">
                            <div class="gdlr-item gdlr-content-item" style="margin-bottom: 60px;">
                                <p>
                                <div class="clear"></div>
                                <div class="gdlr-space" style="margin-top: -22px;"></div>
                                <h5 class="gdlr-heading-shortcode " style="font-weight: bold;">Llene todos los campos.</h5>
                                <div class="clear"></div>
                                <div class="gdlr-space" style="margin-top: 25px;"></div>
                                <div role="form" class="wpcf7" id="wpcf7-f4-o1" lang="en-US" dir="ltr">
                                    <div class="screen-reader-response"></div>
                                    <form action="#" method="post" class="wpcf7-form" novalidate="novalidate">
                                        <p>Su nombre (requerido)
                                            <br />
                                            <span class="wpcf7-form-control-wrap your-name"><input type="text" name="your-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" /></span> </p>
                                        <p>Su correo electrónico (requerido)
                                            <br />
                                            <span class="wpcf7-form-control-wrap your-email"><input type="email" name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" /></span> </p>
                                        <p>Asunto
                                            <br />
                                            <span class="wpcf7-form-control-wrap your-subject"><input type="text" name="your-subject" value="" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false" /></span> </p>
                                        <p>Mensaje
                                            <br />
                                            <span class="wpcf7-form-control-wrap your-message"><textarea name="your-message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false"></textarea></span> </p>
                                        <p>
                                            <input type="submit" value="Enviar" class="wpcf7-form-control wpcf7-submit" />
                                        </p>
                                        <div class="wpcf7-response-output wpcf7-display-none"></div>
                                    </form>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </section>
                </div>
                <div class="gdlr-sidebar gdlr-left-sidebar four columns">
                    <div class="gdlr-item-start-content sidebar-left-item">
                        <div id="text-6" class="widget widget_text gdlr-item gdlr-widget">
                            <h3 class="gdlr-widget-title">¿Tienes dudas? Agenda una visita</h3>
                            <div class="clear"></div>
                            <div class="textwidget">Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Non equidem invideo, miror magis posuere velit aliquet.</div>
                        </div>
                        <div id="text-7" class="widget widget_text gdlr-item gdlr-widget">
                            <h3 class="gdlr-widget-title">Información de contacto</h3>
                            <div class="clear"></div>
                            <div class="textwidget">
                                <p><i class="gdlr-icon fa fa-phone" style="color: #444444; font-size: 16px; "></i> +52 12-3456-7890</p>
                                <p><i class="gdlr-icon fa fa-envelope" style="color: #444444; font-size: 16px; "></i> contacto@leyddiguevara.com</p>
                                <p><i class="gdlr-icon fa fa-clock-o" style="color: #444444; font-size: 16px; "></i> Lun-Vie 9:00-18:00</p>
                            </div>
                        </div>
                        <div id="text-8" class="widget widget_text gdlr-item gdlr-widget">
                            <h3 class="gdlr-widget-title">Redes sociales</h3>
                            <div class="clear"></div>
                            <div class="textwidget">
                                <a href="#"><i class="gdlr-icon fa fa-facebook" style="color: #444444; font-size: 28px; " ></i></a>
                                <a href="#"><i class="gdlr-icon fa fa-twitter" style="color: #444444; font-size: 28px; " ></i></a>
                                <a href="#"><i class="gdlr-icon fa fa-pinterest" style="color: #444444; font-size: 28px; " ></i></a>
                                <a href="#"><i class="gdlr-icon fa fa-instagram" style="color: #444444; font-size: 28px; " ></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
            <div class="clear"></div>
        </div>
    </div>
</div>
@endsection

