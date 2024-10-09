<?php

require __DIR__ . "/classes/Movie.php";

//Movie array
$movies = [];

//Instance a new movie
$deadpool = new Movie('Deadpool', 'Wade Wilson è un ex membro delle Forze Speciali diventato mercenario. Dopo un esperimento non autorizzato che gli conferisce il potere di guarigione veloce.', 'Azione', '18+');
//save the new movie in the array
$movies[] = $deadpool;

//Instance a new movie
$notteAlMuseo = new Movie(
    'Una notte al museo',
    'A New York, Larry Daley è un padre divorziato che vive di precariato. La situazione poco stabile dell\'uomo non giova ai già difficili rapporti col figlio Nick, che ha dieci anni e vive con la madre.',
    'Commedia'
);
//save the new movie in the array
$movies[] = $notteAlMuseo;
