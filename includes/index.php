<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/task-completed.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&family=Open+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
    <title>Tareas completadas</title>
</head>

<body>
    <main class="container">
        <div class="row">
            <table border="1" class="table">
                <tr>
                    <th>ID</th>
                    <th>Tareas</th>
                    <th>Fecha</th>
                    <th>Opciones</th>
                    <!-- <th>Completadas</th> -->
                </tr>
                <?php
                require "./config.php";
                $query = $conect->query("SELECT * FROM task");
                foreach ($query as $key => $value) {

                ?>
                    <tr>
                        <th scope="row"><?= $value['id'] ?></th>
                        <td><?= $value['tarea'] ?></td>
                        <td><?= $value['fecha'] ?></td>
                        <td>
                            <a class="btn__link" href="editar.php?id=<?=$value['id'];?>">
                                <button class="btn btn__editar">Editar</button>
                            </a>
                            <a href="eliminar.php?id=<?=$value['id'];?>">
                                <button class="btn btn__eliminar">Eliminar</button>
                            </a>
                        </td>
                    </tr>
                <?php }; ?>
            </table>
        </div>
    </main>

    <a href="./task.php" class="btn-tarea--return">
        <button>Agregar Mas Tareas</button>
    </a>

</body>


</html>