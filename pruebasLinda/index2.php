<?php
session_start();

if (!isset($_SESSION['arr'])) {
    $arr_lista = [
        "name" => "Manzana",
        "peso" => "16kg"
    ];
    $arr_lista2 = [
        "name" => "Naranja",
        "peso" => "11kg"
    ];
    $_SESSION['arr'] = [
        [
            "uniqid" => "as",
            "lista" => $arr_lista
        ],
        [
            "uniqid" => "sa",
            "lista" => $arr_lista2
        ]
    ];
}

$arr = $_SESSION['arr'];

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['uniqid'])) {
    $uniqid = $_POST['uniqid'];
    foreach ($arr as $key => $elemento) {
        if ($elemento['uniqid'] === $uniqid) {
            unset($arr[$key]);
            break;
        }
    }
    // Re-indexar array para evitar huecos
    $arr = array_values($arr);
    $_SESSION['arr'] = $arr;
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <div class="container mx-auto mt-5">
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Peso</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($arr as $elemento) : ?>
                    <tr>
                        <td><?php echo $elemento['lista']['name']; ?></td>
                        <td><?php echo $elemento['lista']['peso']; ?></td>
                        <td>
                            <form method="POST">
                                <input type="hidden" name="uniqid" value="<?php echo $elemento['uniqid']; ?>">
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

</body>

</html>