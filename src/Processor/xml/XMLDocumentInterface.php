<?php
namespace laxertu\DataTree\Processor\xml;


interface XMLDocumentInterface extends XMLProcessableInterface
{
    /**
     * XML version: ex. 1.0
     * @return mixed
     */
    public function getVersion();
    /**
     * XML encoding: ex. UTF-8
     * @return mixed
     */
    public function getEncoding();
}
