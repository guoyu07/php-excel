<?php

namespace Excel\StileCella;

use Excel;

final class Percentuale implements Excel\StileCellaInterface
{
    public function decorateValue($value)
    {
        return $value;
    }

    public function styleCell(Excel\Writer\Format $format)
    {
        $format->setNumFormat('#,##0.000');
    }
}
