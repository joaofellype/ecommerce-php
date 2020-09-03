<?php
include_once('Post.php');
 
class PostDAO {
 
    private $conn;
 
    public function __construct() {
        $registry = Registry::getInstance();
        $this->conn = $registry->get('Connection');
    }
 
    
 
    public function getAll() {
        $statement = $this->conn->query(
            'SELECT * FROM products'
        );
 
        return $this->processResults($statement);
    }
 
    private function processResults($statement) {
        $results = array();
 
        if($statement) {
            while($row = $statement->fetch(PDO::FETCH_OBJ)) {
                $post = new Post();
 
                $post->setId($row->post_id);
                $post->setTitle($row->name);
                $post->setContent($row->price);
 
                $results[] = $post;
            }
        }
 
        return $results;
    }
 
}
?>