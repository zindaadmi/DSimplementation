<?php
include("src/Queue.php");


$queue = new Queue(10);
$queue->enqueue(500);
$queue->enqueue(20);
$queue->enqueue(30);
$queue->printQueue();
print("Dequeued element: " . $queue->dequeue() . "\n");
$queue->printQueue();
$queue->enqueue(40);
$queue->enqueue(50);