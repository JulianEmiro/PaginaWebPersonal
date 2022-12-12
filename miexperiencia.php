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


    <aside>
        <!-- definimos el bloque del LADO DERECHO -->
        <p>
        <h3>MATERIAS</h3>
        </p>
        <ul id="barra">
            <li><a href="matematicas.php"> MATEMATICAS</a></li>
            <li><a href="programacion.php">DESARROLLO DE SOFTWARE</a></li>
            <ul>
    </aside> <!-- Aquí terminan los apartados o comentarios -->
    <section id="miproyectoe">
        <article id="proyector">
            <p>
            <h4>MATEMATICAS</h4>
            </p>
            <table border="0">
                <tr id="tabla">
                    <td id="tablas">
                        <figure id="f"><img src="imagenes/matematica.jpg" height="132px">
                    </td>
                    <td id="tablas2">
                        <center>ACTIVIDADES</center><br>
                        <a href="pdf.php?url=./trabajos/guía 1 Julian Emiro.pdf">-Guia1 </a><br>
                        <a href="pdf.php?url=./trabajos/guía 2 Julian Emiro.pdf">-Guia2</a><br>
                    </td>
                </tr>
            </table>
        </article>
    </section>
    <section id="miproyectoe">
        <article id="proyector">
            <p>
            <h4>Desarrollo de software</h4>
            </p>
            <table border="0">
                <tr id="tabla">
                    <td id="tablas">
                        <figure id="f"><img src="imagenes/software.jpg" height="132px">
                    </td>
                    <td id="tablas2">
                        <center>ACTIVIDADES</center><br>
                        <a href="glosario.php">-Glosario </a><br>
                        <a href="articulo.php">-Articulo Ciberseguridad </a><br>
                    </td>
                </tr>
            </table>
        </article>
    </section>
    </main>
    <?php 
    include("piepagina.php");
    ?>
</body>

</html>