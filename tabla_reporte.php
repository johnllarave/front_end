<?php

include 'config.php';

if ($_POST['curso'] != '') {
    $condicion .= "WHERE curso.cu_id = '" . mysqli_real_escape_string($conexion, $_POST['curso']) . "'";
}

$query ="SELECT cu_nombre, cu_area, cu_fecha, cu_hora, ins_nombre, ins_apellido, ins_correo, ins_telefono, ins_ciudad, ins_terminos, ins_fecha_inscripcion
        FROM inscripcion
        INNER JOIN curso ON inscripcion.cu_id = curso.cu_id
        ".$condicion." ";

$result = $conexion->query($query) or die(mysqli_errno($conexion) . ": " . mysqli_error($conexion) . " ");

?>
<div class="ibox-content">
    <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover" id="tabla">
            <thead>
                <tr>
                    <th>Curso</th>
                    <th>Área</th>
                    <th>Fecha</th>
                    <th>Hora</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Correo</th>
                    <th>Teléfono</th>
                    <th>Ciudad</th>
                    <th>Acepta TC</th>
                    <th>Fecha Inscripción</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while ($row = $result->fetch_assoc()) {
                        if ($row['ins_terminos'] == 1) {
                            $terminos = "Acepta";
                        } else {
                            $terminos = "No acepta";
                        }

                        echo "<tr>";
                        echo "<td>".$row['cu_nombre']."</td>";
                        echo "<td>".$row['cu_area']."</td>";
                        echo "<td>".$row['cu_fecha']."</td>";
                        echo "<td>".$row['cu_hora']."</td>";
                        echo "<td>".$row['ins_nombre']."</td>";
                        echo "<td>".$row['ins_apellido']."</td>";
                        echo "<td>".$row['ins_correo']."</td>";
                        echo "<td>".$row['ins_telefono']."</td>";
                        echo "<td>".$row['ins_ciudad']."</td>";
                        echo "<td>".$terminos."</td>";
                        echo "<td>".$row['ins_fecha_inscripcion']."</td>";
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>
    </div>
</div>

<?php include 'config_table.php';?>