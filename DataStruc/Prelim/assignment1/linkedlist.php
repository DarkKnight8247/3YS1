<?php
//nag create syag class nga tawag node
class Node {
    public $data;
    public $link;

    public function __construct($data) {
        $this->data = $data;
        $this->link = null;
    }
}

//Linkedlist class
class LinkedList {
    public $head;

    //construct
    public function __construct() {
        $this->head = null;
    }

    public function addAtEnd($data) {
        $temp = new Node($data);
        $temp->data = $data;
        $temp->link = null;

        if ($this->head == null) {
            $this->head = $temp;
            return;
        }

        $ptr = $this->head;
        while ($ptr->link != null) {
            $ptr = $ptr->link;
        }

        $ptr->link = $temp;
    }

    public function display() {
        $ptr = $this->head;
        while ($ptr != null) {
            echo $ptr->data . ", ";
            $ptr = $ptr->link;
        }

        echo "->NULL\n";
    }
}

// Example usage
$list = new LinkedList();
$list->addAtEnd(10);
$list->addAtEnd(20);
$list->addAtEnd(30);
$list->addAtEnd(40);
$list->display();
?>
