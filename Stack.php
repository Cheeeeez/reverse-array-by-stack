<?php
namespace reverse_array_by_stack;

class Stack
{
    protected $stack;

    public function __construct()
    {
        $this->stack = [];
    }

    public function push($item)
    {
        array_push($this->stack, $item);
    }

    public function pop()
    {
        if ($this->isEmpty()) {
            throw new \RuntimeException('Stack is empty');
        } else {
            return array_pop($this->stack);
        }
    }

    public function isEmpty() {
        return empty($this->stack);
    }
}