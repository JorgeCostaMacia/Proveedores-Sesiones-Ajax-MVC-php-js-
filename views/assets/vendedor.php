<form id="formularios" class="form-inline">
    <div class="form-group">
        <input type="text" id="itemSearch" class="form-control" placeholder="Vendedor search">
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
            <option value="numvend">Numvend</option>
            <option value="nomvend">Nomvend</option>
            <option value="nombrecomer">Nombrecomer</option>
            <option value="telefono">Telefono</option>
            <option value="calle">Calle</option>
            <option value="ciudad">Ciudad</option>
            <option value="provincia">Provincia</option>
            <option value="cod_postal">Cod_postal</option>
        </select>
    </div>
    <button type="button" id="buscarVendedor" name="buscarVendedor" class="btn btn-default">Buscar</button>
</form>

<div id="mensajes"></div>

<div class="container col-xs-12 col-sm-10 col-md-10 col-lg-10">
    <h2>Nuevo vendedor</h2>
    <table class="table table-hover">
        <thead>
        <tr>
            <th>Numvend</th>
            <th>Nomvend</th>
            <th>Nombrecomer</th>
            <th>Telefono</th>
            <th>Calle</th>
            <th>Ciudad</th>
            <th>Provincia</th>
            <th>Cod_postal</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>
                <input type="text" name="numvend" id="numvend" class="form-control" disabled>
            </td>
            <td>
                <input type="text"  name="nomvend" id="nomvend" maxlength="30" class="form-control" placeholder="Nombre completo">
            </td>
            <td>
                <input type="text"  name="nombrecomer" id="nombrecomer" maxlength="30" class="form-control" placeholder="Nombre comercial">
            </td>
            <td>
                <input type="text"  name="telefono" id="telefono" maxlength="15" class="form-control" placeholder="Telefono">
            </td>
            <td>
                <input type="text"  name="calle" id="calle" maxlength="30" class="form-control" placeholder="Calle">
            </td>
            <td>
                <input type="text"  name="ciudad" id="ciudad" maxlength="20" class="form-control" placeholder="Ciudad">
            </td>
            <td>
                <input type="text"  name="provincia" id="provincia" maxlength="20" class="form-control" placeholder="Provincia">
            </td>
            <td>
                <input type="text"  name="cod_postal" id="cod_postal" maxlength="5" class="form-control" placeholder="Codigo postal">
            </td>
            <td>
                <button type="button" name="addVendedor" id="addVendedor" class="btn btn-primary btn-block">Agregar</button>
            </td>
        </tr>
        </tbody>
    </table>
</div>

<div id="tablaVendedor" class="container col-xs-12 col-sm-10 col-md-10 col-lg-10">
</div>