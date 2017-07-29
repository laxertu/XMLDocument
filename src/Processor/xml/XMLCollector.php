<?php
namespace laxertu\DataTree\Processor\xml;

use laxertu\DataTree\xml\Node;

class XMLCollector
{

    public function getNumNodeOccurrences($xml, Node $node)
    {

        $nodeName = $node->getPathWithSeparator('/');
        $parsed = new \SimpleXMLElement($xml);

        return count($parsed->xpath($nodeName));

    }
}
