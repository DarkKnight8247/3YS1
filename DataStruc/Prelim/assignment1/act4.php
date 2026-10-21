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

    // Add element at the end
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

    // Traverse normally (forward)
    public function iterator() {
        $elements = [];
        $temp = $this->head;
        while ($temp != null) {
            $elements[] = $temp->data;
            $temp = $temp->next;
        }
        return $elements;
    }

    // Traverse in reverse (like descendingIterator in Java)
    public function reverseIterator() {
        $elements = $this->iterator(); // get all elements
        return array_reverse($elements); // reverse order
    }
}

// -------- Example Usage --------
$list = new LinkedList();
$list->add("Maganda");
$list->add("All");
$list->add("Sana");

// Print in reverse order
foreach ($list->reverseIterator() as $name) {
    echo $name . "<br>";
}
?>