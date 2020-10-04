{!! Form::open(array('url'=>'ycUSAWheat','method'=>'GET','autocomplete'=>'off','role'=>'search')) !!}
<div class="form-group" >

        <select name="buscarporyear" id="select" class="form-control">
            <option value="0">Año</option>
            <option value="2020">2020</option>
            <option value="2050">2050</option>
            <option value="2080">2080</option>
        </select>
        <select name="buscarportipo" id="select" class="form-control">
            <option value="0">Escenario</option>
            <option value="A1">A1</option>
            <option value="A2">A2</option>
            <option value="B1">B1</option>
            <option value="B2">B2</option>
        </select>

        <button class="btn btn-outline-primary" type="submit"><i class="zmdi zmdi-search"></i> Buscar</button>
  
</div>

{{Form::close()}}