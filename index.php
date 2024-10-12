<?php
    // il nome della classe si scrive in Pascal case
    class Movie {
        // variabili o attributi 
        public $title;  // string
        public $year;   // int
        public $genres;   // array di string
        public $actors; // array di string
        public $vote;   // int
        public $director;  // string
        public $duration;  // int

        public function setTitle($title) {
            $this->title = $title;
        }


    }


    $LUltimoDeiSamurai = new Movie();
    $LUltimoDeiSamurai->setTitle('LUltimoDeiSamurai');
    $LUltimoDeiSamurai->year = 2003;
    $LUltimoDeiSamurai->genres = [
        'adventure',
        'dramatic',
        'historical',
        'action',
    ];
    $LUltimoDeiSamurai->actors = [
        'Tom Cruise',
        'Ken Watanabe',
        'Tony Goldwyn',
        'Shichinosuke Nakamura',
    ];
    $LUltimoDeiSamurai->vote = 5;
    $LUltimoDeiSamurai->director = 'Edward Zwick';
    $LUltimoDeiSamurai->duration = 150;

    var_dump( $LUltimoDeiSamurai);
    


 

    $Braveheart = new Movie();
    $Braveheart->title = 'Braveheart';
    $Braveheart->year = 1995;
    $Braveheart->genres = [
        'epic',
        'dramatic',
        'historical',
        'biographical',
    ];
    $Braveheart->actors = [
        'Mel Gibson',
        'Sophie Marceau',
        'Brendan Gleeson',
        'James Cosmo',
    ];
    $Braveheart->vote = 5;
    $Braveheart->director = 'Mel Gibson';
    $Braveheart->duration = 177;

    var_dump( $Braveheart);


?>

