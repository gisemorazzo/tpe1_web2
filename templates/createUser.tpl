{include file='templates/header.tpl'}
    <div class="contenedor-general-login">

        <div class="container-login colorDiv">

            <div class="title-login">
                <h2 class="tituloLogin">Registrarse</h2>
            </div>

            <div class="form-createLogin">
                <form class="form-alta" action="createUser" method="post">
                    <div class="input-login">
                        <input class="loginInput" placeholder="email@email.com" type="email" name="email" id="email"
                            required>
                    </div>
                    <div class="input-login">
                        <input class="loginInput" placeholder="Nombre y Apellido" type="text" name="nombre"
                            required>
                    </div>
                    <div class="input-login">
                        <input class="loginInput" placeholder="password" type="password" name="password" id="password"
                            required>
                    </div>
                    <div class="btn-form-login mtt-2">
                        <input type="submit" class=" btn btn-sm btn-primary" value="Create">
                        <a class="btn btn-secondary btn-sm btn-create-user" href="login">Cancel</a>
                    </div>
                </form>

            </div>

            <h4 class="alert-danger">{$error}</h4>

        </div>

    </div>
</body>

</html>