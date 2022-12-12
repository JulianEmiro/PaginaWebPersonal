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
        <!-- definimos los contenidos agrupados en la etiqueta <main> "-->
        <section id="section1">
            <!-- definimos secciones de contenidos (LADO IZQUIERDO)-->
            <article id="mi-perfil">
                <p>
                <h4>Mi perfil profesional</h4>Como programador de software y diseñador
                web, poseo los conocimientos habilidades
                para desempeñarme en diferentes cargos
                afines con mi profesión. Entre ellos:</p>
            </article>

            <article id="detalle-perfil">
                <p>
                <ul>
                    <li>Analista de distemas
                    <li>Desarrollador de software
                    <li>Administrador de base de datos
                </ul>
                </p>
            </article>
        </section> <!-- Aquí termina la sección de artículos -->

        <aside id="barra1"> <!-- definimos el bloque del LADO DERECHO -->
            <p><h4>MIS REDES SOCIALES</h4></p>
             <ul>
             <li><a href="https://wa.me/3229520366"><img src="imagenes/imgw.png" height="50px"></a></li>
             <li><a href="https://wa.me/3229520366"><img src="imagenes/imgi.png" height="50px"></a></li>
             <li><a href="https://wa.me/3229520366"><img src="imagenes/imgf.jpg" height="50px"></a></li>
             <ul>
        </aside>
         <!-- Aquí terminan los apartados o comentarios -->
        <section id="miproyecto">
            <article id="proyector">
                <p>
                <h4>Mi Proyecto de Vida</h4>
                </p>
                <table border="0">
                    <tr id="tabla">
                        <td id="tablas">
                            <figure id="f"><img src="imagenes/proyecto.jpg" height="180px">
                        </td>
                        <td id="tablas2"> Finalizar mi tegnologo en Analisis y desarrollo de software para desempeñarme
                            en actividades entorno al desarrollo de aplicaciones,paginas web, y algoritmos dandome la
                            oportunidad de emprender y asi mismo integrar mis conocimientos para con la comunidad </td>
                    </tr>
                </table>
            </article>
        </section>
    </main> <!-- Aquí terminan los contenidos principales -->
<?php 
include("piepagina.php");
?>

</body>

</html>