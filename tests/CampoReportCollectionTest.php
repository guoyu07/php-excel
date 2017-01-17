<?php

declare(strict_types=1);

namespace ExcelTest;

use Excel;
use PHPUnit_Framework_TestCase;

final class CampoReportCollectionTest extends PHPUnit_Framework_TestCase
{
    protected function setUp()
    {
        $this->colonna = new Excel\Colonna('foo', 'Foo', 10, new Excel\StileCella\Testo());

        $this->collection = new Excel\ColonnaCollection(array(
            $this->colonna,
        ));
    }

    public function testFunzionalitaBase()
    {
        $this->assertArrayHasKey('foo', $this->collection);
        $this->assertSame($this->colonna, $this->collection['foo']);
    }

    public function testNonModificabileConSet()
    {
        $this->setExpectedException('Excel\Exception\RuntimeException');

        $this->collection['foo'] = 1;
    }

    public function testNonModificabileConUnset()
    {
        $this->setExpectedException('Excel\Exception\RuntimeException');

        unset($this->collection['foo']);
    }
}