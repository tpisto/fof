<?php

namespace FOF30\Tests\Stubs\Model\DataModel\Filter;

use FOF30\Model\DataModel\Filter\AbstractFilter;

class FilterStub extends AbstractFilter
{
    public function partial($value)
    {
        return '';
    }

    public function between($from, $to, $include = true)
    {
        return '';
    }

    public function outside($from, $to, $include = false)
    {
        return '';
    }

    public function interval($from, $interval)
    {
        return '';
    }
}