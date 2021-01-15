<?php

namespace ExampleComposerPackageTest\Tests;

use ExampleComposerPackage\LookWorld;
use PHPUnit\Framework\TestCase;

/**
 * Class LookWorldTest
 * @package ExampleComposerPackageTest\Tests
 */
class LookWorldTest extends TestCase
{
    /**
     * LookBeijingTesting
     */
    public function testLookBeiJing()
    {
        $lookBeiJIng = new LookWorld();
        $this->assertEquals("北京你好!", $lookBeiJIng->lookBeiJing());
    }
}
