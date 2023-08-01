<?php

return [
    'Book'  => [
        'author' => function ($book, $args, $context) {
            return $context['loaders']['author']->load($book['author_id']);
        }
    ],
    'Query' => [
        'getBooks' => function ($root, $args, $context) {
            
    
             $books = $context['db']->fetchAll("SELECT * FROM book");
          
            // $dbConfig = [
            //     'dbname'   => 'graphSQl',
            //     'host'     => 'localhost',
            //     'username' => 'tarek',
            //     'password' => 'tarek',
            //     'driver'   => 'pdo_mysql',
            // ];
            
            // try {
           
            //     $connection = \Doctrine\DBAL\DriverManager::getConnection($dbConfig);
            //     $connection->connect();
                
            //     return ["data" => "good", "connection" => "connected"];
            // } catch (\Doctrine\DBAL\Exception\ConnectionException $e) {
            //     return ["data" => "bad", "connection" => "not connected"];
            // }

           
            
          
      
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