<main class="auth">
    <h2 class="auth__heading"><?php echo $titulo; ?></h2>

    <p class="auth__texto"> Recupera tu acceso a MILENYUM-DOG</p>

    <?php 
    require_once __DIR__ . '/../templates/alertas.php';
    ?>

    <form method="POST" action="/olvide" class="formulario contenedor">
        <div class="formulario__campo">
            <label for="email" class="formulario__label">Email</label>
            <input

                type="email"
                class="formulario__input"
                placeholder="Tu email"
                id="email"
                name="email"
                >
        </div>

    
        <input type="submit" class="formulario__submit" value="Enviar Instrucciones">
    </form>

    <div class="acciones"> 
        <a href="/login" class="acciones__enlace">¿Ya tiene cuenta? Iniciar Sesión</a>
        <a href="/registro" class="acciones__enlace">¿Aún no tienes una cuenta? Obtener una</a>
        
    </div>

</main>

