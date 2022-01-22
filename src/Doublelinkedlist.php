<?php

class node{
    public $pre;
    public $data;
    public $next;
}
class mylinkedlist{
    public $head;

    public function __construct()
    {
        $this->head=null;
    }


    public function insertfirst($info){
        $temp=new node();
        $temp->pre=null;
        $temp->data=$info;
        $temp->next=null;
        if ($this->head != null) {
            $this->head->pre = $temp;
            $temp->next = $this->head;
            $this->head = $temp;
        }
        else {
            $this->head = $temp;
        }
    }





    public function insertlast($info){
        $temp=new node();
        $temp->data=$info;
        $temp->pre=null;
        $temp->next=null;
        if($this->head==null){
            $this->head=$temp;
        }
        else{
            $temp1=$this->head;
            while($temp1->next!=null){
                $temp1=$temp1->next;
            }
            $temp1->next=$temp;
            $temp->pre=$temp1;
        }
    }

    public function deleteAtLast(){
        if($this->head==null){
            echo "Alredy Empty";
        }
        else if($this->head->next==null){
            $this->head=null;
        }
        else{
            $node=$this->head;
            while($node->next->next!==null){
                $node=$node->next;
            }
            $node->next=null;
        }
    }

    public function deleteAtFirst(){
        if($this->head==null){
            echo "list already Empty";
        }
        else{
            $this->head=$this->head->next;
        }
    }

    public function deleteAtGiven($position){
        if($this->head!=null){
            if($position>=1 )
                $previous= $this->head;
                $target = $this->head;

                if($position==1){
                    $this->head=$this->head->next;
                    $this->head->pre=null;
                }
                for($i=1;$i<$position-1;$i++){
                    $previous=$target;
                    $target=$target->next;
                }

            $target->next=$target->next->next;
                $previous->next=$target->next;
                $target->pre=$previous;
            }
            else{
                echo "The possition is Incorrect you have only ";
            }
        }


    public function printlist(){
        $pri=$this->head;
        while($pri!=null){
            echo $pri->data." ";
            $pri=$pri->next;
        }
    }

}










