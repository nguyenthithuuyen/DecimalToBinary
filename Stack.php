<?php


class Stack
{
    protected $stack;
    protected $size;

    public function __construct()
    {
        $this->stack = [];
        $this->size = 0;
    }

    public function push($item)
    {
        array_push($this->stack, $item);
        $this->size++;
    }

    public function pop()
    {
        if ($this->isEmpty()) {
            echo "Stack is empty";
        } else return array_pop($this->stack);
    }

    public function isEmpty()
    {
        return empty($this->stack);
    }
}