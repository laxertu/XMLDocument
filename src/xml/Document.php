<?php
namespace laxertu\DataTree\xml;



use laxertu\DataTree\Processor\xml\XMLDocumentInterface;

class Document extends Node implements XMLDocumentInterface
{

    private $version  = XMLConstants::VERSION_1_0;
    private $encoding = XMLConstants::UTF8;

    public function setEncoding($encodind)
    {
        $this->encoding = $encodind;
    }

    public function getEncoding()
    {
        return $this->encoding;
    }

    public function setVersion($version)
    {
        $this->version = $version;
    }

    public function getVersion()
    {
        return $this->version;
    }


}
