<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/tareas/app-tareas/assets/css/style.css">
    <link rel="stylesheet" href="http://localhost/tareas/app-tareas/assets/css/task-completed.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&family=Open+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="http://localhost/tareas/app-tareas/includes/assets/css/task-completed.css">
    <title>Tareas Completadas</title>
</head>

<body>
    <main class="container">
        <div class="row">
            <table border="1" class="table">
                <tr>
                    <th>Tareas Completadas</th>
                </tr>
                <?php
                require "./config.php";

                // Obtener tareas completadas de la base de datos
                $query = $conect->query("SELECT * FROM task WHERE completada = 1");

                foreach ($query as $task) {
                ?>
                    <tr>
                        <td><?= $task['tarea'] ?></td>
                    </tr>
                <?php } ?>
            </table>
        </div>
        <a href="./index.php" class="btn__regresar">
        <button class="btn-53">
                <div class="original ">Regresar</div>
                <div class="letters">
                    <span>R</span>
                    <span>e</span>
                    <span>g</span>
                    <span>r</span>
                    <span>e</span>
                    <span>s</span>
                    <span>a</span>
                    <span>r</span>
                </div>
    </button>
        </a>
    </main>

    <!-- ... -->
</body>

</html>