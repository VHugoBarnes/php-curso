<aside id="barraLateral">

    <div id="buscador" class="block-aside">
        <h3>Buscar</h3>
    
        <form action="buscar.php" method="POST">
            <input type="text" name="busqueda">
            <input type="submit" value="Buscar">
        </form>
    </div>

    <!-- LOGIN -->

    <?php if(isset($_SESSION['usuario'])): ?>
        <div id="usuario-logueado" class="block-aside">
            <h3>Bienvenido, <?= $_SESSION['usuario']['nombre'].' '.$_SESSION['usuario']['apellidos'] ?></h3>
            <!-- Botones -->
            <a href="crear-entrada.php" class="boton boton-verde">Crear entrada</a>
            <a href="crear-categoria.php" class="boton boton-morado">Crear categoria</a>
            <a href="mis-datos.php" class="boton boton-naranja">Mi perfil</a>
            <a href="cerrar.php" class="boton boton-rojo">Cerrar sesión</a>
        </div>
    <?php endif; ?>

    <?php if( !isset($_SESSION['usuario'])): ?>
    <div id="inicioSesion" class="block-aside">
        <h3>Identifícate</h3>

        <?php if(isset($_SESSION['error_login'])): ?>
            <div class="alerta alerta-error">
                <?= $_SESSION['error_login']; ?>
            </div>
        <?php endif; ?>
    
        <form action="login.php" method="POST">
            <label for="email">e-mail</label>
            <input type="email" name="email">
            <label for="password">Contraseña</label>
            <input type="password" name="password">
            <input type="submit" value="Entrar">
        </form>
    </div>
    <!-- REGISTER -->
    <div id="registro" class="block-aside">
        <h3>Regístrate</h3>

        <!-- Mostrar errores -->
        <?php if( isset($_SESSION['completado']) ):  ?>
            <div class="alerta alerta-exito">
                <?=$_SESSION['completado']?>
            </div>
        <?php elseif(isset($_SESSION['errores']['general'])): ?>
            <div class="alerta alerta-error">
                <?=$_SESSION['errores']['general']?>
            </div>
        <?php endif; ?>

        <form action="registro.php" method="POST">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre">
            <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'nombre') : ''?>

            <label for="apellidos">Apellidos</label>
            <input type="text" name="apellidos">
            <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'apellidos') : ''?>

            <label for="email">e-mail</label>
            <input type="email" name="email">
            <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'email') : ''?>

            <label for="password">Contraseña</label>
            <input type="password" name="password">
            <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'password') : ''?>

            <input type="submit" name="submit" value="Registrarse">
        </form>
        <?php borrarError() ?>
    </div>
    <?php endif; ?>
</aside>