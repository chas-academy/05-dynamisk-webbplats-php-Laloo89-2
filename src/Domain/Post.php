<?php
 
 namespace Myblog\Domain;

 class Post {
    private $title;
    private $category;
    private $tag;

    public function getTitle(): string {
        return $this->title;
    }

    public function getCategory() {
        return $this->category;
    }

    public function getTag() {
        return $this->tag;
    }
}


?>