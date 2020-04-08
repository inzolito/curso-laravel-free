<div class="row">
    <div class="col-md-12">

        <div class="form-group">
            <label for="nombre" class="col-form-label requerido">Nombre</label>
        <input type="text" name="nombre" id="nombre" class="form-control" value="{{old('nombre')}}"  required >
        </div> 


    </div>
</div>

<div class="row">
    <div class="col-md-12">

        <div class="form-group">
            <label for="url" class="col-form-label requerido">Url</label>
            <input type="text" name="url" id="url" class="form-control " value="{{old('url')}}"  required>
        </div> 

    </div>
</div> 
<div class="row">
    <div class="col-md-11">

        <div class="form-group">
            <label for="icono" class="col-form-label">Icono</label>
            <input type="text" name="icono" id="icono" class="form-control " value="{{old('icono')}}" >
        </div> 
    </div>
    <div class="col-md-1">
        <label for="mostrar-icono" class="col-form-label">prev</label>
        <span id="mostrar-icono" class="fa fa-fw{{old("icono")}}"></span>
    </div>
</div>