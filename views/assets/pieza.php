<form id="formularios" class="form-inline">
    <div class="form-group">
        <input type="text" id="itemSearch" class="form-control" placeholder="Pieza search">
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
            <option value="nompieza">Nompieza</option>
            <option value="preciovent">Preciovent</option>
        </select>
    </div>
    <button type="button" id="buscarPieza" name="buscarPieza" class="btn btn-default">Buscar</button>
</form>

<div id="mensajes"></div>

<div class="container col-xs-12 col-sm-10 col-md-10 col-lg-10">
    <h2>Nueva pieza</h2>
    <table class="table table-hover">
        <thead>
        <tr>
            <th>Numpieza</th>
            <th>Nompieza</th>
            <th>Preciovent</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>
                <input type="text" name="numpieza" id="numpieza" maxlength="16" placeholder="Numero pieza" class="form-control">
            </td>
            <td>
                <input type="text"  name="nompieza" id="nompieza" maxlength="30" class="form-control" placeholder="Nombre pieza">
            </td>
            <td>
                <input type="number"  name="preciovent" id="preciovent" class="form-control" value="0" min="0" step="1" placeholder="Precio venta">
            </td>
            <td>
                <button type="button" name="addPieza" id="addPieza" class="btn btn-primary btn-block">Agregar</button>
            </td>
        </tr>
        </tbody>
    </table>
</div>

<div id="tablaPieza" class="container col-xs-12 col-sm-10 col-md-10 col-lg-10">
</div>