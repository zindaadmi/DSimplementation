<?php
include("src/Linkedlist.php");

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

