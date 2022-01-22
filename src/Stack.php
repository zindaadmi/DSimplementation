<?php


class Stack{

    private  $stack;

    public function __construct()
    {
        $this->stack=[];
    }
    public function push($element){
        $this->stack[] = $element;
    }
    public function pop(){
        //unset($this->stack[0]);
        array_pop($this->stack);}

    public function print(){
        for($i=count($this->stack)-1;$i>=0;$i--){
            if($i==count($this->stack)-1){
                echo ("\nTop\n");
            }
            print("\n".$this->stack[$i]);
             if($i==0){
                 echo ("\nBottom\n");
            }


        }
    }


}