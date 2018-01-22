<form id="formularios" class="form-inline">
    <div class="form-group">
        <input type="text" id="itemSearch" class="form-control" placeholder="Preciosum search">
    </div>
    <div class="form-group">
        <select name="typeSearch" id="typeSearch" class="form-control">
            <option value="contiene">Contiene</option>
            <option value="empieza">Empieza</option>
            <option value="termina">Termina</option>
        </select>
    </div>
    <div class="form-group">
        <select name="campSearch" id="campSearch" class="form-control">
            <option value="numpieza">Numpieza</option>
            <option value="numvend">Numvend</option>
            <option value="preciounit">Preciounit</option>
            <option value="diassum">Diassum</option>
            <option value="descuento">Descuento</option>
            <option value="nomvend">Nombvend</option>
            <option value="provincia">Provincia</option>
        </select>
    </div>
    <button type="button" id="buscarPreciosum" name="buscarPreciosum" class="btn btn-default">Buscar</button>
</form>

<div id="mensajes"></div>

<div class="container col-xs-12 col-sm-10 col-md-10 col-lg-10">
    <h2>Nuevo preciosum</h2>
    <table class="table table-hover">
        <thead>
        <tr>
            <th>Numpieza</th>
            <th>Numvend</th>
            <th>Preciounit</th>
            <th>Diassum</th>
            <th>Descuento</th>
            <th></th>
            <th></th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <select name="numpieza" id="numpieza" class="form-control"></select>
                </td>
                <td>
                    <select name="numvend" id="numvend" class="form-control"></select>
                </td>
                <td>
                    <input type="number" name="preciounit" id="preciounit" min="0" step="1" value="0" class="form-control">
                </td>
                <td>
                    <input type="number" name="diassum" id="diassum" min="0" step="1" value="0" class="form-control">
                </td>
                <td>
                    <input type="number" name="descuento" id="descuento" min="0" max="100" step="1" value="0" class="form-control">
                </td>
                <td>
                    <button type="button" name="addPreciosum" id="addPreciosum" class="btn btn-primary btn-block">Agregar</button>
                </td>
            </tr>
        </tbody>
    </table>
</div>

<div id="tablaPreciosum" class="container col-xs-12 col-sm-10 col-md-10 col-lg-10">
</div>