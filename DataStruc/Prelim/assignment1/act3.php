<?php
// Node class
class Node {
    public $data;
    public $next;

    public function __construct($data) {
        $this->data = $data;
        $this->next = null;
    }
}

// LinkedList class
class LinkedList {
    private $head;

    public function __construct() {
        $this->head = null;
    }

    // Add at end (like add in Java)
    public function add($data) {
        $newNode = new Node($data);
        if ($this->head == null) {
            $this->head = $newNode;
        } else {
            $temp = $this->head;
            while ($temp->next != null) {
                $temp = $temp->next;
            }
            $temp->next = $newNode;
        }
    }

    // Iterator-like traversal
    public function iterator() {
        $elements = [];
        $temp = $this->head;
        while ($temp != null) {
            $elements[] = $temp->data;
            $temp = $temp->next;
        }
        return $elements;
    }
}

// -------- Example Usage --------
$list = new LinkedList();
$list->add("Ravi");
$list->add("Vijay");
$list->add("Ravi");
$list->add("Mark");
$list->add("Ajay");

// Print elements (like Java's iterator)
foreach ($list->iterator() as $name) {
    echo $name . "<br>";
}
?>