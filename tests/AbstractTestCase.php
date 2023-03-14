<?php

namespace MetMax\Cbr\Tests;

use Dotenv\Dotenv;
use PHPUnit\Framework\TestCase;

abstract class AbstractTestCase extends TestCase
{
    public function __construct()
    {
        parent::__construct();

        $dotenv = Dotenv::createImmutable(__DIR__ . '/..');
        $dotenv->load();
    }
}
