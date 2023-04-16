<?php

// includo il file che contiene la definizione della classe Movie
require_once('Movie.php');

$movie1 = new Movie("LaCapaGira", 1999, "Alessandro Piva", "comico");
$movie2 = new Movie("Così fan tutte", 1992, "Tinto Brass", "erotico");
$movie3 = new Movie("Per un pugno di dollari", 1964, "Sergio Leone", "azione");

// stampo a schermo dei valori delle relative proprietà
echo $movie1->informazioni() . "<br>";
echo $movie2->informazioni() . "<br>";
echo $movie3->informazioni() . "<br>";

?>