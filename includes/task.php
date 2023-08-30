<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/tareas/app-tareas/includes/assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&family=Open+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
    <title>App task</title>
</head>

<body>
    <main class="container">

        <!-- formulario para gregar tareas  -->
        <form method="post" class="form">
            <div><h1 class="tittle">APP TASK</h1></div>
            <div class="form__tittle"><label>Añada aqui, sus tareas de manera facil</label></div>
            <textarea class="add__task" name="tarea" cols="30" rows="10"></textarea>
            <div class="contend__btn">
            <button class="btn-53" name="insert" type="submit">
                <div class="original">Añadir Tarea</div>
                <div class="letters">
                    <span>A</span>
                    <span>ñ</span>
                    <span>a</span>
                    <span>d</span>
                    <span>i</span>
                    <span>r</span>
                </div>
            </button>

            <button class="btn-53">
                <div class="original">Ver Tareas</div>
                <div class="letters">
                    <span>V</span>
                    <span>e</span>
                    <span>r</span>
                </div>
            </button>
            </div>
        </form>
        <!-- validacion en caso que el campo este vacio  -->
        <?php

        // si el textarea esta vacio entonces... 
        if (isset($_POST['insert'])) {

            $tarea = $_POST['tarea'];

            // si no esta vacio 
            if (!empty($tarea)) {

                // inportamos el archivo config 
                require "./config.php";

                // guardamos la informacion del textarea en la BD 
                $query = $conect->query("INSERT INTO task (tarea) VALUES ('$tarea')");

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