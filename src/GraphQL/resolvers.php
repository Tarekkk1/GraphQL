<?php

return [
    'Book'  => [
        'author' => function ($book, $args, $context) {
            return $context['loaders']['author']->load($book['author_id']);
        }
    ],
    'Query' => [
        'addBook' => function ($root, $args, $context) {
            $title = $args['title'];
            $authorId = $args['author_id'];
    
            $context['db']->insert('book', [
                'title' => $title,
                'author_id' => $authorId,
            ]);
    
            $id = $context['db']->lastInsertId();
    
            $book = $context['db']->fetchAssoc("SELECT * FROM book WHERE id = ?", [$id]);
    
            return $book;
        },
        
        
        'getBooks' => function ($root, $args, $context) {
            
    
           
            //   $connect=mysqli_connect("127.0.0.1","tarek","tarek","graphql");
            // if (mysqli_connect_errno())
            // { 
            //     return [ ["id" => 1, "title" => "error", "author_id" => 1]];
            //     die("Failed to connect to MySQL: " . mysqli_connect_error()); }
            
            //     return ["data" => "good", "connection" => "connected"];

           
            
          
             $books = $context['db']->fetchAll("SELECT * FROM book");
          
            
      
        //     $books = [
        //         [
        //             'id'        => 1,
        //             'title'     => 'Harry Potter and the Chamber of Secrets',
        //             'author_id' => 1
        //         ],
        //         [
        //             'id'        => 2,
        //             'title'     => 'Jurassic Park',
        //             'author_id' => 2
        //         ]
        //     ];
            
            
            return $books;
        }
    ]
];