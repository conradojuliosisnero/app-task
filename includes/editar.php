<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&family=Open+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
    <title>Editar Tareas</title>
</head>

<body>
    <?php
    require "./config.php";

    $id_tarea = $_GET['id'];

    $sql = $conect->query("SELECT * FROM task WHERE id = '$id_tarea'");
    $row = $sql->fetch_assoc();
    ?>

    <main class="container">

        <!-- formulario para gregar tareas  -->

        <form method="post" class="form">

            <!-- titulo del contenedor  -->
            <div class="form__tittle"><label>Editar Tarea</label></div>

            <!-- text area  -->
            <textarea class="add__task" name="tarea" cols="30" rows="10"><?= $row['tarea'] ?></textarea>
            <button class="button_task" name="editar" type="submit">Editar</button>
        </form>

        <!-- validacion en caso que el campo este vacio  -->
        <?php

        // si el textarea esta vacio entonces... 
        if (isset($_POST['editar'])) {

            $tarea = $_POST['tarea'];

            // si no esta vacio 
            if (!empty($tarea)) {

                // inportamos el archivo config 
                require "./config.php";

                // guardamos la informacion del textarea en la BD 
                $query = $conect->query("UPDATE task SET tarea = '$tarea' WHERE id = '$id_tarea'");

                // si query fue exitoso redirigimos a tareas completadas 
                if ($query) {
                    header("location: index.php");
                }
            } else {

                // imprimimos esto en pantalla 
        ?>
                <div class="label__error">
                    <label>Error el campo esta vacio</label>
                </div>
        <?php
            }
        }

        ?>

    </main>


</body>


</html>