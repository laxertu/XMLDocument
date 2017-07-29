<?php
namespace laxertu\DataTree\xml\tests;

use laxertu\DataTree\Processor\xml\XMLFormatter;
use laxertu\DataTree\Processor\xml\XMLCollector;

use laxertu\DataTree\xml\NodeList;
use laxertu\DataTree\xml\NodeElement;


class NodeListTest extends \PHPUnit_Framework_TestCase
{
    /** @var  NodeList */
    private $sut;

    public function setUp()
    {
        $this->sut = new NodeList();
    }



    public function testsetChild()
    {
        $collector = new XMLCollector();

        $sut = $this->sut;
        $sut->setName('a');

        $child = new NodeElement('b', 'c');
        $sut->addNode($child);
        $sut->addNode($child);

        $formatter = new XMLFormatter();
        $xml = $formatter->buildContent($sut);

        $this->assertEquals(1, $collector->getNumNodeOccurrences($xml, $sut));
        $this->assertEquals(2, $collector->getNumNodeOccurrences($xml, $child));

    }

}
