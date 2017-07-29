<?php
namespace laxertu\DataTree\xml\tests;
use laxertu\DataTree\DataTreeBase;
use laxertu\DataTree\xml\Document;

/**
 * @package DataTree\xml
 * @see DataTree\tests\GenericMessageTest
 */
class GenericMessage extends Document
{
    public function __construct($name)
    {
        $this->setName($name);
    }

    public function setChild(DataTreeBase $element, $pos)
    {
        return parent::setChild($element, $pos);
    }

    public function removeChild($pos)
    {
        return parent::removeChild($pos);
    }

}
