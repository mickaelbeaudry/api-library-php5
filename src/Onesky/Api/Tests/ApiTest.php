<?php

namespace Onesky\Api\Tests;

use Onesky\Api\Client;

class ApiTest extends \PHPUnit_Framework_TestCase
{
    protected $api;

    public function setUp()
    {
        $this->api = new Client();
    }

    public function testThatApiClassInstantiatesProperly()
    {
        $this->assertInstanceOf('Onesky\Api\Client', $this->api);
    }
}
