<?php
namespace laxertu\DataTree\xml;


/**
 * Class NodeList
 * @package laxertu\DataTree\xml
 * @see laxertu\DataTree\tests\NodeListTest
 */
class NodeList extends Node
{

    protected $isAList = true;

    final public function addNode(Node $node)
    {
        $this->addChild($node);
    }

}

