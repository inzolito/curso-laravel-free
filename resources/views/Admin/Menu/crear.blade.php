<!-- Extendemos el tema  para poder incluir los sections que se cargan en los yilds -->
@extends("theme/$theme/layout")


@section('titulo')
    Crar Menú<script></script> | Finis
@endsection


<!-- cabecera modulo -->
@section('titulo-modulo')
    MENU
@endsection
@section('ruta-modulo')
    Admin / Crear menús
@endsection
<!-- fin cabecera -->


@section('scripts')
<script src="{{asset("assets/pages/scripts/admin/menu/crear.js")}}"  type="text/javascript" ></script>
@endsection


<!--contenido -->
@section('contenido')
 
<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
        @include('includes.form-error')
        @include('includes.form-success')
        <div class="card card-primary">
            
        <div class="card-header">
                <h3 class="card-title">formulario de creacion de menú</h3>
        </div>
        <form  action="{{route('guardar_menu')}}"    id="form-general" class="form-horizontal" method="POST">
                @csrf

                <div class="card-body">
                    @include('Admin.Menu.form')
                </div>
                <div class="card-footer">
                    <div class="col-lg-3"></div>
                    <div class="col-lg-6">
                        @include('includes.boton-form-crear')
                    </div>

                </div>

            </form>

        </div>
    </div>
    <div class="col-md-3"></div>
</div>




@endsection
 