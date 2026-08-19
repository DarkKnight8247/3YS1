<?php
//Define a Tree Node Class
class Node {
    public $value;
    public $children = [];

    public function __construct($value) {
        $this->value = $value;
    }

    public function addChild(Node $child) {
        $this->children[] = $child;
    }
}

//Pre-order Traversal
function traverse($node) {
    echo $node->value . "<br>";
    foreach ($node->children as $child) {
        traverse($child);
    }
}

//create nodes
$root = new Node(1);
$node2 = new Node(2);
$node3 = new Node(3);
$node4 = new Node(4);
$node5a = new Node(5);
$node5b = new Node(5);

//build tree
$root->addChild($node2);
$root->addChild($node5a);
$node2->addChild($node3);
$node2->addChild($node4);
$node5a->addChild($node5b);

//traverse tree
traverse($root);
?>