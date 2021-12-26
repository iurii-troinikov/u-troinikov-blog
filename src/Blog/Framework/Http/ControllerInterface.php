<?php

declare(strict_types=1);

namespace Blog\Framework\Http;

interface ControllerInterface
{
    public function execute(): string;
}
