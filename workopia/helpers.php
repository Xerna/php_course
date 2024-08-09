<?php

/**
 * GET THE ABSOLUTE PATH OF A FILE 
 * @param string $path
 * @return string
 */
function basePath($path = '')
{
    return __DIR__ . '/' . $path;
}
/**
 * LOAD A VIEW 
 * @param string $name
 * @return void
 */
function loadView($name, $data = [])
{
    $viewPath =  basePath("views/{$name}.view.php");
    if (file_exists($viewPath)) {
        extract($data);
        require $viewPath;
    } else {
        echo "View '{$viewPath}' NOT FOUND";
    }
}
function loadPartial($name)
{
    $partialPath =  basePath("views/partials/{$name}.php");
    if (file_exists($partialPath)) {
        require $partialPath;
    } else {
        echo "Partial '{$partialPath}' NOT FOUND";
    }
}
/**
 * INSPECT A VALUE
 * @param mixed $value
 * @return void
 */
function inspect($value)
{
    echo '<pre>';
    var_dump($value);
    echo '</pre>';
}
/**
 * INSPECT A VALUE AND STOP THE SCRIPT 
 * @param mixed $value
 * @return void
 */
function inspectAndDie($value)
{
    echo '<pre>';
    die(var_dump($value));
    echo '</pre>';
}
function formatSalary($salary)
{
    return "$" . number_format(floatval($salary), 2, ".");
}
