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
     *
     * @param string $args
     */
    public function testHelloWorld($args = "Hello World!")
    {
        $sayHello = new SayHello();
        $this->assertEquals($args, $sayHello->helloWorld());
    }
}