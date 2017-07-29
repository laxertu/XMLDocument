<?php
namespace laxertu\DataTree\xml;
use laxertu\DataTree\DataTreeBase;
use laxertu\DataTree\Processor\xml\XMLProcessableInterface;

/**
 * Defines an XML node
 * @package laxertu\DataTree\xml
 */
class Node extends DataTreeBase implements XMLProcessableInterface
{
    private $attrs = [];

    final public function getAttributes()
    {
        return $this->attrs;
    }

    final public function setAttributes(array $attributes)
    {
        $this->attrs = $attributes;
    }

    final public function setAttribute($name, $value)
    {
        $this->attrs[$name] = $value;
    }

}
