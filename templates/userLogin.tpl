{include file='templates/header.tpl'}
    <div class="contenedor-general-login">
        <div class="container-login colorDiv">

            <div class="title-login">
                <h2 class="tituloLogin">Loguearse</h2>
               

            <div class="form-login">
                <form class="form-alta" action="verify" method="post">
                   
                    <div class="inputs-form">
                        <div class="input-login">
                            <input class="email loginInput" placeholder="email" type="text" name="email" id="email@email.com"
                                required>
                        </div>
                        <div class="input-login">
                            <input class="password loginInput" placeholder="password" type="password" name="password"
                                id="password" required>
                        </div>
                    </div>
                    <div class="btn-form-login mtt-2">
                        <a class="btn btn-success btn-sm btn-create-user" href="createLogin">Registrarse</a>
                        <input type="submit" class=" btn btn-sm btn-primary" value="Login">
                    </div>
                    <h4><span class="red-alert">{$error}</span></h4>
                </form>
            </div>
        </div>
    </div>
</body>

</html>