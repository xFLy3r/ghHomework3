<?php

namespace Vendor\Generator;

abstract class Generator implements GeneratorInterface
{
    /**
     * return data
     */
    abstract public function getData();
}