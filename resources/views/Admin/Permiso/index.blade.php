<!-- Extendemos el tema  para poder incluir los sections que se cargan en los yilds -->
@extends("theme/$theme/layout");


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
                LISTA DE PERMISOS
              </h3>
            </div>
            <div class="card-body">
               
                <table class="table table-bordered">
                    <thead>                  
                      <tr>
                        <th>ID</th>
                        <th>NOMBRE</th>
                        <th>SLUG</th>
                       </tr>
                    </thead>
                    <tbody>
                        @foreach ($permisos as $permiso)
                            <tr>
                                <td>{{$permiso->id}}</td>
                                <td>{{$permiso->nombre}}</td>
                                <td>{{$permiso->slug}}</td>
                             </tr>
                       @endforeach
                    </tbody>
                  </table>
              
            </div>
            <!-- /.card -->
        </div>





@endsection
 