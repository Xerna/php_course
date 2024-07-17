<?php
session_start();

if (!isset($_SESSION['fruits'])) {
    $_SESSION['fruits'] = array();
}

if (isset($_POST['fruit'])) {
    $fruit = htmlspecialchars($_POST['fruit']);
    $_SESSION['fruits'][] = $fruit;
}

echo getTableRows();

function getTableRows()
{
    $rows = '';
    if (isset($_SESSION['fruits']) && count($_SESSION['fruits']) > 0) {
        foreach ($_SESSION['fruits'] as $fruit) {
            $rows .= '<tr><td>' . $fruit . '</td><td><button class="delete-btn" data-fruit="' . $fruit . '">Eliminar</button></td></tr>';
        }
    }
    return $rows;
}
