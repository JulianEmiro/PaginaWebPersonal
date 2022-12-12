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
                $conexion= mysqli_connect("localhost","root","","glosario");
                if($conexion){
                    $consulta="SELECT * FROM palabra";
                    $resultado = mysqli_query($conexion, $consulta);
                    while($fila=$resultado->fetch_array()){
                        echo " <tr>
                        <td id='terminos'>".$fila['termino']."</td>
                        <td id='cuadrito'>".$fila['definicion']."</td>
                    </tr>";
                    }
                }
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