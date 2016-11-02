<?php

namespace Vendor\Render;

trait ShowResultTrait
{
    public function showResult($result)
    {
        echo 'Result = ', $result ,'<br/>';
    }
}
