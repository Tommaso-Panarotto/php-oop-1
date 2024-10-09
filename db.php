<?php

require __DIR__ . "/classes/Movie.php";
require __DIR__ . "/classes/Genres.php";

//Movie array
$movies = [];

//Instance a new movie
$deadpool = new Movie('Deadpool', 'Wade Wilson è un ex membro delle Forze Speciali diventato mercenario. Dopo un esperimento non autorizzato che gli conferisce il potere di guarigione veloce.', new Genres('Azione', 'Thriller'), '18+');
//save the new movie in the array
$movies[] = $deadpool;

//Instance a new movie
$notteAlMuseo = new Movie(
    'Una notte al museo',
    'A New York, Larry Daley è un padre divorziato che vive di precariato. La situazione poco stabile dell\'uomo non giova ai già difficili rapporti col figlio Nick, che ha dieci anni e vive con la madre.',
    new Genres()
);
//save the new movie in the array
$movies[] = $notteAlMuseo;

var_dump($deadpool, $notteAlMuseo);
