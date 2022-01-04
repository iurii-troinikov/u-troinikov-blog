<?php

declare(strict_types=1);

namespace Blog\Framework\Http;

use Blog\Framework\Http\Response\Raw;

interface ControllerInterface
{
    public function execute(): Raw;
}
