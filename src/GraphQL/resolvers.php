<?php

return [
    'Book'  => [
        'author' => function ($book, $args, $context) {
            return $context['loaders']['author']->load($book['author_id']);
        }
    ],'Mutation'=>[ 'addBook' => function ($root, $args, $context) {
        $title = $args['title'];
        $authorId = $args['author'];

      
        
    
        return [
            'id' => 1,
            'title' => $title,
            'author_id' => $authorId
                 
        ];
        ;
    },],
    
    'Query' => [
       
        
        
        'getBooks' => function ($root, $args, $context) {
            
    
           
          
        
            
      
            $books = [
                [
                    'id'        => 1,
                    'author_id' => 1
               
                ],
                [
                    'id'        => 2,
                    'author_id' =>1

                 
                ]
            ];
            
            
            return $books;
        }
    ]
];