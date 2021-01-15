<?php

namespace ExampleComposerPackageTest\Tests;

use ExampleComposerPackage\SayHello;
use PHPUnit\Framework\TestCase;

/**
 * Class SayHelloTest
 * @package ExampleComposerPackageTest\Tests
 */
class SayHelloTest extends TestCase
{

    /**
     * SayHelloTesting
     */
    public function testHelloWorld()
    {
        $sayHello = new SayHello();
        $this->assertEquals("Hello World!", $sayHello->helloWorld());
    }
}