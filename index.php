<?php
include("src/Linkedlist.php");
include("src/Doublelinkedlist.php");
include("src/Queue.php");
include("src/Stack.php");



//Stack

$stackObj =  new Stack();
$stackObj->push(10);
$stackObj->push(12);
$stackObj->push(13);
$stackObj->push(14);
$stackObj->push(15);
$stackObj->push(20);
$stackObj->push(22);
$stackObj->push(23);
$stackObj->push(24);
$stackObj->pop();
$stackObj->print();

//Queue

$queue = new Queue(10);
$queue->enqueue(500);
$queue->enqueue(20);
$queue->enqueue(30);
$queue->printQueue();
print("Dequeued element: " . $queue->dequeue() . "\n");
$queue->printQueue();
$queue->enqueue(40);
$queue->enqueue(50);




//Linkedlist 

$my_list = new MyLinkedList();

$my_list->insertAtFirst(20);
$my_list->insertAtLast(40);
$my_list->printList();
$my_list->insertAtKthIndex(30, 1);
$my_list->printList();
$my_list->insertAtKthIndex(50, 3);
$my_list->printList();
$my_list->insertAtKthIndex(111, 3);
$my_list->printList();
$my_list->delete(111);
$my_list->printList();


//Doubly Linked List
$list=new mylinkedlist();
$list->insertfirst(50);
$list->insertfirst(20);
$list->insertfirst(40);
$list->insertfirst(30);

$list->insertlast(10);
$list->printlist();
echo"\n";
$list->deleteAtLast();
$list->printlist();
echo"\n";
$list->deleteAtFirst();
$list->printlist();
echo "\n";
$list->deleteAtGiven(2);
$list->printlist();


echo"\n";

