<?php

declare(strict_types=1);

namespace Blog\Framework\Database\Adapter;

interface AdapterInterface
{
    public function getConnection();
}
