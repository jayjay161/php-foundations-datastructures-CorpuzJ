<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
class Node {
    public $data;
    public $left;
    public $right;

    public function __construct($data) {
        $this->data = $data;
        $this->left = null;
        $this->right = null;
    }
}

class BinarySearchTree {
    public $root;

    public function __construct() {
        $this->root = null;
    }

    public function insert($data) {
        $this->root = $this->insertRec($this->root, $data);
    }

    private function insertRec($node, $data) {
        if ($node === null) return new Node($data);
        if ($data < $node->data)
            $node->left = $this->insertRec($node->left, $data);
        else
            $node->right = $this->insertRec($node->right, $data);
        return $node;
    }

    public function inorderTraversal($node) {
        if ($node) {
            $this->inorderTraversal($node->left);
            echo $node->data . "<br>";
            $this->inorderTraversal($node->right);
        }
    }

    public function search($node, $data) {
        if ($node === null) return false;
        if ($node->data === $data) return true;
        if ($data < $node->data)
            return $this->search($node->left, $data);
        else
            return $this->search($node->right, $data);
    }
}

$bst = new BinarySearchTree();
$books = ["Attack on Titan", "Berserk", "Death Note", "Naruto", "One Piece", "Vagabond"];
foreach ($books as $book) {
    $bst->insert($book);
}

echo "Inorder Traversal (Alphabetical):<br>";
$bst->inorderTraversal($bst->root);

echo "<br>Searching for 'Naruto': ";
echo $bst->search($bst->root, "Naruto") ? "Found!<br>" : "Not Found.<br>";

echo "Searching for 'Bleach': ";
echo $bst->search($bst->root, "Bleach") ? "Found!<br>" : "Not Found.<br>";
?>

</body>
</html>