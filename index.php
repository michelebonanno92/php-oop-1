<?php

    class Movie {
        public $title;  // string
        public $year;   // int
        public $type;   // string
        public $actors; // array string
        public $vote;   // int
        public $director;  // string
        public $duration;  // int

    }


    $LUltimoDeiSamurai = new Movie();
    $LUltimoDeiSamurai->title = 'LUltimoDeiSamurai';
    $LUltimoDeiSamurai->year = 2003;
    $LUltimoDeiSamurai->type = [
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
    $Braveheart->type = [
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

