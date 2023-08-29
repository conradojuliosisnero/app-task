<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&family=Open+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
    <title>App task</title>
</head>

<body>
    <main class="container">

        <!-- formulario para gregar tareas  -->
        <form method="post" class="form">
            <div class="form__tittle"><label>Add Task</label></div>
            <textarea class="add__task" name="tarea" cols="30" rows="10"></textarea>
            <button class="button_task" name="insert" type="submit">+</button>
        </form>

        <!-- areas de tareas completadas  -->
        <div class="task__completed">
            <div class="task__completed--tittle">
                <h2>TASK COMPLETED</h2>
            </div>
        </div>

        <!-- validacion en caso que el campo este vacio  -->
        <?php

        if (isset($_POST['insert'])) {
            $tarea = $_POST['tarea'];
            if (!empty($tarea)) {
                require "./config.php";
                $query = $conect-> query("INSERT INTO task (tarea) VALUES ('$tarea')");
                if ($query) {
                    header("location: index.php");
                }
            } else {
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