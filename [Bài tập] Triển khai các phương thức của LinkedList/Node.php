<?php
class Node{
    public $object;
    public $next;
    public function __construct($data)
    {
        $this->data = $data;
        $this->next = NULL;
    }
    public function getData(){
        return $this->data;
    }
}