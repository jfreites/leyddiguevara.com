@extends('admin.layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Mensaje del sistema:
                </div>

                <div class="panel-body">
                    @php
                        date_default_timezone_set('America/Mexico_City');
                        // 24-hour format of an hour without leading zeros (0 through 23)
                        $hour = date('G');

                        if ( $hour >= 5 && $hour <= 11 ) {
                            echo "¡Buenos días, ";
                        } else if ( $hour >= 12 && $hour <= 18 ) {
                            echo "¡Buenas tardes, ";
                        } else if ( $hour >= 19 || $hour <= 4 ) {
                            echo "¡Buenas noches, ";
                        }
                    @endphp
                    Administrador! Espero se encuentre bien.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
