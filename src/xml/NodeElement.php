<?php
namespace laxertu\DataTree\xml;

/**
 * Leaf classes.
 *
 * Class NodeElement
 * @package DataTree
 */
class NodeElement extends Node
{

    /**
     * @param $name
     * @param mixed $value
     */
    final public function __construct($name, $value = '')
    {
        $this->setName($name);
        $this->setValue($value);
    }

    final protected function setChild(Node $element, $pos)
    {
        throw new \Exception('NodeElement objects does not have children');
    }

    final protected function removeChild($pos)
    {
        throw new \Exception('NodeElement objects does not have children');
    }
}
