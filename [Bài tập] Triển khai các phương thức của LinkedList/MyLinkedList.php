<?php

class MyLinkedList
{
    private $firstNode;
    private $lastNode;
    private $numNote;

    function __construct()
    {
        $this->firstNode = NULL;
        $this->lastNode = NULL;
        $this->numNote = 0;
    }

    public function insertFirst($data)
    {
        $link = new Node($data);
        $link->next = $this->firstNode;
        $this->firstNode = $link;

        /* If this is the first node inserted in the list
           then set the lastNode pointer to it.
        */
        if ($this->lastNode == NULL)
            $this->lastNode = $link;

        $this->numNote++;
    }

    public function insertLast($data)
    {
        if ($this->firstNode != NULL) {
            $link = new Node($data);
            $this->lastNode->next = $link;
            $link->next = NULL;
            $this->lastNode = $link;
            $this->numNote++;
        } else {
            $this->insertFirst($data);
        }
    }

    public function totalNodes()
    {
        return $this->numNote;
    }

    public function getList()
    {
        $listData = array();
        $current = $this->firstNode;

        while ($current != NULL) {
            array_push($listData, $current->getData());
            $current = $current->next;
        }
        return $listData;
    }
    public function getFirst(){
            return $this->firstNode->getData();
    }
    public function getLast(){
            return $this->lastNode->getData();
    }

    public function add($index, $element)
    {
        $i = 0;
        $current = $this->firstNode;
        while (++$i < $index) {
            $current = $current->next;
        }
        $link = new Node($element);
        $link->next = $current->next;
        $current->next = $link;
        $this->numNote++;
    }

    public function remove($index)
    {
        $i = 0;
        $current = $this->firstNode;
        while (++$i < $index) {
            $current = $current->next;
        }
        $current->next = $current->next->next;
        $this->numNote--;
    }

    public function removeObject($element)
    {
        $i = 0;
        $link = new Node($element);
        $current = $this->firstNode;
        while ($current != NULL) {
            if ($current->getData() == $link->getData()) {
                break;
            }
            $i++;
            $current = $current->next;
        }
        $this->remove($i);
    }

    public function contains($element)
    {
        $link = new Node($element);
        $current = $this->firstNode;
        while ($current != NULL) {
            if ($current->getData() == $link->getData()) {
                return "true";
            }
            $current=$current->next;
        }
        return "false";
    }
    public function indexOf($element){
        $i=0;
        $link = new Node($element);
        $current = $this->firstNode;
        while ($current != NULL) {
            if ($current->getData() == $link->getData()) {
                return $i;
            }
            $i++;
            $current=$current->next;
        }
        return "-1";
    }
    public function get($index){

        $i = 0;
        $current = $this->firstNode;
        while ($i++ < $index) {
            $current = $current->next;
        }
        return $current->getData();
    }
}