<!DOCTYPE html>
<html lang="es">
    <?php 
    include("cabecera.php");
    ?>
    <body>
    <?php 
    include("menu.php");
    ?>
    <main>
            <section   class="form-register"> 
                <form  action="/my-handling-form-page" method="post">
                <center><p>formulario de contacto</p>
                <input class="controls" type="text" name="nombres"  id="nombres" placeholder="ingrese su nombre" required> 
                <input class="controls" type="text" apellido="apellidos"  id="apellidos" placeholder="ingrese su apellido" required>
                <input class="controls" type="tel" telefono="telefono"  id="telefono" placeholder="ingrese su telefono" pattern="[0-9]{10}" title="solo nuemros permitidos de 10 digitos" required>
                <div id="genero"> <label>Genero:</label><br>
                <input type="radio" name="genero">Masculino
                <input type="radio" name="genero">Femenino</div>
                <input class="controls" type="number range" edad="edad" id="edad" placeholder="Edad" pattern="[0-120]" required>
                <textarea class="controls" rows='6' placeholder="Mensaje" required></textarea>
                <input class="controls" type="email"email="email"  id="email" placeholder="ingrese su correo" required >
                <input class="controls" type="password" password="comtraseña"  id="contraseña" placeholder="ingrese su contraseña"><br>
                <p><input type="checkbox" required>estoy de acuerdo con<a href="#">terminos y condiciones</a></p>
                <div>
                    <button type="submit">ENVIAR</button>
                </div>
                <p><a href="#">¿ya tengo cuenta?</a></p></center> 
                </form> 
            </section>
            <aside id="barra1"> <!-- definimos el bloque del LADO DERECHO -->
                <p><h4>MIS REDES SOCIALES</h4></p>
                 <ul>
                 <li><a href="https://wa.me/3229520366"><img src="imagenes/imgw.png" height="50px"></a></li>
                 <li><a href="https://wa.me/3229520366"><img src="imagenes/imgi.png" height="50px"></a></li>
                 <li><a href="https://wa.me/3229520366"><img src="imagenes/imgf.jpg" height="50px"></a></li>
                 <ul>
            </aside> <!-- Aquí terminan los apartados o comentarios -->
    </main>

    <?php 
    include("piepagina.php");
    ?>
    </body>
</html>
 