<?php
namespace laxertu\DataTree\tests\generic;
use laxertu\DataTree\Processor\xml\XMLProcessableInterface;
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

    public function setChild(XMLProcessableInterface $element, $pos)
    {
        return parent::setChild($element, $pos);
    }

    public function removeChild($pos)
    {
        return parent::removeChild($pos);
    }

}
