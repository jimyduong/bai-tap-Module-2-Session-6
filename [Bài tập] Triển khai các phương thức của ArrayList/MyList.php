<?php

class MyList
{
    const size = 0;
    const DEFAULT_CAPACITY = 10;
    private $ObjectElements;

    public function __construct()
    {
        $this->ObjectElements = [];
    }

    public function ArrayList($arr = "")
    {
        if (is_array($arr) == true)
            $this->ObjectElements = $arr;
        else
            $this->ObjectElements = array();
    }

    public function add($index, $value)
    {
        if ($this->isInteger($index)) {
            $newArrayList = array();

            for ($i = 0; $i < $this->size(); $i++) {
                if ($index != $i) {
                    array_push($newArrayList, $this->ObjectElements[$i]);
                } else {
                    array_push($newArrayList, $value);
                    array_push($newArrayList, $this->ObjectElements[$i]);
                }
            }
            $this->ObjectElements=$newArrayList;
        }
    }

    public function isInteger($toCheck)
    {
        return preg_match("/^[0-9]+$/", $toCheck);
    }

    public function size()
    {
        return count($this->ObjectElements);
    }

    public function get($index)
    {
        if ($this->isInteger($index) && $index < $this->size()) {
            return $this->ObjectElements[$index];

        } else {
            die("ERROR in ArrayList.get");
        }
    }

    public function remove($index)
    {
        if ($this->isInteger($index)) {
            $newArrayList = array();

            for ($i = 0; $i < $this->size(); $i++)
                if ($index != $i) $newArrayList[] = $this->get($i);

            $this->ObjectElements = $newArrayList;
        } else {
            die("ERROR in <ArrayList class='remove'></ArrayList> <br> Integer value required");
        }
    }

    public function CloneArr()
    {
        $MyList = $this->ObjectElements;
        return $MyList;
    }

    public function contains($obj)
    {
        for ($i = 0; $i < count($this->ObjectElements); $i++) {
            if ($obj == $this->ObjectElements[$i]) {
                echo "true";
                return true;
            } else {
                echo "false";
                return false;
            }
        }
    }

    public function indexOff($obj)
    {
        for ($i = 0; $i < count($this->ObjectElements); $i++) {
            if ($obj == $this->ObjectElements[$i]) {
                return $i;
            }
        }
        return -1;
    }

    public function addLast($element)
    {
        array_push($this->ObjectElements, $element);

    }
    public function clear(){
        $this->ObjectElements = array();
    }
}