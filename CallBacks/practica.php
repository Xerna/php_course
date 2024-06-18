
<?php
/*Desafío: Filtrar y Transformar una Lista de Usuarios
Tienes una lista de usuarios, cada uno representado como un array asociativo con las claves nombre, edad y email. Tu tarea es implementar una función que filtre a los usuarios por una edad mínima y luego aplique una transformación a los datos de los usuarios que pasen el filtro. Para esto, usarás callbacks tanto para la función de filtrado como para la de transformación.

Requisitos:
Función de filtrado:

La función debe recibir un array de usuarios, una edad mínima, y un callback de filtrado.
El callback de filtrado debe aceptar un usuario y retornar true si el usuario debe ser incluido y false si debe ser excluido.
Función de transformación:

La función debe recibir un array de usuarios filtrados y un callback de transformación.
El callback de transformación debe aceptar un usuario y retornar una versión transformada del mismo.
Ejemplo de uso:
Supongamos que tienes el siguiente array de usuarios
$usuarios = [
['nombre' => 'Juan', 'edad' => 25, 'email' => 'juan@example.com'],
['nombre' => 'Ana', 'edad' => 18, 'email' => 'ana@example.com'],
['nombre' => 'Pedro', 'edad' => 30, 'email' => 'pedro@example.com'],
];
*/
$usuarios = [
    ['nombre' => 'Juan', 'edad' => 25, 'email' => 'juan@example.com'],
    ['nombre' => 'Ana', 'edad' => 18, 'email' => 'ana@example.com'],
    ['nombre' => 'Pedro', 'edad' => 30, 'email' => 'pedro@example.com'],
];

function filtrado(array $usuarios, int $edad_minima, callable $callback_filtrado_edad)
{
    $usuario_filtrados = [];
    foreach ($usuarios as $usuario) {
        if ($callback_filtrado_edad($usuario, $edad_minima)) //return true 
        {
            $usuario_filtrados[] = $usuario;
        }
    }
    return $usuario_filtrados;
}
$callback_filtrado = function ($usuario, $edad_minima) {
    return $usuario['edad'] >= $edad_minima ? true : false;
}; //funciones anonimas llevan ; alfinal 

$usuarios_fil = filtrado($usuarios, 20, $callback_filtrado);
print_r($usuarios_fil);
function transformar_usuario(array $usuarios_ya_filtrados, callable $transformacion)
{
    $usuarios_ya_transformados = [];
    foreach ($usuarios_ya_filtrados as $usuarios) {
        $usuarios_ya_transformados[] =  $transformacion($usuarios);
    }
    return $usuarios_ya_transformados;
}
$callback_transformados = function ($usuarios) {
    $usuarios['nombre'] = strtoupper($usuarios['nombre']);
    return $usuarios;
};
$usuarios_finales = transformar_usuario($usuarios_fil, $callback_transformados);
