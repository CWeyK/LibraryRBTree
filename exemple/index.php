<?php
/**
 * @package library
 * @author Joseph LEMOINE <j.lemoine@ludi.cat>
 * @link https://ludi.cat
 */
require '../bootstrap.php';

$nodes = [
    45, 32, 70, 20, 60, 85, 10, 50, 65, 90
];
$tree = new Jihel\Library\RBTree\Tree();
foreach ($nodes as $id) {
    $node = new Jihel\Library\RBTree\Node($id, $id);
    $tree->insert($node);
}

$removeNode = [

];

foreach ($removeNode as $id) {
    $tree->remove($tree->find($id));
}

$visualisation = new Jihel\Library\RBTree\Visualisation\Html();
$visualisation->render($tree);
