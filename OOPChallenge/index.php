<?php
class Article
{
    public String $title;
    public String $content;
    private bool $published = false;

    public function __construct(String $title, String $content)
    {
        $this->title = $title;
        $this->content = $content;
    }

    public function publish()
    {
        $this->published = true;
    }
    public function isPublished()
    {
        return $this->published;
    }
}
$article1 = new Article('TORTA ¿MAS CERCA DEL SANDWICH O DE LA HAMBURGUESA?', 'DURANTE SIGLOS SE HA TENIDO ESTE DEBATE DE TANTA RELEVACIA PARA LA HUMANIDAD...');
$article2 = new Article('¿CUAL ES LA MEJOR PELICULA DE BARBIE Y PORQUE ESCUELA DE PRINCESAS?', 'EL LAGO DE LOS CISNES, FAIRYTOPIA...');

$article2->publish();
var_dump($article1->isPublished());
var_dump($article2->isPublished());


//Chalenge2
class StringUtility
{
    public static function shout($string)
    {
        return strtoupper($string . "!");
    }
    public static function whisper($string)
    {
        return strtolower($string . ".");
    }
    public static function repeat($string, $times = 2)
    {
        return str_repeat($string, $times);
    }
}

echo StringUtility::shout("asasassasas");
echo StringUtility::whisper("AAAAAAAAAAAAAAAAA");
echo StringUtility::repeat("UNO");
