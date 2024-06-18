<?php
$precios = [100, 200, 300, 400, 500];

function aplicarDescuentos(array $precios_productos, callable $aplicar_descuentos)
{
    $precios_descontados = [];
    foreach ($precios_productos as $precio_producto) {
        $precios_descontados[] = $aplicar_descuentos($precio_producto, 5);
    }
    return $precios_descontados;
}
$descontar_porcentaje = function ($precio, $descuento) {
    $precio = $precio - ($precio * ($descuento / 100));
    return $precio;
};

$precis_descontad = aplicarDescuentos($precios, $descontar_porcentaje);
print_r($precis_descontad);
