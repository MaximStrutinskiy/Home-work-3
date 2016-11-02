<?php

namespace Vendor\Render;

abstract class AbstractGetName implements GetNameInterface
{
    /**
     * @var string
     */
    protected $studentName;

    /**
     * Variable definition: $studentName.
     *
     * @param string $studentName
     */
    public function __construct($studentName)
    {
        $this->studentName = $studentName;
    }

    /**
     * Variable definition came from train ShowResultTrait : $result.
     *
     * @param string $result
     */
    public function showResult($result)
    {
    }
}
