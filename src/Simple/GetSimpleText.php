<?php

namespace Vendor\Render\Simple;

use Vendor\Render\AbstractGetName;
use Vendor\Render\ShowResultTrait;

class GetSimpleText extends AbstractGetName
{
    public function renderResult()
    {
        $result = $this->studentName;

        return $result;
    }

    use ShowResultTrait;
}
