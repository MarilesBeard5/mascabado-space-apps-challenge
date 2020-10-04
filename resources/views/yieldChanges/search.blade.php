{!! Form::open(array('url'=>'yieldChanges','method'=>'GET','autocomplete'=>'off','role'=>'search')) !!}
<div class="form-group" >
        <select name="buscarpor" id="select" class="form-control">
            <option value="0">Todos</option>
            <option value="1">Residente</option>
            <option value="2">Guardia</option>
            <option value="3">Administrador</option>
            <option value="4">Proveedor</option>
        </select>
            <input name="buscarporapellido" class="form-control col-lg-4" type="search" placeholder="Nombre, correo, dirección..." aria-label="Search">

        <button class="btn btn-outline-primary" type="submit"><i class="zmdi zmdi-search"></i> Buscar</button>
  
        <a href="usuario/create" >
            <button class= "btn btn-primary"  role="button">
                <i class="zmdi zmdi-plus"></i> Nuevo Usuario
            </button>
        </a>
</div>

{{Form::close()}}