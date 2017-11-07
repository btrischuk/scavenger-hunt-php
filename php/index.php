<?php

$movies_1 = array(
  array(
     'ID'    => 1,
     'title' => 'Jurassic Park',
     'genre' => 'Adventure',
     'year'  => '1993',
     'stars' => array( 'Sam Neill', 'Laura Dern', 'Jeff Goldblum' )
  ),
  array(
     'ID'    => 2,
     'title' => 'Back to the Future',
     'genre' => 'Sci-fi',
     'year'  => '1985',
     'stars' => array( 'Michael J. Fox', 'Christopher Lloyd' )
  )
);

$movies_2 = array(
 array(
      'ID'    => 3,
      'title' => 'Die Hard',
      'genre' => 'Action',
      'year'  => '1988',
      'stars' => array( 'Bruce Willis', 'Alan Rickman' )
 ),
 array(
      'ID'    => 4,
      'title' => 'The Breakfast Club',
      'genre' => 'Drama',
      'year'  => '1985',
      'stars' => array( 'Emilio Estevez', 'Judd Nelson', 'Molly Ringwald' )
 ),
);


// challenge 1
// $all_movies = array_merge( $movies_1, $movies_2 );
// pr( $all_movies );
// print_r($all_movies);


//challenge 2
// $key_array = array_keys( $movies_1[1]);
// print_r( $key_array);


//challenge 3

// foreach ($array as $movies_1) {
//   echo $item['key_a'] . ', ' . $item['key_b'] . "\n";
// }

// foreach ($movies_1 as $star){
//   ['stars'];

// $array.sort($star);
// } 
// print_r($stars);


// Jims example answer------------
// foreach ($movies_1 as &$movie) {  //allows us to update gloabal '&'
//   sort( $movie['stars']);

// }
// print_r( $movies_1);


// array_multisort($movie['stars'], SORT_ASC, SORT_STRING);
// }
// print_r( $movies_1);


//challenge 4

// $all_movies = array_merge( $movies_1, $movies_2 );
// $key = array_search('1985', array_column( $all_movies, 'year'));
// print_r($key);

// // and to get arrau of all the keys..
// $all_keys = array();

// foreach ( $all_movies as $key => $value) {
//   if ($value['year'] === '1985') {
//     $all_keys[] = $key;
//   }
// }
//   print_r($all_keys);

//   foreach( $all_keys as $key){
//     print_r($all_movies[$key]);
//   }