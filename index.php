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
    <title>Tareas en Curso</title>
</head>

<body>
    <main class="container">
        <div class="row">
            <table border="1" class="table">
                <tr>
                    <th>ID</th>
                    <th>Tareas</th>
                    <th>Fecha</th>
                    <th></th>
                    <th class="opciones">Opciones</th>
                    <th></th>
                    <!-- <th>Completadas</th> -->
                </tr>
                <?php
                require "./config.php";
                $query = $conect->query("SELECT * FROM task WHERE completada = 0");
                foreach ($query as $key => $value) {

                ?>
                    <tr>
                        <th scope="row"><?= $value['id'] ?></th>
                        <td><?= $value['tarea'] ?></td>
                        <td><?= $value['fecha'] ?></td>
                        <td>
                            <a class="btn__link" href="editar.php?id=<?= $value['id']; ?>">
                                <button class="btn btn__editar">Editar</button>
                            </a>
                        </td>
                        <td>
                            <a href="eliminar.php?id=<?= $value['id']; ?>">
                                <button class="btn btn__eliminar">Eliminar</button>
                            </a>
                        </td>
                        <td>
                            <a href="completed.php?id=<?= $value['id']; ?>">
                                <button class="btn btn__terminar">Terminar</button>
                            </a>
                        </td>
                    </tr>
                <?php }; ?>
            </table>
        </div>
    </main>

    <div class="buttons__index">

        <a href="./task.php">
        <button class="btn-53" name="insert" type="submit">
                <div class="original">Mas Tareas</div>
                <div class="letters">
                    <span>A</span>
                    <span>ñ</span>
                    <span>a</span>
                    <span>d</span>
                    <span>i</span>
                    <span>r</span>
                </div>
    </button>
        </a>

        <a href="./task-completed.php" class="btn-tarea__completada">
            <button class="btn-53">Tareas Completadas</button>
        </a>
    </div>

</body>


</html>