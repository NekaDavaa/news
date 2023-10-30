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
                    $title = strtoupper($title);
                $title = mysqli_real_escape_string($this->conn, $title);
                $content = nl2br($content);
                $content = mysqli_real_escape_string($this->conn, $content);
                $added_by = $this->user_obj->getUserName();
                $sql = mysqli_query($this->conn, "SELECT id FROM category WHERE cat_title='$category'");
                $row = mysqli_fetch_array($sql);
                $cat_id = $row['id'];
                $date = date("Y-m-d H:i:s");

                $query = mysqli_query($this->conn, "INSERT INTO news VALUES('','$title','$content','$added_by','$category','$cat_id','$image','$date','$tags','$status','$type','0','0','0');");
            }            
     }
 


 }