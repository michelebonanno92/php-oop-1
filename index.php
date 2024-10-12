<?php
    // il nome della classe si scrive in Pascal case
    class Movie {
        // variabili o attributi 
        private $title;  // string
        public $year;   // int
        public $genres;   // array di string
        public $actors; // array di string
        public $vote;   // int
        public $director;  // string
        public $duration;  // int

        // aggiunto un costruttore per non stampare uno ad uno le proprietà 
        function __construct($title,$year,$genres,$actors, $vote, $director, $duration  ) {
            $this->title = $title;
            $this->year = $year;
            $this->genres = $genres;
            $this->actors = $actors;
            $this->vote = $vote;
            $this->director = $director;
            $this->duration = $duration;
        }

        // aggiunta funzione getTitle per prendere il valore di title ora che è private
        public function getTitle() {
            return $this->title;
        }

        public function setTitle($title) {
            if (is_string($title) && strlen($title) > 3 ){
                $this->title = $title;
            }
            else {
                // lanciare un errore 
            }
        }
    }

    $LUltimoDeiSamurai = new Movie(
        "L'ultimo dei samurai",
        2003,
        [
            'adventure',
            'dramatic',
            'historical',
            'action',
        ], 
        [
            'Tom Cruise',
            'Ken Watanabe',
            'Tony Goldwyn',
            'Shichinosuke Nakamura',
        ],
        5,
        'Edward Zwick',
        150
        );

    var_dump($LUltimoDeiSamurai);
    var_dump($LUltimoDeiSamurai->getTitle());
    // $LUltimoDeiSamurai = new Movie();
    // $LUltimoDeiSamurai->setTitle("L'ultimo dei samurai");
    // $LUltimoDeiSamurai->year = 2003;
    // $LUltimoDeiSamurai->genres = [
    //     'adventure',
    //     'dramatic',
    //     'historical',
    //     'action',
    // ];
    // $LUltimoDeiSamurai->actors = [
    //     'Tom Cruise',
    //     'Ken Watanabe',
    //     'Tony Goldwyn',
    //     'Shichinosuke Nakamura',
    // ];
    // $LUltimoDeiSamurai->vote = 5;
    // $LUltimoDeiSamurai->director = 'Edward Zwick';
    // $LUltimoDeiSamurai->duration = 150;



    $Braveheart = new Movie(
        'Braveheart',
        1995,
        [
            'epic',
            'dramatic',
            'historical',
            'biographical',
        ], 
        [
            'Mel Gibson',
            'Sophie Marceau',
            'Brendan Gleeson',
            'James Cosmo',
         ],
        5,
        'Mel Gibson',
        177
        );

    var_dump($Braveheart);
    

    // $Braveheart = new Movie();
    // $Braveheart->setTitle('Braveheart');
    // $Braveheart->year = 1995;
    // $Braveheart->genres = [
    //     'epic',
    //     'dramatic',
    //     'historical',
    //     'biographical',
    // ];
    // $Braveheart->actors = [
    //     'Mel Gibson',
    //     'Sophie Marceau',
    //     'Brendan Gleeson',
    //     'James Cosmo',
    // ];
    // $Braveheart->vote = 5;
    // $Braveheart->director = 'Mel Gibson';
    // $Braveheart->duration = 177;



?>

