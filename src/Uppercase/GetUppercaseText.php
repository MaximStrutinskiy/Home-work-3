<?php

namespace Vendor\Render\Uppercase;

use Vendor\Render\AbstractGetName;
use Vendor\Render\ShowResultTrait;

class GetUppercaseText extends AbstractGetName
{
    public function renderResult()
    {
        $result = mb_strtoupper($this->studentName);

        return $result;
    }

    use ShowResultTrait;
}
