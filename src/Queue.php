<?php

class Queue

{
    protected $queue;
    protected $front;
    protected $rear;
    protected $capacity;

    public function __construct($capacity = 10)
    {
        // initialize the queue with an empty array
        $this->queue = array();

        // queue can only contain this many elements
        $this->capacity = $capacity;

        // initialize front and rear to -1
        $this->front = -1;
        $this->rear = -1;
    }

    public function enqueue($element)
    {
        if ($this->rear == $this->capacity) {
            print("Queue is full!!!\n");
        } else {
            // when the queue is empty
            if ($this->front == -1) {
                // initialization required for first queue element
                $this->front = $this->rear = 0;
            }
            $this->queue[$this->rear] = $element;
            $this->rear++;
        }
    }

    public function dequeue()
    {
        if ($this->front == $this->rear) {
            print("Queue is empty!!!\n");
        } else {
            if ($this->rear - $this->front == 1) {
                $this->front = $this->rear = -1;
            } else {
                $this->rear--;
            }
            return array_shift($this->queue);
        }
    }

    public function peek()
    {
        return $this->queue[$this->front];
    }

    public function printQueue()
    {
        print_r($this->queue);
    }

}