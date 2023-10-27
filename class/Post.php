<?php
 class Post {
 	
 	private $conn;
 	private $user_obj;

     public function __construct ($conn, $user) {
        $this->conn = $conn;
        $this->user_obj = new User($conn, $user);
     }

     public function addNews($title, $content, $category, $status, $type, $tags, $image) {
            if (!empty($title) && !empty($content)) {
                    
            }            
     }
 


 }