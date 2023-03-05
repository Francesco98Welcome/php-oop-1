<?php

class Movie
{
    private $title;
    public $year;
    public $genre;

    public function setTitle($title)
    {
        if (is_numeric($title)) {
            echo 'error';
        } else {
            $this->title = $title;
        }
    }

    function __construct($_year)
    {
        $this->year = $_year;
    }
}

$avatar = new Movie(2010);
$avatar->setTitle('AVATAR');
echo '<h2>Titolo del film:</h2>';
var_dump($avatar);
echo ' -- IL FILM SI CHIAMA: AVATAR';

echo '<br>';
echo '<br>';

$avatar = new Movie(2010);
echo '<h2>Anno di pubblicazione:</h2>';
var_dump($avatar);
echo '-- IL FILM É USCITO NEL: ';
echo $avatar->year;

echo '<br>';
echo '<br>';
echo '<hr>';

echo '<h1>Altro esempio</h1>';

class MovieTwo
{
    public $title;
    public $year;
    public $genre;

    function __construct($title, $year, $genre)
    {
        $this->title = $title;
        $this->year = $year;
        $this->genre = $genre;
    }

    function getDetails()
    {
        return "Titolo: " . $this->title . ", Anno di pubblicazione: " . $this->year . ", Genere: " . $this->genre . '<br>';
    }
}

$movie = new MovieTwo("Avatar", 2010, "Azione/Fantascienza");
echo $movie->getDetails();
