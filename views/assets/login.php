<div id="mensajes"></div>

<div class="container" id="formLoginContainer">
    <form id="formLogin" action="index.php" method="POST" class="col-md-4 col-md-offset-4 panel panel-default">
        <div class="panel-body">
            <h3 class="text-center">Login</h3>
            <div class="input-group input-group-lg">
                <span class="input-group-addon " id="resultNickLogin"><i class="fa fa-user" aria-hidden="true">
                        <span class="glyphicon glyphicon-user"></span>
                    </i></span>
                <input type="text"  name="nick" id="nick" class="form-control" placeholder="Nick" aria-describedby="sizing-addon1" value="" required>
                <span id="nick"></span>
            </div>
            <br>
            <div class="input-group input-group-lg">
                <span class="input-group-addon" id="resultPassLogin"><i class="fa fa-key" aria-hidden="true">
                    <span class="glyphicon glyphicon-lock"></span>
                </i></span>
                <input type="password" name="pass" id="pass" class="form-control" placeholder="Password" required>
            </div>
            <br>
            <button type="button" name="submitLogin" id="submitLogin" class="btn btn-primary btn-block">Login</button>
            <button type="button" name="submitGetAccount" id="submitGetAccount" class="btn btn-warning btn-block">Get account</button>
        </div>
    </form>
</div>

<div class="container hidden" id="formAcountContainer">
    <form id="formGetAccount" action="index.php" method="POST" class="col-md-4 col-md-offset-4 panel panel-default">
        <div class="panel-body">
            <h3 class="text-center">Get Acount</h3>
            <div class="input-group input-group-lg">
                <span class="input-group-addon " id="resultNickGet"><i class="fa fa-user" aria-hidden="true">
                        <span class="glyphicon glyphicon-user"></span>
                    </i></span>
                <input type="text" name="nickGet" id="nickGet" maxlength="30" class="form-control" placeholder="Nick" aria-describedby="sizing-addon1" value="" required>
            </div>
            <br>
            <div class="input-group input-group-lg">
                <span class="input-group-addon" id="resultPassGet"><i class="fa fa-key" aria-hidden="true">
                    <span class="glyphicon glyphicon-lock"></span>
                </i></span>
                <input type="password" name="passGet" id="passGet" maxlength="30" class="form-control" placeholder="Password" required>
            </div>
            <br>
            <button type="button" name="addLogin" id="addLogin" class="btn btn-primary btn-block">Return login</button>
            <button type="button" name="submitRegistrar" id="submitRegistrar" class="btn btn-warning btn-block">Get acount</button>
        </div>
    </form>
</div>

