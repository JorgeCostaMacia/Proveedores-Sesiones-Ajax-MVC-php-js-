<?php


$_ressult = $this->_connection->_select('Max(NUMVEND)', 'LoginAjax');
if (isset($_ressult["ressult"])) {
    $this->setVarios($this->_connection->format_select_Assoc($_ressult["ressult"]));
}
else if (isset($_ressult["error"])) {
    $this->addErrores($_ressult["error"]);
}






/* vendedor


<div class="container hidden" id="formAcountContainer">
    <form id="formLoginGetAccount" action="index.php" method="POST" class="col-md-4 col-md-offset-4 panel panel-default">
        <div class="panel-body">
            <h3 class="text-center">Add vendedor</h3>
            <div class="input-group input-group-lg">
                <span class="input-group-addon " id="resultNombreGet"><i class="fa fa-user" aria-hidden="true">
                        <span class="glyphicon glyphicon-user"></span>
                    </i></span>
                <input type="text"  name="nombre" id="nombre" maxlength="30" class="form-control" placeholder="Nombre completo" aria-describedby="sizing-addon1" value="" required>
            </div>
            <br>
            <div class="input-group input-group-lg">
                <span class="input-group-addon " id="resultNomComGet"><i class="fa fa-user" aria-hidden="true">
                        <span class="glyphicon glyphicon-user"></span>
                    </i></span>
                <input type="text"  name="nomCom" id="nomCom" maxlength="30" class="form-control" placeholder="Nombre comercial" aria-describedby="sizing-addon1" value="" required>
            </div>
            <br>
            <div class="input-group input-group-lg">
                <span class="input-group-addon " id="resultTelfGet"><i class="fa fa-user" aria-hidden="true">
                        <span class="glyphicon glyphicon-phone-alt"></span>
                    </i></span>
                <input type="text"  name="telf" id="telf" maxlength="15" class="form-control" placeholder="Telefono" aria-describedby="sizing-addon1" value="" required>
            </div>
            <br>
            <div class="input-group input-group-lg">
                <span class="input-group-addon " id="resultCalleGet"><i class="fa fa-user" aria-hidden="true">
                        <span class="glyphicon glyphicon-home"></span>
                    </i></span>
                <input type="text"  name="calle" id="calle" maxlength="30" class="form-control" placeholder="Calle" aria-describedby="sizing-addon1" value="" required>
            </div>
            <br>
            <div class="input-group input-group-lg">
                <span class="input-group-addon " id="resultCiudadGet"><i class="fa fa-user" aria-hidden="true">
                        <span class="glyphicon glyphicon-globe"></span>
                    </i></span>
                <input type="text"  name="ciudad" id="ciudad" maxlength="20" class="form-control" placeholder="Ciudad" aria-describedby="sizing-addon1" value="" required>
            </div>
            <br>
            <div class="input-group input-group-lg">
                <span class="input-group-addon " id="resultProvinciaGet"><i class="fa fa-user" aria-hidden="true">
                        <span class="glyphicon glyphicon-globe"></span>
                    </i></span>
                <input type="text"  name="provincia" id="provincia" maxlength="20" class="form-control" placeholder="Provincia" aria-describedby="sizing-addon1" value="" required>
            </div>
            <br>
            <div class="input-group input-group-lg">
                <span class="input-group-addon " id="resultCpGet"><i class="fa fa-user" aria-hidden="true">
                        <span class="glyphicon glyphicon-envelope"></span>
                    </i></span>
                <input type="text"  name="cp" id="cp" maxlength="5" class="form-control" placeholder="Codigo postal" aria-describedby="sizing-addon1" value="" required>
            </div>
            <br>
            <button type="button" name="addLogin" id="addLogin" class="btn btn-primary btn-block">Return login</button>
            <button type="button" name="submitRegistrar" id="submitRegistrar" class="btn btn-warning btn-block">Get acount</button>
        </div>
    </form>
</div>


*/



/*

                <?php
        foreach ($jugadores as $jugador){
            echo '<tr id="' . $jugador->getId(). '">';
            echo '<td>' . $jugador->getId() . '</td>';
            echo '<td>' . $jugador->getNombre() . '</td>';
            echo '<td>' . $jugador->getPosicion() . '</td>';
            echo '<td>' . round($jugador->getPartidos()) . '</td>';
            echo '<td>' . round($jugador->getPuntos()) . '</td>';
            echo '<td>' . round($jugador->getRebotes()) . '</td>';
            echo '<td>' . round($jugador->getAsistencias()) . '</td>';


            echo '<form id="formJugadores" class="navbar-form" action="index.php?page=jugadores" method="POST">';
            echo '<td><button type="submit" name="modificarJugador" value="' . $jugador->getId(). '" class="btn btn-warning btn-block">Modificar</button></td>';
            echo '<td><button type="button" name="borrarJugador" value="' . $jugador->getId(). '" class="btn btn-danger btn-block">Borrar</button></td>';
            echo '</form>';
            echo '</tr>';
        }
        ?>

 */


/*
 function clearPreciosum(){
    let tbody = document.getElementById("tbody");
    tbody.innerHTML = "";

    let trNode = document.createElement('tr');

    let tdNode = document.createElement('td');
    let selectNode = document.createElement("select");
    selectNode.setAttribute('name', 'numpieza');
    selectNode.setAttribute('id', 'numpieza');
    selectNode.setAttribute('class', 'form-control');
    tdNode.appendChild(selectNode);
    trNode.appendChild(tdNode);

    tdNode = document.createElement('td');
    selectNode = document.createElement('select');
    selectNode.setAttribute('name', 'numvend');
    selectNode.setAttribute('id', 'numvend');
    selectNode.setAttribute('class', 'form-control');
    tdNode.appendChild(selectNode);
    trNode.appendChild(tdNode);

    tdNode = document.createElement('td');
    let inputNode = document.createElement('input');
    inputNode.setAttribute('type', 'number');
    inputNode.setAttribute('name', 'preciounit');
    inputNode.setAttribute('id', 'preciounit');
    inputNode.setAttribute('min', 0);
    inputNode.setAttribute('step', 1);
    inputNode.setAttribute('value', 0);
    inputNode.setAttribute('class', 'form-control');
    tdNode.appendChild(inputNode);
    trNode.appendChild(tdNode);

    tdNode = document.createElement('td');
    inputNode = document.createElement('input');
    inputNode.setAttribute('type', 'number');
    inputNode.setAttribute('name', 'diassum');
    inputNode.setAttribute('id', 'diassum');
    inputNode.setAttribute('min', 0);
    inputNode.setAttribute('step', 1);
    inputNode.setAttribute('value', 0);
    inputNode.setAttribute('class', 'form-control');
    tdNode.appendChild(selectNode);
    trNode.appendChild(tdNode);

    tdNode = document.createElement('td');
    inputNode = document.createElement('input');
    inputNode.setAttribute('type', 'number');
    inputNode.setAttribute('name', 'descuento');
    inputNode.setAttribute('id', 'descuento');
    inputNode.setAttribute('min', 0);
    inputNode.setAttribute('step', 1);
    inputNode.setAttribute('value', 0);
    inputNode.setAttribute('class', 'form-control');
    tdNode.appendChild(selectNode);
    trNode.appendChild(tdNode);

    tdNode = document.createElement('td');
    let buttonNode = document.createElement('button');
    buttonNode.setAttribute('type', 'button');
    buttonNode.setAttribute('name', 'addPreciosum');
    buttonNode.setAttribute('id', 'addPreciosum');
    buttonNode.setAttribute('class', 'btn btn-primary btn-block');
    let textNode = document.createTextNode("Agregar");

    buttonNode.appendChild(textNode);
    tdNode.appendChild(buttonNode);
    trNode.appendChild(tdNode);

    tbody.appendChild(trNode);
}
 */


/*

    public function evalExistPreciosum(){
        $_connection = new DBusser();

        $numpieza = trim($_POST["numpieza"]);
        $numvend = trim($_POST["numvend"]);

        $_ressult = $_connection->_select('*', 'pieza', 'WHERE numpieza="' . $numpieza . '"');
        if (isset($_ressult["ressult"])) {
            $this->setPiezas($_connection->format_select_Object($_ressult["ressult"], 'Pieza'));
        }
        else if (isset($_ressult["error"])) {
            $this->addErrores($_ressult["error"]);
        }

        $_ressult = $_connection->_select('*', 'vendedor', 'WHERE numvend="' . $numvend . '"');
        if (isset($_ressult["ressult"])) {
            $this->setPiezas($_connection->format_select_Object($_ressult["ressult"], 'Vendedor'));
        }
        else if (isset($_ressult["error"])) {
            $this->addErrores($_ressult["error"]);
        }

    }

 */
