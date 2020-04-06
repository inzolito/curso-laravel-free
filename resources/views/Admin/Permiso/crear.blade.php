<!-- Extendemos el tema  para poder incluir los sections que se cargan en los yilds -->
@extends("theme/$theme/layout")


@section('titulo')
    Permisos | Finis
@endsection


<!-- cabecera modulo -->
@section('titulo-modulo')
    PERMISOS
@endsection
@section('ruta-modulo')
    Admin / Permisos
@endsection
<!-- fin cabecera -->


<!--contenido -->
@section('contenido')
 
        <div class="card card-primary card-outline">
            <div class="card-header">
              <h3 class="card-title">
                <i class="fas fa-edit"></i>
                CREAR PERMISOS
              </h3>
            </div>
            <div class="card-body">
               
                FORMULARIO
              
            </div>
            <!-- /.card -->
        </div>





@endsection
 