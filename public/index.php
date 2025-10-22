<?php
       $books = [
        // "Do Androids Dream of Electric Sheep"
        // ,"The Longoliers"
        // ,"Hail Mary"
        // ,"Animal Farm"
        [
            'name' => 'Do Androids Dream of Electric Sheep',
            'author' => 'Philip K. Dick',
            'url' => 'http://example.com',
        ],
         [
            'name' => 'The Longoliers',
            'author' => 'Stephen King',
            'url' => 'http://example.com',
         ],
          [
            'name' => 'Hail Mary',
            'author' => 'Andy Weir',
            'url' => 'http://example.com',
          ],
           [
            'name' => 'Animal Farm',
            'author' => 'George Orwell',
            'url' => 'http://example.com',
        ]
       ];

    //  function filter($items , $fn) {
    //       $filteredItems = [];
          
    //       foreach ($items as $item) {
    //         if ($fn($item)) {
    //           $filteredItems[] = $item;
    //         }
    //       } 

    //       return $filteredItems;
    //    };

       $filteredBooks = array_filter($books , function($book){
        return $book['name'] === 'Hail Mary';
        
       });

      require 'index.view.php'; 
    //    function filterByYear($books , $year) {
    //       $filteredBooks = [];
          
    //       foreach ($books as $book) {
    //         if ($book['releaseYear'] === $year) {
    //           $filteredBooks[] = $book;
    //         }
    //       } 

    //       return $filteredBooks;
    //    }
       
    ?>