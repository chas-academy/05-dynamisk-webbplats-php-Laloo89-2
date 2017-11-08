<?php
 
 namespace Myblog\Domain;

 class Post {
    private $title;
    private $start;
    private $end;

    public function getTitle(): string {
        return $this->title;
    }

    public function getStartDate() {
        return $this->start;
    }

    public function getEndDate() {
        return $this->end;
    }
}


?>