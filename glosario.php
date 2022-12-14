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
    <section id="miproyectog">
        <article id="proyector">
            <p>
            <h3>Glosario</h3>
            </p>
            <input type="text" id="myInput" onkeyup="myFunction()" placeholder="BUSCAR POR TERMINO">
            <table id="myTable" border="1">
                <tr id="cabeza">
                    <th id="termino">TERMINO</th>
                    <th id="definicion">DEFINICION</th>
                </tr>
                <?php
                include("./include/conect.php");
                $LinkBD=Conectarse("sql101.epizy.com" , "epiz_33095202" , "BPkRQbQUbR" , "epiz_33095202_web_personal_APRENDIZ"); 
                 $ScriptSQL = "SELECT * FROM glosario"; 
                if ($DatosGlosario = mysqli_query($LinkBD, $ScriptSQL )) {
                    while($fila=$DatosGlosario->fetch_array()){
                        echo " <tr>
                        <td id='terminos'>".$fila['termino']."</td>
                        <td id='cuadrito'>".$fila['definicion']."</td>
                    </tr>";
                    }
                    mysqli_free_result($DatosEstudio);
                }
                else {
                    printf("Hubo errores al leer los datos");
                    }
                    //Cerrar la conexión con el servidor de bases de datos:
                    mysqli_close($LinkBD); 
                
                ?>
                
            </table>
        </article>
    </section>
    <aside>
        <!-- definimos el bloque del LADO DERECHO -->
        <p>
        <h3>MATERIAS</h3>
        </p>
        <ul id="barra">
            <li><a href="matematicas.php">MATEMATICAS</a></li>
            <li><a href="programacion.php">PROGRAMACION</a></li>
            <ul>
    </aside>
    </main>
    <?php 
    include("piepagina.php");
    ?>
</body>

</html>